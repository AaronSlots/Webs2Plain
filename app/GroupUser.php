<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    protected $fillable = ['is_admin','group_id','user_id'];

    protected $primaryKey = 'primary';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
