<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// เพิ่มลงฐาน database ใน mySQL ต้องใช้คำสั่งเรียกใช้งาน Models User ไม่งั้นจะทำไม่ได้
// step 1
use App\Models\User; 

class RegisterController extends Controller
{
    function index(){
        return view('register');
    }
    // step 2
    function create(Request $req){
      //  print_r($req->input());
        $muser = new User();
        $muser->name = $req->input('name');
        $muser->email = $req->email;
        $muser->password = $req->password;
        $muser->save(); //บันทึกลงฐานข้อมูล
        return redirect('/users'); //พอทำกระบวณการทั้งหมดเสร็จให้มาหน้า user เลย 
    }
}