<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//https://github.com/kamel-collab/gemadjezzy-laravel/
// Route::get('/', fn() => view('home'));
// Route::get('/services', fn() => view('services'));
// Route::get('/contact', fn() => view('contact'));
// Route::get('/article/{n}',[ArticleController::class,'show'] );
// Route::get('/users', [UserController::class, 'create']);
// Route::post('/users', [UserController::class, 'store']);

// Route::get('products/create', [    ProductController::class, 'create'])->name('products.create');


// Route::post('products/store', [ProductController::class, 'store'])->name('products.store');

Route::get('public/films',[FilmController::class,'index'])->middleware('auth')->name('films.public.index') ;
Route::resource('films', FilmController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
