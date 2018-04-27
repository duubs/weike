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
        $data = Db::table('micro_paper')->paginate(3);
        return view('examination_paper',[
                                            'data'=>$data
                                        ]);
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
        $question = Db::table('micro_question')->select();
        $data = Db::table('micro_subject')->select();
        return view('examination_add',[
                                        'question'=>$question,
                                        'data'=>$data
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
        var_dump($data);die;
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
        // $pagin = 0; // 页数
        $tiaoshu = 2; // 条数
         $question_id = Request::instance()->get('question_id'); // 获取题型;
         $pagin = empty(Request::instance()->get('pagin')) ? 0 : Request::instance()->get('pagin'); // 获页数;
         $data['data'] = Db::table('micro_test')->where('test_question_id',$question_id)->page($pagin.','.$tiaoshu)->select(); //当前页数据
         $data['zongye'] = ceil(count(Db::table('micro_test')->where('test_question_id',$question_id)->select())/$tiaoshu); // 总页数
         $data['dangye'] = $pagin; // 当前页数


         // $data = Db::table('micro_test')->where('test_question_id',$question_id)->select();
         // $data['ye'] = $data['data']->render();
         // dump($data['zongye']);exit;
         return $data;
         return json_encode($data);

    }

   /**
    * @Author    Hybrid
    * @DateTime  2018-04-20
    * @copyright [copyright]
    * @license   [license]
    * @version   [version]
    * @return    [type]      [试卷修改页面]
    */
    public function examinationUpdata()
    {
        $paper_id = Request::instance()->get('paper_id'); // 获取某个get变量;
        $data = Db::table('micro_paper')->where(['paper_id'=>$paper_id])->select();
        return view('examination_updata',[
                                            'data'=>$data[0]
                                          ]);

    }

    /**
     * @Author    Hybrid
     * @DateTime  2018-04-20
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [数组]      [修改数据]
     */
    public function examinationUpdatado()
    {
       
        $test= Request::instance()->post(); // 获取某个get变量;
        $paper_id=$test['paper_id'];
        $res = Db::table('micro_paper')->where(['paper_id'=>$paper_id])->setField($test);
        if ($res) {
            return $this->success('修改成功','examinationPaper/examinationPaper','',1);
        }
              
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