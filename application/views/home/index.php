<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>山西省教育宣传中心</title>
<link rel="stylesheet" type="text/css" href="/assets/plugins/swiper/swiper.min.css">
<link rel="stylesheet" type="text/css" href="/assets/plugins/icomoon/style.css">
<link rel="stylesheet" href="/assets/css/index.css"/>
</head>
<body>
<div class="head">
	<?php require('head.php');?>
    <div class="footer">
        <div class="footer-hd nav">
        	<ul class="clearfix">
        		<li class="active"><a>首页</a></li>
        		<li><a href="/home/news">新闻</a></li>
        		<li><a href="/home/edu">教育</a></li>
        		<li><a href="/home/area">市县</a></li>
        		<li><a href="/home/enrol">招考</a></li>
        		<li><a href="/home/school">学校</a></li>
        		<li><a href="/home/policy">政策</a></li>
        		<li><a href="/home/active">活动</a></li>
        		<li><a href="/home/about">关于</a></li>
        	</ul>
	    </div>
    </div>
	<div class="footer-ft">
	    <div class="footer-ft-top">
	    	<div id="slideBox" class="slideBox">
			<div class="hd">
				<ul>
					<?php for ($i=0; $i < sizeof($sliders); $i++):?>
					<li><?php echo $i+1;?></li>
					<?php endfor;?>
				</ul>
			</div>
			<div class="bd">
				<ul>
					<?php foreach ($sliders as $value):?>
					<li>
						<a href="/home/detail?id=<?php echo $value->id;?>" target="_blank">
							<div class="footer-ft-top-left">
							    <h4 style="margin-top:10px; font-size:30px; text-align:center;line-height:40px;"><?php echo $value->title;?></h4>
								<p style="margin-top:15px; text-align:center;line-height:20px;">
									<?php echo mb_strlen($value->summary,'utf-8')>100?mb_substr($value->summary,0,100,'utf-8').'...':$value->summary;?>
									<p style="float:right;margin-top: 10px;">[详情]</p>
								</p>

								<div style="clear:both;"></div>
							</div>
							<div class="footer-ft-top-right">
							    <img src="<?php echo $value->thumbnail;?>" style="width:460px; height:270px;"/>
							</div>
						</a>
					</li>
					<?php endforeach;?>
				</ul>
			</div>

		</div>
		</div>
		<div style="clear:both;"></div>
	</div>
</div>
<div class="centent-one">
	    <ul style="padding:0px;">
		    <li style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
			    <a style="background:#0075a9; padding:10px 20px;color:#ffffff;display: inline-block;">重要通知通告</a>
				<a style="background:url(/assets/images/10.png) no-repeat left center; padding:20px 20px;color:#e60012;">最新</a>
				<?php foreach ($notifications as $value):?>
				【<a href="/home/detail?id=<?php echo $value->id;?>" target="_blank"><?php echo $value->title;?></a>】
				<?php endforeach;?>
			</li>
		</ul>
	</div>
<div style="clear:both;"></div>
<div class="cen">
	<div class="cen-one">
	    <div class="cen-one-left">
		    <div class="left-one">
		    	<?php if(isset($notifications[0])):?>
			    <h1 style="padding: 0 10px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
			    	<a href="/home/detail?id=<?php echo $notifications[0]->id;?>" target="_blank" style="color: #0075a9;"><?php echo $notifications[0]->title;?></a>
			    </h1>
				<p><?php echo $notifications[0]->summary;?></p>
				<?php endif;?>
			</div>
			<div class="left-two">
			    <div class="left-two-left">
				    <a class="laba" href="#">新闻</a>
					<img src="/assets/images/15.png" style="width:310px;"/>
					<ul style="margin-top:15px;">
						<?php foreach ($news as $value):?>
					    <li><a href="/home/detail?id=<?php echo $value->id;?>">[<?php echo $value->columnName;?>] <?php echo mb_strlen($value->title,'utf-8')>16?mb_substr($value->title,0,16,'utf-8').'...':$value->title;?></a></li>
						<?php endforeach;?>
				    </ul>
				</div>
				<div class="left-two-right">
				    <a class="laba" href="#">资讯</a>
					<img src="/assets/images/15.png" style="width:310px;"/>
					<ul style="margin-top:15px;">
					    <?php foreach ($informations as $value):?>
					    <li><a href="/home/detail?id=<?php echo $value->id;?>"><?php echo mb_strlen($value->title,'utf-8')>21?mb_substr($value->title,0,21,'utf-8').'...':$value->title;?></a></li>
						<?php endforeach;?>
				    </ul>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="left-three">

		    	<?php if(isset($midAdvertisement1[0])):?>
			    <img src="<?php echo $midAdvertisement1[0]->thumbnail;?>" title="<?php echo $midAdvertisement1[0]->title;?>" alt="<?php echo $midAdvertisement1[0]->title;?>" style="width:660px;"/>
				<?php endif;?>
				<div class="left-three-left">
				    <ul>
					    <li class="color">
						    <a class="labathree" href="#"><i class="icon-newspaper"></i>新闻</a>
							<a href="#">时评</a>
                            <b>丨</b>
							<a href="#">人物</a>
                            <b>丨</b>
							<a href="#">三晋教育</a>
                            <b>丨</b>
							<a href="#">教育广角</a>
						</li>
					</ul>
					<img src="/assets/images/16.png" style="width:310px;"/>
					<ul style="margin-top:15px;">
					    <li style="padding:10px 0;"><a href="#">山西大学附中为藏族学生举办成人礼：要懂得</a></li>
					    <li style="padding:10px 0;"><a href="#">山西省全面深化基础教育教学改革创新项目试点</a></li>
					    <li style="padding:10px 0;"><a href="#">省教育厅召开厅党组反思剖析讨论会</a></li>
					    <li style="padding:10px 0;"><a href="#">省教育厅举办全省高校维稳工作培训班</a></li>
					    <li style="padding:10px 0;"><a href="#">我省召开“全面改薄”项目规划编制安排暨管</a></li>
					    <li style="padding:10px 0;"><a href="#">山西省奥赛获奖高考将不加分</a>
				    </ul>
				</div>
				<div class="left-three-right">
					<div id="swiperNews" class="swiperNews">
						<div class="hd">
							<ul><li>1</li><li>2</li><li>3</li><li>4</li></ul>
						</div>
						<div class="bd">
							<ul>
								<li><a href="detail.html" target="_blank"><img src="/assets/images/18.png" width="308"/></a></li>
								<li><a href="detail.html" target="_blank"><img src="/assets/images/18.png" width="308" /></a></li>
								<li><a href="detail.html" target="_blank"><img src="/assets/images/18.png" width="308" /></a></li>
								<li><a href="detail.html" target="_blank"><img src="/assets/images/18.png" width="308" /></a></li>
							</ul>
						</div>

					</div>
				</div>
				<div style="clear:both;"></div>
				<ul style="margin-top:20px;">
					<li class="color">
					    <a class="labathree" href="/home/edu"><i class="icon-books"></i>教育</a>
						<a href="/home/eduSub?id=8">幼教</a>
						<b>丨</b>
						<a href="/home/eduSub?id=9">基教</a>
						<b>丨</b>
						<a href="/home/eduSub?id=10">高校</a>
						<b>丨</b>
						<a href="/home/eduSub?id=11">职教</a>
                        <b>丨</b>
						<a href="/home/eduSub?id=13">家教</a>
						<b>丨</b>
						<a href="/home/eduSub?id=12">留学</a>
                        <b>丨</b>
						<a href="/home/eduSub?id=14">心理</a>
						<b>丨</b>
						<a href="/home/eduSub?id=15">下载</a>
						<b>丨</b>
						<a href="/home/eduSub?id=16">读书</a>
                        <b>丨</b>
						<a href="/home/eduSub?id=17">培训</a>
					</li>
				</ul>
				<img src="/assets/images/17.png" style="width:660px;"/>
				<div class="left-three-left">
				    <ul style="margin-top:15px;">
				    	<?php for($i=1;$i<sizeof($edu);$i++):?>
					    <li style="padding:10px 0;"><a href="/home/detail?id=<?php echo $edu[$i]->id;?>"><?php echo $edu[$i]->title;?></a></li>
						<?php endfor;?>
				    </ul>
				</div>
				<div class="left-three-right" style="margin-top:20px;">
					<?php if(isset($edu[0])):?>
				    <img src="<?php echo $edu[0]->thumbnail;?>" title="<?php echo $edu[0]->title;?>" alt="<?php echo $edu[0]->title;?>" style="border:1px solid #cecece; border-bottom:none; width:310px;">
					<?php endif;?>
				</div>
				<div style="clear:both;"></div>
				<ul style="margin-top:30px;">
					<li class="color">
					    <a class="labathree" href="/home/enrol"><i class="icon-study"></i>招考</a>
					    <a href="/home/enrolSub?id=44">高考</a>
					    <b>丨</b>
						<a href="/home/enrolSub?id=45">中考</a>
                        <b>丨</b>
						<a href="/home/enrolSub?id=46">对口升学</a>
                        <b>丨</b>
						<a href="/home/enrolSub?id=47">考研</a>
						<b>丨</b>
						<a href="/home/enrolSub?id=48">社考</a>
					</li>
				</ul>
				<img src="/assets/images/17.png" style="width:660px;"/>
				<div style="border:1px solid #d4d4d4; margin-top:20px;">
				    <ul style="padding:10px 10px;">
				    	<?php foreach($enrol as $value):?>
					    <li style="padding:10px 0;"><a href="/home/detail?id=<?php echo $value->id;?>"><?php echo $value->title;?></a></li>
						<?php endforeach;?>
					</ul>
				</div>
				<?php if(isset($midAdvertisement2[0])):?>
				<img src="<?php echo $midAdvertisement2[0]->thumbnail;?>" title="<?php echo $midAdvertisement2[0]->title;?>" alt="<?php echo $midAdvertisement2[0]->title;?>" style="width:672px; padding:40px 0;"/>
				<?php endif;?>
				<div style="border:1px solid #d4d4d4;">
				    <ul style="padding:20px 0;">
					    <li class="color">
					        <a class="labathree" href="/home/area"><i class="icon-world"></i>市县</a>
					        <a href="/home/areaSub?id=31">太原</a>
					        <b>丨</b>
						    <a href="/home/areaSub?id=32">临汾</a>
                            <b>丨</b>
					     	<a href="/home/areaSub?id=33">运城</a>
						    <b>丨</b>
					     	<a href="/home/areaSub?id=34">晋城</a>
                            <b>丨</b>
						    <a href="/home/areaSub?id=35">长治</a>
						    <b>丨</b>
						    <a href="/home/areaSub?id=36">阳泉</a>
							<b>丨</b>
						    <a href="/home/areaSub?id=37">晋中</a>
                            <b>丨</b>
					     	<a href="/home/areaSub?id=38">忻州 </a>
                            <b>丨</b>
						    <a href="/home/areaSub?id=39">朔州</a>
						    <b>丨</b>
						    <a href="/home/areaSub?id=40">吕梁</a>  
						    <b>丨</b>
					     	<a href="/home/areaSub?id=84">大同</a> 
					    </li>
				    </ul>
					<div style="border-top:1px solid #d4d4d4;"></div>
					<ul style="padding:10px 10px;">
						<?php foreach($area as $value):?>
					    <li style="padding:10px 0;"><a href="/home/detail?id=<?php echo $value->id;?>">[<?php echo $value->columnName;?>] <?php echo $value->title;?></a></li>
						<?php endforeach;?>
					</ul>
				</div>
			</div>
		 </div>
		<div class="cen-one-right">
		    <div style="border:1px solid #d4d4d4;">
			   <p style="color:#0075a9;margin-top:10px;margin-left:20px;">您好！
			   		<?php if(isset($_SESSION['useremail'])):?>
			    	<?php echo $_SESSION['useremail'];?>
			    	<?php endif;?>
			    </p>
			   <p style="color:#0075a9; margin-top:6px;margin-left:20px;">欢迎来到山西省教育咨询中心</p>
               <div style="padding:13px 20px;">
               		<?php if(!isset($_SESSION['useremail'])):?>
			        <a href="/home/login" style="background:#0075a9; padding:5px 30px; color:#ffffff;">登 录</a>
			        <a href="/home/register" style="background:#0075a9; padding:5px 30px; margin-left:20px; color:#ffffff;">立即注册</a>
			    	<?php else:?>
					<a href="javascript:logout();" style="background:#0075a9; padding:4px 30px;  color:#ffffff;">退出</a>
			    	<?php endif;?>
			   </div>
			</div>
			<div style="height:339px;margin-top:33px;border:1px solid #d4d4d4;">
			   <div style="background:#ebebeb; padding:10px 10px;">
			        <a class="labathree" href="#"><i class="icon-bullhorn"></i>公告</a>
			   </div>
			    <?php foreach($bulletins as $value):?>
			    <a href="/home/detail?id=<?php echo $value->id;?>" style="color:#292929; padding:10px 10px; display:block;"><?php echo $value->title;?></a>
				<?php endforeach;?>
			</div>
			<div style="border:1px solid #d4d4d4; margin-top:22px;">
			    <ul style="padding-top:10px; padding-left:10px;font-size:12px;" class="f12">
					<li class="color">
					    <a class="labathree" href="/home/policy"><i class="icon-hammer2"></i>政策</a>
					    <a href="/home/policySub?id=65">国内</a>
					    <b>丨</b>
						<a href="/home/policySub?id=66">省区</a>
                        <b>丨</b>
						<a href="/home/policySub?id=67">区域</a>
						<b>丨</b>
						<a href="/home/policySub?id=68">相关</a>
					</li>
				</ul>
				<img src="/assets/images/16.png" style="width:278px;"/>
				<ul style="padding:10px 20px;">
					<?php foreach($policy as $value):?>
				    <li style="padding:10px 0;"><a href="/home/detail?id=<?php echo $value->id;?>"><?php echo $value->title;?></a></li>
					<?php endforeach;?>
				</ul>
			</div>
			<div style="border:1px solid #d4d4d4; margin-top:22px;">
			    <ul style="padding:20px 10px 0 10px">
				    <li>
					    <a style="font-weight:bold; color:#0075a9;">电子报刊</a>
					    <!--<a style="margin-left:150px;color:#0075a9;">[更多]</a>-->
					</li>
					<li style="padding:20px 30px 0 30px;">
						<div class="picScroll-left">
							<!--
							<div class="hd">
								<a class="next"></a>
								<ul></ul>
								<a class="prev"></a>
								<span class="pageState"></span>
							</div>
							-->
							<div class="bd">
								<ul class="picList">
									<?php foreach($epress as $value):?>
									<li>
										<div class="pic">
											<a href="/home/detail?id=<?php echo $value->id;?>" target="_blank">
												<img src="<?php echo $value->thumbnail;?>" />
											</a>
										</div>
										<div class="title">
											<a href="/home/detail?id=<?php echo $value->id;?>" target="_blank"><?php echo $value->title;?></a>
										</div>
									</li>
									<?php endforeach;?>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div style="border:1px solid #d4d4d4; margin-top:22px;">
			    <ul style="padding:20px 10px;">
				    <li>
					    <a style="font-weight:bold; color:#0075a9;">视频新闻</a>		
					    <a style="margin-left:150px;color:#0075a9;">[更多]</a>
					</li>
					<li style="padding:10px 5px;">
						<?php if(isset($videonews[0])):?>
					    <a href="/home/detail?id=<?php echo $videonews[0]->id;?>">
					    	<img src="<?php echo $videonews[0]->thumbnail;?>" style="width:240px; height:118px;"/>
					    </a>
						<?php endif;?>
					</li>
					<li style="padding:0 5px;">
						<?php if(isset($videonews[1])):?>
					    <a href="/home/detail?id=<?php echo $videonews[1]->id;?>">
					    	<img src="<?php echo $videonews[1]->thumbnail;?>" style="width:115px;"/>
					    </a>
						<?php endif;?>
						<?php if(isset($videonews[2])):?>
						<a href="/home/detail?id=<?php echo $videonews[2]->id;?>">
							<img src="<?php echo $videonews[2]->thumbnail;?>" style="width:115px; margin-left:8px;"/>
						</a>
						<?php endif;?>
					</li>
				</ul>	
			</div>
			<div style="margin-top:40px;">
			    <?php foreach ($rightDownAdvertisements as $key => $value):?>
			    <div style="margin-top:10px;">
			    	<a href="/home/detail?id=<?php echo $value->id;?>">
			    		<img src="<?php echo $value->thumbnail;?>" style="width:280px;"/>
			    	</a>
			    </div>
			    <?php endforeach;?>
			</div>
		</div>
	</div>
	<div style="clear:both;width:0px;height:0px;"></div>
    <div style="background:#33a3d3; width:960px; margin:0 auto;" class="qwe">
	    <ul>
			<li style="border-bottom:1px solid #ffffff;padding-top:10px;">
				<span>友情链接</span>	
			</li>
			<li>
				<a href="http://www.sxedu.gov.cn/" target="_blank">山西省教育厅</a>
				<a href="http://www.xinhuanet.com/" target="_blank">新华网</a>
				<a href="http://www.sina.com.cn/" target="_blank">新浪网</a>
				<a href="http://learning.sohu.com/" target="_blank">搜狐教育</a>
				<a href="http://edu.qq.com/" target="_blank">腾讯教育</a>
			</li>
			<!--
			<li>
			    <a href="http://www.moe.gov.cn/" target="_blank">教育部</a>
				<a href="http://www.sxedu.gov.cn/" target="_blank" style="margin-left:100px;">山西教育</a>
				<a style="margin-left:100px;">山西中小学德育网</a>
				<a style="margin-left:100px;">山西学前教育网</a>	
				<a style="margin-left:100px;">山西基础教育信息网</a>	
			</li>
			<li>
			    <a>职称教育在线</a>
				<a style="margin-left:58px;">山西终身学习网</a>
				<a style="margin-left:60px;">高校毕业就业网</a>
				<a style="margin-left:114px;">山西教师教育网</a>	
				<a style="margin-left:100px;">山西教育资源</a>	
			</li>
			<li>
			    <a>山西中小学人文素养网</a>
				<a style="margin-left:4px;">山西语言文字网</a>
				<a style="margin-left:60px;">教育人才网</a>
				<a style="margin-left:141px;">山西教育电视台</a>	
				<a style="margin-left:100px;">山西教育博览会</a>	
			</li>
			<li>
			    <a>扇子招考网</a>
				<a style="margin-left:72px;">青少年读书网</a>
				<a></a>
				<a></a>	
				<a></a>	
			</li>
			-->
		</ul>
	</div>

<?php require('foot.php');?>
</body>
<script src="http://libs.baidu.com/jquery/1.4.2/jquery.min.js"></script>
<script src="/assets/js/SuperSlide.js"></script>
<script type="text/javascript">
jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,trigger:"click"});
jQuery(".swiperNews").slide({mainCell:".bd ul",autoPlay:true,trigger:"click"});
// jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:2,trigger:"click"});
jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:2,interTime:50,trigger:"click"});
</script>
</html>