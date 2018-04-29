<?php 
namespace app\index\model;

use think\Db;
use think\Model;

class User extends Model
{
    // 设置当前模型对应的完整数据表名称
    public $tabname = 'micro_user';

    //自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    }

    public function sel($where = [])
    {
        return Db::table($this->tabname)->where($where)->select();
    }

    public function one($where)
    {
        return Db::table($this->tabname)->where($where)->find();
    }

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



