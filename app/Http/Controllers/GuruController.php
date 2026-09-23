<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    /**
     * Folder tujuan penyimpanan foto, relatif dari public/
     */
    private $uploadPath = 'uploads/guru';

    /**
     * Menampilkan semua data guru
     */
    public function index()
    {
        $guru = Guru::latest()->get();

        return view('guru.index', compact('guru'));
    }

    /**
     * Menampilkan form tambah guru
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Helper simpan file upload ke public/uploads/guru
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
     * Helper hapus file lama dari public/uploads/guru
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

    /**
     * Menyimpan data guru baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:255',
            'nip'      => 'nullable|string|max:50',
            'jabatan'  => 'required|string|max:255',
            'mapel'    => 'nullable|string|max:255',
            'kategori' => 'required|in:guru,staf',
            'foto'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            $data['foto'] = $this->simpanFile($request->file('foto'));
        }

        Guru::create($data);

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail guru
     */
    public function show($id)
    {
        $guru = Guru::findOrFail($id);

        return view('guru.show', compact('guru'));
    }

    /**
     * Menampilkan form edit guru
     */
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);

        return view('guru.edit', compact('guru'));
    }

    /**
     * Memperbarui data guru
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'     => 'required|string|max:255',
            'nip'      => 'nullable|string|max:50',
            'jabatan'  => 'required|string|max:255',
            'mapel'    => 'nullable|string|max:255',
            'kategori' => 'required|in:guru,staf',
            'foto'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $guru = Guru::findOrFail($id);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            $this->hapusFile($guru->foto);
            $data['foto'] = $this->simpanFile($request->file('foto'));
        }

        $guru->update($data);

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil diperbarui.');
    }

    /**
     * Menghapus data guru
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        $this->hapusFile($guru->foto);
        $guru->delete();

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}