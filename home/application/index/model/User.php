<?php 
namespace app\index\model;

use think\Model;

class User extends Model
{
	public function addUser($data)
    {
        unset($data['param']);

		if (empty($data) || !is_array($data)) {
            return false;
        }
        if(!empty($data['user_pwd'])){
            $data['user_pwd'] = md5($data['user_pwd']);
        }
		if ($this -> save($data)) {
            return true;
        }else{
            return false;
        }
	}


	public function login($data){
		
        $user = User::where('user_account',$data['user_account'])->find();
        
        if ($user) {
            if ($user['user_pwd'] == md5($data['user_pwd'])) {
                
                return 2;//密码正确
            }else{
                return 3;//密码错误
            }
        }else{
            return 1;//用户不存在
        }
	}
}