<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>yetpress - [!--pagetitle--] - 网站建设 资源分享 网络赚钱 英语学习 创意恶搞 绝密资料</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content=" 网站建设 资源分享 网络赚钱 英语学习 创意恶搞 绝密资料"/>
<meta name="description" content=" 网站建设 资源分享 网络赚钱 英语学习 创意恶搞 绝密资料" />
    <link rel="stylesheet" href="[!--news.url--]skin/yetpress_cn/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="[!--news.url--]favicon.ico" type="image/x-icon" />
    <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
      <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    <script src="[!--news.url--]skin/yetpress_cn/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="[!--news.url--]skin/yetpress_cn/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="[!--news.url--]skin/yetpress_cn/css/style.css?v=102014" />

    <script src="[!--news.url--]skin/yetpress_cn/js/jcarousellite.js" type="text/javascript"></script>   
    <script src="[!--news.url--]skin/yetpress_cn/js/jquery.qtip.min.js" type="text/javascript"></script>
    <script src="[!--news.url--]skin/yetpress_cn/js/plx_global.js" type="text/javascript"></script>
    <script src="[!--news.url--]skin/yetpress_cn/js/headroom.min.js" type="text/javascript"></script>
    <script src="[!--news.url--]skin/yetpress_cn/js/jquery.pin.js" type="text/javascript"></script>
    <script src="[!--news.url--]skin/yetpress_cn/js/jquery.grid-a-licious.min.js"></script> 
    <script src="[!--news.url--]skin/yetpress_cn/js/jquery.actual.js" type="text/javascript"></script> <!-- 获取隐藏元素真是宽高 -->
    <script src="[!--news.url--]skin/yetpress_cn/js/MSClass.js" type="text/javascript"></script>
    <script src="[!--news.url--]skin/yetpress_cn/js/yet_cn.js" type="text/javascript"></script>
    <script type="text/javascript">
        var loggedIn = false;
        var dark = false;
    </script>
    <!--[if lt IE 9]>  
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>  
    <![endif]-->
    <SCRIPT LANGUAGE=JavaScript>
    <!--
    function getLight(pars){if(pars=="open"){close_light(this)}else{close_light(this)}};function thisMovie(movieName){if(navigator.appName.indexOf("Microsoft")!=-1){return window[movieName]}else{return document[movieName]}}
    //-->
    </SCRIPT> 
</head>
<body class="feature home">
    <div class="wrapper">
        <div class="header header1" id="header">
            <div class="logo">
                <a href="[!--news.url--]"><img src="[!--news.url--]skin/yetpress_cn/images/logo_cn.png" alt="" /></a>
            </div>

            <div class="tabs">
                <ul>
                    <li><a href="<?=$public_r['newsurl']?><?=$class_r[1]['classpath']?>/"><?=$class_r[1]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='1' and showclass='0' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li><a href="<?=$public_r['newsurl']?><?=$class_r[2]['classpath']?>/"><?=$class_r[2]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='2' and showclass='0' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li><a href="<?=$public_r['newsurl']?><?=$class_r[3]['classpath']?>/"><?=$class_r[3]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='3' and showclass='0' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li><a href="<?=$public_r['newsurl']?><?=$class_r[4]['classpath']?>/"><?=$class_r[4]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='4' and showclass='0' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li class="subline"><a href="<?=$public_r['newsurl']?><?=$class_r[5]['classpath']?>/"><?=$class_r[5]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='5' and showclass='0' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li class="subline"><a href="<?=$public_r['newsurl']?><?=$class_r[6]['classpath']?>/"><?=$class_r[6]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='6' and showclass='0' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li class="subline"><a href="<?=$public_r['newsurl']?><?=$class_r[7]['classpath']?>/"><?=$class_r[7]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='7' and showclass='0' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li class="subline"><a href="<?=$public_r['newsurl']?><?=$class_r[8]['classpath']?>/"><?=$class_r[8]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='8' and showclass='0' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li class="subline"><a href="<?=$public_r['newsurl']?><?=$class_r[9]['classpath']?>/"><?=$class_r[9]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='9' and showclass='0' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                </ul>
            </div>
            
        </div>
        <div class="clear"></div>
        <div class="header header2" >
            <div class="tabs">
                <ul>
                    <li><a href="<?=$class_r[5]['classpath']?>/"><?=$class_r[5]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='5' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li><a href="<?=$class_r[6]['classpath']?>/"><?=$class_r[6]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='6' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li><a href="<?=$class_r[7]['classpath']?>/"><?=$class_r[7]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='7' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li><a href="<?=$class_r[8]['classpath']?>/"><?=$class_r[8]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='8' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                    <li><a href="<?=$class_r[9]['classpath']?>/"><?=$class_r[9]['classname']?></a>
                        <ul>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast,sonclass,classpath from {$dbtbpre}enewsclass where bclassid='9' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$public_r['newsurl']?><?=$bqr['classpath']?>/"><?=$bqr["classname"]?></a></li>
                            <?php
}
}
?>                                       
                        </ul>  
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <!--<div class="list_bannerads">
            <ul>
                <li style="width:20%"><script src="/d/js/acmsd/thea4.js"></script></li>
                <li style="width:60.9%"><script src="/d/js/acmsd/thea2.js"></script></li>
                <li style="width:19.1%"><script src="/d/js/acmsd/thea3.js"></script></li>
                <div class="clear"></div>
            </ul>
            
        </div>-->
        <div class="content"> 
            <div class="main">
            <!-- BEGIN CONTENT AREA -->
                <div class="list_main">
                    <div class="list_left">
                        <div class="topclass">
                            <?php 
                                $classid=$class_r[$GLOBALS["navclassid"]]["classid"]; //取得栏目id
                                $bclassid=$class_r[$GLOBALS["navclassid"]]["bclassid"]; //取得父栏目id
                                if($bclassid==0){//一级栏目 直接输出本栏目
                                    echo $class_r[$GLOBALS["navclassid"]]["classname"];
                                }else{
                                    $r=$empire->fetch1("select classname from {$dbtbpre}enewsclass where classid='$bclassid'");
                                    echo $r['classname'];
                                }
                            ?>
                        </div>
                        <!--<div class="user_form">
                            <a href="javascript:void(0)" class="user_login">登录</a>
                            <a href="javascript:void(0)" class="user_reg">注册</a>
                        </div>-->
                        <script src="[!--news.url--]e/member/login/loginjs_yetcn.php"></script>
                        <ul class="left_navul">
                            <?php 
                                if($bclassid==0){//如果是一级栏目 父栏目id为本栏目id
                                    $pid=$classid;
                                }else{
                                    $pid=$bclassid;
                                }
                                $sql=$empire->query("select classid,classname,classpath,showdt from {$dbtbpre}enewsclass where bclassid='$pid' order by `classid` asc"); 
                                while($r=$empire->fetch($sql)){ //循环获取查询记录
                                    if($r["showdt"]==2){
                                        $path='e/action/ListInfo/?classid='.$r["classid"];
                                    }else{
                                        $path=$r["classpath"];
                                    }//动态栏目链接也为动态的
                            ?>
                            <li><a href="<?=$public_r['newsurl']?><?=$path?>/" <?=$r["classid"]==$classid?"class='left_navon'":""?>><?=$r["classname"]?></a></li>
                            <?php
                                }
                            ?>
                            <div class="clear"></div>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="list_middle">
                        <!-- <div class="intro_title">
                            <div class="crumb">
                                位置：[!--newsnav--]
                            </div>
                            <div id="intro_title_wrap">点击展开栏目简介</div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <div class="intro_text">
                            [!--class.intro--]
                        </div>
                        <div class="clear"></div> -->
                        <div class="navtool_tab">
                            <div class="tab_category">
                                <ul>
                                    <li id="tab_case"><a href="javascript:void(0)" page="list" class="on">案例展示</a></li>
                                    <li id="tab_service" style="float:right;"><a href="javascript:void(0)" page="content">服务介绍</a></li>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <!-- 服务 单独页面 -->
                        <div class="article_content">
                            <div class="content_body">
                                <?php 
                                    $content=ReturnClassAddField(0,'column_content');
                                    echo $content;
                                 ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- 案例 瀑布流 -->
                        <div id="device" class="gridalicious" style="display:">
                            <div class="galcolumn">
                              [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]
                            </div>
                        </div>
                        <script>
                            // tab切换
                            $(function(){
                                $('.article_content').hide();
                                $('#tab_service').click(function() {
                                    $(this).find("a").addClass('on');
                                    $('#tab_case').find("a").removeClass('on');
                                    $('.gridalicious').hide();
                                    $('.article_content').show();
                                });
                                $('#tab_case').click(function() {
                                    $(this).find("a").addClass('on');
                                    $('#tab_service').find("a").removeClass('on');
                                    $('.article_content').hide();
                                    $('.gridalicious').show();
                                });
                            })
                        </script>
                    </div>
                    <div class="list_right">
    <ul>
        <li><a href=""><img src="[!--news.url--]skin/yetpress_cn/images/demo1.jpg" alt=""></a></li>
    </ul>
</div>
                    <div class="clear"></div>
                </div>
             <div class="clear"></div>
                <!-- <div class="inner_column">
                    <div class="column" style="background:#8FDABA">
                        
                    </div>
                    <div class="column col_middle" style="background:#E9D89C">
                        
                    </div>
                    <div class="column" style="background:#B6D39A">
                        
                    </div>
                    <div class="clear"></div>
                  </div> -->
                  
                  
            <!-- END CONTENT AREA -->
            </div>
        </div>
        <div class="footer">
      <div class="links">
        站点站务：<a href="/contact">联系我们</a> | <a href="" target="_blank">商务合作</a> | <a href="">兼职合作</a> | <a href="">服务咨询</a> | <a href="/faq">常见问答</a> | <a href="/terms">网站声明</a> | <a href="">友链申请</a> | <a href="http://cn.yetpress.com/projects/" target="_blank">案例入口</a> 
      </div>
      <div class="friendlinks">
        友情链接：<a href="http://poloniex.freshdesk.com" target="_blank">yetpress</a> | <a href="/faq">FAQ</a> | <a href="/terms">Terms and Conditions</a>
      </div>
      <div class="meta">
        <div class="info">
            <p>
                Server time: <strong><span id='serverTime'><?php echo date("Y-m-d H:i:s");?></span></strong>&nbsp;&nbsp;&nbsp;Users currently online: <strong><span id='usersOnline'>667</span></strong>&nbsp;&nbsp;&nbsp;Accounts registered: <strong><span id='accountsRegistered'>61744</span></strong><br />
            </p>
            <p>&copy; Yetpress, LLC 2014 - Powered by empireCms <script language="javascript" type="text/javascript" src="http://js.users.51.la/17693852.js"></script><noscript><a href="http://www.51.la/?17693852" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/17693852.asp" style="border:none" /></a></noscript></p>
        </div>
      </div>
    </div>    
</div>
<div class="clear"></div>
<div class="login user_wrap" style="display:none;">
    <form method="post" name="form_login" action="[!--news.url--]e/member/doaction.php">
        <input type="hidden" name="enews" value="login">
        <input type="hidden" name="ecmsfrom" value="">
        <input type="hidden" name="tempurl" value="">
        <input type="hidden" name="tobind" id="tobind" value="0">
        <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" name="username" placeholder="用户名" id="username">
              <label class="login-field-icon fui-user" for="username"></label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control login-field" name="password" placeholder="密码" id="password">
              <label class="login-field-icon fui-lock" for="password"></label>
            </div>
            <a class="btn btn-success btn-lg btn-user s_login" href="javascript:void(0)" id="gologin">登陆</a>
            <a class="btn btn-primary btn-lg btn-user s_reg" href="javascript:void(0)">注册</a>
            <a class="btn btn-close" href="javascript:void(0)">关闭</a>
        </div>
    </form>
</div>
</div>
<div class="clear"></div>
<div class="reg user_wrap" style="display:none;">
    <form method="post" name="form_reg" action="[!--news.url--]e/member/doaction.php">
        <input type="hidden" name="enews" value="register">
        <input type="hidden" name="groupid" value="1"><!-- 普通用户 -->
        <input type="hidden" name="ecmsfrom" value="">
        <input type="hidden" name="tempurl" value="">
        <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" name="username" placeholder="用户名(必填)" id="username">
              <label class="login-field-icon fui-user" for="username"></label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control login-field" name="password" placeholder="密码(必填)" id="password">
              <label class="login-field-icon fui-lock" for="password"></label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control login-field" name="repassword" placeholder="重复密码(必填)" id="repassword">
              <label class="login-field-icon fui-lock" for="repassword"></label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control login-field" name="email" placeholder="邮箱(必填)" id="email">
              <label class="login-field-icon fui-user" for="email"></label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control login-field" name="qq" placeholder="QQ号码" id="qq">
              <label class="login-field-icon fui-user" for="qq"></label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control login-field" name="tel" placeholder="手机号码" id="tel">
              <label class="login-field-icon fui-user" for="tel"></label>
            </div>
            <a class="btn btn-success btn-lg btn-user s_reg" href="javascript:void(0)" id="goreg">注册</a>
            <a class="btn btn-primary btn-lg btn-user s_login" href="javascript:void(0)">登陆</a>
            <a class="btn btn-close" href="javascript:void(0)">关闭</a>
        </div>
     </form>   
</div>
<script src="[!--news.url--]skin/yetpress_cn/js/totop.js"></script> <!-- 返回顶部 -->
<script src="[!--news.url--]skin/yetpress_cn/js/jquery.blockUI.js"></script>
<!-- http://malsup.com/jquery/block/#demos -->
<script>
    //当前页url
    function loginReturnUrl(){
        //多次提交错误返回后，acts参数会多次出现，每次要先过滤掉参数(结合项等的动态页可能自带有参数，因此要指定截取"acts"之前的内容)
        var link=window.location.href;
        var url="";
        var acts=getUrlParam('acts');
        if(acts){
            url=link.substring(0, link.indexOf('acts'));
        }else{
            url=link;
        }
        return url+"?&acts=login";
    }
    function RegReturnUrl(){
        var link=window.location.href;
        var url="";
        var acts=getUrlParam('acts');
        if(acts){
            url=link.substring(0, link.indexOf('acts'));
        }else{
            url=link;
        }
        return url+"?&acts=reg";
    }
    function getUrlParam(name){
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r!=null) return unescape(r[2]); return null;
    }
    function getReturnUrl(){
        var link=window.location.href;
        var url="";
        var acts=getUrlParam('acts');
        if(acts){
            url=link.substring(0, link.indexOf('acts'));
        }else{
            url=link;
        }
        return url;
    }
    $(function(){
        $('.login input[name="ecmsfrom"]').val(getReturnUrl());
        $('.reg input[name="ecmsfrom"]').val(getReturnUrl());
        $('.login input[name="tempurl"]').val(loginReturnUrl());
        $('.reg input[name="tempurl"]').val(RegReturnUrl());
        var act=getUrlParam('acts');//登陆注册错误返回时触发的弹窗
        if(act=="login"){
            $(".user_login").click();
        }else if(act=="reg"){
            $(".user_reg").click();
        }
    })
    var ui_width=$(window).width();
    var f_w="50%";//宽度
    var f_l="25%";//距左
    var f_h="25";//居顶
    if(ui_width<768){
        f_w="88%";
        f_l="6%";
    }
    $(".user_login").click(function(){
        $.blockUI({
            message: $(".login"),
            css: {
                background:"transparent",
                border:"none",
                background:"none",
                width:f_w,
                left:f_l,
                top:"25%",
                cursor:"default"
            },
            overlayCSS:{
                cursor:"default",
            }
        });
    })
    $(".user_reg").click(function(){
        var h=$(".reg").height();
        var top=($(window).height()-h)/2;
        // alert(h);
        $.blockUI({
            message: $(".reg"),
            css: {
                background:"transparent",
                border:"none",
                background:"none",
                width:f_w,
                left:f_l,
                top:top,
                cursor:"default"
            },
            overlayCSS:{
                cursor:"default",
            }
        });
    })
    $(".btn-close").click(function(){
        $.unblockUI({
            message: $(".user_wrap"),
        });
    })
    $('.login .s_reg').click(function(){
        $.unblockUI({
            message: $(".login"),
            onUnblock: function(){$(".user_reg").click();}
        });
    })
    $('.reg .s_login').click(function(){
        $.unblockUI({
            message: $(".reg"),
            onUnblock: function(){  $(".user_login").click();}
        });
    })
    $('#gologin').click(function() {
        $('form[name="form_login"]').submit();
    });
    $('#goreg').click(function() {
        var username=$('.reg #username').val();
        var password=$('.reg #password').val();
        var repassword=$('.reg #repassword').val();
        var email=$('.reg #email').val();
        var reg =/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
        
        if(username==""){
            alert("用户名必填");
            $("#username").focus();
            return false;
        }else if(password==""){
            alert("密码必填");
            $("#password").focus();
            return false;
        }else if(repassword==""){
            alert("重复密码必填");
            $("#repassword").focus();
            return false;
        }else if(email==""){
            alert("邮箱必填");
            $("#email").focus();
            return false;
        }else if(!reg.test(email)){
            alert("邮箱格式有误");
            return false;
        }else if(password!=repassword){
            alert("两次密码输入不一致");
            $("#password").focus();
            return false;
        }
        $('form[name="form_reg"]').submit();
    });
</script>
</body>
</html>