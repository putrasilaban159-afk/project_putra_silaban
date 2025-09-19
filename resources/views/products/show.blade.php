@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="container">
    <h1 class="mb-3">Detail Produk</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title">{{ $product->name }}</h3>
            <p class="card-text">{{ $product->description ?? 'Tidak ada deskripsi.' }}</p>
            <p><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
            <div class="d-flex gap-1">
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus produk ini?')">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
