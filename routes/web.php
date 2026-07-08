<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/home', [HomeController::class, 'index']);

Route::get('/about-us', [AboutController::class, 'about'])->name('about');

Route::get('/search', [CategoryController::class, 'search'])->name('search');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::get('/category/food', [CategoryController::class, 'index'])->name('food');
Route::get('/category/electronic', [CategoryController::class, 'electronic'])->name('electronic');
Route::get('/category/literature', [CategoryController::class, 'literature'])->name('literature');
Route::get('/category/tool', [CategoryController::class, 'tool'])->name('tool');
Route::get('/category/furniture', [CategoryController::class, 'furniture'])->name('furniture');
Route::get('/category/beauty-product', [CategoryController::class, 'beautyProduct'])->name('beauty-product');
Route::get('/category/health-product', [CategoryController::class, 'healthProduct'])->name('health-product');
Route::get('/category/household', [CategoryController::class, 'household'])->name('household');
