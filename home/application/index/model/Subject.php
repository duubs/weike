<?php 
namespace app\index\model;

use think\Db;
use think\Model;

class Subject extends Model
{

	//定义表名
	protected $table_name = 'micro_subject';

    //自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
    }

    /*
    *	查询全部
    */
    public function selectAll()
    {
        return Db::table($this->table_name)->select();
    }

    /*
    *   where条件查询
    */
    public function selectWhere($data , $where)
    {
        return Db::table($this->table_name)->where($data , $where)->select();
    }
}