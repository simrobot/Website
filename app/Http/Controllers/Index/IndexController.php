<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extend\ClientInfo;
use App\Extend\MS_Result;
use App\Entity\AccessLog;
use App\Extend\SM4;
use App\Extend\SmData;
use App\Extend\SmService;
use Guzzle;


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
        dd("demo");
    }
}
