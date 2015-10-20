<div class="" style="padding-left:30px;">
	<div class="clearfix" style="width: 98%;">
		<button onclick="selectEssay('<?php echo $pageInfo['selectPage'];?>');" type="button" class="km-btn km-btn-primary fr" style="height: 30px;padding: 0px 20px;font-size: 14px;display:inline-block;margin-bottom:10px;">
			查询
		</button>
		<input id="keywords" value="<?php echo isset($_GET['keywords'])?$_GET['keywords']:'';?>" placeholder="关键字" type="text" class="km-form-control fr" style="width:200px;height:30px;margin-right:10px;">
		<select id="gender" class="inp-txt km-form-control fr" style="width:100px;height:30px;margin-right:10px;">
			
		</select>
	</div>
	<div class="km-panel km-panel-primary" style="width: 98%;">
		<div class="km-panel-heading">用户列表</div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="content" style="width:100%;">
				<thead>
	                <tr role="row" class="active">
	                	<th width="5%" >
	                		<div class="checker" style="margin-top: 2px;">
	                			<span class=""><input type="checkbox" class="checkall"></span>
	                		</div>
	                	</th>
	                	<th width="10%" >头像</th>
	                	<th width="10%" >用户名</th>
	                	<th width="30%" >性别</th>
	                	<th width="10%" >邮箱</th>
	                	<th width="10%" >状态</th>
	                	<th width="15%" >注册时间</th>
	                	<th width="10%" >操作</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php foreach($users as $user):?>
	            	<tr class="data-item">
	            		<td>
	            			<div class="checker">
	                			<span class=""><input type="checkbox" class="check"></span>
	                		</div>
	            		</td>
	            		<td>
	            			<img src="<?php echo $user->avatar;?>" style="max-width:60px;max-height:50px;"/>
	            		</td>
	            		<td>
	            			<a href="#" target="_blank" style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;max-width: 400px;" title="">
								<?php echo $user->username;?>
	            			</a>
	            		</td>
	            		<td>
	            			<?php echo $user->gender==0?'未知':($user->gender==1?'男':'女');?>
	            		</td>
	            		<td>
	            			<?php echo $user->email;?>
	            		</td>
	            		<td>
	            			<?php echo $user->status;?>
	            		</td>
	            		<td>
	            			<?php echo $user->time;?>
	            		</td>
	            		<td>
	            			<span onclick="javascript:editUser('<?php echo $user->id;?>');" title="编辑" class="edit-content glyphicon glyphicon-pencil" aria-hidden="true" style="display:inline-block;margin-right:5px;"></span>
							<span onclick="javascript:deleteUser('<?php echo $user->id;?>');" title="删除" class="delete-content glyphicon glyphicon-trash" aria-hidden="true" style="display:inline-block;margin-right:5px;"></span>
						</td>
	            	</tr>
	           		<?php endforeach;?>
	            </tbody>
			</table>
		</div>
		<nav style="text-align:center;line-height: 54px;">
		  <span style="margin-right:20px;">
		  <?php echo "共 ".$pageInfo['amount']." 条数据";?>
		  </span>
		  <ul class="pagination" style="margin: 10px 0;vertical-align:bottom;">
		  	<?php if($pageInfo['prevPage']=='no'):?>
		    <li class="disabled">
		      <span>
		        <span aria-hidden="true">&laquo;</span>
		      </span>
		    </li>
			<?php else:?>
			<li>
		    	<a href="<?php echo $pageInfo['prevPage'];?>" aria-label="Prev">
		    		<span aria-hidden="true">&laquo;</span>
		    	</a>
		    </li>
		    <?php endif;?>

		    <?php for ($i=1; $i <= $pageInfo['pageAmount']; $i++):?>
		    <?php if($i==$pageInfo['currentPage']):?>
		    <li class="active">
		      <span><?php echo $i;?><span class="sr-only">(current)</span></span>
		    </li>
			<?php else:?>
			<li>
		      <a href="<?php echo $pageInfo['jumpPage'].$i;?>"><?php echo $i;?></a>
		    </li>	
			<?php endif;?>
			<?php endfor;?>

			<?php if($pageInfo['nextPage']=='no'):?>
			<li class="disabled">
		      <span>
		        <span aria-hidden="true">»</span>
		      </span>
		    </li>
			<?php else:?>
		    <li>
		    	<a href="<?php echo $pageInfo['nextPage'];?>" aria-label="Next">
		    		<span aria-hidden="true">»</span>
		    	</a>
		    </li>
			<?php endif;?>
		  </ul>
		</nav>
	</div>
	
	<!--Edit Essay Begin-->
	<div class="km-modal-dialog" style="width:70%;height:100%;" id="editEssayDiv">
		<div class="km-modal-content">
			<div class="km-modal-header">
				<button type="button" class="km-close"><span>&times;</span></button>
				<h4 class="km-modal-title">编辑<?php echo $columnName;?></h4>
			</div>
			<div class="km-modal-body">
				<ul class="form-list">
					<li>
						<label for="column">子栏目 ： </label>
						<select id="column1" class="inp-txt km-form-control" style="width:100px;">
							<?php foreach ($subColumns as $value):?>
							<option value="<?php echo $value->id;?>">
								<?php echo $value->name;?>
							</option>
							<?php endforeach;?>
						</select>
					</li>
					<li>
						<label for="title">标题 ： </label>
						<input id="title1" type="text" class="km-form-control" style="width:400px;">
					</li>
					<li>
						<label for="summary">摘要 ： </label>
						<input id="summary1" type="text" class="km-form-control" style="width:400px;">
					</li>
					<li>
						<label for="thumbnail">缩略图 ： </label>
						<div style="position:relative;display: inline-block;">
							<img id="thumbnail1" src="" width="100" height="100" style="cursor:pointer;">
							<div id="thumbnailOverLayer1" class="km-over-layer" onclick="$('#file1').click();" style="width:100px;height:100px;">
								点击上传图片
							</div>
						</div>
						<form id="uploadImgThumb1" enctype="multipart/form-data">
							<input onchange="return uploadThumb1()" name="image" type="file" id="file1" style="display:none;" accept="image/*">
						</form>
					</li>
					<li>
						<label for="content1">内容 ： </label>
						<textarea id="content1" class="km-form-control" style="height:300px;"></textarea>
					</li>
				</ul>
			</div>
			<div class="km-modal-footer">
				<button type="button" class="km-btn km-btn-default km-btn-close" style=" height: 30px;padding: 0px 20px;font-size: 14px;">取消</button>
				<button onclick="saveEssay();" type="button" class="km-btn km-btn-success" style=" height: 30px;padding: 0px 20px;font-size: 14px;">保存</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<link rel="stylesheet" href="/assets/kindEditor/themes/default/default.css" />
<script charset="utf-8" src="/assets/kindEditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/assets/kindEditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="/assets/js/jquery.form.js"></script>
<script type="text/javascript">
// var contentEditor;
// KindEditor.ready(function(K) {
//     contentEditor = K.create('#content', {
//         uploadJson : '/assets/kindEditor/php/upload_json.php',
//         fileManagerJson : '/assets/kindEditor/php/file_manager_json.php',
//         allowFileManager : true,
//         width : '100%',
//         height:'200px',
//         resizeType:0,
//         imageTabIndex:1
//     });
// });
var contentEditor1;
KindEditor.ready(function(K) {
    contentEditor1 = K.create('#content1', {
        uploadJson : '/assets/kindEditor/php/upload_json.php',
        fileManagerJson : '/assets/kindEditor/php/file_manager_json.php',
        allowFileManager : true,
        width : '100%',
        height:'200px',
        resizeType:0,
        imageTabIndex:1
    });
});
</script>