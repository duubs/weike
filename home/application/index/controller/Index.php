<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Curl;
use think\Db;
use think\View;
use think\Request;


class Index extends Controller
{

	/*
	*  首页
	*/
    public function index()
    {
        //推荐课程
        $course = Db::table('micro_course')
                ->order('course_number desc')
                ->limit(6)
                ->select();

        //轮播图    
        $carousel = Db::table('micro_carousel')->select();

        return view('index',[  
                                'course'        => $course, 
                                'carousel'      => $carousel, 
                            ]
                    );
    }

    /*
    *   地区
    */
    public function city()
    {
        $city = Db::table('micro_region')->select();

        foreach ($city as $key => $value) {
            if ($value['p_id'] == 1) {
                $array[] = $value;
            }  
        }

        foreach ($array as $key => $value) {
            foreach ($city as $k => $v) {
                if ($v['p_id'] == $value['r_id']) {
                    $arrayCity[$value['r_name']][] = $v;
                }
            }
        }
        return view('city',['city' => $arrayCity]);
    }

    /*
    *   顶部搜索
    */
    public function search()
    {
        $data = input('key');
        // 课程
        $course = Db::table('micro_course')->where('course_name','like',"%{$data}%")->select();
        $course = empty($course) ? [] : $course ;

        // 老师
        $teacher = Db::table('micro_teacher')->where('teacher_name','like',"%{$data}%")->select();
        $teacher = empty($teacher) ? [] : $teacher ;
        
        return view('search',[
                                'data'          => $data,
                                'course'        => $course,
                                'countCourse'   => count($course),
                                'countTeacher'  => count($teacher)
                        ]);
    }

    /*
    *   分类ajax搜索
    */
    public function teacherAjax()
    {
        $teacher = Request::instance()->get('data');

        $teacher = Db::table('micro_teacher')->where('teacher_name','like',"%{$teacher}%")->select();
        $teacher = empty($teacher) ? [] : $teacher ;
        
        return $teacher;
    }

     /*
    *   分类ajax搜索
    */
    public function courseAjax()
    {
        $teacher = Request::instance()->get('data');

        $teacher = Db::table('micro_course')->where('course_name','like',"%{$teacher}%")->select();
        $teacher = empty($teacher) ? [] : $teacher ;
        
        return $teacher;
    }



    /*
    *   课程分类
    */
    public function course_class()
    {
        return view('course_class');
    }

    /**
    *   推荐课程
    */
    public function recommended_courses()
    {
        return view('recommended_courses'); 
    }

    /**
    *   推荐课程分类
    *
    */ 
    public function ajaxHigh()
    {
        $stage_id = Request::instance()->get('data');
        $stage = Db::table('micro_course')
                ->where('stage_id',$stage_id)
                ->order('course_number desc')
                ->limit(6)
                ->select();

        return $stage;
    }

    /**
     * tp5邮件
     * @param
     * @author staitc7 <static7@qq.com>
     * @return mixed
     */
    public function email() 
    {
        $toemail='1870122366@qq.com';
        $name='lengjiafeng';
        $subject='QQ邮件发送测试';
        $content='恭喜你，邮件测试成功。';
        dump(send_mail($toemail,$name,$subject,$content));
    }
  
}