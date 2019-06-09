<?php

use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periods')->insert([
            'period'      =>  'day',
        ]);
        DB::table('periods')->insert([
            'period'      =>  'week',
        ]);
        DB::table('periods')->insert([
            'period'      =>  'month',
        ]);
        DB::table('periods')->insert([
            'period'      =>  'year',
        ]);
    }
}
