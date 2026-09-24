@extends('layouts.app')

@section('title', 'Profil Sekolah')

@section('content')

<div class="container py-4">

    {{-- Judul Halaman --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1">Profil Sekolah</h2>
            <p class="text-muted mb-0">
                Kelola informasi profil sekolah.
            </p>
        </div>

        @if(isset($profil))
            <a href="{{ route('profil.edit', $profil->id) }}"
               class="btn btn-primary">
                Edit Profil
            </a>
        @endif
    </div>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Pesan error --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($profil)

        <div class="card shadow-sm border-0">

            <div class="card-body">

                {{-- Logo --}}
                <div class="text-center mb-4">

                    @if($profil->logo)
                        <img
                            src="{{ asset('storage/' . $profil->logo) }}"
                            alt="Logo {{ $profil->nama_sekolah }}"
                            style="
                                width: 130px;
                                height: 130px;
                                object-fit: contain;
                                border-radius: 12px;
                            "
                        >
                    @else
                        <div class="text-muted">
                            Logo belum tersedia
                        </div>
                    @endif

                </div>

                {{-- Informasi utama --}}
                <div class="row g-4">

                    <div class="col-md-6">
                        <label class="fw-bold">Nama Sekolah</label>
                        <p>{{ $profil->nama_sekolah ?? 'SMKN 1 CIJATI' }}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">NPSN</label>
                        <p>{{ $profil->npsn ?? '-' }}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Akreditasi</label>
                        <p>{{ $profil->akreditasi ?? '-' }}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Tahun Berdiri</label>
                        <p>{{ $profil->tahun_berdiri ?? '2006' }}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Kepala Sekolah</label>
                        <p>{{ $profil->kepala_sekolah ?? '-' }}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Telepon</label>
                        <p>{{ $profil->telepon ?? '-' }}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Email</label>
                        <p>{{ $profil->email ?? '-' }}</p>
                    </div>

                    <div class="col-md-12">
                        <label class="fw-bold">Alamat</label>
                        <p>{{ $profil->alamat ?? '-' }}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Jumlah Siswa</label>
                        <p>{{ $profil->jumlah_siswa ?? '700'}}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Jumlah Guru</label>
                        <p>{{ $profil->jumlah_guru ?? '52'}}</p>
                    </div>

                    {{-- Visi --}}
                    <div class="col-md-12">
                        <label class="fw-bold">Visi</label>

                        <div class="p-3 bg-light rounded">
                            {{ $profil->visi ?? '-' }}
                        </div>
                    </div>

                    {{-- Misi --}}
                    <div class="col-md-12">
                        <label class="fw-bold">Misi</label>

                        <div class="p-3 bg-light rounded">
                            {!! nl2br(e($profil->misi ?? '-')) !!}
                        </div>
                    </div>

                    {{-- Sejarah --}}
                    <div class="col-md-12">
                        <label class="fw-bold">Sejarah</label>

                        <div class="p-3 bg-light rounded">
                            {!! nl2br(e($profil->sejarah ?? '-')) !!}
                        </div>
                    </div>

                </div>

            </div>

        </div>

    @else

        {{-- Jika data profil belum ada --}}
        <div class="card shadow-sm border-0">
            <div class="card-body text-center py-5">

                <h4>Data profil belum tersedia</h4>

                <p class="text-muted">
                    Belum ada data profil sekolah di database.
                </p>

            </div>
        </div>

    @endif

</div>

@endsection