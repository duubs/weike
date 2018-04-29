<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>微课网—全学科学习引领者-高中全部-全部学科课程</title>
    <!-- file="common_css.html"-->
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
    <script type="text/javascript" src="http://static.vko.cn/v8/common/js/seajs/2.2.0/sea.js"></script>





    <script type="text/javascript" src="http://static.vko.cn/v8/common/config.js"></script>

    <script>
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

    <link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/learning/css/course.css" />
    <link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/learning/css/courseSyn.css" />
    <meta name="Keywords" content="">
    <meta name="Description" content="">
</head>
<body>
<!--筛选 start-->
<div class="courseItemBox">
    <div class="contList contLis" id="contList"  style="height:344px;" >
        <div class="list borderList clearfix">
            <a href="/"><h2><b class="s_fz_city" style="display:none;"></b>首页<b>&gt;</b></h2></a>
            <ul class="tagList2">
                <li><a>全部课程</a></li>
            </ul>
        </div>
        <div class="list clearfix">
            <h2>学段 <b>&gt;</b></h2>
            <ul> <!-- 循环学段$stage a链接的href把全部条件都加上 -->
               <?php
               foreach ($stage as $key => $value) {
                   
                ?>
                    <li>
                        <a href="<?php echo url('course/course',array('stage_id'=>$value['stage_cate_id'],'stage_child_id'=>$stage_child_id,'subject_id'=>$subject_id,'type'=>$type));?>" class="stage<?php echo $value['stage_cate_id'];?>"><?php echo $value['stage_name']?></a>
                    </li>

                <?php
                 }
                ?>
            </ul>
        </div>
        <div class="list clearfix">
            <h2>年级 <b>&gt;</b></h2>
            <ul>  <!-- 循环年级$stage_child_id a链接的href把全部条件都加上 -->
            <?php
            if(!empty($stage_child_id)){
            ?>
                <li>
                    <a href="<?php echo url('course/course',array('stage_id'=>$stage_id,'stage_child_id'=>'','subject_id'=>$subject_id,'type'=>$type));?>" target="_self">全部</a>
                </li>
            <?php
             }else{
            ?>
               <li class="check">
                    <a href="<?php echo url('course/course',array('stage_id'=>$stage_id,'stage_child_id'=>$stage_child_id,'subject_id'=>$subject_id,'type'=>$type));?>" target="_self">全部</a>
                </li>
            <?php
             }
            ?>

                <?php
                  foreach ($stage_child as $key => $value) {
                   
                ?>
                <li>
                    <a  href="<?php echo url('course/course',array('stage_id'=>$stage_id,'stage_child_id'=>$value['stage_cate_id'],'subject_id'=>$subject_id,'type'=>$type));?>" class="high<?php echo $value['stage_cate_id'];?>" ><?php echo $value['stage_name']?></a>
                </li>
                <?php
                 }
                ?>
            </ul>
        </div>
        <div class="list clearfix">
            <h2>学科 <b>&gt;</b></h2>
            <ul> <!-- 循环学科$subject_id a链接的href把全部条件都加上 -->
              <?php
            if(!empty($subject_id)){
            ?>
                <li>
                    <a href="<?php echo url('course/course',array('stage_id'=>$stage_id,'stage_child_id'=>$stage_child_id,'subject_id'=>'','type'=>$type));?>" target="_self">全部</a>
                </li>
            <?php
             }else{
            ?>
               <li class="check">
                    <a href="<?php echo url('course/course',array('stage_id'=>$stage_id,'stage_child_id'=>$stage_child_id,'subject_id'=>$subject_id,'type'=>$type));?>" target="_self">全部</a>
                </li>
            <?php
             }
            ?>

              <?php
               foreach ($subject as $key => $value) {
                   
                ?>
                    <li>
                        <a href="<?php echo url('course/course',array('stage_id'=>$stage_id,'stage_child_id'=>$stage_child_id,'subject_id'=>$value['subject_id'],'type'=>$type));?>" class="subject<?php echo $value['subject_id'];?>"><?php echo $value['subject_name']?></a>
                    </li>
                <?php
                 }
                ?>
            </ul>
        </div>
        <div class="list clearfix goods-type">
            <h2>类型 <b>&gt;</b></h2>
            <ul>  <!-- 循环类型$type a链接的href把全部条件都加上 -->
                <li>
                    <a href="<?php echo url('course/course',array('stage_id'=>$stage_id,'stage_child_id'=>$stage_child_id,'subject_id'=>$subject_id,'type'=>1));?>" class="type1">专题</a>
                </li>
                <li>
                    <a href="<?php echo url('course/course',array('stage_id'=>$stage_id,'stage_child_id'=>$stage_child_id,'subject_id'=>$subject_id,'type'=>2));?>" class="type2">同步课</a>
                </li>
            </ul>
        </div>


    </div>
    <div class="filterBar" id="filterBar">
        <div class="moreBar">
            更多筛选条件
            <!--上箭头-->
            <div class="arrow-top arrow-box" id="arrow-top" style="display: block">
                <b class="top"><i class="top-arrow1"></i><i class="top-arrow2"></i></b>
            </div>
            <!--下箭头-->
            <div class="arrow-bottom arrow-box" id="arrow-bottom">
                <b class="bottom"><i class="bottom-arrow1"></i><i class="bottom-arrow2"></i></b>
            </div>
        </div>
    </div>

</div>
<!--筛选 end-->
<!--课程导航 start-->
<!--<div class="courseLineBar">
    <a class="hover" href="javascript: void(0);">最新</a>
    <a href="javascript: void(0);">最热</a>
</div>-->
<!--课程导航 end-->

<div class="localCont">
    <div class="list listTop clearfix">
       
        <?php
        foreach ($course as $key => $vo) {
           
        
        ?>
        <div class="ml2_left">
            <div class="pic">
                <a target="_blank" href="/index/course/show_info?id=<?php echo $vo['course_id'];?>">
                    <img src="http://cover.vkoimg.cn/v8/v8s/learning/images/bgSync/tb_21.jpg" onerror="javascript:nofind(this,'http://cover.vkoimg.cn/v8/v8s/learning/images/bgSync/tb_22.jpg');">
                </a>
                <div class="synchoTop">
                    <a target="_blank" href="">
                        <p class="stTit">{$vo.course_version}</p>
                        <p>{$vo.course_name}</p>
                        <h6>{$vo.textbook_grade}</h6>
                    </a>
                </div>

            </div>

            <div class="l_cont">
                <a target="_blank" href="/index/course/show_info?id=<?php echo $vo['course_id'];?>">
                    <h6>{$vo.textbook_grade}</h6>
                </a>
                <div class="ml2_c2">
                    <p class="c2l"><span>课程数：</span><b>{$vo.course_num}</b></p>
                </div>
                <div class="clbox bornone">
                    <p class="clpl">￥<b>{$vo.course_money}</b></p>
                    <!-- <b>55</b>人购买 -->
                    <p class="clpr"><a target="_blank" href="/index/course/show_info?id=<?php echo $vo['course_id'];?>">查看课程</a></p>
                </div>

            </div>
        </div>

        <?php
           }
        ?>
        <div class="pagination">
           {$course->render()}
           </div>
    </div>
</div>

<input type="hidden" id="stage_id" value="<?php echo $stage_id;?>"/> <!-- 学段stage_id隐藏域，用于js选定-->
<input type="hidden" id="stage_child_id" value="<?php echo $stage_child_id;?>"/> <!--  年级stage_child_id隐藏域，用于js选定-->
<input type="hidden" id="subject_id" value="<?php echo $subject_id;?>""/> <!-- 科目subject_id隐藏域，用于js选定-->
<input type="hidden" id="type" value="<?php echo $type;?>"/> <!-- 类型type隐藏域，用于js选定-->

<div class="list listTop clearfix">


<!--    会员广告-->
<!--    <div class="recommendCourse">-->
<!--        <a href="http://pay.vko.cn/pay/order/toMember" target="_blank" title="会员购买"><img class="memberPic" class="memberPic" src="http://cover.vkoimg.cn/v8/v8s/learning/images/memberpic.jpg" alt="会员购买"></a>-->
<!--    </div>-->
</div>


<input type="hidden" id="pageIndex" value="1"/>
<input type="hidden" id="pageRow" value="15"/>
<input type="hidden" id="dataTotal" value="216"/>
<input type="hidden" id="pagerUrl" value="/course/8_51_-1_-1_-1_-1_#num_15.html"/>
<input id="logType" type="hidden" value="2"/>
<!-- file="top.html"-->
<script type="text/javascript">
    var staticPath = 'http://static.vko.cn'+"/v8";
    var ssoPath = 'http://sso.vko.cn';
    var apiPath = "http://api.vko.cn";
    var goodsPath = 'http://www.vko.cn';
    var payPath = 'http://pay.vko.cn';
    var studyPath="http://studycenter.vko.cn";
</script>
<script type="text/javascript" src="http://static.vko.cn/common/js/stacktrace.js"></script>
<script type="text/javascript" src="http://static.vko.cn/common/js/vkofileloader.js"></script><!--kf-->
<script type="text/javascript" src="http://static.vko.cn/common/js/seajs/seajs/2.2.0/sea.js"></script>
<!-- <script type="text/javascript" src="http://static.vko.cn/common/js/config.js"></script>
<script type="text/javascript" src="http://static.vko.cn/vko/js/config.js"></script> -->
<script type="text/javascript">try{if(document.URL.indexOf('photo/view')==-1)window.document.domain = "vko.cn";}catch(e){}</script>

<script type="text/javascript" src="http://static.vko.cn/v8/common/js/utils.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/cookie.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/vkouser.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/local/md5.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/login.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/config.js"></script>


<!-- 加载公共部分 -->
<script src="_PUBLIC_/js/header.js"></script>
<script src="_PUBLIC_/js/footer.js"></script>
<!-- 加载公共部分 -->

<script type="text/javascript" src="http://static.vko.cn/v8/goods/js/access_log.js"></script>
<script type="text/javascript" src="http://localhost/weike/home/public/static/js/jquery.pagination.js"></script>
<script type="text/javascript" src="http://localhost/weike/home/public/static/js/paginationBar.js"></script>
<script type="text/javascript">
    $(function () {
        $("#contList").find('.list:visible').last().css({'border-bottom': 'solid 1px #ffffff'});
        $('#filterBar').live('click',function () {
            var $this = $(this);
            $this.toggleClass('active');
            var $contList = $("#contList"), curHeight = $contList.height(), autoHeight = $contList.css('height', 'auto').height();
            if(!$this.hasClass('active')){
                $('#arrow-top').hide();
                $('#arrow-bottom').fadeIn();
                $contList.css({overflow: 'hidden'}).stop().animate({height: '280px'}, 300).find('.list:nth-child(4)').css({'border-bottom': 'solid 1px #ffffff'});
            } else {
                $('#arrow-bottom').hide();
                $('#arrow-top').fadeIn();
                $contList.height(curHeight).stop().animate({height: autoHeight}, 300).find('.list:nth-child(4)').css({'border-bottom': 'solid 1px #f1f1f1'});
            }
        });

        // 分页回调
         function pagerCall(index) {
             window.location.href = $("#pagerUrl").val().replace("#num", index);
         }
         paginationBar('pageBar', pagerCall, $("#dataTotal").val(), $("#pageRow").val(), $("#pageIndex").val());
        //修改商品价格
        // $.each($('.clpr b'),function(v,o){console.log($(o).text(parseInt($(o).text())+parseInt(100*Math.random())+10));});
    });

    function toBuy(goodsId){
        var token = $cookie.get("vkoweb");
        if(token){
            location.href=payPath+"/pay/order/buyCard?id="+goodsId;
        }else{
            showLogin();
        }
    }
</script>

<script type="text/javascript">
$(function(){
    var stage_id = $("#stage_id").val();
    $(".stage"+stage_id).parent('li').attr('class','check');
   
    var stage_child_id = $("#stage_child_id").val();
    $(".high"+stage_child_id).parent('li').attr('class','check');

    var subject_id = $("#subject_id").val();
    $(".subject"+subject_id).parent('li').attr('class','check');

    var type = $("#type").val();
    $(".type"+type).parent('li').attr('class','check');

  
});
</script>
</body>
</html>