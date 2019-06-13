<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentOption extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'name';
    protected $keyType = 'string';

    public function countries()
    {
        return $this->belongsToMany('App\Country','payment_option__countries');
    }

    public function currency(){
        return $this->belongsTo('App\Currency');
    }
}
