<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsnewstempclass`;");
E_C("CREATE TABLE `cn_enewsnewstempclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsnewstempclass` values('1','wap站内容模板');");

@include("../../inc/footer.php");
?>