<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\web\admin\DriverController;
use App\Http\Controllers\web\admin\RoleController;
use App\Http\Controllers\web\admin\UserController;

//admin routes


Auth::Routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('drivers', DriverController::class);
});
