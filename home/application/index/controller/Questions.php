<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\Curl;

use think\Request;



class Questions extends Controller
{
	/*
	*  首页
	*/
    public function questions()
    {
        //左侧章节列表
        $data = Db::table('micro_chapter')->where('parent_id',0)->select();

        //学段
        $stage = Db::table('micro_stage_cate')->where('parent_id',0)->select();

        //科目
        $subject = Db::table('micro_subject')->select();

        //题型
        $question = Db::table('micro_question')->select();

        //题目
        $test = Db::table('micro_test')->select();

        return view('questions',[
                                    'data'      =>  $data,
                                    'stage'     =>  $stage,
                                    'subject'   =>  $subject,
                                    'question'  =>  $question,
                                    'test'      =>  $test

                                ]
                    );
    }

    /*
    *   左侧章节列表ajax
    */
    public function listAjax()
    {
        $id = Request::instance()->get('data');
        $data = Db::table('micro_chapter')->where('parent_id',$id)->select();
        return $data;
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
