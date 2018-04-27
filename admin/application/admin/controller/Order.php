<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Model;
use Think\Upload;
use app\admin\model\Order as orders;
use app\admin\controller\atoi;
class Order extends Controller
{
	/**
	 * @Author    订单列表
	 * @DateTime  2018-04-23
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function order()
	{
		$data = Db::table('micro_order')->alias('order')->join('micro_user','order.user_id = micro_user.user_id')->select();
		return $this->fetch('order',[
										'data'=>$data,
									]);
	}

	/**
	 * @Author    订单修改  （只能改价）
	 * @DateTime  2018-04-23
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function orderUpd()
	{
		// 接受要作废的订单id
		$order_id = Request::instance()->get('order_id');
		$order = Db::table('micro_order')->where('order_id','=',$order_id)->find();
		if ($order['state'] == 1) {
			return $this->error('订单已支付，不可改价','order/order','',1);die;
		}
		return $this->fetch('order_upd',[
										'order'=>$order
									]);
	}

	/**
	 * @Author    订单执行改价   修改订单
	 * @DateTime  2018-04-23
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function orderUpdDo()
	{
		// 接受要修改的订单内容
		$save = Request::instance()->post();
		$order_id = $save['order_id'];
		if (empty($save)) {
			return $this->success('没有内容被修改','order/order','',1);die;
		}
		$data = Db::table('micro_order')->where('order_id','=',$order_id)->find();
		$save['order_quota'] = $data['order_quota'] - ($save['order_discount']-0);
		$res = Db::table('micro_order')->where('order_id','=',$order_id)->setField($save);
		if ($res) {
			return $this->success('改价成功','order/order','',1);
		}
	}

	/**
	 * @Author    订单作废
	 * @DateTime  2018-04-23
	 * 
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function orderDel()
	{
		// 接受要作废的订单id
		$order_id = Request::instance()->get('order_id');
		$data['is_void'] = 1;
		$res = Db::table('micro_order')->where('order_id','=',$order_id)->setField($data);
		if ($res) {
			return $this->success('该订单已作废','order/order','',1);
		}
	}


}