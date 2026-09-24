@extends('layouts.app')

@section('title', 'Edit Berita')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card stat-card">
                <div class="card-body p-4">

                    <h3 class="fw-bold mb-4">Edit Berita</h3>

                    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="judul" class="form-label fw-semibold">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror"
                                   value="{{ old('judul', $berita->judul) }}">
                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kategori" class="form-label fw-semibold">Kategori</label>
                            <input type="text" name="kategori" id="kategori" class="form-control @error('kategori') is-invalid @enderror"
                                   value="{{ old('kategori', $berita->kategori) }}">
                            @error('kategori')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label fw-semibold">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror"
                                   value="{{ old('tanggal', \Carbon\Carbon::parse($berita->tanggal)->format('Y-m-d')) }}">
                            @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label fw-semibold">Gambar (kosongkan jika tidak ingin mengganti)</label>
                            <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror">
                            @error('gambar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            @if ($berita->gambar)
                                <div class="mt-2">
                                    <img src="{{ asset('uploads/berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                                         style="max-width: 200px; border-radius: 8px;">
                                </div>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label for="isi" class="form-label fw-semibold">Isi Berita</label>
                            <textarea name="isi" id="isi" rows="6" class="form-control @error('isi') is-invalid @enderror">{{ old('isi', $berita->isi) }}</textarea>
                            @error('isi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary">
                                <i class="fa-solid fa-arrow-left me-1"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                Update Berita
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection