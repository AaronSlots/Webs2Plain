<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $primaryKey = 'period';
    public $timestamps = false;

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}
