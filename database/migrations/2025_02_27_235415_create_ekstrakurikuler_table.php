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
        Schema::create('ekstrakurikuler', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ekstrakurikuler',100);
            $table->string('Gambar', 50);
            $table->text('Jadwal')->nullable();
            $table->text('Deskripsi')->nullable();
            $table->foreignId('id_kategori')->constrained('kategori')->onDelete('cascade');
            $table->time('Jam_mulai');
            $table->time('Jam_selesai');
            $table->string('Lokasi', 100)->nullable();
            $table->enum('Periode', ['Aktif', 'Tidak_aktif'])->default('aktif');
            $table->timestamps();

            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekstrakurikuler');
    }
};
