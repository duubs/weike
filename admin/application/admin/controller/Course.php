<?php
namespace app\admin\controller;
use think\Controller;


class Course extends Controller
{
	public function course()
	{
		//课程
		return view('course');
	}
}