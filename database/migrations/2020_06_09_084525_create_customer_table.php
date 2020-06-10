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
            $table->string('tel')->nullable();
            $table->string('facebook')->nullable();
            $table->string('email')->nullable();
            $table->string('sourcecustomer')->nullable(); // แหล่งที่มา
            $table->string('sourcecustomer_etc')->nullable(); // แหล่งที่มาอื่นๆ
            $table->text('address')->nullable();
            $table->string('occupation')->nullable();
            $table->string('province')->nullable();
            $table->integer('interestcus')->nullable(); //need
            $table->string('expectchangecar')->nullable();
            $table->text('detail')->nullable(); // บันทึกช่วยจำอื่นๆ หน้าแรก

            /**
             * ข้อมูล User (พนักงานขาย)
             */

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            /**
             * สำหรับลูกค้าที่สนใจขายรถมือสอง.
             */

            $table->unsignedInteger('salecar_id')->nullable();
            $table->foreign('salecar_id')->references('id')->on('salecars')->onDelete('cascade');

            /**
             * สำหรับลูกค้าที่สนใจซื้อรถ.
             */

            $table->unsignedInteger('purchasecar_id')->nullable();
            $table->foreign('purchasecar_id')->references('id')->on('purchasecars')->onDelete('cascade');

            /**
             * การติดตาม.
             */

            $table->unsignedInteger('tracking_id')->nullable();
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

