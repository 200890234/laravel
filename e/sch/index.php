<?php
require("../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../class/db_sql.php");
require("../data/dbcache/class.php");
require LoadLang("pub/fun.php");
require("../class/schallfun.php");
$link=db_connect();
$empire=new mysqlquery();
eCheckCloseMods('sch');//关闭模块
$searchtime=time();
$totalnum=(int)$_GET['totalnum'];
$firstsearch=0;
if($totalnum<1)
{
	$firstsearch=1;
	//搜索间隔
	$lastsearchtime=(int)getcvar('lastschalltime');
	if($lastsearchtime)
	{
		if($searchtime-$lastsearchtime<$public_r[schalltime])
		{
			printerror('SchallOutTime','',1);
		}
	}
	//设置最后搜索时间
	esetcookie('lastschalltime',$searchtime,$searchtime+3600*24);
}
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$page_line=$public_r['schallpagenum'];//每页显示链接数
$line=$public_r['schallnum'];//每页显示记录数
$offset=$start+$page*$line;//总偏移量
//编码
$iconv='';
$char='';
$targetchar='';
if($ecms_config['sets']['pagechar']!='gb2312')
{
	include_once(ECMS_PATH.'e/class/doiconv.php');
	$iconv=new Chinese('');
	$char=$ecms_config['sets']['pagechar']=='big5'?'BIG5':'UTF8';
	$targetchar='GB2312';
}
$schallr=ReturnSearchAllSql($_GET);
require("../data/dbcache/SearchAllTb.php");
$keyboard=$schallr['keyboard'];
$query="select id,classid from {$dbtbpre}enewssearchall where ".$schallr['where'];
if($totalnum<1)
{
	$totalquery="select count(*) as total from {$dbtbpre}enewssearchall where ".$schallr['where'];
	$num=$empire->gettotal($totalquery);
	if(empty($num))
	{
		printerror('SchallNotRecord','',1);
	}
}
else
{
	$num=$totalnum;
}
$search=$schallr['search']."&totalnum=".$num;
$query.=" order by infotime desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['SearchAllNav'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜索 - Powered by EmpireCMS</title>
<link href="http://cn.yetpress.com/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://cn.yetpress.com/skin/default/js/tabs.js"></script>
<style type="text/css">
<!--
.r {
display:inline;
font-weight:normal;
margin:0;
font-size:16px;
margin-top:10px;
}
.a{color:green}
.fl{color:#77c}
-->
</style>
</head>
<body class="listpage">
<!DOCTYPE html>
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
<table width="100%" border="0" cellspacing="10" cellpadding="0">
	<tr valign="top">
		<td class="list_content"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
				<tr>
					<td>现在的位置：<a href="http://cn.yetpress.com/">首页</a>&nbsp;>&nbsp;搜索</td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><form action='index.php' method="GET" name="search_news" id="search_news">
							<table width="100%" border="0" cellspacing="6" cellpadding="0">
								<tr>
									<td height="32">关键字：
										<input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>" size="42" />
                    <select name="field" id="field">
                      <option value="1">全文</option>
                      <option value="2">标题</option>
                      <option value="3">内容</option>
                    </select> 
                    <input type="submit" name="Submit22" value="搜索" />
                    <font color="#666666">(多个关键字请用&quot;空格&quot;隔开)</font> </td>
								</tr>
							</table>
						</form>
						<table width="100%" border="0" cellpadding="0" cellspacing="6">
							<tr>
								<td>系统搜索到约有<strong><?=$num?></strong>项符合<strong><?=$keyboard?></strong>的查询结果</td>
							</tr>
						</table>
						
<?php
$no=$offset;
$subnum=120;
$formatdate="Y-m-d H:i:s";
while($r=$empire->fetch($sql))
{
	$tbname=$class_r[$r[classid]]['tbname'];
	if(empty($tbname))
	{
		continue;
	}
	$titlefield=$schalltb_r[$tbname]['titlefield'];
	$smalltextfield=$schalltb_r[$tbname]['smalltextfield'];
	$infor=$empire->fetch1("select id,classid,titlepic,newstime,isurl,titleurl,".$titlefield.",".$smalltextfield." from {$dbtbpre}ecms_".$tbname." where id='$r[id]' limit 1");
	if(empty($infor['id']))
	{
		continue;
	}
	$no++;
	$titleurl=sys_ReturnBqTitleLink($infor);
	$titlepic=$infor['titlepic']?$infor['titlepic']:$public_r['newsurl']."e/data/images/notimg.gif";
	$smalltext=SubSchallSmalltext($infor[$smalltextfield],$subnum);
	$title=DoReplaceFontRed($infor[$titlefield],$keyboard);
	$smalltext=DoReplaceFontRed($smalltext,$keyboard);
	$newstime=date($formatdate,$infor['newstime']);
?>

						<h2 class="r"><span><?=$no?>.</span> <a class="l" href="<?=$titleurl?>" target="_blank"><?=$title?></a></h2>
						<table width="80%" border="0" cellpadding="0" cellspacing="0">
							<tbody>
							<tr>
								<td><?=$smalltext?></td>
							</tr>
							<tr>
								<td><span class="a"><?=$titleurl?> - <?=$newstime?></span></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							</tbody>
						</table>
						
<?php
}
db_close();
$empire=null;
?>

						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list_page">
							<tr>
								<td><?=$listpage?></td>
							</tr>
						</table></td>
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
</html>
</body>
</html>