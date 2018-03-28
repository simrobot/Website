<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extend\ClientInfo;
use App\Extend\MS_Result;
use App\Entity\User;
use App\Entity\AccessLog;

use Crypt;
use Session;

class IndexController extends Controller
{
    public function index(){

         $count = array();
         $count['ACCESS_NUMBER_TOTAL'] = AccessLog::count();
         $count['ACCESS_NUMBER_NOW_DAY'] = AccessLog::whereDate('created_at' , '>=' , date("Y-m-d",time()))->count();
         $count['TOTAL_USER_NUMBER'] = User::count();

        return view("admin.index")->with('count',$count);
    }
}
