<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GaleriFoto extends Model
{
    use HasFactory;
    protected $table = 'galeri_fotos';
    protected $guarded = ['id'];

    public function getTanggalKegiatanStringAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_kegiatan'])->translatedFormat('l, d F Y');
    }
}
