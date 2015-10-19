<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="/assets/css/denglu.css"/>
<link rel="stylesheet" href="/assets/css/template.css"/>
</head>
<body>
	<?php require('head.php');?>
	<div style="background:#008cc8; height:14px;"></div>
	<div>
		<div style="width:1000px; margin:0 auto;">
			<div>
				<ul style="padding:20px 0;">
					<li style="width:20px; height:24px; background:#008cc8; float:left;"></li>
					<li style="float:left; line-height:24px; margin-left:10px;">
						<a>首页 >> 搜索 >> 关键字 : <?php echo $_GET['keywords'];?></a>
					</li>
					<div style="clear:both;"></div>
				</ul>
				<div style="border:1px solid #d4d4d4;">
					<?php foreach($essays as $value):?>
					<div style="padding:10px 30px; margin-top:20px;"> 
						<ul>
							<li style="float:left;"><p style="font-size:18px; color:#008cc8; padding:5px 0;"><a href="/home/detail?id=<?php echo $value->id;?>">·  <?php echo $value->title;?></a></p></li>
							<li style="float:right;"><p>[ <?php echo $value->time;?> ]</p></li>
							<div style="clear:both;"></div>
							<li><p style="padding:5px 0;"><?php echo $value->summary;?><span style="color:#008cc8;"><a href="/home/detail?id=<?php echo $value->id;?>">[详细]</a></span></p></li>
						</ul>
						<div style="border-top:1px dashed #d4d4d4; margin-top:30px;"></div>
					</div>
					<?php endforeach;?>
					</div>
				</div>
				<div style="height:42px;margin-top:20px;text-align: center;">
					<ul class="km-pagination clearfix" style="margin:0 auto;">
						<li><a href="<?php echo $pageInfo['firstPage']=='no'?'javascript:void();':$pageInfo['firstPage'];?>">首页</a></li>
						<?php for($i=1;$i<=$pageInfo['pageAmount'];$i++):?>
						<li class="<?php if($i==$pageInfo['currentPage']):?>active<?php endif;?>"><a href="<?php echo ($pageInfo['jumpPage']).$i;?>"><?php echo $i;?></a></li>
						<?php endfor;?>
						<li><a href="<?php echo $pageInfo['lastPage']=='no'?'javascript:void();':$pageInfo['lastPage'];?>">尾页</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php require('foot.php');?>
</body>
</html>