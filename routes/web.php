<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shopping', [App\Http\Controllers\ShopController::class, 'index'])->name('shopping');

Route::get('/contact', function () {
    return view('contact');
});

