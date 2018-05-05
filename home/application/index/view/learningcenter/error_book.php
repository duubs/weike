
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


	<title>我的错题本</title>
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

<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/My97DatePicker/WdatePicker.js"></script>
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/studycenter/css/learning_plan.css"/>
<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/jquery.pagination.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/paginationBar.js"></script>

<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/tiku/css/wrongPaper.css">
</head>  
	<body>
	
	<!-- start -->
	<!-- learning_count top -->
	<div class="mains clearfix">
	<div class="lc_top">
		<ul>
			<li><a class="lc_my_course_h" href="/index/learningcenter/myCourse">我的课程</a></li>
			<li><a class="lc_learning_plan" href="/index/learningcenter/learningPlan">学习计划</a></li>
			<li><a class="lc_test_record" href="/index/learningcenter/testPaper">组卷记录</a></li>
			<li><a class="lc-gp-wrong" href="javascript:void(0);">我的错题本</a></li>
		</ul>
	</div>
	<!-- learning_plan main -->
	
	<div class="ud-main clearfix">
		<!-- 筛选搜索 -->
				<div class="test_title">
					<!--<p class="title">标题搜索<input type="text" /></p>-->
					<p class="subject">学科筛选
						<select id="slt_sub">
							<option value="0">全部</option>
							<option value="21">语文</option>
							<option value="22">数学</option>
							<option value="23">英语</option>
							<option value="24">物理</option>
							<option value="25">化学</option>
							<option value="26">生物</option>
							<option value="27">历史</option>
							<option value="28">地理</option>
							<option value="29">政治</option>
						</select>
					</p>
					<!--<p class="time">组卷时间选<select><option>最近一天</option></select></p>-->
					<button class="search" onclick="errSearch()">搜索</button>
				</div>
					<div class="nothing">			
        	   <p>亲，暂无错题记录！</p>
        	</div>
			</div>
			
		</div>
	
	
	
	

	<input id="h_total" type="hidden" value="0"/>
	<input id="h_totalp" type="hidden" value="0"/>
	<input id="h_pageIndex" type="hidden" value="1"/>
	<input id="h_pageRow" type="hidden" value="10"/>
	<input id="h_sub" type="hidden" value=""/>
	<!-- The end -->

	<!-- 加载公共部分 -->
	<script src="_PUBLIC_/js/header.js"></script>
	<script src="_PUBLIC_/js/footer.js"></script>
	<!-- 加载公共部分 -->

	
	
    
	<!-- 删除错题 -->
	<div class="mt" style="display: none;"></div>
	<div class="key_code" id="delDialog" style="display: none;top:35%;position:fixed;">
		<p class="kc_top"><span class="mt_x" onclick="javascript:$('#delDialog,.mt').hide();"></span>移除错题</p>
		<form class="kc_form">
			<p class="kc_txt">是否移除此错题？</p>
			<p class="kc_tips"></p>
			<p class="kc_btn"><a class="kc_btns" href="javascript:void(0);">确定</a></p>
		</form>
	</div>
	
	<script type="text/javascript" >
	$(function(){
		var callbackPage=function(index){
			$("#h_pageIndex").val(index);
			var slt=$("#slt_sub option:selected").val();
			var url=studyCenterPath+"/errorbook?pageindex="+index;
			if(slt!=0){
				url+="&subject="+slt;
			}
			location.href=url;
			//location.href=studyCenterPath+"/errorbook?pageindex="+index;
			};
		var pt = $("#h_totalp").val(),
		total = $("#h_total").val(),
		pr = $("#h_pageRow").val(),
		pi = $("#h_pageIndex").val();
		if(pt>1){
			paginationBar('pageBar',callbackPage,total,pr,pi);
		}
		var h_sub=$("#h_sub").val();
		if(h_sub!=''){
			$("#slt_sub").val(h_sub);
		}
	});
	var errSearch=function(){
			var slt=$("#slt_sub option:selected").val();
			var h_sub=$("#h_sub").val();
			var p_index=1;
			if(slt==h_sub){
				p_index=$("#h_pageIndex").val();
			}
			var url=studyCenterPath+"/errorbook?pageindex="+p_index;
			if(slt!=0){
				url+="&subject="+slt;
			}
			location.href=url;
		};
		var deleteDialog=function(id){
			$(".kc_btns").removeAttr("onclick").attr("onclick","deleteEbById("+id+")");
			$("#delDialog,.mt").show();
		};
		//删除错题
		var deleteEbById=function(id){
			$ .ajax({
						type:"POST",
						url:"/errorbook/deleteEbById",
						dataType:"json",
						//contentType: "text/html",
						data:{id:id},
						success: function (data) {
							location.reload();
						},	
				       error: function(data) {
				    	   showTip('操作失败');
				       }
					});
		};
	</script>
    
</body>
</html>
