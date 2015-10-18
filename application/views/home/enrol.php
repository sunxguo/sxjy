<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="/assets/plugins/swiper/swiper.min.css">
<link rel="stylesheet" href="/assets/css/denglu.css"/>
		<style type="text/css">
		/* css 重置 */
		*{margin:0; padding:0; list-style:none; }
		body{ background:#fff; font:normal 12px/22px 宋体;  }
		img{ border:0;  }
		a{ text-decoration:none; color:#333;  }

		/* 本例子css */
		.slideBox{ width:450px; height:230px; overflow:hidden; position:relative; border:1px solid #ddd;  }
		.slideBox .hd{ height:15px; overflow:hidden; position:absolute; right:5px; bottom:5px; z-index:1; }
		.slideBox .hd ul{ overflow:hidden; zoom:1; float:left;  }
		.slideBox .hd ul li{ float:left; margin-right:2px;  width:15px; height:15px; line-height:14px; text-align:center; background:#fff; cursor:pointer; }
		.slideBox .hd ul li.on{ background:#f00; color:#fff; }
		.slideBox .bd{ position:relative; height:100%; z-index:0;   }
		.slideBox .bd li{ zoom:1; vertical-align:middle; }
		.slideBox .bd img{ width:450px; height:230px; display:block;  }

		/* 下面是前/后按钮代码，如果不需要删除即可 */
		.slideBox .prev,
		.slideBox .next{ position:absolute; left:3%; top:50%; margin-top:-25px; display:block; width:32px; height:40px; background:url(images/slider-arrow.png) -110px 5px no-repeat; filter:alpha(opacity=50);opacity:0.5;   }
		.slideBox .next{ left:auto; right:3%; background-position:8px 5px; }
		.slideBox .prev:hover,
		.slideBox .next:hover{ filter:alpha(opacity=100);opacity:1;  }
		.slideBox .prevStop{ display:none;  }
		.slideBox .nextStop{ display:none;  }

		</style>
</head>
<body>
	<?php require('head.php');?>
	<div style="background:#dbf3f3; height:40px;">
		<div style="width:1000px; margin:0 auto;">
			<ul style="float:left;text-align:center;">
				<li style="float:left; padding:11px 0; width:100px;">
					<a href="/" style="font-size:14px; ">首页</a>
				</li>
				<li style="float:left; padding:11px 0; width:100px;">
					<a href="/home/news" style="font-size:14px;">新闻</a>
				</li>
				<li style="float:left; padding:11px 0; width:100px;  ">
					<a href="/home/edu" style="font-size:14px;">教育</a>
				</li>
				<li style="float:left; padding:11px 0; width:100px; ">
					<a href="/home/area" style="font-size:14px;">市县</a>
				</li>
				<li style="float:left; padding:11px 0; width:100px; background:#4dc1c5;">
					<a style="font-size:14px; color:#ffffff;">招考</a>
				</li>
				<li style="float:left; padding:11px 0; width:100px;">
					<a href="/home/school" style="font-size:14px;">学校</a>
				</li>
				<li style="float:left; padding:11px 0; width:100px;">
					<a href="/home/policy" style="font-size:14px;">政策</a>
				</li>
				<li style="float:left; padding:11px 0; width:100px;">
					<a href="/home/active" style="font-size:14px;">活动</a>
				</li>
				<li style="float:left; padding:11px 0; width:100px;">
					<a href="/home/about" style="font-size:14px;">关于</a>
				</li>
				<div style="clear:both;"></div>
			</ul>
		</div>	
	</div>
	<div style="background:#4dc1c5; height:48px;">
		<div style="width:1000px; margin:0 auto;">
			<div style="text-align:left; padding-top:8px;"> 
				<ul>
					<li style="float:left;">
						<a href="/home/enrol" class="channel channel-enrol">招 考 频 道</a>
					</li>
					<li style="float:left; margin-left:26px; margin-top:10px;">	
						<a href="/home/enrolSub" style="color:#ffffff;">招 考</a>
						<b style="color:#ffffff;">丨</b>
						<a href="/home/enrolSub"  style="color:#ffffff;">高 考</a>
						<b style="color:#ffffff;">丨</b>
						<a href="/home/enrolSub"  style="color:#ffffff;">中 考</a>
						<b style="color:#ffffff;">丨</b>
						<a href="/home/enrolSub"  style="color:#ffffff;">对口升学</a>
						<b style="color:#ffffff;">丨</b>
						<a href="/home/enrolSub"  style="color:#ffffff;">考 研</a>
						<b style="color:#ffffff;">丨</b>
						<a href="/home/enrolSub"  style="color:#ffffff;">社 考</a>
					</li>
					<div style="clear:both;"></div>
				</ul>
			</div>
		</div>
	</div>
	<div>
		<div style="width:1000px; margin:0 auto;">
			<img src="/assets/images/68.png" style="padding:20px 0;"/>
			<div>
				<div style="float:left;" style="width:452px;">
					<div id="slideBox" class="slideBox">
						<div class="hd">
							<ul><li>1</li><li>2</li><li>3</li></ul>
						</div>
						<div class="bd">
							<ul>
								<li><a href="http://www.SuperSlide2.com" target="_blank"><img src="/assets/images/73.png" /></a></li>
								<li><a href="http://www.SuperSlide2.com" target="_blank"><img src="/assets/images/83.png" /></a></li>
								<li><a href="http://www.SuperSlide2.com" target="_blank"><img src="/assets/images/74.png" /></a></li>
							</ul>
						</div>
					</div>
					<div style="border:1px solid #d4d4d4;  margin-top:20px;">
						<p style="padding:20px 35px; font-size:18px; color:#0075a9;">成绩查询入口</p>
						<div style="padding:10px 35px;">
							<a style="background:#4cc2c4; padding:10px 20px; color:#ffffff; border-radius:5px;">高考成绩查询入口</a>
							<a style="background:#4cc2c4; padding:10px 20px; color:#ffffff; border-radius:5px; margin-left:35px;">中考成绩查询入口</a>
						</div>
					</div>
					<div style="border:1px solid #d4d4d4; margin-top:20px;">
						<div style="padding:20px 20px;">
							<ul>
								<li style="float:left;">
									<img src="/assets/images/71.png"/>
								</li>
								<li style="float:left;">
									<p style="padding:5px 30px;">刘老师邮箱</p>
									<p style="padding:5px 30px;">电话：0351-3208496</p>
									<p style="padding:5px 30px;">电子邮箱：2363748382@qq.com</p>
								</li>
								<div style="clear:both;"></div>
							</ul>
							<div style="border-top:1px dashed #d4d4d4; margin-top:20px;"></div>
							<div style="padding:10px 0;">
								<p style="padding:5px 0;">1· 临考冲刺 不慌不忙 </p>
								<p style="padding:5px 0;">2· 秋考志愿填报：这些技巧你必须有 </p>
								<p style="padding:5px 0;">3· 理解春招政策　报考心仪院校 </p>
								<p style="padding:5px 0;">4· 学开飞机去哪家？</p>
							</div>
						</div>
					</div>
					<div style="border:1px solid #d4d4d4; margin-top:20px;">
						<div style="padding:20px 25px;">
							<ul>
								<li style="float:left;">
									<p style="font-size:18px;"><span style="color:#4cc2c4; font-weight:bold; font-size:18px;">丨</span>高考政策</p>
								</li>
								<li style="float:right;">
									<a>更多》</a>
								</li>
								<div style="clear:both;"></div>
							</ul>
							<div style="border-top:1px dashed #d4d4d4; margin-top:20px;"></div>
							<div style="padding:15px 18px;">
								<p style="padding:5px 0;">高招扶贫要防止造成新的不公</p>
								<p style="padding:5px 0;">高考改革“良法”更需“善治”</p>
								<p style="padding:5px 0;">全国高考改革方案预测：语数外必考 另选三</p>
								<p style="padding:5px 0;">高考体检不查"乙肝五项" 多个专业取消对</p>
								<p style="padding:5px 0;">高考加分政策公布：奥赛加分瘦身 运动员要</p>
								<p style="padding:5px 0;">教育部：体育特长生高考加分项目新调整</p>
							</div>
							<div style="border-top:1px dashed #d4d4d4; padding:10px 0;"></div>
							<ul>
								<li style="float:left;">
									<p style="font-size:18px;"><span style="color:#4cc2c4; font-weight:bold; font-size:18px;">丨</span>院校动态</p>
								</li>
								<li style="float:right;">
									<a>更多》</a>
								</li>
								<div style="clear:both;"></div>
							</ul>
							<div style="border-top:1px dashed #d4d4d4; margin-top:20px;"></div>
							<div style="padding:15px 18px;">
								<p style="padding:5px 0;">高招扶贫要防止造成新的不公</p>
								<p style="padding:5px 0;">高考改革“良法”更需“善治”</p>
								<p style="padding:5px 0;">全国高考改革方案预测：语数外必考 另选三</p>
								<p style="padding:5px 0;">高考体检不查"乙肝五项" 多个专业取消对</p>
								<p style="padding:5px 0;">高考加分政策公布：奥赛加分瘦身 运动员要</p>
								<p style="padding:5px 0;">教育部：体育特长生高考加分项目新调整</p>
							</div>
							<div style="border-top:1px dashed #d4d4d4; padding:10px 0;"></div>
							<ul>
								<li style="float:left;">
									<p style="font-size:18px;"><span style="color:#4cc2c4; font-weight:bold; font-size:18px;">丨</span>专业咨询</p>
								</li>
								<li style="float:right;">
									<a>更多》</a>
								</li>
								<div style="clear:both;"></div>
							</ul>
							<div style="border-top:1px dashed #d4d4d4; margin-top:20px;"></div>
							<div style="padding:15px 18px;">
								<p style="padding:5px 0;">高招扶贫要防止造成新的不公</p>
								<p style="padding:5px 0;">高考改革“良法”更需“善治”</p>
								<p style="padding:5px 0;">全国高考改革方案预测：语数外必考 另选三</p>
								<p style="padding:5px 0;">高考体检不查"乙肝五项" 多个专业取消对</p>
								<p style="padding:5px 0;">高考加分政策公布：奥赛加分瘦身 运动员要</p>
								<p style="padding:5px 0;">教育部：体育特长生高考加分项目新调整</p>
							</div>
							<div style="border-top:1px dashed #d4d4d4; padding:10px 0;"></div>
							<ul>
								<li style="float:left;">
									<p style="font-size:18px;"><span style="color:#4cc2c4; font-weight:bold; font-size:18px;">丨</span>志愿填报</p>
								</li>
								<li style="float:right;">
									<a>更多》</a>
								</li>
								<div style="clear:both;"></div>
							</ul>
							<div style="border-top:1px dashed #d4d4d4; margin-top:20px;"></div>
							<div style="padding:15px 18px;">
								<p style="padding:5px 0;">高招扶贫要防止造成新的不公</p>
								<p style="padding:5px 0;">高考改革“良法”更需“善治”</p>
								<p style="padding:5px 0;">全国高考改革方案预测：语数外必考 另选三</p>
								<p style="padding:5px 0;">高考体检不查"乙肝五项" 多个专业取消对</p>
								<p style="padding:5px 0;">高考加分政策公布：奥赛加分瘦身 运动员要</p>
								<p style="padding:5px 0;">教育部：体育特长生高考加分项目新调整</p>
							</div>
						</div>
					</div>
				</div>
				<div style="float:right;">
					<div style="width:540px;">
						<p style="font-size:18px; color:#0075a9;">山西省2015年高考志愿填报咨询会</p>
						<div style="margin-top:10px;">
							<a style="padding-top:15px;">本科二批以上院校2013-2014年计划</a>
							<ul>
								<li>
									<a style="float:left;  margin-top:5px;">高校将设创业必修课</a>
									<a style="float:right; margin-top:5px;">更多》</a>
									<div style="clear:both;"></div>
								</li>
							</ul>
						</div>
						<div style="border-top:1px dashed #d4d4d4; margin-top:10px;"></div>
						<div style="margin-top:5px;">
							<p style="padding:5px 0;">【太原】原师院中区月底前搬迁　原址重新规划</p>
							<p style="padding:5px 0;">【地市动态】我省2014年硕士研究生招生考试成绩揭晓</p>
							<p style="padding:5px 0;">【长治】长治市在全市中小学校深入开展“三爱”教育活动</p>
							<p style="padding:5px 0;">【地市动态】为评院士花2300万打通关系？中科院回应对受贿院士不姑息</p>
							<p style="padding:5px 0;">【地市动态】教育部：超4亿 近三成国人不能用普通话交流</p>
							<p style="padding:5px 0;">【地市动态】中国人才无端消耗：本科生端盘子 博士生跑销售</p>
							<p style="padding:5px 0;">【地市动态】中国人才无端消耗：本科生端盘子 博士生跑销售</p>
						</div>
						<img src="/assets/images/70.png" style="padding-top:30px;"/>
						<div style="border:1px solid #d4d4d4; margin-top:20px;">
							<div style="padding:20px 25px;">
								<ul>
									<li style="float:left;">
										<p style="font-size:18px;"><span style="color:#4cc2c4; font-weight:bold; font-size:18px;">丨</span>留学动态</p>
									</li>
									<li style="float:right;">
										<a>更多》</a>
									</li>
									<div style="clear:both;"></div>
								</ul>
								<div style="border-top:1px dashed #d4d4d4; margin-top:20px;"></div>
								<div style="padding:15px 18px;">
									<p style="padding:5px 0;">高招扶贫要防止造成新的不公</p>
									<p style="padding:5px 0;">高考改革“良法”更需“善治”</p>
									<p style="padding:5px 0;">全国高考改革方案预测：语数外必考 另选三</p>
									<p style="padding:5px 0;">高考体检不查"乙肝五项" 多个专业取消对</p>
									<p style="padding:5px 0;">高考加分政策公布：奥赛加分瘦身 运动员要</p>
									<p style="padding:5px 0;">教育部：体育特长生高考加分项目新调整</p>
								</div>
							</div>
						</div>
						<div style="border:1px solid #d4d4d4; margin-top:20px;">
							<div style="padding:20px 25px;">
								<ul>
									<li style="float:left;">
										<p style="font-size:18px;"><span style="color:#4cc2c4; font-weight:bold; font-size:18px;">丨</span>留学动态</p>
									</li>
									<li style="float:right;">
										<a>更多》</a>
									</li>
									<div style="clear:both;"></div>
								</ul>
								<div style="border-top:1px dashed #d4d4d4; margin-top:20px;"></div>
								<div style="padding:15px 18px;">
									<p style="padding:5px 0;">高招扶贫要防止造成新的不公</p>
									<p style="padding:5px 0;">高考改革“良法”更需“善治”</p>
									<p style="padding:5px 0;">全国高考改革方案预测：语数外必考 另选三</p>
									<p style="padding:5px 0;">高考体检不查"乙肝五项" 多个专业取消对</p>
									<p style="padding:5px 0;">高考加分政策公布：奥赛加分瘦身 运动员要</p>
									<p style="padding:5px 0;">教育部：体育特长生高考加分项目新调整</p>
								</div>
								<div style="border-top:1px dashed #d4d4d4; padding:10px 0;"></div>
							<ul>
								<li style="float:left;">
									<p style="font-size:18px;"><span style="color:#4cc2c4; font-weight:bold; font-size:18px;">丨</span>自主招生</p>
								</li>
								<li style="float:right;">
									<a>更多》</a>
								</li>
								<div style="clear:both;"></div>
							</ul>
							<div style="border-top:1px dashed #d4d4d4; margin-top:20px;"></div>
							<div style="padding:15px 18px;">
								<p style="padding:5px 0;">高招扶贫要防止造成新的不公</p>
								<p style="padding:5px 0;">高考改革“良法”更需“善治”</p>
								<p style="padding:5px 0;">全国高考改革方案预测：语数外必考 另选三</p>
								<p style="padding:5px 0;">高考体检不查"乙肝五项" 多个专业取消对</p>
								<p style="padding:5px 0;">高考加分政策公布：奥赛加分瘦身 运动员要</p>
								<p style="padding:5px 0;">教育部：体育特长生高考加分项目新调整</p>
							</div>
							<div style="border-top:1px dashed #d4d4d4; padding:10px 0;"></div>
							<ul>
								<li style="float:left;">
									<p style="font-size:18px;"><span style="color:#4cc2c4; font-weight:bold; font-size:18px;">丨</span>体育类招生</p>
								</li>
								<li style="float:right;">
									<a>更多》</a>
								</li>
								<div style="clear:both;"></div>
							</ul>
							<div style="border-top:1px dashed #d4d4d4; margin-top:20px;"></div>
							<div style="padding:15px 18px;">
								<p style="padding:5px 0;">高招扶贫要防止造成新的不公</p>
								<p style="padding:5px 0;">高考改革“良法”更需“善治”</p>
								<p style="padding:5px 0;">全国高考改革方案预测：语数外必考 另选三</p>
								<p style="padding:5px 0;">高考体检不查"乙肝五项" 多个专业取消对</p>
								<p style="padding:5px 0;">高考体检不查"乙肝五项" 多个专业取消对</p>
								<p style="padding:5px 0;">高考体检不查"乙肝五项" 多个专业取消对</p>
								<p style="padding:5px 0;">高考加分政策公布：奥赛加分瘦身 运动员要</p>
								<p style="padding:5px 0;">教育部：体育特长生高考加分项目新调整</p>
							</div>
							<div style="border-top:1px dashed #d4d4d4; padding:10px 0;"></div>
							<ul>
								<li style="float:left;">
									<p style="font-size:18px;"><span style="color:#4cc2c4; font-weight:bold; font-size:18px;">丨</span>师范生、国防生</p>
								</li>
								<li style="float:right;">
									<a>更多》</a>
								</li>
								<div style="clear:both;"></div>
							</ul>
							<div style="border-top:1px dashed #d4d4d4; margin-top:20px;"></div>
							<div style="padding:15px 18px;">
								<p style="padding:5px 0;">高招扶贫要防止造成新的不公</p>
								<p style="padding:5px 0;">高考改革“良法”更需“善治”</p>
								<p style="padding:5px 0;">全国高考改革方案预测：语数外必考 另选三</p>
								<p style="padding:5px 0;">高考体检不查"乙肝五项" 多个专业取消对</p>
								<p style="padding:5px 0;">高考加分政策公布：奥赛加分瘦身 运动员要</p>
								<p style="padding:5px 0;">教育部：体育特长生高考加分项目新调整</p>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div style="background:#eeeeee; height:108px; margin-top:20px;">
				<p style="font-size:18px; padding:20px 20px;"><span style="color:#4cc2c4; font-weight:bold; font-size:18px;">丨</span>友情链接</p>
				<div style="border-top:1px dashed #d4d4d4; padding:10px 0;"></div>
				<div style="padding:0 12px;">
					<a style="margin-left:10px; color:#008cc8;">山西省教育厅</a>        
					<a style="margin-left:10px; color:#008cc8;">山西省招生考试管理中心</a>
					<a style="margin-left:10px; color:#008cc8;">大同市教育局</a>
					<a style="margin-left:10px; color:#008cc8;">忻州市教育局</a>
					<a style="margin-left:10px; color:#008cc8;">朔州市教育局</a>
					<a style="margin-left:10px; color:#008cc8;">运城市教育局</a>
					<a style="margin-left:10px; color:#008cc8;">临汾市教育局</a>
					<a style="margin-left:10px; color:#008cc8;">运城市教育局</a>
					<a style="margin-left:10px; color:#008cc8;">临汾市教育局</a>
				</div>
			</div>
		</div>
	</div>
	<?php require('foot.php');?>
</body>
<script src="/assets/js/SuperSlide.js"></script>
<script type="text/javascript">
jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
</script>
</html>