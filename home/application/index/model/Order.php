<?php 
namespace app\index\model;

use think\Db;
use think\Model;

/*
 * 订单表
 */
class Order extends Model
{
	protected $tabname = 'micro_order';

    //自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    }

    public function sel()
    {
    	return Db::table($this->tabname)->select();
    }
}