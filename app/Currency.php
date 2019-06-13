<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $timestamps = false;
    public function paymentOptions()
    {
        return $this->hasMany('App\PaymentOption');
    }
}
