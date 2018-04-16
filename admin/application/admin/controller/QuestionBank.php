<?php
namespace app\admin\controller;
use think\Controller;


class QuestionBank extends Controller
{
	public function questionBank()
	{
		//课程
		return view('question_bank');
	}
}