<?php

// Debug script for 403 Forbidden error - place this in public/debug-403.php
// Access via: https://bestiestifin.com/debug-403.php

echo "<h1>403 Forbidden Debug Information</h1>";

// Check if Laravel is working
echo "<h2>1. Laravel Status</h2>";
try {
    require_once __DIR__ . '/../vendor/autoload.php';
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    echo "✓ Laravel loaded successfully<br>";
} catch (Exception $e) {
    echo "✗ Laravel error: " . $e->getMessage() . "<br>";
    exit;
}

// Check file permissions
echo "<h2>2. File Permissions</h2>";
$directories = [
    'storage',
    'storage/app',
    'storage/framework',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
    'bootstrap/cache'
];

foreach ($directories as $dir) {
    $path = __DIR__ . '/../' . $dir;
    if (is_dir($path)) {
        $perms = substr(sprintf('%o', fileperms($path)), -4);
        $writable = is_writable($path) ? '✓' : '✗';
        echo "{$writable} {$dir}: {$perms}<br>";
    } else {
        echo "✗ {$dir}: Directory not found<br>";
    }
}

// Check .htaccess
echo "<h2>3. .htaccess File</h2>";
$htaccessPath = __DIR__ . '/.htaccess';
if (file_exists($htaccessPath)) {
    echo "✓ .htaccess exists<br>";
    $content = file_get_contents($htaccessPath);
    if (strpos($content, 'RewriteEngine On') !== false) {
        echo "✓ RewriteEngine is enabled<br>";
    } else {
        echo "✗ RewriteEngine not found<br>";
    }
} else {
    echo "✗ .htaccess not found<br>";
}

// Check admin user
echo "<h2>4. Admin User</h2>";
try {
    $pdo = new PDO(
        'mysql:host=' . env('DB_HOST', 'localhost') . ';dbname=' . env('DB_DATABASE'),
        env('DB_USERNAME'),
        env('DB_PASSWORD')
    );

    $stmt = $pdo->query("SELECT id, name, email FROM users WHERE email LIKE '%admin%'");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($users) > 0) {
        echo "✓ Admin users found:<br>";
        foreach ($users as $user) {
            echo "- ID: {$user['id']}, Name: {$user['name']}, Email: {$user['email']}<br>";
        }
    } else {
        echo "✗ No admin users found<br>";
    }
} catch (PDOException $e) {
    echo "✗ Database error: " . $e->getMessage() . "<br>";
}

// Check Filament routes
echo "<h2>5. Filament Routes Test</h2>";
$filamentUrls = [
    '/admin',
    '/admin/login',
    '/admin/dashboard'
];

foreach ($filamentUrls as $url) {
    $fullUrl = 'https://bestiestifin.com' . $url;
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => 10,
            'ignore_errors' => true
        ]
    ]);

    $headers = @get_headers($fullUrl, 1, $context);
    if ($headers) {
        $statusCode = $headers[0];
        if (strpos($statusCode, '200') !== false) {
            echo "✓ {$url} - OK (200)<br>";
        } elseif (strpos($statusCode, '302') !== false) {
            echo "⚠ {$url} - Redirect (302)<br>";
        } elseif (strpos($statusCode, '403') !== false) {
            echo "✗ {$url} - Forbidden (403)<br>";
        } elseif (strpos($statusCode, '404') !== false) {
            echo "✗ {$url} - Not Found (404)<br>";
        } else {
            echo "? {$url} - {$statusCode}<br>";
        }
    } else {
        echo "✗ {$url} - Connection failed<br>";
    }
}

// Check environment
echo "<h2>6. Environment</h2>";
echo "APP_ENV: " . env('APP_ENV', 'not set') . "<br>";
echo "APP_DEBUG: " . (env('APP_DEBUG') ? 'true' : 'false') . "<br>";
echo "APP_URL: " . env('APP_URL', 'not set') . "<br>";

// Check web server info
echo "<h2>7. Web Server Info</h2>";
echo "Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Unknown') . "<br>";
echo "Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'Unknown') . "<br>";
echo "Script Filename: " . ($_SERVER['SCRIPT_FILENAME'] ?? 'Unknown') . "<br>";

echo "<h2>Debug Complete</h2>";
echo "<p><strong>Note:</strong> Delete this file after debugging!</p>";
