<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\Profil_tabelController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =========================
// HALAMAN UTAMA
// =========================

Route::get('/', [HomeController::class, 'index'])
    ->name('home');


// =========================
// PROFIL SEKOLAH
// =========================

Route::get('/profil', [Profil_tabelController::class, 'index'])
    ->name('profil.index');

Route::get('/profil/{id}/edit', [Profil_tabelController::class, 'edit'])
    ->name('profil.edit');

Route::put('/profil/{id}', [Profil_tabelController::class, 'update'])
    ->name('profil.update');


// =========================
// GURU
// =========================

Route::resource('guru', GuruController::class);


// =========================
// GALERI
// =========================

Route::resource('galeri', GaleriController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);


// =========================
// BERITA
// =========================

Route::resource('berita', BeritaController::class);


// =========================
// JURUSAN
// =========================

Route::resource('jurusan', JurusanController::class)->only(['index', 'edit']);



// =========================
// EKSTRAKURIKULER
// =========================

Route::resource('ekstrakurikuler', EkstrakurikulerController::class)->only(['index','edit','show']);