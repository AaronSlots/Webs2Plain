<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['iban','description','user_id'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}
