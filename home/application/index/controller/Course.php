<?php
namespace app\index\controller;
use think\Controller;
use think\Request;

class Course extends controller{
    public function course(){
        $stage_id = input('stage_id'); //获取学段的stage_id
        $stage_child_id = input('stage_child_id'); //获取年级的stage_child_id
        $subject_id = input('subject_id');  //获取学科的subject_id
        $type = input('type');  //获取类型type
        if(!empty($stage_id) || !empty($stage_child_id)  || !empty($subject_id) || !empty($type)){ //判断是否有条件存在

            if(!empty($stage_id)){  //判断学段的stage_id是否有
                 $map['stage_id'] = $stage_id; //有就加入$map条件
                 //$maps['stage_cate_id'] = $stage_id;
                 $stage_child=db('stage_cate')->where('parent_id',$stage_id)->select(); //有就根据学段类型查询年级
                 $this->assign('stage_id',$stage_id);  //渲染学段的stage_id
             }else{
                $stage_child=db('stage_cate')->where('stage_cate_id','1')->select(); //查询学段的stage_id,因为没有条件所以默认1
                $this->assign('stage_id','1'); //渲染学段的stage_id,因为没有条件所以默认1
             }

            if(!empty($stage_child_id)){  //判断年级的stage_child_id是否有
                 $map['stage_child_id'] = $stage_child_id; //有就加入$map条件
                 $maps['stage_cate_id'] = $stage_child_id;  //有就根据年级查询学科
                  $this->assign('stage_child_id',$stage_child_id); //渲染学段的stage_child_id
             }else{
                $this->assign('stage_child_id',''); //渲染学段的stage_child_id,因为没有条件所以默认空
             }

             if(!empty($subject_id)){  //判断学科的stage_child_id是否有
                 $map['subject_id'] = $subject_id; //有就加入$map条件
                  $this->assign('subject_id',$subject_id);  //渲染科目的subject_id
             }else{
                $this->assign('subject_id',''); //渲染科目的subject_id因为没有条件所以默认空
             }

             if(!empty($type)){ //判断类型的stage_child_id是否有
                 $map['course_type'] = $type;  //有就加入$map条件
                  $this->assign('type',$type); //渲染类型的type
             }else{
                $this->assign('type',''); //渲染类型的type因为没有条件所以默认空
             }

             $course=db('course')->where($map)->paginate(8,false, [
        'query' => request()->param()]); //根据所有条件查询课程分页


        }else{


              $course=db('course')->where('stage_id','1')->paginate(8,false, [
        'query' => request()->param()]); //根据默认条件stage_id=1条件查询课程分页


              $stage_child=db('stage_cate')->where('parent_id','1')->select(); //根据默认条件parent_id=1条件查询学段

              $maps['stage_cate_id'] = 1; //$maps条件默认加入  stage_cate_id=1
              $this->assign('stage_id','1'); //渲染stage_id=1
              $this->assign('stage_child_id',''); //渲染stage_child_id=""
              $this->assign('subject_id',''); //渲染subject_id=""
              $this->assign('type',''); //type=""
        }
          if(empty($maps)){ //如果没有$maps
            $maps['stage_cate_id'] = 1;  //$maps条件默认加入  stage_cate_id=1
          }
         $subject=db('stage_cate_subject')->where($maps)->select(); //查询学科

         foreach ($subject as $key => $value) {
              $subject[$key]['subject_name'] = db('subject')->where('subject_id',$value['subject_id'])->find()['subject_name'];
         } //循环查询根据subject_id查询科目名称
       
        $stage=db('stage_cate')->where('parent_id','0')->select(); //查询 parent_id=0的学段
        
        $this->assign('stage_child',$stage_child); 
        $this->assign('stage',$stage);
        $this->assign('subject',$subject);
        $this->assign('course',$course);
        
        return  view('course');
    }
    public function show_info(){
    	$id = $_GET['id']; //根据id
    	$data = db('course')->where('course_id',$id)->find(); //查询对应的课程
    	$data['subject'] = db('subject')->where('subject_id',$data['subject_id'])->find()['subject_name']; //查询到科目名称
    	$data['stage_child_name'] = db('stage_cate')->where('stage_cate_id',$data['stage_child_id'])->find()['stage_name']; //查询到学段名称
    	$data['teacher_name'] = db('teacher')->where('teacher_id',$data['teacher_id'])->find()['teacher_name']; //查询老师名称
    	$data['teacher_desc'] = db('teacher')->where('teacher_id',$data['teacher_id'])->find()['teacher_desc'];  //查询老师简介
  

        $arr = db('name')->where('course_id',$id)->select(); //查询对应的全部课程名称
        if(!empty($arr)){ //判断是否存在
        	foreach ($arr as $key => $value) { //循环拼接子分类进去
        		 $arr[$key]['class'] = db('class')->where('uid',$value['id'])->select();
        		 $arr[$key]['count'] = db('class')->where('uid',$value['id'])->count();
        	}
        }
        $this->assign('arr',$arr);
    	$this->assign('data',$data);
        return $this->fetch('course/course_info');
    }

}
