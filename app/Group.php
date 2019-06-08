<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name','description'];
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany('App\GroupUser');
    }
}
