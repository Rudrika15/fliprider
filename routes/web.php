<?php

use Illuminate\Support\Facades\Route;

//visitor routes
require __DIR__ . '/web/visitor.php';
require __DIR__ . '/web/admin.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
