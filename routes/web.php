<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "halaman about" ;
});

Route::get('/profile', function(){
    return view('Profile');
});