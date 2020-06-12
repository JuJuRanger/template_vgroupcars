<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Tracking;
use Faker\Generator as Faker;

$factory->define(Tracking::class, function (Faker $faker) {
    return [
        'tracking_no' => $faker->numberBetween($min = 1, $max = 5),
        'tracking_generatehotwarmcold' => $faker->randomElement($array = array('HOT','WARM','COLD')),
        'tracking_status' => $faker->randomElement($array = array('กำลังดำเนินการ','ปิดการจอง','ปิดการขาย','ตามต่อไม่ได้')),
        'tracking_description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'tracking_pointcontactnext' => $faker->randomElement($array = array('นัดหมายลูกค้า','ติดตามผล','ให้ข้อมูลเพิ่มเติมลูกค้า','ต่อรองแคมเปญ','อื่นๆ')),
        'tracking_pointcontactnext_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'tracking_pointcontactnext_time' => $faker->time($format = 'H:i:s', $max = 'now'),
        // 'tracking_pointcontactnext_etc' => $faker->xxxxx,
        'customer_id' => factory(App\Model\Customer::class),
    ];
});
