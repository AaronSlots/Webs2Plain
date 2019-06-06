<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactList extends Model
{
    protected $fillable = ['user_id','contact_id','favourite'];

    protected $primaryKey = 'primary';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function contact()
    {
        return $this->belongsTo('App\User', 'contact_id', 'id');
    }
}
