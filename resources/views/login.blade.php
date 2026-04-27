@extends('layouts.app')

@section('content')

<div class="row justify-content-center align-items-center" style="min-height: 82vh;">
    <div class="col-md-5">

        <div class="glass-card p-5">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2">Login Admin Apotek</h2>
                <p class="text-muted mb-0">
                    Masuk untuk mengelola data obat apotek.
                </p>
            </div>

            <form action="{{ route('login.process') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="fw-semibold mb-2">Username</label>

                    <input
                        type="text"
                        name="username"
                        class="form-control rounded-pill px-4 py-2"
                        value="{{ old('username') }}"
                        placeholder="Masukkan username">

                    @error('username')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <button class="btn btn-aesthetic w-100 mt-2">
                    Login
                </button>
            </form>
        </div>

    </div>
</div>

@endsection