<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Poloniex - Bitcoin/Cryptocurrency Exchange</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cn.yetpress.com/skin/yetpress_cn/bootstrap/css/bootstrap.min.css">
    <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
      <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/bootstrap/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="http://cn.yetpress.com/skin/yetpress_cn/css/style.css?v=102014" />
    
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.qtip.min.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/plx_global.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/headroom.min.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.pin.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.grid-a-licious.min.js"></script> 
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.actual.js" type="text/javascript"></script> <!-- 获取隐藏元素真是宽高 -->
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/yet_cn.js" type="text/javascript"></script>
    <script type="text/javascript">
        var loggedIn = false;
        var dark = false;
    </script>
    <!--[if lt IE 9]>  
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>  
    <![endif]--> 
</head>
<body class="feature home">
    <div class="wrapper">
        <div class="header header1" id="header">
            <div class="logo">
                <a href="http://cn.yetpress.com/"><img src="http://cn.yetpress.com/skin/yetpress_cn/images/logo_cn.png" alt="" /></a>
            </div>

            <div class="tabs">
                <ul>
                    <li><a href="http://cn.yetpress.com/web_dev/">网络编程</a></li>
                    <li><a href="http://cn.yetpress.com/marketer/">网络赚钱</a></li>
                    <li><a href="http://cn.yetpress.com/secret_stuff/">绝密资料</a></li>
                    <li><a href="http://cn.yetpress.com/english/">英语学习</a></li>
                    <li class="subline"><a href="http://cn.yetpress.com/life/">生活娱乐</a></li>
                    <li class="subline"><a href="http://cn.yetpress.com/tools/">工具/软件</a></li>
                    <li class="subline"><a href="http://cn.yetpress.com/about/">关于我们</a></li>
                    <li class="subline"><a href="http://cn.yetpress.com/affiliate/">精品推荐</a></li>
                    <li class="subline"><a href="http://cn.yetpress.com/additional/">查看更多</a></li>
                </ul>
            </div>
            
        </div>
        <div class="clear"></div>
        <div class="header header2" >
            <div class="tabs">
                <ul>
                    <li><a href="http://cn.yetpress.com/life/">生活娱乐</a></li>
                    <li><a href="http://cn.yetpress.com/tools/">工具/软件</a></li>
                    <li><a href="http://cn.yetpress.com/about/">关于我们</a></li>
                    <li><a href="http://cn.yetpress.com/affiliate/">精品推荐</a></li>
                    <li><a href="http://cn.yetpress.com/additional/">查看更多</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div class="list_bannerads">
            <ul>
                <li style="width:25%"><a href=""><img src="http://cn.yetpress.com/skin/yetpress_cn/images/demo1.jpg" alt=""></a></li>
                <li style="width:50%"><a href=""><img src="http://cn.yetpress.com/skin/yetpress_cn/images/demo2.jpg" alt=""></a></li>
                <li style="width:25%"><a href=""><img src="http://cn.yetpress.com/skin/yetpress_cn/images/demo3.jpg" alt=""></a></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="content"> 
            <div class="main">
            <!-- BEGIN CONTENT AREA -->
                <div class="list_main">
                    <div class="list_left">
                        <div class="topclass"><a href="http://cn.yetpress.com/e/member/cp/">功能菜单</a></div>
                        <ul class="left_navul">
                            <!-- 登录用户显示菜单 -->
                            <?php
                                $lguserid=intval(getcvar('mluserid'));//登陆用户ID
                                $lgusername=RepPostVar(getcvar('mlusername'));//登陆用户
                                $lggroupid=intval(getcvar('mlgroupid'));//会员组ID
                                if($lggroupid){    //登陆会员显示菜单  
                            ?>
                            <li><a href="http://cn.yetpress.com/e/member/EditInfo/">修改资料</a></li>
                            <li><a href="http://cn.yetpress.com/e/member/my/">帐号状态</a></li>
                            <li><a href="http://cn.yetpress.com/e/member/msg/">站内信息</a></li>
                            <li><a href="http://cn.yetpress.com/e/member/mspace/SetSpace.php">空间设置</a></li>
                            <li><a href="http://cn.yetpress.com/e/DoInfo/">管理信息</a></li>
                            <li><a href="http://cn.yetpress.com/e/member/fava/">收藏夹</a></li>
                            <li><a href="http://cn.yetpress.com/e/payapi/">在线支付</a></li>
                            <li><a href="http://cn.yetpress.com/e/member/friend/">我的好友</a></li>
                            <li><a href="http://cn.yetpress.com/e/member/buybak/">消费记录</a></li>
                            <li><a href="http://cn.yetpress.com/e/member/buygroup/">在线充值</a></li>
                            <li><a href="http://cn.yetpress.com/e/member/card/">点卡充值</a></li>
                            <li><a href="#ecms" onclick="window.open('http://cn.yetpress.com/e/ShopSys/buycar/','','width=680,height=500,scrollbars=yes,resizable=yes');">我的购物车</a></li>
                            <li><a href="http://cn.yetpress.com/e/ShopSys/ListDd/">我的订单</a></li>
                            <li><a href="http://cn.yetpress.com/e/member/login/">重新登陆</a></li>
                            <li><a href="http://cn.yetpress.com/e/member/doaction.php?enews=exit" onclick="return confirm('确认要退出?');">退出登陆</a></li>
                            <!-- 游客显示菜单 -->
                            <?php
                                }else{
                            ?> 
                            <li><a href="http://cn.yetpress.com/e/member/login/">会员登陆</a></li>
                            <li><a href="http://cn.yetpress.com/e/member/register/">注册帐号</a></li>
                            <li><a href="http://cn.yetpress.com/e/DoInfo/">发布投稿</a></li>
                            <li><a href="#ecms" onclick="window.open('http://cn.yetpress.com/e/ShopSys/buycar/','','width=680,height=500,scrollbars=yes,resizable=yes');">我的购物车</a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="list_middle">
                        <div class="intro_title">
                            <div class="crumb crumb_feedback">
                                位置：<?=$url?> 
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        