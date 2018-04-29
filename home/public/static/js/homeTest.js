var cz;
var gz;
//删除vko_fzId的cookie
utils_delCookie("vko_fzId");
var localcourseTemplate=function(teacherId,tagdesc,cover,goodsName,tcName,tcSchool,tcSubject,totalCourse,buyCount,originalPrice,sellPrice,isBuy,goodsId){
	var tcFacePath="http://cdn.vkoimg.cn/upload/pic/user/face/"+teacherId+"_big.jpg";
	var detail=goodsPath+"/course/goods/viewDetail?id="+goodsId;
	 var localhtml="<div class='contBox'>"
			+"<div class='cteacher'>"
			+"<a target='_blank' href='"+detail+"'>	<img src='"+tcFacePath+"'/></a>"
			+"</div>"
			+"<div class='cTop' onclick=toViewDetail('"+goodsId+"')>"
			+"	<a class='tag zh' href='#'>"+tagdesc+"</a>"
			+"	<div class='cTit'>"
			+"		<p class='title'>"+goodsName+"</p>"
			+"		<p>难点及解题技巧</p>"
			+"	</div>"
			+"<img class='lbg' src='"+cover+"'/>"
			+"</div>"
			+"<div class='cList'>"
			+"	<div class='clbox clearfix'>"
			+"	<p class='cLeft tinfoLeft'><b>"+tcName+"</b><a title="+tcSchool+">"+tcSchool+"</a></p>"
			+"	<p class='cRight tinfoRight'><a title="+tcSubject+">"+tcSubject+"</a></p>"
			+"	</div>"
			+"	<div class='clbox clearfix'>"
			+"		<p class='cLeft'>课程数：<span>"+totalCourse+"</span>节</p>"
			+"	<p class='cRight'><span>"+buyCount+"</span>人购买</p>"
			+"	</div>"
		/*	+"	<div class='clbox bornone'>"
			+"		<p class='yuanp'>原价：<span class='yuan'>¥"+originalPrice+"</span></p>"
			+"		<p><img src='http://static.vko.cn/v8/v8s/learning/images/hui.jpg'/><span class='hui'>¥"+sellPrice+"</span></p>";
	 
	 		if(isBuy){
	 			localhtml+="		<a class='intoStudy'  href='javascript:void(0);'>已购买</a>";
	 		}else{
	 			localhtml+="		<a class='buyBtn'  href='javascript:void(0);' onclick=toBuy('"+goodsId+"')>购买</a>";
	 		}
	 		localhtml+="	</div>"*/
			+"</div>"
			+"</div>";
	 return localhtml;
}


var pytemplate=function(obj){
	var temp="   <div class='ml2_left'>"+
           " <div class='pic'>"+
          "      <a target='_blank' href='http://www.vko.cn/course/goods/viewDetail?id="+obj.goodsId+"'>"+
             "       <img src='"+obj.logo+"'>"+
            "    </a>";
	        temp+="    <span class='sign grades'>直播</span>";
              
            if(obj.type=="1"){
            	  temp+=" <p class='liveBar live'><img src='http://static.vko.cn/v8/v8s/learning/images/clockpy.png' alt=''>"+obj.startTime+"-"+obj.endTime+"</p>";
         	 }else if(obj.type=="2"){
         		 temp+=" <p class='liveBar live'><img src='http://static.vko.cn/v8/v8s/learning/images/clockpy.png' alt=''>正在直播</p>";
         	 }else if(obj.type=="3"){
         		 temp+=" <p class='liveBar live'><img src='http://static.vko.cn/v8/v8s/learning/images/clockpy.png' alt=''>观看回放</p>";
         	 }
	     temp+=   "</div>"+
          "  <div class='l_cont'>"+
          "      <a target='_blank' href='http://www.vko.cn/course/goods/viewDetail?id="+obj.goodsId+"'>"+
          "          <h6>"+obj.name+"</h6>"+
          "      </a>"+
             "   <div class='ml2_c2'>"+
           "         <p class='c2l'>"+
              "          <span>课程数：</span>"+
              "          <b>"+obj.classTotal+"</b>"+
              "      </p>"+
              "      <p class='c2r'>";
	     
	     var buyCount=parseInt(Math.random()*1000)+obj.buyCount;
	     temp+=  "          <span>"+buyCount+"</span><b>人购买</b>"+
             "       </p>"+
             "   </div>"+
          "  </div>"+
      "  </div>";
	
	return temp;
}


var specialTemplate=function (obj,gradeName,subjectName){
	var detail=goodsPath+"/course/goods/viewDetail?id="+obj.id;
	var cover="http://static.vko.cn/content/"+obj.objtype+"/"+obj.objid+"limit.jpg";
	if(obj.objtype=='2'){
		//cover=obj.cover;
	}
	var specialHtml="<div class='ml2_left'>"
		+"<div class='pic'>"
		+"<a target='_blank' href='"+detail+"'><img src='"+cover+"' onerror='notfind(this);'></a>"
		+"<span class='sign grades'>"+gradeName+"</span>";
		if(obj.objtype=='1'){
			specialHtml+="<span class='sign object'>"+subjectName+"</span>";
		}
		specialHtml+="</div>"
		+"<div class='l_cont'>"
		+"<a target='_blank' href='"+detail+"'><h6>"+obj.name+"</h6></a>"
		+"<!--<p>共12节</p>-->"
		+"<div class='ml2_c2'>"
		+"	<p class='c2l'><span>课程数：</span><b>"+obj.totalcourse+"节</b></p>"
		+"	<p class='c2r'><span>"+obj.buycount+"</span><b>人购买</b></p>"
		+"	<!--<span>314</span><b style='margin-right: 30px;'>人购买</b><span>314</span><b>条评价</b>-->"
		+"</div>"
	/*	+"<div class='clbox bornone'>"
		+"	<p class='yuanp'>原价：<span class='yuan'>¥"+obj.price+"</span></p>"
		+"	<p><img src='http://static.vko.cn/v8/v8s/learning/images/hui.jpg'><span class='hui'>¥"+obj.sellprice+"</span></p>"
		if(parseInt(obj.price)!=0){
			specialHtml+="	<a class='intoStudy' id='buy_"+obj.id+"_btn' href='#'>已购买</a>"
			+"	<a class='buyBtn'  id='notbuy_"+obj.id+"_btn' href='javascript:void(0);' onclick=toBuy('"+obj.id+"')>购买</a>"
		}
		specialHtml+="</div>"*/
		+"</div>"
		+"</div>";
		
	return specialHtml;
}	

var synchroTemplate=function(obj,versionId){
	//coursetype_grade_subject_bookId_sectionId_courseId
	
	var gradeId=$("#synchro_cur_grade").attr("data");
	var gradeName=$("#synchro_cur_grade").text();
	var subjectId=$("#synchro_sel_subject").attr("data");
	var subjectName=$("#synchro_sel_subject").text();
	var srcPath="http://static.vko.cn/v8/v8s/learning/synchro.html?params=41_"+gradeId+"_"+subjectId+"_"+obj.bookid+"_"+versionId;
	
	var synchroHtml="<a target='_blank' href='"+srcPath+"'>"+
	"<div class='sylTit'>"+
	"<img class='shadow' src='http://static.vko.cn/v8/v8s/common/images/shadow.png'>"+
	"<p class='sySubject'>"+gradeName+subjectName+"</p>"+
	"<p class='syGrade'>"+
	"<span class='syg1' data='"+obj.bookid+"'>"+obj.bookname+"</span>"+
	"</p>"+
	/*"<p class='sylChange'>"+
	"<span>人教版</span>"+
	"</p>"+*/
	"</div>"+
	"</a>";
	
	return synchroHtml;
}

var recommendCourseTemplate=function(obj,tab){
	//coursetype_grade_subject_bookId_sectionId_courseId
	
	var recommendHtml='<div class="ml2_left">'+
					'	<div class="pic">'+
					'		<a target="_blank" href="http://www.vko.cn/course/goods/viewDetail?id='+obj.goodsId+'">';
	if(obj.objtype==2){
				//recommendHtml+='<img src="http://static.vko.cn/content/'+obj.objtype+'/'+obj.objid+'bg.jpg" onerror="javascript:nofind(this,\'http://static.vko.cn/vko/images/other/def_tc.png\');"/>';
				recommendHtml+='<img src="http://static.vko.cn/content/'+obj.objtype+'/'+obj.objid+'limit.jpg" onerror="javascript:nofind(this,\'http://static.vko.cn/vko/images/other/def_jc.png\');"/>';
	}
	if(obj.objtype==1){
				recommendHtml+='<img src="http://static.vko.cn/content/'+obj.objtype+'/'+obj.objid+'limit.jpg" onerror="javascript:nofind(this,\'http://static.vko.cn/vko/images/other/def_jc.png\');"/>';
	}
	recommendHtml+= '		</a>'+
//					'		<span class="sign grades">初一</span>'+
//					'		<span class="sign object">英语</span>'+
					'	</div>'+
					'	<div class="l_cont">'+
					'		<a target="_blank" href="http://www.vko.cn/course/goods/viewDetail?id='+obj.goodsId+'">'+
					'			<h6>'+obj.goodsName+'</h6>'+
					'		</a><!--<p>共12节</p>-->'+
					'		<div class="ml2_c2">'+
					'			<p class="ml_tuip">课程数：<span>'+obj.totalcourse+'节</span></p>'+
					'		</div>'+
					'		<div class="ml2_c2">'+
					'			<p class="c2l"><span>￥</span><b>'+obj.sellprice+'</b></p>'+
					//'			<p class="c2r"><span>'+obj.buyViewCnt+'</span><b>人购买</b></p>'+
					'			<p class="c2r"><a target="_blank" href="/course/goods/viewDetail?id='+obj.goodsId+'">查看课程</a></p>'+
					'		</div>'+
					'	</div>'+
					'</div>';
	
	return recommendHtml;
}
	
var recommendSynchroTemplate=function(obj,idx){
	//coursetype_grade_subject_bookId_sectionId_courseId
	
	var clz="tblist";
	if(idx<2){
		clz+="1 ";
	}else if(idx<4){
		clz+="2 ";
	}else{
		clz+="3 ";
	}
	if(idx%2==1){
		clz+="nomargin";
	}
	var vers="通用版", learn="",subject="";
	$.each(obj.goodsTags,function(index, o){
		if(o.tagtype==4){
			vers=o.tagname;
		}
		if(o.tagtype==7){
			learn=o.tagname;
		}
		if(o.tagtype==2){
			subject=o.tagname;
		}
	});
	
	var recommendHtml='<div class="tbList '+clz+'">'+
						'	<p>'+vers+'</p>'+
						'	<a href="http://www.vko.cn/course/goods/viewDetail?id='+obj.goodsId+'"><h6><b>'+learn+subject+'</b><br>'+obj.goodsName+'</h6></a>'+
						'</div>';
	
	return recommendHtml;
}

function getLocalCourseList(key,gradeId,subjectId){//key:城市编号
	$.ajax({
		type:'GET',
		url:apiPath+'/localCourse/localCourseList',
		data:'key='+key+"&gradeId="+gradeId+"&subjectId="+subjectId,
		dataType:'jsonp',
		cache:true,
		success: function(json){
		 if(json.code==0){
			 var arr=json.data.goodsList; 
			 $("#localcourse_list").children().remove();
			 if(arr.length>0){
				 for(var i=0;i<arr.length;i++){
					 if(i<3){
						 $("#localcourse_list").append(localcourseTemplate(arr[i].teacherId,arr[i].tagdesc,arr[i].cover,arr[i].goodsName,arr[i].tcName,arr[i].tcSchool,arr[i].tcSubject,arr[i].totalCourse,arr[i].buyCount,arr[i].price,arr[i].sellPrice,arr[i].isBuy,arr[i].goodsId));
					 }else break;
				 }
			 }else{
				 $("#localcourse_list").append('<div class="noInfo"><p>本地课程正在加急录制中</p></div>');
			 }
		 }  
		}
		
	});
}

//查询培优课程
function getPYList(tab,_grade,gradeName,_subject,subjectName){
	$.ajax({
		url:"http://api.vko.cn/zbpy/getZBPYList",
		type:"POST",
		data:{
			subjectId:_subject,
			gradeId:_grade,
			pageIndex:1,
			pageSize:4
		},
		dataType:"jsonp",
		success:function(json){
			 if(json.code==0){
				 var arr=json.data.goodslist; 
				 var elementId='py_list';
				 $("#"+elementId).children().remove();
				 if(arr.length>0){
					 for(var i=0;i<arr.length;i++){
						 if(i<3){
							 $("#"+elementId).append(pytemplate(arr[i],gradeName,subjectName));
						 }
					 }
					/*var token = getCookieByName("vkoweb");
					// 判断是否登录，若已登录调用下边的方法
					if(token){
						checkBuys(idsArr);
					}*/
				 }else{
					 $("#"+elementId).append('<div class="noInfo"><p>培优课程正在加急录制中</p></div>');
				 }
			 }  
			
		}
	});
}

//查询专题列表
function getZTList(tab,gradeId,gradeName,subjectId,subjectName){
	$.ajax({
		type:'post',
		url:goodsPath + '/course/list',
		data:"tab="+tab+"&gradeId="+gradeId+"&subjectId="+subjectId+"&page=1&rows=3",
		dataType:'jsonp',
		success: function(json){
		 if(json.code=='success'){
			 var arr=json.data.pager.rows; 
			 var elementId='special_list';
			 if(tab=='3'){
				 elementId='combo_list';
			 }
			 $("#"+elementId).children().remove();
			 if(arr.length>0){
				 for(var i=0;i<arr.length;i++){
					 if(i<3){
						 $("#"+elementId).append(specialTemplate(arr[i],gradeName,subjectName));
					 }
				 }
				/*var token = getCookieByName("vkoweb");
				// 判断是否登录，若已登录调用下边的方法
				if(token){
					checkBuys(idsArr);
				}*/
			 }else{
				 $("#"+elementId).append('<div class="noInfo"><p>专题课程正在加急录制中</p></div>');
			 }
		 }  
		}
		
	});
}


function getSynchroList(gradeId,subjectId){
	$.ajax({
		   type: "GET",
		   url: apiPath+"/index/versionAndBook?subjectId="+subjectId+"&gradeId="+gradeId,
		   dataType:"jsonp",
		   success: function(json){
			   if(json.code==0){
				   var arr=json.data;
				   $("#synchro_list").children().remove();
				   if(arr.length>0){
					   for(var i=0;i<arr.length;i++){
						   var array=arr[i].bookList;
							for(var t=0;t<array.length;t++){
								$("#synchro_list").append(synchroTemplate(array[t],arr[i].versionId));
							}
					   }
					 //  var versionid = arr[i].versionId;
				   }else{
					   $("#synchro_list").append('<div class="noInfo"><p>同步课程正在加急录制中</p></div>');
				   }
			   }else{
				   alert(json.msg); 
			   }
		   },
		   error:function(jpXHR,textStatus,errorThrown){
				alert("查询出错，请稍后再试...");
				return false;
		   } 
	});
}

function getRecommendCourseList(learnId,tab, adType){
	
	$.ajax({
		   type: "GET",
		   url: "http://www.vko.cn/course/getRecommendCourse?learnId="+learnId+"&tab="+tab+"&adType="+adType,
		   dataType:"jsonp",
		   success: function(json){
			   if(json.code=="success"){
				   var arr=json.data;
				   $("#recommend_course").children().remove();
				   if(arr.length>0){
					   for(var i=0;i<arr.length;i++){
						   $("#recommend_course").append(recommendCourseTemplate(arr[i],2,5));
					   }
					 //  var versionid = arr[i].versionId;
				   }else{
					   $("#recommend_course").append('<div class="noInfo"><p>课程正在加急录制中</p></div>');
				   }
			   }else{
				   alert(json.msg); 
			   }

				//修改商品价格
				//$.each($('.c2r span'),function(v,o){console.log($(o).text(parseInt($(o).text())+parseInt(100*Math.random())+10));});
		   },
		   error:function(jpXHR,textStatus,errorThrown){
				alert("查询出错，请稍后再试...");
				return false;
		   } 
	});
}


function getRecommendSynchroList(learnId,tab, adType){
	
	$.ajax({
		   type: "GET",
		   url: "http://www.vko.cn/course/getRecommendCourse?learnId="+learnId+"&tab="+tab+"&adType="+adType,
		   dataType:"jsonp",
		   success: function(json){
			   if(json.code=="success"){
				   var arr=json.data;
				   $("#recommend_synchro").children().remove();
				   if(arr.length>0){
					   for(var i=0;i<arr.length;i++){
						   $("#recommend_synchro").append(recommendSynchroTemplate(arr[i],i));
					   }
					 //  var versionid = arr[i].versionId;
				   }else{
					   $("#recommend_synchro").append('<div class="noInfo"><p>课程正在加急录制中</p></div>');
				   }
			   }else{
				   alert(json.msg); 
			   }
		   },
		   error:function(jpXHR,textStatus,errorThrown){
				alert("查询出错，请稍后再试...");
				return false;
		   } 
	});
}


function getExamList(subjectId,semesterId){
	$.ajax({
		   type: "GET",
		   url: tikuPath+"/v8/paper/getPaperListForJsonP?subjectId="+subjectId+"&semesterId="+semesterId+"&page=1&rows=15",
		   dataType:"jsonp",
		   jsonp: "jsonpCallback",
		   success: function(json){
			   if(json.code=='success'){
				   $("#exam_list_fir").children().remove();
				   $("#exam_list_sec").children().remove();
				   $("#exam_list_thi").children().remove();
				   var arr=json.data.rows;
				   if(arr.length>0){
					   for(var i=0;i<arr.length;i++){
						   if(i<5){
							   $("#exam_list_fir").append("<li><i></i><a target='_blank'  href='http://tiku.vko.cn/v8/paper/previewPaper?paperId="+arr[i].id+"'>"+arr[i].name+"</a></li>");
						   }else if(i<10){
							   $("#exam_list_sec").append("<li><i></i><a target='_blank' href='http://tiku.vko.cn/v8/paper/previewPaper?paperId="+arr[i].id+"'>"+arr[i].name+"</a></li>");
						   }else{
							   $("#exam_list_thi").append("<li><i></i><a target='_blank' href='http://tiku.vko.cn/v8/paper/previewPaper?paperId="+arr[i].id+"'>"+arr[i].name+"</a></li>");
						   }
					   }
					   
				   }else{
					   console.log("暂无试卷");
				   }
			   }else{
				   alert(json.msg); 
			   }
		   },
		   error:function(jpXHR,textStatus,errorThrown){
				alert("查询出错，请稍后再试...");
				return false;
		   } 
	});
	
	
}

function initExamTab(){
	$.ajax({
		   type: "GET",
		   url: tikuPath+"/v8/paper/getSubjectGroupBySemester",
		   dataType:"jsonp",
		   jsonp: "jsonpCallback",
		   success: function(json){
			   var subjectMap=json.data;
			   if(subjectMap){
				  cz=subjectMap['52'];
				  gz=subjectMap['51'];
			   }
			   var exam_semesterId=$(".tit_nav").siblings(".tui_course").find(".active").attr("value");
				changeTab(exam_semesterId);
		   } ,
		   error:function(jpXHR,textStatus,errorThrown){
				alert("查询出错，请稍后再试...");
				return false;
		   } 
	});
}



//检查商品是否已购买，一次性校验当前页面所有商品的购买请求，只发一次ajax
/*function checkBuys(arr){
	var gids = arr.join();
	$.ajax({
	   async:false,
	   url: studyPath+"/userCourse/checkBuys?goodsIds=" + gids,
	   type: "GET",
	   dataType: 'jsonp',
	   jsonp: 'callback',
	   data: '',
	   timeout: 5000,
	   success: function (json) {
		   $(json.data.split("|")).each(function(i, n){
			   if(n && n.split("#")[1] === 'true'){
				   var gid = n.split("#")[0];
				   // 显示已购买按钮
				   $("#notbuy_"+gid+"_btn").hide();
			   }
		   });
	   },
	   error: function(xhr){
	    console.log('check_buys error');
	   }
	});
}*/

$(function($) {
	//var arr_pc = utils_getProvinceCity();
	var fromurl = document.referrer;
	var tz_s = true,index_ret = 0;
	if(fromurl!=''&& fromurl.indexOf("sitemap")>0){
		console.log("=来自站点地图=");
		tz_s = false;
		localStorage.setItem( 'cache_sitemap', true);
	}
	if(localStorage.getItem( 'cache_sitemap')&&fromurl!=''&& fromurl.indexOf("vko.cn")>0){
		console.log("cache_sitemap==true,fromurl="+fromurl);
		tz_s = false;
	}
	if(localStorage.getItem( 'cache_index_ret')==1){
		index_ret = 1;
	}
	if(tz_s && index_ret == 0){
	//通过调用新浪IP地址库接口查询用户当前所在国家、省份、城市、运营商信息
	$.getScript('http://pv.sohu.com/cityjson?ie=utf-8',function(){
	   //var country = remote_ip_info.country;
		//var province = remote_ip_info.province;
		var city = returnCitySN.cid.substring(0,4);
	   //var isp = remote_ip_info.isp;
		console.log(city+"======="+returnCitySN.cname);
		var nowurl = document.URL;
		console.log("nowurl=="+nowurl);//&& nowurl.indexOf("www.vko.cn")<0
		if(city=='1100' ){
			localStorage.setItem( 'cache_index_ret', 1);
			document.location.href = "http://www.vko.cn/";
		}else{
		$.ajax({
			url:'http://vkoyizhong.vko.cn/schoolInfo/getSchoolInfo',
			method:'GET',
			dataType:'jsonp',
			data:{"status":1,
				"cityNo":city,
				"type":3},
			success:function(data){
				if(data.code == "success"){
					if(data.data!=null&& data.data!=''){
						console.log("======="+data.data.domain);
						localStorage.setItem( 'cache_index_ret', 1);
						document.location.href = data.data.domain;
					}
				}
			},
			error:function(data){
				//alert('网络错误');
			}
		});}
	});
	}
	//本地课学科切换
	$("#local_sel_subject a").click(function(){
		$("#local_sel_subject a").removeClass("cur");
		$(this).addClass("cur");
		var subjectId=$(this).attr("data");
		$("#local_sel_subject").attr("data",subjectId);
		var key='4101';
		var gradeId=$("#local_cur_grade").attr("data");
		getLocalCourseList(key,gradeId,subjectId);
	});

	$("#py_sel_subject a").on('click',function(){
		$("#py_sel_subject a").removeClass("cur");
		$(this).addClass("cur");
		var subjectId=$(this).attr("data");
		var subjectName=$(this).text();
		$("#py_sel_subject").attr("data",subjectId);
		var gradeId=$("#py_cur_grade").attr("data");
		var gradeName=$("#py_cur_grade").text();
		getPYList('2',gradeId,gradeName,subjectId,subjectName);
	});
	
	$("#special_sel_subject a").click(function(){
		$("#special_sel_subject a").removeClass("cur");
		$(this).addClass("cur");
		var subjectId=$(this).attr("data");
		var subjectName=$(this).text();
		$("#special_sel_subject").attr("data",subjectId);
		var gradeId=$("#special_cur_grade").attr("data");
		var gradeName=$("#special_cur_grade").text();
		getZTList('2',gradeId,gradeName,subjectId,subjectName);
	});
	
	$("#combo_sel_subject a").click(function(){
		var subjectId=$(this).attr("data");
		$("#combo_sel_subject").attr("data",subjectId);
		var gradeId=$("#combo_cur_grade").attr("data");
		var gradeName=$("#combo_cur_grade").text();
		getZTList('3',gradeId,gradeName,subjectId,'数学');
	});
	
	initExamTab();
	
	
	$("#exam_sel_subject a").click(function(){
		$("#exam_sel_subject a").removeClass("cur");
		$(this).addClass("cur");
		var subjectId=$(this).attr("data");
		$("#exam_sel_subject").attr("data",subjectId);
		var semesterId=$(".tit_nav").siblings(".tui_course").find(".active").attr("value");
		getExamList(subjectId,semesterId);
	});
	
	
	/*本地课先不显示
	 * var key='4101';
	var local_gradeId=$("#local_cur_grade").attr("data");
	var local_subjectId=$("#local_sel_subject").attr("data");
	getLocalCourseList(key,local_gradeId,local_subjectId);*/
	
	var special_gradeId=$("#special_cur_grade").attr("data");
	var gradeName=$("#special_cur_grade").text();
	var special_subjectId=$("#special_sel_subject").attr("data");
	var subjectName=$("#special_sel_subject a[data='"+special_subjectId+"']").text();
//	getZTList('2',special_gradeId,gradeName,special_subjectId,subjectName);
	
	var py_gradeId=$("#py_cur_grade").attr("data");
	var py_gradeName=$("#py_cur_grade").text();
	var py_subjectId=$("#py_sel_subject").attr("data");
	var py_subjectName=$("#py_sel_subject a[data='"+special_subjectId+"']").text();
//	getPYList('2',py_gradeId,py_gradeName,py_subjectId,py_subjectName);
	
	var combo_gradeId=$("#combo_cur_grade").attr("data");
	var gradeName=$("#combo_cur_grade").text();
	//var combo_subjectId=$("#combo_sel_subject").attr("data");
//	getZTList('3',combo_gradeId,gradeName,'22','数学');
	
	
	var synchro_gradeId=$("#synchro_cur_grade").attr("data");
	var synchro_subjectId=$("#synchro_sel_subject").attr("data");
//	getSynchroList(synchro_gradeId,synchro_subjectId);
	
	getBanSlides();
	getRecommendCourseList(51, 2, 5);
	getRecommendSynchroList(51, 4, 6);
	
	var exam_subjectId=$("#exam_sel_subject").attr("data");
	var exam_semesterId=$(".tit_nav").siblings(".tui_course").find(".active").attr("value");
	//changeTab(exam_semesterId);
	getExamList(exam_subjectId,exam_semesterId);
	getSubjectsOfCourse();
	
});


function changeLocalGrade(obj){
	$(obj).parent().find('a').removeClass("currenta");
	$(obj).addClass("currenta");
	var gradeId=$(obj).attr("value");
	var subjectId=$("#local_sel_subject").attr("data");
	if(gradeId=='0'||gradeId=='1'||gradeId=='2'){
		$("#local_sel_subject").find("a.li_subject").hide();
		if(parseInt(subjectId)>25){
			subjectId='22';
			$("#local_sel_subject").attr("data",subjectId);
			$("#local_sel_subject a[data='"+subjectId+"']").addClass("cur");
		}
	}else $("#local_sel_subject").find("a.li_subject").show();
	$("#local_cur_grade").text($(obj).text());
	$("#local_cur_grade").attr("data",gradeId);
	$("#local_cur_grade").next('.select-item').hide(300);
	//$('.select-item').hide(300);
	
	var key='4101';
	var gradeId=$("#local_cur_grade").attr("data");
	getLocalCourseList(key,gradeId,subjectId);
}

function changePeiyouGrade(obj){
	var gradeId=$(obj).attr("value");
	var subjectId=$("#py_sel_subject").attr("data");
	if(gradeId=='0'||gradeId=='1'||gradeId=='2'){
		$("#py_sel_subject").find("a.li_subject").hide();
		if(parseInt(subjectId)>25){
			subjectId='22';
			$("#py_sel_subject").attr("data",subjectId);
			$("#py_sel_subject a[data='"+subjectId+"']").addClass("cur");
		}
	}else $("#py_sel_subject").find("a.li_subject").show();
	
	$(obj).parent().find('a').removeClass("currenta");
	$(obj).addClass("currenta");
	$("#py_cur_grade").text($(obj).text());
	$("#py_cur_grade").attr("data",$(obj).attr("value"));
	$("#py_cur_grade").next('.select-item').hide(300);
	
	var gradeName=$("#py_cur_grade").text();
	var subjectName=$("#py_sel_subject a[data='"+subjectId+"']").text();
	getPYList('2',gradeId,gradeName,subjectId,subjectName);
}

function changeSpecialGrade(obj){
	var gradeId=$(obj).attr("value");
	var subjectId=$("#special_sel_subject").attr("data");
	if(gradeId=='0'||gradeId=='1'||gradeId=='2'){
		$("#special_sel_subject").find("a.li_subject").hide();
		if(parseInt(subjectId)>25){
			subjectId='22';
			$("#special_sel_subject").attr("data",subjectId);
			$("#special_sel_subject a[data='"+subjectId+"']").addClass("cur");
		}
	}else $("#special_sel_subject").find("a.li_subject").show();
	
	$(obj).parent().find('a').removeClass("currenta");
	$(obj).addClass("currenta");
	$("#special_cur_grade").text($(obj).text());
	$("#special_cur_grade").attr("data",$(obj).attr("value"));
	$("#special_cur_grade").next('.select-item').hide(300);
	
	var gradeName=$("#special_cur_grade").text();
	var subjectName=$("#special_sel_subject a[data='"+subjectId+"']").text();
	getZTList('2',gradeId,gradeName,subjectId,subjectName);
}

function changeComboGrade(obj){
	$(obj).parent().find('a').removeClass("currenta");
	$(obj).addClass("currenta");
	$("#combo_cur_grade").text($(obj).text());
	$("#combo_cur_grade").attr("data",$(obj).attr("value"));
	$("#combo_cur_grade").next('.select-item').hide(300);
	
	//var subjectId=$("#combo_sel_subject").attr("data");
	var gradeId=$("#combo_cur_grade").attr("data");
	var gradeName=$("#combo_cur_grade").text();
	getZTList('3',gradeId,gradeName,'22','数学');
}

function changeSynchroGrade(obj){
	var gradeId=$(obj).attr("value");
	var subjectId=$("#synchro_sel_subject").attr("data");
	if(gradeId=='0'||gradeId=='1'||gradeId=='2'){
		$("#ul_subject").find("a.li_subject").hide();
		if(parseInt(subjectId)>25){
			subjectId='22';
			$("#synchro_sel_subject").attr("data",subjectId);
			$("#synchro_sel_subject").text("数学");
			$("#synchro_sel_subject").find('a').removeClass("currenta");
			$("#ul_subject a[data='"+subjectId+"']").addClass("currenta");
		}
	}else $("#ul_subject").find("a.li_subject").show();
	$(obj).parent().find('a').removeClass("currenta");
	$(obj).addClass("currenta");
	$("#synchro_cur_grade").text($(obj).text());
	$("#synchro_cur_grade").attr("data",$(obj).attr("value"));
	$("#synchro_cur_grade").next('.select-item').hide(300);
	
	getSynchroList(gradeId,subjectId);
}

function changeSynchroSubject(obj){
	var subjectId=$(obj).attr("data");
	$("#synchro_sel_subject").attr("data",subjectId);
	
	$(obj).parent().find('a').removeClass("currenta");
	$(obj).addClass("currenta");
	$("#synchro_sel_subject").text($(obj).text());
	$("#synchro_sel_subject").next('.select-item').hide(300);
	
	var gradeId=$("#synchro_cur_grade").attr("data");
	getSynchroList(gradeId,subjectId);
}

//试卷学段切换
function changeExamSemester(obj){
	var semesterId=$(obj).attr("value");
	
	$(obj).parent().find('a').removeClass("currenta");
	$(obj).addClass("currenta");
	$("#exam_cur_semester").attr("data",semesterId);
	$("#exam_cur_semester").text($(obj).text());
	$("#exam_cur_semester").next('.select-item').hide(300);
	var subjectId=$("#exam_sel_subject").attr("data");
	changeTab(semesterId);
	var flag;
	if(semesterId=='51'){
		flag=false;
		for(var i=0;i<gz.length;i++){
			if(parseInt(gz[i])==parseInt(subjectId)){
				flag=true;
				break;
			}tit_select
		}
	}else{
		flag=false;
		for(var i=0;i<cz.length;i++){
			if(parseInt(cz[i])==parseInt(subjectId)){
				flag=true;
				break;
			}
		}
	}
	
	if(!flag){
		subjectId=22;
		$("#exam_sel_subject").attr("data",'22');
		$("#exam_sel_subject").find("a").removeClass("cur");
		$("#exam_sel_subject").find("a[data='22']").addClass("cur");
	}
	getExamList(subjectId,semesterId);
}

//推荐课程学段切换
function changeRecommendCourseSemesterOf17(obj){
	var semesterId=$(obj).attr("value");
	$(obj).addClass("active").siblings().removeClass("active");
	getRecommendCourseList(semesterId, 2, 5);
}

//同步推荐课程学段切换
function changeRecommendSynchroSemesterOf17(obj){
	var semesterId=$(obj).attr("value");
	$(obj).addClass("active").siblings().removeClass("active");
	getRecommendSynchroList(semesterId, 4, 6);
}

//试卷学段切换
function changeExamSemesterOf17(obj){
	var semesterId=$(obj).attr("value");
	
	$(obj).addClass("active").siblings().removeClass("active");
	var subjectId=$("#exam_sel_subject").attr("data");
	changeTab(semesterId);
	var flag;
	if(semesterId=='51'){
		flag=false;
		for(var i=0;i<gz.length;i++){
			if(parseInt(gz[i])==parseInt(subjectId)){
				flag=true;
				break;
			}
		}
	}else{
		flag=false;
		for(var i=0;i<cz.length;i++){
			if(parseInt(cz[i])==parseInt(subjectId)){
				flag=true;
				break;
			}
		}
	}
	
	if(!flag){
		subjectId=22;
		$("#exam_sel_subject").attr("data",'22');
		$("#exam_sel_subject").find("a").removeClass("cur");
		$("#exam_sel_subject").find("a[data='22']").addClass("cur");
	}
	getExamList(subjectId,semesterId);
}

function toViewDetail(goodsId){
	var detail=goodsPath+"/course/goods/viewDetail?id="+goodsId;
	window.open(detail,"_blank");
}

function notfind( img ){ 
	var $img=img, url, _src = $($img).attr("nofind_src");
	if(typeof(_src) != "undefined"){
		url = _src;
	}else {
		url = 'http://static.vko.cn/vko/images/other/def_tc.png';
	}
	$img.src=url; 
	$img.onerror=null; //控制onerror事件只触发一次 
}


function changeTab(semesterId){
	if(semesterId=='51'){
		$("#exam_sel_subject").find("a").hide();
		for(var i=0;i<gz.length;i++){
			$("#exam_sel_subject").find("a[data='"+gz[i]+"']").show();
		}
	}else if(semesterId=='52'){
		$("#exam_sel_subject").find("a").hide();
		for(var i=0;i<cz.length;i++){
			$("#exam_sel_subject").find("a[data='"+cz[i]+"']").show();
		}
	}
}

function getSubjectsOfCourse(){
	$.ajax({
		url:'http://www.vko.cn/course/getSubjectsByGrade',
		method:'GET',
		dataType:'jsonp',
		data:{},
		success:function(data){
			if(data.code == "success"){
				//高中
				var g_con = "",ref="?ref=1";
				for(var i=0; i<data.data["51"].length;i++){
					g_con += '<dl class="subitem">'+
								'	<dt>'+data.data["51"][i].gradeName+'</dt>'+
								'	<dd class="row">';
					$.each(data.data["51"][i]["subjects"], function(index,val) {
						if(data.data["51"][i]["subjects"].length-1 != index){
							g_con +='		<a href="'+data.data.subject.replace('#grade',data.data["51"][i].gradeId).replace('#subject',val.key)+ref+'" target="_blank">'+val.value+'</a><i>|</i>';
						}else{
							g_con +='		<a href="'+data.data.subject.replace('#grade',data.data["51"][i].gradeId).replace('#subject',val.key)+ref+'" target="_blank">'+val.value+'</a>';
						}
					});
						g_con +='	</dd>'+
								'</dl>';
				}
				$('.g-item').html(g_con);
				
				//初中
				var g_con = "";
				for(var i=0; i<data.data["52"].length;i++){
					g_con += '<dl class="subitem">'+
								'	<dt>'+data.data["52"][i].gradeName+'</dt>'+
								'	<dd class="row">';
					$.each(data.data["52"][i]["subjects"], function(index,val) {
						if(data.data["52"][i]["subjects"].length-1 != index){
							g_con +='		<a href="'+data.data.subject.replace('#grade',data.data["52"][i].gradeId).replace("51","52").replace('#subject',val.key)+ref+'" target="_blank">'+val.value+'</a><i>|</i>';
						}else{
							g_con +='		<a href="'+data.data.subject.replace('#grade',data.data["52"][i].gradeId).replace("51","52").replace('#subject',val.key)+ref+'" target="_blank">'+val.value+'</a>';
						}
					});
						g_con +='	</dd>'+
								'</dl>';
				}
				$('.ch-item').html(g_con);
				
				//小学
				var g_con = "";
				for(var i=0; i<data.data["53"].length;i++){
					if(data.data["53"][i].gradeId != 6){
						g_con += '<dl class="subitem">'+
									'	<dt>'+data.data["53"][i].gradeName+'</dt>'+
									'	<dd class="row">';
						$.each(data.data["53"][i]["subjects"], function(index,val) {
							if(data.data["53"][i]["subjects"].length-1 != index){
								g_con +='		<a href="'+data.data.subject.replace('#grade',data.data["53"][i].gradeId).replace("51","53").replace('#subject',val.key)+ref+'" target="_blank">'+val.value+'</a><i>|</i>';
							}else{
								g_con +='		<a href="'+data.data.subject.replace('#grade',data.data["53"][i].gradeId).replace("51","53").replace('#subject',val.key)+ref+'" target="_blank">'+val.value+'</a>';
							}
						});
							g_con +='	</dd>'+
									'</dl>';
					}
				}
				$('.xx-item').html(g_con);
				
				//高考专题
				var g_con = "";
				g_con += '<dl class="subitem">'+
							'	<dt>高考</dt>'+
							'	<dd class="row">';
				$.each(data.data["zt_gk"], function(index,val) {
					if(data.data["zt_gk"].length-1 != index){
						g_con +='		<a href="'+data.data.subject.replace('#grade',5).replace('#subject',val.key)+ref+'" target="_blank">'+val.value+'</a><i>|</i>';
					}else{
						g_con +='		<a href="'+data.data.subject.replace('#grade',5).replace('#subject',val.key)+ref+'" target="_blank">'+val.value+'</a>';
					}
				});
				g_con +='	</dd>'+
						'</dl>';
				//中考专题
				g_con += '<dl class="subitem">'+
							'	<dt>中考</dt>'+
							'	<dd class="row">';
				$.each(data.data["zt_zk"], function(index,val) {
					if(data.data["zt_zk"].length-1 != index){
						g_con +='		<a href="'+data.data.subject.replace('#grade',2).replace('#subject',val.key)+ref+'" target="_blank">'+val.value+'</a><i>|</i>';
					}else{
						g_con +='		<a href="'+data.data.subject.replace('#grade',2).replace('#subject',val.key)+ref+'" target="_blank">'+val.value+'</a>';
					}
				});
				g_con +='	</dd>'+
							'</dl>';
				$('.zt-item').html(g_con);
			}
		},
		error:function(data){
			//alert('网络错误');
		}
	});
}

function getBanSlides(){
	
	$.ajax({
		url:'http://www.vko.cn/course/getBanSlides',
		type:'GET',
		dataType:'jsonp',
		data:{},
		success:function(data){
			if(data.code=='success'){
				$(".flexslider").removeData("flexslider");
				var con = '';
				$.each(data.data, function(index, val){
					con += '<li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1; background: url('+val.adImg+') 50% 0px no-repeat; background-size: cover" class="">'+
							'	<a href="'+val.adUrl+'" target="_blank" title="'+val.adName+'">'+
							'		<img src="http://static.vko.cn/v8/index/images/tm1.gif" height="100%" width="100%" draggable="false">'+
							'	</a>'+
							'</li>';
					});
				$('.ban_container .slides').html(con);
				$('.flexslider').flexslider({
					directionNav: false,
					pauseOnAction: false
				});
			}
		},
		error:function(data){
			//alert('网络错误');
		}
	});
}

//登录回调
var loginCallback = function(){
	location.reload();
};