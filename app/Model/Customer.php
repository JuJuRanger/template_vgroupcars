<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * กรณีไม่เป็นไปตามเงื่อนไขของ Laravel จะต้อง
     * protected $table = 'customers'; ในกรณี table ไม่เป็นไปตามกฎพหูพจน์ หรือ กรณีชื่อตารางไม่ตรงกับ Model 'tbl_employee'
     * protected $primaryKey = 'id'; ในกรณี id ไม่ใช่ id เช่น emp_id
     * public $incrementing = false; // ในกรณี id ไม่ auto increment
     * protected $keyType = 'string'; // ในกรณี id ไม่ใช่ int
     * public $timestamps = false; // ในกรณีในตารางของเราไม่มี create_at กับ updated_at ต้องปิดก่อน
     * protected $timestamps = false; // ในกรณีในตารางของเราไม่มี create_at กับ updated_at ต้องปิดก่อน
     * const CREATED_AT = 'creation_date'; // การเปลี่ยนชื่อฟิลด์ create_at และ updated_at
     * const UPDATE_AT = 'last_update'; // การเปลี่ยนชื่อฟิลด์ create_at และ updated_at
     */

    public function index() {

    }
}
