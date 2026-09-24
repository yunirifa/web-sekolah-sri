<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class berita_tabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('berita_tabels')->insert([
            [
                'judul' => 'Kegiatan Belajar Mengajar Tahun Ajaran Baru',
                'slug' => Str::slug('Kegiatan Belajar Mengajar Tahun Ajaran Baru'),
                'isi' => 'Kegiatan belajar mengajar tahun ajaran baru telah dimulai dengan semangat dan antusiasme dari seluruh siswa dan guru.',
                'gambar' => 'berita-1.jpg',
                'tanggal' => '2026-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Upacara Bendera Hari Senin',
                'slug' => Str::slug('Upacara Bendera Hari Senin'),
                'isi' => 'Upacara bendera hari Senin dilaksanakan dengan tertib dan diikuti oleh seluruh siswa, guru, serta staf sekolah.',
                'gambar' => 'berita-2.jpg',
                'tanggal' => '2026-09-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Prestasi Siswa dalam Kompetisi Akademik',
                'slug' => Str::slug('Prestasi Siswa dalam Kompetisi Akademik'),
                'isi' => 'Siswa berhasil meraih prestasi dalam kompetisi akademik tingkat daerah. Prestasi ini menjadi kebanggaan bagi sekolah.',
                'gambar' => 'berita-3.jpg',
                'tanggal' => '2026-09-03',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Kegiatan Ekstrakurikuler Sekolah',
                'slug' => Str::slug('Kegiatan Ekstrakurikuler Sekolah'),
                'isi' => 'Berbagai kegiatan ekstrakurikuler kembali dilaksanakan untuk mengembangkan bakat dan minat para siswa.',
                'gambar' => 'berita-4.jpg',
                'tanggal' => '2026-09-04',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Peringatan Hari Pendidikan Nasional',
                'slug' => Str::slug('Peringatan Hari Pendidikan Nasional'),
                'isi' => 'Sekolah mengadakan berbagai kegiatan dalam rangka memperingati Hari Pendidikan Nasional.',
                'gambar' => 'berita-5.jpg',
                'tanggal' => '2026-09-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
