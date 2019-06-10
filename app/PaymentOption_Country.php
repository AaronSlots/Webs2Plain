<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentOption_Country extends Model
{
    public $timestamps = false;
    public function getCountrynameAttribute()
    {
        return \Country::list()->find($this->iso)->pluck('name');
    }
}
