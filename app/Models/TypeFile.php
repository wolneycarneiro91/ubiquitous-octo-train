<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TypeFile extends Model
{         
    protected $guarded = ['id'];
    protected $table ='typefile';   
    protected $fillable = ["description"];
}
