{include file="common/personage_header"}
<!--  <body>在header里，不用在写 -->
		<div class="main">
			<!-- 头部 tab 切换 start -->
			<ul class="tab_hd">
				<li class="current"><a href="/index/learningcenter/information">个人资料</a></li>
				<li><a href="/index/learningcenter/faceset">头像设置</a></li>
				<li><a href="/index/LearningCenter/tosetthirdbind" id="authon">第三方账户绑定</a></li>
			</ul>
			<script type="text/javascript">
				$(function(){
					$('#authon').click(function(){
						alert('该功能尚未完善')
					})
				})
			</script>
			<!-- 头部 tab 切换 end -->
			<div class="information">
				<!-- <div class="tips_success">
					个人资料设置成功
				</div> -->
				<div class="complete">
					<span class="tit">你的资料完整度：</span>
					<div class="img">
						<span class="length" style="width:80%"></span>
						<span class="shade"></span>
					</div>
					<strong class="num-old">80%</strong>
					<!-- <span class="tips">填写真实的资料，有助于好友找到你并获得积分奖励哦。</span> -->
					<span class="tips">填写真实资料，友谊的小船就不会说翻就翻。</span>
				</div>
				<hr class="place_line"/>
					<div class="form">
						
					</div>
					<hr class="place_line"/>
					<div class="form">
						<h4>订单信息</h4>
						<div class="form_group">
							<div class="form_tag"><i class="red">*</i>订单名称：</div>
							<div class="form_ctrl">
								{$data['order_name']}
							</div>
						</div>
						<div class="form_group">
							<div class="form_tag"><i class="red">*</i>订单编号：</div>
							<div class="form_ctrl">
								{$data['only_id']}
							</div>
						</div>
						
						<div class="form_group">
							<div class="form_tag"><i class="red">*</i>订单金额：</div>
							<div class="form_ctrl">
								{$data['order_original_quota']}
							</div>
						</div>

						<div class="form_group">
							<div class="form_tag"><i class="red">*</i>下单时间：</div>
							<div class="form_ctrl">
								{$data['order_time']}
							</div>
						</div>

						<div class="form_group">
							<div class="form_tag"><i class="red">*</i>订单支付状态：</div>
							<div class="form_ctrl">
								<?php 
									if      ($data['state'] == 0) echo "待付款"; 
									else if ($data['state'] == 1) echo "已支付"; 
									else if ($data['state'] == 2) echo "订单已取消"; 
									else if ($data['state'] == 3) echo "已退款";  
									else if ($data['state'] == 4) echo "待发货";  
									else if ($data['state'] == 5) echo "已发货"; 
									else if ($data['state'] == 6) echo "退款中";  
									else echo "完成";
								?>
							</div>
						</div>
						
						<div class="form_group">
							<div class="form_tag">&nbsp;</div>
							<div class="form_ctrl">
								<input class="btn_large_blue01" type="submit" id="submit" value="确 定"/>
							</div>
						</div>
						<input type="hidden" name="order_id" value="<?=$data['order_id']?>" id="leng">
					</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<script src="/public/static/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#submit').click(function(){
			window.location.href='/index/LearningCenter/order'
		})
	})
</script>