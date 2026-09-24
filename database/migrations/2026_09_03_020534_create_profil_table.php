<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profil_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->string('npsn')->nullable();
            $table->string('akreditasi')->nullable();
            $table->year('tahun_berdiri')->nullable();
            $table->string('kepala_sekolah')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->text('visi')->nullable();
            $table->text('sejarah')->nullable();
            $table->string('logo')->nullable();
            $table->integer('jumlah_siswa')->default(0);
            $table->integer('jumlah_guru')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_tabel');
    }
};
