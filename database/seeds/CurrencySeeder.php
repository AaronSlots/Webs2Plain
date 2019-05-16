<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'code'      =>  'AUD',
            'name'      =>  'Australian Dollar',
            'display'   =>  '$',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'BRL',
            'name'      =>  'Brazil',
            'display'   =>  'R$',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'CNY',
            'name'      =>  'Chinese Yuan Renminbi',
            'display'   =>  '¥',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'HRK',
            'name'      =>  'Croatia Kuna',
            'display'   =>  'kn',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'EUR',
            'name'      =>  'Euro',
            'display'   =>  '€',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'GIP',
            'name'      =>  'Gibraltar Pound',
            'display'   =>  '£',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'HUF',
            'name'      =>  'Hungary Forint',
            'display'   =>  'Ft',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'ISK',
            'name'      =>  'Iceland Krona',
            'display'   =>  'kr',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'LTL',
            'name'      =>  'Lithuanian Litas',
            'display'   =>  'Lt',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'NZD',
            'name'      =>  'New Zaeland Dollar',
            'display'   =>  '$',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'NOK',
            'name'      =>  'Norway Krone',
            'display'   =>  'kr',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'PLN',
            'name'      =>  'Poland Zloty',
            'display'   =>  'zł',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'RON',
            'name'      =>  'Romania New Leu',
            'display'   =>  'lei',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'SEK',
            'name'      =>  'Sweden Krona',
            'display'   =>  'kr',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'GBP',
            'name'      =>  'United Kingdom Pound',
            'display'   =>  '£',
        ]);

        DB::table('currencies')->insert([
            'code'      =>  'USD',
            'name'      =>  'US Dollar',
            'display'   =>  '$',
        ]);
    }
}
