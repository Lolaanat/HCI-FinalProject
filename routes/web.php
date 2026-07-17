<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/header', function () {
    return view('components.footer');
});