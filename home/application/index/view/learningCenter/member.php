
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>会员支付</title>
    <script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/easyui/jquery-1.7.2.min.js"></script>
<!--<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/base.css">-->	

<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/top_common.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/common-inherit.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/ie.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/print.css">
<!--<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/pre-common.css">-->	
	
	
	
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/screen.css">
<link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/common/css/web/pagination.css">
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/utils.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/cookie.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/vkouser.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/local/md5.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/login.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/handlebars-1.0.0.beta.6.js"></script>
<script type="text/javascript" src="http://static.vko.cn/v8/common/js/handlebarsextend.js"></script>


<script type="text/javascript" src="http://static.vko.cn/common/js/vkofileloader.js"></script>
<!--<script type="text/javascript" src="http://static.vko.cn/v8/common/js/seajs/2.2.0/sea.js"></script>	
<script type="text/javascript" src="http://static.vko.cn/v8/common/config.js"></script>-->
<script>
	var staticPath = 'http://static.vko.cn/v8';
	var ssoPath='http://sso.vko.cn';
	var studyCenterPath='http://studycenter.vko.cn';
	var topicPath='http://topic.vko.cn';
	var baseRoot = 'http://topic.vko.cn/topic/index';
	var rootPath = 'http://www.vko.cn';
</script>
<!-- 页脚 end -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F637d3bd793ae39095a7b9fcf1f8afb55' type='text/javascript'%3E%3C/script%3E"));
</script>

    <!-- file="top.html"-->
    <link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/common/css/common.css" />
    <link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/vip/css/vip.css" />
    <link rel="stylesheet" type="text/css" href="http://static.vko.cn/v8/v8s/vip/css/vipTest.css" />
	<script type="text/javascript" src="http://static.vko.cn/v8/v8s/vip/js/toMember.js"></script>
</head>

<body>
<form action="http://pay.vko.cn/pay/order/member" method="post" id="form1">
<div class="vipCont">
    <div class="vTitle clearfix">
        <h6>开通会员</h6>
        <p>会员看课更省心、更优惠</p>
    </div>
    <div class="vMain clearfix">
        <div class="vmLeft">
            <div class="vmSelect">
                <p>选择开通的套餐</p>
                <div class="memberBox">
                 <p class="memberTit">初中</p>
                 <div class="vmsDet clearfix">
	                <input type="hidden"  id="memberConfigId" name="memberConfigId" value="$memberconfigList[0].id"/>
					<input type="hidden" id="txtPrice" value="$memberconfigList[0].price"/>
					<input type="hidden" id="txtName" value="$memberconfigList[0].name"/>
					<input type="hidden" id="flag" value=""/>
												                    <div class="tc cur" id="fristTc" onclick="changeMemberConfig(this,15,539.00,'初一半年')">
	                        <p class="tcDet">初一半年</p>
	                        <p class="price">￥<b>539.00</b></p>
	                    </div>
	                    <script >
	                	   setTimeout(function(){
								changeMemberConfig($("#fristTc"),15,539.00,'初一半年')
						   },100);
	                    </script>
	                    													                    <div class="tc" onclick="changeMemberConfig(this,16,899.00,'初一全年')">
	                        <p class="tcDet">初一全年</p>
	                        <p class="price">￥<b>899.00</b></p>
	                    </div>
																			                    <div class="tc" onclick="changeMemberConfig(this,17,599.00,'初二半年')">
	                        <p class="tcDet">初二半年</p>
	                        <p class="price">￥<b>599.00</b></p>
	                    </div>
																			                    <div class="tc" onclick="changeMemberConfig(this,18,999.00,'初二全年')">
	                        <p class="tcDet">初二全年</p>
	                        <p class="price">￥<b>999.00</b></p>
	                    </div>
																			                    <div class="tc" onclick="changeMemberConfig(this,19,719.00,'初三半年')">
	                        <p class="tcDet">初三半年</p>
	                        <p class="price">￥<b>719.00</b></p>
	                    </div>
																			                    <div class="tc" onclick="changeMemberConfig(this,20,1199.00,'初三全年')">
	                        <p class="tcDet">初三全年</p>
	                        <p class="price">￥<b>1199.00</b></p>
	                    </div>
												                 </div>
                </div>
                 <div class="memberBox">
                 <p class="memberTit">高中</p>
                 <div class="vmsDet clearfix">
	                <!--<input type="hidden"  id="memberConfigId" name="memberConfigId" value="$memberconfigList[0].id"/>
					<input type="hidden" id="txtPrice" value="$memberconfigList[0].price"/>
					<input type="hidden" id="txtName" value="$memberconfigList[0].name"/>
					<input type="hidden" id="flag" value="$flag"/>-->
						                    <div class="tc" onclick="changeMemberConfig(this,21,899.00,'高一半年')">
	                        <p class="tcDet">高一半年</p>
	                        <p class="price">￥<b>899.00</b></p>
	                    </div>
						                    <div class="tc" onclick="changeMemberConfig(this,22,1499.00,'高一全年')">
	                        <p class="tcDet">高一全年</p>
	                        <p class="price">￥<b>1499.00</b></p>
	                    </div>
						                    <div class="tc" onclick="changeMemberConfig(this,23,899.00,'高二半年')">
	                        <p class="tcDet">高二半年</p>
	                        <p class="price">￥<b>899.00</b></p>
	                    </div>
						                    <div class="tc" onclick="changeMemberConfig(this,24,1499.00,'高二全年')">
	                        <p class="tcDet">高二全年</p>
	                        <p class="price">￥<b>1499.00</b></p>
	                    </div>
						                    <div class="tc" onclick="changeMemberConfig(this,25,1139.00,'高三半年')">
	                        <p class="tcDet">高三半年</p>
	                        <p class="price">￥<b>1139.00</b></p>
	                    </div>
						                    <div class="tc" onclick="changeMemberConfig(this,26,1899.00,'高三全年')">
	                        <p class="tcDet">高三全年</p>
	                        <p class="price">￥<b>1899.00</b></p>
	                    </div>
					                 </div>
                </div>
				
				<div class="memberBox">
                 <p class="memberTit">小学</p>
                 <div class="vmsDet clearfix">
	                    <div class="tc" onclick="changeMemberConfig(this,36,1299.00,'小学全年')">
	                        <p class="tcDet">小学全年</p>
	                        <p class="price">￥<b>1299.00</b></p>
	                    </div>
                 </div>
                </div>
				
            </div>
            <div class="vmCoins">
            	<input type="hidden" name="vcoin" id="vcoin" />
				<input type="hidden" name="vcoinText" id="vcoinText" value="0"/>
                <p>使用v币或优惠码：</p>
                <div class="vmcDet">
                   	<div class="vmvcoins clearfix">
						<div class="left clearfix">
							<p class="left"><input type="radio" name="couponType" id="radio1" value="vcoinRadio"/><label class="radio" for="radio1">v币抵现</label></p>
														<p class="right vPrice">V币余额： <span class="mar">0V币</span>可抵<span>0.0元</span></p>
						</div>
					</div>
                    <div class="vmcode clearfix">
						<div class="left clearfix">
							<p class="left"><input type="radio" name="couponType" id="radio2" value="discount"/><label class="radio" for="radio2">使用优惠码</label></p>
							<p class="right"><input class="txt" type="text" name="discountId" id="discountId" disabled="true"  /></p>
						</div>
						<p class="tips" id="failDiscount" style="display: none" ><img src="http://static.vko.cn/v8/v8s/vip/images/cico.png"/>无效的优惠码</p>
					</div>
                </div>
            </div>
            <div class="vmPaynum" id="submitDiv">
           		<input type="hidden"  id="amount" name="amount" value="$memberconfigList[0].price"/>
				<input type="hidden"  id="h_ip" name="ip" value=""/>
				<input type="hidden"  id="h_provinceId" name="provinceId" value="0"/>
				<input type="hidden"  id="h_cityId" name="cityId" value="0"/>
                <p>实付金额：<span id="orderPrice"><b></b>元</span></p>
                 <a class="orderBtn" href="javascript:$('#form1').submit();">提交订单</a>
            </div>
        </div>
        <div class="vmRight">
            <p class="tit">会员超级福利</p>
            <div class="vmrLis">
                <dl>
                      <dt><img src="http://static.vko.cn/v8/v8s/vip/images/pic1.png" alt=""></dt>
                    <dd>
                        <h6>百位名师全知识点解读</h6>
                        <p>疑难困窘随时清理
                            新课学习快人一步</p>
                    </dd>
                </dl>
                <dl>
                    <dt><img src="http://static.vko.cn/v8/v8s/vip/images/pic2.png" alt=""></dt>
                    <dd>
                        <h6>关键学科名师直播辅导</h6>
                        <p>全年各学段点拨突破
                            归纳题型破解障碍
                            层次提升能力水平</p>
                    </dd>
                </dl>
                <dl>
                    <dt><img src="http://static.vko.cn/v8/v8s/vip/images/pic3.png" alt=""></dt>
                    <dd>
                        <h6>定期名师坐堂门诊
                        </h6>
                        <p>名师定期会诊疑难
                            在线互动答疑解惑</p>
                    </dd>
                </dl>
                <dl>
                    <dt><img src="http://static.vko.cn/v8/v8s/vip/images/pic4.png" alt=""></dt>
                    <dd>
                        <h6>百万题库随时组卷测试</h6>
                        <p>海量题库智能组卷
                            随时筛查知识漏洞</p>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>

<!-- 加载公共部分 -->
<script src="_PUBLIC_/js/header.js"></script>
<script src="_PUBLIC_/js/footer.js"></script>
<!-- 加载公共部分 -->
<script type="text/javascript">
    $(function(){
		var ip='',ipCid='0';
		$.getScript('http://pv.sohu.com/cityjson?ie=utf-8',function(){
			ip = returnCitySN.cip;
			ipCid = returnCitySN.cid;
			$('#h_ip').val(ip);
			if(ipCid.length>=4){
				$('#h_provinceId').val(ipCid.substring(0,2));
				$('#h_cityId').val(ipCid.substring(0,4));
			}
			
			console.log(ipCid+"======="+ip);
		}); 
        $('.tc').on('click',function(){
            $('.vmsDet div.tc').removeClass('cur');
            $(this).toggleClass('cur');
        });
        $('.vmcode input.txt').on('focus',function(){
            $(this).css("background","#FFFFFF");
        });
        $('.vmcode input.txt').on('blur',function(){
            $(this).css("background","#F5F5F5");
        });
        //.vmcDet label.radio
        $('.vmcDet label.radio').on('click',function(){
            $('.vmcDet label.radio').removeClass('radioc');
            $(this).toggleClass('radioc');
        })
    });
</script>
</body>

</html>