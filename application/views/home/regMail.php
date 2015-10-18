<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="/assets/css/denglu.css"/>
<script type="text/javascript" src="/assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/assets/js/common.js"></script>
</head>
<body style="text-align:center;">
	<div>
		<div style="height:30px; background:#eeeeee;">
			<div style="width:1000px; padding:8px 0;margin:0 auto; text-align:left;">
				<a href="#" style="padding-left:20px; background:url(/assets/images/1.png) no-repeat left center;text-decoration:none;">山西教育咨询中心</a>
				<a href="#">太原 25°C~16°C 阵雨~多云[详情]</a>
			</div>
		</div>
		<div style="background:url(/assets/images/2.1.png); height:112px;">
			<div style="width:1000px; margin:0 auto;padding-top:16px;">
			    <div style="float:left;">
					<a href="/"><img src="/assets/images/logo.png"/></a>
				</div>
				<div style="float:right; margin-top:66px;">
				    <a>已注册账号？ 您可以直接</a>
					<a href="/home/login" style="color:#008cc8;">登录</a>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
	</div>
	<div>
	    <div style="background:url(/assets/images/4.png); height:658px;">
			<div style="width:1000px; padding:20px; margin:0 auto;">
				<div style="height:38px; width:806px; padding:40px; margin-left:80px;">
					<div style="height:4px; width:806px; background:#d4d4d4;">
					    <div style="height:4px; width:274px; background:#ffffff;">
							<a style="background:none repeat scroll 0 0 #ffffff; border-radius: 78.5px 78.5px 78.5px 78.5px;width:40px;height:40px;line-height:40px;font-weight:600;color:#009900;position: absolute; margin-top:-16px; margin-left:120px;">√</a>
							<a style="background:none repeat scroll 0 0 #d4d4d4; border-radius: 78.5px 78.5px 78.5px 78.5px;width:40px;height:40px;line-height:40px;font-weight:600;color:#009900;position: absolute; margin-top:-16px; margin-left:380px;"></a>
						</div>
						<div style="margin-top:40px;">
							<a style="color:#ffffff;">设置账号信息&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#d4d4d4;">注册成功</span></a>
						</div>
						<div style="height:460px; width:806px; background:#dff1f8;margin-top:24px;">
							<div style="padding-top:60px; width:450px; margin-left:138px;text-align:right;">
								<div>
									<a><font style="color:red;">*</font>电子邮箱：</a>
									<input id="email" type="text" style="width:250px; height:28px; border:1px solid #d4d4d4; color:#646464;font-size:12px;padding:0 5px;" placeholder="请输入邮箱"/>
									<!--
									<button style="height:30px; border:1px solid #d4d4d4; background:#dcdcdc; width:86px;">获取验证码</button>
									-->
							    </div>
								<div style="padding-top:25px;">
									<a><font style="color:red;">*</font>登录密码：</a>
									<input id="password" type="password" style="width:250px; height:28px; border:1px solid #d4d4d4; color:#646464;font-size:12px;padding:0 5px;"/>
									<!--
									<div style="margin-top:4px;">
										<button style="background:#ff9c00; border:none; font-size:9px; width:81px; color:#ffffff;">强</button>
										<button style="background:#ffc000; border:none; font-size:9px; width:81px; color:#ffffff;">弱</button>
										<button style="background:#ffc000; border:none; font-size:9px; width:81px; color:#ffffff;">很弱</button>
									</div>
									-->
							    </div>
								<div style="padding-top:25px;">
									<a><font  style="color:red;">*</font>确认登录密码：</a>
									<input id="repassword" type="password" style="width:250px; height:28px; border:1px solid #d4d4d4; color:#646464;font-size:12px;padding:0 5px;"/>
							    </div style="padding-top:25px;">
								<div style="margin-top:25px;">
									<a><font style="color:red;">*</font>验证码：</a>
									<input id="validcode" type="text" style="width:86px; height:28px; border:1px solid #d4d4d4; color:#646464;font-size:12px;padding:0 3px;"/>
									<img id="validCodeImg" src="" width="87" height="30" style="cursor:pointer;vertical-align: top;" onclick="refreshCode();">
									<a style="font-size:12px;color:#C3C3C3;">点击图片更换</a>
							    </div>
								<div style="margin-top:25px; text-align:left; margin-left:198px;">
									<button onclick="register();" style="cursor:pointer;width:114px; height:30px; background:#ffc000; border-radius:5px; border:none; color:#ffffff;">立即注册</button>
								</div>
								<!--
								<div style="margin-top:15px; text-align:left; margin-left:200px;">
									<a href="regPhone.html" style="color:#ffc000;">使用手机号注册 >> </a>
								</div>
								-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require('foot.php');?>
	<script type="text/javascript">
		refreshCode();
		function register(){
			if($("#email").val()==''){
				alert('邮箱不能为空！');
				return false;
			}
			if(!isEmail($("#email").val())){
				alert('邮箱格式不正确！');
				return false;
			}
			if($("#password").val()==''){
				alert('密码不能为空！');
				return false;
			}
			if($("#repassword").val()==''){
				alert('请输入确认密码！');
				return false;
			}
			if ($("password").val()!=$("repassword").val()){
				alert('两次密码不一致');
				return false;
			}
			if($("#validcode").val()==''){
				alert('请输入验证码！');
				return false;
			}
			var data=new Object();
			data.infoType='user';
			data.email=$("#email").val();
			data.password=$("#password").val();
			data.validcode=$("#validcode").val();
			dataHandler('/common/addInfo',data,null,null,null,registerSuccess,false,false);
		}
		function registerSuccess(){
			alert('恭喜，注册成功，点击确定跳转至登录页面！');
			location.href="/home/login";
		}
	</script>
</body>
</html>