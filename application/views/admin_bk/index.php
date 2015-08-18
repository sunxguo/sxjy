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
                
                <div class="page-header">
                    <div class="icon">
                        <span class="ico-arrow-right"></span>
                    </div>
                    <h1>控制面板 <small>山西教育在线</small></h1>
                </div>
                
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widgets">
                            <div class="widget blue value">
                                <div class="left">60%</div>
                                <div class="right">
                                    $1,530 amount paid<br/>
                                    $2,102 in queue<br/>
                                    $11,100 total taxes
                                </div>
                                <div class="bottom">
                                    <a href="#">Invoices statistics</a>
                                </div>
                            </div>
                            <div class="widget green icon">
                                <div class="left">
                                    <div class="icon">
                                        <span class="ico-download"></span>
                                    </div>
                                </div>
                                <div class="right">
                                    <table cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                            <td>硬盘</td><td>4.5 / 250 GB</td>
                                        </tr>
                                        <tr>
                                            <td>MySQL</td><td>1.8 / 10 GB</td>
                                        </tr>
                                        <tr>
                                            <td>数据库</td><td>1 / 5</td> 
                                        </tr>
                                        <tr>
                                            <td>E-mails</td><td>5 / 15</td> 
                                        </tr>
                                        <tr>
                                            <td>Tickets</td><td>2</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="bottom">
                                    <a href="#">服务器信息</a>
                                </div>                            
                            </div>
                            <div class="widget orange chart nmr">
                                <div class="left">                                    
                                    <span class="mChartBar" sparkWidth="90" sparkHeight="90" sparkType="bar" sparkBarColor="#FFFFFF" sparkBarWidth="10">10,9,8.5,8,9,8,7,7.5</span>
                                </div>
                                <div class="right">
                                    65% New<br/>
                                    35% Returning<br/>
                                    00:05:12 Average time on site
                                </div>
                                <div class="bottom">
                                    <a href="#">访问者列表</a>
                                </div>                            
                            </div>                        
                        </div>
                    </div>
                </div>
                
                <div class="row-fluid">
                    
                    <div class="span7">
                        
                        <div class="block">
                            <div class="head">
                                <div class="icon"><span class="ico-chart-4"></span></div>
                                <h2>访问统计</h2>
                                <ul class="buttons">
                                    <li><a href="#" class="ublock"><div class="icon"><span class="ico-undo"></span></div></a></li>
                                    <li><a href="#" class="cblock"><div class="icon"><span class="ico-sort"></span></div></a></li>
                                </ul>
                            </div>
                            <div class="data">
                                <div id="main_chart" style="height: 300px;"></div>                                
                            </div>       
                            <div class="row-fluid">
                                <div class="span4">
                                    <div class="stat">
                                        <span class="cdblue">2,350</span> PAGE<br/> VIEWS
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="stat">
                                        <span class="cblue">1,120</span> UNIQUE<br/> PAGE VIEWS
                                    </div>                                                                        
                                </div>
                                <div class="span4">
                                    <div class="stat">
                                        <span class="corange">720</span> SALES<br/> PER PERIOD
                                    </div>                                                
                                </div>               
                            </div>
                        </div>

                        <div class="block">
                            <div class="head orange">                                
                                <h2>最新发布</h2>
                                <ul class="buttons">
                                    <li><a href="#" onClick="source('table_main'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                                    <li><a href="#" class="ublock"><div class="icon"><span class="ico-undo"></span></div></a></li>
                                    <li><a href="#" class="cblock"><div class="icon"><span class="ico-sort"></span></div></a></li>
                                </ul>
                            </div>
                            <div class="data-fluid">
                                <table cellpadding="0" cellspacing="0" width="100%" class="table lcnp">
                                    <thead>
                                        <tr>
                                            <th width="16"><input type="checkbox" class="checkall"/></th>                                        
                                            <th>标题</th>
                                            <th>发布人</th>
                                            <th>E-mail</th>                       
                                            <th width="78">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>                                        
                                            <td>Dmitry</td>
                                            <td>dmitry@domain.com</td>
                                            <td>+98(765) 432-10-98</td>                      
                                            <td>
                                                <a href="#" class="button green">
                                                    <div class="icon"><span class="ico-pencil"></span></div>
                                                </a>
                                                <a href="#" class="button red">
                                                    <div class="icon"><span class="ico-remove"></span></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>                                        
                                            <td>Alex</td>
                                            <td>alex@domain.com</td>
                                            <td>+98(765) 432-10-99</td>                      
                                            <td>
                                                <a href="#" class="button green">
                                                    <div class="icon"><span class="ico-pencil"></span></div>
                                                </a>
                                                <a href="#" class="button red">
                                                    <div class="icon"><span class="ico-remove"></span></div>
                                                </a>                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>John</td>
                                            <td>john@domain.com</td>
                                            <td>+98(765) 432-10-97</td>                      
                                            <td>
                                                <a href="#" class="button green">
                                                    <div class="icon"><span class="ico-pencil"></span></div>
                                                </a>
                                                <a href="#" class="button red">
                                                    <div class="icon"><span class="ico-remove"></span></div>
                                                </a>                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>                                        
                                            <td>Angelina</td>
                                            <td>angelina@domain.com</td>
                                            <td>+98(765) 432-10-90</td>                      
                                            <td>
                                                <a href="#" class="button green">
                                                    <div class="icon"><span class="ico-pencil"></span></div>
                                                </a>
                                                <a href="#" class="button red">
                                                    <div class="icon"><span class="ico-remove"></span></div>
                                                </a>                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>Tom</td>
                                            <td>tom@domain.com</td>
                                            <td>+98(765) 432-10-92</td>                      
                                            <td>
                                                <a href="#" class="button green">
                                                    <div class="icon"><span class="ico-pencil"></span></div>
                                                </a>
                                                <a href="#" class="button red">
                                                    <div class="icon"><span class="ico-remove"></span></div>
                                                </a>                                                
                                            </td>                                        
                                        </tr>                                
                                    </tbody>
                                </table>
                            </div>                            
                        </div>                        
                        
                    </div>
                    <div class="span5">
                        <div class="block">
                            <div class="head">
                                <div class="icon"><span class="ico-tag"></span></div>
                                <h2>评论</h2>
                                <ul class="buttons">             
                                    <li><a href="#" onClick="source('tickets'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                                    <li><a href="#" class="ublock"><div class="icon"><span class="ico-undo"></span></div></a></li>
                                    <li><a href="#" class="cblock"><div class="icon"><span class="ico-sort"></span></div></a></li>
                                </ul>                                
                            </div>
                            <div class="data-fluid">
                                <table width="100%" class="table tickets">
                                    <tr>
                                        <td width="55" class="bl_blue"><span class="label label-info">new</span></td>
                                        <td width="50">#AA-325 <span class="mark">23/02/2013</span></td>
                                        <td><a href="#" class="cblue">Buy on themeforest this great template...</a> <span class="mark">Added by Dmitry Ivaniuk</span></td>                                        
                                    </tr>
                                    <tr>
                                        <td class="bl_blue"><span class="label label-info">new</span></td>
                                        <td>#AA-216 <span class="mark">22/02/2013</span></td>
                                        <td><a href="#" class="cblue">Go to shop and buy beer!</a> <span class="mark">Added by Dmitry Ivaniuk</span></td>                                        
                                    </tr>                
                                    <tr>
                                        <td class="bl_green"><span class="label label-success">done</span></td>
                                        <td>#AC-857 <span class="mark">21/02/2013</span></td>
                                        <td><a href="#" class="cgreen">Buy on themeforest this great template...</a> <span class="mark">Added by Dmitry Ivaniuk</span></td>                                        
                                    </tr>
                                    <tr>
                                        <td class="bl_red"><span class="label label-important">removed</span></td>
                                        <td>#VB-57 <span class="mark">20/02/2013</span></td>
                                        <td><a href="#" class="cred">Buy something for my dog...</a> <span class="mark">Added by Dmitry Ivaniuk</span></td>                                        
                                    </tr>   
                                    <tr>
                                        <td class="bl_red"><span class="label label-important">removed</span></td>
                                        <td>#VB-44 <span class="mark">20/02/2013</span></td>
                                        <td><a href="#" class="cred">Buy something for my dog...</a> <span class="mark">Added by Dmitry Ivaniuk</span></td>                                        
                                    </tr>
                                    
                                    <tr>
                                        <td class="bl_green"><span class="label label-success">done</span></td>
                                        <td>#AA-216 <span class="mark">22/02/2013</span></td>
                                        <td><a href="#" class="cgreen">Go to shop and buy beer!</a> <span class="mark">Added by Dmitry Ivaniuk</span></td>                                        
                                    </tr>                
                                    <tr>
                                        <td class="bl_red"><span class="label label-important">removed</span></td>
                                        <td>#VB-31 <span class="mark">21/02/2013</span></td>
                                        <td><a href="#" class="cred">Buy on themeforest this great template...</a> <span class="mark">Added by Dmitry Ivaniuk</span></td>                                        
                                    </tr>
                                    <tr>
                                        <td class="bl_green"><span class="label label-success">done</span></td>
                                        <td>#VB-57 <span class="mark">20/02/2013</span></td>
                                        <td><a href="#" class="cgreen">Buy something for my dog...</a> <span class="mark">Added by Dmitry Ivaniuk</span></td>                                        
                                    </tr>                                      
                                </table>
                            </div>                                   
                        </div>                        
                        
                        <div class="block">
                            <div class="head dblue">                                
                                <h2>消息</h2>
                                <ul class="buttons">             
                                    <li><a href="#" onClick="source('messages'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                                    <li><a href="#" class="ublock"><div class="icon"><span class="ico-undo"></span></div></a></li>
                                    <li><a href="#" class="cblock"><div class="icon"><span class="ico-sort"></span></div></a></li>
                                </ul>                                
                            </div>
                            <div class="data dark npr npb">                                
                                <div class="messages scroll" style="height: 200px;">
                                    <div class="item blue">
                                        <div class="arrow"></div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut diam quis dolor mollis tristique. Suspendisse vestibulum convallis felis vitae facilisis. Praesent eu nisi vestibulum erat.</div>
                                        <div class="date">09.02., 21:04</div>
                                    </div>
                                    <div class="item dblue out">
                                        <div class="arrow"></div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut diam quis dolor mollis tristique. Suspendisse vestibulum convallis felis vitae facilisis. Praesent eu nisi vestibulum erat.</div>
                                        <div class="date">09.02., 21:02</div>
                                    </div>                                    
                                    <div class="item blue">
                                        <div class="arrow"></div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut diam quis dolor mollis tristique. Suspendisse vestibulum convallis felis vitae facilisis. Praesent eu nisi vestibulum erat.</div>
                                        <div class="date">09.02., 20:55</div>
                                    </div>                                    
                                </div>                                
                            </div>    
                            <div class="toolbar dark">
                                <div class="input-prepend input-append">
                                    <span class="add-on dblue"><span class="icon-envelope icon-white"></span></span>
                                    <input type="text"/>                              
                                    <button class="btn dblue" type="button">发送  <span class="icon-arrow-next icon-white"></span></button>
                                </div>                                 
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="dialog" id="source" style="display: none;" title="Source"></div>
    
</body>
</html>
