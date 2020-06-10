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
            $table->string('purchasecar_type_monney');
            $table->integer('purchasecar_brand');
            $table->integer('purchasecar_model');
            $table->string('purchasecar_color');
            $table->integer('purchasecar_downpayment');
            $table->integer('purchasecar_payment');
            $table->boolean('purchasecar_guarantor');
            $table->string('purchasecar_job_guarantor');
            $table->boolean('purchasecar_debt');
            $table->string('purchasecar_typedebt');
            $table->string('purchasecar_debt_namefinance');
            $table->integer('purchasecar_debt_howmany');
            $table->boolean('purchasecar_blacklist');
            $table->boolean('purchasecar_compareprice');
            $table->string('purchasecar_comparecompanyname');
            $table->string('purchasecar_offercampaign');
            $table->tinyInteger('purchasecar_willingness_to_campaign');
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
