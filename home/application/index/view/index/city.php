
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0086)http://www.vko.cn/changecity.aspx?PGTID=0d100000-0001-28d5-c819-48acca4fca30&ClickID=1 -->
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>微课网 - 中国专业在线教育微课程视频网站</title>
    <meta name="keywords" content="微课网,微课,在线教育,高中,初中,课程视频" />
    <meta name="description" content="微课网是以中考、高考为目标，提供初高中各学科的在线教育微课程视频，同时你可以和同学组成圈子互动答疑、测试并分享学习动态。"/>
    <link rel="stylesheet" href="http://static.vko.cn/v8/v8s/sitemap/common/css/style.css" />
    <!-- 右侧在线客服 -->
<link rel="stylesheet" type="text/css" href="_PUBLIC_/js/zxkf/iconfont.css">
<link rel="stylesheet" type="text/css" href="_PUBLIC_/js/zxkf/waiter.css">
<!-- end 右侧在线客服结束 -->
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
    <div id="header">
      <div id="headerinside">
        <a href="http://static.vko.cn/v8/activity/attractInvest/joinUs.html" target="_blank">
          <img src="http://static.vko.cn/v8/v8s/sitemap/common/images/city_map.png" id="city_map" />
        </a>
      </div>
    </div>
    <div class="topcity">
      <div class="index_bo dot">
        <div id="enterIPcity">
          <a  href="/" class="entrance">
            <b>进入 北京 微课网</b>
          </a>
        </div>
      </div>
      <dl id="clist">
        <dt class="quyu"></dt>
        <dt class="">热门</dt>
        <dd class="popular">
          <a href="#">北京</a>
          <a href="#">上海</a>
          <a href="#">天津</a>
          <a href="#">重庆</a>
          <a href="#">广州</a>
          <a href="#">石家庄</a>
          <a href="#">郑州</a>
          <a href="#">南京</a>
          <a href="#">伊春</a>
          <a href="#">太原</a>
          <a href="#">呼和浩特</a></dd>
        <!-- <dt class="quyu"><span>华东</span></dt> -->
        <?php foreach ($city as $key => $value) { ?>
        <dt><?=$key?></dt>
        <dd>
          <?php foreach ($value as $key => $val) { ?>
          <a href="#"><?=$val['r_name'] ?></a>
          <?php  } ?>
        </dd>
        <?php  } ?>
       </dl>
    </div>
    <div class="footer">
      <div class="new-main">
        <dl class="about">
          <dt>
            <a target="_blank" href="http://www.vko.cn/about.html" title="关于我们">关于我们</a>|</dt>
          <dd>
            <a target="_blank" href="http://www.vko.cn/suggest.html" title="投诉建议">投诉建议</a>|</dd>
          <dd>
            <a target="_blank" href="http://www.vko.cn/service.html" title="服务条款">服务条款</a>|</dd>
          <dd>
            <a target="_blank" href="http://www.vko.cn/hr.html" title="诚聘英才">诚聘英才</a>|</dd>
          <dd>
            <a target="_blank" href="http://www.vko.cn/protection.html" title="隐私保护">隐私保护</a>|</dd>
          <dd>
            <a target="_blank" href="http://www.vko.cn/contact.html" title="联系我们">联系我们</a></dd>
        </dl>
        <p style="position: absolute; right: 10px;top: 0; line-height: 27px; color: #b7b7b7;">版权所有：北京微课创景教育科技有限公司 www.vko.cn 京ICP备12002746号</p></div>
    </div>
    <script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/easyui/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">$(function($) {
        //通过调用新浪IP地址库接口查询用户当前所在国家、省份、城市、运营商信息
        $.getScript('http://pv.sohu.com/cityjson?ie=utf-8',
        function() {
          var city = returnCitySN.cid.substring(0, 4);
          console.log(city + "=======" + returnCitySN.cname);
          $.ajax({
            url: 'http://vkoyizhong.vko.cn/schoolInfo/getSchoolInfo',
            method: 'GET',
            dataType: 'jsonp',
            data: {
              "status": 1,
              "cityNo": city,
              "type": 3
            },
            success: function(data) {
              if (data.code == "success") {
                if (data.data != null && data.data != '') {
                  console.log("=======" + data.data.domain);
                  $("#a_enterIPcity").attr("href", data.data.domain).text("进入 " + returnCitySN.cname + " 微课网");
                }
              }
            },
            error: function(data) {
              //alert('网络错误');
            }
          });
        });
      });</script>
  </body>

</html>