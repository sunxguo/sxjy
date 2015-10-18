<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="/assets/css/login.css"/>
<link rel="stylesheet" type="text/css" href="/assets/plugins/icomoon/style.css">
<script type="text/javascript" src="/assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/assets/js/common.js"></script>
</head>
<body>
<div class="head">
    <div class="head-top">
	    <p><img src="/assets/images/1.png">&nbsp;山西教育咨询中心&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>太原</span>&nbsp;&nbsp;25°C~16°C[详情]</p>
	</div>
</div>

<div>
	<div class="head-mian">     
		<div class="head-mian-img"><img src="/assets/images/logo.png"></div>
		<div class="head-mian-p"><p id="today"></p></div>
		<div style="clear:both;"></div>
	</div>
</div>

<div class="content">
    <div class="content-background">
         <div class="content-left"><img src="/assets/images/5.png"></div>
		 <div class="content-right">
     		 <div class="content-right-content">
			    <div class="content-right-content-top">
					<p><!--快速登录&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->账户密码登录</p>
				    <div style="width:284px; height:2px; background-color:#959595;  margin:16px auto;">
					     <div style="width:142px; height:2px; background-color:#ffc000; margin-left:142px;"></div> 
					</div>
					<div class="account">
					    <div class="account-head">
					    	<i class="icon-user"></i><input id="email" type="text" placeholder="邮箱"/>
					    </div>
					</div>
					<div style="clear:both;"></div>
					<div class="account">
					    <div class="account-head">
						    <i class="icon-unlocked"></i><input id="password" type="password" placeholder="密码" />
					    </div>
					</div>
					<div style="clear:both;"></div>
					<div class="forget">
						<p style="marigin-bottom:10px;"><!--忘记登陆密码-->
							<a href="/home/register" style="dispaly:inline-block;float:right;">立即注册？</a>
						</p>
						<div style="clear:both;"></div>
					</div> 
				    <button onclick="login();" style="cursor:pointer;">登&nbsp;&nbsp;&nbsp;&nbsp;录</button>
				    <!--
					<ul class="login">
                        <li class="other-login">
						     <a href="#" class="qq-login" title="QQ登陆">QQ登录</a>
							 &nbsp;&nbsp;&nbsp;&nbsp;
                             <a href="#" class="weibo-login" title="微博登录">微博登录</a>
							 &nbsp;&nbsp;
							 <a href="#" class="weixin-login" title="微信登录">微信登录</a>
                        </li>
                    </ul>
					-->
				</div>
			 </div> 
		 </div>
		 <div style="clear:both;"></div>
	    
	</div>
</div>
<script type="text/javascript">
	var oDate = new Date(); //实例一个时间对象 2015年6月29日 星期一
	$("#today").text(dateFormat ('YYYY年MM月DD日 星期W',oDate));
	function login(){
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
		var data=new Object();
		data.infoType='login';
		data.email=$("#email").val();
		data.password=$("#password").val();
		//data.validcode=$("#validcode").val();
		dataHandler('/common/getInfo',data,null,null,null,loginSuccess,false,false);
	}
	function loginSuccess(){
		location.href="/home";
	}
</script>
<div>
<div class="footer-hd">
    <p>
    <a href="#">关于我们</a>
    <b>|</b>
    <a href="#">联系我们</a>
    <b>|</b>
    <a href="#">法律顾问</a>
    <b>|</b>
    <a href="#">意见反馈</a>
    <b>|</b>
    <a href="#">合作声明</a>
    <b>|</b>
    <a href="#">版权声明</a>
    </p>
</div>
<div class="footer-bd">
    <p>主办单位：山西省教育宣传中心&nbsp;&nbsp;&nbsp;&nbsp;晋ICP备11006001号—1</p>
</div>
</body>
</html>