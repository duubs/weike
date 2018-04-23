<?php
namespace app\index\controller;
use app\index\model\User;
use think\Controller;
use think\Session;

class Operation extends Controller
{
	public function login()
	{
		if(request()->isPost()){
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
				$this->success('登录成功',url('index/index'));
			}
			if($data == 3){
				$this->error('密码错误');
			}

			return;

		}
		return view();
	}

	public function reg(){
		
		if (request()->isPost()) {

			$data = input('post.');
            if(!captcha_check($data['verifyCode'])) {
                // 校验失败
                $this->error('验证码不正确');

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
}
