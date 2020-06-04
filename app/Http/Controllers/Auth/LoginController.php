<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME; // ถ้า Login เสร็จแล้วจะพาไปหน้าไหน (ไป HOME)
    protected $redirectTo = 'backend'; // ถ้า Login เสร็จแล้วจะพาไปหน้าไหน (ไป Backend) ### Day 8 20.28 ###

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // สร้างฟังก์ชัน Logout
    public function logout(){
        // กระบวนตรงนี้เป็นการ clear Session ด้วย
        Auth()->logout(); // เรียก App\Http\Controllers\Auth จะมี function logout() อยู่ในนั้น
        return redirect('login'); // ส่งไปหน้า login
    }
}
