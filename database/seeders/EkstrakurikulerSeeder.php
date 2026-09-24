<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ekstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ekstrakurikulers')->insert([
            [
                'nama' => 'Pramuka',
                'slug' => Str::slug('Pramuka'),
                'deskripsi' => 'Ekstrakurikuler Pramuka melatih siswa agar memiliki sikap disiplin, mandiri, bertanggung jawab, dan memiliki jiwa kepemimpinan.',
                'gambar' => 'pramuka.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Paskibra',
                'slug' => Str::slug('Paskibra'),
                'deskripsi' => 'Ekstrakurikuler Paskibra melatih kedisiplinan, kekompakan, ketangkasan, serta meningkatkan rasa nasionalisme siswa.',
                'gambar' => 'paskibra.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Cinemak',
                'slug' => Str::slug('Cinemak'),
                'deskripsi' => 'Ekstrakurikuler Cinemak menjadi wadah bagi siswa untuk mengembangkan kreativitas dalam bidang perfilman, fotografi, videografi, dan produksi konten.',
                'gambar' => 'cinemak.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'PMR',
                'slug' => Str::slug('PMR'),
                'deskripsi' => 'Palang Merah Remaja merupakan kegiatan yang mengajarkan siswa tentang kepedulian, kesehatan, pertolongan pertama, dan kegiatan sosial.',
                'gambar' => 'pmr.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Mearching Band',
                'slug' => Str::slug('Mearching Band'),
                'deskripsi' => 'Ekstrakurikuler Mearching Band mengembangkan kemampuan siswa dalam bermusik, baris-berbaris, kekompakan, dan kreativitas.',
                'gambar' => 'mearching-band.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Voli',
                'slug' => Str::slug('Voli'),
                'deskripsi' => 'Ekstrakurikuler Voli menjadi wadah bagi siswa untuk mengembangkan bakat olahraga, meningkatkan kebugaran, kerja sama tim, dan sportivitas.',
                'gambar' => 'voli.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Futsal',
                'slug' => Str::slug('Futsal'),
                'deskripsi' => 'Ekstrakurikuler Futsal membantu siswa mengembangkan kemampuan bermain futsal, kerja sama tim, kedisiplinan, dan sportivitas.',
                'gambar' => 'futsal.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Bahasa Jepang',
                'slug' => Str::slug('Bahasa Jepang'),
                'deskripsi' => 'Ekstrakurikuler Bahasa Jepang membantu siswa mempelajari bahasa, budaya, serta kebiasaan masyarakat Jepang melalui kegiatan yang menyenangkan.',
                'gambar' => 'bahasa-jepang.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Rohis',
                'slug' => Str::slug('Rohis'),
                'deskripsi' => 'Ekstrakurikuler Rohis menjadi wadah bagi siswa untuk memperdalam pengetahuan agama, meningkatkan akhlak, dan membangun kegiatan keagamaan di sekolah.',
                'gambar' => 'rohis.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

