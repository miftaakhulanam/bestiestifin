<?php

// Minimal test to check if Filament is working at all
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

echo "<h1>Filament Basic Test</h1>";

try {
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    echo "✓ Laravel bootstrapped<br>";

    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    echo "✓ HTTP Kernel loaded<br>";

    // Test database
    $pdo = DB::connection()->getPdo();
    echo "✓ Database connected<br>";

    // Test user
    $user = App\Models\User::first();
    if ($user) {
        echo "✓ User found: {$user->email}<br>";

        // Test canAccessPanel
        $panel = app(Filament\Panel::class);
        if (method_exists($user, 'canAccessPanel')) {
            $canAccess = $user->canAccessPanel($panel);
            echo "✓ canAccessPanel method exists, result: " . ($canAccess ? 'true' : 'false') . "<br>";
        } else {
            echo "✗ canAccessPanel method NOT found<br>";
        }

        // Check if implements FilamentUser
        if ($user instanceof Filament\Models\Contracts\FilamentUser) {
            echo "✓ User implements FilamentUser interface<br>";
        } else {
            echo "✗ User does NOT implement FilamentUser interface<br>";
        }
    } else {
        echo "✗ No users found<br>";
    }

    // Test Filament panel provider
    try {
        $panelProvider = app(App\Providers\Filament\AdminPanelProvider::class);
        echo "✓ AdminPanelProvider loaded<br>";
    } catch (Exception $e) {
        echo "✗ AdminPanelProvider error: " . $e->getMessage() . "<br>";
    }

    echo "<h2>All tests completed</h2>";
} catch (Exception $e) {
    echo "<span style='color:red'>✗ Error: " . $e->getMessage() . "</span><br>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}

echo "<p><strong>Delete this file after debugging!</strong></p>";
