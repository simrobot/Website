<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extend\ClientInfo;
use App\Extend\MS_Result;
use App\Entity\AccessLog;
use App\Extend\SmService;
use App\Entity\User;
use DB;


class IndexController extends Controller
{
    public function index(){
        $ms = new MS_Result();
        $ci = new ClientInfo;
        $eg = new AccessLog();
        
        $eg->ip = $ci->getIp();        
        $eg->system = $ci->getSystem();
        $eg->browser = $ci->getBrowser()['name'];
        $eg->browser_version = $ci->getBrowser()['version'];
        // if( $ci->getAddress()){
        //     $eg->country = $ci->getAddress()[0];
        //     $eg->province = $ci->getAddress()[1];
        //     // $eg->city = $ci->getAddress()[2];
        // }
        // dd($ci->getAddress());
        $eg->language = $ci->getLang();
        $eg->isrobot = $ci->isRobot();
        $eg->save();

        return view("index.index");
    }
    
    public function sm(){
        $ms = new MS_Result();
        $ss = new SmService();
        $res = $ss->sm4_encode("asd");
        $res1 = $ss->sm4_decode($res->data);
        // $res1 = $ss->sm4_decode()
        dd($res1);
    }
    
    public function demo(){
        $ms = new MS_Result();
        return $ms->toJson();
        $count = array();
        $count['ACCESS_NUMBER_TOTAL'] = AccessLog::count();
        $count['ACCESS_NUMBER_NOW_DAY'] = AccessLog::whereDate('created_at' , '>=' , date("Y-m-d",time()))->count();
        $count['TOTAL_USER_NUMBER'] = User::count();

       return view("demo")->with('count',$count);
   }
}
