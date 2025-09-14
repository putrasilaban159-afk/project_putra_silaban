@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-primary">Tentang Kami</h1>
        <p class="lead text-secondary">
            My Shop adalah proyek latihan untuk menguasai Laravel, Blade Templating, dan Database Migration. 
            Kami berkomitmen untuk belajar membuat sistem web yang rapi, modern, dan mudah dipelihara.
        </p>
    </div>

    <div class="mb-5">
        <h3 class="fw-bold mb-3">👥 Tim Pengembang</h3>
        <div class="card shadow-sm p-3 mb-3">
            <h5 class="mb-1"><strong>Putra Silaban</strong></h5>
            <p class="mb-0 text-muted">Backend Developer</p>
        </div>
    </div>

    <div class="mb-5">
        <h3 class="fw-bold mb-3">📌 Kontak</h3>
        <p class="mb-1">Email: <a href="mailto:putrasilaban159@gmail.com" class="text-decoration-none">putrasilaban159@gmail.com</a></p>
    </div>

    <div class="text-center">
        <a href="{{ route('home') }}" class="btn btn-lg btn-primary">Kembali ke Home</a>
    </div>
</div>
@endsection
