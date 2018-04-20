<?php
namespace app\admin\controller;
use think\Controller;

class Admin extends Controller
{
    //首页
    public function index()
    {
        return view('index');
    }

    //考试试卷
    public function examanationPaper()
    {
        return view('examanation_paper');
    }

    //登陆
    public function login()
    {
    	return view('login');
    }

    //数据表
    public function chart()
    {
    	return view('chart');
    }

    //表格-》文字表格
    public function tableFontList()
    {
    	return view('table_font_list');
    }

    //表格-》图片表格
    public function tableImagesList()
    {
    	return view('table_images_list');
    }

    //表格-》消息列表
    public function formNews()
    {
    	return view('form_news');
    }

    //表格-》文字列表
    public function formNewsList()
    {
    	return view('form_news_list');
    }

    //表单-》Amaze UI 表单
    public function formAmazehui()
    {
    	return view('form_amazeui');
    }
    
    //表单-》线条表单
    public function formLine()
    {
    	return view('form_line');
    }

}