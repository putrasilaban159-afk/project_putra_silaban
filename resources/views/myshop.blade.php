@extends('layouts.app')

@section('title', 'My Shop')

@section('content')
<div class="text-center my-5">
    <h1 class="display-4 fw-bold text-purple">Selamat Datang di My Shop Kami!</h1>
    <p class="lead text-secondary">
        Temukan produk terbaik dengan kualitas tinggi dan harga terjangkau. 
        Nikmati pengalaman belanja yang mudah dan menyenangkan!
    </p>
    <a href="{{ route('products') }}" class="btn btn-lg btn-primary mt-3">Lihat Semua Produk</a>

    <!-- Optional: preview beberapa produk -->
    <div class="row mt-5 justify-content-center">
        @foreach($products->take(4) as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
