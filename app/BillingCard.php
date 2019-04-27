<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BillingCard extends Model
{
    use Notifiable;
    protected $guarded = [];

    public function subscriptions()
    {
        return $this->hasMany('App\Subscription');
    }
}
