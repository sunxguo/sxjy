<script src="http://libs.baidu.com/jquery/1.4.2/jquery.min.js"></script>
<script src="/assets/js/common.js" type="text/javascript"></script>
<div>
	<div style="height:30px; background:#eeeeee;">
		<div style="width:1000px; padding:8px 0;margin:0 auto; text-align:left;">
			<!--
			<a href="#" style="padding-left:20px; background:url(/assets/images/1.png) no-repeat left center;text-decoration:none;">
				山西教育咨询中心
			</a>
			-->
			<span>主管单位：山西省教育厅 主办单位：山西省教育宣传中心 山西省教育厅新闻事务办公室</span>
			<!--<span href="#">请<a href="/home/login" style="color:#e30516;">登录</a>丨<a href="/home/register">注册</a></span>
			<a href="http://www.weather.com.cn/weather1d/101100101.shtml" target="_blank">太原 <span id="temp1"></span>~<span id="temp2"></span> <span id="weather"></span>[详情]</a>-->
		</div>
	</div>
	<div style="background:url(/assets/images/2.1.png); height:112px;">
		<div style="width:1000px; margin:0 auto;padding-top:16px;">
		    <div>
			<div style="float:left; wigth:272px;">
				<a href="/"><img style="border:none;" src="/assets/images/logo.png"/></a>
			</div>
			<div style="float:right;width:720px">
				<div style="float:right; margin-top:15px;">
					<ul style="margin-bottom:10px;">
						<li>
							<a href="#" style="color:red; padding:0 5px; color:#292929;">新 闻</a>
							<a href="#" style="padding:0 5px; color:#292929;">图 片</a>
							<a href="#" style="padding:0 5px; color:#292929;">视 频</a>
							<a href="#" style="padding:0 5px; color:#292929;">学 校</a>
							<a href="#" style="padding:0 5px; color:#292929;">资 源</a>
							<a href="#" style="padding:0 5px; color:#292929;">百 度</a>
						</li>
					</ul>
					<form action="/home/search" method="get" enctype="multipart/form-data">
						<input name="keywords" class="search-text" type="text" style="background:#eeeeee; border:1px solid #d4d4d4; width:320px; height:20px;padding:5px 12px;float:left;">
						<input type="submit" value="搜索" style="cursor:pointer;background:#eeeeee; width:68px; height:32px; border:1px solid #d4d4d4; margin-left:-4px;display:block;float:left;">
					</form>
				</div>
			</div>
			<div style="clear:both;"></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery.get(
	"/common/getWeather",
	{},
	function(data){
		var result=jQuery.parseJSON(data);
		var weatherinfo=result.weatherinfo;
		jQuery("#weather").text(weatherinfo.weather);
		jQuery("#temp1").text(weatherinfo.temp1);
		jQuery("#temp2").text(weatherinfo.temp2);
	});
});
</script>