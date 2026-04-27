@extends('layouts.app')

@section('content')

<div class="glass-card p-5">
    <h2 class="fw-bold mb-4">Profile Pengguna</h2>

    <p>
        <strong>Username:</strong> {{ $admin['username'] }}
    </p>

    <p>
        <strong>Role:</strong> {{ $admin['role'] }}
    </p>

    <p>
        <strong>Status:</strong> {{ $admin['status'] }}
    </p>

    <p>
        <strong>Email:</strong> {{ $admin['email'] }}
    </p>

    <p>
        <strong>No. HP:</strong> {{ $admin['no_hp'] }}
    </p>

    <p>
        <strong>Alamat:</strong> {{ $admin['alamat'] }}
    </p>


    <a href="{{ route('dashboard') }}" class="btn btn-soft me-2">
        Kembali ke Dashboard
    </a>

    <a href="{{ route('logout') }}" class="btn btn-danger rounded-pill px-4">
        Logout
    </a>
</div>

@endsection