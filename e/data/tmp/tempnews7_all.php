<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?> - Powered by EmpireCMS</title>
<meta name="Keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="http://cn.yetpress.com/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://cn.yetpress.com/skin/default/js/tabs.js"></script>
</head>
<body class="showpage">
<!DOCTYPE html>
<html lang="en">
<head>
    <title>yetpress - <?=$grpagetitle?> - 网站建设 资源分享 网络赚钱 英语学习 创意恶搞 绝密资料</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content=" 网站建设 资源分享 网络赚钱 英语学习 创意恶搞 绝密资料"/>
<meta name="description" content=" 网站建设 资源分享 网络赚钱 英语学习 创意恶搞 绝密资料" />
    <link rel="stylesheet" href="http://cn.yetpress.com/skin/yetpress_cn/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="http://cn.yetpress.com/favicon.ico" type="image/x-icon" />
    <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
      <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="http://cn.yetpress.com/skin/yetpress_cn/css/style.css?v=102014" />

    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jcarousellite.js" type="text/javascript"></script>   
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.qtip.min.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/plx_global.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/headroom.min.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.pin.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.grid-a-licious.min.js"></script> 
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.actual.js" type="text/javascript"></script> <!-- 获取隐藏元素真是宽高 -->
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/MSClass.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/yet_cn.js" type="text/javascript"></script>
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
                <a href="http://cn.yetpress.com/"><img src="http://cn.yetpress.com/skin/yetpress_cn/images/logo_cn.png" alt="" /></a>
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
<table width="100%" border="0" cellspacing="10" cellpadding="0">
	<tr valign="top">
		<td class="main"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
				<tr>
					<td>您当前的位置：<?=$grurl?></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
						<tr>
							<td colspan="2" bgcolor="#F4F9FD">&nbsp;&nbsp;<strong>商品基本信息</strong></td>
						</tr>
						<tr>
							<td width="30%" align="center" class="titlepic"><a href="<?=$ecms_gr[productpic]?>" title="预览大图" target="_blank"><img height="128" src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" width="128" border="0" /></a></td>
							<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
								<tr>
									<td style="font-size: 14px;"><strong>商品名称：<?=$ecms_gr[title]?></strong></td>
								</tr>
								<tr>
									<td>市场价：<span class="tprice">￥<?=$ecms_gr[tprice]?></span>&nbsp;优惠价：<span class="price">￥<?=$ecms_gr[price]?></span>&nbsp; 
										点数: <?=$ecms_gr[buyfen]?></td>
								</tr>
								<tr>
									<td>商品编号:<?=$ecms_gr[productno]?></td>
								</tr>
								<tr>
									<td>商品品牌:<?=$ecms_gr[pbrand]?></td>
								</tr>
								<tr>
									<td>计量单位:<?=$ecms_gr[unit]?></td>
								</tr>
								<tr>
									<td>商品重量:<?=$ecms_gr[weight]?></td>
								</tr>
								<tr>
									<td>[<a href="#ecms" onclick="window.open('http://cn.yetpress.com/e/ShopSys/doaction.php?enews=AddBuycar&amp;classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>','','width=680,height=500,scrollbars=yes,resizable=yes');">加入购物车</a>]&nbsp;&nbsp;&nbsp;&nbsp;[<a href="http://cn.yetpress.com/e/member/fava/add/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>" target="_blank">放入收藏夹</a>]&nbsp;&nbsp;&nbsp;&nbsp;[<a href="http://cn.yetpress.com/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>" target="_blank">查看评论</a>]</td>
								</tr>
							</table></td>
						</tr>
						<tr>
							<td colspan="2" bgcolor="#F4F9FD">&nbsp;&nbsp;<strong>商品介绍</strong></td>
						</tr>
						<tr>
							<td colspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="8">
									<tr>
										<td id="text"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?></td>
									</tr>
							</table></td>
						</tr>
					</table></td>
				</tr>
			</table>
			<div class="clear"></div>
<script>
function CheckPl(obj){
    if(obj.saytext.value==""){
        alert("您没什么话要说吗？");
        obj.saytext.focus();
        return false;
    }
    return true;
}
</script>
<div class="article_comment">
    <form action="http://cn.yetpress.com/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
        <div class="comment_title"><span>发表评论</span>
            <a href=javascript:void(0) class="comment_count" target="_blank">​共有<span>​<script type="text/javascript" src="http://cn.yetpress.com/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>​条评论</a>​
        </div>
        <script>
        $(function(){
            var url="http://cn.yetpress.com/e/pl/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>";
            $('.comment_count').click(function(){
                //评论数链接不正常 改用window.open控制
                window.open(url);
            })
        })
        </script>
        <div class="comment_area">
            <div class="comment_text">
                <textarea name="saytext" id="saytext" class="form-control"></textarea>
            </div>
            <div class="comment_userinfo">
                <ul>
                    <li>
                        <input type="text" class="comment_box form-control" name="username" id="username" placeholder="用户名">
                    </li>
                    <li>
                        <input type="password" class="comment_box form-control" name="password" id="password" placeholder="密码">
                    </li>
                    <li>
                        <input type="key" class="comment_box form-control" name="key" id="key" placeholder="验证码">
                        <img src="http://cn.yetpress.com/e/ShowKey/?v=pl" align="absmiddle">
                    </li>
                    <li>
                        <input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
                        <input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
                        <input name="enews" type="hidden" id="enews" value="AddPl" />
                        <input name="repid" type="hidden" id="repid" value="0" />
                        <input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>"><!-- 提交后返回地址 9为提交页面地址 -->
                        <input type="submit" class="comment_submit" value="提交">
                        <input name="nomember" type="checkbox" id="nomember" value="1" checked="checked">匿名发表
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="clear"></div></td>
		<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
				<tr>
					<td><strong>商品推荐</strong></td>
				</tr>
			</table>
				<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
					<tr>
						<td><? @sys_GetClassNewsPic('selfinfo',2,4,128,90,1,20,2);?> </td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
					<tr>
						<td><strong>最后更新</strong></td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
					<tr>
						<td><ul>
              <script src='http://cn.yetpress.com/d/js/class/class<?=$ecms_gr[classid]?>_newnews.js'></script></ul></td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
					<tr>
						<td><strong>热门点击</strong></td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
					<tr>
						<td><ul>
              <script src='http://cn.yetpress.com/d/js/class/class<?=$ecms_gr[classid]?>_hotnews.js'></script></ul></td>
					</tr>
			</table></td>
	</tr>
</table>
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
    <form method="post" name="form_login" action="http://cn.yetpress.com/e/member/doaction.php">
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
    <form method="post" name="form_reg" action="http://cn.yetpress.com/e/member/doaction.php">
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
<script src="http://cn.yetpress.com/skin/yetpress_cn/js/totop.js"></script> <!-- 返回顶部 -->
<script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.blockUI.js"></script>
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
</html> <?='<script src="'.$public_r[newsurl].'e/public/onclick/?enews=donews&classid='.$ecms_gr[classid].'&id='.$ecms_gr[id].'"></script>'?>
</body>
</html>