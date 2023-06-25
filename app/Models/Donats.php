<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Donats extends Model
{        
    protected $guarded = ['id'];
    protected $fillable = ["name","status","level","code"];
}
