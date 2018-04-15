<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   

        // 检查是否登录 isLogin 解密后为1表示已经登录0表示未登录
        if(!Session::has('isLogin')){
            return redirect()->intended('/admin/login'); 
        }else{
            if( !decrypt( Session::get('isLogin')) ){
                return redirect()->intended('/admin/login'); 
            }
        }

        return $next($request);
    }
}
