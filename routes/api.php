<?php

use App\Http\Controllers\ApiAuthController;
use Illuminate\Support\Facades\Route;

Route::post('/mobile/google-login', [
    ApiAuthController::class,
    'googleLogin'
]);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/me', [
        ApiAuthController::class,
        'me'
    ]);

    Route::post('/logout', [
        ApiAuthController::class,
        'logout'
    ]);
});
