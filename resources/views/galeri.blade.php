@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
<div class="container py-5">
    <h2 class="section-title"><i class="fa-solid fa-images text-primary me-2"></i>Galeri Sekolah</h2>

    <div class="mb-4">
        <a href="{{ route('galeri') }}" class="btn btn-sm {{ !$kategori ? 'btn-primary' : 'btn-outline-primary' }}">Semua</a>
        @foreach ($kategoriList as $kat)
            <a href="{{ route('galeri', ['kategori' => $kat]) }}"
               class="btn btn-sm {{ $kategori === $kat ? 'btn-primary' : 'btn-outline-primary' }}">
                {{ ucfirst($kat) }}
            </a>
        @endforeach
    </div>

    <div class="row g-4">
        @forelse ($galeris as $foto)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 stat-card">
                    <img src="{{ asset('storage/' . $foto->foto) }}" class="card-img-top" alt="{{ $foto->judul }}"
                         onerror="this.src='https://placehold.co/400x300?text=Foto+Galeri'">
                    <div class="card-body">
                        <h6 class="card-title mb-1">{{ $foto->judul }}</h6>
                        <p class="small text-muted mb-0">{{ $foto->keterangan }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted">Belum ada foto pada kategori ini.</p>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $galeris->links() }}
    </div>
</div>
@endsection