<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table = 'jurusans';

    protected $fillable = [
        'kode_jurusan',
        'nama_jurusan',
        'deskripsi',
        'kuota',
    ];
}