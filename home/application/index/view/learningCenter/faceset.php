
{include file="common/personage_header"}
<!--  <body>在header里，不用在写 -->
		<div class="main">
			<!-- 头部 tab 切换 start -->
			<ul class="tab_hd">
				<li><a href="/index/LearningCenter/information">个人资料</a></li>
				<li class="current"><a href="/index/LearningCenter/faceset">头像设置</a></li>
				<li><a href="/index/LearningCenter/tosetthirdbind">第三方账户绑定</a></li>
			</ul>
			<!-- 头部 tab 切换 end -->
			<div class="tips_hd">上传你的真实头像，让同学们都能更方便找到你。</div>
			<div id="vkoAvatar">
				 <div id="flashcontent">
				 	<form action="/index/LearningCenter/facesetDo" method="post" enctype="multipart/form-data" >
				 		<?php if (!empty($data['user_head'])) {?>
				 		<h3>已上传头像：</h3> 
				 		<img src="<?=$data['user_head']?>" style="width: 120px;height: 120px;">
				 		<?php }?>
				 		<h3>请选择图片作为你的头像</h3><br />
				 		<input type="file" name="user_head"  >
				 		<div class="form_group">
							<div class="form_tag">&nbsp;</div>
							<div class="form_ctrl">
								<input class="btn_large_blue01" type="submit" id="submit" value="上 传"/>
							</div>
						</div>
				 	</form>
				 </div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
seajs.use('vkoweb/js/web/personal/modface');	//修改为所需js文件路径
</script>

<!-- 页脚 end -->
<!-- 已替换到head_v8.jsp -->
<!-- <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F637d3bd793ae39095a7b9fcf1f8afb55' type='text/javascript'%3E%3C/script%3E"));
</script> -->
<script type="text/javascript" src="_PUBLIC_/js/footer.js"></script>

<script type="text/javascript">
//setTimeout( function(){
	$($(".left_side dd").get(4)).hide();
	$($(".left_side dd").get(6)).hide();
	$($(".left_side dd").get(7)).hide();
	$($(".left_side dd").get(8)).hide();
	$($(".left_side dd").get(9)).hide();
	$($(".left_side dd").get(10)).hide();
	$($(".left_side dd").get(13)).hide();
	$($("#scoreLevel")).hide();
	$($("#privacyset")).hide();
	
//	},50);
</script>
</body>
</html>
