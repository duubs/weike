<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\Paginator;


class User extends Controller
{
	/**
	 * @Author    Hybrid
	 * @DateTime  2018-04-17
	 * @copyright [copyright]
	 * @license   [license]
	 * @version   [version]
	 * @return    [数组 array]      [两表联查]
	 */
	public function user()
	{	
		$data = Db::table('micro_user')->where("member_id <= 0 and is_frozen = 1")->select();		
		return view("user",[
							'data'=>$data
						   ]);
	}

	/**
	 * @Author    Hybrid
	 * @DateTime  2018-04-21
	 * @copyright [copyright]
	 * @license   [license]
	 * @version   [version]
	 * @return    [type]      [展示页面]
	 */
	public function member()
	{
		$list = Request::instance()->get('info'); // 获取某个get变量;
		if ($list == 'option1') {
			$where = 'member_id <= 0 and is_frozen = 1';
		}else{
			$where = 'member_id > 0 and is_frozen = 1';
		}
		$data = Db::table('micro_user')->where($where)->select();
				
		return $data;
	}

	/**
	 * @Author    Hybrid
	 * @DateTime  2018-04-21
	 * @copyright [copyright]
	 * @license   [license]
	 * @version   [version]
	 * @return    [type]      [搜索]
	 */
	public function search()
	{
		$key = Request::instance()->get('key'); // 获取某个get变量;
		$data = Db::table('micro_user')->where('user_name','like',$key)->select();

		return $data;
	}




	

}