<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita_tabels';

    protected $fillable = [
        'judul',
        'slug',
        'isi',
        'gambar',
        'kategori',
        'tanggal',
    ];
}