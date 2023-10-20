<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use App\Models\Model as ModelsModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends ModelAuthenticate
{
    use HasFactory;
    protected $table = 'admins';
    protected $guarded = ['id'];
}
