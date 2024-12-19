<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\web\admin\RoleController;
use App\Http\Controllers\web\admin\UserController;

//admin routes
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Auth::Routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
