<?php

namespace App\Http\Middleware; // พื้นฐานมันจะอ้างอิง namespace ที่ชื่อว่า Middleware

use Closure; // จะเป็นที่ตัวที่คอยตรวจเช็ค url ของเราอยู่ path อะไร และจะพาไปยังหน้าต่อไปที่ไหน

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * Day8 58:15
     * ข้อสังเกตการสร้าง Middleware
     * 1.จะมี function 1 ตัวเท่านั้น ชื่อ function ว่า handle
     * function handle เป็นหัวใจสำคัญ !! ของ Middleware เลบครับ
     * เป็น function ที่ Middleware ตั้งใจทำมาเพื่อให้เราเอาไว้กรองของ
     * พูดง่ายๆ มันคือเครื่องกรอง
     *
     * handle มันจะคอยเช็คว่า URL ที่เรา Request ว่ามันคือ URL อะไร ตัว Request จะเข้าไปเช็ค
     * พอเช็คแล้วเราสามารถใส่เงื่อนไขเข้าไปในตัว handle นี่แหละได้ครับผม
     *
     * คือถ้ามันเจอ URL อะไรก็ตามให้มันไปต่อได้ คือให้มัน next ได้ต่อไป
     *
     * แสดงว่าตอนนี้ middleware ตัวนี้ไม่ได้กรองอะไรเลยครับผม
     * เป็นเหมือนเครือ่งกรองน้ำที่ยังไม่ได้ใส่ไส้กรอง (ตั้งติดเครื่องกรองแล้วแต่ยังไม่ได้ใส่กรอง)
     *
     * #### ฉะนั้นเราจะต้องเขียน function ตรวจ if else กันในนี้ #####
     * #### แล้วคุณแค่เอา Admin ไปใช้ #####
     * ตัวอย่างเช่น
     * 1.คุณจะตรวจอะไรก็ได้ เช่นถ้าเจอคำว่า admin เราถึงจะให้ next ต่อไปได้
     * เราจะยังไม่ return เราจะตรวจสอบสิทธิ์ if ก่อน return
     * จะเอา if , session , cookies ได้หมดครับ
     * ฉะนั้นหน้าที่ของ handle ก็แค่พาส่งเราไปที่ URL ถัดไปดมื่อมันผ่าน
     * มันไม่ได้รู้ว่า URL ไหนจนกว่าเราจะสั่งไว้ใน if else
     */
    public function handle($request, Closure $next)
    {
        // ตรวจสอบการกรอง ตรวจสอบสิทธิ์ ของ Admin
        /*
         * ถ้าคนคนนี้เป็น Admin เราถึงจะให้พาไปต่อ
         * เช่น ถ้าเป็นจริงให้ไปต่อ ถ้าเป็น เท็จให้กลับไปหน้า Login (ป้องกันการ Get URL ของ Admin)
         * เช่น ถ้าเค้าเป็นสมาชิกทั่วไปเค้าพยายามพิมพ์เข้าหน้าของ Admin เราอาจจะเตือนเค้าก็ได้ พื้นที่นี้เป็นของ Admin เท่่านั้น
        */
        /* เช็คว่า empty รึเปล่า ตัว auth()
         * method นี้เป็นการเช็คว่าสิทธิ์ user
         * user ก็คือตาราง user ที่มันส่งมาเป็นคำว่า isAdmin มั้ย
         * isAdmin เป็นชื่อ Field ใน Database
         * คำว่า auth()->user() เป็น feature ที่เกิดจากการ Login และก็จะดึงข้อมูลในตาราง user เราได้เลย
         * user() คือชื่อเหมือนชื่อของ Model User นะครับ (app\User.php)
         *
         * จากนั้นถ้ามีคนเข้ามาตรงๆ
         * ถ้าไม่ได้เป็น Admin ถ้าเป็น 0 ผมจะให้มันออกไปเลยครับ ถ้าพิมพ์ตรงๆ ให้มัน Logout ไปเลย
         * เหมือนกับคนที่เป็น Admin อยากเข้าหลังบ้านก็ต้องทำการ Login ก่อนถึงจะได้นะครับ
         * คนที่พยายามเข้า Admin ตรงๆ จะพาไปหน้า Login เหมือนกับ User ทั่วไปครับ ให้ Login ให้เรียบร้อยก่อน
         *
         * แต่ถ้า
        */

        if (empty(auth()->user()->isAdmin)) {
            // Auth()->logout();
            // return redirect('login'); // กระบวนกันนี้แค่เช็คว่า เค้าผ่านกระบวนการ Login รึยังเช็คคนที่เป็น Admin และคนทั่วไปด้วยนะครับ
            return redirect('backend/nopermission')->with('error','You have not admin access');
        } else {
            if(auth()->user()->isAdmin == 1) {
                return $next($request); // ถ้า Admin มีค่าเป็น 1 ให้มันไปต่อได้นะครับ ผ่านกฎที่กำหนด
            }
        }
        /**
         * ดัก ในกรณีที่เค้าผ่านทุกอย่างหมดแล้ว เค้า Login แล้ว, แต่เค้าแอบไปเข้า URL ของ admin จะให้มัน Redirect ไปเตือน
         * ผมจะ Redirect ไปที่ตัวหน้า Backend แล้วผมจะสร้างหน้า NoPermission ไว้
         * ผมก็จะใส่ Message ไว้ "You have not admin access"
         * สรุปคือ ถ้าเค้า Login อยู่และพยายาม เข้า Admin ก็จะส่งข้อความนี้ไป "You have not admin access"
         *
         * เมื่อทุกอย่างเสร็จแล้ว เวลาเอาไปใช้ !!
         * เราต้องเอาตัวนี้ไป Register ก่อนที่ Kernel (app\Http\Kernel.php) เสมอ
         * ถ้าเราไม่ Register ไอตัว Middleware มันไม่รู้นะครับว่ามีของใหม่เข้ามา
         *
         * (Day8 : 1:17:08)
         * ไปหน้า Kernel กัน
        */



    }
}
