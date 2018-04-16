<?php
namespace app\index\controller;

use think\Controller;

class Course extends Controller
{
	/*
	*  首页
	*/
    public function course()
    {
        return view('course');
    }
  
}
