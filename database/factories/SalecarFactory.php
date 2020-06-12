<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Salecar;
use Faker\Generator as Faker;

$factory->define(Salecar::class, function (Faker $faker) {
    return [
        'salecar_brand' => $faker->numberBetween($min = 1, $max = 10),
        'salecar_model' => $faker->numberBetween($min = 1, $max = 10),
        'salecar_color' => $faker->colorName,
        'salecar_transmission' => $faker->randomElement($array = array('MT','AT')),
        'salecar_year' => $faker->year($max = 'now'),
        'salecar_mile' => $faker->numberBetween($min = 1, $max = 200000),
        'salecar_carid' => '1 ขค ' . $faker->numberBetween($min = 100, $max = 9999),
        'salecar_province' => $faker->city,
        'salecar_statusbook' => $faker->numberBetween($min = 0, $max = 1),
        'salecar_statusbook_no_financehowmanybaht' => $faker->numberBetween($min = 1000, $max = 5000),
        'salecar_statusbook_no_financehowmanymonth' => $faker->randomElement($array = array(36, 48, 60, 72, 84)),
        'salecar_statusbook_no_namefinance' => $faker->company,
        'salecar_historyclaim' => $faker->text($maxNbChars = 20),
        'salecar_installgas' => $faker->randomElement($array = array('NGV', 'LPG')),
        'salecar_currentdrivecar' => $faker->randomElement($array = array('มือหนึ่ง','มือสอง')),
        'salecar_yournumofcar' => $faker->numberBetween($min = 1, $max = 5),
        'salecar_howlongused' => $faker->numberBetween($min = 1, $max = 20),
        'salecar_cusrequest_saleprice' => $faker->randomFloat($nbMaxDecimals = -3, $min = 50000, $max = 300000),
        'salecar_startprprice' => $faker->randomFloat($nbMaxDecimals = -3, $min = 50000, $max = 300000),
        'customer_id' => factory(App\Model\Customer::class),
    ];
});
