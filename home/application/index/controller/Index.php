<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Bank as bank;

class Index extends Controller
{
	/*
	*  首页
	*/
    public function index()
    {
        // $data = bank::all();

        return view('index');
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
  
}
