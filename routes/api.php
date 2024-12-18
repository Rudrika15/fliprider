<?php

use App\Http\Controllers\api\UserController;
use App\Http\Controllers\auth\CommonController;
use App\Http\Controllers\DriverController;
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
            Route::post('add-driver', [DriverController::class, 'addDriver']);
            Route::post('add-vehicle', [DriverController::class, 'addVehicle']);
        });
        // admin routes
        Route::prefix('admin')->group(function () {
            Route::get('/users', [UserController::class, 'index']);
        });
        // rider routes
        Route::prefix('rider')->group(function () {
            // add driver side routes
        });
    });
});
