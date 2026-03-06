<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/profile', function(){
    return view('Profile');
});