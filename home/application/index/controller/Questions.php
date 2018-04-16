<?php
namespace app\index\controller;

use think\Controller;

class Questions extends Controller
{
	/*
	*  首页
	*/
    public function questions()
    {
        return view('questions');
    }

    /*
	*  首页
	*/
    public function teacherPaper()
    {
        return view('teacher_paper');
    }

    /*
	*  首页
	*/
    public function testPaper()
    {
        return view('test_paper');
    }
  
}
