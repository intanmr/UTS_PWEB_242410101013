@extends('layouts.app')

@section('content')

<div class="glass-card p-5 mb-4">
    <h2 class="fw-bold">
        Selamat Datang, {{ $username }}
    </h2>

    <p class="mt-3 text-muted">
        Sistem ini digunakan untuk membantu pengelolaan data obat pada apotek
        secara sederhana, cepat, dan terstruktur.
    </p>

    <a href="{{ route('pengelolaan') }}" class="btn btn-aesthetic">
        Kelola Data Obat
    </a>
</div>

<div class="glass-card p-4">
    <h4 class="section-title-center">Keunggulan Sistem</h4>

    <div class="row g-3">
        @foreach($keunggulan as $index => $item)
            <div class="col-md-4">
                <div class="keunggulan-card h-100">
                    <div class="keunggulan-number">
                        {{ $index + 1 }}
                    </div>

                    <div class="keunggulan-text">
                        {{ $item }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection