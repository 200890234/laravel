<?php
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/q_functions.php");
require("../data/dbcache/class.php");
$link=db_connect();
$empire=new mysqlquery();
define('WapPage','list');
$usewapstyle='';
$wapstyle=0;
$pr=array();
require("wapfun.php");

$pagetitle="搜索结果";

//关键字搜索
$keyword=$_GET['keyword'];
if($keyword){
	$key=" and title like '%$keyword%'";
}

if($key){$add.=$key;}
$modid=1;
//优化
$yhadd='';

$search.="&style=$wapstyle";
if($key){$search.=$key;}

$page=intval($_GET['page']);
if(!$page){
	$page=1;
}
$page=RepPIntvar($page);
$line=$pr['waplistnum'];//每页显示记录数
// $offset=$page*$line;
$offset=($page-1)*$line;
$query="select ".ReturnSqlListF($modid)." from {$dbtbpre}ecms_news where classid in(23,40,47,48,49,50,51,52) ".$yhadd.$add;
$totalnum=intval($_GET['totalnum']);
// echo $query;exit;
if($totalnum<1)
{
	$totalquery="select count(*) as total from {$dbtbpre}ecms_news where classid in(23,40,47,48,49,50,51,52) ".$yhadd.$add;
	$num=$empire->gettotal($totalquery);//取得总条数
}
else
{
	$num=$totalnum;
}
$search.="&totalnum=$num";
//排序
$addorder="newstime desc";

$query.=" order by ".ReturnSetTopSql('list').$addorder." limit $offset,$line";
// echo $query;
$sql=$empire->query($query);
// $returnpage=DoWapListPage($num,$line,$page,$search);
$returnpage=yet_wap_pager($num,$line,$page,$search);
//系统模型
$ret_r=ReturnAddF(1,2);
//参数
$ecmsvar_mbr=array();
$ecmsvar_mbr['wapstyle']=$wapstyle;
// $ecmsvar_mbr['fbclassid']=$bclassid;
// $ecmsvar_mbr['fclassid']=$classid;
$ecmsvar_mbr['fcpage']=$page;
$ecmsvar_mbr['urladdcs']=ewap_UrlAddCs();


$listurl="search.php?style=$wapstyle";//初始列表页地址 用于组装搜索提交地址
require('template/'.$usewapstyle.'/listsearch.temp.php');
db_close();
$empire=null;
?>