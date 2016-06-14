<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewssearch`;");
E_C("CREATE TABLE `cn_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewssearch` values('1','ms','1425112058','title','4','60.177.244.89','10','1','newstime','0','e6877e9cf02b8121d995b709d7acc0e6','news','0','0',' and classid=''10'' and ((title LIKE ''%ms%''))','10');");
E_D("replace into `cn_enewssearch` values('2','ms','1425112144','title','4','60.177.244.89','1','1','newstime','0','4f7339012351949abbc3c858b07c6cf9','news','0','0',' and classid in (10,11,12,13,14) and ((title LIKE ''%ms%''))','1');");
E_D("replace into `cn_enewssearch` values('3','cms','1425115525','title','4','60.177.244.89','10','1','newstime','0','553569936abad690f65bda0ce2b438ad','news','0','0',' and classid=''10'' and ((title LIKE ''%cms%''))','10');");

@include("../../inc/footer.php");
?>