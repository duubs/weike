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
        $data = Db::table('micro_test')->paginate(3);
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
        $test_id = Request::instance()->get('test_id'); // 获取某个get变量;
        $data = Db::table('micro_test')->where(['test_id'=>$test_id])->delete();
                
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
     * @return    [数组]      [试卷添加页面展示]
     */
    public function examinationAdd()
    {
    	//查询版本名称
        $edition = Db::table('micro_edition')->select();
        //查询题型名称
        $question = Db::table('micro_question')->select(); 
        //查询题注名称
        $caption = Db::table('micro_caption')->select();        
        //查询知识点名称
        $chapter = Db::table('micro_chapter')->select();
        //查询科目名称
        $subject = Db::table('micro_subject')->select();
        //查询学段名称
        $stage = Db::table('micro_stage_cate')->where('parent_id > 0')->select();
        //查询学段名称
        $textbook = Db::table('micro_textbook')->select();
      
        return view('examination_add',[
                                        'edition'=>$edition,
                                        'question'=>$question,
                                        'caption'=>$caption,
                                        'chapter'=>$chapter,
                                        'subject'=>$subject,
                                        'stage'=>$stage,
                                        'textbook'=>$textbook
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
        $res = Db::table('micro_test')->insert($data);
        if ($res)  {
            $this->success('新增成功', 'ExaminationPaper/examinationPaper');
        }else{
            $this->error('新增失败','ExaminationPaper/examinationAdd');
        }
        
       

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
        $test_id = Request::instance()->get('test_id'); // 获取某个get变量;
        $data = Db::table('micro_test')->where(['test_id'=>$test_id])->select();

        //查询版本名称
        $edition = Db::table('micro_edition')->select();
        //查询题型名称
        $question = Db::table('micro_question')->select();
        //查询题注名称
        $caption = Db::table('micro_caption')->select();       
        //查询知识点名称
        $chapter = Db::table('micro_chapter')->select();
        //查询科目名称
        $subject = Db::table('micro_subject')->select();
        //查询学段名称
        $stage = Db::table('micro_stage_cate') ->where('parent_id > 0')->select();
        //查询学段名称
        $textbook = Db::table('micro_textbook')->select();

        return view('examination_updata',[
                                            'edition'=>$edition,
                                            'question'=>$question,
                                            'caption'=>$caption,
                                            'chapter'=>$chapter,
                                            'subject'=>$subject,
                                            'stage'=>$stage,
                                            'textbook'=>$textbook,
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
        $test_id=$test['test_id'];
        $res = Db::table('micro_test')->where(['test_id'=>$test_id])->setField($test);
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
        $data = Db::table('micro_test')->where('test_name','like',$key)->select();
        return $data;

        
    }
    






}