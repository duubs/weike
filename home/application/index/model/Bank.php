<?php 
namespace app\index\model;

use think\Model;

class Bank extends Model
{
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
                $this->Tree($data,$value['stage_id'],$level+1);
            }
        }
        return self::$newData;
    }

}