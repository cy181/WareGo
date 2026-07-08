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

// CATEGORIES
Route::get('/food', [CategoryController::class, 'food'])->name('food');
Route::get('/electronic', [CategoryController::class, 'electronic'])->name('electronic');
Route::get('/literature', [CategoryController::class, 'literature'])->name('literature');
Route::get('/tool', [CategoryController::class, 'tool'])->name('tool');
Route::get('/furniture', [CategoryController::class, 'furniture'])->name('furniture');
Route::get('/beauty-product', [CategoryController::class, 'beautyProduct'])->name('beauty-product');
Route::get('/health-product', [CategoryController::class, 'healthProduct'])->name('health-product');
Route::get('/household', [CategoryController::class, 'household'])->name('household');