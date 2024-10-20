<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('products', ProductController::class);

// Jika Anda masih ingin mempertahankan route home yang lama
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');