<?php
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/q_functions.php");
require("../data/dbcache/class.php");
$link=db_connect();
$empire=new mysqlquery();
define('WapPage','show');
$usewapstyle='';
$wapstyle=0;
$pr=array();
require("wapfun.php");
$classid=(int)$_GET['classid'];
$id=(int)$_GET['id'];
if(!$classid||!$class_r[$classid]['tbname']||!$id||InfoIsInTable($class_r[$classid]['tbname']))
{
	// DoWapShowMsg('您来自的链接不存在','index.php?style='.$wapstyle);
	DoWapShowMsg('您来自的链接不存在','m.yetpress.com');
}
$cpage=(int)$_GET['cpage'];
$cid=(int)$_GET['cid'];
$bclassid=(int)$_GET['bclassid'];
if(empty($cid))
{
	$cid=$classid;
}
$listurl="list.php?classid=".$cid."&amp;style=".$wapstyle."&amp;bclassid=".$bclassid."&amp;page=".$cpage;
$r=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$classid]['tbname']." where id='$id' limit 1");
if(!$r['id']||$classid!=$r[classid])
{
	DoWapShowMsg('您来自的链接不存在',$listurl);
}
if($r['groupid']||$class_r[$classid]['cgtoinfo'])
{
	DoWapShowMsg('此信息不能查看，可能是您的权限不够',$listurl);
}
//系统模型
$modid=$class_r[$classid][modid];
//副表
$finfor=$empire->fetch1("select ".ReturnSqlFtextF($modid)." from {$dbtbpre}ecms_".$class_r[$classid]['tbname']."_data_".$r[stb]." where id='$r[id]' limit 1");
$r=array_merge($r,$finfor);
$ret_r=ReturnAddF($modid,1);
//更新点击
$empire->query("update {$dbtbpre}ecms_".$class_r[$classid]['tbname']." set onclick=onclick+1 where id='$id' limit 1");
$r['onclick']=$r['onclick']+1;

$classname=$class_r[$classid]['classname'];
$pagetitle=DoWapClearHtml($r['title']);
if(!$pagetitle){
	$pagetitle=$classname;
}
//存文本内容
$savetxtf=$emod_r[$modid]['savetxtf'];
if($savetxtf&&$r[$savetxtf])
{
	$r[$savetxtf]=GetTxtFieldText($r[$savetxtf]);
}
//分页字段
$pagef=$emod_r[$modid]['pagef'];
if($pagef&&$r[$pagef])
{
	//替换掉分页符
	$r[$pagef]=str_replace('[!--empirenews.page--]','',$r[$pagef]);
	$r[$pagef]=str_replace('[/!--empirenews.page--]','',$r[$pagef]);
}
//参数
$ecmsvar_mbr=array();
$ecmsvar_mbr['wapstyle']=$wapstyle;
$ecmsvar_mbr['fbclassid']=$bclassid;
$ecmsvar_mbr['fclassid']=$cid;
$ecmsvar_mbr['fcpage']=$cpage;
$ecmsvar_mbr['urladdcs']=ewap_UrlAddCs();

require('template/'.$usewapstyle.'/show.temp.php');
db_close();
$empire=null;
?>