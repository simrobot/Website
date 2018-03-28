<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extend\ClientInfo;
use App\Extend\MS_Result;
use App\Entity\User;

class IndexController extends Controller
{
    public function index(){
        return view("admin.index");
    }
    public function demo(){
        $ms = new MS_Result;
        $ms->data = "123";
        $user = new User();
        $ms->data = $user->get();

        return $ms->toJson();
    }
    public function login(){
        return view("admin.login.");
    }
}
