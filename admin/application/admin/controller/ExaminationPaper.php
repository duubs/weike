<?php
namespace app\admin\controller;

use think\Controller;
use think\Db; 
use think\Request;
use think\Paginator;

class ExaminationPaper extends Controller
{
	/**
     * @Author    Hybrid
     * @DateTime  2018-04-20
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [数组]      [展示页面]
     */
    public function examinationPaper()
    {
        $this->error('暂未开放');

        $data = Db::table('micro_paper')->select();
        //查询试卷试题
        $question = Db::table('micro_question')->select();
        //查询试卷科目
        $subject = Db::table('micro_subject')->select();
        //查询试卷学段
        $stage = Db::table('micro_stage_cate')->where('parent_id <= 0')->select();
        //查询试卷年份
        $month = Db::table('micro_month')->select();
        //查询试卷地区
        $area = Db::table('micro_area')->select();

        return view('examination_paper',[
                                            'data'=>$data,
                                            'question'=>$question,
                                            'subject'=>$subject,
                                            'stage'=>$stage,
                                            'area'=>$area,
                                            'month'=>$month
                                        ]);
    }
    /**
     * @Author    Hybrid
     * @DateTime  2018-04-28
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [查询学段 下拉]
     */
    public function examinationDown(){
       $stage_id = Request::instance()->get('stage_id');
       $data = Db::table('micro_paper')->alias('paper')
                ->join('micro_stage_cate stage_cate','paper.stage_cate_id = stage_cate.stage_cate_id')
                ->where('paper.stage_cate_id','=',$stage_id)->select();
        return $data;
        
    }

    /**
     * @Author    Hybrid
     * @DateTime  2018-04-28
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [查询科目 下拉]
     */
    public function examinationSubject(){
        $subject_id = Request::instance()->get('subject_id'); 
        $data = Db::table('micro_paper')->alias('paper')
                ->join('micro_subject subject','paper.subject_id = subject.subject_id')
                ->where('paper.subject_id',$subject_id)->select();
        return $data;
        
    }

    /**
     * @Author    Hybrid
     * @DateTime  2018-04-28
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [查询年份 下拉]
     */
    public function examinationMonth()
    {
        $month_id = Request::instance()->get('month_id'); 
        $data = Db::table('micro_paper')->alias('paper')
                ->join('micro_month month','paper.month_id = month.month_id')
                ->where('paper.month_id',$month_id)->select();
        return $data;
    }

    /**
     * @Author    Hybrid
     * @DateTime  2018-04-28
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [查询地区 下拉]
     */
    public function examinationArea()
    {
        $area_id = Request::instance()->get('area_id'); 
        $data = Db::table('micro_paper')->alias('paper')
                ->join('micro_area area','paper.area_id = area.area_id')
                ->where('paper.area_id',$area_id)->select();
        return $data; 
    }

    public function examinationGo()
    {
       $data = Request::instance()->get();
       // var_dump($data);die;
       $res = Db::table('micro_paper')
              ->where('stage_cate_id',$data['stage_name'])
              ->where('subject_id',$data['subject'])
              ->where('month_id',$data['month'])
              ->where('area_id',$data['area'])
              ->select();

       return $res;

    }

    /**
     * @Author    Hybrid
     * @DateTime  2018-04-20
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [数组]      [试卷删除]
     */
    public function examinationDelete()
    {
        $paper_id = Request::instance()->get('paper_id'); // 获取某个get变量;
        $data = Db::table('micro_paper')->where(['paper_id'=>$paper_id])->delete();
                
       if ($data==1) {
       	   echo true;
       }else{
       	   echo false;
       }
    	
    }
    /**
     * @Author    Hybrid
     * @DateTime  2018-04-20
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [数组]      [试卷添加页面展示s]
     */
    public function examinationAdd()
    {
        //查询试卷试题
        $question = Db::table('micro_question')->select();
        //查询试卷科目
        $data = Db::table('micro_subject')->select();
        //查询试卷学段
        $stage = Db::table('micro_stage_cate')->where('parent_id <= 0')->select();
        //查询试卷年份
        $month = Db::table('micro_month')->select();
        //查询试卷地区
        $area = Db::table('micro_area')->select();

        return view('examination_add',[
                                        'question'=>$question,
                                        'data'=>$data,
                                        'stage'=>$stage,
                                        'month'=>$month,
                                        'area'=>$area
                                     ]);

    }

    /**
     * @Author    Hybrid
     * @DateTime  2018-04-20
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [数组]      [试卷添加]
     */
    public function examinationDo()
    {
        $data = Request::instance()->post();
        // var_dump($data);die;
        $data['time'] = time();
        $res = Db::table('micro_paper')->insert($data);
        if ($res)  {
            $this->success('新增成功', 'ExaminationPaper/examinationPaper');
        }else{
            $this->error('新增失败','ExaminationPaper/examinationAdd');
        }
        

    }
    /**
     * @Author    Hybrid
     * @DateTime  2018-04-25
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [查询试题 通过科目]
     */
    public function examinationDemo()
    {
      $subject_name = Request::instance()->get('subject_name'); // 获取某个get变量;
      $data = Db::table('micro_test')->where('test_project_id',$subject_name)->select();
      return $data;
      return json_encode($data);
       
    }

    /**
     * @Author    Hybrid
     * @DateTime  2018-04-25
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [通过题型 查询试题]
     */
    public function examinationDamo()
    {
        
        $tiaoshu = 2; // 条数
        $question_id = Request::instance()->get('question_id'); // 获取题型;
        $pagin = empty(Request::instance()->get('pagin')) ? 0 : Request::instance()->get('pagin'); // 获页数;
        $data['data'] = Db::table('micro_test')->where('test_question_id',$question_id)->page($pagin.','.$tiaoshu)->select(); //当前页数据
        $data['zongye'] = ceil(count(Db::table('micro_test')->where('test_question_id',$question_id)->select())/$tiaoshu); // 总页数
        $data['dangye'] = $pagin; // 当前页数
        return $data;
        return json_encode($data);

    }




    /**
     * @Author    Hybrid
     * @DateTime  2018-04-21
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [数组]      [搜索]
     */
    public function examinationSearch()        

    {

        $key= Request::instance()->get('key'); // 获取某个get变量;
        $data = Db::table('micro_paper')->where('paper_name','like','%'.$key.'%')
                ->select();
         return $data;
    }


    /**
     * @Author    Hybrid
     * @DateTime  2018-04-24s
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [试卷查询]
     */
    public function examinationDesc()
    {
        $paper_id= Request::instance()->get('paper_id'); // 获取某个get变量;
        

        $data = Db::table('micro_test')->alias('test')
                ->join('micro_paper paper','test.test_id=paper.test_ids')->where('paper_id',$paper_id)->select();
       
        return view('examination_desc',['data'=>$data]);
    }
    







}