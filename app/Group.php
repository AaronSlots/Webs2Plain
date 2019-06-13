<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['title','description'];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('contact_users','favourite');
    }
}
