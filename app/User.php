<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','prepositions','lastname', 'email', 'password', 'country_iso','invite_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;

    public function getFullnameAttribute(){
        if($this->prepositions == null){
            return \Crypt::decrypt($this->firstname).' '.\Crypt::decrypt($this->lastname);
        } else{
            return \Crypt::decrypt($this->firstname).' '.\Crypt::decrypt($this->prepositions).' '.\Crypt::decrypt($this->lastname);
        }
    }

    public function cards()
    {
        return $this->hasMany('App\Card');
    }

    public function groups()
    {
        return $this->belongsToMany('App\Group')->withPivot('group_users','is_admin');
    }

    public function contacts()
    {
        return $this->belongsToMany('App\User')->withPivot('contact_users','favourite');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
