<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class galeri_tabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeris')->insert([
            [
                'judul' => 'Kegiatan Upacara Bendera',
                'slug' => Str::slug('Kegiatan Upacara Bendera'),
                'gambar' => 'upacara.jpg',
                'deskripsi' => 'Dokumentasi kegiatan upacara bendera yang dilaksanakan di lingkungan sekolah.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Kegiatan Pramuka',
                'slug' => Str::slug('Kegiatan Pramuka'),
                'gambar' => 'pramuka.jpg',
                'deskripsi' => 'Senam pagi ini di laksanakan setiap hari selasa,serta di ikuti seluruh murid dan guru smkn 1 cijati .',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Kegiatan Paskibra',
                'slug' => Str::slug('Kegiatan Paskibra'),
                'gambar' => 'paskibra.jpg',
                'deskripsi' => 'Dokumentasi kegiatan latihan dan kegiatan Paskibra sekolah.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Kegiatan PMR',
                'slug' => Str::slug('Kegiatan PMR'),
                'gambar' => 'pmr.jpg',
                'deskripsi' => 'Dokumentasi kegiatan Palang Merah Remaja atau PMR di sekolah.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Kegiatan Marching Band',
                'slug' => Str::slug('Kegiatan Marching Band'),
                'gambar' => 'marching-band.jpg',
                'deskripsi' => 'Dokumentasi penampilan dan latihan ekstrakurikuler Marching Band.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Pertandingan Bola Voli',
                'slug' => Str::slug('Pertandingan Bola Voli'),
                'gambar' => 'voli.jpg',
                'deskripsi' => 'Dokumentasi kegiatan olahraga dan pertandingan bola voli antar siswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Pertandingan Futsal',
                'slug' => Str::slug('Pertandingan Futsal'),
                'gambar' => 'futsal.jpg',
                'deskripsi' => 'Dokumentasi kegiatan latihan dan pertandingan futsal siswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Kegiatan Bahasa Jepang',
                'slug' => Str::slug('Kegiatan Bahasa Jepang'),
                'gambar' => 'bahasa-jepang.jpg',
                'deskripsi' => 'Dokumentasi kegiatan pembelajaran Bahasa Jepang dan pengenalan budaya Jepang.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Kegiatan Rohis',
                'slug' => Str::slug('Kegiatan Rohis'),
                'gambar' => 'rohis.jpg',
                'deskripsi' => 'Dokumentasi kegiatan kerohanian Islam dan kegiatan keagamaan siswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Kegiatan Perayaan Hari Kemerdekaan',
                'slug' => Str::slug('Kegiatan Perayaan Hari Kemerdekaan'),
                'gambar' => 'kemerdekaan.jpg',
                'deskripsi' => 'Dokumentasi berbagai kegiatan dalam rangka memperingati Hari Kemerdekaan Republik Indonesia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
