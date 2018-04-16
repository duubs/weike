<?php
namespace app\admin\controller;
use think\Controller;


class User extends Controller
{
	public function user()
	{
		//用户
		return view('user');
	}
}