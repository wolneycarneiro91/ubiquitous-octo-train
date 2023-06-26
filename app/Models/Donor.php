<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Donor extends Model
{
    protected $guarded = ['id'];
    protected $table = 'donor';
    protected $fillable = ["user_id", "donor_type_id", "level_donor_id"];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function donorType()
    {
        return $this->belongsTo(DonorType::class, 'donor_type_id', 'id');
    }
    public function levelDonor()
    {
        return $this->belongsTo(LevelDonor::class, 'level_donor_id', 'id');
    }
}
