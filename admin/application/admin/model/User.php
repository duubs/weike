<?php
namespace app\admin\model;

use think\Db;
use think\Model;
use app\admin\model\Base;

/*
 *   用户表
 */
class User extends Base
{
	// 设置当前模型对应的完整数据表名称
    public $table = 'micro_user';

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
}


