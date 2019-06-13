<?php

use Illuminate\Database\Seeder;

class PaymentOption_CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insert('AR, BR, CL, CO, MX, PE, UY, VE','AstroPay Direct');
        $this->insert('CN','AliPay');
        $this->insert('AR','ArgenCard');
        $this->insert('MX','Banamex');
        $this->insert('CO','Banco de Occidente');
        $this->insert('BR','Banco do Brasil');
        $this->insert('BE','Bancontact (MisterCash)');
        $this->insert('BR','Boleto Bancario');
        $this->insert('BR','BrazilPay Bank Transfer');
        $this->insert('BR','BrazilPay Charge Card');
        $this->insert_helper(App\Country::pluck('iso'),'Bitcoin');
        $this->insert('EG, JO, SA, AE','CashU');
        $this->insert('US','Credit Card');
        $this->insert('AR, AT, BE, HR, CY, CZ, DK, EE, FI, FR, DE, GI, GR, HU, IS, IE, IT, LV, LT, LU, MK, MT, NL, NO, PL, PT, RO, RS, SK, SI, ES, SE, CH, TN, TR, GB','DirectPayEU');
        $this->insert('AT, DE, FI, SE','Entercash');
        $this->insert('AT','EPS');
        $this->insert('DE','GiroPay');
        $this->insert('NL','IDEAL');
        $this->insert('BH, EG, JO, KW, LB, OM, QA, AE','mCoinz');
        $this->insert('IT, ES, GR','MyBank');
        $this->insert('AU, AT, BE, BG, CA, HR, HU, CY, CZ, DK, FI, FR, DE, GB, GI, GR, IE, IT, LI, LV, LT, LU, MT, MX, NL, NO, PE, PL, PT, RO, SK, SI, ES, SE, CH, TR, UY','paysafecard');
        $this->insert('AU, NZ','POLI');
        $this->insert('PL','Przelewy24');
        $this->insert('RU','QIWI');
        $this->insert('AT, CO, CR, DE, ES, MX, NI, NL, PA, PE','SafetyPay');
        $this->insert('AT, BE, BG, HR, CY, CZ, DK, EE, FI, FR, DE, GI, GR, HU, IS, IE, IT, LV, LI, LT, LU, MC, MT, NL, NO, PL, PT, RO, SK, SI, SM, ES, SE, CH, GB','SEPA');
        $this->insert('AT, BE, DE, IT, NL, ES, SK','SOFORT Überweisung');
        $this->insert('ES','Teleingreso');
        $this->insert('CN','TenPay');
        $this->insert('CZ, SK','TrustPay');
        $this->insert('CN','UnionPay');
        $this->insert('FI','Verkkopankki');
    }

    private function insert_helper($isos, $option){
        foreach($isos as $iso){
            DB::table('payment_option__countries')->insert([
                'payment_option'    =>  $option,
                'iso'               =>  $iso,
            ]);
        }
    }



    private function insert($isos, $option){
        $this->insert_helper(explode(', ',$isos), $option);
    }
}
