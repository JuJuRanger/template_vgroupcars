<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
// Route::get('/home', 'HomeController@index')->name('home'); // ไม่ได้ใช้ตัวนี้แล้ว ไปศึกษาดู

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/
Route::get('/', 'FrontendController@index');
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
|----USER Auth------------------------------
*/
Route::group([
    'prefix' => 'backend',
    // 'middleware' => 'auth', // แบบ String
    'middleware' => ['auth'], //แบบ Array
], function () {
    Route::get('blank', 'BackendController@index');
    Route::get('dashboard', 'BackendController@dashboard');
    Route::resource('customers', 'CustomerController');
});

/*
|----ADMIN Auth------------------------------
*/
Route::group([
    'prefix' => 'backend',
    // 'middleware' => 'auth',
    // 'middleware' => ['auth']
], function () {
    Route::get('reports', 'BackendController@reports');
    Route::get('users', 'BackendController@users');
    Route::get('settings', 'BackendController@settings');
});
