<?php

// Debug widget issue
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

use Illuminate\Support\Facades\DB;
use App\Models\Visit;

echo "<h1>Filament Widget Debug</h1>";

try {
    echo "<h2>1. Testing Database Connection</h2>";
    DB::connection()->getPdo();
    echo "✓ Database connected<br>";

    echo "<h2>2. Testing Visit Model</h2>";
    $visits = DB::table('visits')->count();
    echo "✓ Visit table exists, count: {$visits}<br>";

    echo "<h2>3. Testing Articles</h2>";
    $articles = DB::table('articles')->count();
    echo "✓ Articles table exists, count: {$articles}<br>";

    echo "<h2>4. Testing Widget Queries</h2>";

    // Test StatsOverview queries
    echo "Testing StatsOverview queries:<br>";
    $today = Visit::where('visit_date', today())->distinct('ip_address')->count();
    echo "✓ Today visits: {$today}<br>";

    $week = Visit::where('visit_date', '>=', now()->startOfWeek())->distinct('ip_address')->count();
    echo "✓ Week visits: {$week}<br>";

    $month = Visit::where('visit_date', '>=', now()->startOfMonth())->distinct('ip_address')->count();
    echo "✓ Month visits: {$month}<br>";

    $total = Visit::distinct('ip_address')->count();
    echo "✓ Total visits: {$total}<br>";

    echo "<h2>5. Testing ArticleRanks Query</h2>";
    $top = DB::table('articles')
        ->select('title', 'views')
        ->orderByDesc('views')
        ->limit(10)
        ->get();
    echo "✓ Top articles: " . $top->count() . "<br>";

    echo "<h2>6. Widgets Status</h2>";
    echo "✓ All widget queries working<br>";
} catch (Exception $e) {
    echo "<span style='color:red'>✗ Error: " . $e->getMessage() . "</span><br>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}

echo "<p><strong>Delete this file after debugging!</strong></p>";
