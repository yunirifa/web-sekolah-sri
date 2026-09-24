<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class jurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jurusans')->insert([
            [
                'nama' => 'Rekayasa Perangkat Lunak',
                'slug' => Str::slug('Rekayasa Perangkat Lunak'),
                'deskripsi' => 'Jurusan Rekayasa Perangkat Lunak atau RPL mempelajari tentang pemrograman, pembuatan aplikasi, pengembangan website, database, dan teknologi perangkat lunak.',
                'gambar' => 'rpl.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Teknik Kendaraan Ringan',
                'slug' => Str::slug('Teknik Kendaraan Ringan'),
                'deskripsi' => 'Jurusan Teknik Kendaraan Ringan atau TKR mempelajari tentang perawatan, perbaikan, dan sistem kerja kendaraan ringan seperti mobil.',
                'gambar' => 'tkr.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Bisnis Daring',
                'slug' => Str::slug('Bisnis Daring'),
                'deskripsi' => 'Jurusan Bisnis Daring atau BD mempelajari tentang bisnis, pemasaran, perdagangan online, pengelolaan toko digital, dan strategi pemasaran melalui internet.',
                'gambar' => 'bd.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Agribisnis Pengolahan Hasil Pertanian',
                'slug' => Str::slug('Agribisnis Pengolahan Hasil Pertanian'),
                'deskripsi' => 'Jurusan Agribisnis Pengolahan Hasil Pertanian atau APHP mempelajari pengolahan hasil pertanian menjadi produk yang memiliki nilai tambah dan bernilai ekonomi.',
                'gambar' => 'aphp.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
