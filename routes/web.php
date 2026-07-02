<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view("/", 'home')->name("home");
Route::view("/home", 'home');
Route::view("/about", 'about')->name("about");
Route::view("/cart", 'cart')->name("cart");
Route::view("/profile", 'profile')->name("profile");
