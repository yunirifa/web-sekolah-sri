@extends('layouts.app')

@section('title', 'Berita')

@section('content')

<div class="hero-section text-center">
    <div class="container">
        <h1 class="fw-bold">Berita Sekolah</h1>
        <p class="mb-0">Informasi dan kegiatan terbaru seputar sekolah kami</p>
    </div>
</div>

<div class="container py-5">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-end mb-4">
        <a href="{{ route('berita.create') }}" class="btn btn-primary">
            <i class="fa-solid fa-plus me-1"></i> Tambah Berita
        </a>
    </div>

    @if($beritas->isEmpty())
        <p class="text-center text-muted">Belum ada berita.</p>
    @else
        <div class="row g-4">
            @foreach($beritas as $berita)
                <div class="col-md-6 col-lg-4">
                    <div class="card stat-card h-100">
                        <img src="{{ $berita->gambar ? asset('uploads/berita/' . $berita->gambar) : 'https://placehold.co/600x400?text=Berita' }}"
                             class="card-img-top rounded-top" alt="{{ $berita->judul }}"
                             style="width: 100%; height: 220px; object-fit: contain; background-color: #f8f9fa;">
                        <div class="card-body d-flex flex-column">
                            @if($berita->kategori)
                                <span class="badge bg-primary-subtle text-primary mb-2 align-self-start">
                                    {{ $berita->kategori }}
                                </span>
                            @endif
                            <h5 class="card-title fw-semibold">{{ $berita->judul }}</h5>
                            <p class="text-muted small mb-2">
                                <i class="fa-regular fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}
                            </p>
                            <p class="card-text text-secondary flex-grow-1">
                                {{ Str::limit(strip_tags($berita->isi), 100) }}
                            </p>

                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <a href="{{ route('berita.show', $berita->slug) }}" class="btn btn-primary btn-sm align-self-start">
                                    Baca Selengkapnya <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>

                                <div>
                                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-outline-secondary btn-sm">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin mau hapus berita ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

</div>

@endsection