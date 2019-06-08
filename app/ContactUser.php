<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUser extends Model
{
    protected $fillable = ['user_id','contact_id','favourite'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function contact()
    {
        return $this->belongsTo('App\User', 'contact_id', 'id');
    }
}
