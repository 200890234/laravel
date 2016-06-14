<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsfeedback`;");
E_C("CREATE TABLE `cn_enewsfeedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `tel` varchar(30) NOT NULL DEFAULT '',
  `website` varchar(160) NOT NULL DEFAULT '',
  `info_id` int(11) NOT NULL DEFAULT '0',
  `saytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `filepath` varchar(20) NOT NULL DEFAULT '',
  `filename` text NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `haveread` tinyint(1) NOT NULL DEFAULT '0',
  `info_url` varchar(255) NOT NULL DEFAULT '',
  `eipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `bid` (`bid`),
  KEY `haveread` (`haveread`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsfeedback` values('1','2','','200890234say','','200890234@163.com','','','5','2015-02-28 15:14:50','60.177.244.89','','','1','test','0','','');");
E_D("replace into `cn_enewsfeedback` values('2','2','tttt','ttt','','ttt@tt.tt','','','5','2015-02-28 15:23:07','60.177.244.89','','','1','test','1','','');");
E_D("replace into `cn_enewsfeedback` values('3','2','','sdfasdafsd','','sdfa@sdfa.df','','','6','2015-02-28 15:29:14','60.177.244.89','','','1','test','1','','');");
E_D("replace into `cn_enewsfeedback` values('4','2','file 404 ','link failed','mervyn','200890234@163.com','','','45','2015-03-19 18:13:49','74.117.57.213','','','0','','1','/life/ideas/2015-03-11/45.html','');");
E_D("replace into `cn_enewsfeedback` values('5','4','','dfgs ','fdg ','','','','0','2015-07-28 13:14:03','122.224.113.178','','','0','','0','','');");
E_D("replace into `cn_enewsfeedback` values('6','4','','fdg ','fdgd','','','','0','2015-07-28 13:54:25','122.224.113.178','','','0','','1','','');");
E_D("replace into `cn_enewsfeedback` values('7','4','','ghjfgh','hgjhg','','','','0','2015-07-28 15:07:37','122.224.113.178','','','0','','1','','');");
E_D("replace into `cn_enewsfeedback` values('8','4','','my content','mervyn','200890234@163.com','15158104951','','0','2015-07-28 17:04:41','122.224.113.178','','','0','','1','','');");
E_D("replace into `cn_enewsfeedback` values('9','4','','ee','mervyn','200890234@163.om','15158104951','','0','2015-08-21 17:56:26','122.224.113.178','','','0','','1','','19196');");
E_D("replace into `cn_enewsfeedback` values('10','4','','测试','mervyn','200890234@163.om','15158104951','','0','2015-08-21 18:01:59','122.224.113.178','','','0','','1','','18512');");
E_D("replace into `cn_enewsfeedback` values('11','4','无','测','mervyn','200890234@163.om','15158104951','','0','2015-08-21 18:03:27','122.224.113.178','','','0','','1','','18687');");
E_D("replace into `cn_enewsfeedback` values('12','4','test title','dffd','mervyn','200890234@163.om','15158104951','','0','2015-08-21 18:10:39','122.224.113.178','','','0','','1','','13355');");

@include("../../inc/footer.php");
?>