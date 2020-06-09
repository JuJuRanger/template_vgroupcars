<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');

            /**
             * ข้อมูลลูกค้า.
             */

            $table->string('name');
            $table->string('tel');
            $table->string('facebook');
            $table->string('email');
            $table->string('sourcecustomer'); // แหล่งที่มา
            $table->string('sourcecustomer_etc'); // แหล่งที่มาอื่นๆ
            $table->text('address');
            $table->string('occupation');
            $table->string('province');
            $table->integer('interestcus'); //need
            $table->string('expectchangecar');
            $table->text('detail'); // บันทึกช่วยจำอื่นๆ หน้าแรก

            /**
             * ข้อมูล User (พนักงานขาย)
             */

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            /**
             * สำหรับลูกค้าที่สนใจขายรถมือสอง.
             */

            $table->unsignedInteger('salecar_id');
            $table->foreign('salecar_id')->references('id')->on('salecars')->onDelete('cascade');

            /**
             * สำหรับลูกค้าที่สนใจซื้อรถ.
             */

            $table->unsignedInteger('purchasecar_id');
            $table->foreign('purchasecar_id')->references('id')->on('purchasecars')->onDelete('cascade');

            /**
             * การติดตาม.
             */

            $table->unsignedInteger('tracking_id');
            $table->foreign('tracking_id')->references('id')->on('trackings')->onDelete('cascade');

            /**
             * อื่นๆ.
             */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

