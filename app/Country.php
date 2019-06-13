<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;
    public function paymentOption()
    {
        return $this->belongsToMany('App\PaymentOption','payment_option__countries');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
