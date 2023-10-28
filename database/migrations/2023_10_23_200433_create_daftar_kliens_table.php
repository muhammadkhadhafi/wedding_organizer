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
        Schema::create('daftar_kliens', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->string('nama')->nullable();
            $table->date('tanggal_kegiatan')->nullable();
            $table->string('foto_klien')->nullable();
            $table->string('foto_kegiatan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_kliens');
    }
};
