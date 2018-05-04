{include file="common/personage_header"}
<!--  <body>在header里，不用在写 -->
		
		<div class="main">
		
			<!-- 头部 tab 切换 start -->
			<ul class="tab_hd">
				<li><a href="/index/learningcenter/order">我的订单</a></li>
				
				<li class="current">我的V币</li> 
				
			</ul>
			<!-- 头部 tab 切换 end -->
			 
			<div class="account"> 
			<div class="Vcoins">
			<p class="Vtit">我的V币</p> 
			<div class="Vnum">
				<span class="Vnums" id="score">{$list['vcoin']} V币</span>
				<!-- <a class="VpdyBtn" href="http://pay.vko.cn/pay/order/tovcoin">充值</a> -->
			</div>
			<p class="V"><a href="/index/learningcenter/intro" target="view_window">什么是V币？</a> </p>
			<p class="recordTit">V币记录</p>
			<div class="recordTop">
				<span class="reRow1">时间</span>
				<span class="reRow2">操作</span>
				<span class="reRow3">V币</span>
			</div>
			<div id="scoreList">
				<!--<div class="recordCont">
					 <span class="reRow1">2016-03-16</span>
					<span class="reRow2">测评</span>
					<span class="reRow3">+1</span> 
				</div>-->
			</div>
		</div>
		<a class="loadingMore" href="javascript:;" onclick="loadVcoinList()">加载更多</a>
		<!-- <div class="pageBar" id="pageBar" style="display: none;"><span class="current prev">上一页</span><span class="current">1</span><a href="#">2</a><a href="#" class="next">下一页</a></div> -->
		
		<input id="h_total" type="hidden" value=""/>
		<input id="h_totalp" type="hidden" value=""/>
		<input id="h_pageIndex" type="hidden" value="1"/>
		<input id="h_pageRow" type="hidden" value="10"/> 
		<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/jquery.pagination.js"></script>
		<script type="text/javascript" src="http://static.vko.cn/v8/common/js/paginationBar.js"></script>
			
			
			<!-- 之前老页面start -->
				
				<!--  
				<div class="page">
						<span>分页加载中 loading ...</span>
				</div>
				-->
				<!-- 之前老页面end -->
			</div>
		</div>
	</div>
</div>
<!-- 样式 -->
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/vip/css/myVcoin.css" />

<script type="text/javascript">
seajs.use('vkoweb/js/web/topup/topuplist');
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
