<?php

namespace App\Models;

use App\Models\Model as ModelsModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends ModelAuthenticate
{
    use HasFactory;
    protected $table = 'admins';
    protected $guarded = 'id';
}
