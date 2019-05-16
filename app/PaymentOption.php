<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentOption extends Model
{
    public function countries(){
        return $this->hasMany('App\Comment');
    }
}
