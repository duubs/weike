{include file="common/personage_header"}
<!--  <body>在header里，不用在写 -->
		<div class="main">
			<!-- 头部 tab 切换 start -->
			<ul class="tab_hd">
				<li class="current">我的订单</li> 
				<li><a href="/index/learningcenter/topuplist">我的V币</a></li>
			</ul>
			<!-- 头部 tab 切换 end -->
			<div class="account">
				<div class="myorderbar">
					<span class="all_orders orderCurr" id="memberOrder" myAttr="1">会员订单</span> 
					<span class="all_orders" id="cardOrder" myAttr="2">套餐订单</span>
					<span class="all_orders" id="allOrder" myAttr="3">课程订单</span>
					<span class="all_orders" id="vcoinOrder" myAttr="4">v币订单</span>
					<span class="all_orders" id="localOrder" myAttr="5">本地课订单</span>
				</div> 
<script type="text/javascript">
	$(function(){  
		
		//会员订单
		$('#memberOrder').click(function(){
			$("div span").removeClass("orderCurr");
			$(this).addClass("orderCurr");
			var myAttr = $(this).attr('myAttr')
			$.get("/index/LearningCenter/orderSearch",{order_type:myAttr},function(data){
				var html = ''

				// for(k in data) {
				// 	html += '<td><span class="blue">'+data[k].only_id+'</span></td>'
				// 	html += '<td><span class="time">'+data[k].order_time+'</span></td>'
				// 	html += '<td>'
				// 	html += '<a target="_blank">'+data[k].order_name+'</a><br/>'
				// 	html += '</td>'
				// 	html += '<td>'
				// 	html += '<strong class="money">'+data[k].order_quota+'</strong> <br/><br/>'
				// 	html += '</td>'

				// }
				// $('#box').html(html)
            })
		})
		
		//套餐订单
		$('#cardOrder').click(function(){
			$("div span").removeClass("orderCurr");
			$(this).addClass("orderCurr");
			var myAttr = $(this).attr('myAttr')
			alert(myAttr)
		})

		// 课程订单
		$('#allOrder').click(function(){
			$("div span").removeClass("orderCurr");
			$(this).addClass("orderCurr");
			var myAttr = $(this).attr('myAttr')
			alert(myAttr)
			
		})

		//V币订单
		$('#vcoinOrder').click(function(){
			$("div span").removeClass("orderCurr");
			$(this).addClass("orderCurr");
			var myAttr = $(this).attr('myAttr')
			alert(myAttr)
		})

		//本地课订单
		$('#localOrder').click(function(){
			$("div span").removeClass("orderCurr");
			$(this).addClass("orderCurr");
			var myAttr = $(this).attr('myAttr')
			alert(myAttr)
		})
	})
</script>
				<table class="account_table" id="allOrderTab" width="100%" border="0" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th width="18%">订单号</th>
							<th width="17%">
								<select name="time" class="time_select">
									<option value="-1">全部时间</option>
									<option value="1">近一个月记录</option>
									<option value="3">近三个月记录</option>
									<option value="6">近六个月记录</option>
									<option value="12">近一年记录</option>
								</select>
							</th>
							<th width="26%">商品名称</th>
							<th width="16%">订单金额</th>
							<th width="13%"><select name="status" class="status_select">
									<option value="-1">全部状态</option>
									<option value="1">等待付款</option>
									<option value="2">已支付</option>
									<option value="3">已取消</option>
									<option value="4">已退款</option>
									<option value="5">待发货</option>
									<option value="6">已发货</option>
							</select></th>
							<th width="10%">操作</th>
						</tr>
					</thead>
					
					<!-- 数据显示区开始 -->
					<tbody id="order_list">
		<?php foreach ($data as $k => $v) {?>

		<tr>
		<div id="box">
			<td><span class="blue"><?=$v['only_id']?></span></td>
			<td><span class="time"><?=date('Y-m-d H:i:s',$v['order_time'])?></span></td>
			<td><a target="_blank"><?=$v['order_name']?></a><br/></td>
			<td><strong class="money"><?=$v['order_quota']?></strong> <br/><br/></td>
		</div>		
			<td >
				<?php 
					if($v['state'] == 0) echo "待付款"; 
					else if ($v['state'] == 1) echo "已支付"; 
					else if ($v['state'] == 2) echo "订单已取消"; 
					else if ($v['state'] == 3) echo "已退款";  
					else if ($v['state'] == 4) echo "待发货";  
					else if ($v['state'] == 5) echo "已发货"; 
					else if ($v['state'] == 6) echo "退款中";  
					else echo "已完成";
				?>
			</td>
			<td id="tdop14466938236020259">
				
			</td>

			<!-- <td id="tdop14466938236020259">
				<?php if ($v['state'] == 0) {?>
					<a href="/index/LearningCenter/payment?order_id=<?=$v['order_id']?>">支付</a>
					<a href="/index/LearningCenter/state?order_id=<?=$v['order_id']?> ">取消</a>
				<?php } else if ($v['state'] == 1) {?>
					<a href="/index/LearningCenter/refund?order_id=<?=$v['order_id']?>">退款</a>
					<a href="javascript:void(0)" id="reminder">催单</a>
				<?php } else if ($v['state'] == 2) {?>
					<a href="javascript:void(0)">不可操作</a>
				<?php } else if ($v['state'] == 3) {?>
					<a href="/index/LearningCenter/orderDetails?order_id=<?=$v['order_id']?>">查看详情</a>
				<?php } else if ($v['state'] == 4) {?>
					<a href="" id="reminder">催单</a>
				<?php } else if ($v['state'] == 5) {?>
					<a href="">查看物流</a>
				<?php } else if ($v['state'] == 7) {?>
					<a href="/index/LearningCenter/orderDetails?order_id=<?=$v['order_id']?>">查看详情</a>
					<a href="/index/LearningCenter/refund?order_id=<?=$v['order_id']?>">退款</a>
				<?php } else {?>
					<a href="/index/LearningCenter/refundDesc?order_id=<?=$v['order_id']?>">查看退款进度</a>
				<?php }?>
			</td>
		</tr> -->
		<?php }?>
			</tbody>
			<!-- 数据显示区结束 -->
		</table>	
<!-- <script src="/public/static/jquery-1.8.2.min.js"></script> -->
<script type="text/javascript">
	$(function(){
		$('#reminder').click(function(){
			alert('已经通知商家')
		})
	})
</script>
				
				<!-- 分页开始 
				<div class="page">
					分页努力加载中 ...
				</div>-->
				<!-- 分页结束 -->
				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	seajs.use('vkoweb/js/web/order/orderlist');
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
