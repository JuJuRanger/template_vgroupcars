<?php

use Illuminate\Support\Facades\Route;

// resources\views\welcome.blade.php
// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| Login/Register
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home'); // ไม่ได้ใช้ตัวนี้แล้ว ไปศึกษาดู

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/
Route::get('/', 'FrontendController@index');
Route::get('/dropdown', 'DropdownController@dropdown'); // https://www.youtube.com/watch?v=IG5UvPOO7Zc
Route::post('/dropdown/fetch', 'DropdownController@fetch')->name('dropdown.fetch'); // มีเรียกใช้หน้า resources\views\frontend\pages\dropdown.blade.php
// Route::get('login', 'FrontendController@login');
// Route::get('register', 'FrontendController@register');
// Route::get('forgotpass', 'FrontendController@forgotpass');

/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
*/

/*
|----------template autocomplete-------------------------------------------
|
    Route::group([
        'prefix' => 'admin',
        'middleware' => ['groupName']
    ], function () {

    });
|--------------------------------------------------------------------------
*/

/*
|----USER Auth------------------------------user ทั่วไป
*/
Route::group([
    'prefix' => 'backend',
    // 'middleware' => 'auth', // แบบ String
    'middleware' => ['auth'], //แบบ Array
], function () {
    Route::get('/', 'BackendController@index');
    Route::get('blank', 'BackendController@blank');
    Route::get('dashboard', 'BackendController@dashboard');
    Route::resource('customers', 'CustomerController');
    Route::resource('purchases', 'PurchaseController');
    Route::resource('salecars', 'SalecarController');
    Route::resource('trackings', 'TrackingController');
    Route::get('profile', 'BackendController@profile');

    /*
     * หน้าแจ้งเตือน กรณีสิทธืไม่ถูกต้อง หากพยายามเข้าหน้า admin page
     * เราตั้ง redirect หน้าชื่อ 'backend/nopermission' ไว้ (อ้างอิงหน้า app\Http\Middleware\Admin.php)
    */
    Route::get('nopermission', 'BackendController@nopermission');


});

/*
|----ADMIN Auth------------------------------
*/
Route::group([
    'prefix' => 'backend',
    'middleware' => 'admin', // เป็นกันเรียกชื่อที่เราตั้งเองจาก app\Http\Middleware\Admin.php
    // 'middleware' => ['auth']
], function () {
    Route::get('dashboard_management', 'BackendController@dashboard_management');
    Route::get('reports', 'BackendController@reports');
    Route::get('users', 'BackendController@users');
    Route::get('settings', 'BackendController@settings');
});
