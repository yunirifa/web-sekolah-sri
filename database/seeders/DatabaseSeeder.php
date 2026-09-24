<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            berita_tabelSeeder::class,
            ekstrakurikulerSeeder::class,
            galeri_tabelSeeder::class,
            jurusanSeeder::class,
            profil_tabelSeeder::class,
            guruSeeder::class,
        ]);
    }
}
