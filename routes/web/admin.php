<?php

use Illuminate\Support\Facades\Route;
//admin routes
Route::get('/index', function () {
    return view('admin.dashboard');
})->name('admin');
