<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    /**
     * Folder tujuan penyimpanan gambar, relatif dari public/
     */
    private $uploadPath = 'uploads/galeri';

    /**
     * Menampilkan semua data galeri
     */
    public function index()
    {
        $galeri = Galeri::latest()->get();

        return view('galeri.index', compact('galeri'));
    }

    /**
     * Menampilkan form tambah galeri
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Menyimpan data galeri baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'gambar'   => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'kategori' => 'nullable|string|max:255',
        ]);

        $data = $request->except('gambar');

        // Upload gambar langsung ke public/uploads/galeri
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

            // Pastikan folder tujuan ada
            $destinationPath = public_path($this->uploadPath);
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $data['gambar'] = $filename;
        }

        Galeri::create($data);

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Data galeri berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail galeri
     */
    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('galeri.show', compact('galeri'));
    }

    /**
     * Menampilkan form edit galeri
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Memperbarui data galeri
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'gambar'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'kategori' => 'nullable|string|max:255',
        ]);

        $galeri = Galeri::findOrFail($id);

        $data = $request->except('gambar');

        // Jika ada gambar baru
        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if ($galeri->gambar) {
                $oldPath = public_path($this->uploadPath . '/' . $galeri->gambar);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

            $destinationPath = public_path($this->uploadPath);
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $data['gambar'] = $filename;
        }

        $galeri->update($data);

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Data galeri berhasil diperbarui.');
    }

    /**
     * Menghapus data galeri
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // Hapus file gambar
        if ($galeri->gambar) {
            $path = public_path($this->uploadPath . '/' . $galeri->gambar);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        // Hapus data dari database
        $galeri->delete();

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Data galeri berhasil dihapus.');
    }
}