$(document).ready(function(){
	$("#bkDiv").click(function(){
		$(".km-modal-dialog").hide();
		$(".km-alert").hide();
		$("#bkDiv").hide();
		$("body").removeClass('km-modal-open');
	});
	$(".km-close").click(function(){
		$(".km-modal-dialog").hide();
		$("#bkDiv").hide();
		$("body").removeClass('km-modal-open');
	});
	$(".km-btn-close").click(function(){
		$(".km-modal-dialog").hide();
		$("#bkDiv").hide();
		$("body").removeClass('km-modal-open');
	});
});
/*
function mainCategoryChange(){
	var category = new Object(); 
	category.id = $("#MainCategory").val();
	dataHandler('get','subCat',category,updateSubCategory,null,null,null,false);
	stSubCategoryChange();
}
function stSubCategoryChange(){
	var category = new Object(); 
	category.id = $("#stSubCategory").val();
	dataHandler('get','subCat',category,updateSubSubCategory,null,null,null,false);
}
function updateSubCategory(category){
	var subCategory=category.subCats;
	var subCats='<option value="-1">== 1st Sub Category ==</option>';
	for(var index in subCategory){ 
        subCats+='<option value="'+subCategory[index].category_id+'">'+subCategory[index].category_name+'</option>';
    }
	$("#stSubCategory").html(subCats);
}
function updateSubSubCategory(subCategory){
	var subSubCategory=subCategory.subCats;
	var subCats='<option value="-1">== 2nd Sub Category ==</option>';
	for(var index in subSubCategory){ 
        subCats+='<option value="'+subSubCategory[index].category_id+'">'+subSubCategory[index].category_name+'</option>';
    }
	$("#ndSubCategory").html(subCats);
}*/
/*
//搜索
function search(){
	var p_name="";
	var p_listed="";
	if($("#type").val()!=undefined){
		p_name=$("#p_name").val();
		if($("#p_listed option:selected").val()!=undefined){
			p_listed=$("#p_listed option:selected").val()!="all"?"&listed="+$("#p_listed option:selected").val():"";
		}
		location.href="/merchant/"+$("#type").val()+"?name="+p_name+p_listed;
	}
	else{
	alert("没有商品可搜索！");}
	
}

function scroll_delete(scrollid,order,amount){
	if(confirm("确定删除该滚动图片？")){
		$.post(
			"/kmadmin/admin/del_info",
			{
				'info_type':"scroll",
				'scrollid':scrollid,
				'order':order,
				'amount':amount
			},
			function(data){
				var result=$.parseJSON(data);
				if(result.result=="success"){
					location.reload();
				}else{
					alert(result.message);
				}
			});
	}
}
function add_thumb(){
	$("#file").click();
}
function upload_thumb_img(form_id){
	$(form_id).ajaxSubmit({
		success: function (data) {
			var result=$.parseJSON(data);
			if(result.code){
				$("#addImgList div img").attr("src","/assets/images/cms/appbg_ad.png");
				var new_img_item='<li onmouseover="imgover(this)" onmouseout="imgout(this)" class="img-item imagelist"><img class="thumb-src" width="77" height="77" src="'+result.message+'"><img onclick="delclick(this)" class="del-bt" title="删除该缩略图" src="/assets/images/cms/delete.png"></li>';
				$("#addImgList").before(new_img_item);
				if($("#imgListDivs").children(".imagelist").length>=3){
					$("#addImgList").hide();
				}
			}else{
				alert(result.message);
			}
		},
		url: "/cms/index/upload_img",
		data: $(form_id).formSerialize(),
		type: 'POST',
		beforeSubmit: function () {
			$("#addImgList div img").attr("src","/assets/images/cms/loading.gif");
		}
	});
	return false;
}
function uploadImg(formId,handlerCase){
	$(formId).ajaxSubmit({
		success: function (data) {
			closeWait();
			var result=$.parseJSON(data);
			if(result.code){
				handler(handlerCase,result.message);
			}else{
				alert(result.message);
			}
		},
		url: "/cms/index/upload_img",
		data: $(formId).formSerialize(),
		type: 'POST',
		beforeSubmit: function () {
			showWait();
		}
	});
	return false;
}*/