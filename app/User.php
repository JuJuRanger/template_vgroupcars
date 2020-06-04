<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*
     * มีการ Custom Login จากเดิม 'name', 'email', 'password' ******* Day 7 : 2:53:36 *******
     * เป็นการกำหนด field ว่า field ไหนเป็นการเพิ่มลบ แก้ไข ได้ เอาไว้ทำ register
    */
    protected $fillable = [
        'email', 'fullname', 'password', 'gender', 'tel', /*'user_image', 'crebyid', 'crebyname',*/ 'isAdmin', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
