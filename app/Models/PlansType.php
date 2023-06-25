<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PlansType extends Model
{         
    protected $guarded = ['id'];
    protected $table ='planstype';
    protected $fillable = ["description"];
}
