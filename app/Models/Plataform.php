<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Plataform extends Model
{         
    protected $guarded = ['id'];
    protected $table ='plataform';
    protected $fillable = ["description"];
}
