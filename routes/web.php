<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});

Route::view("/", 'home')->name("home");
Route::view("/home", 'home');
Route::view("/about", 'about')->name("about");
Route::view("/cart", 'cart')->name("cart");
Route::view("/profile", 'profile')->name("profile");

Route::get('/food', [CategoryController::class, 'food'])->name('food');
Route::get('/electronic', [CategoryController::class, 'electronic'])->name('electronic');
Route::get('/literature', [CategoryController::class, 'literature'])->name('literature');
Route::get('/tool', [CategoryController::class, 'tool'])->name('tool');
Route::get('/furniture', [CategoryController::class, 'furniture'])->name('furniture');
Route::get('/beauty-product', [CategoryController::class, 'beautyProduct'])->name('beauty-product');
Route::get('/health-product', [CategoryController::class, 'healthProduct'])->name('health-product');
Route::get('/household', [CategoryController::class, 'household'])->name('household');