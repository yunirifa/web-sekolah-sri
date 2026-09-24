@extends('layouts.app')

@section('title', $eskul->nama_eskul)

@section('content')
<div class="container py-5">
    <a href="{{ route('eskul') }}" class="btn btn-outline-secondary btn-sm mb-4">
        <i class="fa-solid fa-arrow-left"></i> Kembali
    </a>

    <div class="row g-4">
        <div class="col-md-5">
            <img src="{{ asset('storage/' . $eskul->gambar) }}" class="img-fluid rounded-4 shadow-sm" alt="{{ $eskul->nama_eskul }}"
                 onerror="this.src='https://placehold.co/600x400?text={{ urlencode($eskul->nama_eskul) }}'">
        </div>
        <div class="col-md-7">
            <h2 class="fw-bold">{{ $eskul->nama_eskul }}</h2>
            <p>{{ $eskul->deskripsi }}</p>

            <ul class="list-group list-group-flush mt-3">
                <li class="list-group-item"><i class="fa-solid fa-user-tie text-primary me-2"></i><strong>Pembina:</strong> {{ $eskul->pembina }}</li>
                <li class="list-group-item"><i class="fa-solid fa-clock text-primary me-2"></i><strong>Jadwal:</strong> {{ $eskul->jadwal }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection