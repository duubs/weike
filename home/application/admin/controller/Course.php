<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Model;
use think\UploadFile;
use app\admin\model\Micro_course;
class Course extends Controller
{
	/**
	 * @Author    课程首页
	 * @DateTime  2018-04-17
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function course()
	{
		$course = Db::table('micro_course')
					->alias('course')
					->join('micro_stage_cate stage_cate','course.stage_id = stage_cate.stage_cate_id')
					->join('micro_subject subject','course.subject_id = subject.subject_id')
					->join('micro_teacher teacher','course.teacher_id = teacher.teacher_id')
					->paginate(4);  // 调用TP封装的分页
		$stage = Db::table('micro_stage_cate')
					->where('parent_id','=',0)
					->where('stage_cate_id','neq',16)
					->select(); 
		//课程视图
		return $this->fetch('course',[
										'data'=>$course,
										'stage'=>$stage
									]);
	}

	/**
	 * @Author    课程添加
	 * @DateTime  2018-04-17
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function courseAdd()
	{
		//  学段数据   高/初/小学
		$stage = Db::table('micro_stage_cate')->where('parent_id','=',0)->where('stage_name','neq','专题')->select(); 
		//  教师信息  
		$teacher = Db::table('micro_teacher')
					->alias('teacher')
					->join('micro_catalog catalog','teacher.catalog_id = catalog.catalog_id')
					->join('micro_subject subject','teacher.subject_id = subject.subject_id')
					->select();
		return $this->fetch('course_add',[
											'stage' => $stage,
											'teacher'=>$teacher
										]);
	}

	/**
	 * @Author    执行添加  
	 * @DateTime  2018-04-18
	 * @copyright 1.0.0.2  
	 * @version   Micro1.0 
	 * @return    [type]      [description]
	 */
	public function courseAddDo()
	{
		// 接受全部post提交上来的数据
		$data = Request::instance()->post();
		// 文件上传   视频上传
		$data['course_img']   =  $this->uploads('course_img'); 
		$data['course_video'] =  $this->videos('course_video');
		$res = Db::table('micro_course')->insertGetId($data);
		if ($res) {
			return $this->success("添加成功","Course/course","",1);
		}
	}

	/**
	 * @Author    视频上传
	 * @DateTime  2018-04-19
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    [type]      [description]
	 */
	public function videos($name){ 
		$videos = $_FILES[$name];
		$tmp = $videos['tmp_name'];  
		$tmp_name = '/static/uploads/videos'.time().rand(1111,9999).'.mp4';  
		$path = ROOT_PATH .'public'.$tmp_name;
		if (!move_uploaded_file($tmp,$path)) die('视频上传失败');  
		return $tmp_name;
	}

	/**
	 * @Author    文件上传
	 * @DateTime  2018-04-19
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    [type]      [description]
	 */
	public function uploads($name)
	{
		$files = request()->file($name); 
		$image_path = ROOT_PATH . 'public/static/course';
		$image_info = $files->move($image_path);
		$savename = '/static/course/'.$image_info->getSaveName();
		return $savename;  // tp自己封装的文件别名
	}
	
	/**
	 * @Author    子学段  查询
	 * @DateTime  2018-04-18
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    [type]      [description]
	 */
	public function courseAjax()
	{
		$stage_id = Request::instance()->get('stage_cate_id');
		$stage_child = Db::table('micro_stage_cate')->where('parent_id',$stage_id)->select();
		return $stage_child;
	}

	/**
	 * @Author    科目  查询
	 * @DateTime  2018-04-18
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    [type]      [description]
	 */
	public function courseAjaxTo()
	{
		$stage_cate_id = Request::instance()->get('stage_cate_id');
		$subject = Db::table('micro_stage_cate_subject')
						->alias('child_subject')
						->join('micro_subject subject','child_subject.subject_id = subject.subject_id')
						->where('stage_cate_id',$stage_cate_id)
						->select();
		return $subject;
	}

	/**
	 * @Author    教师  查询
	 * @DateTime  2018-04-18
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    [type]      [description]
	 */
	public function courseAjaxThree()
	{
		$subject_id = Request::instance()->get('subject_id');
		$teacher = Db::table('micro_teacher')
						->alias('teacher')
						->where('subject_id',$subject_id)
						->select();
		return $teacher;
	}

	/**
	 * @Author    课程修改
	 * @DateTime  2018-04-18
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function courseUpd()
	{
		$course_id = Request::instance()->get('course_id');
		$course = Db::table('micro_course')
					->alias('course')
					->join('micro_stage_cate stage','course.stage_id = stage.stage_cate_id')
					->join('micro_subject subject','course.subject_id = subject.subject_id')
					->join('micro_teacher teacher','course.teacher_id = teacher.teacher_id')
					->where('course_id',$course_id)
					->find();
		return  $this->fetch('course_upd',[
											'course'=>$course
										]);
	}

	/**
	 * @Author    课程执行修改
	 * @DateTime  2018-04-19
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function courseUpdDo()
	{
		$data = Request::instance()->post();
		// 文件上传   视频上传
		$files = request()->file('course_img');
		$videos = request()->file('course_video');
		if ( $files != null ) {
			$data['course_img']   =  $this->uploads('course_img'); 
		}
		if ( $videos['error'] != 4 && $videos != null) {
			$data['course_video'] =  $this->videos('course_video');
		} 
		foreach ($data as $k => $v) {
			if ($v == "") {
				unset($data[$k]);
			}
		}
		$res = Db::table('micro_course')->where('course_id='.$data['course_id'])->setField($data);
		if ($res) {
			return $this->success('修改成功','Course/course','',1);
		}
	}

	/**
	 * @Author    课程删除
	 * @DateTime  2018-04-18
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    [type]      [description]
	 */
	public function courseDel()
	{
		$course_id = Request::instance()->get('course_id');
		$course_id = trim($course_id,',');
		$res = Db::table('micro_course')->where('course_id','in',$course_id)->delete();
		if (!$res) {
		 	$this->error("删除失败");
		}
		$this->success('删除成功','Course/course','',1);
		return 1;
	}

	/**
	 * @Author    Hybrid
	 * @DateTime  2018-04-18
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function coursePreserve()
	{

	}

	/**
	 * @Author    搜 索
	 * @DateTime  2018-04-20
	 * @copyright 1.0.0.2
	 * @version   Micro1.0
	 * @return    true / false
	 */
	public function courseSearch()
	{
		$data = Request::instance()->get();
		foreach ($data as $k => $v) {
			if ($v == "") {
				unset($data[$k]);
			}
		}
		$stage_id = $data['stage_id'];
		$stage_child_id = $data['stage_child_id'];
		unset($data['stage_child_id']);
		unset($data['stage_id']);

		$res = Db::table('micro_course')
					->alias('course')
					->where('course.stage_child_id','=',$stage_child_id)
					->where('course.stage_id','=',$stage_id)
					->where($data)
					->join('micro_stage_cate stage_cate','course.stage_child_id = stage_cate.stage_cate_id')
					->paginate(10);
		return $res;
	}

}