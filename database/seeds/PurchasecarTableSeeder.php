<?php

use Illuminate\Database\Seeder;
use App\Model\Purchasecar;

class PurchasecarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Purchasecar::class, 70)->create();
    }
}
