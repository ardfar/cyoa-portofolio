<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CmsController;
use Illuminate\Support\Facades\Route;

// Gateway page - main entry point with caching
Route::get('/', [PersonaController::class, 'index'])
    ->name('home')
    ->middleware('cache.headers:public;max_age=3600');

// Persona content endpoint for AJAX requests with caching
Route::get('/persona/{persona}', [PersonaController::class, 'content'])
    ->name('persona.content')
    ->middleware('cache.headers:public;max_age=3600');

// Resume/Overview page with caching
Route::get('/resume', [PersonaController::class, 'resume'])
    ->name('resume')
    ->middleware('cache.headers:public;max_age=3600');

// Additional static pages with caching
Route::get('/contact', function () {
    return view('contact');
})->name('contact')
  ->middleware('cache.headers:public;max_age=3600');

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
