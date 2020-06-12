<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tracking_no')->comment('ครั้งที่_');
            // $table->timestamp('tracking_verified_at')->nullable(); // วันเวลา timestamps
            $table->string('tracking_generatehotwarmcold')->comment('ประเมินความสนใจของลูกค้า');
            $table->string('tracking_status')->comment('สถานะการขาย');
            $table->text('tracking_description')->nullable()->comment('หมายเหตุ');
            $table->string('tracking_pointcontactnext')->comment('จุดประสงค์ในการติดต่อในครั้งถัดไป');
            $table->date('tracking_pointcontactnext_date')->comment('วันที่การติดต่อในครั้งถัดไป');
            $table->time('tracking_pointcontactnext_time', 0)->nullable()->comment('เวลาการติดต่อในครั้งถัดไป');
            $table->string('tracking_pointcontactnext_etc')->nullable()->comment('จุดประสงค์ในการติดต่อในครั้งถัดไป_อื่นๆ');

            /**
             * การติดตาม -> ลูกค้า.
             */

            $table->unsignedInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers');

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
        Schema::dropIfExists('trackings');
    }
}
