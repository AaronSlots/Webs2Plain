<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}
