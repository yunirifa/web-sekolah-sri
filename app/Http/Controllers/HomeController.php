<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Galeri;
use App\Models\Berita;
use App\Models\Jurusan;
use App\Models\Ekstrakurikuler;
use App\Models\Profil_tabel;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama website
     */
    public function index()
    {
        // Ambil data profil sekolah
        $profil = Profil_tabel::first();

        // Hitung jumlah data
        $totalGuru = $profil?->jumlah_guru ?? 0;
        $totalGaleri = Galeri::count();
        $totalBerita = Berita::count();
        $totalJurusan = Jurusan::count();
        $totalEkskul = Ekstrakurikuler::count();

        // Ambil data untuk ditampilkan di halaman utama
        $guru = Guru::latest()->take(4)->get();
        $galeri = Galeri::latest()->take(6)->get();
        $berita = Berita::latest()->take(3)->get();
        $jurusan = Jurusan::latest()->take(4)->get();
        $ekstrakurikuler = Ekstrakurikuler::latest()->take(4)->get();

        return view('home', compact(
            'profil',
            'totalGuru',
            'totalGaleri',
            'totalBerita',
            'totalJurusan',
            'totalEkskul',
            'guru',
            'galeri',
            'berita',
            'jurusan',
            'ekstrakurikuler'
        ));
    }
}
