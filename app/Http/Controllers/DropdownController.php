<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DropdownController extends Controller
{
    public function dropdown(){
        $list = DB::table('provinces')
        ->orderBy('name_th')
        ->get();
        return view('frontend.pages.dropdown')->with('list', $list);
    }

    public function fetch(Request $request){
        // echo $request->get('select');
        // ทำการ echo $request ส่งมาดึงมาจากตัวแปรที่ชื่อ select ผ่าน AJAX.data.select
        // และต้องไม่ลืมระบุ CSRF ด้วย
        $id = $request->get('select');

        /**
         * ให้ไปดึงข้อมูลจาก 2 ตารางนี้ คือ provinces , amphures
         * โดยมีเงื่อนไขคอลัม province.id = amphures.province_id จะต้องเท่ากัน (รูปแบบ inner join)
         * แล้วทำการ select เพื่อดึงข้อมูล ในที่นี้จะดึงจากตาราง amphures ตามด้วยชื่อ column
         * where ตาราง provinces เท่ากับ $id ที่รับมา
         * จัด group ตาม amphures.name_th
         * และสุดถ้าดึงข้อมูลมา  เก็บไว้ในตัวแปร $query
         *
         * จากนั้นทำการ Reponse กับไป
         * .= เป็นการต่อ string
         *
        */
        $query = DB::table('provinces')
        ->join('amphures', 'provinces.id', '=', 'amphures.province_id')
        ->select('amphures.name_th')
        ->where('provinces.id', $id)
        ->groupBy('amphures.name_th')
        ->get();

        $output = '<option value="">เลือกอำเภอ</option>';
        foreach ($query as $row) {
            $output .= '<option value="' . $row->name_th.'">' . $row->name_th . '</option>';
        }
        return $output; // <option value="">เลือกอำเภอ</option><option value="">สายไหม</option><option value="">คลองถนน</option>
    }
}
