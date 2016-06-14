<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsfile_public`;");
E_C("CREATE TABLE `cn_enewsfile_public` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsfile_public` values('1','0','88f2131b786eecb057d7f3a29434d77b.png','261625','2015-04-09','mervyn','1428570921','0','ads_pic1','1','0','0','0','0','0');");
E_D("replace into `cn_enewsfile_public` values('2','0','1ab9c9802d745b783cc2fb7f22152b1f.jpg','48868','2015-04-09','mervyn','1428572307','0','ads_pic2','1','0','0','0','0','0');");
E_D("replace into `cn_enewsfile_public` values('3','0','597cd199e25baff0accf71cda69c0ab9.jpg','51836','2015-04-09','mervyn','1428572758','0','ads_pic4','1','0','0','0','0','0');");

@include("../../inc/footer.php");
?>