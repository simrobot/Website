<?php 
namespace App\Extend;

class SmData{
	// 加密或解密的字符
	public $str;

	// 加密或解密的秘钥
	public $key;
	
	public function toJson(){
		return json_encode($this , JSON_UNESCAPED_UNICODE);
    }
    public function toArray(){
        return json_decode($this , true);
    }       
}
