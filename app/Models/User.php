<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $fillable=['account','password','nickname','login_time','role_id','sex','phone','email'];
    //获取所以的用户
    public function get_users()
    {
        return $this->get();
	}

    /**
     * @param $data array 添加用户
     */
    public function add_user($data)
    {
        foreach ($data as $k=>$v) {

        }
	}
}
