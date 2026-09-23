<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Folder tujuan penyimpanan gambar, relatif dari public/
     */
    private $uploadPath = 'uploads/berita';

    // Menampilkan semua berita
    public function index()
    {
        $beritas = Berita::latest()->get();

        return view('berita', compact('beritas'));
    }

    // Menampilkan form tambah berita
    public function create()
    {
        return view('berita-create');
    }

    /**
     * Helper simpan file upload ke public/uploads/berita
     */
    private function simpanFile($file)
    {
        $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

        $destinationPath = public_path($this->uploadPath);
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $file->move($destinationPath, $filename);

        return $filename;
    }

    /**
     * Helper hapus file lama dari public/uploads/berita
     */
    private function hapusFile($filename)
    {
        if ($filename) {
            $path = public_path($this->uploadPath . '/' . $filename);
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'isi'      => 'required|string',
            'kategori' => 'nullable|string|max:255',
            'tanggal'  => 'required|date',
            'gambar'   => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except('gambar');
        $data['slug'] = Str::slug($request->judul) . '-' . time();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $this->simpanFile($request->file('gambar'));
        }

        Berita::create($data);

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    // Menampilkan detail berita
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        return view('berita-detail', compact('berita'));
    }

    // Menampilkan form edit berita
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view('berita-edit', compact('berita'));
    }

    // Memperbarui berita
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'isi'      => 'required|string',
            'kategori' => 'nullable|string|max:255',
            'tanggal'  => 'required|date',
            'gambar'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $berita = Berita::findOrFail($id);

        $data = $request->except('gambar');

        // Update slug kalau judul berubah
        if ($request->judul !== $berita->judul) {
            $data['slug'] = Str::slug($request->judul) . '-' . time();
        }

        if ($request->hasFile('gambar')) {
            $this->hapusFile($berita->gambar);
            $data['gambar'] = $this->simpanFile($request->file('gambar'));
        }

        $berita->update($data);

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    // Menghapus berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        $this->hapusFile($berita->gambar);
        $berita->delete();

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil dihapus.');
    }
}