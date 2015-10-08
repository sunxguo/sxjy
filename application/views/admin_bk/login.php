<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>登录-后台管理系统-山西教育在线</title>
    <link rel="icon" type="image/ico" href="/assets/favicon.ico"/>
    
    <link href="/assets/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->           
    <!--[if lte IE 7]>
        <script type='text/javascript' src='/assets/js/plugins/other/lte-ie7.js'></script>
    <![endif]-->    
    <script type='text/javascript' src='/assets/js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='/assets/js/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='/assets/js/plugins/bootstrap/bootstrap.min.js'></script>
    
    <script type='text/javascript' src="/assets/js/plugins/uniform/jquery.uniform.min.js"></script>
    
    <script type='text/javascript' src='/assets/js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/shbrush/shBrushCss.js'></script>    
    
    <script type='text/javascript' src='/assets/js/plugins.js'></script>
    <script type='text/javascript' src='/assets/js/charts.js'></script>
    <script type='text/javascript' src='/assets/js/actions.js'></script>
    <script type='text/javascript' src='/assets/js/common.js'></script>
    <script type='text/javascript' src='/assets/js/admin.js'></script>
    
</head>
<body>    
    <div id="loader"><img src="img/loader.gif"/></div>
       
    <div class="login">

        <div class="page-header">
            <div class="icon">
                <span class="ico-arrow-right"></span>
            </div>
            <h1>登录 <small>山西教育在线后台管理系统</small></h1>
        </div>
        <div class="row-fluid">
            <div class="row-form">
                <div class="span12">
                    <input id="username" type="text" name="username" placeholder="用户名"/>
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <input id="password" type="password" name="password" placeholder="密码"/>
                </div>            
            </div>
            <!--
            <div class="row-form">
                <div class="span12">
                    <input type="checkbox"/> Keep me signed in
                </div>
            </div>
            -->
            <div class="row-form">
                <div class="span12">
                    <button class="btn" onclick="adminLogin();">登录 <span class="icon-arrow-next icon-white"></span></button>
                </div>                
            </div>
        </div>
    </div>
    
</body>
</html>
