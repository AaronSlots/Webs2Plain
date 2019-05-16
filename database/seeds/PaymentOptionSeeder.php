<?php

use Illuminate\Database\Seeder;

class PaymentOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_options')->insert([
            'name'          =>  'AstroPay Direct',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'AliPay',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'ArgenCard',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'Banamex',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'Banco de Occidente',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'Banco do Brasil',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'Bancontact (MisterCash)',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'Boleto Bancario',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'BrazilPay Bank Transfer',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'BrazilPay Charge Card',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'Bitcoin',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'CashU',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'Credit Card',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'DirectPayEU',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'EPS',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'Entercash',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'GiroPay',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'IDEAL',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'mCoinz',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'MyBank',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'paysafecard',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'POLI',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'Przelewy24',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'QIWI',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'SafetyPay',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'SEPA',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'SOFORT Überweisung',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'Teleingreso',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'TenPay',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'TrustPay',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'UnionPay',
        ]);

        DB::table('payment_options')->insert([
            'name'          =>  'Verkkopankki',
        ]);
    }
}
