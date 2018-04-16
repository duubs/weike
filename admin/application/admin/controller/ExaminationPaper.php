<?php
namespace app\admin\controller;
use think\Controller;

class ExaminationPaper extends Controller
{
    public function examinationPaper()
    {
    	//首页
        return view('examination_paper');
    }
}