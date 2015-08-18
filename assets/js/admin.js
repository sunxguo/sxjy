$(document).ready(function(){

});
function adminLogin () {
    var admin = new Object(); 
    admin.username = $("#username").val();
    admin.password = $("#password").val();
    dataHandler('/adminajax/login',admin,null,null,null,adminLoginSuccess,false);
}
function adminLoginSuccess(){
    location.href='/admin/index';
}
function addEssay(){
    var essay = new Object(); 
    essay.column = $("#column").val();
    essay.title = $("#title").val();
    essay.summary = $("#summary").val();
    essay.content = $("#summary").val();
    dataHandler('/adminajax/login',essay,null,null,null,addEssaySuccess,false);
}