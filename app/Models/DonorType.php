<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Database\Factories\DonorTypeFactory;

class DonorType extends Model
{         
    protected $guarded = ['id'];
    protected $table ='donortypes'; 
    protected $fillable = ["description"];
}
