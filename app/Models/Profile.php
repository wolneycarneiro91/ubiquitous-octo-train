<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Profile extends Model
{   
    protected $table ='profile';      
    protected $guarded = ['id'];
    protected $fillable = ["description"];
}
