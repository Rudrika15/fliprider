<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//visitor routes
require __DIR__ . '/web/visitor.php';
require __DIR__ . '/web/admin.php';
require __DIR__ . '/web/driver.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
