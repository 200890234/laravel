<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewswapstyle`;");
E_C("CREATE TABLE `cn_enewswapstyle` (
  `styleid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `stylename` varchar(60) NOT NULL DEFAULT '',
  `path` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`styleid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewswapstyle` values('1','新闻模板','1');");
E_D("replace into `cn_enewswapstyle` values('2','分类信息模板','2');");
E_D("replace into `cn_enewswapstyle` values('3','手机站点模板','3');");

@include("../../inc/footer.php");
?>