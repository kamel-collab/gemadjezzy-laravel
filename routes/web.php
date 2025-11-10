<?php

use Illuminate\Support\Facades\Route;



Route::get('/', fn() => view('home'));
Route::get('/services', fn() => view('services'));
Route::get('/contact', fn() => view('contact'));

