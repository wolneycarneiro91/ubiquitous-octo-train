<?php

namespace App\Models;

use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Donation extends Model
{         
    protected $guarded = ['id'];
    protected $fillable = ["donor_id","campaign_id","plan_type_id","status","paymment_type_id","receipt_issued","receipt_date","observation"];
 
    public function donor()
    {
        return $this->belongsTo(Donor::class, 'donor_id', 'id');
    }    
    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id', 'id');
    }
    public function plansType()
    {
        return $this->belongsTo(PlansType::class, 'plan_type_id', 'id');
    }
    public function paymmentType()
    {
        return $this->belongsTo(PaymmentType::class, 'paymment_type_id', 'id');
    }    
}
