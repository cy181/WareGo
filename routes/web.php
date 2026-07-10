<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

// HOME //
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/home', [HomeController::class, 'index']);

// ABOUT //
Route::get('/about-us', [AboutController::class, 'about'])->name('about');

// SEARCH FUNCTION //
Route::get('/search', [CategoryController::class, 'search'])->name('search');

// CART //
Route::get('/cart', [CartController::class, 'cart'])->name('cart');

// CATEGORIES NAVIGATION //
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');