<?php
namespace app\index\controller;

use think\Controller;

class LearningCenter extends Controller
{
	/*
	*  首页
	*/
    public function login()
    {
        return view('login');
    }

    /*
	*  首页
	*/
    public function userInfo()
    {
        return view('userinfo');
    }
  
}
