var cz=false,gz=false;
var initUserInfo = function(){
	var str_u='<dl class="user_info">'
		   +'<dt><a href="/index/learningcenter/information">账户信息</a></dt>'
		   +'<dd>'
		   +'	<p><span>v币：</span><em id="em_vb"></em><a  href="http://www.vko.cn/topuplist.html">我的V币</a></p>'
		   //+'	<p><span>财富：</span>'+vcount+'v币<a href="'+rootPath+'/topup.html">充值</a></p>'
		   //+'	<p><span>积分：</span>'+samount+'<a href="'+rootPath+'/exchange.html">获得积分</a></p>'
		   +'	<p><span>会员：</span><a href="javascript:void(0);" onclick="myMemberDialog()">我的会员</a></p>'
		   +'	<p id="p_member1" style="display:none;"><span id="cz_member_txt">初中会员到期：</span><span id="sp_date"></span><a target="_black" class="scVip" href="http://pay.vko.cn/pay/order/toMember">续费</a></p>'
		   +'	<p id="p_member1_gz" style="display:none;"><span id="gz_member_txt">高中会员到期：</span><span id="sp_date_gz"></span><a target="_black" class="scVip" href="http://pay.vko.cn/pay/order/toMember">续费</a></p>'
		   +'	<p id="p_member2" style="display:none;"><span>会员已到期 </span><a target="_black" class="scVip" href="http://pay.vko.cn/pay/order/toMember">续费</a></p>'
		   +'	<p id="p_member3" style="display:none;"><a class="scVips" target="_black" href="http://pay.vko.cn/pay/order/toMember">开通会员更优惠</a></p>'
		   +'</dd>'
		   +'</dl>'
		   +'<dl class="jhm">'
		   +'<dt><a>激活课程</a></dt>'
		   +'<dd>'
		   +'	<a class="use_jhm" href="javascript:void(0);">输入激活码</a>'
		   +'	<a class="use_jhm use_tym" href="javascript:void(0);">会员体验码</a>'
		   +'</dd>'
		   +'</dl>'
		   +' <dl class="path">'
		   +'<dt><a>上次学习记录</a></dt>'
		   +'<dd>'
		   +'</dd>'
		   +'</dl>';
	$("#lc_top_left_userinfo").append(str_u);
};

function showUserInfo() {
	$.ajax({
		   async:false,
		   url: "http://www.vko.cn/userInfo",
		   type: "GET",
		   dataType: 'jsonp',
		   jsonp: 'callback',
		   data: '',
		   timeout: 5000,
		   success: function (json) {
			   //客户端jquery预先定义好的callback函数,成功获取跨域服务器上的json数据后,会动态执行这个callback函数
			   var str_u='';
		       if(json.code==300){
		    	   str_u='<dt><img src="http://static.vko.cn/v8/studycenter/images/lc_top_gxb.jpg" alt="暂未登录"></dt>'
		   			+'<dd>'
		   				+'<h2>暂未登录</h2>'
		   				
		   			+'</dd>';
		       }else{
		    	   var vcount=0;
		    	   var samount=0;
		    	   if(json.vamount){
		    		   vcount=json.vamount;
		    	   }
		    	   if(json.samount){
		    		   samount= json.samount;
		    	   }
		    	   str_u='<dl class="user_info">'
		    		   +'<dt><a href="'+rootPath+'/personal/information.html">账户信息</a></dt>'
		    		   +'<dd>'
		    		   +'	<p><span>v币：</span><em id="em_vb"></em><a  href="http://www.vko.cn/topuplist.html">我的V币</a></p>'
		    		   //+'	<p><span>财富：</span>'+vcount+'v币<a href="'+rootPath+'/topup.html">充值</a></p>'
		    		   //+'	<p><span>积分：</span>'+samount+'<a href="'+rootPath+'/exchange.html">获得积分</a></p>'
		    		   +'	<p id="p_member1" style="display:none;"><span id="cz_member_txt">初中会员到期：</span><span id="sp_date"></span><a target="_black" class="scVip" href="http://pay.vko.cn/pay/order/toMember">续费</a></p>'
		    		   +'	<p id="p_member1_gz" style="display:none;"><span id="gz_member_txt">高中会员到期：</span><span id="sp_date_gz"></span><a target="_black" class="scVip" href="http://pay.vko.cn/pay/order/toMember">续费</a></p>'
		    		   +'	<p id="p_member2" style="display:none;"><span>会员已到期 </span><a target="_black" class="scVip" href="http://pay.vko.cn/pay/order/toMember">续费</a></p>'
		    		   +'	<p id="p_member3" style="display:none;"><a class="scVips" target="_black" href="http://pay.vko.cn/pay/order/toMember">开通会员更优惠</a></p>'
		    		   +'</dd>'
		    		   +'</dl>'
		    		   +'<dl class="jhm">'
		    		   +'<dt><a>激活课程</a></dt>'
		    		   +'<dd>'
		    		   +'	<a class="use_jhm" href="javascript:void(0);">输入激活码</a>'
		    		   +'	<a class="use_jhm use_tym" href="javascript:void(0);">会员体验码</a>'
		    		   +'</dd>'
		    		   +'</dl>'
		    		   +' <dl class="path">'
		    		   +'<dt><a>上次学习记录</a></dt>'
		    		   +'<dd>'
		    		   +'</dd>'
		    		   +'</dl>';
		   			
		       }
		       $("#lc_top_left_userinfo").append(str_u);
		       
		       
//		       $(".scVip").on("click",function(){
//		    	   $(".vip_box").show(300);
//		    	   $(".vip_once").hide();
//		       });
//		       $(".scVips").on("click",function(){
//		    	   $(".vip_box").show(300);
//		    	   $(".vip_once").show();
//		       });
		       $(".closebtn").on("click",function(){
		    	   $(".vip_box").hide(300);
		       });
		   },
		   error: function(xhr){
		    //jsonp 方式此方法不被触发.原因可能是dataType如果指定为jsonp的话,就已经不是ajax事件了
		    //请求出错处理
		    alert("请求出错(请检查相关网络状况.)");
		   }
		});
}


// function showTrack(){
	
// 	$.ajax({
// 		   async:false,
// 		   url: "/studyCenter/showTrack",
// 		   type: "GET",
// 		   dataType: 'json',
// 		   success: function (json) {
// 			   if (json && json.length > 0) {
// 				for ( var i = 0; i < json.length; i++) {
// 					var video = json[i];
// 					var sec = video.track + "秒";
// 					if (video.track > 60) {
// 						sec = parseInt((video.track) / 60) + "分钟";
// 					}
// 					if(video.videoName && "null"!=video.videoName){
// 						$("#lc_top_left_userinfo  dl.path dd").append("<p><a class='path_a' target='_blank' href='"
// 								+ video.srcUrl + "'>" + video.videoName
// 								+ "</a><span>已学习" + sec
// 								+ "</span><a target='_blank' href='"
// 								+ video.srcUrl + "'>继续</a></p>");
// 					}
// 				}
// 			}else{
// 				 $(".lc_main_top dl.path dd ").text("暂无学习记录！！！");
// 			}
// 		   },
// 		   error: function(xhr){
// 		    alert("查询学习记录失败。。。。");
// 		   }
// 	});
	

// }


function getMemberExpire(){
	
	$.ajax({
		   async:false,
		   url: "/userCourse/getNewMemberExist",
		   type: "GET",
		   dataType: 'json',
		   success: function (res) {
			  if(res.code=='success'){
				 if(typeof(res.data.expire)=='undefined'){
					 //不是会员
					 $("#p_member3").show();return;
				 }
				 if(res.data.expire==false ){
					//会员过期
					 $("#p_member2").show();
					 
					 $("#cz_go_buy").show();
					 $("#cz_show_expire").text( '到期时间：已过期' );
					 $("#gz_go_buy").show();
					 $("#gz_show_expire").text( '到期时间：已过期' );
					 if($('.nothing').html()){
						 $('.nothing').hide();
					 }
					 return; 
				 }
				 if(res.data.expire==true){
					 //初中会员
					 if(res.data.gradeName){
						 $("#cz_member_txt").text(res.data.gradeName+"会员到期：");
					 }
					 $("#p_member1").show();
					//会员过期日期 
					 $("#sp_date").text( res.data.expireTime );
					 
					 $("#cz_go_study").show();
					 $("#cz_show_expire").text( '到期时间：'+res.data.expireTime );
					 if($('.nothing').html()){
						 $('.nothing').hide();
					 }
				 }
				 /*if(res.data.gzExpire==true){
					 //高中中会员
					 if(res.data.gradeName){
						 $("#gz_member_txt").text(res.data.gradeName+"会员到期：");
					 }
					 $("#p_member1_gz").show();
					//会员过期日期 
					 $("#sp_date_gz").text( res.data.gzExpireTime );
					 
					 $("#gz_go_study").show();
					 $("#gz_show_expire").text( '到期时间：'+res.data.gzExpireTime );
					 if($('.nothing').html()){
						 $('.nothing').hide();
					 }
				 }*/
			  }
			  else{
				  showTip(res.msg);
			  }
		   },
		   error: function(xhr){
			   alert("查询会员过期日期失败");
		   }
	});
}
//查询会员vb
function showMemberVb(){
	
	$.ajax({
		type:"GET",
		url:apiPath+"/user/memberTotalScore",
		dataType:"jsonp",
		data:{
		},
		success: function (data) {
			if(data.code==0){
				$("#em_vb").text( data.data.score );
			}
		},	
       error: function(data) {
       }
	});
}

$(function(){
	initUserInfo();
	//showUserInfo();
	showMemberVb();
	showTrack();
	//getMemberExpire();
});
function myMemberDialog(){
	$.ajax({
		   async:false,
		   url: "/userCourse/getNewMemberExist",
		   type: "GET",
		   dataType: 'json',
		   success: function (res) {
			  if(res.code=='success'){
				  var tips='<span id="">会员到期：</span><span id="">暂未开通</span><a class="scVips" target="_black" href="http://pay.vko.cn/pay/order/toMember">开通会员更优惠</a>';
				 if(typeof(res.data.expire)=='undefined'){
					 //不是会员
					 $("#p_mymem").empty().append(tips);
					 $("#div_mymember,.mymem").show();return;
				 }
				 tips='<span id="">'+res.data.gradeName+'会员到期：</span>';
				 if(res.data.expire==false ){
					//会员过期
					 tips+='<span id="">已过期</span><a target="_black" class="scVip" href="http://pay.vko.cn/pay/order/toMember">续费</a>';
				 }
				 if(res.data.expire==true){
					//会员过期日期 
					 tips+='<span id="">'+res.data.expireTime+'</span><a target="_black" class="scVip" href="http://pay.vko.cn/pay/order/toMember">续费</a>';
				 }
				 $("#p_mymem").empty().append(tips);
				 $("#div_mymember,.mymem").show();
			  }
			  else{
				  showTip(res.msg);
			  }
		   },
		   error: function(xhr){
			   alert("查询会员过期日期失败");
		   }
	});
	
}