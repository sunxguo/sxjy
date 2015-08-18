<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>控制面板-后台管理系统-山西教育在线</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="/assets/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 7]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='js/plugins/other/lte-ie7.js'></script>
    <![endif]-->    
    <script type='text/javascript' src='/assets/js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='/assets/js/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='/assets/js/plugins/bootstrap/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='/assets/js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>    
    
    <script type='text/javascript' src='/assets/js/plugins/jflot/jquery.flot.js'></script>    
    <script type='text/javascript' src='/assets/js/plugins/jflot/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='/assets/js/plugins/jflot/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/jflot/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='/assets/js/plugins/sparklines/jquery.sparkline.min.js'></script>        
    
    <script type='text/javascript' src='/assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    
    <script type='text/javascript' src="/assets/js/plugins/uniform/jquery.uniform.min.js"></script>
    
    <script type='text/javascript' src='/assets/js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='/assets/js/plugins/shbrush/shBrushCss.js'></script>    
    
    <script type='text/javascript' src='/assets/js/plugins.js'></script>
    <script type='text/javascript' src='/assets/js/charts.js'></script>
    
    <script type='text/javascript' src='/assets/js/actions.js'></script>
</head>
<body>    
    <div id="loader"><img src="/assets/img/loader.gif"/></div>
    <div class="wrapper">
        <?php require('sidebar.php');?>        
        <div class="body">
            <ul class="navigation">
                <li>
                    <a href="/Admin/index" class="button">
                        <div class="icon">
                            <span class="ico-monitor"></span>
                        </div>                    
                        <div class="name">控制面板</div>
                    </a>                
                </li>              
                <li>
                    <a href="#" class="button dblue">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-layout-7"></span>
                        </div>                    
                        <div class="name">网站结构</div>
                    </a> 
                    <ul class="sub">
                        <li><a href="tables.html">栏目管理</a></li>
                    </ul>                                        
                </li>          
                <li>
                    <a href="#" class="button green">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-pen-2"></span>
                        </div>                    
                        <div class="name">内容管理</div>
                    </a>                
                    <ul class="sub">
                        <li><a href="forms.html">文章</a></li>
                        <li><a href="validation.html">调查</a></li>
                    </ul>                    
                </li>  
                <li>
                    <a href="#" class="button purple">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-box"></span>
                        </div>                    
                        <div class="name">用户管理</div>
                    </a>                
                    <ul class="sub">
                        <li><a href="faq.html">注册用户列表</a></li>
                        <li><a href="login.html">用户评论管理</a></li>
                    </ul>                                        
                </li>                           
                <li>
                    <a href="statistic.html" class="button red">
                        <div class="icon">
                            <span class="ico-chart-4"></span>
                        </div>                    
                        <div class="name">统计</div>
                    </a>                
                </li> 
                <li>
                    <a href="#" class="button yellow">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-cog-2"></span>
                        </div>                    
                        <div class="name">系统设置</div>
                    </a>          
                    <ul class="sub">
                        <li><a href="ui.html">基本参数</a></li>
                        <li><a href="widgets.html">系统日志管理</a></li>
                        <li><a href="buttons.html">数据库备份</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="button orange">
                        <div class="icon">
                            <span class="ico-cloud"></span>
                        </div>                    
                        <div class="name">账号管理</div>
                    </a>
                    <!--               
                    <ul class="sub">
                        <li><a href="files.html">File handling</a></li>
                        <li><a href="images.html">Images</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="404.html">Error 404</a></li>
                    </ul>
                    -->                                        
                </li>          
                <li>
                    <div class="user">
                        <img src="/assets/img/examples/users/dmitry_m.jpg" align="left"/>
                        <a href="#" class="name">
                            <span><?php echo $_SESSION['username'];?></span>
                            <span class="sm">管理员</span>
                        </a>
                    </div>
                    <div class="buttons">
                        <div class="sbutton green navButton">
                            <a href="#"><span class="ico-align-justify"></span></a>
                        </div>
                        <div class="sbutton blue">
                            <a href="#"><span class="ico-cogs"></span></a>
                            <div class="popup">
                                <div class="arrow"></div>
                                <div class="row-fluid">
                                    <div class="row-form">
                                        <div class="span12"><strong>设置</strong></div>
                                    </div>                                    
                                    <div class="row-form">
                                        <div class="span4">导航栏:</div>
                                        <div class="span8"><input type="radio" class="cNav" name="cNavButton" value="default"/> 默认 <input type="radio" class="cNav" name="cNavButton" value="bordered"/> Bordered</div>
                                    </div>                                    
                                    <div class="row-form">
                                        <div class="span4">内容:</div>
                                        <div class="span8"><input type="radio" class="cCont" name="cContent" value=""/> 响应式 <input type="radio" class="cCont" name="cContent" value="fixed"/> 固定</div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>                        
                    </div>
                </li>                
            </ul>
            
            <div class="content">
                <div class="block">
                            <div class="head green">
                                <div class="icon"><span class="ico-brush"></span></div>
                                <h2>With checkbox and hover</h2>    
                                <ul class="buttons">
                                    <li><a href="#" onclick="source('table_hover_check'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                                </ul>                                                          
                            </div>                
                            <div class="data-fluid">
                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-hover">
                                    <thead>
                                        <tr class="">
                                            <th><div class="checker"><span class=""><input type="checkbox" class="checkall" style="opacity: 0;"></span></div></th>
                                            <th width="25%">
                                            Email
                                            </th>
                                            <th width="25%">
                                            Name
                                            </th>
                                            <th width="25%">
                                            Code
                                            </th>
                                            <th width="25%">
                                            Post
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="active">
                                            <td>
                                                <div class="checker"><span class="checked"><input type="checkbox" name="check[]" value="1" style="opacity: 0;"></span></div>
                                            </td>
                                            <td>
                                                <a href="#">dmitry@domain.com</a>
                                            </td>
                                            <td>
                                                Dmitry Ivaniuk
                                            </td>
                                            <td>
                                                DT-SV35582
                                            </td>
                                            <td>
                                                <span class="label label-success">Developer</span>
                                            </td>
                                        </tr>
                                        <tr class="active">
                                            <td>
                                                <div class="checker"><span class="checked"><input type="checkbox" name="check[]" value="1" style="opacity: 0;"></span></div>
                                            </td>                                
                                            <td>
                                                <a href="#">olga@domain.com</a>
                                            </td>
                                            <td>
                                                Olga Ivaniuk
                                            </td>                                
                                            <td width="25%">
                                                DS-SV34522
                                            </td>      
                                            <td width="25%">
                                                <span class="label label-warning">Economist</span>
                                            </td>                                
                                        </tr>
                                        <tr class="active">
                                            <td>
                                                <div class="checker"><span class="checked"><input type="checkbox" name="check[]" value="1" style="opacity: 0;"></span></div>
                                            </td>                                
                                            <td>
                                                <a href="#">alex@domain.com</a>
                                            </td>
                                            <td>
                                                Alex Fruz
                                            </td>         
                                            <td width="25%">
                                                DV-SV41222
                                            </td>  
                                            <td width="25%">
                                                <span class="label label-info">Developer</span>
                                            </td>                                  
                                        </tr>
                                        <tr class="">
                                            <td>
                                                <div class="checker"><span class=""><input type="checkbox" name="check[]" value="1" style="opacity: 0;"></span></div>
                                            </td>                                
                                            <td>
                                                <a href="#">helen@domain.com</a>
                                            </td>
                                            <td>
                                                Helen Simonchuk
                                            </td>                                                                
                                            <td width="25%">
                                                DV-ST32212
                                            </td>   
                                            <td width="25%">
                                                <span class="label label-important">Promoter</span>
                                            </td>                                  
                                        </tr>
                                        <tr class="">
                                            <td>
                                                <div class="checker"><span class=""><input type="checkbox" name="check[]" value="1" style="opacity: 0;"></span></div>
                                            </td>                                
                                            <td>
                                                <a href="#">valentin@domain.com</a>
                                            </td>       
                                            <td>
                                                Valentin Ratushev
                                            </td>        
                                            <td width="25%">
                                                DV-WR21677
                                            </td>    
                                            <td width="25%">
                                                <span class="label">Lawyer</span>
                                            </td>                                
                                        </tr>                           
                                    </tbody>
                                </table>
                            </div>                
                        </div>
                
                
            </div>
            
        </div>
        
    </div>
    
    <div class="dialog" id="source" style="display: none;" title="Source"></div>
    
</body>
</html>
