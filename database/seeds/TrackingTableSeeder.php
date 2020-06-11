<?php

use Illuminate\Database\Seeder;
use App\Model\Tracking;

class TrackingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tracking::class, 50)->create();
    }
}
