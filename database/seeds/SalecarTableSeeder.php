<?php

use Illuminate\Database\Seeder;
use App\Model\Salecar;

class SalecarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Salecar::class, 50)->create();
    }
}
