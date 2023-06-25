<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class File extends Model
{         
    protected $guarded = ['id'];
    protected $table ='file';
    protected $fillable = ["type_file_id","path","descritption"];
}
