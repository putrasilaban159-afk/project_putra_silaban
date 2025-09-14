<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home', [PageController::class, 'home'])->name('home'); // optional
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/myshop', [PageController::class, 'myshop'])->name('myshop');
Route::get('/products', [PageController::class, 'products'])->name('products');

