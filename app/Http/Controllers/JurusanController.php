<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::all();

        return view('jurusan', compact('jurusans'));
    }

    public function create()
    {
        return view('jurusan_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required|string|max:255',
            'singkatan' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|string|max:255',
        ]);

        Jurusan::create([
            'nama_jurusan' => $request->nama_jurusan,
            'singkatan' => $request->singkatan,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
        ]);

        return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        return view('jurusan_edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jurusan' => 'required|string|max:255',
            'singkatan' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|string|max:255',
        ]);

        $jurusan = Jurusan::findOrFail($id);

        $jurusan->update([
            'nama_jurusan' => $request->nama_jurusan,
            'singkatan' => $request->singkatan,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
        ]);

        return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $jurusan->delete();

        return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan berhasil dihapus.');
    }
}
