<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Entity\User;
use App\Entity\AccessLog;

use App\Extend\SmService;
use App\Extend\ClientInfo;
use App\Extend\MS_Result;
 
use DB;

class UserController extends Controller
{
    public function index(){
        $user = new User();
        $ss = new SmService();
        $users = User::select(DB::raw('u_id,username,email,realname'))->paginate(15);  
        
        foreach($users as $user){
            $user->username = $ss->sm4_decode($user->username)->data;
            $user->email = $ss->sm4_decode($user->email)->data;
            $user->realname = $ss->sm4_decode($user->realname)->data;
            
        }

        return view("admin.user.index", ['users' => $users]);
    }
    public function register(){
        return view("admin.register");
    }

    public function edit(Request $request){
        $ss = new SmService();        
        $id = $request->input("id");

        $user = User::where('u_id','=',$id)->first(['u_id','username','email','realname']);
        $user->username = $ss->sm4_decode($user->username)->data;
        $user->email = $ss->sm4_decode($user->email)->data;
        $user->realname = $ss->sm4_decode($user->realname)->data;

        return view('admin.user.edit')->with("user",$user);
    }
    public function add(){
        return view ('admin.user.add');
    }


    public function login(){
        return view("admin.login");
    }

}
