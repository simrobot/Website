<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extend\ClientInfo;
use App\Extend\MS_Result;
use App\Entity\AccessLog;
use App\Extend\SM4;

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
        if( $ci->getAddress()){
            $eg->country = $ci->getAddress()[0];
            $eg->province = $ci->getAddress()[1];
            $eg->city = $ci->getAddress()[2];
        }
        // dd($ci->getAddress());
        $eg->language = $ci->getLang();
        $eg->isrobot = $ci->isRobot();
        $eg->save();

        return view("index.index");
    }
    public function demo(){
        $sm4 = new SM4();
        //16字节的HEX编码字符串 32个hex字符
        $re = $sm4->setKey('0123456789abcdeffedcba9876543210')
            ->encrypt('0123456789abcdeffedcba9876543210');
        print_r($re);
        echo '-----';
        $re1 = $sm4->decrypt($re);
        print_r($re1);
        
    }
}
