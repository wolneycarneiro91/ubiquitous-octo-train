<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PaymmentType extends Model
{         
    protected $guarded = ['id'];
    protected $table ='paymmenttype';
    protected $fillable = ["description"];
}
