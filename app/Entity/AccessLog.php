<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    // 后台登录用户表
    protected $table = 'log_accesslist';
    protected $primaryKey = 'id';

    public $timestamps = true;
}
