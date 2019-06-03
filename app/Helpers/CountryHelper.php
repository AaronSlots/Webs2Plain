<?php

namespace App\Helpers;
use App\PaymentOption_Country;

class CountryHelper {
    public static function list()
    {
        $countries=file('https://www.textfixer.com/tutorials/dropdowns/country-list-iso-codes.txt');

        foreach($countries as $country){
            $countrydata=explode(':',$country);
            $iso=$countrydata[0];
            $countryname=$iso!='AX'?$countrydata[1]:'Åland';
            $countrylist[$iso]=rtrim($countryname);
        }
        $countrylist['']='--select country--';
        return $countrylist;
    }

    public static function isos()
    {
        return array_diff(array_keys(static::list()),['']);
    }
}
