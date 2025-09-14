@extends('layouts.app')

@section('title', 'My Shop')

@section('content')
<h1>My Shop</h1>
<p>Berikut daftar produk kami:</p>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($products as $product)
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
            </div>
            <div class="card-footer">
                <strong>Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</strong>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
