@extends('layouts.app')

@section('title', $berita->judul)

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <a href="{{ route('berita.index') }}" class="text-decoration-none mb-3 d-inline-block">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Berita
            </a>

            <img src="{{ $berita->gambar ? asset('images/berita/' . $berita->gambar) : 'https://placehold.co/800x400?text=Berita' }}"
                 class="img-fluid rounded-4 shadow-sm mb-4 w-100" style="max-height: 400px; object-fit: cover;"
                 alt="{{ $berita->judul }}">

            @if($berita->kategori)
                <span class="badge bg-primary-subtle text-primary mb-2">{{ $berita->kategori }}</span>
            @endif

            <h1 class="fw-bold mb-2">{{ $berita->judul }}</h1>

            <p class="text-muted mb-4">
                <i class="fa-regular fa-calendar"></i>
                {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}
            </p>

            <div class="fs-5 lh-lg" style="white-space: pre-line;">
                {{ $berita->isi }}
            </div>

        </div>
    </div>
</div>

@endsection