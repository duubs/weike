
<!DOCTYPE html>
<script type="text/javascript">
	var staticPath = 'http://static.vko.cn'+"/v8"; 
	var ssoPath = 'http://sso.vko.cn';
</script>
<link href="http://static.vko.cn/common/css/base.css" rel="stylesheet" type="text/css" media="screen"/>


<script type="text/javascript" src="http://static.vko.cn/common/js/stacktrace.js"></script>
<script type="text/javascript" src="http://static.vko.cn/common/js/vkofileloader.js"></script>
<script type="text/javascript" src="http://static.vko.cn/common/js/seajs/seajs/2.2.0/sea.js"></script>
<!-- jquery.jqprint.js 冲突
<script type="text/javascript" src="http://static.vko.cn/common/js/config.js"></script>
<script type="text/javascript" src="http://static.vko.cn/vko/js/config.js"></script>
-->
<script type="text/javascript">try{if(document.URL.indexOf('photo/view')==-1)window.document.domain = "vko.cn";}catch(e){}</script>

<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/easyui/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/tiku/js/common/jquery.pagination.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/paginationBar.js"></script>

<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/top_common.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common-inherit.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/pre-common.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/ie.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/print.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/screen.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/pagination.css"/>

<script type="text/javascript" src="http://static.vko.cn/v8/common/js/utils.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/cookie.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/vkouser.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/local/md5.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/login.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/config.js"></script><script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?6f425653fbe927157e3addacb7f17b5b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script><html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>教师组题</title>
		<!-- file="top.html"-->
		<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/tiku/css/list.css">
		<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/tiku/css/synthetical.css">
		<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/tiku/css/front_itemBank.css">
		<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/tiku/css/front_teacher.css">
    	<script  type="text/javascript">
        	//maps=;
        </script>
		<script  src="http://static.vko.cn/v8/tiku/js/teacherPaper/index.js"> </script>
		<script  src="http://static.vko.cn/v8/tiku/js/front_index.js"> </script>
		<!--[if IE]>
			<style type="text/css">
				.main table td b{
					top: 2px;
				}
			</style>
		<![endif]-->
	</head>
	<body>
		<div class="cont clearfix">
			<div class="cont_left" style="position:relative">
				<div class="list videolist">
					<div class="main">
						<div class="classnum">
							<ul class="nav">
								<li><a href="javascript:toWeb()">综合试题</a></li>
            					<li><a href="javascript:toSync()">同步试题</a></li>
								<li class="check"><a href="#">教师组卷</a></li>	
								
            					<li ><a href="javascript:toPaperLib()">试卷库</a></li>			
								
								<li class="selects" style="padding-left: 310px; padding-right: 50px;">
									<select id="semester">
																					<option value="51"  selected >高中</option>
																					<option value="52" >初中</option>
																					<option value="53" >小学</option>
																			</select>
								</li>
								<li class="selects" id="objOption">
									<select  id="subject">
																																	<option value="21"  >语文</option>
																																												<option value="22"   selected >数学</option>
																																												<option value="23"  >英语</option>
																																												<option value="24"  >物理</option>
																																												<option value="25"  >化学</option>
																																												<option value="26"  >生物</option>
																																												<option value="27"  >历史</option>
																																												<option value="28"  >地理</option>
																																												<option value="29"  >政治</option>
																																																																																																											<option value="3333"  >其他</option>
																														</select>
								</li>
							</ul>

						</div>
					</div>
				</div>
				<div class="cont_left_box">
					<div class="catalog" id="catalog">
					</div>
					<div class="main">
						<table id="maintable" border="1" cellspacing="0" cellpadding="0">
							<thead>
								<tr class="table_title">
									<th rowspan="2">已选知识点（<span class="num_title">0</span>）</th>
									<th>
										<p>题目数</p>
									</th>
									<th>
										<p>单选</p>
									</th>
									<th>
										<p>多选</p>
									</th>
									<th>
										<p>填空</p>
									</th>
									<th>
										<p>解答</p>
									</th>
								</tr>
								<tr class="table_title">
									<th>
										<p id="sum">0</p>
									</th>
									<th>
										<p id="sn">0</p>
									</th>
									<th>
										<p id="mn">0</p>
									</th>
									<th>
										<p id="fn">0</p>
									</th>
									<th>
										<p id="an">0</p>
									</th>
									
								</tr>
							</thead>
							<tbody> 
							</tbody>
						</table>
						<div class="f_tbtn">
							<a id="goPaperEdit" >进入组卷</a>
						</div>
						<div class="f_tips">
							<span>请先从左侧选择要考察的知识点</span>
						</div>
					</div>
				</div>

			</div>

		</div>

		<!-- 加载公共部分 -->
		<script src="_PUBLIC_/js/header.js"></script>
		<script src="_PUBLIC_/js/footer.js"></script>
		<!-- 加载公共部分 -->

	</body>

</html>