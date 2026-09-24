<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class profil_tabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profil_tabel')->insert([
            [
                'nama_sekolah'   => 'SMKN 1 Cijati',
                'npsn'           => '20254321',
                'akreditasi'     => 'A',
                'tahun_berdiri'  => '2005',
                'kepala_sekolah' => 'A.Rahmat Dimyati,S.Pd.M.Pd.',
                'alamat'         => 'Cijati, Kabupaten Cianjur, Jawa Barat',
                'telepon'        => '0221234567',
                'email'          => 'info@smkn1cijati.sch.id',
                'visi'           => 'Menjadi sekolah kejuruan yang unggul, berkarakter, kompeten, dan mampu bersaing di dunia kerja.',
                'sejarah'        => 'SMKN 1 Cijati merupakan sekolah menengah kejuruan yang berkomitmen dalam memberikan pendidikan dan keterampilan terbaik bagi para siswanya.',
                'logo'           => 'logo.png',
                'jumlah_siswa'   => 700,
                'jumlah_guru'    => 52,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}