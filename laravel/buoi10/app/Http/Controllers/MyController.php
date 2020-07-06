<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    public function index() {
        // return view('DataUser');
        $users = DB::table('users')->get();
        return view(
            'users.index',   //vào foder users trỏ tới file index
            [
                'nguoiDung' => $users       //nguoiDung để bên view sử dụng
            ]
            );
    }
}
