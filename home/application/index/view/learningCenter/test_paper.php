
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


	<title>组卷记录</title>
<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/easyui/jquery-1.7.2.min.js"></script>

<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common.css">
	<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/top_common.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common-inherit.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/ie.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/print.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/screen.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/pagination.css">

<link rel="stylesheet" href="_PUBLIC_/css/pagination.css">

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
	
<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/jquery.pagination.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/paginationBar.js"></script>
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/tiku/css/testrecord.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/tiku/css/front_record.css">
</head>  
	<body>
		<script type="text/javascript" src="_PUBLIC_/js/header.js"></script>
	
	<!-- start -->
	<div class="mains clearfix">
	<div class="lc_top">
		<ul>
			<li><a class="lc_my_course_h" href="/index/learningcenter/myCourse">我的课程</a></li>
			<li><a class="lc_learning_plan" href="/index/learningcenter/learningPlan">学习计划</a></li>
			<li><a class="lc_test_record" href="javascript:void(0);">组卷记录</a></li>
			<li><a class="lc-gp-wrong" href="/index/learningcenter/errorBook">我的错题本</a></li>
		</ul>
	</div>
	<div class="lc_main">
		<div class="testrecord_main">
			<div class="test_title">
				<p class="subject">学科
					<select id="slt_sub">
						<option value="0">全部</option>
						{volist name = 'subject' id = 'val'}
						<option value="{$val.subject_id}">{$val.subject_name}</option>
						{/volist}
					</select>
				</p>
				<p class="time">组卷时间
					<select id="slt_day">
						<option value="0">全部</option>
						<option value="-7">最近一周</option>
						<option value="-30">最近一月</option>
						<option value="-90">最近三月</option>
					</select>
				</p>
				<p class="time">标题
					<input type="text" id="title" value="" />
				</p>
				<button class="search" onclick="paperSearch()">搜索</button>
			</div>
			
						
			<table class="tab">
					<tr style="">
						<th class="tab_title">名称</td>
						<th class="tab_subject">学科</td>
						<th class="tab_time">组卷时间</td>
						<th class="tab_operation">操作</td>
					</tr>
					<tbody id="tb_tr">
					{volist name = 'paper' id = 'value'}
					<tr id="p_id">
						<td style="display: none;" >{$value.paper_id}</td>
						<td class="name">{$value.paper_name}</td>
						<td class="sub">{$value.subject_name} </td>
						<td class="date">{$value.time|date="Y/m/d",###}</td>
						<td class="oper">
							<a href="/index/learningcenter/paperEdit">编辑</a>
							<span></span>
							<a href="#">预览</a>
							<span></span>
							<a href="javascript:void(0);" id="delajax">删除</a>
						</td>
					</tr>
					{/volist}
				</tbody>				
			</table>
				{$page}
			</div>
		</div>
</div>
	<input id="h_total" type="hidden" value="1"/>
	<input id="h_totalp" type="hidden" value="1"/>
	<input id="h_pageIndex" type="hidden" value="0"/>
	<input id="h_pageRow" type="hidden" value="15"/>
	<input id="h_sub" type="hidden" value="-1"/>
	<input id="h_nearDay" type="hidden" value="-7"/>
	<!-- The end -->
	<script type="text/javascript" src="_PUBLIC_/js/footer.js"></script>

	<!-- 删除错题 -->
	<div class="mt" style="display: none;"></div>
	<div class="key_code" id="delDialog" style="display: none;top:35%;position:fixed;">
		<p class="kc_top"><span class="mt_x" onclick="javascript:$('#delDialog,.mt').hide();"></span>移除组卷记录</p>
		<form class="kc_form">
			<p class="kc_txt">是否移除此条组卷记录？</p>
			<p class="kc_tips"></p>
			<p class="kc_btn"><a class="kc_btns" href="javascript:void(0);">确定</a></p>
		</form>
	</div>
	<srcipt src="_PUBLIC_/js/jquery.js"></srcipt>
    <script type="text/javascript" >
    //时间戳转日期格式
    function getLocalTime(nS) { 
       	return new Date(parseInt(nS) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, "");
    } 

	//搜索
    $('.search').click(function(){

    	var subject = $('#slt_sub option:selected').val();
    	var date = $('#slt_day option:selected').val();
    	var title = $('#title').val();

        $.get('/index/learningcenter/paperAjax', {subject_id:subject,date:date,title:title},function(msg){
        	var html = "";
        	if (msg == "") {
        		html += '<tr><td colspan="4" style="text-align:center;">没有试卷哦！</td></tr>';
        	}
        	for (var k in msg) {
        		html += '<tr id="p_id">'
        		html += '<td style="display: none;" >'+msg[k].paper_id+'</td>'
				html += '<td class="name">'+msg[k].paper_name+'</td>'
				html += '<td class="sub">'+msg[k].subject_name+'</td>'
				html += '<td class="date">'+getLocalTime(msg[k].time)+'</td>'
				html += '<td class="oper">'
				html += '<a target="_blank" href="/index/learningcenter/paperEdit">编辑</a>'
				html += '<span></span>'
				html += '<a target="_blank" href="#">预览</a>'
				html += '<span></span><a href="javascript:void(0);" id="delajax">删除</a>'
				html += '</td>'
				html += '</tr>';
        	}
        	$('#tb_tr').html(html)
        })
    })

 	//删除
    $('#delajax').click(function(){
    	var p_id = $("#p_id>:first").text();
    	alert(p_id)
    })
    </script>
    
</body>
</html>
