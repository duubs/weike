{include file="common/personage_header"}
<!--  <body>在header里，不用在写 -->
		
		<div class="main">
		<!-- 头部 tab 切换 start -->
			<ul class="tab_hd">
				<li><a href="/index/learningcenter/safety">安全中心</a></li>
				<li class="current"><a href="/index/learningcenter/modpwd">修改登录密码</a></li>
				
			</ul>
		<!-- 头部 tab 切换 end -->
		<div class="safety">
			<div class="tips_hd">
				定期更换密码可以让你的账户更加安全。<br/>
				请确保登录密码与支付密码不同！<br/>
				建议密码采用字母和数字混合，并且不短于6位。
			</div>
			<div class="form">
				<form class="pwdModify" action="/index/learningcenter/modpwd" method="post">
					<div class="items">
						<span class="label">当前登录密码：</span>
						<div class="left">
							<input class="text" type="password" name="pwd_old"/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="items">
						<span class="label">新登录密码：</span>
						<div class="left">
							<input class="text pwd_new" type="password" name="pwd_new"/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="items">
						<span class="label">确认登录密码：</span>
						<div class="left">
							<input class="text" type="password" name="pwd_confirm"/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="items">
						<span class="label">&nbsp;</span>
						<div class="left">
							<input class="btn_large_blue01 submit" type="submit" value="确定" />
						</div>
						<div class="clear"></div>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>
<script type="text/javascript">
seajs.use('vkoweb/js/web/safety/modifypwd');	//修改为所需js文件路径
</script>

<!-- 页脚 end -->
<!-- 已替换到head_v8.jsp -->
<!-- <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F637d3bd793ae39095a7b9fcf1f8afb55' type='text/javascript'%3E%3C/script%3E"));
</script> -->
<script type="text/javascript" src="_PUBLIC_/js/footer.js"></script>

<script type="text/javascript">
//setTimeout( function(){
	$($(".left_side dd").get(4)).hide();
	$($(".left_side dd").get(6)).hide();
	$($(".left_side dd").get(7)).hide();
	$($(".left_side dd").get(8)).hide();
	$($(".left_side dd").get(9)).hide();
	$($(".left_side dd").get(10)).hide();
	$($(".left_side dd").get(13)).hide();
	$($("#scoreLevel")).hide();
	$($("#privacyset")).hide();
	
//	},50);
</script>
</body>
</html>
