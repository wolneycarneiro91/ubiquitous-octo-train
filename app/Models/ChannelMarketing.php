<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ChannelMarketing extends Model
{         
    protected $guarded = ['id'];
    protected $table ='channelmarketing';   
    protected $fillable = ["description"];
}
