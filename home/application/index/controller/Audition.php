<?php
namespace app\index\controller;

use think\Controller;

use think\Db;
use think\View;
use think\Request;

class Audition extends Controller
{
	/*
	*  首页
	*/
    public function audition()
    {

        //查找所有高中初中 试听页面所需数据
        $course =Db::table('micro_course')
                ->field('course_name,teacher_name,subject_name,stage_name,course_img,course_id')
                ->select();     

        return view('audition',['course' => $course]);

    }
  

     public function ajaxStage()
    {
        //根据传回的id号 1 2 对应高中、初中试听课内容
        $stage_id = Request::instance()->get('data');     
        $stage = Db::table('micro_course')
                ->field('course_name,teacher_name,subject_name,stage_name,course_img,course_id')
                ->where('stage_id',$stage_id)
                ->select(); 
        return $stage;
    }

         public function ajaxLittle()
    {
        //调初中试听课内容
        $stage_id = Request::instance()->get('data');    
        $stage = Db::table('micro_course')
                ->field('course_name,stage_name,subject_name,course_img,course_id')
                ->where('stage_id',$stage_id)
                ->select();      
        return $stage;
    }

         public function select()
    {
        //点击图片 到图片（应为video）页面
          $course_id = Request::instance()->get('id');
          $showtime = Db::table('micro_course')
                ->where('course_id',$course_id)
                ->select();  
        return view('showtime',['showtime' => $showtime]);     

    }

}
