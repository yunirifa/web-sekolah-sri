<?php

namespace App\Http\Controllers;

use App\Models\Profil_tabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Profil_tabelController extends Controller
{
    /**
     * Menampilkan data profil sekolah
     */
    public function index()
    {
        // Ambil 1 data profil sekolah
        $profil = Profil_tabel::first();

       return view('profil_tabel', compact('profil'));
    }

    /**
     * Menampilkan form edit profil
     */
    public function edit($id)
    {
        $profil = Profil_tabel::findOrFail($id);

        return view('profil.edit', compact('profil'));
    }

    /**
     * Menyimpan perubahan data profil
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'nama_sekolah'   => 'required|string|max:255',
            'npsn'            => 'nullable|string|max:20',
            'akreditasi'      => 'nullable|string|max:10',
            'tahun_berdiri'   => 'nullable|integer',
            'kepala_sekolah'  => 'nullable|string|max:255',
            'alamat'          => 'nullable|string',
            'telepon'         => 'nullable|string|max:20',
            'email'           => 'nullable|email|max:255',
            'visi'            => 'nullable|string',
            'misi'             => 'nullable|string',
            'sejarah'         => 'nullable|string',
            'jumlah_siswa'    => 'nullable|integer',
            'jumlah_guru'     => 'nullable|integer',
            'logo'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Cari data profil
        $profil = Profil_tabel::findOrFail($id);

        // Ambil semua data kecuali logo
        $data = $request->except('logo');

        // Jika ada logo baru
        if ($request->hasFile('logo')) {

            // Hapus logo lama jika ada
            if ($profil->logo && Storage::disk('public')->exists($profil->logo)) {
                Storage::disk('public')->delete($profil->logo);
            }

            // Simpan logo baru
            $data['logo'] = $request->file('logo')->store('logo', 'public');
        }

        // Update data profil
        $profil->update($data);

        return redirect()
            ->route('profil.index')
            ->with('success', 'Data profil sekolah berhasil diperbarui.');
    }
}