<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

// Route ke halaman home
Route::get('/home', [PageController::class, 'home']);

// Route ke halaman about
Route::get('/about', [PageController::class, 'about']);
