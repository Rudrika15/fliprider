<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('visitor.home');
})->name('home');

//route for about
Route::get('/about', function () {
    return view('visitor.about');
})->name('about');

//route for contact
Route::get('/contact', function () {
    return view('visitor.contact');
})->name('contact');

//route for services
Route::get('/services', function () {
    return view('visitor.services');
})->name('services');

//route for features
Route::get('/features', function () {
    return view('visitor.features');
})->name('features');

//route for pricing
Route::get('/pricing', function () {
    return view('visitor.pricing');
})->name('pricing');

// route for contact
Route::get('/contact', function () {
    return view('visitor.contact');
})->name('contact');

// route for press
Route::get('/press', function () {
    return view('visitor.press');
})->name('press');
