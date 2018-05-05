
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
</script><html lang="en">
<head>
<meta charset="UTF-8">
<title>手动组卷编辑</title>
<link rel="stylesheet" href="http://static.vko.cn/v8/tiku/css/userDefined.css">
</head>
<body>
<script src="_PUBLIC_/js/header.js"></script>	
<script src="http://static.vko.cn/v8/tiku/js/userDefined.js"></script>
<script src="http://static.vko.cn/v8/tiku/js/paper/paperpre.js"></script>
<script src="http://static.vko.cn/v8/tiku/js/paper/download.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
	})	 
	

</script>
		<div id="container" class="clearfix" >
			<div class="ud-main clearfix" id="main">
				<!-- 试卷标题 -->
				<h2 class="ud-title">
					<input class="editor_titles" type="text" id="editor_title" value="" placeholder="">
					<span class="editor_titles" id="title"></span>
					<a class="ud-edtior" href="javascript:void(0);"></a>
				</h2>
				<div class="ud-info">
					<span>组卷时间：</span><b id="paperTime"></b>
					<span>学段：</span>
												     <b value="51" id="semesterId">高中</b> 
																				    																				    																		<span>学科：</span>
												    																				     <b value="22" id="subjectId">数学</b> 
																				    																				    																				    																				    																				    																				    																				    																				    																				    																				    																				    																		<span>题数：</span><b id="examNum" examNum="10">共10题</b>
				</div>
				<!-- 单选题 -->
								<h4 class="ud-questionTypes" order="1" typeId="351">一.单选题</h4>
				<ul class="ud-detail" id="single_detail">
															<li>
						<div class="errorBox"  style="display:none;">
							<span id="jt"></span>
							<div class="econt">
								<textarea class="content" tabindex="1" >
                                </textarea>
							</div>
							<p class="errorBtn"><a class="cancleBtn" >取消</a><a class="msurebtn" >确定</a></p>
						</div>
						<p class="ud-btn">
							<a class="ud-btn-drag" href="javascript:void(0);">上移</a>
							<a class="ud-btn-movedown" href="javascript:void(0);">下移</a>
							<a class="ud-btn-resolve" href="javascript:void(0);">解析</a>
							<a class="ud-btn-delete" href="javascript:void(0);">删除</a>
							<a class="f_error" href="javascript:void(0);">纠错</a>
						</p>
						<div class="ud-box" examId='388391' typeId='351'>
							<dl>
								<dt>
									<div class="ud-stem">
										<p class="order"><span class="orders" examid='388391'></span>.</p><p><p class="MsoNormal" align="left" style="text-align:left"><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">设抛物线</span><span lang="EN-US" style="position:relative;
top:5.0pt"><img width="20" height="24" id="Picture 396" src="http://static.vko.cn/content/tk/import/20150828210738/image240.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image240.gif"></span><span lang="EN-US">=2x</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">的焦点为</span><span lang="EN-US">F</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">，过点</span><span lang="EN-US">M(<span style="position:relative;top:4.0pt"><img width="24" height="24" id="Picture 397" src="http://static.vko.cn/content/tk/import/20150828210738/image009.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image009.gif"></span></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">，</span><span lang="EN-US">0)</span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">的直线与抛物线相交于</span><span lang="EN-US">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">，</span><span lang="EN-US">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">两点，与抛物线的准线相交于</span><span lang="EN-US">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">，</span><span lang="EN-US" style="position:relative;top:7.0pt"><img width="54" height="26" id="图片 397" src="http://static.vko.cn/content/tk/import/20150828210738/image241.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image241.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">，则</span><span lang="EN-US" style="position:relative;top:2.0pt"><img width="15" height="17" id="Picture 399" src="http://static.vko.cn/content/tk/import/20150828210738/image242.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image242.gif"></span><span lang="EN-US">BCF</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">与</span><span lang="EN-US" style="position:relative;top:2.0pt"><img width="15" height="17" id="Picture 400" src="http://static.vko.cn/content/tk/import/20150828210738/image242.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image242.gif"></span><span lang="EN-US">ACF</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">的面积之比</span><span lang="EN-US" style="position:relative;top:15.0pt"><img width="43" height="45" id="Picture 401" src="http://static.vko.cn/content/tk/import/20150828210738/image243.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image243.gif"></span><span lang="EN-US">=</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;color:black">（）</span></p><p class="MsoNormal" align="center" style="text-align:center"><span lang="EN-US"><img width="122" height="145" id="Picture 406" src="http://static.vko.cn/content/tk/import/20150828210738/image244.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image244.gif"></span></p></p>
									</div>
									<div class="ud-options">
                                        <div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">．</span><span lang="EN-US" style="position:relative;top:12.0pt"><img width="16" height="41" id="Picture 402" src="http://static.vko.cn/content/tk/import/20150828210738/image245.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image245.gif"></span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">．</span><span lang="EN-US" style="position:relative;top:12.0pt"><img width="16" height="41" id="Picture 403" src="http://static.vko.cn/content/tk/import/20150828210738/image246.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image246.gif"></span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">．</span><span lang="EN-US" style="position:relative;top:12.0pt"><img width="16" height="41" id="Picture 404" src="http://static.vko.cn/content/tk/import/20150828210738/image247.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image247.gif"></span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US">D</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">．</span><span lang="EN-US" style="position:relative;top:12.0pt"><img width="16" height="41" id="Picture 405" src="http://static.vko.cn/content/tk/import/20150828210738/image062.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image062.gif"></span></p></div></div>
										<div class="quest_op"></div>
										<div class="quest_op"></div>
									</div>
								</dt>
								<dd>
									<div class="ud-resolve">
										<p>答案：<span>A</span> </p>
										<p>解析试题分析：<span><p class="MsoNormal" align="left" style="text-align:left"><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">由题知</span><span lang="EN-US" style="position:relative;
top:27.0pt"><img width="204" height="80" id="图片 400" src="http://static.vko.cn/content/tk/import/20150828210738/image248.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image248.gif"></span></p><p class="MsoNormal" align="left" style="text-align:left"><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">又</span><span lang="EN-US" style="position:relative;
top:12.0pt"><img width="262" height="42" id="图片 401" src="http://static.vko.cn/content/tk/import/20150828210738/image249.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image249.gif"></span></p><p class="MsoNormal" align="left" style="text-align:left"><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">由</span><span lang="EN-US">A</span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">、</span><span lang="EN-US">B</span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">、</span><span lang="EN-US">M</span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">三点共线有</span><span lang="EN-US" style="position:relative;
top:15.0pt"><img width="143" height="47" id="Picture 4243" src="http://static.vko.cn/content/tk/import/20150828210738/image250.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image250.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">即</span><span lang="EN-US" style="position:relative;top:27.0pt"><img width="128" height="66" id="图片 402" src="http://static.vko.cn/content/tk/import/20150828210738/image251.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image251.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">，故</span><span lang="EN-US" style="position:relative;top:5.0pt"><img width="49" height="23" id="Picture 4239" src="http://static.vko.cn/content/tk/import/20150828210738/image252.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image252.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">，</span></p><p class="MsoNormal" align="left" style="text-align:left"><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">∴</span><span lang="EN-US" style="position:relative;
top:15.0pt"><img width="178" height="46" id="图片 404" src="http://static.vko.cn/content/tk/import/20150828210738/image253.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image253.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">，故选择</span><span lang="EN-US">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">．</span></p></span></p>
									</div>
								</dd> 
							</dl>
						</div>
					</li> 
																				<li>
						<div class="errorBox"  style="display:none;">
							<span id="jt"></span>
							<div class="econt">
								<textarea class="content" tabindex="1" >
                                </textarea>
							</div>
							<p class="errorBtn"><a class="cancleBtn" >取消</a><a class="msurebtn" >确定</a></p>
						</div>
						<p class="ud-btn">
							<a class="ud-btn-drag" href="javascript:void(0);">上移</a>
							<a class="ud-btn-movedown" href="javascript:void(0);">下移</a>
							<a class="ud-btn-resolve" href="javascript:void(0);">解析</a>
							<a class="ud-btn-delete" href="javascript:void(0);">删除</a>
							<a class="f_error" href="javascript:void(0);">纠错</a>
						</p>
						<div class="ud-box" examId='388392' typeId='351'>
							<dl>
								<dt>
									<div class="ud-stem">
										<p class="order"><span class="orders" examid='388392'></span>.</p><p><p class="MsoPlainText" style="line-height:150%;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">如果点</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">M</span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">是抛物线</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt"><img width="54" height="24" id="Picture 362" src="http://static.vko.cn/content/tk/import/20150828210738/image004.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image004.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">的一点，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">F</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">为抛物线的焦点，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">A</span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">在圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">：</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:5.0pt"><img width="134" height="24" src="http://static.vko.cn/content/tk/import/20150828210738/image218.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image218.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">上，那么</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:7.0pt"><img width="76" height="26" id="Picture 364" src="http://static.vko.cn/content/tk/import/20150828210738/image219.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image219.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">的最小值为</span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;color:black">（）</span></p><p class="MsoNormal" align="center" style="text-align:center;line-height:150%"><span lang="EN-US" style="line-height:150%"><img width="166" height="120" src="http://static.vko.cn/content/tk/import/20150828210738/image220.jpg" alt="http://static.vko.cn/content/tk/import/20150828210738/image220.jpg"></span></p></p>
									</div>
									<div class="ud-options">
                                        <div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left;line-height:150%"><span lang="EN-US" style="line-height:150%;color:black">A</span><span style="line-height:
150%;font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;color:black">．</span><span lang="EN-US" style="line-height:150%;color:black">2</span><span style="line-height:150%;
font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;color:black">　</span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left;line-height:150%"><span lang="EN-US" style="line-height:150%;color:black">B</span><span style="line-height:
150%;font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;color:black">．</span><span lang="EN-US" style="line-height:150%;color:black">3</span><span style="line-height:150%;
font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;color:black">　</span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left;line-height:150%"><span lang="EN-US" style="line-height:150%;color:black">C</span><span style="line-height:
150%;font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;color:black">．</span><span lang="EN-US" style="line-height:150%;color:black">4</span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left;line-height:150%"><span lang="EN-US" style="line-height:150%;color:black">D</span><span style="line-height:
150%;font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;color:black">．</span><span lang="EN-US" style="line-height:150%;color:black">5</span></p></div></div>
										<div class="quest_op"></div>
										<div class="quest_op"></div>
									</div>
								</dt>
								<dd>
									<div class="ud-resolve">
										<p>答案：<span>C</span> </p>
										<p>解析试题分析：<span><p class="MsoPlainText" style="line-height:150%;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">如图所示，过点</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">M</span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">作</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">MB</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">⊥</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:3.0pt"><img width="10" height="18" src="http://static.vko.cn/content/tk/import/20150828210738/image147.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image147.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">于点</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">B</span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;">．由抛物线定义，可得</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:7.0pt"><img width="78" height="26" id="图片 382" src="http://static.vko.cn/content/tk/import/20150828210738/image254.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image254.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">，则</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:7.0pt"><img width="308" height="26" src="http://static.vko.cn/content/tk/import/20150828210738/image221.gif" alt="http://static.vko.cn/content/tk/import/20150828210738/image221.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;">．</span></p></span></p>
									</div>
								</dd> 
							</dl>
						</div>
					</li> 
																				<li>
						<div class="errorBox"  style="display:none;">
							<span id="jt"></span>
							<div class="econt">
								<textarea class="content" tabindex="1" >
                                </textarea>
							</div>
							<p class="errorBtn"><a class="cancleBtn" >取消</a><a class="msurebtn" >确定</a></p>
						</div>
						<p class="ud-btn">
							<a class="ud-btn-drag" href="javascript:void(0);">上移</a>
							<a class="ud-btn-movedown" href="javascript:void(0);">下移</a>
							<a class="ud-btn-resolve" href="javascript:void(0);">解析</a>
							<a class="ud-btn-delete" href="javascript:void(0);">删除</a>
							<a class="f_error" href="javascript:void(0);">纠错</a>
						</p>
						<div class="ud-box" examId='388393' typeId='351'>
							<dl>
								<dt>
									<div class="ud-stem">
										<p class="order"><span class="orders" examid='388393'></span>.</p><p><p class="MsoNormal" align="left" style="text-align:left"><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:5.0pt;
layout-grid-mode:line"><img width="96" height="22" id="图片 125" src="http://static.vko.cn/content/tk/import/20150828210740/image001.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image001.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">和</span><i><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">x</span></i><sup><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2</span></sup><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＋</span><i><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">y</span></i><sup><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2</span></sup><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＋</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">4<i>y</i></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">0</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">的位置关系是（）</span></p></p>
									</div>
									<div class="ud-options">
                                        <div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．相离</span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．外切</span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．相交</span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">D</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．内切</span></p></div></div>
										<div class="quest_op"></div>
										<div class="quest_op"></div>
									</div>
								</dt>
								<dd>
									<div class="ud-resolve">
										<p>答案：<span>C</span> </p>
										<p>解析试题分析：<span><p class="MsoNormal" align="left" style="text-align:left"><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">将两圆方程分别配方得（</span><i><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">x</span></i><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">－</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">1</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">）</span><sup><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2</span></sup><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＋</span><i><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">y</span></i><sup><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2</span></sup><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">1</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">和</span><i><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">x</span></i><sup><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2</span></sup><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＋（</span><i><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">y</span></i><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">－</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">）</span><sup><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2</span></sup><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">4</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，两圆圆心分别为</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">O<sub>1</sub></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">（</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">1</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">0</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">），</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">O<sub>2</sub></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">（</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">0</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">），</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="14" height="22" id="图片 97" src="http://static.vko.cn/content/tk/import/20150828210740/image002.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image002.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">1</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="40" height="22" id="图片 98" src="http://static.vko.cn/content/tk/import/20150828210740/image003.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image003.gif"></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">|O<sub>1</sub>O<sub>2</sub>|</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:4.0pt;layout-grid-mode:line"><img width="94" height="26" id="图片 100" src="http://static.vko.cn/content/tk/import/20150828210740/image004.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image004.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，又</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="170" height="26" id="图片 101" src="http://static.vko.cn/content/tk/import/20150828210740/image005.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image005.gif"></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，故两圆相交，所以应选</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span></p></span></p>
									</div>
								</dd> 
							</dl>
						</div>
					</li> 
																				<li>
						<div class="errorBox"  style="display:none;">
							<span id="jt"></span>
							<div class="econt">
								<textarea class="content" tabindex="1" >
                                </textarea>
							</div>
							<p class="errorBtn"><a class="cancleBtn" >取消</a><a class="msurebtn" >确定</a></p>
						</div>
						<p class="ud-btn">
							<a class="ud-btn-drag" href="javascript:void(0);">上移</a>
							<a class="ud-btn-movedown" href="javascript:void(0);">下移</a>
							<a class="ud-btn-resolve" href="javascript:void(0);">解析</a>
							<a class="ud-btn-delete" href="javascript:void(0);">删除</a>
							<a class="f_error" href="javascript:void(0);">纠错</a>
						</p>
						<div class="ud-box" examId='388394' typeId='351'>
							<dl>
								<dt>
									<div class="ud-stem">
										<p class="order"><span class="orders" examid='388394'></span>.</p><p><p class="MsoNormal" align="left" style="text-align:left"><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">已知两圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:5.0pt;
layout-grid-mode:line"><img width="20" height="22" id="图片 102" src="http://static.vko.cn/content/tk/import/20150828210740/image006.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image006.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">：</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="158" height="24" id="图片 103" src="http://static.vko.cn/content/tk/import/20150828210740/image007.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image007.gif"></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">和</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:5.0pt;
layout-grid-mode:line"><img width="190" height="24" id="图片 104" src="http://static.vko.cn/content/tk/import/20150828210740/image008.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image008.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">当</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:3.0pt;layout-grid-mode:line"><img width="18" height="14" id="图片 105" src="http://static.vko.cn/content/tk/import/20150828210740/image009.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image009.gif"></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">取何值时两圆外切（）</span></p></p>
									</div>
									<div class="ud-options">
                                        <div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">D</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">5</span></p></div></div>
										<div class="quest_op"></div>
										<div class="quest_op"></div>
									</div>
								</dt>
								<dd>
									<div class="ud-resolve">
										<p>答案：<span>C</span> </p>
										<p>解析试题分析：<span><p class="MsoNormal" align="left" style="text-align:left;text-autospace:none"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">∵</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="20" height="22" id="图片 107" src="http://static.vko.cn/content/tk/import/20150828210740/image006.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image006.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">：</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="134" height="24" id="图片 108" src="http://static.vko.cn/content/tk/import/20150828210740/image010.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image010.gif"></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:5.0pt;
layout-grid-mode:line"><img width="22" height="22" src="http://static.vko.cn/content/tk/import/20150828210740/image011.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image011.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">：</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="172" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image012.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image012.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，</span></p><p class="MsoNormal" align="left" style="text-align:left;text-autospace:none"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">∴</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="56" height="22" src="http://static.vko.cn/content/tk/import/20150828210740/image013.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image013.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="62" height="22" src="http://static.vko.cn/content/tk/import/20150828210740/image014.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image014.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:7.0pt;layout-grid-mode:line"><img width="64" height="26" id="图片 114" src="http://static.vko.cn/content/tk/import/20150828210740/image015.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image015.gif"></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:5.0pt;
layout-grid-mode:line"><img width="38" height="22" src="http://static.vko.cn/content/tk/import/20150828210740/image016.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image016.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="84" height="26" id="图片 116" src="http://static.vko.cn/content/tk/import/20150828210740/image017.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image017.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">．</span></p><p class="MsoNormal" align="left" style="text-align:left;text-autospace:none"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">∵两圆外切，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:7.0pt;layout-grid-mode:line"><img width="78" height="26" id="图片 117" src="http://static.vko.cn/content/tk/import/20150828210740/image018.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image018.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，∴</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:4.0pt;layout-grid-mode:line"><img width="80" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image019.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image019.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，解得</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:3.0pt;layout-grid-mode:line"><img width="42" height="18" id="图片 119" src="http://static.vko.cn/content/tk/import/20150828210740/image020.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image020.gif"></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span></p></span></p>
									</div>
								</dd> 
							</dl>
						</div>
					</li> 
																				<li>
						<div class="errorBox"  style="display:none;">
							<span id="jt"></span>
							<div class="econt">
								<textarea class="content" tabindex="1" >
                                </textarea>
							</div>
							<p class="errorBtn"><a class="cancleBtn" >取消</a><a class="msurebtn" >确定</a></p>
						</div>
						<p class="ud-btn">
							<a class="ud-btn-drag" href="javascript:void(0);">上移</a>
							<a class="ud-btn-movedown" href="javascript:void(0);">下移</a>
							<a class="ud-btn-resolve" href="javascript:void(0);">解析</a>
							<a class="ud-btn-delete" href="javascript:void(0);">删除</a>
							<a class="f_error" href="javascript:void(0);">纠错</a>
						</p>
						<div class="ud-box" examId='388395' typeId='351'>
							<dl>
								<dt>
									<div class="ud-stem">
										<p class="order"><span class="orders" examid='388395'></span>.</p><p><p class="MsoNormal" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="108" height="24" id="图片 120" src="http://static.vko.cn/content/tk/import/20150828210740/image021.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image021.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">与圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="138" height="24" id="图片 121" src="http://static.vko.cn/content/tk/import/20150828210740/image022.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image022.gif"></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">的位置关系为（）</span></p></p>
									</div>
									<div class="ud-options">
                                        <div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．内切　　</span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．相交　</span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．外切　</span></p></div></div>
										<div class="quest_op"><div><p class="MsoNormal" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">D</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．相离</span></p></div></div>
										<div class="quest_op"></div>
										<div class="quest_op"></div>
									</div>
								</dt>
								<dd>
									<div class="ud-resolve">
										<p>答案：<span>B</span> </p>
										<p>解析试题分析：<span><p class="MsoNormal" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">两圆的圆心分别为</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="44" height="22" id="图片 1044" src="http://static.vko.cn/content/tk/import/20150828210740/image023.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image023.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="34" height="22" id="图片 1045" src="http://static.vko.cn/content/tk/import/20150828210740/image024.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image024.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，半径分别为</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="38" height="22" id="图片 1046" src="http://static.vko.cn/content/tk/import/20150828210740/image016.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image016.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="40" height="24" id="图片 1047" src="http://static.vko.cn/content/tk/import/20150828210740/image025.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image025.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，圆心距为</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:6.0pt;layout-grid-mode:line"><img width="176" height="30" id="图片 1048" src="http://static.vko.cn/content/tk/import/20150828210740/image026.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image026.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，则</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="132" height="26" id="图片 1049" src="http://static.vko.cn/content/tk/import/20150828210740/image027.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image027.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，∴两圆相交．</span></p></span></p>
									</div>
								</dd> 
							</dl>
						</div>
					</li> 
																				<li>
						<div class="errorBox"  style="display:none;">
							<span id="jt"></span>
							<div class="econt">
								<textarea class="content" tabindex="1" >
                                </textarea>
							</div>
							<p class="errorBtn"><a class="cancleBtn" >取消</a><a class="msurebtn" >确定</a></p>
						</div>
						<p class="ud-btn">
							<a class="ud-btn-drag" href="javascript:void(0);">上移</a>
							<a class="ud-btn-movedown" href="javascript:void(0);">下移</a>
							<a class="ud-btn-resolve" href="javascript:void(0);">解析</a>
							<a class="ud-btn-delete" href="javascript:void(0);">删除</a>
							<a class="f_error" href="javascript:void(0);">纠错</a>
						</p>
						<div class="ud-box" examId='388396' typeId='351'>
							<dl>
								<dt>
									<div class="ud-stem">
										<p class="order"><span class="orders" examid='388396'></span>.</p><p><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="82" height="24" id="图片 122" src="http://static.vko.cn/content/tk/import/20150828210740/image028.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image028.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">与圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="174" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image029.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image029.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">的公共弦长为（）</span></p></p>
									</div>
									<div class="ud-options">
                                        <div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:4.0pt;layout-grid-mode:line"><img width="24" height="24" id="Picture 34" src="http://static.vko.cn/content/tk/import/20150828210740/image030.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image030.gif"></span><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:4.0pt;layout-grid-mode:line"><img width="26" height="24" id="Picture 35" src="http://static.vko.cn/content/tk/import/20150828210740/image031.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image031.gif"></span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:4.0pt;layout-grid-mode:line"><img width="32" height="24" id="Picture 36" src="http://static.vko.cn/content/tk/import/20150828210740/image032.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image032.gif"></span><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">D</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:4.0pt;layout-grid-mode:line"><img width="34" height="24" id="Picture 37" src="http://static.vko.cn/content/tk/import/20150828210740/image033.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image033.gif"></span></p></div></div>
										<div class="quest_op"></div>
										<div class="quest_op"></div>
									</div>
								</dt>
								<dd>
									<div class="ud-resolve">
										<p>答案：<span>C</span> </p>
										<p>解析试题分析：<span><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="82" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image028.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image028.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">与</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="174" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image029.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image029.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">作差，得两圆公共弦所在的直线方程为</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:5.0pt;
layout-grid-mode:line"><img width="98" height="22" id="图片 124" src="http://static.vko.cn/content/tk/import/20150828210740/image034.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image034.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="82" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image028.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image028.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">的圆心</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">(0</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">0)</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">到</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="98" height="22" src="http://static.vko.cn/content/tk/import/20150828210740/image034.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image034.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">的距离</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:4.0pt;layout-grid-mode:line"><img width="58" height="24" id="图片 128" src="http://static.vko.cn/content/tk/import/20150828210740/image035.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image035.gif"></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，因此，公共弦长为</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:4.0pt;
layout-grid-mode:line"><img width="32" height="24" id="Picture 39" src="http://static.vko.cn/content/tk/import/20150828210740/image032.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image032.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，选</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">．</span></p></span></p>
									</div>
								</dd> 
							</dl>
						</div>
					</li> 
																				<li>
						<div class="errorBox"  style="display:none;">
							<span id="jt"></span>
							<div class="econt">
								<textarea class="content" tabindex="1" >
                                </textarea>
							</div>
							<p class="errorBtn"><a class="cancleBtn" >取消</a><a class="msurebtn" >确定</a></p>
						</div>
						<p class="ud-btn">
							<a class="ud-btn-drag" href="javascript:void(0);">上移</a>
							<a class="ud-btn-movedown" href="javascript:void(0);">下移</a>
							<a class="ud-btn-resolve" href="javascript:void(0);">解析</a>
							<a class="ud-btn-delete" href="javascript:void(0);">删除</a>
							<a class="f_error" href="javascript:void(0);">纠错</a>
						</p>
						<div class="ud-box" examId='388397' typeId='351'>
							<dl>
								<dt>
									<div class="ud-stem">
										<p class="order"><span class="orders" examid='388397'></span>.</p><p><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="108" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image021.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image021.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">与圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="138" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image022.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image022.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">的位置关系为<span style="color:black">（）</span></span></p></p>
									</div>
									<div class="ud-options">
                                        <div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．内切</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．相交</span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．外切</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">D</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．相离</span></p></div></div>
										<div class="quest_op"></div>
										<div class="quest_op"></div>
									</div>
								</dt>
								<dd>
									<div class="ud-resolve">
										<p>答案：<span>B</span> </p>
										<p>解析试题分析：<span><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">本题考查圆与圆的位置关系．两圆圆心分别为</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">A(</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">－</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">0)</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">B(2</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">1)</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span></p><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">半径分别为</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="78" height="22" id="图片 134" src="http://static.vko.cn/content/tk/import/20150828210740/image036.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image036.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">|AB|</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:4.0pt;layout-grid-mode:line"><img width="32" height="24" id="Picture 40" src="http://static.vko.cn/content/tk/import/20150828210740/image037.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image037.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，∵</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">3</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">－</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2&lt;<span style="position:relative;top:4.0pt"><img width="32" height="24" id="Picture 41" src="http://static.vko.cn/content/tk/import/20150828210740/image037.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image037.gif"></span>&lt;2</span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＋</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">3</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，∴两圆相交．</span></p></span></p>
									</div>
								</dd> 
							</dl>
						</div>
					</li> 
																				<li>
						<div class="errorBox"  style="display:none;">
							<span id="jt"></span>
							<div class="econt">
								<textarea class="content" tabindex="1" >
                                </textarea>
							</div>
							<p class="errorBtn"><a class="cancleBtn" >取消</a><a class="msurebtn" >确定</a></p>
						</div>
						<p class="ud-btn">
							<a class="ud-btn-drag" href="javascript:void(0);">上移</a>
							<a class="ud-btn-movedown" href="javascript:void(0);">下移</a>
							<a class="ud-btn-resolve" href="javascript:void(0);">解析</a>
							<a class="ud-btn-delete" href="javascript:void(0);">删除</a>
							<a class="f_error" href="javascript:void(0);">纠错</a>
						</p>
						<div class="ud-box" examId='388398' typeId='351'>
							<dl>
								<dt>
									<div class="ud-stem">
										<p class="order"><span class="orders" examid='388398'></span>.</p><p><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">已知圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="74" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image038.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image038.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">与圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="156" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image039.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image039.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">关于直线</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:3.0pt;layout-grid-mode:line"><img width="10" height="18" id="图片 137" src="http://static.vko.cn/content/tk/import/20150828210740/image040.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image040.gif"></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">对称，则直线</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:3.0pt;
layout-grid-mode:line"><img width="10" height="18" src="http://static.vko.cn/content/tk/import/20150828210740/image040.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image040.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">的方程为<span style="color:black">（）</span></span></p></p>
									</div>
									<div class="ud-options">
                                        <div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="82" height="22" id="图片 139" src="http://static.vko.cn/content/tk/import/20150828210740/image041.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image041.gif"></span><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="82" height="22" src="http://static.vko.cn/content/tk/import/20150828210740/image042.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image042.gif"></span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="82" height="22" src="http://static.vko.cn/content/tk/import/20150828210740/image043.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image043.gif"></span><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">D</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="82" height="22" src="http://static.vko.cn/content/tk/import/20150828210740/image044.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image044.gif"></span></p></div></div>
										<div class="quest_op"></div>
										<div class="quest_op"></div>
									</div>
								</dt>
								<dd>
									<div class="ud-resolve">
										<p>答案：<span>A</span> </p>
										<p>解析试题分析：<span><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">由题易知，直线</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">l</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">是两圆圆心连线构成线段的垂直平分线，两圆的圆心坐标分别是</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">(0</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">0)</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">(2</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:2.0pt;layout-grid-mode:line"><img width="24" height="18" id="图片 143" src="http://static.vko.cn/content/tk/import/20150828210740/image045.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image045.gif"></span><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">)</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，于是其中点坐标是</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">(1</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:2.0pt;layout-grid-mode:line"><img width="22" height="18" id="图片 147" src="http://static.vko.cn/content/tk/import/20150828210740/image046.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image046.gif"></span><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">)</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，又过两圆圆心的直线的斜率是－</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">1</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，所以直线</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">l</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">的斜率是</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">1</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，于是可得直线</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">l</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">的方程为：</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="78" height="22" id="图片 144" src="http://static.vko.cn/content/tk/import/20150828210740/image047.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image047.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，即</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="82" height="22" src="http://static.vko.cn/content/tk/import/20150828210740/image041.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image041.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">．</span></p></span></p>
									</div>
								</dd> 
							</dl>
						</div>
					</li> 
																				<li>
						<div class="errorBox"  style="display:none;">
							<span id="jt"></span>
							<div class="econt">
								<textarea class="content" tabindex="1" >
                                </textarea>
							</div>
							<p class="errorBtn"><a class="cancleBtn" >取消</a><a class="msurebtn" >确定</a></p>
						</div>
						<p class="ud-btn">
							<a class="ud-btn-drag" href="javascript:void(0);">上移</a>
							<a class="ud-btn-movedown" href="javascript:void(0);">下移</a>
							<a class="ud-btn-resolve" href="javascript:void(0);">解析</a>
							<a class="ud-btn-delete" href="javascript:void(0);">删除</a>
							<a class="f_error" href="javascript:void(0);">纠错</a>
						</p>
						<div class="ud-box" examId='388399' typeId='351'>
							<dl>
								<dt>
									<div class="ud-stem">
										<p class="order"><span class="orders" examid='388399'></span>.</p><p><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">已知点</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">P(1</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，－</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2)</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，以</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">Q</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">为圆心的圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">Q</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">：</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="140" height="24" id="图片 146" src="http://static.vko.cn/content/tk/import/20150828210740/image048.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image048.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，以</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">PQ</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">为直径作圆与圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">Q</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">交于</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">、</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">两点，连接</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">PA</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">、</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">PB</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，则∠</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">APB</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">的余弦值为<span style="color:black">（）</span></span></p></p>
									</div>
									<div class="ud-options">
                                        <div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:12.0pt;layout-grid-mode:line"><img width="24" height="42" id="Picture 47" src="http://static.vko.cn/content/tk/import/20150828210740/image049.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image049.gif"></span><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:12.0pt;layout-grid-mode:line"><img width="24" height="42" id="Picture 48" src="http://static.vko.cn/content/tk/import/20150828210740/image050.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image050.gif"></span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:12.0pt;layout-grid-mode:line"><img width="24" height="42" id="Picture 46" src="http://static.vko.cn/content/tk/import/20150828210740/image051.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image051.gif"></span><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">D</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:12.0pt;layout-grid-mode:line"><img width="24" height="42" id="Picture 45" src="http://static.vko.cn/content/tk/import/20150828210740/image052.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image052.gif"></span></p></div></div>
										<div class="quest_op"></div>
										<div class="quest_op"></div>
									</div>
								</dt>
								<dd>
									<div class="ud-resolve">
										<p>答案：<span>B</span> </p>
										<p>解析试题分析：<span><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">由题意可知</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">QA</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">⊥</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">PA</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">QB</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">⊥</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">PB</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，故</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">PA</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">、</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">PB</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">是圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">Q</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">的两条切线，易知</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">|PQ|</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">5</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">PA</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">4</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，∴</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">cos</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">∠</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">APQ</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:12.0pt;layout-grid-mode:line"><img width="16" height="42" id="Picture 42" src="http://static.vko.cn/content/tk/import/20150828210740/image053.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image053.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，</span></p><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">∴</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">cos</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">∠</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">APB</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2cos<sup>2</sup></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">∠</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">APQ<span style="position:relative;top:2.0pt"><img width="22" height="18" id="图片 148" src="http://static.vko.cn/content/tk/import/20150828210740/image046.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image046.gif"></span></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">2</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">×</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">(<span style="position:relative;top:12.0pt"><img width="16" height="42" id="Picture 43" src="http://static.vko.cn/content/tk/import/20150828210740/image053.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image053.gif"></span>)<sup>2<span style="position:relative;top:2.0pt"><img width="22" height="18" id="图片 149" src="http://static.vko.cn/content/tk/import/20150828210740/image046.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image046.gif"></span></sup></span><span style="font-family:
&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;top:12.0pt;
layout-grid-mode:line"><img width="24" height="42" id="Picture 44" src="http://static.vko.cn/content/tk/import/20150828210740/image050.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image050.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">．</span></p></span></p>
									</div>
								</dd> 
							</dl>
						</div>
					</li> 
																				<li>
						<div class="errorBox"  style="display:none;">
							<span id="jt"></span>
							<div class="econt">
								<textarea class="content" tabindex="1" >
                                </textarea>
							</div>
							<p class="errorBtn"><a class="cancleBtn" >取消</a><a class="msurebtn" >确定</a></p>
						</div>
						<p class="ud-btn">
							<a class="ud-btn-drag" href="javascript:void(0);">上移</a>
							<a class="ud-btn-movedown" href="javascript:void(0);">下移</a>
							<a class="ud-btn-resolve" href="javascript:void(0);">解析</a>
							<a class="ud-btn-delete" href="javascript:void(0);">删除</a>
							<a class="f_error" href="javascript:void(0);">纠错</a>
						</p>
						<div class="ud-box" examId='388400' typeId='351'>
							<dl>
								<dt>
									<div class="ud-stem">
										<p class="order"><span class="orders" examid='388400'></span>.</p><p><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">设</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">为圆</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">：</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">(<i>x</i></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＋</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">1)<sup>2</sup></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＋</span><i><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">y</span></i><sup><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">2</span></sup><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">4</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">上的动点，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">PA</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">是圆的切线，且</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">|PA|</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">1</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，则</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">P</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">点的轨迹方程为<span style="color:black">（）</span></span></p></p>
									</div>
									<div class="ud-options">
                                        <div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">A</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="114" height="24" id="图片 150" src="http://static.vko.cn/content/tk/import/20150828210740/image054.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image054.gif"></span><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="104" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image055.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image055.gif"></span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">C</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="112" height="24" id="图片 152" src="http://static.vko.cn/content/tk/import/20150828210740/image056.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image056.gif"></span><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></div></div>
										<div class="quest_op"><div><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">D</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">．</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:5.0pt;layout-grid-mode:line"><img width="112" height="24" id="图片 153" src="http://static.vko.cn/content/tk/import/20150828210740/image057.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image057.gif"></span></p><p class="MsoNormal" align="center" style="text-align:center;line-height:150%"><span lang="EN-US" style="line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line"><img width="182" height="169" id="Picture 3" src="http://static.vko.cn/content/tk/import/20150828210740/image058.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image058.gif"></span></p></div></div>
										<div class="quest_op"></div>
										<div class="quest_op"></div>
									</div>
								</dt>
								<dd>
									<div class="ud-resolve">
										<p>答案：<span>B</span> </p>
										<p>解析试题分析：<span><p class="MsoPlainText" align="left" style="text-align:left;layout-grid-mode:char"><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">设</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">P(<span style="position:relative;top:5.0pt"><img width="28" height="18" id="图片 155" src="http://static.vko.cn/content/tk/import/20150828210740/image059.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image059.gif"></span>)</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，由题意可知</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">|PC|<sup>2</sup></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">|PA|<sup>2</sup></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">＋</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">|AC|<sup>2</sup></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">1<sup>2</sup></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">＋</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">2<sup>2</sup></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">＝</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">5</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，所以</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">P</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">点轨迹为圆，圆心为</span><span lang="EN-US" style="font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">C(</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">－</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">1</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;layout-grid-mode:line">0)</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;layout-grid-mode:line">，半径为</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;position:relative;
top:4.0pt;layout-grid-mode:line"><img width="24" height="24" id="Picture 49" src="http://static.vko.cn/content/tk/import/20150828210740/image030.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image030.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">．∴方程为</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
position:relative;top:5.0pt;layout-grid-mode:line"><img width="104" height="24" src="http://static.vko.cn/content/tk/import/20150828210740/image055.gif" alt="http://static.vko.cn/content/tk/import/20150828210740/image055.gif"></span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">，故选</span><span lang="EN-US" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
layout-grid-mode:line">B</span><span style="font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;
layout-grid-mode:line">．</span></p></span></p>
									</div>
								</dd> 
							</dl>
						</div>
					</li> 
														</ul>
								
				<!-- 多选题 -->
								
				<!-- 填空题 -->
				
				<!-- 解答题-->
								
				<!-- 完型题-->
								<!-- 阅读理解 -->
				
				
				<!-- 写作题-->
								<input type="hidden" id="semesterForWritePaper" value="51"/>
				<input type="hidden" id="subjectForWritePaper" value="22"/>
				<input type="hidden" id="examIdsForWritePaper" value="388391,388392,388393,388394,388395,388396,388397,388398,388399,388400"/>
			</div>
			<div class="the-right">
				<div class="ud-tool-btn">
					<!--
					<a class="ud-print" href="javascript:toprint()">打印试卷</a>
					<a class="ud-download" href="javascript:download()">试卷下载</a>
					-->
										<a id="ud-keep-paper" href="javascript:goWritePaperBefore()">保存试卷</a>
										<a style="display:none;" class="ud-record" href="">组卷记录</a>
					<a class="ud-choose" href="javascript:goOnChoose()" id="goOnChoose">继续选题</a>
					<a class="ud-empty" href="javascript:clear()">清空试题</a>
				</div>
			</div>
			<form id="download_form" method="post" action="/paper/download">
				<input type="hidden"  name="semesterId" value="51"/>
				<input type="hidden"  name="subjectId" value="22"/>
				<input type="hidden" name="examIds"  value="388391,388392,388393,388394,388395,388396,388397,388398,388399,388400"/>
				<input type="hidden" id="singleNumForDown"  name="singleNum"/>
            	<input type="hidden" id="multiNumForDown"    name="multiNum"/>
            	<input type="hidden" id="fillBlankNumForDown"   name="fillBlankNum"/>
            	<input type="hidden" id="answerNumForDown"   name="answerNum"/>
            	<input type="hidden" id="readingNumForDown"   name="readingNum"/>
            	<input type="hidden" id="closeTestNumForDown"   name="closeTestNum"/>
            	<input type="hidden" id="writeNumForDown"   name="writeNum"/>				
            	<input type="hidden" id="totalNumForDown"   name="totalNum"/>
				<input type="hidden" id="paperForDown" name="paperTime"/>
				<input type="hidden" id="titleForDown" name="title"/>
				<input type="hidden" id="orderStrDown" name="orderStr"/>
				<input type="hidden" id="orderStrForBigDown" name="orderStrForBig"/>
            </form>			
			<form id="savePaper_form" method="post" action="/exam/goWritePaper">
				<input type="hidden" id="subjectForsave" name="subjectId" value="22"/>
				<input type="hidden" id="semesterForsave" name="semesterId"/>
				<input type="hidden" id="examIdsForsave" name="examIds"/>
				<input type="hidden" id="singleNumForsave"  name="singleNum"/>
            	<input type="hidden" id="multiNumForsave"    name="multiNum"/>
            	<input type="hidden" id="fillBlankNumForsave"   name="fillBlankNum"/>
            	<input type="hidden" id="answerNumForsave"   name="answerNum"/>
            	<input type="hidden" id="readingNumForsave"   name="readingNum"/>
            	<input type="hidden" id="closeTestNumForsave"   name="closeTestNum"/>
            	<input type="hidden" id="writeNumForsave"   name="writeNum"/>				
            	<input type="hidden" id="totalNumForsave"   name="totalNum"/>
				<input type="hidden" id="paperForsave" name="paperTime"/>
				<input type="hidden" id="titleForsave" name="title"/>
				<input type="hidden" id="orderStr" name="orderStr"/>
				<input type="hidden" id="orderStrForBig" name="orderStrForBig"/>
            </form>
			<form id="print_form" method="post" action="/paper/toPrint">
				<input type="hidden"  name="subjectId" value="22"/>
				<input type="hidden"  name="semesterId" value="51"/>
				<input type="hidden" id="examIdsForprint" name="examIds"/>
				<input type="hidden" id="singleNumForprint"  name="singleNum"/>
            	<input type="hidden" id="multiNumForprint"    name="multiNum"/>
            	<input type="hidden" id="fillBlankNumForprint"   name="fillBlankNum"/>
            	<input type="hidden" id="answerNumForprint"   name="answerNum"/>
            	<input type="hidden" id="readingNumForprint"   name="readingNum"/>
            	<input type="hidden" id="closeTestNumForprint"   name="closeTestNum"/>
            	<input type="hidden" id="writeNumForprint"   name="writeNum"/>				
            	<input type="hidden" id="totalNumForprint"   name="totalNum"/>
				<input type="hidden" id="paperForprint" name="paperTime"/>
				<input type="hidden" id="titleForprint" name="title"/>
            </form>			
			<form id="goOn_form" method="post" action="/exam/goOnChoose">
				<input type="hidden" id="semesterForgoOn" name="semesterId"/>
				<input type="hidden" id="subjectForgoOn" name="subjectId"/>
				<input type="hidden" id="examIdsForgoOn" name="examIds"/>
				<input type="hidden" id="singleNumForgoOn"  name="singleNum"/>
            	<input type="hidden" id="multiNumForgoOn"    name="multiNum"/>
            	<input type="hidden" id="fillBlankNumForgoOn"   name="fillBlankNum"/>
            	<input type="hidden" id="answerNumForgoOn"   name="answerNum"/>
            	<input type="hidden" id="readingNumForgoOn"   name="readingNum"/>
            	<input type="hidden" id="closeTestNumForgoOn"   name="closeTestNum"/>
            	<input type="hidden" id="writeNumForgoOn"   name="writeNum"/>				
            	<input type="hidden" id="totalNumForgoOn"   name="totalNum"/>
            </form>
		</div>
		<script src="_PUBLIC_/js/footer.js"></script>
	</body>
</html>
