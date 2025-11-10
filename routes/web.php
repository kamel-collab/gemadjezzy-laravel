<?php

use Illuminate\Support\Facades\Route;


//https://github.com/kamel-collab/gemadjezzy-laravel/
Route::get('/', fn() => view('home'));
Route::get('/services', fn() => view('services'));
Route::get('/contact', fn() => view('contact'));
Route::get('/article/{n}', function ($n) {
    return view('article')->with('numero', $n);
});

