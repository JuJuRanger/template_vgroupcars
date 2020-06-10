<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'tel' => $faker->tollFreePhoneNumber,
        'facebook' => $faker->freeEmail,
        'sourcecustomer' => $faker->numberBetween($min = 1, $max = 3),
        // 'sourcecustomer_etc' => $faker->xxx,
        'address' => $faker->streetAddress,
        'occupation' => $faker->jobTitle,
        'province' => $faker->city,
        'interestcus' => $faker->numberBetween($min = 1, $max = 5),
        'expectchangecar' => $faker->numberBetween($min = 1, $max = 4),
        'detail' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        // 'user_id' => $faker->xxxxx,
        // 'salecar_id' => $faker->xxxxx,
        // 'purchasecar_id' => $faker->xxxxx,
        // 'tracking_id' => $faker->xxxxx,
    ];
});
