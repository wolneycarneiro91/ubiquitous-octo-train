<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Status extends Model
{         
    protected $guarded = ['id'];
    protected $table ='status';   
    protected $fillable = ["description"];
}
