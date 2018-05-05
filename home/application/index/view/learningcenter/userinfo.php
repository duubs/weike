
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


<title>学习中心</title>
<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/easyui/jquery-1.7.2.min.js"></script>

<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common.css">
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/top_common.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common-inherit.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/ie.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/print.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/screen.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/pagination.css">
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/utils.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/cookie.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/vkouser.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/local/md5.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/login.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/handlebars-1.0.0.beta.6.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/handlebarsextend.js"></script>


<script type="text/javascript" src="http://static.vko.cn/common/js/vkofileloader.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/seajs/2.2.0/sea.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/config.js"></script>
<script>
	var staticPath = 'http://static.vko.cn/v8';
	var ssoPath='http://sso.vko.cn';
	var studyCenterPath='http://studycenter.vko.cn';
	var topicPath='http://topic.vko.cn';
	var baseRoot = 'http://topic.vko.cn/topic/index';
	var rootPath = 'http://www.vko.cn';
	var apiPath = 'http://api.vko.cn';
	var payPath = 'http://pay.vko.cn';
	var cmsPath = 'http://cms.vko.cn';
</script>
<!-- 页脚 end -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F637d3bd793ae39095a7b9fcf1f8afb55' type='text/javascript'%3E%3C/script%3E"));
</script>

<link rel="stylesheet" type="text/css"
	href="http://static.vko.cn/v8/studycenter/css/learning_center.css" />
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/common/css/regmodel.css" />
<script type="text/javascript"
	src="http://static.vko.cn/v8/studycenter/js/learning_center.js"></script>


<style type="text/css">
/* 浮动 */
.left{ float:left!important; _display:inline!important;}
.right{ float:right!important; _display:inline!important;}

/* 清除布局浮动 */
.clearfix:before,.clearfix:after{ content:""; display:block;}
.clearfix:after{ clear:both;}
.clearfix{ zoom:1;}
.clear{ clear:both; display:block; overflow:hidden; visibility:hidden; width:0; height:0;}

/* 代码三角  ie7不兼容 */
/* 展开 收起 */
	.hide{
		position: absolute; 
		*position: absolute; 
		right: 4px; 
		top: 3px;
		*right: 4px; 
		*top: 3px; 
	}
	.show{
		position: absolute; 
		right: 4px; 
		top: -3px; /* 
		*+right: 4px; 
		*+top: -3px; */
	}
	/* 上三角 */
	.sj_up{
		display: inline-block;
		display: inline-block\9;
	    width: 12px;
	    height: 12px;
	    background: #fe862e;
	    position: relative;
	}
   .sj_up b{
       position: absolute;/* 
       top: 6px;
       right: 18px;
       top: 4\9;
       right: 22px\9; */
       border-width:6px;
       border-style:dashed dashed solid dashed;
       border-color: transparent transparent #fff transparent;
   }
	/* 下三角 */
   .sj_down{
   	  display: inline-block;
      width: 12px;
      height: 12px;
      background: #fe862e;
      position: relative;
   }
   .sj_down b{
       position: absolute;/* 
       top: 12px;
       right: 18px;
       top: 14px\9;
       right: 22px\9; */
       border-width:6px;
       border-style: solid dashed dashed dashed;
       border-color: #fff transparent transparent transparent;
   }
	/* 左三角 */
	.sj_left{
		display: inline-block;
		display: inline-block\9;
	    width: 14px;
	    height: 14px;
	    background: #fff;
	    position: relative;
	}
   .sj_left b{
       position: absolute;/* 
       top: 8px;
       right: 20px;
       top: 10px\9;
       right: 22px\9;
       border-width:9px\9; */
       border-width:7px;
       border-style:dashed solid dashed dashed;
       border-color: transparent #58b2cb transparent transparent;
   }
	/* 右三角 */
   .sj_right{
   	  display: inline-block;
      width: 12px;
      height: 12px;
      background: #fff;
      position: relative;
   }
   .sj_right b{
       position: absolute;
       top: 12px;
       right: 18px;
       top: 10px\9;
       right: 20px\9;
       border-width:6px;
       border-style: dashed dashed dashed solid;
       border-color: transparent transparent transparent #fff;
   }

/* 代码三角  ie7不兼容 */

</style>

</head>
<body>
	
	<script type="text/javascript" src="http://static.vko.cn/v8/common/js/header.js"></script>
	<script type="text/javascript"
		src="http://static.vko.cn/v8/common/jqueryplugin/jquery.pagination.js"></script>
	<script type="text/javascript"
		src="http://static.vko.cn/v8/common/js/paginationBar.js"></script>
	<script type="text/javascript"
		src="http://static.vko.cn/v8/studycenter/js/common_study.js"></script>
	<script type="text/javascript">
		$(function () {
			var studycenter="#template-studycenter";  
		    var data={"total":0,"listPage":[],"totalPage":0,"pageRow":10,"rows":[],"pageIndex":1};
			var template=Handlebars.compile($(studycenter).html());
			
		    $('.count_detail').append(template(data));
			$("#h_total").val(data.total);
		    $("#h_pageIndex").val(data.pageIndex);
		    $("#h_pageRow").val(data.pageRow);
		 
		    if(data.totalPage>0){
		    	$('.count_detail').append("<div class='pagination' id='studystatPage'>");
		    }
		    if($("#h_total").val()>0){
		    	var callbackPage=function(index){//alert(index);
					location.href='http://studycenter.vko.cn?page='+index+'&state='+$("#h_state").val();
				};
				paginationBar('studystatPage',callbackPage,$("#h_total").val(),$("#h_pageRow").val(),$("#h_pageIndex").val());
			}
		    
		    $(".use_jhm").live('click', function(){
		    	$(".jhm").show();
				$("#jhm_kc_btns").attr('onclick','clickActiveCode()');
		    	$(".jhm_code").show();
		    });
			
			$(".use_tym").live('click', function(){
		    	$(".tym").show();
				$("#tym_kc_btns").attr('onclick','clickMemberActiveCode()');
		    	$(".tym_code").show();
		    });
			
		    $('.mt_x').on('click', function(){
		    	$(".mt").hide();
		    	$(".key_code").hide();
		    });
		    
		   
		  
		   $(document).find('.desc').each(function(){
			var dd=$(this).text();
			$(this).text(dd);
		   });   
		    
		});
		 
		   
		   var clickMemberActiveCode = function(){
		   		$(".kc_tym_btns").removeAttr('onclick');
		   		var acode = $(".tym_code .kc_form input").val();
		    	if(!acode){
		    		$(".tym_code .kc_tips").html("请输入体验码*");
					$(".kc_tym_btns").attr('onclick','clickMemberActiveCode()');
		    		return;
		    	}
				
		    	$ .ajax({ 
		    		type : "GET",
		    		url : studyCenterPath+"/studyCenter/memberActCode",
		    		dataType : "jsonp",
		    		data : {
		    			code : acode
		    		},
		    		success : function(data) {
						$(".kc_tym_btns").attr('onclick','clickMemberActiveCode()');
		    			if(data.code != 'success'){
		    				$(".tym_code .kc_tips").html(data.msg);
		    				return;
		    			}else{
							$(".tym_code .kc_tips").html('成功');
						}
		    			location.reload(true);
		    		},
		    		error : function(data) {
						$(".kc_tym_btns").attr('onclick','clickMemberActiveCode()');
		    			alert('网络错误');
		    		}
		    	});
		   }; 
		</script>
	<!-- start -->
	<!-- learning_count top -->
	
	<div class="mains clearfix">
	<div class="lc_top">
		<ul>
			<li><a class="lc_my_course_h" href="javascript:void(0);">我的课程</a></li>
			<li><a class="lc_learning_plan" href="http://studycenter.vko.cn/studyPlan/toPlanList">学习计划</a></li>
			<!-- <li><a class="lc_learning_count" href="http://studycenter.vko.cn/studyCenter/mystudystat">学习统计</a></li>
			-->
			<li><a class="lc_test_record" href="http://studycenter.vko.cn/paperRecord">组卷记录</a></li>
			<li><a class="lc-gp-wrong" href="http://studycenter.vko.cn/errorbook">我的错题本</a></li>
		</ul>
	</div>
	<!-- learning_count main -->
	<div class="lc_main">
		<div class="lc_main_top" id="lc_top_left_userinfo">
			
		</div>
		<div class="count_detail">
		</div>
		
		<input id="h_total" type="hidden" value=""/>
		<input id="h_pageIndex" type="hidden" value="1"/>
		<input id="h_pageRow" type="hidden" value=""/>

		<!-- <div class="key_detail"></div> -->
	</div>
	</div>
	<div class="clear"></div>
	
	<!-- 弹窗 -->
	<div class="mt jhm" style="display: none;"></div>
	<div class="key_code jhm_code" style="display: none;top:35%;">
		<p class="kc_top"><span class="mt_x"></span>使用激活码</p>
		<form class="kc_form">
			<p class="kc_txt"><input type="text" name="actcode" placeholder="请输入激活码"></p>
			<p class="kc_tips"></p>
			<p class="kc_btn"><a class="kc_btns" id="jhm_kc_btns" href="javascript:void(0);">激活</a></p>
		</form>
	</div>
	
	<!-- 弹窗 -->
	<div class="mt tym" style="display: none;"></div>
	<div class="key_code tym_code" style="display: none;top:35%;">
		<p class="kc_top"><span class="mt_x"></span>使用会员体验码</p>
		<form class="kc_form">
			<p class="kc_txt"><input type="text" name="actcode" placeholder="请输入会员体验码"></p>
			<p class="kc_tips"></p>
			<p class="kc_btn"><a class="kc_btns kc_tym_btns" id="tym_kc_btns" href="javascript:void(0);">激活</a></p>
		</form>
	</div>
	
	<!-- 弹窗 -->
	<div class="mt mymem" style="display: none;"></div>
	<div class="key_code mymem" style="display: none;top:35%;" id="div_mymember">
		<p class="kc_top"><span class="mt_x"></span>我的会员</p>
		<form class="kc_form">
		<p class="kc_txt"></p>
		<p class="kc_txt" id="p_mymem" style="line-height:65px;"></p>
		</form>
	</div>
	
	<!-- vip -->
	<div class="vip_box" style="">
		<p class="vip_close"><span class="closebtn"></span></p>
		<p class="vip_once">首次下载客户端即送三个月全网会员权限</p>
		<p>客户端充值更优惠！</p>
		<p class="vip_pic"><img src="http://static.vko.cn/v8/index/images/fdewm.png" alt="" /></p>
		<p style="font-size: 20px;">扫描下载微课圈APP</p>
	</div>
	
	
	<!-- The end -->
	
	<script type="text/javascript" src="http://static.vko.cn/v8/v8s/common/js/footer.js"></script>

</body>
<script type="text/javascript">
$(document).ready(function() {
  	//完成率
 	$(".rate").each(function(){
	    var val =  $(this).parent().next().children().html();
    	 $(this).css("width",val);
   });  
});
</script>
<script id="template-studycenter" type="text/x-handlebars-template">
{{#unless rows}}
	<div class="course_taocan" style="height:auto;">
		<div class="nothing"><p>亲，库里还没有您购买的课程，不妨去<a href="http://goods.vko.cn">选课</a>挑选需要的哦！</p></div>
	</div>
{{else}}
{{#each rows}}			
	<div class="course_taocan">
		<dl class="taocan_detail">
			<dt class="taocan_pic">
				<a href="http://goods.vko.cn/goods/viewDetail?id={{goodsId}}" target="_blank">
					<img width="100%" src="http://static.vko.cn/content/{{goods.objtype}}/{{goods.objid}}bg.jpg " onerror="nofind(this,'http://static.vko.cn/vko/images/other/tcourse.jpg')" alt="{{goods.name}}">
				</a>
				{{#equals goods.objtype 2}} 
					<a href="http://goods.vko.cn/goods/viewDetail?id={{goodsId}}" target="_blank">
						<img width="100%" src="http://static.vko.cn/content/{{goods.objtype}}/{{goods.objid}}bg.jpg " onerror="nofind(this,'http://static.vko.cn/vko/images/other/tcourse.jpg')" alt="{{goods.name}}">
					</a>
				{{else}}
					<a href = "http://studycenter.vko.cn/play/toPlay?groupId={{goods.objid}}&goodsId={{goodsId}}" target="_blank">
						<img width="100%" src="http://static.vko.cn/content/{{goods.objtype}}/{{goods.objid}}bg.jpg " onerror="nofind(this,'http://static.vko.cn/vko/images/other/tcourse.jpg')" alt="{{goods.name}}">
					</a>
				{{/equals}}
			</dt>
			<dd class="taocan_content">
				<h2>
				{{#equals goods.objtype 2}} 
				     {{#equals expire true}}
					 <a href="http://goods.vko.cn/goods/viewDetail?id={{goodsId}}" class="into-study" target="_blank">去学习</a>
					 {{else}}
					 	{{#equals goods.status 2}}
					 	<a class="buy " goodsid='{{goodsId}}' style=' cursor: pointer;' href= 'http://pay.vko.cn/pay/order/buyCard?id={{goodsId}}' target='_blank'>去购买</a>
						{{else}}
						<a class="buy" href="javascript:void(0)" disabled="disabled">已 下架</a>
					 	{{/equals}}
					 {{/equals}}
					 <a href="http://goods.vko.cn/goods/viewDetail?id={{goodsId}}" target="_blank">{{goods.name}}</a>
				{{else}}
					 {{#equals expire true}}
					<a href="http://studycenter.vko.cn/play/toPlay?groupId={{goods.objid}}&goodsId={{goodsId}}" class="into-study" target="_blank">去学习</a>
					 {{else}}
					 	{{#equals goods.status 2}}
						<a class="buy " goodsid='{{goodsId}}' style=' cursor: pointer;' href='http://pay.vko.cn/pay/order/buyCard?id={{goodsId}}' target='_blank'>去购买</a>
						{{else}}
						<a class="buy" href="javascript:void(0)" disabled="disabled">已 下架</a>
						{{/equals}}
					 {{/equals}}
					  <a href="http://studycenter.vko.cn/play/toPlay?groupId={{goods.objid}}&goodsId={{goodsId}}" target="_blank">{{goods.name}}</a>
				{{/equals}}
				<span>课程数：{{goods.totalcourse}}节（{{#secondTomin goods.totalduration}}{{/secondTomin}}分钟）</span>
				<span>到期时间：{{prettifyDate endTime}}</span>
				</h2>
				<div class="detail-box">
					<h4>课程介绍：</h4>
					<div class="desc">{{{goods.description}}}</div>
					{{#equals goods.status 2}}
					<a href="http://goods.vko.cn/goods/viewDetail?id={{goodsId}}" target="_blank" class="more-detail">详细</a>
					{{/equals}}
				</div>
				<p class="content_p2">
					<span  class="p2_right" style="">
						<i><em class="rate"></em></i><a href="http://studycenter.vko.cn/studyCenter/studyStat?goodsid={{goodsId}}" target="_blank">完成率 <b>{{progressRate}}%</b></a>
						{{#equals expire true}}
							<a class="course-btn" href="http://studycenter.vko.cn/studyCenter/studyStat?goodsid={{goodsId}}">查看统计</a>
						{{else}}
							<a class="course-expired" href="javascript:void(0)" disabled="disabled">已 过 期</a>
						{{/equals}}
					</span>
					<span class="p2_left">主讲教师：
					{{#each goods.goodsTeachers}}
					  <b>{{teacherName}}</b>
					{{/each}}						
					</span>
				</p>
			</dd>
		</dl>
	</div>
	{{/each}}
	{{/unless}}
</script>
</html>
