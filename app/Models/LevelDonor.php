<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LevelDonor extends Model
{         
    protected $guarded = ['id'];
    protected $table ='leveldonor';
    protected $fillable = ["description"];
}
