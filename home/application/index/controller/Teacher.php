<?php
namespace app\index\controller;

use think\Controller;

class Teacher extends Controller
{
	/*
	*  首页
	*/
    public function teacher()
    {
        return view('teacher');
    }

    /*
	*  首页
	*/
    public function teacherInfo()
    {
        return view('teacher_info');
    }
  
}
