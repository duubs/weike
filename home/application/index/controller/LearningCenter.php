<?php
namespace app\index\controller;

use think\Controller;

use think\Cookie;

class LearningCenter extends Controller 
{
	/*
	*  判断是否登陆，已登录的直接进到学习中心页面
	*/
    public function index()
    {
        Cookie::set('name','value');

        if (Cookie::has('name') == true) {
            return view('my_course');
            exit;
        }
        return view('login');
    }

    /*
    *  学习中心
    */
    public function myCourse()
    {
        return view('my_course');
    }

    /*
	*  试卷
	*/
    public function testPaper()
    {
        return view('test_paper');
    }

    /*
    *  学习计划
    */
    public function learningPlan()
    {
        return view('learning_plan');
    }

    /*
    *  错题本
    */
    public function errorBook()
    {
        return view('error_book');
    }

    /*
    *   会员
    */
    public function member()
    {
        Cookie::set('name','value');

        // 判断是否登陆，已登录的直接进到学习中心页面
        if (Cookie::has('name') == true) {
            return view('member');
            exit;
        }
        return view('login');
    }
  
}
