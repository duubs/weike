{include file="common/personage_header"}
<!--  <body>在header里，不用在写 -->


		<div class="main">
			<!-- 头部 tab 切换 start -->
			<ul class="tab_hd">
				<li class="current"><a href="/index/learningcenter/information">个人资料</a></li>
				<li><a href="/index/learningcenter/faceset">头像设置</a></li>
				<li><a href="javascript:void(0)" id="authon">第三方账户绑定</a></li>
			</ul>
			<script type="text/javascript">
				$(function(){
					$('#authon').click(function(){
						alert('该功能尚未完善')
					})
				})
			</script>
			<!-- 头部 tab 切换 end -->
			<div class="information">
				<!-- <div class="tips_success">
					个人资料设置成功
				</div> -->
				<div class="complete">
					<span class="tit">你的资料完整度：</span>
					<div class="img">
						<span class="length" style="width:80%"></span>
						<span class="shade"></span>
					</div>
					<strong class="num-old">80%</strong>
					<span class="tips">填写真实资料，友谊的小船就不会说翻就翻。</span>
				</div>
				<hr class="place_line"/>
				<form class="modifyInfo" method="post" action="/index/learningcenter/information" >
					<input type="hidden" name="id" value="{$list['user_id']}" />
					<div class="form">
						<h4>账户信息</h4>
						<div class="clear"></div>
						<div class="form_group">
							<div class="form_tag">邮箱：</div>
							<div class="form_ctrl">
								{if condition="$list['user_email'] neq null"}
                                    <div class="form_ctrl">
										<input class="ipt_text chinese" maxlength="4" type="text" name="user_email"  value="{$list['user_email']}" />
									</div>
									{if condition="$list['email_state'] neq 1"}
                                    	<a href="/index/learningcenter/safety?user_email=<?=$list['user_email']?>" title="马上校验">马上校验</a>
                                    {else/}
                                    	<a href="javascript:void(0);" title="绑定成功">已绑定</a>
                                    {/if}
                                {else/}
                                    <input class="ipt_text email" type="text" name="user_email" value="" id="v_email" />
                                {/if}
							</div>
						</div>
						<div class="form_group">
							<div class="form_tag">手机：</div>
							<div class="form_ctrl">
									<?php echo substr_replace($list['user_account'],'******',3,6)?>&nbsp;&nbsp;&nbsp;&nbsp;
									<span><a href="/safety/modmobile.html" title="修改">修改</a></span>
							</div>
						</div>
						
					</div>
					<hr class="place_line"/>
					<div class="form">
						<h4>个人信息</h4>
						<div class="form_group">
							<div class="form_tag"><i class="red">*</i>账号：</div>
							<div class="form_ctrl">
								{$list['user_account']}
							</div>
						</div>
						<div class="form_group">
							<div class="form_tag"><i class="red">*</i>姓名：</div>
							{if condition="$list['user_name'] neq null"}
							<div class="form_ctrl">
								<input class="ipt_text chinese" maxlength="4" name="user_name" type="text" value="{$list['user_name']}" />
							</div>
							{else/}
							<div class="form_ctrl">
								<input class="ipt_text chinese" maxlength="4" type="text" name="user_name" id="v_name" />
							</div>
							{/if}
						</div>
						<div class="form_group">
							<div class="form_tag">性别：</div>
							<div class="form_ctrl">
								{if condition="$list['sex'] eq 1"}
                                    <label class="form_label"><input type="radio" name="gender" value="0" checked="checked" /> 男</label>
									<label class="form_label"><input type="radio" name="gender" value="1"  /> 女</label>
									<label class="form_label"><input type="radio" name="gender" value="2"  /> 保密</label>
                                {/if}
								{if condition="$list['sex'] eq 0"}
                                    <label class="form_label"><input type="radio" name="gender" value="0"  /> 男</label>
									<label class="form_label"><input type="radio" name="gender" value="1"  checked="checked"/> 女</label>
									<label class="form_label"><input type="radio" name="gender" value="2"  /> 保密</label>
                                {/if}
                                {if condition="$list['sex'] eq 2"}
                                    <label class="form_label"><input type="radio" name="gender" value="0" /> 男</label>
									<label class="form_label"><input type="radio" name="gender" value="1"  /> 女</label>
									<label class="form_label"><input type="radio" name="gender" value="2"  checked="checked" /> 保密</label>
                                {/if}
							</div>0
						</div>
						<div class="form_group">
							<div class="form_tag">生日：</div>
							<div class="form_ctrl">
								{if condition="$list['birthday'] neq null"}
                                    <!-- <input class="ipt_text datepicker" type="text" name="birthday" placeholder="请输入你的生日" value="{$list['birthday']}" /> -->
                                    <input class="laydate-icon" id="demo" value="" name="birthday" placeholder="{$list['birthday']}"> 
                                {else/}
                                 <input class="laydate-icon" id="demo" value="" name="birthday"> 
                                {/if}
							</div>
						</div>
<script type="text/javascript" src="/static/js/js/laydate.js"></script>
<style type="text/css">

</style>
<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#demo'});//绑定元素
}();

//日期范围限制
var start = {
    elem: '#start',
    format: 'YYYY-MM-DD',
    min: laydate.now(), //设定最小日期为当前日期
    max: '2099-06-16', //最大日期
    istime: true,
    istoday: false,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};

var end = {
    elem: '#end',
    format: 'YYYY-MM-DD',
    min: laydate.now(),
    max: '2099-06-16',
    istime: true,
    istoday: false,
    choose: function(datas){
        start.max = datas; //结束日选好后，充值开始日的最大日期
    }
};
laydate(start);
laydate(end);

//自定义日期格式
laydate({
    elem: '#test1',
    format: 'YYYY年MM月DD日',
    festival: true, //显示节日
    choose: function(datas){ //选择日期完毕的回调
        alert('得到：'+datas);
    }
});

//日期范围限定在昨天到明天
laydate({
    elem: '#hello3',
    min: laydate.now(-1), //-1代表昨天，-2代表前天，以此类推
    max: laydate.now(+1) //+1代表明天，+2代表后天，以此类推
});
</script>
						<div class="form_group">
							<div class="form_tag"><i class="red">*</i>年级：</div>
							<div class="form_ctrl">
								<select class="required" name="grade" size="1" id="select4">
									<option value="0">请选择年级</option>
									{volist name="data" id="v"}
										<option value="{$v.stage_cate_id}"
											{if condition="$list['grade_id'] eq $v['stage_cate_id']"}
			                                    selected="selected"
			                                {/if}
										 >{$v.stage_name}</option>
									{/volist}
									
								</select>
							</div>
						</div>
						<div class="form_group">
							<div class="form_tag">家长姓名：</div>
							<div class="form_ctrl">
								<input class="ipt_text chinese" maxlength="4" type="text" name="parentName" value="{$list['parent_name']}"  />
							</div>
						</div>
						<div class="form_group">
							<div class="form_tag">家长电话：</div>
							<div class="form_ctrl">
								<input class="ipt_text mobile" type="text" name="parentPhone" value="{$list['parent_tel']}"/>
							</div>
						</div>
						<div class="form_group">
							<div class="form_tag">收货地址：</div>
							<div class="form_ctrl">
								<select name="province" id="province" onchange="loadRegion('province',2,'city','/index/learningcenter/getRegion');">
									<option value="0" selected>省份/直辖市</option>
									{volist name="province" id="vo"}
										{if condition="$list['address'][0] eq $vo['r_id']"}
		                                    <option value="{$vo.r_id}" selected="selected">{$vo.r_name}</option>
		                                {else/}
		                                	<option value="{$vo.r_id}" >{$vo.r_name}</option>
		                                {/if}
										
									{/volist}
								</select>
								<select name="city" id="city" onchange="loadRegion('city',3,'town','/index/learningcenter/getRegion');">
									<option value="0">市/县</option>
								</select>
								<select name="town" id="town">
									<option value="0">镇/区</option>
								</select>
								<div class="address">
									<textarea name="address" placeholder="详细地址">{$list['detailed_address']}</textarea>
								</div>
							</div>
						</div>
						<div class="form_group">
							<div class="form_tag">&nbsp;</div>
							<div class="form_ctrl">
								<input class="btn_large_blue01" type="submit" value="保&nbsp;存"/>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>
	if ({$list['address'][1]} != '') {
		loadRegion('province',2,'city','/index/learningcenter/getRegion');
	}
	if ({$list['address'][2]} != '') {
		loadRegion('city',3,'town','/index/learningcenter/getRegion',{$list['address'][1]});
	}
	$(function() {
		if ({$message['state']} == 1) {
			alert(1);
			alert('保存失败');
		}
		if ({$message['state']} == 2) {
			alert('保存成功');
		}
	})
	if ({$message['state']} != 0) {

		alert($message['state']);
		// alert($message['mess']);
	}
	function loadRegion(sel,type_id,selName,url,rr_id=''){
		$("#"+selName+" option").each(function(){
			$(this).remove();
		});

		$("<option value=0>请选择</option>").appendTo($("#"+selName));

		var r_id = $("#"+sel).val()
		if(r_id == 0){
			if (rr_id == '') {
				return;
			}
			r_id = rr_id;
		}
		$.get(url,{r_id:r_id,r_type:type_id},function(data){
			if (data) {
		        $.each(data,function(idx,item){
		        	if (item.r_id == {$list['address'][1]} || item.r_id == {$list['address'][2]} ) {
		        		$("<option value="+item.r_id+" selected='selected'>"+item.r_name+"</option>").appendTo($("#"+selName));
		        	} else {
		        		$("<option value="+item.r_id+">"+item.r_name+"</option>").appendTo($("#"+selName));
		        	}
		        });
			} else {
				$("<option value='0'>请选择</option>").appendTo($("#"+selName));
			}
		});
	}
	
</script>
<script type="text/javascript">seajs.use('vkoweb/js/web/account/modifyinfo');</script>

<!-- 页脚 end -->
<!-- 已替换到head_v8.jsp -->
<!-- <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F637d3bd793ae39095a7b9fcf1f8afb55' type='text/javascript'%3E%3C/script%3E"));
</script> -->
<!-- <script type="text/javascript" src="http://static.vko.cn/v8/common/js/footer.js"></script> -->
<script src="_PUBLIC_/js/footer.js"></script>

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
