<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\AccessLog;
use DB;

class LogController extends Controller
{
    public function access(){
        $logs = AccessLog::select(DB::raw('created_at,ip,system,browser,city'))->simplePaginate(15);  
        return view('admin.log.access',['logs' => $logs]);
    }
}
