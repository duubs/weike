<?php
namespace app\admin\controller;
use think\Controller;

class Admin extends Controller
{
    public function index()
    {
    	//首页
        return view('index');
    }
    public function examanationPaper()
    {
        //考试试卷
        return view('examanation_paper');
    }
    public function login()
    {
    	//登陆
    	return view('login');
    }
   public function chart()
    {
    	//数据表
    	return view('chart');
    }
    public function tableFontList()
    {
    	//表格-》文字表格
    	return view('table_font_list');
    }
    public function tableImagesList()
    {
    	//表格-》图片表格
    	return view('table_images_list');
    }
    public function formNews()
    {
    	//表格-》消息列表
    	return view('form_news');
    }
    public function formNewsList()
    {
    	//表格-》文字列表
    	return view('form_news_list');
    }


    public function formAmazehui()
    {
    	//表单-》Amaze UI 表单
    	return view('form_amazeui');
    }

       public function formLine()
    {
    	//表单-》线条表单
    	return view('form_line');
    }

}