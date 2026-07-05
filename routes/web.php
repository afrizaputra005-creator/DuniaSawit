<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/harga-tbs', function () {
    return view('prices');
})->name('prices');

Route::get('/edukasi', function () {
    return view('education');
})->name('education');

Route::get('/berita', function () {
    return view('news');
})->name('news');

Route::get('/tentang', function () {
    return view('about');
})->name('about');
