<?php
namespace app\admin\model;

use think\Model;
use app\admin\model\Base;

class Order extends Base
{
	// 设置当前模型对应的完整数据表名称
    public $table = 'micro_order';
}