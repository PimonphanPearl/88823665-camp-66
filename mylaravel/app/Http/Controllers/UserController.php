<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        //สร้าง Array ส่งข้อมูล
        return view('user.index' , ['users'=> $users]);
    }
    function edit($id){
        $user = User::find($id);
        $data['user'] = $user;
        return view('user.edit' , $data);
    }
    function edit_action(Request $req){
       print_r($req->input());
       $muser = User::find($req->id);
       $muser->name = $req->name;
       $muser->email = $req->email;
       $muser->password = $req->password;
       $muser->save();
       return redirect('/users');
    }
    function delete(Request $req){
        $muser = User::find($req->id);
        $muser->delete();
       return redirect('/users');
     }
}
