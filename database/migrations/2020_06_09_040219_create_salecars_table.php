<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Model\Salecar;

class CreateSalecarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salecars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salecar_brand');
            $table->integer('salecar_model');
            $table->string('salecar_color');
            $table->string('salecar_transmission');
            $table->string('salecar_year');
            $table->integer('salecar_mile');
            $table->string('salecar_carid');
            $table->string('salecar_province');
            $table->boolean('salecar_statusbook');
            $table->decimal('salecar_statusbook_no_financehowmanybaht', 10, 2);
            $table->integer('salecar_statusbook_no_financehowmanymonth');
            $table->string('salecar_statusbook_no_namefinance');
            $table->string('salecar_historyclaim');
            $table->string('salecar_installgas');
            $table->string('salecar_currentdrivecar');
            $table->tinyInteger('salecar_yournumofcar');
            $table->tinyInteger('salecar_howlongused');
            $table->decimal('salecar_cusrequest_saleprice', 10, 2);
            $table->decimal('salecar_startprprice', 10, 2);
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
        Schema::dropIfExists('salecars');
    }
}
