<?php 
namespace app\index\model;

use think\Db;
use think\Model;

class Curl extends Model
{

	/*
	*	CURL类
	*/
	public function curl($curl)
	{
		$url = $curl;
		// 1. 初始化
		$ch = curl_init();
		 // 2. 设置选项，包括URL
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_HEADER,0);
		 // 3. 执行并获取HTML文档内容
		$output = curl_exec($ch);
		if($output === FALSE ){
			echo "CURL Error:".curl_error($ch);
			exit;
		}
		return $output;
	}

	/**
     * 递归方法  多层级导航菜单
     * @param type $data
     * @return array
     */
    static $newData = array();
    public function tree($data,$parent_id=0,$level=0)
    {
        foreach ($data as $key => $value){
            if ($value['parent_id']==$parent_id){
                $value['level'] = $level;
                self::$newData[] = $value;
                $this->Tree($data,$value['id'],$level+1);
            }
        }
        return self::$newData;
    }

}