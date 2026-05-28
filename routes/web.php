<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        return view('welcome');
    } catch (\Exception $e) {
        return view('welcome');
    }
});

Route::get('/auth/google', [AuthController::class, 'redirect']);
Route::get('/auth/google/callback', [AuthController::class, 'callback']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Route::get('/users', [UserController::class, 'index']);
    // Route::get('/users/data', [UserController::class, 'data']);
    // Route::get('/users/{id}', [UserController::class, 'show']);
    // Route::post('/users/store', [UserController::class, 'store']);
    // Route::post('/users/update/{id}', [UserController::class, 'update']);
    // Route::post('/users/delete/{id}', [UserController::class, 'deactivate']);
    // Route::post('/users/restore/{id}', [UserController::class, 'restore']);
    // Route::delete('/users/destroy/{id}', [UserController::class, 'destroy']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile', [ProfileController::class, 'update']);
    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('password.update');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginCheck']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');
});
