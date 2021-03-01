<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ProductsController;

Route::get('/', [StaticController::class, 'index']);

Route::resource('products', 'App\Http\Controllers\ProductsController');

Route::get('/category/{category}', [ProductsController::class, 'showCategory'])->name('showCategory');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
