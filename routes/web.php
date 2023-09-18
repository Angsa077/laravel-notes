<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

# Redirect
// Route::redirect('/about', '/about-us');

# Get Abouts
Route::get('/about', function () {
    return view('about');
});

# Get id product
Route::get('product/{id}', function ($id) {
    return view('product', ['id' => $id]);
});

# Prefix atau Grouping
Route::prefix('admin')->group(function () {
    Route::get('/product-name', function () {
        return 'teh botol';
    });
    Route::get('/product-harga', function () {
        return '20.000';
    });
});
