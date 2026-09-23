<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan semua berita
    public function index()
    {
        $beritas = Berita::latest()->get();

        return view('berita', compact('beritas'));
    }

    // Menampilkan detail berita
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        return view('berita-detail', compact('berita'));
    }

    // Menampilkan form tambah berita
    public function create()
    {
        return view('berita-create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'slug' => 'required|unique:beritas,slug',
            'isi' => 'required',
            'gambar' => 'nullable',
            'tanggal' => 'required|date',
        ]);

        Berita::create([
            'judul' => $request->judul,
            'slug' => $request->slug,
            'isi' => $request->isi,
            'gambar' => $request->gambar,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('/berita')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view('berita-edit', compact('berita'));
    }

    // Mengubah berita
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'slug' => 'required|unique:beritas,slug,' . $id,
            'isi' => 'required',
            'gambar' => 'nullable',
            'tanggal' => 'required|date',
        ]);

        $berita->update([
            'judul' => $request->judul,
            'slug' => $request->slug,
            'isi' => $request->isi,
            'gambar' => $request->gambar,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('/berita')
            ->with('success', 'Berita berhasil diubah.');
    }

    // Menghapus berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        $berita->delete();

        return redirect('/berita')
            ->with('success', 'Berita berhasil dihapus.');
    }
}
