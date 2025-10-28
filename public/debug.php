<?php

// Debug script for production - place this in public/debug.php
// Access via: https://bestiestifin.com/debug.php

echo "<h1>Bestie STIFIn Debug Information</h1>";

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

// Check database connection
echo "<h2>2. Database Connection</h2>";
try {
    $pdo = new PDO(
        'mysql:host=' . env('DB_HOST', 'localhost') . ';dbname=' . env('DB_DATABASE'),
        env('DB_USERNAME'),
        env('DB_PASSWORD')
    );
    echo "✓ Database connected successfully<br>";
} catch (PDOException $e) {
    echo "✗ Database error: " . $e->getMessage() . "<br>";
}

// Check concepts table
echo "<h2>3. Concepts Table</h2>";
try {
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM concepts");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "✓ Concepts table exists<br>";
    echo "Concepts count: " . $result['count'] . "<br>";

    if ($result['count'] > 0) {
        $stmt = $pdo->query("SELECT slug, title FROM concepts");
        $concepts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "Available concepts:<br>";
        foreach ($concepts as $concept) {
            echo "- " . $concept['slug'] . ": " . $concept['title'] . "<br>";
        }
    } else {
        echo "⚠ No concepts found in database!<br>";
    }
} catch (PDOException $e) {
    echo "✗ Concepts table error: " . $e->getMessage() . "<br>";
}

// Check routes
echo "<h2>4. Route Test</h2>";
echo "Testing concept URLs:<br>";
$conceptUrls = [
    '/konsep',
    '/konsep/thinking',
    '/konsep/sensing',
    '/konsep/intuiting',
    '/konsep/feeling',
    '/konsep/instinct'
];

foreach ($conceptUrls as $url) {
    $fullUrl = 'https://bestiestifin.com' . $url;
    $headers = @get_headers($fullUrl);
    if ($headers && strpos($headers[0], '200') !== false) {
        echo "✓ " . $url . " - OK<br>";
    } else {
        echo "✗ " . $url . " - Error<br>";
    }
}

echo "<h2>5. Environment</h2>";
echo "APP_ENV: " . env('APP_ENV', 'not set') . "<br>";
echo "APP_DEBUG: " . (env('APP_DEBUG') ? 'true' : 'false') . "<br>";
echo "APP_URL: " . env('APP_URL', 'not set') . "<br>";

echo "<h2>Debug Complete</h2>";
echo "<p><strong>Note:</strong> Delete this file after debugging!</p>";
