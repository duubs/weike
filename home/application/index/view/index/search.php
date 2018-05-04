
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

	
	<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/easyui/jquery-1.7.2.min.js"></script>

<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common-inherit.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/ie.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/print.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/screen.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/pagination.css">

<script type="text/javascript" src="http://static.vko.cn/v8/common/js/utils.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/cookie.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/local/md5.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/vkouser.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/login.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/jquery.pagination.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/handlebars-1.0.0.beta.6.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/paginationBar.js"></script>
<!-- <script type="text/javascript" src="http://static.vko.cn/v8/search/js/search.js"></script> -->
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/handlebarsextend.js"></script>

<script>
	var staticPath = 'http://static.vko.cn/v8';
	var studyCenterPath='http://studycenter.vko.cn';
	var topicPath='http://topic.vko.cn';
	var baseRoot = 'http://topic.vko.cn/topic/index'; 
	var ssoPath='http://sso.vko.cn';
	var goodsPath='http://www.vko.cn/course';
</script>
<!-- 页脚 end -->
	<title>搜索结果</title>
	<link rel="stylesheet" href="http://static.vko.cn/v8/index/css/d_search.css">
</head>
<body>
	<script type="text/javascript" src="_PUBLIC_/js/header.js"></script>
	<!-- 主题内容开始 -->
	<div class="contents clearfix"  id="searchdiv">
		<div class="main_left">
			<dl>
				<dt class="theAll">
					<a href="javascript:void(0);">全部（<?php echo ($countCourse+$countTeacher)    ?>	）</a>
				</dt>
				<dd class="acourse acourse-h" id="acourse">
					<a href="javascript:void(0);">课程（<?=$countCourse ?>）</a>
				</dd>
				<dd class="ateacher" id="ateacher">
					<a href="javascript:void(0);">名师（<?=$countTeacher ?>）</a>
				</dd>
			</dl>
		</div>
		<div class="main_right" id="goods">
				<h2 id='count'>共找到 
					<span><?=$countCourse ?></span> 门“
					<a id="data" href="javacript:void(0)"><?=$data ?></a>”相关课程
				</h2>
				<?php if ($countCourse == 0) { ?>
					<div id="noresult_teacher" class="noresult" style="min-height: 120px;">很抱歉，没有找到与<a href="javascript:void(0);" style="color: #58b2cb;"><?=$data ?></a>相关课程 </div>
				<?php } ?>
				{volist name = 'course' id = 'v'}
				<div class="main_text" id="result">
					<dl class="course_list">
						<dt>
							<a href='#' target="_blank"><img width='211' src="_PUBLIC_{$v.course_img}"></a>
						</dt>
						<dd>
							<h3>
								<a href='#' target="_blank">{$v.course_name}</a>
							</h3>
							<p>
								<span>主讲教师： </span>
								<a>{$v.teacher_name}</a>
								<span>课程数：</span>
								<a>{$v.course_num}节 （{1234}分钟）</a>
							</p>
							<div class="intro">
								内容简介：
								<div class='desc'>{$v.stage_desc}</div>
								<a class="more" href='' target="_blank">[详细]</a>
							</div>
							<p class="icons">
								<span class="user">{$v.course_number}</span>
								<span class="txt">{$v.stage_desc}</span>
								<a class="into_course" href='#' target="_blank">进入课程</a>
							</p>
						</dd>
						<div class="clear"></div>
					</dl>	
		   		</div>
			{/volist}
        <!-- 分页 start -->
		<div id="pageBar_goods" class="pagination"></div>
		<!-- 分页 end -->
		<div class="clear"></div>
	</div>
	<script>
		//隐藏长文本字数
		function LimitNumber(txt) {
	        return txt.substr(0,20);
	    }

	    //获取地址栏值
	    function getUrlPara(paraName){  
			var sUrl  =  location.href; 
			var sReg  =  "(?:\\?|&){1}"+paraName+"=([^&]*)" 
			var re=new RegExp(sReg,"gi"); 
			re.exec(sUrl); 
			return decodeURI(RegExp.$1); 
		} 
	    //名师
		$('.ateacher').click(function(){
			var data = getUrlPara("key")
			$.get('/index/index/teacherAjax',{data:data},function(msg){
				var html = "";
				if (msg == "") {
					html += '<h2 id="count">共找到 <span>'+msg.length+'</span> 位与“<a href="javacript:void(0);">'+data+'</a>”相关名师</h2>'
					html += '<div id="noresult_teacher" class="noresult" style="min-height: 120px;">很抱歉，没有找到与<a href="javascript:void(0);" style="color: #58b2cb;">'+data+'</a>相关名师 </div>	';
				}else{
					html += '<h2 id="count">共找到 <span>'+msg.length+'</span> 位与“<a href="javacript:void(0);">'+data+'</a>”相关名师</h2>'
					for (var k in msg) {
						html += '<div class="main_text" id="result_teacher">'
						html += '<dl class="course_list">'
						html += '<dt><a href="#" target="_blank"><img src="_PUBLIC_'+msg[k].teacher_img+'" onerror="nofind(this,"teacher","large")"></a></dt>'
						html += '<dd>'
						html += '<h3><a href="/home/{{webUserId}}.html" target="_blank">'+msg[k].teacher_name+'</a></h3>'
						html += '<p>'+msg[k].teacher_name+'</p>'
						html += '<div class="intro">'
						html += '<h4>简介：·</h4>'
						html += '<div class="desc">'+msg[k].teacher_name+'</div>'
						html += '<a class="more" href="#" target="_blank">[详细]</a>'
						html += '</div>'
						html += '</dd>'
						html += '<div class="clear"></div>'
						html += '</dl>'
						html += '</div>';
					}
				}
				$('.main_right').html(html)
				$('#ateacher').attr('class','acourse-h');
				$('#acourse').removeAttr('class');
			})
		})

		//课程
		$('.acourse').click(function(){
			var data = getUrlPara("key")
			$.get('/index/index/courseAjax',{data:data},function(msg){
				var html = "";
				if (msg == "") {
					html += '<h2 id="count">共找到 <span>'+msg.length+'</span> 门与“<a href="javacript:void(0);">'+data+'</a>”相关课程</h2>'
					html += '<div id="noresult_teacher" class="noresult" style="min-height: 120px;">很抱歉，没有找到与<a href="javascript:void(0);" style="color: #58b2cb;">'+data+'</a>相关课程 </div>';
				}else{
					html += '<h2 id="count">共找到 <span>'+msg.length+'</span> 门与“<a href="javacript:void(0);">'+data+'</a>”相关课程</h2>'
					for (var k in msg) {
						html +='<div class="main_text" id="result">'
						html +='<dl class="course_list">'
						html +='<dt>'
						html +='<a href="#" target="_blank"><img width="211" src="_PUBLIC_'+msg[k].course_img+'"></a>'
						html +='</dt>'
						html +='<dd>'
						html +='<h3>'
						html +='<a href="#" target="_blank">'+msg[k].course_name+'</a>'
						html +='</h3>'
						html +='<p>'
						html +='<span>主讲教师： </span>'
						html +='<a>'+msg[k].teacher_name+'</a>'
						html +='<span>课程数：</span>'
						html +='<a>'+msg[k].course_num+'节 （1234分钟）</a>'
						html +='</p>'
						html +='<div class="intro">内容简介：'
						html +='<div class="desc">'+msg[k].stage_desc+'</div>'
						html +='</div>'
						html +='<p class="icons">'
						html +='<span class="user">'+msg[k].course_number+'</span>'
						html +='<span class="txt">'+msg[k].stage_desc+'</span>'
						html +='<a class="into_course" href="#" target="_blank">进入课程</a>'
						html +='</p>'
						html +='</dd>'
						html +='<div class="clear"></div>'
						html +='</dl>'
		   				html +='</div>';
					}
				}
				$('.main_right').html(html);
				$('#acourse').attr('class','acourse-h');
				$('#ateacher').removeAttr('class');
			})
		})
	</script>
	<input type="hidden" value="好了吗" id="hiddenwords">
	<!-- 主题内容结束 -->

	<!-- 底部部结束 -->
	<script type="text/javascript" src="_PUBLIC_/js/footer.js"></script>
	<!-- 底部部结束 -->
</body>
</html>