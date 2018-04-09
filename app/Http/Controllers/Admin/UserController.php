<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\User;

use app\Entity\MS_Result;
use DB;

class UserController extends Controller
{
    public function index(){
        $user = new User();
        $users = User::select(DB::raw('u_id,username,email,realname'))->paginate(15);        
        return view("admin.user.index", ['users' => $users]);
    }
    public function add(){
        return view("admin.user.add");
    }
    public function del(Request $request){
        $id = $request->input('id');
        $res = User::where('u_id','=', $id)->delete();
       
       if($res){
           return "<script>
            alert('删除成功');
            location.pathname='/admin/user/index';
           </script>";
       }
       
        // return view("admin.user.add");
    }

    public function login(){
        return view("admin.login");
    }

    public function register(){
        return view("admin.register");
    }
    public function edit(Request $request){
        $id = $request->input();
        $user = User::select(DB::raw('u_id,username,email,realname'))->where('u_id','=',$id)->get()[0];
        // dd($user);
        return view('admin.user.edit')->with('user',$user);

    }
}
