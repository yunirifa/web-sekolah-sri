<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil_tabel extends Model
{
    protected $table = 'profil_tabel';

    protected $fillable = [
        'nama_sekolah',
        'npsn',
        'akreditasi',
        'tahun_berdiri',
        'kepala_sekolah',
        'alamat',
        'telepon',
        'email',
        'visi',
        'misi',
        'sejarah',
        'logo',
        'jumlah_siswa',
        'jumlah_guru',
    ];
}