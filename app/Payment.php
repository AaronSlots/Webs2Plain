<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Payment extends Model
{
    use Notifiable;
    protected $guarded = [];
}
