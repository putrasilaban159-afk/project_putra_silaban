<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function myshop()
    {
        // Ambil semua produk untuk My Shop
        $products = Product::all();
        return view('myshop', compact('products'));
    }
}
