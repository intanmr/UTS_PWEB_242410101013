@extends('layouts.app')

@section('content')

<div class="mb-4">
    <h2 class="fw-bold mb-1">Data Obat</h2>
    <p class="text-muted mb-0">Menampilkan informasi lengkap mengenai stok dan detail obat yang dikelola dalam sistem.</p>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-3 col-sm-6">
        <div class="stat-card">
            <div class="stat-label">Jumlah Obat</div>
            <div class="stat-value">{{ $statistik['jumlah_obat'] }}</div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="stat-card">
            <div class="stat-label">Kategori Obat</div>
            <div class="stat-value">{{ $statistik['jumlah_kategori'] }}</div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="stat-card">
            <div class="stat-label">Hampir Habis</div>
            <div class="stat-value">{{ $statistik['hampir_habis'] }}</div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="stat-card">
            <div class="stat-label">Obat Habis</div>
            <div class="stat-value">{{ $statistik['habis'] }}</div>
        </div>
    </div>
</div>

<div class="tabel-obat">
    <table class="table mb-0">
        <thead>
            <tr>
                <th>ID Obat</th>
                <th>Nama Obat</th>
                <th>Kategori</th>
                <th>Jenis Obat</th>
                <th>Supplier</th>
                <th>Stok</th>
                <th>Tanggal Expired</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($obat as $item)
            <tr>
                <td class="fw-semibold">{{ $item['kode'] }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['kategori'] }}</td>
                <td>{{ $item['jenis'] }}</td>
                <td>{{ $item['supplier'] }}</td>
                <td>{{ $item['stok'] }}</td>
                <td>{{ $item['expired'] }}</td>
                <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                <td>
                    @if($item['status'] == 'Tersedia')
                        <span class="status-box tersedia">{{ $item['status'] }}</span>
                    @elseif($item['status'] == 'Hampir Habis')
                        <span class="status-box hampir">{{ $item['status'] }}</span>
                    @else
                        <span class="status-box habis">{{ $item['status'] }}</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4 d-flex justify-content-end">
    <a href="{{ route('dashboard') }}" class="btn btn-soft">
        Kembali ke Dashboard
    </a>
</div>

@endsection