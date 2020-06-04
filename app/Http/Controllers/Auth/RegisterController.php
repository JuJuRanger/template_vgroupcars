<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User; // Model
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers; // namespace use RegisterUsers มาใช้งาน

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME; // ถ้า Login เสร็จแล้วจะพาไปหน้าไหน (ไป HOME)
    protected $redirectTo = 'backend/blank'; // ถ้า Login เสร็จแล้วจะพาไปหน้าไหน (ไป Backend) ### Day 8 20.28 ###

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest'); // Controller นี้ใครๆก็สามารถดูได้เป็น guest ไม่จำเป็นต้องเป็นสิทธิที่เป็น Authen หรือ Login แล้วนะครับ
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*
     * จุดสำคัญ เราจะต้องบอกว่าเรามี Field อะไรเพิ่มขึ้นมาบ้าง
     * มีการ Custom Login จากเดิม 'name', 'email', 'password' ******* Day 7 : 2:56:22 *******
     * เดิม
     * 'name' => ['required', 'string', 'max:255'],
     * 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
     * 'password' => ['required', 'string', 'min:8', 'confirmed'],
    */
    // นี่คือตัว Validate ของหน้า Register
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'fullname' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required'],
            // 'tel' => ['required'],
            // 'user_image' => ['required'],
            // 'crebyid' => ['required'],
            // 'crebyname' => ['required'],
            'isAdmin' => ['required'],
            'status' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /*
     * ส่วนนี้เป็นส่วนที่ทำการเรียก Field ที่เราจะ Create
    */
    protected function create(array $data)
    {
        /*
         * หลักการมันจะดึง Model ที่ชื่อว่า User และใช้ Method create()
         * เพื่อทำการ create ฐานข้อมูลเข้าตาราง User
        */
        return User::create([
            'email' => $data['email'],
            'fullname' => $data['fullname'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'tel' => $data['tel'],
            // 'user_image' => $data['user_image'],
            // 'crebyid' => $data['crebyid'],
            // 'crebyname' => $data['crebyname'],
            'isAdmin' => $data['isAdmin'],
            'status' => $data['status'],
        ]);
    }
}
