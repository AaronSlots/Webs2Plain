<?php

namespace App\Helpers;
use \Crypt;

class UserHelper {
    public static function fullname($user)
    {
        if($user->prepositions == null){
            return Crypt::decrypt($user->firstname).' '.Crypt::decrypt($user->lastname);
        } else{
            return Crypt::decrypt($user->firstname).' '.Crypt::decrypt($user->prepositions).' '.Crypt::decrypt($user->lastname);
        }
    }
}
