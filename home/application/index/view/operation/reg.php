
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="baidu-site-verification" content="avCYQqZvWf" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微课网-注册页面</title>
    <meta name="keywords" content="微课网,微课,在线教育,高中,初中,课程视频">
    <meta name="description" content="微课网是以中考、高考为目标，提供初高中各学科的在线教育微课程视频，同时你可以和同学组成圈子互动答疑、测试并分享学习动态。">
    <meta name="baidu-site-verification" content="RT8NFMbYCP" />

    <link href="http://static.vko.cn/common/css/base.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="http://static.vko.cn/v8/common/css/reset.css">
    <link rel="stylesheet" href="http://static.vko.cn/v8/v8s/common/css/reg.css">
    <link rel="stylesheet" href="http://static.vko.cn/v8/websso/css/user/register/register.css">


    <style type="text/css">
    .redDIV{
        border:1px solid #ea5413 !important;
    }
   </style>

    <script type="text/javascript" src="http://static.vko.cn/v8/common/jqueryplugin/easyui/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://static.vko.cn/v8/v8s/home/js/md5.js"></script>
    <script type="text/javascript" src="http://static.vko.cn/v8/v8s/common/js/verify.js"></script>
    <script type="text/javascript" src="http://static.vko.cn/v8/v8s/home/js/reg.js"></script>
    <script type="text/javascript" src="http://static.vko.cn/v8/v8s/home/js/userarea.js"></script>
 <!--    <script type="text/javascript" src="http://static.vko.cn/v8/v8s/common/js/footer.js"></script> -->
      

</head>
<body>
    <div class="main"style="background-color:#f0f0f0">
        <div class="header">
            <div class="logo"></div>
            <div class="h-right">
                已有账号，<a href="{:url('Operation/login')}">马上登录</a><a href="{:url('Index/index')}">返回首页</a>
            </div>
        </div>
        <div class="content">
            <div class="title">会员注册</div>
            <form action="" id="" class="reg-form" method="post">
           			 
                <div class="phone" >
                    <input type="text" id="phone" placeholder="手机号"  name="user_account">
                </div>
                

                <div class="phone" >
                    <input type="password" placeholder="请输入6-20位密码，数字/字母/符号等"  name="user_pwd">
                </div>

                <div class="phone" style = "width: 150px" >
                    <input type="text"  placeholder="短信验证码"  name="param">
                </div>
               <input type="button" id="btn" onclick="settimes(this)"  class="login-btn" style="float: right; width: 145px; height: 40px; margin-top: -40px;background-color:green"  value="发送验证码">

                <srcipt src="_PUBLIC_/js/jquery.js"></srcipt>
                <script>
                function settimes(obj) {
                    
                    var phone = $('#phone').val()
                    if (phone == '') {
                        alert('请先填写手机号')
                        return;
                    }
                    if (phone.length != 11) {
                        alert('手机号格式不正确')
                        return;
                    }
                    $.get('/index/operation/shortMessage',{phone:phone},function(msg){
                        if (msg == '') {
                            alert('手机号格式不正确')
                        }
                    })
                    settime(obj);
                }
                var countdown=60;   
                function settime(obj) {
                    if (countdown == 0) {   
                        obj.removeAttribute("disabled");      
                        obj.value="发送验证码";   
                        countdown = 60;   
                        return;  
                    } else {   
                        obj.setAttribute("disabled", true);   
                        obj.value="重新发送(" + countdown + ")";   
                        countdown--;   
                    }   
                    setTimeout(function() {
                        settime(obj) 
                    },1000)
                }

                </script>

                <div class="xieyi clearfix">
                    <div class="l"><span class="icon-checkbox bgcur"></span></div>
                    <div class="r">我已阅读并接受<a href=""return false; class="deal" onclick="showDeal();return false">用户协议</a></div>
                </div>
                <p class="tip"><!--请勾选--></p>
                <input type="submit" class="login-btn" style="background-color:blue" value="注册">
                <div class="links">
                    <span>使用社交账号注册</span>
                    <div class="l-right">
                        <a href="http://www.vko.cn/thirdpartyregister.html?keyName=weixinService&destUrl=http://www.vko.cn/" class="w"></a>
                        <a href="http://www.vko.cn/thirdpartyregister.html?keyName=31qqService&destUrl=http%3A//www.vko.cn/" class="q"></a>
                        <a href="http://www.vko.cn/thirdpartyregister.html?keyName=sinaService&destUrl=http%3A//www.vko.cn/" class="b"></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="bq">
        <p>版权所有：北京微课创景教育科技有限公司 www.vko.cn 京ICP备12002746号</p>
    </div>
    
<div class="md-modals" style="display: none;width:920px;" id="regeriset-hehe">
    <div class="md-modal-inners">
        <div class="md-modal-titles">
            <p>服务条款</p>
        </div>
		<input type="hidden" id="owner" />
        <div class="md-modal-conts">
			<div class="md-form-items">
				<div class="md-form-contents">
					<div class="md-form-inputs">
                    	<div class="vkoservice">
                    		<h4><span>微课用户服务条款</span><em></em></h4>
                    		<div class="service-body">
                    				<p><strong>1. 微课网服务条款的确认和接纳</strong></p>
                    				<p>　　用户必须完全接收本服务条款的全部内容，并完成注册程序，才能成为微课网的注册学员，享受微课网的相关服务。</p>  
                    				<p><strong>2. 用户承担的责任</strong></p>     
                    					<p>　　(1) 自备上网所需要的设备，自行承担上网产生的各项费用。使用自己的电脑能够顺利地接入国际互联网，并能访问本网站主页。</p> 
                    					<p>　　(2) 提供详尽、准确的个人资料并及时更新个人资料。若用户提供任何错误、不实、过时或不完整的资料，或者微课网有合理理由怀疑用户所提供资料为错误、不实、过时或不完整，微课网保留暂停或终止其注册学员资格的权利。 </p>    
                    					<p>　　(3) 必须遵守中华人民共和国的法律、法规、规章、条例、以及其他具有法律效力的规范，不使用网络服务做非法用途。</p>      
                    					<p>　　(4) 不得利用软件或网络系统漏洞干扰或混乱网络服务。</p>      
                    					<p>　　(5) 不得侵犯微课网所有著作权、版权以及其它权益。</p>     
                    					<p>　　(6) 不得将广告、促销资料等，加以上载、张贴、发送电子邮件或以其他方式传送。供前述目的使用的专用区域除外。</p>       
                    					<p>　　(7) 用户对其发布的内容单独承担责任。</p>      
                    					<p>　　(8) 微课网有权对您使用微课网络服务的情况进行审查和监督(包括但不限于对您存储在微课网的内容进行审核)，如您在使用网络服务时违反任何上述规定，微课网有权要求您改正或直接采取一切必要的措施（包括但不限于更改或删除您张贴的内容等、暂停或终止您使用网络服务的权利）以减轻您的不当行为造成的影响。</p>   
                    				<p><strong>3. 用户名及密码的安全性</strong></p>       
                    					<p>　　(1) 用户务必确保用户名及密码的安全性。如果丢失或损坏，造成的损失将由本人承担全部后果。用户对利用该用户名及密码所进行的一切活动负全部责任；因此所衍生的任何损失或损害，微课网无法也不承担任何责任。</p>       
                    					<p>　　(2) 用户不得将用户名借予他人或多人共同使用。如果微课网发现多人共用一个用户名或用户登录IP地址、点击记录异常等情况，微课网保留暂停或终止该用户的权利。</p>       
                    				<p><strong>4. 服务约定</strong></p>      
                    					<p>　　(1) 微课网为用户提供的视频资源，用户不得使用软件截取下来作为商品进行销售或共享到其他网站上（视频共享问题）。</p>      
                    					<p>　　(2) 微课网为用户提供可下载的辅助学习的教学资料内容，允许用户作为资料自行保存，用户不得将其作为商品进行销售或共享到其他网站上。</p>  
                    					<p>　　(3) 用户充值成功后，如遇课程质量问题（包括课程画制问题、教学内容严重错误等），微课网将以等同价格课程调换形式予以解决。</p>               
                    				<p><strong>5. 免责声明</strong></p>     
                    					<p>　　(1) 微课网不保证（包括但不限于）：</p>      
                    					<p>　　　　a. 本服务不受干扰，及时、安全、可靠或不出现错误；</p>     
                    					<p>　　　　b. 用户经由本服务取得的任何产品、服务或其他材料符合用户的期望；</p>       
                    					<p>　　(2) 用户使用经由本服务下载的或取得的任何资料，其风险自行负担。</p>       
                    					<p>　　(3) 由于地震、台风、洪水、火灾、战争、政府禁令以及其他不能预见并且对其发生和后果不能防止或避免的不可抗力或互联网上的黑客攻击事件，致使影响本服务条款的履行，微课网不承担责任。</p>      
                    				<p><strong>6. 结束服务</strong></p>     
                    					<p>　　用户或本网站双方可随时根据实际情况中断一项或多项网络服务。本网站可以随时中断服务而不需对任何个人或第三方负责。用户对网站的条款修改有异议，或对本网站的服务不满，可以行使如下权利：</p>      
                    					<p>　　(1) 停止使用本网站的网络服务。</p>     
                    					<p>　　(2) 通告本网站停止对该用户的服务。</p>     
                    					<p>　　结束用户服务后，用户使用网络服务的权利马上中止。从那时起，用户没有权利，本网站也没有义务传送任何未处理的信息或未完成的服务给用户或第三方。</p>      
                    				<p><strong>7. 服务条款的修改</strong></p>      
										<p>　　微课网有权在必要时修改本服务条款以及各单项服务的相关条款。用户在享受单项服务时，应当及时查阅了解修改的内容，并自觉遵守本服务条款以及该单项服务的相关条款。本网站行使修改或中断服务的权利，不需对用户或第三方负责，并且除特别声明外不退还任何费用。</p>      
                    				<p><strong>8. 个人隐私的声明</strong></p>     
										<p>　　微课网隐私权声明系本网站保护用户个人隐私的承诺。鉴于网络的特性以及本公司所为你提供服务的性质，本网站将不可避免地与你产生直接或间接的互动关系，故特此说明本网站对用户个人信息所采取的收集、使用和保护政策，请你务必仔细阅读：</p>      
                    					<p>　　(1) 当你在微课网进行用户注册登记、使用本站提供的服务时，在你的同意及确认下，本网站将通过注册表格等形式要求你提供一些个人资料。</p>    
                    					<p>　　(2) 在未经你同意及确认之前，本网站不会将你所提供的资料利用于其它目的。</p>   
                    					<p>　　(3) 本网站将对你所提供的资料进行严格的管理及保护，本网站将使用相应的技术，防止你的个人资料丢失、被盗用或遭窜改。</p>      
                    					<p>　　(4) 本网站在符合下列条件之一，可以对收集之个人资料进行必要范围以外之利用：</p>      
                    					<p>　　　　a. 已取得你的书面同意；</p>      
                    					<p>　　　　b. 为免除你在生命、身体或财产方面所面临的急迫危险；</p>      
                    					<p>　　　　c. 为防止他人权益遭受重大危害；</p>     
										<p>　　　　d. 为防止他人权益遭受重大危害；</p>      
                    					<p>　　(5) 在本网站为你提供网络交流的服务中你所公布的任何信息都会成为公开的信息。因此，我们提醒并请你慎重考虑是否有必要在这些区域公开你的个人信息。</p>      
                    					<p>　　(6) 监护人应承担保护未成年人在网络环境下的隐私权的首要责任。</p>      
										<p>　　(7) 监护人应承担保护未成年人在网络环境下的隐私权的首要责任。</p>       
                    					<p>　　　　a. 由于你将用户密码告知他人或与他人共享注册帐户，由此导致的任何个人资料泄露。</p>      
                    					<p>　　　　b. 任何由于计算机系统、黑客攻击、计算机病毒侵入或发作、因政府管制而造成的暂时性关闭等影响网络正常经营之不可抗力而造成的个人资料泄露、丢失、被盗用或被篡改等。</p>      
                    					<p>　　　　c. 当政府机关依照法定程序要求本网站披露个人资料时，本网站将根据执法单位的要求或为公共安全之目的提供个人资料。在此情况下之任何披露。</p>     
                    				<p><strong>9. 微课网对本服务条款拥有最终解释权</strong></p> 
							</div>
						</div>
                    </div>
				</div>
			</div>
        </div>
        <div class="md-form-items">
            <input  type="button" onclick="serveragree();" value="同意" class="sureBtnss">
        </div>

    </div>
</div>

<div class="md-overlays" id="showOverLay" style="display: none" onclick="hideDeal()"></div>
</body>
<script>
    function showDeal() {
        $(".md-overlays").show();
        $(".md-modals").fadeIn();
        return false;
    }
    function hideDeal() {
        $(".md-overlays").hide();
        $(".md-modals").hide();
    }

</script>
<script>
    $('#mpanel1').slideVerify({
        type : 1,		//类型
        vOffset : 5,	//误差量，根据需求自行调整
        barSize : {
            width : '100%',
            height : '38px',
        },
        ready : function() {
        },
        
        error : function() {

        }

    });


</script>


</html>