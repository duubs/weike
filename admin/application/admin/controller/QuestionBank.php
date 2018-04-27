<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\paginate;

class QuestionBank extends Controller
{
	/**
	 * @Author    Hybrid
	 * @DateTime  2018-04-23
	 * @copyright [copyright]
	 * @license   [license]
	 * @version   [version]
	 * @return    [type]      [试题展示页面]
	 */
	public function questionBank()
	{
		
		$data = Db::table('micro_test')->paginate(5);
		return view('question_bank',[
			                         'data'=>$data
			                        ]);
	}

	/**
	 * @Author    Hybrid
	 * @DateTime  2018-04-23
	 * @copyright [copyright]
	 * @license   [license]
	 * @version   [version]
	 * @return    [type]      [试题删除]
	 */
	public function questionDelete()
    {
		$test_id = Request::instance()->get('test_id'); // 获取某个get变量;
		$data = Db::table('micro_test')->where(['test_id'=>$test_id])->delete();
                
		if ($data==1) {

       	   echo true;
		}else{
       	   echo false;
		}
    	
    }


    public function questionAdd()
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
      
        return view('question_add',[
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
     * @DateTime  2018-04-23
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [试卷添加]
     */
    public function questionDo()
    {
    	$data = Request::instance()->post();
        $res = Db::table('micro_test')->insert($data);
        if ($res)  {
            $this->success('新增成功', 'QuestionBank/questionBank');
        }else{
            $this->error('新增失败','QuestionBank/questionAdd');
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
    public function questionUpdata()
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

        return view('question_updata',[
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
     * @return    [数组]      [试题修改数据]
     */
    public function questionUpdatado()
    {
        $test= Request::instance()->post(); // 获取某个get变量;
        $test_id=$test['test_id'];
        $res = Db::table('micro_test')->where(['test_id'=>$test_id])->setField($test);
        if ($res) {
            return $this->success('修改成功','questionBank/questionBank','',1);
        }
              
    }

    /**
     * @Author    Hybrid
     * @DateTime  2018-04-23
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [试题详情页面]
     */
    public function questionDes()
    {
    	$test_id = Request::instance()->get('test_id'); // 获取某个get变量;
    	$data = Db::table('micro_test')->where('test_id',$test_id)->select();
    	return view('question_desc',[
    								'data'=>$data
    							    ]);
    }


    /**
     * @Author    Hybrid
     * @DateTime  2018-04-23
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [搜素]
     */
    public function questionSearch()
    {
    	$key= Request::instance()->get('key'); // 获取某个get变量;
        $data = Db::table('micro_test')->where('test_name','like','%'.$key.'%')->select();
        return $data;
    }








}


