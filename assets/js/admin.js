$(document).ready(function(){

});
function adminLogin () {
    var admin = new Object(); 
    admin.username = $("#username").val();
    admin.password = $("#password").val();
    dataHandler('/Adminajax/login',admin,null,null,null,adminLoginSuccess,false);
}
function adminLoginSuccess(){
    location.href='/Admin/index';   
}