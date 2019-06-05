<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['iban','amount','card_id', 'currency_code'];

    public function card()
    {
        return $this->belongsTo('App\Card');
    }

    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }
}
