var wwwHost = "http://www.vko.cn";
function showFooter() {
	var footer = $('<div class="footer">').appendTo('body');
	var footerHtml = '<div class="new-main">'
		+ '<dl class="about">'
		+ '<dt><a target="_blank" href="'+wwwHost+'/about.html" title="关于我们">关于我们</a>|</dt>'
		+ '<dd><a target="_blank" href="'+wwwHost+'/suggest.html" title="投诉建议">投诉建议</a>|</dd>'
		+ '<dd><a target="_blank" href="'+wwwHost+'/service.html" title="服务条款">服务条款</a>|</dd>'
		+ '<dd><a target="_blank" href="'+wwwHost+'/hr.html" title="诚聘英才">诚聘英才</a>|</dd>'
		+ '<dd><a target="_blank" href="'+wwwHost+'/protection.html" title="隐私保护">隐私保护</a>|</dd>'
		+ '<dd><a target="_blank" href="'+wwwHost+'/contact.html" title="联系我们">联系我们</a></dd>'
		+ '</dl><p style="position: absolute; right: 10px; line-height: 27px; color: #b7b7b7;">版权所有：北京微课创景教育科技有限公司 www.vko.cn 京ICP备12002746号</p></div>'

	footer.append(footerHtml);
}

function showExpress() {
	$.ajax({
    	url: wwwHost+'/login/express.json',
		type: "POST",
		dataType: 'jsonp',
		cache: false,
		data:{total:5},
		jsonp: 'callback',
		success: function(data, textStatus) {
			listExpress(data);
		},
		complete: function(XMLHttpRequest, textStatus) {
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
		}
	});
}

function listExpress(expressList) {
		var $showArea = $('.news');
		for (var i = 0; i < expressList.length; i++ ) {
			var express = expressList[i];
			var rowHtml = '<dd><a target="_blank" href="'+wwwHost+'/expdetail/' + express.id + '.html' 
				+ '">' + express.name + '</a> <span>' + dateFormat(express.ctime,'yyyy-MM-dd') + '</span></dd>';
			$showArea.append(rowHtml);
		}
}
if(showHea){
	showFooter();
}else{
	$("#side-bar").css("display","none");
}
//var timer;
function kfClear(){
	console.log("--"+12);
	if($("#side-bar").length>0){
		$("#side-bar").hide().css("display","none");
		window.clearInterval(kf_timer);
	}
}

function showMdUserInfoDialog() {
	var wsMobile = $('<div id="ws_mobile" class="regNew reg" style="height:380px;display:none;">').appendTo('body');
	var wsMobileHtml = '<div class="title">请绑定您的手机号</div>'
		+ '<form action="">'
		+ '<div class="phone">'
		+ '<input type="text" id="b_mobile" placeholder="手机号" name="loginNamevko">'
		+ '</div>'
		+ '<p class="tip" id="tip_mobile"><!--请输入您的手机号码--></p>'
		+ '<div class="send">'
		+ '<input type="text" class="yan" id="code_mobile" placeholder="请输入验证码" name="checkCodevko"]>'
		+ '<input type="button" id="btn" value="发送验证码" onclick="sendemailvko()" />'
		+ '<p class="tip" id="tip_code"><!--请输入验证码--></p>'
		//+ '<input type="text" class="pwd" placeholder="请输入6-20位密码，数字/字母/符号等">'
		+ '</div>'
		//+ '<p class="tip"><!--密码长度6-20位--></p>'
		+ '<a class="login-btn" id="mobile_btn" >确定</a></form>';
	wsMobile.append(wsMobileHtml);
	var userinfo = $('<div id="ws_uinfo" class="regNew person" style="height:480px;display:none;">').appendTo('body');
	var userinfoHtml = ''
		+ '<div class="title">请完善您的信息</div>'
		+ '<form action="">'
		+ '<p class="s_p1">选择所在城市</p>'
		+ '<select id="ws_sheng" name=""class="s_sheng" onchange="getCity()">'
		+ '<option value="0">省/直辖市</option>'
		+'<option value="11">北京</option>'
		+'<option value="12">天津</option>'  
		+'<option value="13">河北</option>'  
		+'<option value="14">山西</option>'  
		+'<option value="15">内蒙古</option>'
		+'<option value="21">辽宁</option>'  
		+'<option value="22">吉林</option>'  
		+'<option value="23">黑龙江</option>'
		+'<option value="31">上海</option>'  
		+'<option value="32">江苏</option>'  
		+'<option value="33">浙江</option>'  
		+'<option value="34">安徽</option>'  
		+'<option value="35">福建</option>'  
		+'<option value="36">江西</option>'  
		+'<option value="37">山东</option>'  
		+'<option value="41">河南</option>'  
		+'<option value="42">湖北</option>'  
		+'<option value="43">湖南</option>'  
		+'<option value="44">广东</option>'  
		+'<option value="45">广西</option>'  
		+'<option value="46">海南</option>'  
		+'<option value="50">重庆</option>'  
		+'<option value="51">四川</option>'  
		+'<option value="52">贵州</option>'  
		+'<option value="53">云南</option>'  
		+'<option value="54">西藏</option>'  
		+'<option value="61">陕西</option>'  
		+'<option value="62">甘肃</option>'  
		+'<option value="63">青海</option>'  
		+'<option value="64">宁夏</option>'  
		+'<option value="65">新疆</option>'  
		+'<option value="71">台湾</option>'  
		+'<option value="81">香港</option>'  
		+'<option value="82">澳门</option>'  
		+ '</select>'
		+ '<select id="ws_shi" name=""class="s_shi"  onchange="getarea()">'
		+ '<option value="0">城市</option>'
		+ '</select>'
		+ '<select id="ws_qu" name=""class="s_qu">'
		+ '<option value="0">区县</option>'
		+ '</select>'
		+'<p class="tip" id="citytip"></p>'
		+ '<p class="s_p2">选择年级</p>'
		+ '<ul id="ws_grade">'
		+ '<li class="ye" value="5">高三</li>'
		+ '<li value="4">高二</li>'
		+ '<li value="3">高一</li>'
		+ '<li value="2">初三</li>'
		+ '<li value="1">初二</li>'
		+ '<li value="0">初一</li>'
		+ '<li value="11">小六</li><li value="10">小五</li><li value="9">小四</li>'
		+ '<li value="8">小三</li><li value="7">小二</li><li value="6">小一</li>'
		+'<p class="tip" id="gradetip"></p>'
		+'<input type="hidden" id="gradevalue"/>'
		//+ '</ul><button class="updatecitygrade">提交</button></form>';
		+ '</ul><a class="updatecitygrade">提交</a></form>';
		//+ '</div>'
		//+ '<div class="reg_log" style=""></div>';

	userinfo.append(userinfoHtml);
}
//showMdUserInfoDialog();
//根据返回值验证 弹出对应的完善框
function checkUserInfo() {
	$.ajax({
    	url: 'http://api.vko.cn/user/checkUserInfo',
		type: "GET",
		dataType: 'jsonp',
		data:{},
		jsonp: 'callback',
		success: function(data) {
			if(data.code == "0"){
				if(data.data.mobileState == true){
					//$('#ws_mobile,.mt_log').show();
				}else if(data.data.gradeState == true || data.data.cityState == true){
					$('#ws_uinfo,.mt_log').show();
				}
			}
					
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
		}
	});
}

$(document).ready(function(){
	var statjs = document.createElement("script");statjs.type="text/javascript";statjs.src="http://static.vko.cn/v8/common/js/stat.js";document.body.appendChild(statjs);
	showExpress();
	if(!showHea){
		kf_timer = window.setInterval("kfClear()",1000);
		
	}
	
	//年级默认高三
	$("#gradevalue").val(5);
    // 选择年级
		$("#ws_grade").find("li").bind('click',function(){
			//$(this).addClass("ye").parent().siblings("ws_grade").find("li").removeClass("ye");
			if($(this).text()!="*"){
				$("#ws_grade").find("li").removeClass("ye");
				$(this).addClass("ye");
				$("#gradevalue").val($(this).attr("value"));
			}
		});
    
		$('input[name="loginNamevko"]').bind("blur",function(){
			var $this = $(this),phone = $this.val();
			var reg = /^((1)+\d{10})$/;
			if(phone == ''){
				$("#tip_mobile").html('请输入您的手机号');
				$(".phone").addClass("redDIV")
				return;
			}
			if(!phone.match(reg)){
				$("#tip_mobile").html('请输入正确的手机号');
				 $(".phone").addClass("redDIV")
				return;
			}
			$("#tip_mobile").html('');
			 $(".phone").removeClass("redDIV")
		});
		
		// 验证短信验证码
		$("input[name='checkCodevko']").bind('blur',function(){
			var $this=$(this),loginName = $this.parents().find('input[name="loginNamevko"]').val(), code= $.trim($this.val());
			if(loginName == ''){
				return;
				}
			if(code == ''){
				 $("#code_mobile").addClass("redDIV");
				$("#tip_code").html('请输入短信验证码');
				return;
			}
			 $("#code_mobile").removeClass("redDIV");
				$("#tip_code").html('');
			$.ajax({
				   type: "GET",
				   url: 'http://websso.vko.cn/registered/checkcodejp.html',
				   dataType:"jsonp",
				   jsonp: "jsonpCallback",
				   data:{
		    				loginName:loginName,
		    				checkCode:code
					},
				success:function(data){
					if(data.code=="success"){
					}else{
							$("#code_mobile").addClass("redDIV")
							$("#tip_code").html('短信验证码不正确');
	    		    		return;
						
					}
				},
				error:function(jpXHR,textStatus,errorThrown){
						$("#code_mobile").addClass("redDIV")
						$("#tip_code").html('短信验证码不正确');
			    		return;
				}
			});
			
		});
		$(".updatecitygrade").attr('onClick','updatecity()');
		$("#mobile_btn").attr('onClick','updateMoblieStatue()');
		var token = utils_getCookie('vkoweb');
		if(token !=''){
			//checkUserInfo();
		}
		
}); 



//查询市级别
function getCity() {
	var parentNo=$("#ws_sheng option:selected").val();
	var s = '<option value="0">城市</option>';
	if(parentNo=='11'||parentNo=='12'||parentNo=='31'||parentNo=='50'){
		s += '<option value='+parentNo+'>'+$("#ws_sheng option:selected").text()+'</option>';
		$('#ws_shi').html(s);
		return;
	}
	$.ajax({
    	url: 'http://api.vko.cn/base/queryOrg',
		type: "GET",
		dataType: 'jsonp',
		data:{
			parentNo:parentNo
		},
		jsonp: 'callback',
		success: function(data) {
			if(data.code==0){
				var s;
				if(data){
					
					if(data.data.length>0){
						for(var i=0;i<data.data.length;i++){
							s += '<option value='+data.data[i].no+'>'+data.data[i].name+'</option>';
						}
					}
				}
				$('#ws_shi').html(s);
			}
			
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
		}
	});
}

//查询区县
function getarea() {
	var parentNo=$("#ws_shi option:selected").val();
	$.ajax({
    	url: 'http://api.vko.cn/base/queryOrg',
		type: "GET",
		dataType: 'jsonp',
		data:{
			parentNo:parentNo
		},
		jsonp: 'callback',
		success: function(data) {
			if(data.code==0){
				var s;
				if(data){
					var s = '<option value="0">区县</option>';
					if(data.data.length>0){
						for(var i=0;i<data.data.length;i++){
							s += '<option value='+data.data[i].no+'>'+data.data[i].name+'</option>';
						}
					}
				}
				$('#ws_qu').html(s);
			}
			
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
		}
	});
}

//保存城市年级
function updatecity() {
	var ws_sheng=$("#ws_sheng option:selected").val();
	var ws_shi=$("#ws_shi option:selected").val();
	var ws_qu=$("#ws_qu option:selected").val();
	var ws_grade=$("#gradevalue").val();
	
	if(ws_sheng == "" || ws_sheng == "0"){
		$("#citytip").html('请选择省/直辖市');
		//$("#ws_sheng").addClass("redDIV")
		return;
	}else if(ws_shi == "" || ws_shi == "0"){
		$("#citytip").html('请选择城市');
		//$("#ws_shi").addClass("redDIV")
		return;
	}else if(ws_grade == "" || ws_grade == "-1"){
		$("#gradetip").html('请选择年级');
		return;
	}else{
		$("#citytip").html('');
		$("#gradetip").html('');
		$.ajax({
	    	url: 'http://api.vko.cn/user/updatecity',
			type: "GET",
			dataType: 'jsonp',
			data:{
				provinceId:ws_sheng,
				cityId:ws_shi,
				areaId:ws_qu,
				grade:ws_grade
			},
			jsonp: 'callback',
			success: function(data) {
				if(data.code=="0"){
					$('#ws_uinfo,.mt_log').hide();
				}
				
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
			}
		});
	}
}


//保存手机号
function updateMoblieStatue() {
	var reg = /^((1)+\d{10})$/;
	var b_mobile = $("#b_mobile").val();
	var checkCode = $("#code_mobile").val();
	if(loginName == ""){
		$("#tip_mobile").html('请输入手机号');
		$("#phone").addClass("redDIV")
		return;
	}else if(!b_mobile.match(reg)){
		$("#tip_mobile").html('请输入正确的手机号');
		 $(".phone").addClass("redDIV")
		return;
	}else if(checkCode == ""){
		$("#tip_code").html('请输入验证码');
		$("#code_mobile").addClass("redDIV")
		return;
	}else{
		$("#citytip").html('');
		$("#gradetip").html('');
		$.ajax({
	    	url: 'http://api.vko.cn/user/updateMobileState',
			type: "GET",
			dataType: 'jsonp',
			data:{
				mobile:b_mobile,
				checkCode:checkCode
			},
			jsonp: 'callback',
			success: function(data) {
				if(data.code=="0"){
					$('#ws_mobile,.mt_log').hide();
				}else{
					if(data.msg == "1"){
						$("#tip_mobile").html('手机号已经注册账号');
						$("#phone").addClass("redDIV")
					}else if(data.msg == "2"){
						$("#tip_code").html('验证码输入错误');
						$("#code_mobile").addClass("redDIV")
					}else{
						alert(data.msg);
					}
				}
				
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
			}
		});
	}
}
var countdown=60;
var sendemailvko = function(){
	 var phonevko= $("#b_mobile").val();
	 
		 var reg = /^((1)+\d{10})$/;
		 if(phonevko == ''){
				$("#tip_mobile").html('请输入您的手机号');
				$(".phone").addClass("redDIV")
				return;
			}
			if(!phonevko.match(reg)){
				$("#tip_mobile").html('请输入正确的手机号');
				 $(".phone").addClass("redDIV")
				return;
			}
		
		var obj = $("#btn");
		settime(obj); 
	
   		    		$("#tip_mobile").html('');
   				 $(".phone").removeClass("redDIV")
   		    		$.ajax({
	    		    		url:'http://websso.vko.cn/registered/sendCodejp.html',
	    					   dataType:"jsonp",
	    					   jsonp: "jsonpCallback",
	    					   data:{
	    						   loginName:phonevko
	    						},
   						success:function(data){
   							if(data.code=="success"){
   							}else{
   								if(data.data == "2"){
   									$("#tip_mobile").html('此手机号已被注册');
   									$(".phone").addClass("redDIV")
   									return;
   								}
   									alert(data.msg);
   									$this.css("cursor", "pointer");
   			    		    		return;
   								
   							}
   						},
   						error:function(jpXHR,textStatus,errorThrown){
   		    	    		$this.css("cursor", "pointer");
   						}
   					});
   				 
}
function settime(obj) { //发送验证码倒计时
	
    if (countdown == 0) {
        obj.attr('disabled',false);
        //obj.removeattr("disabled");
        obj.val("发送短信验证码");
        obj.css('backgroundColor','#ffe300')
        countdown = 60;
        return;
    } else {
        obj.attr('disabled',true);
        obj.css('backgroundColor','#eeeeee')
        obj.val("重新发送(" + countdown + ")");
        countdown--;
    }
    setTimeout(function() {
            settime(obj) }
        ,1000)
}