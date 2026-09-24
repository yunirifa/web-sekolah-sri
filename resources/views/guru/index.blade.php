{{-- resources/views/guru/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Data Guru & Staf')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Data Guru & Staf</h3>
        <a href="{{ route('guru.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Guru
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Mapel</th>
                            <th>Kategori</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($guru as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if($item->foto)
                                    <img src="{{ asset('uploads/guru/'.$item->foto) }}"
                                         alt="{{ $item->nama }}"
                                         width="50" height="50"
                                         class="rounded-circle object-fit-cover">
                                @else
                                    <img src="{{ asset('images/default-avatar.png') }}"
                                         alt="Default"
                                         width="50" height="50"
                                         class="rounded-circle">
                                @endif
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nip ?? '-' }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>{{ $item->mapel ?? '-' }}</td>
                            <td>
                                <span class="badge {{ $item->kategori === 'guru' ? 'bg-primary' : 'bg-secondary' }}">
                                    {{ ucfirst($item->kategori) }}
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('guru.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('guru.destroy', $item->id) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-3">
                                Belum ada data guru/staf.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection