<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/halo', function () {
    return view('halo');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
