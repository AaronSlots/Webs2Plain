<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->list() as $iso => $name){
            DB::table('countries')->insert([
                'iso'      =>  $iso,
                'name'      =>  $name,
            ]);
        }
    }

    private function list()
    {
        $countries=file('https://www.textfixer.com/tutorials/dropdowns/country-list-iso-codes.txt');

        foreach($countries as $country){
            $countrydata=explode(':',$country);
            $iso=$countrydata[0];
            $countryname=$iso!='AX'?$countrydata[1]:'Åland';
            $countrylist[$iso]=rtrim($countryname);
        }
        return $countrylist;
    }
}
