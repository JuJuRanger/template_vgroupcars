<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * กรณีไม่เป็นไปตามเงื่อนไขของ Laravel จะต้อง
     * protected $table = 'customers'; ในกรณี table ไม่เป็นไปตามกฎพหูพจน์
     * protected $primaryKey = 'id'; ในกรณี id ไม่ใช่ id
     * public $incrementing = false; // ในกรณี id ไม่ auto increment
     * protected $keyType = 'string'; // ในกรณี id ไม่ใช่ int
     * public $timestamps = false; // ในกรณีในตารางของเราไม่มี create_at กับ updated_at ต้องปิดก่อน
     */

}
