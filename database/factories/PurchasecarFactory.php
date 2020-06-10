<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Purchasecar;
use Faker\Generator as Faker;

$factory->define(Purchasecar::class, function (Faker $faker) {
    return [
        'purchasecar_type_monney' => $faker->randomElement($array = array('สด','ผ่อน')),
        'purchasecar_brand' => $faker->numberBetween($min = 1, $max = 10),
        'purchasecar_model' => $faker->numberBetween($min = 1, $max = 10),
        'purchasecar_color' => $faker->colorName,
        'purchasecar_downpayment' => $faker->numberBetween($min = 10000, $max = 200000),
        'purchasecar_payment' => $faker->numberBetween($min = 5000, $max = 30000),
        'purchasecar_guarantor' => $faker->numberBetween($min = 0, $max = 1),
        'purchasecar_job_guarantor' => $faker->jobTitle,
        'purchasecar_debt' => $faker->numberBetween($min = 0, $max = 1),
        'purchasecar_typedebt' => $faker->creditCardType,
        'purchasecar_debt_namefinance' => $faker->company,
        'purchasecar_debt_howmany' => $faker->randomFloat($nbMaxDecimals = -3, $min = 50000, $max = 300000),
        'purchasecar_blacklist' => $faker->numberBetween($min = 0, $max = 1),
        'purchasecar_compareprice' => $faker->numberBetween($min = 0, $max = 1),
        'purchasecar_comparecompanyname' => $faker->company,
        'purchasecar_offercampaign' => $faker->randomElement($array = array('ผ่อนน้อย','ดาวน์น้อย','ผ่อน 0%','ดอกเบี้ยต่ำ','ไม่มีคนค้ำประกัน')),
        'purchasecar_willingness_to_campaign' => $faker->numberBetween($min = 0, $max = 5),
    ];
});
