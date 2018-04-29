<?php 
namespace app\index\model;

use think\Db;
use think\Model;

/*
 * 学段子表(年级表)
 */
class StageCate extends Model
{
	protected $tabname = 'micro_stage_cate';

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