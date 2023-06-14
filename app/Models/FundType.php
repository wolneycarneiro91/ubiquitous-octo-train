<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FundType extends Model
{         
    protected $guarded = ['id'];
    protected $table ='fundtype';
    protected $fillable = ["description"];
}
