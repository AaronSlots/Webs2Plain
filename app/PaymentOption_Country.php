<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentOption_Country extends Model
{
    public function getCountryName()
    {
        return \Country::list()->find($this->iso);
    }
}