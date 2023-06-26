<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Status;
use App\Models\ChannelMarketing;

class Campaign extends Model
{         
    protected $guarded = ['id'];
    protected $table ='campaign'; 
    protected $fillable = ["name","description","initial_date","final_date","status_id","budget","segmentation","channel_marketing_id","resources_path","manager_id"];

    public function status(){
        return $this->belongsTo(Status::class,'status_id','id');
    }
    public function channel_marketing(){
        return $this->belongsTo(ChannelMarketing::class);
    }    
}
