<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
        // 后台登录用户表
        protected $table = 'user';
        protected $primaryKey = 'u_id';
    
        public $timestamps = true;
}
