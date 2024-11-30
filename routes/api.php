<?php

use App\Http\Controllers\auth\CommonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {


        Route::post('/register', [CommonController::class, 'register']);
        Route::post('/login', [CommonController::class, 'login']);
    });

    Route::middleware('auth:sanctum')->group(function () {
        //driver routes
        Route::prefix('driver')->group(function () {
            // add driver side routes
        });
        // admin routes
        Route::prefix('admin')->group(function () {
            // add driver side routes
        });
        // rider routes
        Route::prefix('rider')->group(function () {
            // add driver side routes
        });
    });
});
