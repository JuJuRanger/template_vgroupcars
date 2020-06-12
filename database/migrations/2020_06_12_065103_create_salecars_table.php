<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('salecar_brand')->comment('ยี่ห้อ');
            $table->integer('salecar_model')->nullable()->comment('รุ่น');
            $table->string('salecar_color')->nullable()->comment('สีรถยนต์');
            $table->string('salecar_transmission')->nullable()->comment('เกียร์');
            $table->string('salecar_year')->nullable()->comment('ปีจดทะเบียน');
            $table->integer('salecar_mile')->nullable()->comment('เลขไมล์');
            $table->string('salecar_carid')->nullable()->comment('เลขทะเบียน');
            $table->string('salecar_province')->nullable()->comment('จังหวัด');
            $table->boolean('salecar_statusbook')->comment('สถานะเล่มทะเบียน');
            $table->decimal('salecar_statusbook_no_financehowmanybaht', 10, 2)->nullable()->comment('มียอดติดผ่อนเดือนละเท่าไหร่');
            $table->integer('salecar_statusbook_no_financehowmanymonth')->nullable()->comment('กี่งวด');
            $table->string('salecar_statusbook_no_namefinance')->nullable()->comment('ชื่อไฟแนนซ์');
            $table->string('salecar_historyclaim')->nullable()->comment('ประวัติการชน');
            $table->string('salecar_installgas')->nullable()->comment('ติดตั้งแก๊ส');
            $table->string('salecar_currentdrivecar')->nullable()->comment('ข้อมูลรถปัจจุบันที่ใช้อยู่');
            $table->tinyInteger('salecar_yournumofcar')->nullable()->comment('คันที่เท่าไหร่');
            $table->tinyInteger('salecar_howlongused')->nullable()->comment('อายุการใช้งาน');
            $table->decimal('salecar_cusrequest_saleprice', 10, 2)->nullable()->comment('ราคาที่ลูกค้าต้องการขาย');
            $table->decimal('salecar_startprprice', 10, 2)->nullable()->comment('ราคาที่ให้เบื้องต้น');


            /**
             * สำหรับลูกค้าที่สนใจขายรถมือสอง. -> ลูกค้า
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
        Schema::dropIfExists('salecars');
    }
}
