<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extend\Ms_Result;
use App\Entity\User;
use Session;
use DB;
/*
 * @Author: Kyle Liu 
 * @Date: 2018-03-27 15:09:28 
 * @Last Modified by: Kyle Liu
 * @Last Modified time: 2018-03-28 13:00:44
 * Descriptions: 
*/
class UserController extends Controller
{
    public function login(Request $request){
        $ms = new MS_Result;
        $ms->status = 1;
        $ms->message = "系统错误！";

        $sEmail = $request->input("email");
        $sPassword = $request->input("password");

        // 判断用户是否存在
        if(!User::where('email','=',$sEmail)->exists()){
            $ms->status = 2;
            $ms->message = "用户不错在！";
            return $ms->toJson();
        }

        // 验证密码
        $user = User::where('email','=',$sEmail)->find(1);
        if(strcmp( decrypt($user->password) , $sPassword)){
            $ms->status = 2;
            $ms->message = "密码错误！";
            $ms->data = null;
            return $ms->toJson();
        }

        $ms->status = 0;
        $ms->message = "登录成功";
        Session::put('isLogin',encrypt(1));
        return $ms->toJson();   
    }
    public function loginout(Request $request){
        $ms = new MS_Result;
        $ms->status = 0;
        $ms->message = "注销成功！";
        $ms->data = $request;
        Session::forget('isLogin');
        return $ms->toJson();
    }
    public function register(Request $request){
        $ms = new MS_Result;
        $ms->status = 1;

        // 获取Ajax传入的数据
        $sName = $request->input("username");
        $sPassword = $request->input("password");
        $scPassword = $request->input("cpassword");
        $sEmail = $request->input("email");

        // 对数据进行验证
        if(!$sPassword){
            $ms->status = 2;
            $ms->message = "密码不能为空！";
            return $ms->toJson();
        }
        if(!$sName){
            $ms->status = 2;
            $ms->message = "用户名不能为空！";
            return $ms->toJson();
        }
        if(!$sEmail){
            $ms->status = 2;
            $ms->message = "邮箱不能为空！";
            return $ms->toJson();
        }
        
        // 检测用户名时候存在
        if(DB::table('user')->where('username', '=', $sName)->count()){
            $ms->status=2;
            $ms->message = "用户名已经存在！";
            return $ms->toJson();
        }
        // 检测邮箱时候存在
        if(DB::table('user')->where('email', '=', $sEmail)->count()){
            $ms->status=2;
            $ms->message = "用户名已经存在！";
            return $ms->toJson();
        }

        //禁止注册 
        $ms->status = 2;
        $ms->message = "暂未开放注册!";
        return $ms->toJson();

        // 添加用户
        // $id = DB::table("user")->insertGetId([
        //     'username' => $sName,
        //     'password' => $sPassword,
        //     'email' => $sEmail,
        //     'g_id' => 0,
        //     'o_id' => 0,
        //     'r_id' => 0,
        // ]);
        
        $user = new User();        
        $user->username = $sName;
        $user->password = $sPassword;
        $user->email = $sEmail;
        $user->g_id = 0;
        $user->o_id = 0;
        $user->r_id = 0;
        $ms->data = $user->save();
            

        return $ms->toJson();    
    }

}
