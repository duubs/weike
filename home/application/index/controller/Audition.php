<?php
namespace app\index\controller;

use think\Controller;

class Audition extends Controller
{
	/*
	*  首页
	*/
    public function audition()
    {
        return view('audition');
    }
  
}
