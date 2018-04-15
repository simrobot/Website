<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
        // 后台登录用户表
        protected $table = 'user';
        protected $primaryKey = 'u_id';
    
        public $timestamps = true;
        
        public function object_array($array) {  
                if(is_object($array)) {  
                    $array = (array)$array;  
                } if(is_array($array)) {  
                    foreach($array as $key=>$value) {  
                        $array[$key] = object_array($value);  
                    }  
                }  
                return $array;  
            }  
}
