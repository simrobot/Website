<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\User;
use App\Entity\MS_Result;
use DB;

class UserController extends Controller
{
    public function index(){
        $user = new User();
        // $res= DB::insert("insert into simrobot_user (u_id,g_id,o_id,r_id,username) values (?,?,?,?,?)",[2,1,1,1,'admin1']);
        // dd($res);
        // dd(json_encode($res,true) );
        return view("admin.login");
    }

    public function login(){
        return view("admin.login");
    }

    public function register(){
        return view("admin.register");
    }
}
