<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function myfunction(Request $req) {
        $data['input'] = $req->input('myinput', 1); // รับเลขที่ผู้ใช้ป้อน
        $data['multiplicationTable'] = $this->generateMultiplicationTable($data['input']);
        return view('myview', $data);
    }
    private function generateMultiplicationTable($number) {
        $table = [];
        for ($i = 1; $i <= 12; $i++) {
            $table[$i] = $number * $i;
        }
        return $table;
    }
}
