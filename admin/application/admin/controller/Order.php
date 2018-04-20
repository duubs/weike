<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Model;
use Think\Upload;
use app\admin\model\Micro_course;
class Order extends Controller
{
	/**
	 * @Author    订单首页
	 * @DateTime  2018-04-17
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function order()
	{
		return $this->fetch('order');

	}
	
	/**
	 * @Author    订单添加
	 * @DateTime  2018-04-17
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function orderAdd()
	{

	}

}