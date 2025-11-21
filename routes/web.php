<?php

use App\Http\Controllers\CmsController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

// Gateway page - main entry point (no cache)
Route::get('/', [PersonaController::class, 'index'])
    ->name('home');

// Persona content endpoint for AJAX requests (no cache)
Route::get('/persona/{persona}', [PersonaController::class, 'content'])
    ->name('persona.content');

// Resume/Overview page (no cache)
Route::get('/resume', [PersonaController::class, 'resume'])
    ->name('resume');

// Full photography gallery (by theme) under creative persona
Route::get('/persona/creative/gallery', [PersonaController::class, 'gallery'])
    ->name('persona.creative.gallery');

// Dedicated portfolio page for Kopinaren
Route::get('/portfolio/kopinaren', function () {
    return view('portfolio.kopinaren');
})->name('portfolio.kopinaren');

// Dedicated portfolio page for Bakso Boss 88
Route::get('/portfolio/bakso-boss', function () {
    return view('portfolio.bakso-boss');
})->name('portfolio.bakso-boss');

// Additional static pages (no cache)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// CMS Routes (Basic functionality without authentication for simplicity)
Route::prefix('cms')->group(function () {
    Route::get('/', [CmsController::class, 'dashboard'])->name('cms.dashboard');
    Route::post('/update-site', [CmsController::class, 'updateSiteSettings'])->name('cms.update-site');
    Route::post('/update-persona/{persona}', [CmsController::class, 'updatePersonaSettings'])->name('cms.update-persona');
    Route::post('/add-project/{persona}', [CmsController::class, 'addProject'])->name('cms.add-project');
    Route::post('/update-project/{persona}/{index}', [CmsController::class, 'updateProject'])->name('cms.update-project');
    Route::post('/remove-project/{persona}/{index}', [CmsController::class, 'removeProject'])->name('cms.remove-project');
    Route::post('/clear-cache', [CmsController::class, 'clearCache'])->name('cms.clear-cache');
});
