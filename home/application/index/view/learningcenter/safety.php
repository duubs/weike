{include file="common/personage_header"}
<!--  <body>在header里，不用在写 -->
		
		<div class="main">
		<!-- 头部 tab 切换 start -->
			<ul class="tab_hd">
				<li class="current"><a href="/index/learningcenter/safety">安全中心</a></li>
				<li><a href="/index/learningcenter/modpwd">修改登录密码</a></li>
			</ul>
		<!-- 头部 tab 切换 end -->
			<div class="safety">
				<table class="safety_table" width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<th colspan="2">
							<span class="font14">您账户的安全等级：</span><strong class="font14">中</strong> <span class="password_weight">密码强度</span><span class="red">建议您启动安全设置，以保障账户及资金安全</span>
						</th>
					</tr>
					<tr>
						<td width="*">
						<span class="success"><i></i>登录密码</span>
						<div class="left red">
							<span class="red">互联网账号存在被盗风险，建议您定期更改密码以保护账户安全。</span>
						</div>
						</td>
						<td width="70"><a class="btn_blue01 modifi" href="/index/LearningCenter/modpwd" title="修改">修改</a></td>
					</tr>
							<tr>
								<td width="*">
								<span class="error"><i></i>邮箱验证</span>
								<div class="left">您的邮箱尚未验证，请验证</div>
								</td>
								<td width="70"><a class="btn_orange01 verify" href="/index/LearningCenter/email" title="立即验证">立即验证</a></td>
							</tr>
						
						
							<tr>
								<td width="*">
								<span class="success"><i></i>手机绑定</span>
								<div class="left">
									您的手机登录名156****0520，已绑定<br/>
									<span class="red">您可以更换手机号码，如验证成功，原手机号码将无法使用</span>
								</div>
								</td>
								<td width="70"><a class="btn_blue01 modifi" href="/safety/modmobile.html" title="修改">修改</a></td>
							</tr>
				       	
						
					
				</table>
				
				<!-- <dl class="state">
					<dt>账户安全说明：</dt>
					<dd><strong>* 登录密码：</strong>本次积分变动的日期。</dd>
					<dd><strong>* 支付密码：</strong>导致积分增加或扣除的原因。</dd>
					<dd><strong>* 邮箱验证：</strong>本次积分的数量，正数为获得积分，负数为扣除积分。</dd>
					<dd><strong>* 手机绑定：</strong>因各种原因被扣除积分后剩余的积分分值。消费的积分将从首笔可用积分开始抵扣。</dd>
				</dl> -->
				<a class="more_help" href="/help.html" title="更多帮助" target="help">>>更多帮助</a> 
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
seajs.use('vkoweb/js/web/new');	//修改为所需js文件路径
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
