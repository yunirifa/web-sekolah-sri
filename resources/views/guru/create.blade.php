{{-- resources/views/guru/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Tambah Guru & Staf')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Tambah Guru & Staf</h3>
        <a href="{{ route('guru.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label fw-bold">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
                    @error('nama') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="nip" class="form-label fw-bold">NIP</label>
                    <input type="text" name="nip" id="nip" class="form-control" value="{{ old('nip') }}">
                    @error('nip') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="jabatan" class="form-label fw-bold">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ old('jabatan') }}">
                    @error('jabatan') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="mapel" class="form-label fw-bold">Mata Pelajaran</label>
                    <input type="text" name="mapel" id="mapel" class="form-control" value="{{ old('mapel') }}">
                    @error('mapel') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label fw-bold">Kategori</label>
                    <select name="kategori" id="kategori" class="form-select">
                        <option value="guru" {{ old('kategori') == 'guru' ? 'selected' : '' }}>Guru</option>
                        <option value="staf" {{ old('kategori') == 'staf' ? 'selected' : '' }}>Staf</option>
                    </select>
                    @error('kategori') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label fw-bold">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                    @error('foto') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

        </div>
    </div>

</div>
@endsection