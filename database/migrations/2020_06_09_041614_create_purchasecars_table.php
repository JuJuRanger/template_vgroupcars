<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasecarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchasecars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchasecar_type_monney');
            $table->string('purchasecar_brand');
            $table->string('purchasecar_model');
            $table->string('purchasecar_color');
            $table->string('purchasecar_downpayment');
            $table->string('purchasecar_payment');
            $table->integer('purchasecar_guarantor');
            $table->string('purchasecar_job_guarantor');
            $table->integer('purchasecar_debt');
            $table->string('purchasecar_typedebt');
            $table->string('purchasecar_debt_namefinance');
            $table->string('purchasecar_debt_howmany');
            $table->integer('purchasecar_blacklist');
            $table->integer('purchasecar_compareprice');
            $table->string('purchasecar_comparecompanyname');
            $table->string('purchasecar_offercampaign');
            $table->integer('purchasecar_willingness_to_campaign');
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
        Schema::dropIfExists('purchasecars');
    }
}
