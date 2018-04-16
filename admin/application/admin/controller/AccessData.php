<?php
namespace app\admin\controller;
use think\Controller;

class AccessData extends Controller
{
    public function yesterday()
    {
    	//昨日数据访问量
        return view('yesterday');
    }
        public function lastWeek()
    {
    	//上周数据访问量
        return view('last_week');
    }
        public function lastMonth()
    {
    	//昨日数据访问量
        return view('last_month');
    }
        public function lastYear()
    {
    	//昨日数据访问量
        return view('last_year');
    }
}    