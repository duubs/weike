<?php
namespace app\index\controller;

header('Content-Type:application/json; charset=utf-8');

use think\Db;
use think\Controller;
use think\Cookie;
use app\index\model\Paper;
use app\index\model\Subject;

use think\Request;

use app\index\validate\User;


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

        $validate = new User();

        $data = [
            'name'  => '1',
            'age'   => 10,
            'email' => 'thinkphp@qq.com',
        ];


        $result   = $validate->check($data);

        var_export($result);die;

        return view('my_course');
    }

    /*
	*  试卷
	*/
    public function testPaper()
    {   
        //试卷
        $paperData = Db::table('micro_paper')->paginate(2);

        //分页样式
        $page = $paperData->render();

        // 搜索条件  科目
        $subjectData = (new Subject)->selectAll();

        unset($subjectData[9]);

        return view('test_paper',[
                                'paper' => $paperData,
                                'subject' => $subjectData,
                                'page' => $page
                                ]
        );
    }

    /*
    *   试卷编辑
    */
    public function paperEdit()
    {
        return view('paper_edit');
    }

    /*
    *   试卷搜索 
    */
    public function paperAjax()
    {
        $subject = Request::instance()->get('subject_id');   //科目
        $date = Request::instance()->get('date'); 
        $paper = Request::instance()->get('title');     //文本框内容

        // $paper = '数学';

        //转换查询条件
        $subjectData = Db::table('micro_subject')->where('subject_id' , $subject)->find();

        //判断按照科目的查询条件
        $sub = empty($subjectData) ? 'subject_name' : $subjectData['subject_name'] ;

        //判断按照时间的查询条件
        $minTime = ($date == 0) ? '0' : time()+$date*24*3600 ;

        //判断文本框的查询条件
        $paper = ($paper == '') ? 'paper_name' : $paper ;

        $query = new \think\db\Query;
        $paperData = Db::table('micro_paper')
                    ->where('time','>',$minTime)
                    ->where('subject_name',$sub)
                    ->where('paper_name','like',"%{$paper}%")
                    ->select();
        return $paperData;
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
