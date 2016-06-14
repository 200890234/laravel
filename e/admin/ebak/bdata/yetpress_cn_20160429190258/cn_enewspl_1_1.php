<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewspl_1`;");
E_C("CREATE TABLE `cn_enewspl_1` (
  `plid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `sayip` varchar(20) NOT NULL DEFAULT '',
  `saytime` int(10) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `zcnum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fdnum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `saytext` text NOT NULL,
  `eipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`plid`),
  KEY `id` (`id`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`,`checked`,`plid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewspl_1` values('1','1000010000000001','','60.177.244.89','1425013504','1','0','10','2','2','0','0','php comment','');");
E_D("replace into `cn_enewspl_1` values('2','1000010000000001','yyy','60.177.244.89','1425014911','1','0','10','3','2','0','0','aaa','');");
E_D("replace into `cn_enewspl_1` values('3','1000010000000001','test','199.83.88.183','1439520445','1','0','10','2','3','0','0','原始分页函数的代码在/e/class/t_functions.php里面','64460');");
E_D("replace into `cn_enewspl_1` values('4','1000010000000113','test','122.224.113.178','1447918862','113','0','15','0','0','0','0','测试','0');");

@include("../../inc/footer.php");
?>