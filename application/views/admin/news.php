<div class="" style="padding-left:30px;">
	<button onclick="showAddEssayDiv();" type="button" class="km-btn km-btn-success" style=" height: 30px;padding: 0px 20px;font-size: 14px;display:inline-block;margin-bottom:10px;">
		<span class="glyphicon glyphicon-edit" aria-hidden="true" style="display:inline-block;margin-right:5px;"></span>发布新闻
	</button>
	<div class="km-panel km-panel-primary" style="width: 98%;">
		<div class="km-panel-heading">新闻</div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="content" style="width:100%;">
				<thead>
	                <tr role="row" class="active">
	                	<th width="5%" >
	                		<div class="checker">
	                			<span class=""><input type="checkbox" class="checkall" style="opacity: 0;"></span>
	                		</div>
	                	</th>
	                	<th width="10%" >栏目</th>
	                	<th width="10%" >缩略图</th>
	                	<th width="30%" >标题</th>
	                	<th width="10%" >作者</th>
	                	<th width="10%" >状态</th>
	                	<th width="15%" >发布时间</th>
	                	<th width="10%" >操作</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php for($i=0;$i<10;$i++):?>
	            	<tr>
	            		<td>
	            			<div class="checker">
	                			<span class=""><input type="checkbox" class="checkall" style="opacity: 0;"></span>
	                		</div>
	            		</td>
	            		<td>
	            			资讯
	            		</td>
	            		<td>
	            			<img src="" style="width:95%;">
	            		</td>
	            		<td>
	            			<a href="#" target="_blank" style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">发反反复复烦烦烦烦烦烦烦烦顶顶顶顶顶顶顶顶顶顶顶顶顶反复复烦烦烦烦烦烦烦烦顶顶顶顶顶顶顶顶顶顶顶顶顶反复复烦烦烦烦烦烦烦烦顶顶顶顶顶顶顶顶顶顶顶顶顶</a>
	            		</td>
	            		<td>
	            			管理员
	            		</td>
	            		<td>
	            			已发布
	            		</td>
	            		<td>
	            			2015-07-28 11:28:05
	            		</td>
	            		<td>
	            			<span title="编辑" class="edit-content glyphicon glyphicon-pencil" aria-hidden="true" style="display:inline-block;margin-right:5px;"></span>
							<span title="删除" class="delete-content glyphicon glyphicon-trash" aria-hidden="true" style="display:inline-block;margin-right:5px;"></span>
						</td>
	            	</tr>
	           		<?php endfor;?>
	            </tbody>
			</table>
		</div>
		<nav style="text-align:center;">
		  <ul class="pagination">
		    <li class="disabled">
		      <span>
		        <span aria-hidden="true">&laquo;</span>
		      </span>
		    </li>
		    <li class="active">
		      <span>1 <span class="sr-only">(current)</span></span>
		    </li>
		    <li>
		      <a href="#">2</a>
		    </li>
		    <li>
		      <a href="#">3</a>
		    </li>
		    <li>
		      <a href="#">4</a>
		    </li>
		    <li>
		      <a href="#">5</a>
		    </li>
		    <li>
		    	<a href="#" aria-label="Next">
		    		<span aria-hidden="true">»</span>
		    	</a>
		    </li>
		  </ul>
		</nav>
	</div>
	<div class="km-modal-dialog" style="width:70%;height:100%;" id="addEssayDiv">
		<div class="km-modal-content">
			<div class="km-modal-header">
				<button type="button" class="km-close"><span>&times;</span></button>
				<h4 class="km-modal-title">发布新闻</h4>
			</div>
			<div class="km-modal-body">
				<ul class="form-list">
					<li>
						<label for="column">子类别 ： </label>
						<select id="column" class="inp-txt km-form-control" style="width:100px;">
							<option value="2">
								资 讯
							</option>
							<option value="3">
								时 评
							</option>
							<option value="4">
								人 物
							</option>
							<option value="5">
								三晋教育
							</option>
							<option value="6">
								教育广角
							</option>
						</select>
					</li>
					<li>
						<label for="title">标题 ： </label>
						<input id="title" type="text" class="km-form-control" style="width:400px;">
					</li>
					<li>
						<label for="summary">简介 ： </label>
						<input id="summary" type="text" class="km-form-control" style="width:400px;">
					</li>
					<li>
						<label for="thumbnail">缩略图 ： </label>
						<div style="position:relative;display: inline-block;">
							<img id="thumbnail" src="" width="100" height="100" style="cursor:pointer;">
							<div id="thumbnailOverLayer" class="km-over-layer" onclick="$('#file').click();" style="width:100px;height:100px;">
								点击上传图片
							</div>
						</div>
						<form id="uploadImgThumb" enctype="multipart/form-data">
							<input onchange="return uploadThumb()" name="image" type="file" id="file" style="display:none;" accept="image/*">
						</form>
					</li>
					<li>
						<label for="content">内容 ： </label>
						<textarea id="content" class="km-form-control" style="height:400px;"></textarea>
					</li>
				</ul>
			</div>
			<div class="km-modal-footer">
				<button type="button" class="km-btn km-btn-default km-btn-close" style=" height: 30px;padding: 0px 20px;font-size: 14px;">取消</button>
				<button onclick="addEssay();" type="button" class="km-btn km-btn-success" style=" height: 30px;padding: 0px 20px;font-size: 14px;">发布</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<link rel="stylesheet" href="/assets/kindEditor/themes/default/default.css" />
<script charset="utf-8" src="/assets/kindEditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/assets/kindEditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="/assets/js/jquery.form.js"></script>
<script type="text/javascript">
var contentEditor;
KindEditor.ready(function(K) {
	contentEditor = K.create('#content', {
		uploadJson : '/assets/kindEditor/php/upload_json.php',
		fileManagerJson : '/assets/kindEditor/php/file_manager_json.php',
		allowFileManager : true,
		width : '100%',
		height:'500px',
		resizeType:0,
		imageTabIndex:1
	});
});
$(document).ready(function(){
});
function uploadThumb(){
	uploadImageAdvance("#uploadImgThumb",beforeUpload,successHandler);
}
function beforeUpload(){
	$("#thumbnail").attr('src','/assets/images/cms/loading.gif');
}
function successHandler(src){
	$("#thumbnail").attr('src',src);
}
function showAddEssayDiv(){
	setDivCenter('#addEssayDiv',true);
}
</script>