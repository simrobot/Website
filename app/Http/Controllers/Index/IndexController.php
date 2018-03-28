<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extend\ClientInfo;
use App\Extend\MS_Result;
use App\Entity\AccessLog;

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
        $eg->country = $ci->getAddress()[0];
        $eg->province = $ci->getAddress()[1];
        $eg->city = $ci->getAddress()[2];
        $eg->language = $ci->getLang();
        $eg->isrobot = $ci->isRobot();
        $eg->save();

        return view("index.index");
    }
}
