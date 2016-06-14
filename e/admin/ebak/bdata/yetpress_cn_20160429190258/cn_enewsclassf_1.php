<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsclassf`;");
E_C("CREATE TABLE `cn_enewsclassf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsclassf` values('1','categories','栏目分类关键字','text','\r\n<input name=\\\\\"categories\\\\\" type=\\\\\"text\\\\\" id=\\\\\"categories\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(\$addr[categories])?>\\\\\" size=\\\\\"60\\\\\">\r\n','','0','VARCHAR','255','','60');");
E_D("replace into `cn_enewsclassf` values('2','column_content','终极栏目页面内容','editor','<?=ECMS_ShowEditorVar(\\\\\"column_content\\\\\",\$ecmsfirstpost==1?\\\\\"\\\\\":\$addr[column_content],\\\\\"Default\\\\\",\\\\\"\\\\\",\\\\\"300\\\\\",\\\\\"90%\\\\\")?>\r\n','终极栏目页面内容, 类似于非中级栏目的页面内容式','0','TEXT','','','');");

@include("../../inc/footer.php");
?>