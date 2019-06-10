<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['title','description'];
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany('App\GroupUser');
    }
}
