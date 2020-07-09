<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class MyController extends Controller
{
    public function index() {
        // $users = DB::table('users')->get();
        $users = User::all();
        return view(
            'users.index',   //vào foder users trỏ tới file index
            [
                'nguoiDung' => $users,       //nguoiDung để bên view sử dụng
            ]
            );
    }
}
