<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/home', [HomeController::class, 'index']);

Route::get('/about-us', [AboutController::class, 'about'])->name('about');

Route::view("/profile", 'profile')->name("profile");

Route::view("category/food", 'category.food')->name("food");
Route::view("category/electronic", 'category.electronic')->name("electronic");
Route::view("category/literature", 'category.literature')->name("literature");
Route::view("category/tool", 'category.tool')->name("tool");
Route::view("category/furniture", 'category.furniture')->name("furniture");
Route::view("category/beauty-product", 'category.beauty-product')->name("beauty-product");
Route::view("category/health-product", 'category.health-product')->name("health-product");
Route::view("category/household", 'category.household')->name("household");
