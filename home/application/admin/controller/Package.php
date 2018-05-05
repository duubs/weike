<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Model;
use Think\Upload;
use app\admin\model\Micro_course;
class Package extends Controller
{
	/**
	 * @Title     会员套餐首页
	 * @DateTime  2018-04-17
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function package()
	{
		$data = Db::table('micro_package')->paginate(6);
		return $this->fetch('package',[
										'data'=>$data
									]);
	}
	
	/**
	 * @Title     会员套餐添加
	 * @DateTime  2018-04-21
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function packageAdd()
	{
		//  学段数据   高/初/小学
		$stage = Db::table('micro_stage_cate')
					->where('parent_id','=',0)
					->where('stage_name','neq','专题')
					->select(); 
		return $this->fetch('package_add',[
											'stage'=>$stage
										]);
	}

	/**
	 * @Title     会员套餐添加入库
	 * @DateTime  2018-04-21
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function packageAddDo()
	{
		// 接受添加的值
		$files = request()->file('package_img'); 
		$data = Request::instance()->post();
		foreach ($data as $k => $v) {
			if ($v == "") {
				return $this->error('有空值，请确认');die;
			}
		}
		if ($files != null) {
			$data['package_img'] = $this->uploads('package_img');
		}
		if ($data['longtime'] == 0) {
			$data['longtime'] = 60*60*24*180;
		} else {
			$data['longtime'] = 60*60*24*180*2;
		}
		$stage = Db::table('micro_stage_cate')->where('stage_cate_id',$data['stage_id'])->find();
		$stage_child = Db::table('micro_stage_cate')->where('stage_cate_id',$data['stage_child_id'])->find();
		$data['stage_name'] = $stage['stage_name'];
		$data['stage_child_name'] = $stage_child['stage_name'];
		$data['package_name'] = $stage['stage_name'].$stage_child['stage_name'];
		$res = Db::table('micro_package')->insertGetId($data);
		if (!$res) {
			return $this->error('添加失败');die;
		}
		return $this->success("添加成功","Package/package","",1);
	}

	/**
	 * @Title    文件上传
	 * @DateTime  2018-04-21
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    [type]      [description]
	 */
	public function uploads($name)
	{
		$files = request()->file($name); 
		$image_path = ROOT_PATH . 'public/static/package_upload';
		$image_info = $files->move($image_path);
		$savename = '/static/package_upload/'.$image_info->getSaveName();
		return $savename;  // tp自己封装的文件别名
	}

	/**
	 * @Title     套餐删除
	 * @DateTime  2018-04-21
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    [type]      [description]
	 */
	public function packageDel()
	{
		$package_id = Request::instance()->get('package_id');
		$package_id = trim($package_id,',');
		$res = Db::table('micro_package')->where('package_id','in',$package_id)->delete();
		if (!$res) {
		 	$this->error("删除失败");
		 	return false;
		}
		return 1;
	}

	/**
	 * @Title     套餐修改
	 * @DateTime  2018-04-21
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    [type]      [description]
	 */
	public function packageUpd()
	{
		$package_id = Request::instance()->get('package_id');
		$data = Db::table('micro_package')->where('package_id','=',$package_id)->find();
		return $this->fetch('package_upd',[
											'data' => $data
										]);
	}

	/**
	 * @Title     套餐修改执行
	 * @DateTime  2018-04-21
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    [type]      [description]
	 */
	public function packageUpdDo()
	{
		$data = Request::instance()->post();
		if ($data['package_money'] == 0) {
			unset($data['package_money']);
		}
		$package_id = $data['package_id'];
		unset($data['package_id']);
		$files = request()->file('package_img');
		if (!empty($files)) {
			$data['package_img'] = $this->uploads('package_img');
		}
		if (empty($data)) {
			return $this->success("没有数据被修改","Package/package","",1);
		}
		$res = Db::table('micro_package')->where('package_id','=',$package_id)->setField($data);
		return $this->success("修改成功","Package/package","",1);
	}

	/**
	 * @Title     套餐修改执行
	 * @DateTime  2018-04-21
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    [type]      [description]
	 */
	public function packageSearch()
	{
		$search = Request::instance()->get('key');
		$data = Db::table('micro_package')->where('package_name','like','%'.$search.'%')->select();
		return $data;
	}

}