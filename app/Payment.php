<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['iban','amount','card_id', 'currency_code', 'period', 'option'];

    public $timestamps = [ "created_at" ];

    public function card()
    {
        return $this->belongsTo('App\Card');
    }

    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }

    public function period()
    {
        return $this->belongsTo('App\User');
    }

    public function paymentOption(){
        return $this->belongsTo('App\PaymentOption');
    }
}
