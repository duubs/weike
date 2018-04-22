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
                ->order('course_number desc')
                ->limit(6)
                ->select();

        //轮播图    
        $carousel = Db::table('micro_carousel')->select();

        return view('index',[  
                                'course'        => $course, 
                                'carousel'      => $carousel, 
                            ]
                    );
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

    /**
    *   推荐课程分类
    *
    */ 
    public function ajaxHigh()
    {
        $stage_id = Request::instance()->get('data');
        $stage = Db::table('micro_course')
                ->where('stage_id',$stage_id)
                ->order('course_number desc')
                ->limit(6)
                ->select();

        return $stage;
    }   
  
}
