<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsad`;");
E_C("CREATE TABLE `cn_enewsad` (
  `adid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `picurl` varchar(255) NOT NULL DEFAULT '',
  `url` text NOT NULL,
  `pic_width` int(10) unsigned NOT NULL DEFAULT '0',
  `pic_height` int(10) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `adtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `alt` varchar(120) NOT NULL DEFAULT '',
  `starttime` date NOT NULL DEFAULT '0000-00-00',
  `endtime` date NOT NULL DEFAULT '0000-00-00',
  `adsay` varchar(255) NOT NULL DEFAULT '',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titlecolor` varchar(10) NOT NULL DEFAULT '',
  `htmlcode` text NOT NULL,
  `t` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ylink` tinyint(1) NOT NULL DEFAULT '0',
  `reptext` text NOT NULL,
  PRIMARY KEY (`adid`),
  KEY `classid` (`classid`),
  KEY `t` (`t`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsad` values('1','','','0','0','0','1','1','瓷肌医生CPS','','','2015-03-28','2015-04-27','大众广告联盟','','','<script src=\"http://ads.dzgg.com/page/s.php?s=7844&w=245&h=100\"></script>','2','0','');");
E_D("replace into `cn_enewsad` values('2','','','468','60','0','1','1','成果网-爱之谷-内衣广告','','','2015-04-09','2015-05-09','','','','<a href=\"http://count.chanet.com.cn/click.cgi?a=526564&d=52711&u=m200890234&e=392074\" target=\"_blank\"><IMG SRC=\"http://file.chanet.com.cn/image.cgi?a=526564&d=52711&u=m200890234&e=392074\" width=\"760\" height=\"100\" border=\"0\"></a>','2','0','');");
E_D("replace into `cn_enewsad` values('3','','','468','60','0','1','1','血钻野燕麦','','','2015-04-09','2015-05-09','','','','<a href=\"http://www.worldchips.cn/xz?a00271_yetpress\" target=\"_blank\"><img src=\"/d/file/p/2015-04-09/88f2131b786eecb057d7f3a29434d77b.png\"></a>','2','0','');");
E_D("replace into `cn_enewsad` values('4','','','468','60','0','1','1','蜀宝减肥胶囊','','','2015-04-09','2015-05-09','汇智','','','<a href=\"http://www.meidanpai.com/shubao?a73727_yetpress\" target=\"_blank\"><img src=\"/d/file/p/2015-04-09/597cd199e25baff0accf71cda69c0ab9.jpg\"></a>','2','0','');");

@include("../../inc/footer.php");
?>