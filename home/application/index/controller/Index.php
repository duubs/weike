<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Bank as bank;

class Index extends Controller
{

	/*
	*  首页
	*/
    public function index()
    {

        // 课程分类
        $parentData = Db::table('micro_stage_cate')->where('parent_id','0')->select();  //顶级分类

        $data = Db::table('micro_stage_cate')->select();                //全部分类
       
        foreach ($parentData as $key => $value) {

            foreach ($data as $k => $val) {

                if ($val['parent_id'] == $value['stage_cate_id']) {
                    
                    $courseClass[$value['stage_name']][] = $val;

                }
            }
        }

        $cateData = Db::table('micro_stage_cate_subject')
                        ->alias('cate')
                        ->join('micro_stage_cate c','cate.stage_cate_id = c.stage_cate_id')
                        ->join('micro_subject s','cate.subject_id = s.subject_id')
                        ->select();                              


        foreach ($courseClass as $key => $value) {

            foreach ($value as $ke => $val) {
                
                 foreach ($cateData as $k => $v) {

                    if ($v['stage_name'] == $val['stage_name']) {
                        
                        $courseCate[$val['stage_name']][] = $v;

                    }
                }
            }
        }

        foreach ($courseCate as $key => $value) {

            foreach ($value as $k => $v) {

                if ($v['stage_name'] == $key) {

                    $array[$key][] = $v['subject_name'];

                }

            }

        }

        foreach ($courseClass as $key => $value) {
            // var_export($value);
            foreach ($value as $ke => $val) {
                // var_export($val);
                 foreach ($array as $k => $v) {
                    // var_export($v);
                    if ($k == $val['stage_name']) {
                        $arr[$val['stage_name']] = $v;
                    }
                }

            }
           
        }



        // var_export($arr);


        // die;


        //推荐课程
        $course = Db::table('micro_course')
                ->alias('course')
                ->join('micro_teacher teacher','course.teacher_id = teacher.teacher_id')
                ->join('micro_subject subject','course.subject_id = subject.subject_id')
                ->join('micro_stage_child child','course.stage_child_id = child.stage_child_id')
                ->order('course_number desc')
                ->limit(6)
                ->select();

        //轮播图    
        $carousel = Db::table('micro_carousel')->select();

        return view('index',[  
                                'course'        => $course, 
                                'carousel'      => $carousel, 
                                'courseClass'   => $courseClass,
                                // 'courseCate'    => $courseCate,
                                'arr'         => $arr
                            ]
                    );

        // $data = bank::all();

        return view('index');

    }

    /**
    *   课程分类
    */
    public function course_class()
    {
        return view('course_class');
    }

    /**
    *   课程分类
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
                ->alias('course')
                ->join('micro_teacher teacher','course.teacher_id = teacher.teacher_id')
                ->join('micro_subject subject','course.subject_id = subject.subject_id')
                ->join('micro_stage_child child','course.stage_child_id = child.stage_child_id')
                ->where('course.stage_id',$stage_id)
                ->select();

        return $stage;
    }   


  
}
