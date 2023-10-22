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
        Schema::create('galeri_fotos', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('foto_kegiatan')->nullable();
            $table->date('tanggal_kegiatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri_fotos');
    }
};
