<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

// Public routes placeholder
Route::get('/', function () {
    return view('welcome');
});

// Admin Auth Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'authenticate'])->middleware('throttle:5,1');
    
    Route::middleware('auth:admin')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        
        // Admin Dashboard
        Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        
        // Projects CRUD
        Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class)->names('admin.projects');
        
        // Experiences CRUD
        Route::resource('experiences', \App\Http\Controllers\Admin\ExperienceController::class)->names('admin.experiences');
        
        // Skills & Certifications CRUD
        Route::resource('skills', \App\Http\Controllers\Admin\SkillController::class)->names('admin.skills');
        Route::resource('skills.certifications', \App\Http\Controllers\Admin\CertificationController::class)->shallow()->names('admin.certifications');
        
        // Gallery CRUD
        Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class)->names('admin.gallery');
        Route::post('gallery/{gallery}/photos', [\App\Http\Controllers\Admin\GalleryController::class, 'uploadPhotos'])->name('admin.gallery.photos.upload');
        Route::delete('gallery/photos/{photo}', [\App\Http\Controllers\Admin\GalleryController::class, 'destroyPhoto'])->name('admin.gallery.photos.destroy');
        Route::patch('gallery/{gallery}/photos/reorder', [\App\Http\Controllers\Admin\GalleryController::class, 'reorderPhotos'])->name('admin.gallery.photos.reorder');
        
        // Settings
        Route::get('settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin.settings.index');
        Route::post('settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin.settings.update');
    });
});
