@extends('layouts.app')

@section('title', 'Ekstrakurikuler')

@section('content')
<div class="container py-5">
    <h2 class="section-title"><i class="fa-solid fa-people-group text-primary me-2"></i>Ekstrakurikuler</h2>

    <div class="row g-4">
        @forelse ($eskuls as $eskul)
            <div class="col-md-4">
                <div class="card h-100 stat-card">
                    <img src="{{ asset('storage/' . $eskul->gambar) }}" class="card-img-top" alt="{{ $eskul->nama_eskul }}"
                         onerror="this.src='https://placehold.co/400x300?text={{ urlencode($eskul->nama_eskul) }}'">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $eskul->nama_eskul }}</h5>
                        <p class="card-text small text-muted">{{ Str::limit($eskul->deskripsi, 90) }}</p>
                        <p class="small mb-1"><i class="fa-solid fa-user-tie text-primary"></i> Pembina: {{ $eskul->pembina }}</p>
                        <p class="small mb-3"><i class="fa-solid fa-clock text-primary"></i> {{ $eskul->jadwal }}</p>
                        <a href="{{ route('eskul.show', $eskul->slug) }}" class="btn btn-primary btn-sm mt-auto">Selengkapnya</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted">Belum ada data ekstrakurikuler.</p>
        @endforelse
    </div>
</div>
@endsection