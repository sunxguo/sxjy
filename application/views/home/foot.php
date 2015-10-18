<div style="background:#959595; margin-top:40px;">
    <div style="width:1000px; margin:0 auto; text-align:center; padding:40px 0;">       
	    <a href="#" style="color:#ffffff;">关于我们</a>
		<b style="color:#ffffff;">丨</b>
		<a href="#"  style="color:#ffffff;">联系我们</a>
		<b style="color:#ffffff;">丨</b>
		<a href="#"  style="color:#ffffff;">法律顾问</a>
		<b style="color:#ffffff;">丨</b>
		<a href="#"  style="color:#ffffff;">意见反馈</a>
		<b style="color:#ffffff;">丨</b>
		<a href="#"  style="color:#ffffff;">合作声明</a>
		<b style="color:#ffffff;">丨</b>
		<a href="#"  style="color:#ffffff;">版权声明</a>
		<p style="margin-top:30px; color:#ffffff;">主办单位：山西省教育宣传中心    晋ICP备11006001号—1</p>
		<p style="margin-top:14px; color:#ffffff;">未经山西教育在线书面协议授权不得转载、链接或以其他方式复制发表，禁止下载</p>
		<p style="margin-top:14px; color:#ffffff;">违法不良信息举报中心  网站信息举报：0351-3208490</p>
	</div>
	<script type="text/javascript">
	function logout () {
		var data=new Object();
		data.infoType='logout';
		//data.validcode=$("#validcode").val();
		dataHandler('/common/getInfo',data,null,null,null,logoutSuccess,false,false);
	}
	function logoutSuccess(){
		location.reload();
	}
	</script>
</div>