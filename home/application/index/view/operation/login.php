<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--[if lt IE 9]> 
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<![endif]-->
	<meta http-equiv="Access-Control-Allow-Origin" content="*" />
	<meta name="alexaVerifyID" content="COpV9RoXtcanUi3TXPNlodOTxuw" />
	<title>微课登录</title>
	<link rel="stylesheet" href="http://static.vko.cn/common/css/ie.css">
	<link rel="stylesheet" href="http://static.vko.cn/common/css/print.css">
	<link rel="stylesheet" href="http://static.vko.cn/common/css/screen.css">
	<!-- <link rel="stylesheet" href="http://static.vko.cn/common/css/base.css"> -->
	<link rel="stylesheet" href="http://static.vko.cn/vko/css/common-inherit.css">
	<link rel="stylesheet" href="http://static.vko.cn/v8/login-register/css/reset.css">
	<link rel="stylesheet" href="http://static.vko.cn/v8/login-register/css/common.css">
	<link rel="stylesheet" href="http://static.vko.cn/v8/login-register/css/login.css">
	
	<script type="text/javascript" src="http://static.vko.cn/common/js/stacktrace.js"></script>
	<script type="text/javascript" src="http://static.vko.cn/common/js/vkofileloader.js"></script>
	<script type="text/javascript" src="http://static.vko.cn/common/js/seajs/seajs/2.2.0/sea.js"></script>
	<script type="text/javascript" src="http://static.vko.cn/common/js/config.js"></script>
	<script type="text/javascript" src="http://static.vko.cn/vko/js/config.js"></script>
</head>
<body>
	<div class="logoarea">
		<div class="logoapart">
			<a href="http://www.vko.cn/">微课网</a>
		</div>
		<div class="login">
			<span>还没有开通微课账户？</span>
			<a class="login-bar" href="{:url('Operation/reg')}">注册</a>
		</div>
	</div>
<div class="main-box">
	<div class="main">
		<div class="m-left"><!-- <img src="http://static.vko.cn/v8/register-login/images/login-bg.jpg" alt=""> --></div>
		<div class="m-right">
			<h2>登录微课
				<strong class="show">
					<span class="sj_up"><b></b><i></i></span>
				</strong>
			</h2>
			<p class="warning">公共场所不建议自动登录，以防账号丢失</p>
			<form id="login-form" action="" method="post">
				<p><input type="text" name="user_account" placeholder="请输入手机号或者邮箱">
					<span class="tips-box">
						<b class="tips"><span>请输入正确的手机号</span>
							<strong class="tshow">
								<span class="sj_up"><b></b><i></i></span>
							</strong>
						</b>
					</span>
				</p>
				<p><input type="password" name="user_pwd" placeholder="请输入密码">
					<span class="tips-box">
						<b class="tips"><span>请输入正确的手机号</span>
							<strong class="tshow">
								<span class="sj_up"><b></b><i></i></span>
							</strong>
						</b>
					</span>
				</p>

				<p><input type="text" name="verifyCode" placeholder="请输入验证码">
					<span class="tips-box">
						 <div class="yzm"> 
		                 	<img src="{:captcha_src()}" class="verify" onclick="javascript:this.src='{:captcha_src()}?rand='+Math.random()" >
		                 </div>
						
					</span>
				</p>
				<p><span class="forget"><a class="vkolm-findpwd" href="http://vko.cn/safety/getpwd.html" target="_blank" tabindex="4">忘记密码？</a></span></p>
				<p><input type="submit" class="login-btn" value="登录"></p>
				<!-- <p>使用社交账户直接登录</p> -->
				<div class="vkolm-other">
					<dl>
						<dt style="margin-right:10px">使用社交账户直接登录</dt>	
						<!-- <dd><a title="和教育用户登录" class="vkolm-gdfx" target="_blank" href="http://open.edu.gd.chinamobile.com/oauth/login.do?appCode=mswkt2014&amp;destUrl=http://studycenter.vko.cn">和教育登录</a></dd>	 -->
						<dd><a class="vkolm-wx" href="#" target="_blank"  title="微信账号登录">使用微信账号登录</a></dd>	
						<dd><a class="vkolm-qq" title="用QQ账户注册" href="/index/operation/oauth" target="_blank">使用腾讯QQ登录</a></dd>
						<dd><a class="vkolm-sina" title="用新浪微博账户注册" href="/index/operation/oauth" target="_blank">使用新浪微博登录</a></dd>
					</dl>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="footer">
	<p>版权所有：北京微课创景教育科技有限公司 www.vko.cn 京ICP备12002746号</p>
</div>
<!-- <script type="text/javascript">
	seajs.use('http://static.vko.cn/v8/login-register/js/login');
	seajs.use('http://static.vko.cn/v8/common/js/stat');
</script> -->
</body>
</html>