<?php
namespace app\index\controller;

use think\Controller;

// use app\index\model\Stage as stage;

use think\Db;

use think\View;

use think\Request;


class Index extends Controller
{
	/*
	*  首页
	*/
    public function index()
    {

        //推荐课程
        $course = Db::table('micro_course')
                ->alias('course')
                ->join('micro_teacher teacher','course.teacher_id = teacher.teacher_id')
                ->join('micro_subject subject','course.subject_id = subject.subject_id')
                ->join('micro_stage_child child','course.stage_child_id = child.stage_child_id')
                ->order('course_number desc')
                ->limit(6)
                ->select();
        //轮播图
        $carousel = Db::table('micro_carousel')->select();

        return view('index',['course' => $course , 'carousel' => $carousel]);
    }

    /**
    *   课程分类
    */
    public function course_class()
    {
        return view('course_class');
    }

    /**
    *   课程分类
    */
    public function recommended_courses()
    {
        return view('recommended_courses');
    }

    public function ajaxHigh()
    {
        $stage_id = Request::instance()->get('data');
        $stage = Db::table('micro_course')
                ->alias('course')
                ->join('micro_teacher teacher','course.teacher_id = teacher.teacher_id')
                ->join('micro_subject subject','course.subject_id = subject.subject_id')
                ->join('micro_stage_child child','course.stage_child_id = child.stage_child_id')
                ->where('course.stage_id',$stage_id)
                ->select();

        return $stage;
    }

    /**
     * 递归方法  多层级导航菜单
     * @param type $data
     * @return array
     */
    // static $newData = array();
    // public function tree($data,$parent_id=0,$level=0)
    // {
    //     foreach ($data as $key => $value){
    //         if ($value['parent_id']==$parent_id){
    //             $value['level'] = $level;
    //             self::$newData[] = $value;
    //             $this->Tree($data,$value['stage_id'],$level+1);
    //         }
    //     }
    //     return self::$newData;
    // }
  
}
