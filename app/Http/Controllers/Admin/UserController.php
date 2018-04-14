<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Entity\User;
use App\Entity\AccessLog;

use App\Extend\SmService;
use App\Extend\ClientInfo;
use App\Extend\MS_Result;
use App\Extend\SM4;

use DB;

class UserController extends Controller
{
    public function login(){
        return view("admin.login");
    }

    public function register(){
        return view("admin.register");
    }
}
