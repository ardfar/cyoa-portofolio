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
        
        // Admin Dashboard (Phase 2)
        Route::get('/', function () {
            return "Admin Dashboard"; // Placeholder for Admin\DashboardController@index
        })->name('admin.dashboard');
    });
});
