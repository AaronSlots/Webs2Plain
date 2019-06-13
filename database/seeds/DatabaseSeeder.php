<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(PaymentOptionSeeder::class);
        $this->call(PaymentOption_CountrySeeder::class);
        $this->call(PeriodSeeder::class);
    }
}
