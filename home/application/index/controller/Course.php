<?php
namespace app\index\controller;
use think\Controller;
use think\Request;

class Course extends controller{
    public function course(){
        $stage_id = input('stage_id');
        $stage_child_id = input('stage_child_id');
        $subject_id = input('subject_id');
        $type = input('type');
        if(!empty($stage_id) || !empty($stage_child_id)  || !empty($subject_id) || !empty($type)){

            if(!empty($stage_id)){
                 $map['stage_id'] = $stage_id;
                 $stage_child=db('stage_cate')->where('parent_id',$stage_id)->select();
                 $this->assign('stage_id',$stage_id);
             }else{
                $stage_child=db('stage_cate')->where('stage_cate_id','1')->select();
                $this->assign('stage_id','1');
             }

            if(!empty($stage_child_id)){
                 $map['stage_child_id'] = $stage_child_id;
                 $maps['stage_cate_id'] = $stage_child_id;
                  $this->assign('stage_child_id',$stage_child_id);
             }else{
                $this->assign('stage_child_id','');
             }

             if(!empty($subject_id)){
                 $map['subject_id'] = $subject_id;
                  $this->assign('subject_id',$subject_id);
             }else{
                $this->assign('subject_id','');
             }

             if(!empty($type)){
                 $map['course_type'] = $type;
                  $this->assign('type',$type);
             }else{
                $this->assign('type','');
             }

             $course=db('course')->where($map)->paginate(8,false, [
        'query' => request()->param()]);


        }else{


              $course=db('course')->where('stage_id','1')->paginate(8,false, [
        'query' => request()->param()]);


              $stage_child=db('stage_cate')->where('parent_id','1')->select();

              $maps['stage_cate_id'] = 1;
              $this->assign('stage_id','1');
              $this->assign('stage_child_id','');
              $this->assign('subject_id','');
              $this->assign('type','');
        }
         
         $subject=db('stage_cate_subject')->where($maps)->select();

         foreach ($subject as $key => $value) {
              $subject[$key]['subject_name'] = db('subject')->where('subject_id',$value['subject_id'])->find()['subject_name'];
         }
       
        $stage=db('stage_cate')->where('parent_id','0')->select();
        
        
        $this->assign('stage_child',$stage_child);
        $this->assign('stage',$stage);
        $this->assign('subject',$subject);
        $this->assign('course',$course);
        
        return  view();
    }
    public function show_info(){
    	$id = $_GET['id'];
    	$data = db('course')->where('course_id',$id)->find();
    	$data['subject'] = db('subject')->where('subject_id',$data['subject_id'])->find()['subject_name'];
    	$data['stage_child_name'] = db('stage_child')->where('stage_child_id',$data['stage_child_id'])->find()['stage_child_name']; 
    	$data['teacher_name'] = db('teacher')->where('teacher_id',$data['teacher_id'])->find()['teacher_name'];
    	$data['teacher_desc'] = db('teacher')->where('teacher_id',$data['teacher_id'])->find()['teacher_desc'];
  

        $arr = db('name')->where('course_id',$id)->select();
        if(!empty($arr)){
        	foreach ($arr as $key => $value) {
        		 $arr[$key]['class'] = db('class')->where('uid',$value['id'])->select();
        		 $arr[$key]['count'] = db('class')->where('uid',$value['id'])->count();
        	}
        }
        $this->assign('arr',$arr);
    	$this->assign('data',$data);
        return $this->fetch('course/course_info');
    }

}
