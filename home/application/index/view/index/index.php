
<!doctype html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="baidu-site-verification" content="avCYQqZvWf" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>微课网—全学科学习引领者</title>
	<meta name="keywords" content="微课网,微课,在线教育,高中,初中,课程视频">
	<meta name="description" content="微课网是以中考、高考为目标，提供初高中各学科的在线教育微课程视频，同时你可以和同学组成圈子互动答疑、测试并分享学习动态。">
	<meta name="baidu-site-verification" content="RT8NFMbYCP" />
	<link href="http://static.vko.cn/common/css/base.css" rel="stylesheet" type="text/css" media="screen"/>

	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/new-header.css">
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/common/css/headerTest.css" />
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/top_common.css">
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common-inherit.css">
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/pre-common.css">
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/ie.css">
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/print.css">
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/screen.css">
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/tiku/css/pageBar.css">
	<!-- 培优首页样式 -->
	<style>

		.liveBar.live {
			display:block;
			background: rgba(255, 113, 0, 0.60);
		}
		.liveBar {
			width: 100%;
			height: 36px;
			background: rgba(101, 184, 236, 0.60);
			text-align: center;
			color: #ffffff;
			font-size: 16px;
			line-height: 36px;
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
		}
		.liveBar img {
			width: 20px!important;
			height: auto!important;
			vertical-align: text-bottom;
			margin-right: 10px;
		}
		.flexslider ,
		.slides li{
			height: 420px!important;
		}
		.slides li a{
			display: block!important;
		}
		.flex-control-nav {
			right: 4%!important;
			width: 12%!important;
			background-size: 100%!important;
		}
		
		/*轮播图*/
		body {
		  background: #000;
		}

		.container {
		  margin: 50px auto;
		  width: 500px;
		  height: 300px;
		  overflow: hidden;
		  border: 10px solid;
		  border-top-color: #856036;
		  border-left-color: #5d4426;
		  border-bottom-color: #856036;
		  border-right-color: #5d4426;
		  position: relative;
		}

		.photo {
		  position: absolute;
		  animation: round 16s infinite;
		  opacity: 0;
		}

		@keyframes round {
		  25% {
		    opacity: 1;
		  }
		  40% {
		    opacity: 0;
		  }
		}
		img:nth-child(1) {
		  animation-delay: 12s;
		}

		img:nth-child(2) {
		  animation-delay: 8s;
		}

		img:nth-child(3) {
		  animation-delay: 4s;
		}

		img:nth-child(4) {
		  animation-delay: 0s;
		}

	</style>
	<script type="text/javascript">
		var apiPath = "http://api.vko.cn";
		var goodsPath = 'http://www.vko.cn';
		var payPath = 'http://pay.vko.cn';
		var studyPath="http://studycenter.vko.cn";
		var tikuPath="http://tiku.vko.cn";
		var htmPath="http://www.vko.cn/learning";
		var sUserAgent = navigator.userAgent.toLowerCase();
	    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
	    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
	    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
	    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
	    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
	    var bIsAndroid = sUserAgent.match(/android/i) == "android";
	    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
	    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
	    if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM){
			document.location.href="http://m.vko.cn";
		}
	</script>
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/common/css/common.css" />
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/common/css/newHome.css" />
	<!-- banner图 -->
	<!-- <link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/common/css/banner.css" /> -->

	<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/easyui/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="http://static.vko.cn/v8/common/js/utils.js"></script>

	<!-- 轮播图 -->
  	<script src="_PUBLIC_/js/prefixfree.min.js"></script>
	<!-- 轮播图 -->


	<script type="text/javascript">
		utils_setCookie("vkodomain","www.vko.cn",30);
	</script>

</head>

<body>
<div class="ban_box">
	<div class="ban_container">
		<div class="flexslider">
			<!-- 轮播图 -->
			<img class='photo' src="_PUBLIC_<?=$carousel[1]['carousel_src'] ?>" height="100%" width="100%" draggable="false">
			<?php foreach ($carousel as $key => $value) { ?>		
			<img class='photo' src="_PUBLIC_<?=$value['carousel_src'] ?>" height="100%" width="100%" draggable="false">
			<?php } ?>
			<!-- 轮播图 -->
		</div>
		<div id="categorys">
			<div class="categorys-dt">
				<a href="javascript:void(0);"><img src="http://static.vko.cn/v8/v8s/common/images/list_ico.png" alt="">课程分类</a>
			</div>
			<div class="categorys-dd">
				<div class="category-items">
					<ul>
						<li class="category-item">
							<div class="category-item-title">
								<h6>高中</h6>
								<p><a href="javascript: void(0);">高一</a><a href="javascript: void(0);">高二</a><a href="javascript: void(0);">高三</a></p>
							</div>
							<div class="category-subject g-item">
								<dl class="subitem">
									<dt>高一</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a><i>|</i>
										<a href="javascript: void(0);">政治</a><i>|</i>
										<a href="javascript: void(0);">历史</a><i>|</i>
										<a href="javascript: void(0);">地理</a><i>|</i>
										<a href="javascript: void(0);">物理</a><i>|</i>
										<a href="javascript: void(0);">化学</a><i>|</i>
										<a href="javascript: void(0);">生物</a>
									</dd>
								</dl>
								<dl class="subitem">
									<dt>高二</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a><i>|</i>
										<a href="javascript: void(0);">政治</a><i>|</i>
										<a href="javascript: void(0);">历史</a><i>|</i>
										<a href="javascript: void(0);">地理</a><i>|</i>
										<a href="javascript: void(0);">物理</a><i>|</i>
										<a href="javascript: void(0);">化学</a><i>|</i>
										<a href="javascript: void(0);">生物</a>
									</dd>
								</dl>
								<dl class="subitem">
									<dt>高三</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a><i>|</i>
										<a href="javascript: void(0);">政治</a><i>|</i>
										<a href="javascript: void(0);">历史</a><i>|</i>
										<a href="javascript: void(0);">地理</a><i>|</i>
										<a href="javascript: void(0);">物理</a><i>|</i>
										<a href="javascript: void(0);">化学</a><i>|</i>
										<a href="javascript: void(0);">生物</a>
									</dd>
								</dl>
							</div>
						</li>
						<li class="category-item">
							<div class="category-item-title">
								<h6>初中</h6>
								<p><a href="javascript: void(0);">初一</a><a href="javascript: void(0);">初二</a><a href="javascript: void(0);">初三</a></p>
							</div>
							<div class="category-subject ch-item">
								<dl class="subitem">
									<dt>初一</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a><i>|</i>
										<a href="javascript: void(0);">自然拼音</a>
									</dd>
								</dl>
								<dl class="subitem">
									<dt>初二</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a><i>|</i>
										<a href="javascript: void(0);">自然拼音</a>
									</dd>
								</dl>
								<dl class="subitem">
									<dt>初三</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a><i>|</i>
										<a href="javascript: void(0);">自然拼音</a>
									</dd>
								</dl>
							</div>
						</li>
						<li class="category-item xiaoxue-item">
							<div class="category-item-title">
								<h6>小学</h6>
								<p><a href="javascript: void(0);">语文</a><a href="javascript: void(0);">数学</a><a href="javascript: void(0);">英语</a></p>
							</div>
							<div class="category-subject clearfix xx-item">
								<dl class="subitem">
									<dt>一年级</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a>
									</dd>
								</dl>
								<dl class="subitem">
									<dt>二年级</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a>
									</dd>
								</dl>
								<dl class="subitem">
									<dt>三年级</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a>
									</dd>
								</dl>
								<dl class="subitem">
									<dt>四年级</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a>
									</dd>
								</dl>
								<dl class="subitem">
									<dt>五年级</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a>
									</dd>
								</dl>
								<dl class="subitem">
									<dt>六年级</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a>
									</dd>
								</dl>
							</div>
						</li>
						<li class="category-item noBorder">
							<div class="category-item-title" style="border: 0">
								<h6>专题</h6>
								<p><a href="javascript: void(0);">高考</a><a href="javascript: void(0);">中考</a></p>
							</div>
							<div class="category-subject zt-item">
								<dl class="subitem">
									<dt>高考</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a><i>|</i>
										<a href="javascript: void(0);">物理</a>
									</dd>
								</dl>
								<dl class="subitem">
									<dt>中考</dt>
									<dd class="row">
										<a href="javascript: void(0);">语文</a><i>|</i>
										<a href="javascript: void(0);">数学</a><i>|</i>
										<a href="javascript: void(0);">英语</a><i>|</i>
										<a href="javascript: void(0);">化学</a>
									</dd>
								</dl>
							</div>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
</div>
<!--tips-->
<div class="tips">
	<div class="tips_main">
		<p>共有<span>16378</span>节优质课程&nbsp;&nbsp;&nbsp;&nbsp;昨日更新<span>16</span>节<a href="#">观看视频&nbsp;&nbsp;了解微课<img src="http://static.vko.cn/v8/v8s/common/images/tips_ico.png" alt="" /></a></p>
	</div>
</div>
<!--main-->
<srcipt src="_PUBLIC_/js/jquery.js"></srcipt>
<script>
	$(function(){
		//高中
		$('#high').click(function(){
			// var high = $('#high').val();
			$.get("/index/index/ajaxHigh",{data:1},function(data){
				var html = "";
				for (var k in data) {
					html += '<div class="ml2_left">\
						<div class="pic">\
							<a target="_blank" href="#">\
								<img src="'+data[k].course_img+'">\
							</a>\
							<span class="sign grades">'+data[k].stage_name+'</span>\
							<span class="sign object">'+data[k].subject_name+'</span>\
						</div>\
						<div class="l_cont">\
							<a target="_blank" href="#">\
								<h6>'+data[k].course_name+'</h6>\
							</a>\
							<div class="ml2_c2">\
								<p class="ml_tuip">主讲：<span>'+data[k].teacher_name+'</span></p>\
							</div>\
							<div class="ml2_c2">\
								<p class="c2l"><span>课程数：</span><b>'+data[k].course_num+'节</b></p>\
								<p class="c2r"><span>'+data[k].course_number+'</span><b>人购买</b></p>\
							</div>\
						</div>\
					</div>';
				}
				$('#recommend_course').html(html);
				$('#high').attr('class','active');
				$('#first').removeAttr('class');
			})
		})

		//初中
		$('#first').click(function(){
			// var high = $('#first').text();
			$.get("/index/index/ajaxHigh",{data:2},function(data){
				var html = "";
				for (var k in data) {
					html += '<div class="ml2_left">\
						<div class="pic">\
							<a target="_blank" href="#">\
								<img src="'+data[k].course_img+'">\
							</a>\
							<span class="sign grades">'+data[k].stage_name+'</span>\
							<span class="sign object">'+data[k].subject_name+'</span>\
						</div>\
						<div class="l_cont">\
							<a target="_blank" href="#">\
								<h6>'+data[k].course_name+'</h6>\
							</a>\
							<div class="ml2_c2">\
								<p class="ml_tuip">主讲：<span>'+data[k].teacher_name+'</span></p>\
							</div>\
							<div class="ml2_c2">\
								<p class="c2l"><span>课程数：</span><b>'+data[k].course_num+'节</b></p>\
								<p class="c2r"><span>'+data[k].course_number+'</span><b>人购买</b></p>\
							</div>\
						</div>\
					</div>';
				}
				$('#recommend_course').html(html);
				$('#first').attr('class','active');
				$('#high').removeAttr('class');
			})
		})
	})
</script>
<div class="mains">
	<div class="main_box clearfix">
		<div class="m_left">
			<div class="ml_cont">
				<div class="ml2_title clearfix">
					<h6><b class="s_fz_city" style="display:none;"></b>推荐课程</h6>
					<div class="tui_course">
						<a href="javascript: void(0);" value="2" id="first">初中</a>
						<a href="javascript: void(0);" value="1" id="high" class='active'>高中</a>
					</div>
				</div>
				<div class="ml2_box clearfix" id="recommend_course">
					<?php foreach ($course as $key => $value) { ?>
					<div class="ml2_left">
						<div class="pic">
							<a target="_blank" href="/index/index/recommended_courses">
								<img src="<?=$value['course_img']?>">
							</a>
							<span class="sign grades"><?=$value['stage_name']?></span>
							<span class="sign object"><?=$value['subject_name']?></span>
						</div>
						<div class="l_cont">
							<a target="_blank" href="#">
								<h6><?=$value['course_name'] ?></h6>
							</a>
							<div class="ml2_c2">
								<p class="ml_tuip">主讲：<span><?=$value['teacher_name'] ?></span></p>
							</div>
							<div class="ml2_c2">
								<p class="c2l"><span>课程数：</span><b><?=$value['course_num'] ?>节</b></p>
								<p class="c2r"><span><?=$value['course_number'] ?></span><b>人购买</b></p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="ml_cont">
				
			</div>
			
		</div>
		<div class="m_right">
			<div class="mrTaocan">
				<div class="ml1_title">
					<h6>会员套餐</h6>
				</div>
				<div class="mrTaocan">
					<a href="/index/learningcenter/member" target="_blank" title="会员推荐"><img src="http://static.vko.cn/v8/v8s/common/images/member.jpg"></a>
				</div>
			</div>
			<script>
				$(function(){
					//高中
					$('#study-high').click(function(){
						$.get("/index/index/ajaxstudyHigh",{data:1},function(data){
							var html = "";
							for (var k in data) {
								html += '<div class="tbList tblist1">'
								html += '<p>'+data[k].edition+'</p>'
								html += '<a href="/index/index/study?id='+data[k].study_id+'"><h6><b>'+data[k].stage+''+data[k].subject+'</b><br>'+data[k].book+'</h6></a>'
								html += '</div>';
							}
							$('.ml1_box').html(html);
							$('#study-high').attr('class','active');
							$('#study-first').removeAttr('class');
						})
					})

					//初中
					$('#study-first').click(function(){
						$.get("/index/index/ajaxstudyHigh",{data:2},function(data){
							var html = "";
							for (var k in data) {
								html += '<div class="tbList tblist1">'
								html += '<p>'+data[k].edition+'</p>'
								html += '<a href="/index/index/study?id='+data[k].study_id+'"><h6><b>'+data[k].stage+''+data[k].subject+'</b><br>'+data[k].book+'</h6></a>'
								html += '</div>';
							}
							$('.ml1_box').html(html);
							$('#study-first').attr('class','active');
							$('#study-high').removeAttr('class');
						})
					})
				})
			</script>
			<div class="ml_tb">
				<div class="ml1_title clearfix">
					<h6>同步学习</h6>
					<div class="tui_course">
						<a href="javascript: void(0);" id="study-first" value="52">初中</a>
						<a class="active" href="javascript: void(0);" id="study-high" value="51">高中</a>
					</div>
				</div>
				<div class="ml1_box" id="recommend_synchro">
					{volist name='study' id='val'}
					<div class="tbList tblist1">
						<p>{$val.edition}</p>
						<a href="/index/index/study?id={$val.study_id}"><h6><b>{$val.stage}{$val.subject}</b><br>{$val.book}</h6></a>
					</div>
					{/volist}
				</div>
			</div>
			<div class="ad hidden">
				<a target="_blank" href="#"><img src="http://static.vko.cn/v8/v8s/common/images/ad.jpg"/></a>
			</div>
		</div>
	</div>
</div>
<input id="logType" type="hidden" value="1"/>
<script type="text/javascript" src="http://static.vko.cn/v8/goods/js/access_log.js"></script> 
<script type="text/javascript">
	var staticPath = 'http://static.vko.cn'+"/v8";
	var ssoPath = 'http://sso.vko.cn';
	var apiPath = "http://api.vko.cn";
	var goodsPath = 'http://www.vko.cn';
	var payPath = 'http://pay.vko.cn';
	var studyPath="http://studycenter.vko.cn";
</script>
<script type="text/javascript" src="http://static.vko.cn/common/js/stacktrace.js"></script>
<script type="text/javascript" src="http://static.vko.cn/common/js/vkofileloader.js"></script>
<script type="text/javascript" src="http://static.vko.cn/common/js/seajs/seajs/2.2.0/sea.js"></script>

<script type="text/javascript">try{if(document.URL.indexOf('photo/view')==-1)window.document.domain = "vko.cn";}catch(e){}</script>

<script type="text/javascript" src="http://static.vko.cn/v8/common/js/cookie.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/vkouser.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/local/md5.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/login.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/config.js"></script>

<script type="text/javascript" src="http://static.vko.cn/v8/v8s/common/js/common.js"></script>

<!-- 加载公共部分 -->
<script src="_PUBLIC_/js/header.js"></script>
<script src="_PUBLIC_/js/footer.js"></script>
<!-- 加载公共部分 -->

<script type="text/javascript" src="http://static.vko.cn/v8/index/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/cms/player/base64.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v5/js/common/vko/ui/player/1.0.0/player.js"></script>
<script src="http://static.vko.cn/v8/v8s/common/js/ml1.js"></script>

<!-- 推荐课程 -->
<!-- <script src="http://static.vko.cn/v8/v8s/home/js/homeTest.js"></script> -->
<!-- 推荐课程 -->

<script type="text/javascript">

	$(function() {
		
		/*$('.flexslider').flexslider({
			directionNav: false,
			pauseOnAction: false
		});*/
		/*select-item鼠标事件*/
		$('.curGrade').on('click',function(){
			$(this).next('.select-item').toggle(300);
		});
		$('.select-item').mouseleave(function(){
			$(this).hide(300);
		});
		$(window).scroll(function() {
			if ($(window).scrollTop() > 50) {
				$("#side-bar .gotop").fadeIn();
			} else {
				$("#side-bar .gotop").hide();
			}
		});
		$("#side-bar .gotop").click(function() {
			$('html,body').animate({
				'scrollTop': 0
			}, 500);
		});
	});
	
</script>
</body>
</html>