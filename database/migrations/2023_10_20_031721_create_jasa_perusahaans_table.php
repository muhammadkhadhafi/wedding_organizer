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
        Schema::create('jasa_perusahaans', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->string('judul');
            $table->string('harga');
            $table->string('kapasitas');
            $table->string('lokasi');
            $table->string('gambar')->nullable();
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jasa_perusahaans');
    }
};
