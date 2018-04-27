<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style>  
	#login_click{ margin-top:32px; height:40px;}  
	#login_click a   
	{  
		text-decoration:none;  
		background:#2f435e;  
		color:#f2f2f2;  

		padding: 10px 30px 10px 30px;  
		font-size:16px;  
		font-family: 微软雅黑,宋体,Arial,Helvetica,Verdana,sans-serif;  
		font-weight:bold;  
		border-radius:3px;  

		-webkit-transition:all linear 0.30s;  
		-moz-transition:all linear 0.30s;  
		transition:all linear 0.30s;  
	}  
	#login_click a:hover { background:#385f9e; }
</style>  
</head>
<body>
	<center>
	<h2>请点击确定，以完成邮箱验证</h2>
	<h3>不是本人操作，请点取消</h3>
	<!-- <button id="yes">确定</button/> -->
	<!-- <button id="no" >取消</button>
	<input type="button" name="" value="确定" id="yes"> -->

	<div id="login_click">  
		<a id="btlogin" href="#" class="yes">绑 定</a>  <a id="btlogin" href="#" class="no">取 消</a>  
	</div> 

</center>

</body>
</html>
<script src="/static/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('.yes').click(function(){
			$.get("/index/LearningCenter/verificationDo",{email_state:1},function(data){
                if (data == 1) {
                	alert('邮箱绑定成功')
                	window.location.href='/index/LearningCenter/information'
                }
            })
		})

		$('.no').click(function(){
			$.get("/index/LearningCenter/verificationDo",{email_state:0},function(data){
                if (data == false) {
                	alert('绑定失败')
                	window.location.href='/index/LearningCenter/information'
                }
            })
		})
		
	})
</script>