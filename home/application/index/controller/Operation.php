<?php
namespace app\index\controller;
use app\index\model\User;
use app\index\model\Curl;
use think\Controller;
use think\Session;
use think\Cookie;
use think\Request;


class Operation extends Controller
{
	public function login()
	{
        if (Cookie::has('name') == true) {
            return view('learningCenter/my_course');
            exit;
        }

		if(request()->isPost()){

			if(!captcha_check(input('verifyCode'))) {
	            // 校验失败
	            $this->error('验证码不正确');

	        }
	        
			$user = new User;
			$data = $user->login(input('post.'));
			
			if($data == 1){
				$this->error('用户不存在');
			}

			if($data == 2){
				if($data['rememberMe']){
				Cookie::set('name',$data['rememberMe'],60*60*24*30);
			}
			Session::set('name',$data['user_account']);
			Session::set('id',$data['user_id']);
				$this->success('登录成功',url('learningcenter/login'));
			}
			if($data == 3){
				$this->error('密码错误');
			}

			return;

		}
		return view();
	}

	public function reg()
	{
		if (request()->isPost()) {

			$data = input('post.');

			if ($data['param'] != Cookie::get('param') ) {
				$this->error('短信验证码不正确');
			}else{
            	$adduser = new User;
			$data = $adduser->addUser(input('post.'));
			if ($data) {
				$this->success('注册成功',url('Login/login'));
			}else{
				$this->error('注册失败');
			}
			return;
            }
		}
		return view();
	}

	/*
	*	第三方登录
	*/
	public function oauth()
	{
		$redirect_uri = 'http://www.stone.com/qq/example/oauth/callback.php';
		$data = (new Curl)->curl('https://graph.qq.com/oauth2.0/token?grant_type=grant_type&client_id=101353491&client_secret=df4e46ba7da52f787c6e3336d30526e4&code=code&redirect_uri='.$redirect_uri);

		var_export($data);
		
	}


	/*
	*	注册时手机号验证
	*/
	public function shortMessage()
	{
        $phone = input('phone');
        if (empty($phone)) {
        	return '';
        	exit;
        }
        $param = rand(pow(10,(4-1)), pow(10,4)-1);
		Cookie::set('param',$param);
        $data = (new Curl)->curl('http://api.k780.com/?app=sms.send&tempid=51391&param=message%3D'.$param.'&phone='.$phone.'&appkey=28805&sign=054698bb229483c6f2f1405b214573f7&format=json');

		return $data;
	}

	
}
