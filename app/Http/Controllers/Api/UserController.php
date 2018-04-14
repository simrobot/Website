<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extend\ClientInfo;
use App\Extend\MS_Result;
use App\Extend\SmService;
use App\Extend\SM4;
use App\Entity\User;
use App\Entity\AccessLog;
use Session;
use DB;

/*
 * @Author: Kyle Liu 
 * @Date: 2018-03-27 15:09:28 
 * @Last Modified by: Kyle Liu
 * @Last Modified time: 2018-04-14 21:16:24
 * Descriptions: 
*/
class UserController extends Controller
{
    public function login(Request $request){
        $ms = new MS_Result;
        $ms->status = 1;
        $ms->message = "系统错误！";
        $ss = new SmService();
        $ss->sm4_encode("asd")->data;
        
        $sEmail = $request->input("email");
        $sPassword = $request->input("password");

        $sEmail =  $ss->sm4_encode($sEmail)->data;
        $sPassword = $ss->sm4_encode($sPassword)->data;
        // return $sEmail;
        
        // $user = User::where('email','=',$sEmail)->get()[0];
        // $ms->data = $user;
        // return $ms->toJson();

        // 判断用户是否存在
        if(!User::where('email','=',$sEmail)->exists()){
            $ms->status = 2;
            $ms->message = "用户不错在！";
            return $ms->toJson();
        }
         

        // 验证密码
        $user = User::where('email','=',$sEmail)->get()[0];
        if(strcmp( $user->password , $sPassword)){
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
        $ms->message = "系统错误！";
        
        $ss = new SmService();


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




        // 添加用户
        // $id = DB::table("user")->insertGetId([
        //     'username' => $sName,
        //     'password' => $sPassword,
        //     'email' => $sEmail,
        //     'g_id' => 0,
        //     'o_id' => 0,
        //     'r_id' => 0,
        // ]);
        
        // $ms->data = $ss->sm4_encode("asd");;
        // return $ms->toJson();
        
        $user = new User();        
        $user->username = $ss->sm4_encode($sName)->data;
        $user->password = $ss->sm4_encode($sPassword)->data;
        $user->email = $ss->sm4_encode($sEmail)->data;
        $user->realname = $ss->sm4_encode(" ")->data;
        $user->g_id = 0;
        $user->o_id = 0;
        $user->r_id = 0;
        $ms->data = $user->save();

        $ms->status = 0;
        $ms->message = "注册成功";
            
        return $ms->toJson();    
    }
    public function list(){
        // $user = DB::table("user")->pluck("u_id","username","email","realname");
        $users = User::select(DB::raw('u_id,username,email,realname'))->paginate(15);
        foreach($users as $user){
            $user->username = $ss->sm4_decode($user->username)->data;
            $user->email = $ss->sm4_decode($user->email)->data;
            $user->realname = $ss->sm4_decode($user->realname)->data;
            
        }

        
        // $user = DB::select('select * from simrobot_user ');
        
        return $users;
    }
    public function add(Request $request){
        $ms = new MS_Result;
        $ms->status = 1;
        $ms->message = "系统错误！";
        
        $ss = new SmService();

        $sUsername = $request->input("username");
        $sEmail = $request->input("email");
        $sPassword = $request->input("password");

        $sUsername = $ss->sm4_encode($sUsername)->data;
        $sEmail = $ss->sm4_encode($sEmail)->data;
        $sPassword = $ss->sm4_encode($sPassword)->data;

        // 判断用户是否存在
        if(User::where('username','=',$sUsername)->exists()){
            $ms->status = 2;
            $ms->message = "用户名已经存在！";
            return $ms->toJson();
        }

        // 判断邮箱是否存在
        if(User::where('email','=',$sEmail)->exists()){
            $ms->status = 2;
            $ms->message = "邮箱已经存在！";
            return $ms->toJson();
        }

        $user = new User();
        $user->username = $sUsername;
        $user->email = $sEmail;
        $user->password = $sPassword;
        $user->g_id = 0;
        $user->o_id = 0;
        $user->r_id = 0;

        if($user->save()){
            $ms->status = 0;
            $ms->message= "用户添加成功";
            return $ms->toJson();
        }
        $ms->status = 0;
        return $ms->toJson();
    }
    public function del(Request $request){
        $ms = new MS_Result;
        $ms->status = 1;
        $ms->message = "系统错误！";
         
        $nId = $request->input("id");

        // 判断用户是否存在
        if(!User::where('u_id','=',$nId)->exists()){
            $ms->status = 2;
            $ms->message = "用户名不存在！";
            return $ms->toJson();
        }
       $user =  DB::table('user')->where('u_id', '=', $nId)->get();
       $ms->status = 0;
       $ms->message = "用户删除成功";
       $ms->data = $user;
       return $ms->toJson(); 
    }
    public function edit(Request $request){
        $ms = new MS_Result;
        $ms->status = 1;
        $ms->message = "系统错误！";
        $ss = new SmService();
         
        $nId = $request->input("id");
        
        $sUsername = $request->input("username");
        $sRealname = $request->input("realname");
        $sEmail = $request->input("email");
        $sPassword = $request->input("password");
        
        if($sPassword==''){
            $ms->status=2;
            $ms->message = "密码不能为空";
            return $ms->toJson();
        }

        // $user = DB::table('user')->where('u_id', '=', $nId)->get();
        $user = User::where('u_id','=', $nId)->get()[0];

        $user->username =  $ss->sm4_encode($sUsername)->data;
        $user->realname =  $ss->sm4_encode($sRealname)->data;
        $user->email =  $ss->sm4_encode($sEmail)->data;
        $user->password =  $ss->sm4_encode($sPassword)->data;

        // $user->username = $sUsername;
        // $user->realname = $sRealname;
        // $user->email = $sEmail;
        // $user->password =encrypt($sPassword);

        if($user->save()){
            $ms->status = 0;
            $ms->message= "用户修改成功";
            return $ms->toJson();
        }

        return $ms->toJson();

    }

    

}
