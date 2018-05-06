
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>微课网—全学科学习引领者-名师风采</title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link href="http://static.vko.cn/common/css/base.css" rel="stylesheet" type="text/css" media="screen"/>

<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/new-header.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/common/css/common.css" />
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/common/css/headerTest.css" />
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/top_common.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/pre-common.css">

<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/tiku/css/pageBar.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common-inherit.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/ie.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/print.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/screen.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/pagination.css"/>


<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/easyui/jquery-1.7.2.min.js"></script>

<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/easyui/jquery.form.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/jquery.md5.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/jquery.pagination.js"></script>

<script type="text/javascript" src="http://static.vko.cn/v8/common/js/paginationBar.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/utils.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/cookie.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/vkouser.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/login.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/local/md5.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/validateUtil.js"></script>

<script type="text/javascript" src="http://static.vko.cn/common/js/vkofileloader.js"></script>
<!-- <script type="text/javascript" src="http://static.vko.cn/v8/common/js/seajs/2.2.0/sea.js"></script> -->

<!-- 右侧在线客服 -->
<link rel="stylesheet" type="text/css" href="_PUBLIC_/js/zxkf/iconfont.css">
<link rel="stylesheet" type="text/css" href="_PUBLIC_/js/zxkf/waiter.css">
<!-- end 右侧在线客服结束 -->


<!-- <script type="text/javascript" src="http://static.vko.cn/v8/common/config.js"></script> -->
<script type="text/javascript" src="_PUBLIC_/js/common/config.js"></script>

<script>
    $(function(){
        // 禁止点击 讲师详情按钮跳转 -功能暂未完成
        $(document).on("click",'.teacherDetailBtn',function(){
            $(this).removeAttr('href');//去掉a标签中的href属性
            $(this).removeAttr('onclick');//去掉a标签中的onclick事件
            alert('可怜的程序猿,正在加班完善此功能~~~')
        })
    });
//<link href="http://static.vko.cn/v5/css/common/base.css" rel="stylesheet" type="text/css" media="screen"/>
	var staticPath = 'http://static.vko.cn/v8';
	var ssoPath = 'http://sso.vko.cn';
	var baseRoot = '${baseRoot}';
	var topicPath = '${topicPath}';
	var imgPath = 'http://pdf.vko.cn/';
	var goodsPath = 'http://www.vko.cn/course/';
	var studyPath='http://studycenter.vko.cn';
	var studyCenterPath='http://studycenter.vko.cn';
	var cdnPath = 'http://cdn.vkoimg.cn';
	var payPath = 'http://pay.vko.cn';
</script>


<!--new 统计-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?2e97f87c680ad9ee6e6328cf63cebce1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    <link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/common/css/banner.css" />
    <link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/teacher/common/css/teacher.css" />
	
</head>
<body>
<!-- 右侧在线客服 开始 -->
    <div class="wuyou-waiter">
        <ul class="waiter-ul">
            <li class="wuyou-contact">
                <a class="iconfont icon-QQ" href="http://wpa.qq.com/msgrd?v=3&uin=2603559572&site=qq&menu=yes" target="_blank"></a>
                <div class="waiter-title">联系客服</div>
            </li>
            

            <li class="wuyou-top">
              <a class="iconfont icon-Upward" href="#"></a>
                <div class="waiter-title">回到顶部</div>
            </li>
        </ul>
    </div>
<!-- 右侧在线客服 结束 -->
<!--老师广告图 start-->
<div class="bannerBox">
    <div class="flexslider">
	<ul class="slides"  id="glSchoolCarousejs">
	</ul>
	<ol class="flex-control-nav flex-control-paging"></ol>
</div>

</div>
<!--老师广告图 end-->
<!--名师列表 start-->
<div class="teacherList">
    <div class="tl_title">
        <h6>微课名师</h6>
        <div class="grades" id="xueduan">
            <a href="javascript: void(0);" data="51">高中</a>
            <a class="cur" href="javascript: void(0);" data="52">初中</a>
        </div>
    </div>
	<input type="hidden" id="learnId" vlaue=""/>
    <div class="tl_nav subjects">
        <a class=" cur" href="javascript: void(0);" data="-1">全部</a><i>/</i>
        <a href="javascript: void(0);" data="21">语文</a><i>/</i>
        <a href="javascript: void(0);" data="22">数学</a><i>/</i>
        <a href="javascript: void(0);" data="23">英语</a><i>/</i>
        <a href="javascript: void(0);" data="24">物理</a><i>/</i>
        <a href="javascript: void(0);" data="25">化学</a><i class="hehe">/</i>
        <a href="javascript: void(0);" class="hehe" data="26">生物</a><i class="hehe">/</i>
        <a href="javascript: void(0);" class="hehe" data="29">政治</a><i class="hehe">/</i>
        <a href="javascript: void(0);" class="hehe" data="27">历史</a><i class="hehe">/</i>
        <a href="javascript: void(0);" class="hehe" data="28">地理</a>
    </div>
	<input type="hidden" id="subjectId" vlaue=""/>
    <div class="tl_list_cont clearfix" id="tl_list_cont">
    </div>
</div>
<!--名师列表 end-->
<div class="pageBar" id="pageBar"></div>
	<input type="hidden" id="pageIndex" value="0"/>
	<input type="hidden" id="pageSize" value="9"/>
	<input type="hidden" id="totalNum" value="0"/>
</div>
<script type="text/javascript" src="http://static.vko.cn/common/js/stacktrace.js"></script>
<script type="text/javascript">try{if(document.URL.indexOf('photo/view')==-1)window.document.domain = "vko.cn";}catch(e){}</script>
<!-- 加载公共部分 -->
<script src="_PUBLIC_/js/header.js"></script>
<script src="_PUBLIC_/js/footer.js"></script>
<!-- 加载公共部分 -->
<script type="text/javascript" src="http://static.vko.cn/v8/index/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/goods/js/teacher_list.js"></script>
<script type="text/javascript">
    $(function () {
        $('.flexslider').flexslider({
            directionNav: false,
            pauseOnAction: false
        });
    })
</script>
</body>
</html>