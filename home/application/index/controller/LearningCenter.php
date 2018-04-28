<?php
namespace app\index\controller;

header('Content-Type:application/json; charset=utf-8');

use think\Db;
use think\Controller;
use think\Cookie;
use think\Request;
use Think\Upload;
use think\Session;
use app\index\model\Paper;
use app\index\model\User;
use app\index\model\Subject;
use app\index\model\Order;
use app\index\model\StageCate;
use app\index\validate\User as validateUser;


class LearningCenter extends Controller 
{

	/*
	*  判断是否登陆，已登录的直接进到学习中心页面
	*/
    public function login()
    {
        Cookie::set('name','value');

        if (Cookie::has('name') == true) {
            return view('my_course');
            exit;
        }
        return view('login');
    }

    /*
    *  学习中心
    */
    public function myCourse()
    {

        // $validate = new validateUser();

        // $data = [
        //     'name'  => '1',
        //     'age'   => 10,
        //     'email' => 'thinkphp@qq.com',
        // ];

        // $result   = $validate->verify($data);

        // var_export($result);die;

        return view('my_course');
    }

    /*
	*  试卷
	*/
    public function testPaper()
    {   
        //试卷
        $paperData = Db::table('micro_paper')->paginate(2);

        //分页样式
        $page = $paperData->render();

        // 搜索条件  科目
        $subjectData = (new Subject)->selectAll();

        unset($subjectData[9]);

        return view('test_paper',[
                                'paper' => $paperData,
                                'subject' => $subjectData,
                                'page' => $page
                                ]
        );
    }

    /*
    *   试卷编辑
    */
    public function paperEdit()
    {
        return view('paper_edit');
    }

    /*
    *   试卷搜索 
    */
    public function paperAjax()
    {
        $subject = Request::instance()->get('subject_id');   //科目
        $date = Request::instance()->get('date'); 
        $paper = Request::instance()->get('title');     //文本框内容
        // $paper = '数学';
        //转换查询条件
        $subjectData = Db::table('micro_subject')->where('subject_id' , $subject)->find();

        //判断按照科目的查询条件
        $sub = empty($subjectData) ? 'subject_name' : $subjectData['subject_name'] ;

        //判断按照时间的查询条件
        $minTime = ($date == 0) ? '0' : time()+$date*24*3600 ;

        //判断文本框的查询条件
        $paper = ($paper == '') ? 'paper_name' : $paper ;

        $query = new \think\db\Query;
        $paperData = Db::table('micro_paper')
                    ->where('time','>',$minTime)
                    ->where('subject_name',$sub)
                    ->where('paper_name','like',"%{$paper}%")
                    ->select();
        return $paperData;
    }

    /*
    *  学习计划
    */
    public function learningPlan()
    {
        return view('learning_plan');
    }

    /*
    *  错题本
    */
    public function errorBook()
    {
        return view('error_book');
    }

    /*
    *   会员
    */
    public function member()
    {
        Cookie::set('name','value');
        // 判断是否登陆，已登录的直接进到学习中心页面
        if (Cookie::has('name') == true) {
            return view('member');
            exit;
        }
        return view('login');
    }

     // 个人中心-个人资料
    public function information()
    {
        $user_id = session::get('id');  // 获取登录的id
        $post = Request::instance()->post(); // 获取经过过滤的全部post变量
        $message = [
            'state'=>0,
            'mess'=>'',
            'data'=>''
        ]; // 信息提示
        if ($post) {
            $validate = new validateUser();
            $list = $validate->verify($post);
            if ($list !== true) {
                $message['state'] = 1;
                $message['mess']  = $list;
            }else{
                $list = (new User)->where('user_id', $user_id)->update([
                    'user_email'    => $post['user_email'],
                    'user_name'     => $post['user_name'],
                    'sex'           => $post['gender'],
                    'birthday'      => $post['birthday'],
                    'grade_id'      => $post['grade'],
                    'parent_name'   => $post['parentName'],
                    'parent_tel'    => $post['parentPhone'],
                    'address'       => $post['province'].','.$post['city'].','.$post['town'],
                    'detailed_address'  => $post['address'],
                ]);
                if (!$list) {
                    $message['state'] = 1;
                    $message['mess']  = '修改失败';
                }
                $message['state'] = 2;
                $message['mess']  = '修改成功';
            }
        }

        $list = (new User)->one(['user_id'=>$user_id]); // 用户数据
        $list['address'] = empty($list['address']) ? ['','',''] : explode(',', $list['address']);
        
        $data = (new StageCate)->sel('parent_id != 0');         // 年级
        $province = Db::table('micro_region')->where(['p_id'=>1])->select(); //地区表
        // var_dump($province);die;
        return $this->fetch('information',[
            'list'=>$list,
            'data'=>$data,
            'province'=>$province,
            'message'=>$message
        ]);
        // return view('information',[
        //     'list'=>$list,
        //     'data'=>$data,
        //     'province'=>$province,
        //     'message'=>$message
        // ]);
    }

    // 地区表三级联动
    public function getRegion()
    {
        $p_id = Request::instance()->get('r_id');       // 获取某个r_id变量
        $r_type = Request::instance()->get('r_type');   // 获取某个r_type变量
        return Db::table('micro_region')->where(['p_id'=>$p_id,'r_type'=>$r_type])->select();
    }

    // 个人中心-头像设置
    public function faceset()
    {
        $user_id = session::get('id');
        $data = Db::table('micro_user')->where('user_id='.$user_id)->find();
        return $this->fetch('LearningCenter/faceset',['data'=>$data]);
    }

    // 个人中心-接收头像信息
    public function facesetDo()
    {
        $user_id = session::get('id');
        $files = request()->file('user_head'); 
        if (empty($files)) {
            return $this->error('没有图片被上传');
        } else {
            $user_head = $this->uploads('user_head');
        }
        $res = Db::table('micro_user')->where('user_id='.$user_id)->update(['user_head'=>$user_head]);
        if ($res) {
            return $this->success('修改头像成功','LearningCenter/faceset','',1);
        } else {
            return $this->error('上传失败','LearningCenter/faceset','',1);
        }
    }

    /**
     * @Title     图片上传
     * @DateTime  2018-04-21
     * @copyright 1.0.0.2
     * @version   Micro1.0
     * @return    [type]      [description]
     */
    public function uploads($name)
    {
        $files = request()->file($name); 
        $image_path = ROOT_PATH . 'public/user_uploads';
        $image_info = $files->move($image_path);
        $savename = '/user_uploads/'.$image_info->getSaveName();
        return $savename;  // tp自己封装的文件别名
    }

    // 个人中心-第三方账号绑定
    public function thirdparty()
    {
        return 'thirdparty暂未模板';
    }

    // 个人中心-我的订单---订单列表
    public function order()
    {
        $user_id = session::get('id');
        $order = new Order();
        $data = Db::table('micro_order')->where('is_void','=',0)->where('user_id'.'='.$user_id)->select();
        return $this->fetch('order',['data'=>$data]);
    }

    // 个人中心-我的订单---订单详情
    public function orderDetails()
    {
        $order_id = Request::instance()->get('order_id');
        $data = Db::table('micro_order')->where('order_id','=',$order_id)->find();
        return $this->fetch('order_details',['data'=>$data]);
    }

    // 个人中心-我的订单----支付---接口
    public function payment()
    {
        $order_id = Request::instance()->get('order_id');
        echo $order_id;die;
    }

    //  个人中心-我的订单---申请退款
    public function refundDo()
    {
        $order_id = Request::instance()->get('order_id');
        $res = Db::table('micro_order')->where('order_id='.$order_id)->setField(['state'=>6]);
        if (!$res) {
            return false;
        }
        return 1;
    }

    //  个人中心-我的订单---查看退款详情
    public function refundDesc()
    {
        $order_id = Request::instance()->get('order_id');
        $data = Db::table('micro_order')->where('order_id','=',$order_id)->find();
        return $this->fetch('order_refund_desc',['data'=>$data]);
    }

       // 个人中心-我的订单---退款
    public function refund()
    {
        $order_id = Request::instance()->get('order_id');
        $data = Db::table('micro_order')->where('order_id','=',$order_id)->find();
        return $this->fetch('order_refund',['data'=>$data]);
    }

    // 个人中心-我的订单-订单取消
    public function state()
    {
        $order_id = Request::instance()->get('order_id');
        $order = new Order();
        $res = $order->save([
            'state'=>2
        ],['order_id'=>$order_id]);
        if (!$res) {
            return $this->error('没有被修改','learningCenter/order','',1);
        }
        return $this->success('订单已取消','learningCenter/order','',1);
    }

    // 个人中心-我的V币
    public function topuplist()
    {
        $list = (new User)->one(['user_id'=>1]); // 用户数据
        return view('topuplist',['list'=>$list]);
    }

    // 什么是 v 币
    public function intro()
    {
        return view('intro');
    }

    // 个人中心-安全中心
    public function safety()
    {
        $user_email = Request::instance()->get('user_email');
        Cookie::set('email',$user_email);
        return view('safety');
    }

    // 个人中心-登录密码
    public function modpwd()
    {
         // 获取经过过滤的全部post变量
        if ($post = Request::instance()->post()) {
            if ($post['pwd_new'] !== $post['pwd_confirm']) {
                $this->success('确认密码错误', url('modpwd'));
            }
            $list = (new User)->one(['user_id'=>1]); // 用户数据
            if ($list['user_pwd'] == $post['pwd_old']) {
                $list = (new User)->where('user_id', 1)->update(['user_pwd' => $post['pwd_new']]);
                if ($list) {
                    $this->success('修改成功', url('information'));
                }
            }
            $this->success('密码错误', url('modpwd'));
        }
        return view('modpwd');
    }

    /**
     * tp5邮件
     * @param
     * @author staitc7 <static7@qq.com>
     * @return mixed
     */
    public function email() {
        $toemail = cookie('email');
        // $toemail='yunyun142@vip.qq.com';
        $name='static7';
        $subject='邮件验证';
        $content='请点下面链接以完成验证'.'<br />'.'http://vk.home.com/index/learningcenter/verification';
        $state = send_mail($toemail,$name,$subject,$content);
        if ($state == true) {
            return $this->success('邮件已发送，请激活','/index/LearningCenter/safety','',1);
        }
    }

    /**
     * 邮箱验证
     */
    public function verification()
    {
        return view('verification');
    }

    /*
    *  邮箱发邮件验证
    */
    public function verificationDo()
    {
        $email_state = Request::instance()->get('email_state');
        $user_id = Session::get('id');
        // 同意绑定邮箱
        if ($email_state == 1 ) {
            $res = Db::table('micro_user')->where('user_id','=',$user_id)->update(['email_state'=>1]);
            if ($res) {
                return 1;
            }
        }
        // 不同意绑定
        if ($email_state == 0 ) {
            return false; 
        }
    }

    // 订单搜索
    public function orderSearch()
    {
        $order_type = Request::instance()->get('order_type');
        $data = Db::table('micro_order')->where('order_type',$order_type)->select();
        return $data;
    }

}
