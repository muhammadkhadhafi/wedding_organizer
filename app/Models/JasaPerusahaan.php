<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JasaPerusahaan extends Model
{
    use HasFactory;

    protected $table = 'jasa_perusahaans';
    protected $guarded = ['id'];
}
