@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center my-5">
    <h1 class="display-4 fw-bold text-primary">Selamat Datang di My Shop!</h1>
    <p class="lead text-secondary">
        Temukan berbagai produk menarik dan berkualitas hanya di sini. 
        Belanja mudah, cepat, dan menyenangkan!
    </p>
    <a href="{{ route('myshop') }}" class="btn btn-lg btn-success mt-3">Mulai Belanja</a>
</div>
@endsection
