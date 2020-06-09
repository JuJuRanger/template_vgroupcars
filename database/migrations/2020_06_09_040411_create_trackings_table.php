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
            $table->integer('tracking_no')->unique(); // ครั้งที่_ห้ามซ้ำ
            // $table->timestamp('tracking_verified_at')->nullable(); // วันเวลา timestamps
            $table->string('tracking_generatehotwarmcold');
            $table->integer('tracking_status');
            $table->text('tracking_description')->nullable();
            $table->integer('tracking_pointcontactnext');
            $table->date('tracking_pointcontactnext_date');
            $table->time('tracking_pointcontactnext_time', 0);
            $table->string('tracking_pointcontactnext_etc');
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
