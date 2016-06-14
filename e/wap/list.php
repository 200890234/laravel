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

//关键字搜索
$keyword=$_GET['keyword'];
if($keyword){
	$key=" and title like '%$keyword%'";
}


//栏目ID
$classid=(int)$_GET['classid'];
$wapclass=array("23","40","47","48","49","50","51","52");//无关栏目不在手机端显示 防止改变通过url参数访问到
if(!in_array($classid,$wapclass)){
	echo '<script>alert("非法访问");histroy.go(-1);</script>';
	exit;
}
if(!$classid||!$class_r[$classid]['tbname']||InfoIsInTable($class_r[$classid]['tbname']))
{
	DoWapShowMsg('您来自的链接不存在','index.php?style='.$wapstyle);
}
$pagetitle=$class_r[$classid]['classname'];

$bclassid=(int)$_GET['bclassid'];
$search='';
$add='';
if($class_r[$classid]['islast'])
{
	$add.="classid='$classid'";
}
else
{
	$where=ReturnClass($class_r[$classid][sonclass]);
	$add.="(".$where.")";
}
if($key){$add.=$key;}
$modid=$class_r[$classid][modid];
//优化
$yhid=$class_r[$classid][yhid];
$yhvar='qlist';
$yhadd='';
if($yhid)
{
	$yhadd=ReturnYhSql($yhid,$yhvar,1);
}
$search.="&classid=$classid&style=$wapstyle&bclassid=$bclassid";
if($key){$search.=$key;}

$page=intval($_GET['page']);
if(!$page){
	$page=1;
}
$page=RepPIntvar($page);
$line=$pr['waplistnum'];//每页显示记录数
// $offset=$page*$line;
$offset=($page-1)*$line;
$query="select ".ReturnSqlListF($modid)." from {$dbtbpre}ecms_".$class_r[$classid]['tbname']." where ".$yhadd.$add;
$totalnum=intval($_GET['totalnum']);
if($totalnum<1)
{
	$totalquery="select count(*) as total from {$dbtbpre}ecms_".$class_r[$classid]['tbname']." where ".$yhadd.$add;
	$num=$empire->gettotal($totalquery);//取得总条数
}
else
{
	$num=$totalnum;
}
$search.="&totalnum=$num";
//排序
if(empty($class_r[$classid][reorder]))
{
	$addorder="newstime desc";
}
else
{
	$addorder=$class_r[$classid][reorder];
}
$query.=" order by ".ReturnSetTopSql('list').$addorder." limit $offset,$line";
// echo $query;
$sql=$empire->query($query);
// $returnpage=DoWapListPage($num,$line,$page,$search);
$returnpage=yet_wap_pager($num,$line,$page,$search);
//系统模型
$ret_r=ReturnAddF($modid,2);
//参数
$ecmsvar_mbr=array();
$ecmsvar_mbr['wapstyle']=$wapstyle;
$ecmsvar_mbr['fbclassid']=$bclassid;
$ecmsvar_mbr['fclassid']=$classid;
$ecmsvar_mbr['fcpage']=$page;
$ecmsvar_mbr['urladdcs']=ewap_UrlAddCs();


$listskin=array(//顶级栏目ID=>对应的列表模板   目前绝密资料独立建立栏目 这里列表模板暂时用不到了
		"3"=>"listsecret.temp.php",//绝密资料
		"5"=>"listvideo.temp.php",//创意恶搞 大型福利
	);
$bigclass=$bclassid;
if($bigclass==0){
	$bigclass=$classid;
}
$listurl="list.php?classid=$classid&style=$wapstyle&bclassid=$bclassid";//初始列表页地址
// require('template/'.$usewapstyle.'/list.temp.php');
$fskin=$listskin[$bigclass];
if(!$fskin){
	$fskin="listvideo.temp.php";
}
require('template/'.$usewapstyle.'/'.$fskin);
// require('template/'.$usewapstyle.'/'.$listskin[5]);
db_close();
$empire=null;
?>