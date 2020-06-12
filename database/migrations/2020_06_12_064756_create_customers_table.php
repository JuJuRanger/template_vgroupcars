<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
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

            $table->string('name')->comment('ชื่อ-สกุล ลูกค้า');
            $table->string('tel')->nullable()->comment('เบอร์โทรศัพท์');
            $table->string('facebook')->nullable()->comment('เฟสบุ๊ค');
            $table->string('email')->nullable()->comment('อีเมลล์');
            $table->string('sourcecustomer')->nullable()->comment('แหล่งที่มา');
            $table->string('sourcecustomer_etc')->nullable()->comment('แหล่งที่มาอื่นๆ');
            $table->text('address')->nullable()->comment('ที่อยู่ลูกค้า');
            $table->string('occupation')->nullable()->comment('อาชีพของลูกค้า');
            $table->string('province')->nullable()->comment('อยู่จังหวัดไหน');
            $table->integer('interestcus')->nullable()->comment('ความต้องการ/ความสนใจ ของลูกค้า'); //ซื้อ1,2/ขาย/trade
            $table->string('expectchangecar')->nullable()->comment('แนวโน้มคาดว่าจะเปลี่ยนรถ');
            $table->text('detail')->nullable()->comment('บันทึกช่วยจำอื่นๆ');

            /**
             * ข้อมูล User (พนักงานขาย)
             */

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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

