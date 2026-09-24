@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Data Jurusan</h4>
        <a href="{{ route('jurusan.create') }}" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Tambah Jurusan
        </a>
    </div>

    {{-- Alert notifikasi --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped" id="table-jurusan">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Kode Jurusan</th>
                        <th>Nama Jurusan</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jurusans as $index => $jurusan)
                        <tr>
                            <td>{{ $jurusans->firstItem() + $index }}</td>
                            <td>{{ $jurusan->kode_jurusan }}</td>
                            <td>{{ $jurusan->nama_jurusan }}</td>
                            <td>
                                <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Belum ada data jurusan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {{ $jurusans->links() }}
            </div>
        </div>
    </div>
</div>
@endsection