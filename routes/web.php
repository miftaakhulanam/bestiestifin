<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\KonsepController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Contact Page
Route::get('/kontak', function () {
    return view('frontend.contact');
})->name('contact');

// Articles Routes (SEO: slug)
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

// Konsep STIFIn Routes (DB-driven by slug)
Route::prefix('konsep')->group(function () {
    Route::get('/', [KonsepController::class, 'index'])->name('konsep.index');
    // General slug route
    Route::get('/{slug}', [KonsepController::class, 'show'])->name('konsep.show');
    // Keep existing named routes for menus, pointing to show
    Route::get('/sensing', fn() => app(KonsepController::class)->show('sensing'))->name('konsep.sensing');
    Route::get('/thinking', fn() => app(KonsepController::class)->show('thinking'))->name('konsep.thinking');
    Route::get('/intuiting', fn() => app(KonsepController::class)->show('intuiting'))->name('konsep.intuiting');
    Route::get('/feeling', fn() => app(KonsepController::class)->show('feeling'))->name('konsep.feeling');
    Route::get('/instinct', fn() => app(KonsepController::class)->show('instinct'))->name('konsep.instinct');
});

// Gallery Routes
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
