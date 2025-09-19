<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Halaman statis pakai Route::view()
Route::view('/', 'home')->name('home');
Route::view('/home', 'home')->name('home'); // optional
Route::view('/about', 'about')->name('about');

// Route CRUD Product
Route::resource('products', ProductController::class);

// Alihkan /myshop ke /products
Route::redirect('/myshop', '/products')->name('myshop');
