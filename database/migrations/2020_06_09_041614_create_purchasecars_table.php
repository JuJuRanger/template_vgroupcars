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
            $table->string('purchasecar_type_monney')->comment('ประเภทการซื้อ'); // สด ผ่อน
            $table->integer('purchasecar_brand')->comment('แบรนด์รถยนต์');
            $table->integer('purchasecar_model')->nullable()->comment('รุ่นรถยนต์');
            $table->string('purchasecar_color')->nullable()->comment('สีรถยนต์');
            $table->integer('purchasecar_downpayment')->nullable()->comment('เงินดาวน์');
            $table->integer('purchasecar_payment')->nullable()->comment('ค่างวดที่ต้องการ');
            $table->integer('purchasecar_carprice')->nullable()->comment('ราคารถยนต์');
            $table->boolean('purchasecar_guarantor')->nullable()->comment('ผู้ค้ำ');
            $table->string('purchasecar_job_guarantor')->nullable()->comment('อาชีพคนค้ำ');
            $table->boolean('purchasecar_debt')->nullable()->comment('ภาระหนี้');
            $table->string('purchasecar_typedebt')->nullable()->comment('ประเภทหนี้');
            $table->string('purchasecar_debt_namefinance')->nullable()->comment('ชื่อบริษัทที่ติดไฟแนนซ์');
            $table->integer('purchasecar_debt_howmany')->nullable()->comment('ประมาณเท่าไหร่');
            $table->boolean('purchasecar_blacklist')->nullable()->comment('ประวัติทางการเงิน');
            $table->boolean('purchasecar_compareprice')->nullable()->comment('มีเปรียบเทียบราคากับบริษัทอื่นหรือไม่');
            $table->string('purchasecar_comparecompanyname')->nullable()->comment('ชื่อบริษัทที่เปรียบเทียบ');
            $table->string('purchasecar_offercampaign')->nullable()->comment('แคมเปญที่เสนอลูกค้า');
            $table->tinyInteger('purchasecar_willingness_to_campaign')->nullable()->comment('ระดับความพึงพอใจกับแคมเปญที่เสนอ');
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
