@extends('layouts.app')

@section('title', 'My Shop')

@section('content')
<div class="container">
    <h1 class="mb-3">My Shop</h1>
    <p>Berikut daftar produk kami:</p>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse($products as $product)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong>
                        <div class="d-flex gap-1">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus produk ini?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>Tidak ada produk tersedia.</p>
        @endforelse
    </div>
</div>
@endsection
