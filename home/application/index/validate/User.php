<?php
namespace app\index\validate;

use think\Validate;

class User extends Validate
{
    protected $rule = [
        ['name'       , 'max:1'       , '名称最多不能超过1个字符'],
        ['age'        , 'number|between:1,120', '年龄必须是数字|年龄只能在1-120之间'],
        ['email'      , 'email'               , '邮箱格式错误'],
        ['id'         ,'require|number'      ,'缺少重要参数|重要参数必须为数字'],// 用户id
        ['gender'     ,'number'              ,'性别参数错误'],// 性别
        ['birthday'   ,'date'                ,'日期格式错误'],// 生日
        ['grade'      ,'number'              ,'年级格式错误'],// 年级
        ['parentName' ,'max:18|/^[\x7f-\xff]+$/','家长姓名少于6个字|必须为中文'],// 家长姓名
        ['parentPhone','max:11|/^1[3-8]{1}[0-9]{9}$/','电话格式11位|电话格式错误'],// 家长电话
        ['province'   ,'number'              ,'参数必须为数字'],// 省
        ['city'       ,'number'              ,'参数必须为数字'],// 市
        ['town'       ,'number'              ,'参数必须为数字'],// 区
        ['address'    ,'max:150'             ,'最多50字'],// 详细地址
    ];

    // 验证数据是否符合规则,错误返回错误信息
    public function verify($data='')
    {
        $validate = new Validate($this->rule);
        $result   = $validate->check($data);
        if(!$result){
            return $validate->getError();
        }
        return $result;
    }
    
}