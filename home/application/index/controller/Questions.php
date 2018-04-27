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

        return view('questions',['data' => $data]);
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
