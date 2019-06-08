<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentOption extends Model
{
    public $timestamps = false;
    public function countries(){
        return $this->hasMany('App\Comment');
    }
}
