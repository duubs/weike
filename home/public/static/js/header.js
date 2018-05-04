//2016-04-14
var staticPath = 'http://static.vko.cn/v8';
var ssoPath = 'http://sso.vko.cn';
var showHea = true;
//获取指定名称的cookie的值
function getCookieByName(objname){
    var arrstr = document.cookie.split("; ");
    for(var i = 0;i < arrstr.length;i ++){
        var temp = arrstr[i].split("=");
        if(temp[0] == objname){
            return unescape(temp[1]);
        }
    }
    return "";
}
//分站域名处理——为简单方便
var header_host = 'http://vk.home.com/';
var vkodomain = getCookieByName('vkodomain');
if(vkodomain != null && vkodomain != '') {
    if(vkodomain=='www.vko.cn'){
        //删除vko_fzId的cookie
        utils_delCookie("vko_fzId");
        utils_delCookie("fz_city");
        utils_delCookie("fz_province");
    }
    header_host = 'http://'+vkodomain;
}
//分站域名处理——end
function getcurHref() {
    return location.href;
}


//获取cookie  
function getCookie(c_name)
{
if (document.cookie.length>0)
  {
  c_start=document.cookie.indexOf(c_name + "=")
  if (c_start!=-1)
    { 
    c_start=c_start + c_name.length+1 
    c_end=document.cookie.indexOf(";",c_start)
    if (c_end==-1) c_end=document.cookie.length
    return unescape(document.cookie.substring(c_start,c_end))
    } 
  }
return ""
}

function showHeader(){
    //公告已经不在这里了，这个js本身会被浏览器缓存 请在 103.17.40.35 的 /home/static/statistics/h.js 上加
    //var sorry = $('<div class="sorry"><p><span id="s_cancel"></span><b>微课网公告：</b>尊敬的用户，因苹果IOS9系统于9月16日上线推广，苹果公司开始对企业版应用软件进行调整，大批企业版平台发布的应用均受到影响。近期，持苹果手机的用户，在使用微课圈应用时，会出现无法下载、登录闪退等现象（安卓版不受影响），微课网正在与其沟通并按其流程解决此事，预计10天左右恢复使用，到时我们会即刻通知用户，对此给您带来的不便深表歉意。</p></div>').appendTo($('body'));

    /*var divObj=document.createElement("div");
     //divObj.setAttribute('id','topAlert');
     divObj.innerHTML='警告：转载www.daimajiayuan.com网站文章不带原文链接者，本站有权追究其法律责任！'; */


    var header = document.createElement("div");
    header.setAttribute('id','header');
    header.setAttribute('class','toptit');
    var first=document.body.firstChild;//得到页面的第一个元素
    document.body.insertBefore(header,first);

    var divuserCount='<span id="tempuserCount"></span><span id="divuserCount" style="display: none;">-</span>';
    var loginState = isLogin();
    var mainHtml = '<div class="new-main">'
        + '<div style="width:auto">'
        + '<div class="mainleft">'

        + '<ul class="topNav">'

        + '<li class="dlzs"><a target=_blank href="'+header_host+'">招商加盟</a></li><span></span>'
        + '<li><a href="'+header_host+'">微课网</a></li><span></span>'
        + '<li><a href="'+header_host+'">微课圈（移动端）</a></li><span></span>'
        + '<li><a href="'+header_host+'">微课云</a></li><span></span>'
        + '<li><a href="'+header_host+'">微课帮</a></li><span></span>'
        + '<li><a class="rec_stu" href="'+header_host+'">自主招生</a></li><span></span>'
       // + '<li class="">假期服务：15210969035或13683629885</li>'
        + '<li class="hotline">4008900800</li>'
        + '</ul>'
        + '</div>'
        + '<div class="mainright">'
        + '<ul class="topNav" id="unlogin_6plus">';
    //登录&注册 未登录
    console.log("登录state:"+loginState);
    if (getCookie('name') == "") {
        mainHtml += 
            '<li class="log"><a target=_blank  href="/index/operation/login">登录</a></li>'
            + '<li class="reg"><a target="_blank" href="/index/operation/reg" >注册</a></li>';
    } else {
        mainHtml += '<li class="userPic">'
            +'<div class="user_info_new clearfix">'//用户信息start
            +'<p class="user_pic_new"><a href="">'
            +'<img id="profile_6plus" onerror="javascript:nofind(this,\'user\',\'large\');" '
            +'src="http://static.vko.cn/upload/pic/user/face/#" width="50" height="50"/></a>'
            +'<span class="vip" id="s_vip_tag" style="display:none;"><img src="http://static.vko.cn/v8/v8s/common/images/vip.png" alt="" /></span><i class="msgTips"></i></p>'
            +'<p class="user_name_new"><span class="uName">'+decodeURI(getCookie('name'))+'</span>&nbsp;&nbsp;您好</p>'
            +'</div>'
            +'</li>';//用户信息end
    }
    + '</ul>'
    + '</div></div></div></div>';

    $(function(){
         $('.user_info_new').click(function(){
            var html = "";
            html += '<div class="user_list_new">'
            // +'<a href="#"><i class="banqunIco"></i>我的班级<span class="msg" style="display:none">13</span></a>'
            +'<a href="/index/learningcenter/order"><i class="webIcon orderIco"></i>我的订单</a>'
            +'<a href="/index/learningcenter/information"><i class="webIcon setIco"></i>个人设置</a>'
            +'<a href="/index/operation/signOut"><i class="webIcon tuiIco"></i>退出登录<span></span></a>'
            +'</div>';
            $('.user_name_new').append(html)
        })
    })
   

    var logoAreaHtml = '<div class="logoarea">'
        + '<div class="new-main">'
        + '<div class="logoapart"><a class="zgLogo ziHide" href="'+header_host+'">子贵网</a><a class="vkoLogo" href="'+header_host+'">微课网</a></div>'
        + '<div class="substat" style="margin-top: 30px;"><ul>'/*分站 start*/
        +'<li id="fircity"><p class="sitePlan"><a target="_blank" href="'+header_host+'"><span class="siteIcon"></span>千城运营计划</a></p>'
        +'<p class="cityPart"><span class="nowCity thisCity">北京</span><a class="changeCity" target="_blank" href="/index/index/city">【切换城市】</a></p>'
        +'</li></ul></div>'/*分站 end*/
        +'<div class="nav"><div class="new-main">'/*nav start*/
        + '<ul class="navli">'
        + '<li class="nav_home"><a href="http://vk.home.com/">首页</a></li>'
        + '<li><a href="/index/course/course">课程</a><span class="navn"></span></li>'
        + '<li><a href="/index/teacher/teacher">名师</a></li>'
        + '<li><a href="#">题库</a></li>'
        + '<li><a href="/index/Operation/login">学习中心</a></li>'
        + '<li><a href="/index/audition/audition">试听</a></li>'
        
        + '</ul>'
       
        + '</div></div>'/*nav end*/

        + '<form id="searchform" action="'+header_host+'index/index/search" method="get"><div class="search"><input id="searchCont" type="text" placeholder="请输入查找的内容" name="key"/><button id="searchButton" type="button"></button></form></div>'
        + '</div></div>';

    var loginDiv = '    <!-- 模态窗口 登录框  start-->'
        + '<div class="login_mt" style="display:none;">'
        + '<div class="log_top"><span class="log_x" onclick="hideLogin()"></span>欢迎您来到微课网，请登录</div>'
        + '<div class="log_left"><form id="loginForm" action="' + ssoPath + '/ajaxlogincom?&destinationUrl=' + getcurHref() + '">'
        + '<p><input type="text" name="loginName" id="loginName" placeholder="邮箱/手机号" class="d_text" value=""></p>'
        + '<p id="error_area"><input type="password"  name="temppasd" id="temppasd" placeholder="请输入密码" class="d_pass" value="">'
        + '<input name="password" id="password" type="hidden" ></p>'
        + '<p><label for=""><input type="checkbox" id="rememberMe" name="rememberMe" class="d_checkbox">下次自动登录</label><a class="log_forget" href="#">忘记密码？</a></p>'
        + '<p><a href="javascript:;" class="log_dl">登录</a></p>'
        +'<p class="register_p"><b>没有账号？</b><a target="_blank" class="log_zc" href="http://www.vko.cn/home/reg.html">新用户注册</a></p>'
        + '</form></div>'
        + '<div class="log_right"><dl>'
        + '<dt class="lr_title"><a href="">使用社交账户直接登录</a></dt>'
        + '<dd class="lr_wx"><a href="http://www.vko.cn/thirdpartyregister.html?keyName=weixinService&destUrl=' + getcurHref() + '" title="微信登录"'+'>微信登录</a></dd>'
        + '<dd class="lr_qq"><a href="http://www.vko.cn/thirdpartyregister.html?keyName=31qqService&destUrl=' + escape(getcurHref()) + '">使用腾讯QQ登录</a></dd>'
        + '<dd class="lr_wb"><a href="http://www.vko.cn/thirdpartyregister.html?keyName=sinaService&destUrl=' + escape(getcurHref()) + '">使用新浪微博登录</a></dd>'
        //+ '<dd class="lr_rr"><a href="http://www.vko.cn/thirdpartyregister.html?keyName=renrenService&destUrl=' + escape(getcurHref()) + '">使用人人账号登录</a></dd>'
        + '</dl></div></div>'
        + '<div class="mt_log" style="display:none;"></div>'
//      + '<!-- 模态窗口 登录框  end-->';
    $(header).before(loginDiv);
//    $(header).after(navHtml);
//    $(header).after(logoAreaHtml);
//  从cookie中获取fz_id,fz_city,fz_province
    var fz_id = utils_getCookie("vko_fzId");
    
//  获取分站地址信息
    function fz_ajax_schoolInfo(){
        $.ajax({
            type:"GET",
            url:header_host+"/schoolInfo",
            dataType:"jsonp",
            success: function (data) {
                if(data!=null&&data.code=="success"){
                    var province = data.data.provinceName;
                    var city = data.data.cityName;
                    $("#fz_city").text(city);
                    $("#fz_city").attr('title',province+'--'+city);
                    var d_tle = $(document).attr("title");
                    $(document).attr("title",city + d_tle);
                    if($(".s_fz_city").length > 0){
                        //找到元素则赋值
                        $(".s_fz_city").text(city).show();
                    }
                }
            },  
           error: function(data) {
//             alert("网络错误，请重试");
           }
        });
    }
//  判断是否为官网或分站，选择显示地区
    if(fz_id) {
        $(header).after(fz_logoAreaHtml);
        fz_ajax_schoolInfo();
    } else {
        $(header).after(logoAreaHtml);
    }

    $(header).html(mainHtml);
    //判断当前请求的地址，在导航栏高亮显示
    highNav();

    if( typeof showTopCommon === 'function' ){
        showTopCommon();
    }
    //注册登录onclick事件
    $('.log_dl').click(function(){
        login();
    });
    //注册班级登录onclick事件
    $('#bqUserBtn').click(function(){
        login4School();
    });

    //注册登录onclick事件
    $(document).bind('keyup', function(e){
        // 回车键事件
        if(e.which == 13) {
            login();
            return false;
        }
    });
    //用户信息显示隐藏&班群登陆框显示
    $('.userPic').on('click',function () {
        $(this).addClass('cur');
        $(this).find('.user_list_new').fadeIn();
    })
    $('.user_list_new').mouseleave(function () {
        $(this).parents('.userPic').removeClass('cur');
        $(this).fadeOut();
    })
    $('.banqunLoginBtn').on('click',function () {
        $(this).parent('.banqun').addClass('banqun-high');
        $(this).next('.banqunLoginBox').fadeIn();
    })
    $('.banqunLoginBox').mouseleave(function () {
        $(this).parent('.banqun').removeClass('banqun-high');
        $(this).fadeOut();
    })

    //活动
    var $active=$("#active"),
        $act_class=$active.attr("class"),
        $me=$(".me").attr("class");
    //alert(a);
    if($act_class=="nav-high"){
        $active.find("span.me").addClass("me_h");
        $active.on("mouseover",function(){
            $active.find("span.me").addClass("me_h");
        });
        $active.on("mouseout",function(){
            $active.find("span.me").addClass("me_h");
        });
    }else{
        $active.find("span.me").removeClass("me_h");
        $active.on("mouseover",function(){
            $active.find("span.me").addClass("me_h");
        });
        $active.on("mouseout",function(){
            $active.find("span.me").removeClass("me_h");
        });
    }

    //分站
    $('#fircity').mouseenter(function () {
        $('.fenzan').show();
        $(this).find('.nowCity').addClass('border');
        $(this).find('i').addClass('citych_h');
    }).mouseleave(function () {
        $('.fenzan').hide();
        $(this).find('.nowCity').removeClass('border');
        $(this).find('i').removeClass('citych_h').addClass('citych');
    });
    $('.fenzan').delegate('dd', 'click', function () {
        var cityname = $('#fircity').find('i');
        var nowtxt = $(this).find("span").text();
        cityname.text(nowtxt);
    });

    //系统维护
    $(".sorry").delegate("span","click",function(){
        $(this).parents(".sorry").css("display","none");
    });

    //搜索事件
    $('#searchButton').click(function(){
        var searchtxt=$.trim($('#searchCont').val());
        if(searchtxt && searchtxt.length > 0 ){
            $("#searchform").submit();
        }else{
            vkoAlert("请输入关键词!");
        }
    });

    $('#searchCont').bind("keypress",function(e){
        // 回车键事件
        if(e.which == 13) {
            $('#searchButton').click();
            return false;
        }
    });

    //用户菜单
    initMemMenu();
}

function vkoAlert(mssage){
    if(mssage == "操作失败"){
        console.log("操作失败");
        return;
    }
    var tip = "<div class='shopcar-tips' style='display:none;'>"+mssage+"</div>";
    $("body").append(tip);
    $(".shopcar-tips").fadeIn(100).fadeOut(2000);
    setTimeout(function(){
        $(".shopcar-tips").remove();
    }, 3000);
}

function vkoConfirm(message){
    return confirm(message);
}

function highNav(){
    var curHref = location.href;
    //console.log(curHref);
    var navItems = $('.navli').children();
    if(curHref == 'http://www.vko.cn/'){
        $(navItems[0]).addClass('nav-high');
        return ;
    }
    for (var i = 0;i < navItems.length;i++) {
        var nav = $(navItems[i]);
        var item = nav.find('a');
        //console.log(item.attr('href'));
        //if(!isEmpty(item) && curHref.indexOf(item.attr('href')) > -1){
        if(!isEmpty(item) && curHref == item.attr('href')){
            nav.addClass('nav-high');
        }
    }
    $(navItems[0]).removeClass('nav-high');
}

showHeader();

$(function(){
    //修改meta属性值 兼容IE  <meta http-equiv="X-UA-Compatible" content="IE=7,IE=9">
    $('meta[http-equiv="X-UA-Compatible"]').attr('content','IE=7,IE=9');
    // logo处理：显示合作商的logo
    showPartnerLogo();
    //定时发送，判断是否已在其他地方登录 单位：毫秒
    setInterval(isLoginForAliunde, 8*1000);
    //定时发送，判断是否已使用微课圈扫描登录 单位：毫秒
    setInterval(isLoginForVkoApp, 1000);
    //头部统计在线人数
    $.ajax({
        type:"GET",
        url:"http://www.vko.cn/userCount.html",
        dataType:"jsonp",
        success: function (data) {
            if(data!=null&&data!="")
                $('#tempuserCount').text(data);
        },
        error: function(data) {
        }
    });
});
//试听hover
$("#try").on("hover",function(){
    $(".subNav").toggle();
});

//logo处理：显示合作商的logo、footer、导航、微课圈下载提示、
function showPartnerLogo(){
    var thdType = $cookie.get('thdType');
    if(typeof(thdType) != 'undefined' && thdType == '6'){
        hideSomethingOfPartner();
        return ;
    }

    //
    var uid = $cookie.get('uid');
    thdType=6;
    $.ajax({
        type:"GET",
        url:"http://www.vko.cn/v8/thdLogoShow.html",
        dataType:"jsonp",
        data:{
            uid:uid,
            thdType:thdType
        },
        success: function (data) {
            if(data!=null&&data!=""&&data.code=="success"){
                $cookie.set('thdType', data.data);
                if(data.data == '6'){
                    hideSomethingOfPartner();
                }
            }
        },
        error: function(data) {
        }
    });
}

//查询登录是否会员
function showOpenMember(){
    if($("#a_open_member").length<=0){
        return;
    }
    $.ajax({
        type:"GET",
        url:apiPath+"/user/memberBasicInfo",
        dataType:"jsonp",
        data:{
        },
        success: function (data) {
            if(data.code==0){
                if(!data.data.checkMember){
                    $("#a_open_member").parent("li").show();
                    return;
                }
                if(data.data.checkMember == false){
                    $("#a_open_member").parent("li").show();
                }else{
                    $("#s_vip_tag").show();
                }
            }
        },
        error: function(data) {
        }
    });
}
showOpenMember();


//隐藏元素：合作商的logo、footer、导航、微课圈下载提示、
function hideSomethingOfPartner(){
    $('.zgLogo').removeClass('ziHide'); //显示logo
    $('.mainleft span b').html("这里"); //修改文字
    $('.substat #fircity').addClass('vkohide'); // hide 分站
    $('.memname_list').remove(); //删除个人信息链接
    $('.footer .new-main').addClass('vkohide'); //hide footer
    $('.footer .footer_partner').removeClass('vkohide'); //hide 合作电话
    $('#head_shoppingcart_v8').addClass('vkohide'); // hide 购物车
    $('.mainright').addClass('vkohide'); //隐藏 客户端
    $('.navli li').addClass('vkohide'); // hide 导航
    $('.navli li:.nav_course').removeClass('vkohide'); //显示选课
    $('.navli li:.nav_tiku').removeClass('vkohide'); //显示题库

    $('.topNav .dlzs').addClass('vkohide'); //隐藏代理招商
    $('.topNav .app').addClass('vkohide'); //隐藏移动端
    $('.topNav .hoteline span').text('400-990-2312');//显示合作商热线电话


    setTimeout(function(){$('.text').addClass('vkohide'); $('.rarright .quan').addClass('vkohide');}, 800); // hide 客服 , 注意下载微课圈
}

// 检测是否在其他地方登录
function isLoginForAliunde(){
    var token = $cookie.get('vkoweb');
    //未登录的不检测
    if(typeof(token) == 'undefined' || token == ''){
        return ;
    }

    $.ajax({
        type:"GET",
        url:"http://sso.vko.cn/isLoginForAliunde.html",
        dataType:"jsonp",
        data:{
            token:token
        },
        success: function (data) {
            if(data!=null&&data!=""&&data.code=="success"){
                var time = data.data.time;
                if(typeof(time) == 'undefined' || time == ''){
                    return ;
                }
                alert("您的账号于  "+time+" 在其他设备登录，如果这不是您的操作，请及时修改您的登录密码");
            }
        },
        error: function(data) {
        }
    });
}

function toReg(){
    var hostname = window.location.hostname,toRegUrl='http://www.vko.cn/reg.html?act=register';
//  hostname='vkoyizhong.vko.cn';
    if(hostname=='www.vko.cn'){
        window.open(toRegUrl);
    }else{
        var w = window.open(),_url="/schoolInfo";
        _url="http://"+hostname+"/schoolInfo";
        $.ajax({
            type:"GET",
            url:_url,
            dataType:"jsonp",
            success: function (data) {
                if(data!=null&&data.code=="success"){
                    if($('.domain_schoolName')){
                        $('.domain_schoolName').text(data.data.schoolName);
                    }
                    w.location = toRegUrl+'&fzId='+data.data.id;
                }
            },  
           error: function(data) {
               w.close();
//             alert("网络错误，请重试");
           }
        });
    }
}

//检测是否有微课圈扫描登录
function isLoginForVkoApp(){
//  return ;

    var token = $cookie.get('vkoweb');
    //已登录的不检测,或为弹出登录框
    if( (typeof(token) != 'undefined' && token != '') || $('.login_mt:visible').length == 0){
        return ;
    }
    var qrcode = $cookie.get('lgn_qrcode_');
    $.ajax({
        type:"GET",
        url:"http://sso.vko.cn/isLoginForQrcode.html",
        dataType:"jsonp",
        data:{
            qrcode:qrcode
        },
        success: function (data) {
            if (!isEmpty(data.message)) {
                if("二维码为空！|还未登录".indexOf(data.message)==-1){
                    _showError($('#error_area'),data.message);
                }
                return ;
            }
            if (typeof(loginCallback) != 'undefined') {
                loginCallback();
            }
            currentUser = vkouser(data);

            // $cookie.set('vkouser', currentUser.name);
            if(isEmpty(currentUser.profile)){
                currentUser.profile = '/v5/images/vkoweb/pic/user404';
            }

            currentUser.isLogin = !isEmpty(currentUser.id);
//            refreshHead();
            hideLogin();
            var $logreg = $('#unlogin_6plus');
            $logreg.append(getLoginAreaHtml());
            initMemMenu();
            showOpenMember();
            if (typeof(getTopicInfo) != 'undefined'  ) {
                getTopicInfo($('#goodsId').val(),'getTopicCallback');
            }

        },
        error: function(data) {
        }
    });
}