<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlearningController extends Controller
{
    public function employees(){

        # Select All
        // $emp = DB::table('employees')->get(); // select * from employees
        // $emp = DB::table('employees')->get(['id','fullname','email']); // select id,fullname,email from employees

        # Where
        // $emp = DB::table('employees')->where('id',3)->get(['id','fullname','email']); // select id,fullname,email from employees

        # First Record
        // $emp = DB::table('employees')->first();
        // $emp = DB::table('employees')->first(['fullname','email']);

        # Find(id)
        // $emp = DB::table('employees')->find(2); หา single record

        # Where 2 Condition  (where มากกว่า 1 ตัว คือ AND      orWhere คือ เชื่อมด้วยหรือ)
        /* $emp = DB::table('employees')
            ->where('id', 3)
            ->where('statis', 1)
            ->orWhere('age', 22);
            ->first(); */

        # Aggregates
        // $emp = DB::table('employees')->count(); // นับจำนวนรายการใน table
        // $emp = DB::table('employees')->max('age'); // สูงสุด
        // $emp = DB::table('employees')->min('age'); // ต่ำสุด
        // $emp = DB::table('employees')->avg('age'); // เฉลี่ย

        # เช็คข้อมูลใน table
        // $emp = DB::table('employees')->where('id',1)->exists(); // มี return 1
        // $emp = DB::table('employees')->where('id',77)->exists(); // มี return null

        # Raw Expressions SQL
        // $emp = DB::select('SELECT * FROM employees');

        # Order by
        // $emp = DB::table('employees')->orderByDesc('id')->get(); // Desc
        // $emp = DB::table('employees')->orderByDesc('id')->limit(1)->get();
        // $emp = DB::table('employees')->orderBy('id')->get(); // Asc

        // echo "<pre>";
        // print_r($emp);
        // echo "</pre>";
        // // dd($emp);

        # Insert Data ข้อมูลต้องเตรียมชุดคำสั่ง array ไว้ด้วยนะ
        //######### หากเกิดเหตุการนี้คือ email มันซ้ำ ###############
        /* Illuminate\Database\QueryException
        SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'bigrubic@gmail.com' for key 'employees_email_unique' (SQL: insert into `employees` (`fullname`, `gender`, `email`, `tel`, `age`, `address`, `avartar`, `status`) values (JuJu Ranger, Male, bigrubic@gmail.com, 0871111111, 22, 8 bangkok, noavartar.jpg, 1))
        http://mycompany.site/employees */

        //#####################################

        // $data_emp = array(
        //     'fullname' => 'JuJu Ranger',
        //     'gender' => 'Male',
        //     'email' => 'bigrubic@gmail.com',
        //     'tel' => '0871111111',
        //     'age' => 22,
        //     'address' => '8 bangkok',
        //     'avartar' => 'noavartar.jpg',
        //     'status' => 1
        // );

        // $emp = DB::table('employees')->insert($data_emp);
        // print_r($emp);

        # ส่งค่าไปยัง View
        // $emps = DB::table('employees')->paginate(3);

        // foreach ($emps as $emp) {
        //     echo $emp->fullname . " " . $emp->email ."<br>";
        // }

        // return view('pages.employee')->with('emps',$emps);

    }

    public function employeelist() {
        // อ่านข้อมูลทั้งหมดจากตาราง employees
        // $employees = Employee::all(); // select * form employees

        // กำหนด Condition
        // $employees = Employee::where('age', 22)->get();
        // $employees = Employee::where('age', 22)->first();

        // OrderBy
        // $employees = Employee::where('age', 22)->orderBy('id', 'desc')->get();


        // echo "<pre>";
        // print_r($employees);
        // echo "</pre>";
        // $employees = Employee::paginate(3); // select * form employees
        // return view('pages.employeelist')->with('employees', $employees);
    }

    public function index() {
        /*
         * $category = App\Category::all(); //เขียนแบบเต็ม
        */
        // $category = Category::all(); //use App\Category
        // $category = Category::all()->random(10); // สุ่มมา 10 record จาก all
        // $category = Category::find(4); // ใช้สำหรับ primaryKey ที่เป็น int

        ####################################################################################
        ###   Where 2 Condition  (where มากกว่า 1 ตัว คือ AND      orWhere คือ เชื่อมด้วยหรือ)  ###
        ####################################################################################
        // $category = Category::where('id','=','001')->first(); // ใช้สำหรับ primaryKey ที่เป็น string // first() คือเอามา record เดียว หรือ get() ก็ได้
        // $category = Category::where('id','=','001')->get(); = Category::where('id', '001')->get(); // default คือ เท่ากับ
        // $category = Category::where('id','!=','001')->get();
        // $category = Category::where('id','<','100')->where('title','LIKE','M%')->get(); // id < 100 และ ขึ้นต้นด้วยตัว M ใหญ่
        // $category = Category::whereBetween('price', [1000,2000])->get();
        // $category = Category::whereNotBetween('price', [1000,2000])->get();
        // $category = Category::findOrFail(4);  // page 404
        // $category = Category::where('id', '>=', 1)->get();

        // $values = ['Something Cprporate','The Ataris']
        // $category = Category::whereIn('artist', $values)->get(); เลือกเฉพาะคำที่เป็น Value

        // $category = Category::whereNull('artist')->get();
        // $category = Category::whereNotNull('artist')->get();

        // $category = Category::select('name')->where('id', '>=', 1)->get();
        // $category = Category::select('id', 'name')->where('id', '>=', 1)->get();
        // $category = Category::select('id', 'name as Fullname')->where('id', '>=', 1)->orderBy('id', 'desc')->get();
        // $category = Category::orderBy('id', 'desc')->get();
        // $category = Category::latest()->get(); // latest() จะเอาคอลัมน์ created_at มาเรียงจากมากไปน้อย
        // $category = Category::limit(5)->get();
        // $category = Category::take(2)->get();

        // $countRow = Category::count();
        // $countRow = Category::max();
        // $countRow = Category::mix();
        // $countRow = Category::avg();
        // $countRow = Category::sum();


        // return $category;  // เรียกดูค่า $category มันจะออกมาเป็น JSON


        // return view('backend.category.index', [
        //     'category' => $category,
        //     'countRow' => $countRow
        // ]);
    }

    public function store() {

        ##### Create item ######
        // $cat = new Category();
        // $cat->name = 'เครื่องดื่ม-';
        // $cat->save();

        ####  Edit item #####
        // $cat = Category::find(4);
        // $cat->name = 'Drink';
        // $cat->save();

        ####  Delete item ที่ละ Record #####
        // $cat = Category::find(4);
        // $cat->delete();

        ####  Delete item ที่ละ หลาย Record #####
        // Category::destroy(5,6); //ใช้กับ id เท่านั้น

        // return 'delete ok';

    }
}
