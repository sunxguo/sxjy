<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>详细页面</title>
<link rel="stylesheet" href="/assets/css/denglu.css" />
</head>
<body>
<?php require('head.php');?>
<div>
<div style="background:#f8cfd2; height:40px;">
	<div style="width:1000px; margin:0 auto;">
		 <ul style="float:left;text-align:center;">
			<li style="float:left; padding:11px 0; width:100px;">
				<a  href="/" style="font-size:14px; ">首页</a>
			</li>
			<li style="float:left; padding:11px 0; width:100px;">
				<a href="/home/news" style="font-size:14px;">新闻</a>
			</li>
			<li style="float:left; padding:11px 0; width:100px;">
				<a href="/home/edu" style="font-size:14px;">教育</a>
			</li>
			<li style="float:left; padding:11px 0; width:100px;">
				<a href="/home/area" style="font-size:14px;">市县</a>
			</li>
			<li style="float:left; padding:11px 0; width:100px;">
				<a href="/home/enrol" style="font-size:14px;">招考</a>
			</li>
			<li style="float:left; padding:11px 0; width:100px;">
				<a href="/home/school" style="font-size:14px;">学校</a>
			</li>
			<li style="float:left; padding:11px 0; width:100px;">
				<a href="/home/policy" style="font-size:14px;">政策</a>
			</li>
			<li style="float:left; padding:11px 0; width:100px;">
				<a href="/home/active" href="active.html" style="font-size:14px;">活动</a>
			</li>
			<li style="float:left; padding:11px 0; width:100px;">
				<a href="/home/about" href="about.html" style="font-size:14px;">关于</a>
			</li>
			<div style="clear:both;"></div>
		</ul>
	</div>
</div>
<!--
<div style="background:#e60012; height:48px;">
	<div style="width:1000px; margin:0 auto;">
		<div style="text-align:left; padding-top:8px;">
			<ul>
				<li style="float:left;">
					<a><img src="/assets/images/30.png"/></a>
				</li>
				<li style="float:left; margin-left:26px; margin-top:10px;">
					<a href="#" style="color:#ffffff;">资 讯</a>
					<b style="color:#ffffff;">丨</b>
					<a href="#"  style="color:#ffffff;">时 评</a>
					<b style="color:#ffffff;">丨</b>
					<a href="#"  style="color:#ffffff;">人 物</a>
					<b style="color:#ffffff;">丨</b>
					<a href="#"  style="color:#ffffff;">三晋教育</a>
					<b style="color:#ffffff;">丨</b>
					<a href="#"  style="color:#ffffff;">教育广角</a>
				</li>
				<div style="clear:both;"></div>
			</ul>
		</div>
	</div>
</div>
-->
<div>
	<div style="width:1000px; margin:0 auto;">
		<div>
			<ul style="padding:20px 0;">
				<li style="width:20px; height:24px; background:#df091c; float:left;"></li>
				<li style="float:left; line-height:24px; margin-left:10px;">
					<p><a href="/">首页</a> >> 新闻 >> 咨询 >> 正文</p>
				</li>
				<div style="clear:both;"></div>
			</ul>
			<div style="border:1px solid #d4d4d4;">
				<div class="wrapper">
					<div class="detail_main">
						<h1><?php echo $essay->title;?></h1>
						<div class="detail_header_des" style="text-align: right;"><?php echo $essay->time;?> <!--来源：上海教育新闻网	作者：刘晓晶--></div>
						<img src="<?php echo $essay->thumbnail;?>" style="max-width:660px;margin-bottom:10px;" />
						<div class="detail_img_des"><?php echo $essay->summary;?></div>
						<div class="detail_text">
							<?php echo $essay->content;?>
						</div>
					</div>
					<div class="detail_side">
						<img src="/assets/images/74.png" alt="img">
						<dl class="side_item">
							<dt>每日推荐<a href="##" class="fr">更多</a></dt>
							<dd>
								<div class="side_main">
									<h1 class="ellipsis">黄浦区教育工会创新案例黄浦区教</h1>
									<p>黄浦区教育工会创新案例黄浦区教黄浦区教育工会创新案例黄浦区教黄浦区教育工会创新案例黄浦区教</p>
								</div>
								<ul class="side_list">
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
								</ul>
							</dd>
						</dl>
						<dl class="side_item">
							<dt>阅读排行</dt>
							<dd>
								<ul class="side_list">
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
									<li><a href="##">黄浦区教育工会创新案例黄浦区教</a></li>
								</ul>
							</dd>
						</dl>
					</div>
					
					
					
					
			
					
				</div>
				
			</div>
		</div>
	</div>
</div>
<?php require('foot.php');?>
</body>
</html>