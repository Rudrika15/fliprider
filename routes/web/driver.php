<?php

use App\Http\Controllers\web\driver\DriverController;
use Illuminate\Support\Facades\Route;

Route::post('fare', [DriverController::class, 'fare'])->name('fare');
Route::get('/request', [DriverController::class, 'request'])->name('request');
