<?php 
/*
 * @Author:              Kyle Liu 
 * @Date:                2018-04-14 20:08:01 
 * @Last Modified by: Kyle Liu
 * @Last Modified time: 2018-04-14 20:10:58
 * @Description:        SM4加密解密接口
 * @Notice:             此接口最核心的加密算法是用Java写的，通过远程调用进行加密解密操作
*/
namespace App\Extend;

use App\Extend\SmData;
use Guzzle;

class SmService{
    /**
     * Undocumented function
     *
     * @param [type] $str
     * @return [obj] $res
     */
    public function sm4_encode($str){
        $sd = new SmData();
        $res = Guzzle::post(
            env("SM4_ENCODE_URL"),
            [
                'json' => [ 'str' => $str,'key' =>  env("SM4_ENCODE_URL")],
            ]
        )->getBody();

        return json_decode($res);
    }

     /**
     * Undocumented function
     *
     * @param [type] $str
     * @return [obj] $res
     */
    public function sm4_decode($str){
        $sd = new SmData();
        $res = Guzzle::post(
            env("SM4_DECODE_URL"),
            [
                'json' => [ 'str' => $str,'key' =>  env("SM4_ENCODE_URL")],
            ]
        )->getBody();

        return json_decode($res);
    }
}
