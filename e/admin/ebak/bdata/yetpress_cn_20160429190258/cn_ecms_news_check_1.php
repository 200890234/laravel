<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_ecms_news_check`;");
E_C("CREATE TABLE `cn_ecms_news_check` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` text NOT NULL,
  `diggtop` int(11) NOT NULL DEFAULT '0',
  `video_file` varchar(255) NOT NULL DEFAULT '',
  `playcode` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=utf8");
E_D("replace into `cn_ecms_news_check` values('75','45','0','0','0','0','2015-04-09','75','2','200890234','0','0','0','0','0','1','0','1428552235','1428552235','0','0','0','','http://cn.yetpress.com/e/action/ShowInfo.php?classid=45&id=75','1','1','1','','123','1428552235','','','','0','','');");
E_D("replace into `cn_ecms_news_check` values('77','45','0','0','0','0','2015-04-09','77','2','200890234','0','0','0','0','0','1','0','1428553976','1428553976','0','0','0','','http://cn.yetpress.com/e/action/ShowInfo.php?classid=45&id=77','1','1','1','','77','1428553976','','','','0','','');");
E_D("replace into `cn_ecms_news_check` values('78','45','0','0','0','0','2015-04-09','78','2','200890234','0','0','0','0','0','1','0','1428554133','1428554133','0','0','0','','http://cn.yetpress.com/e/action/ShowInfo.php?classid=45&id=78','1','1','1','','hjh','1428554133','','','','0','','');");
E_D("replace into `cn_ecms_news_check` values('79','45','0','0','0','0','2015-04-09','79','2','200890234','0','0','0','0','0','1','0','1428554166','1428554166','0','0','0','','http://cn.yetpress.com/e/action/ShowInfo.php?classid=45&id=79','1','1','1','','dfd','1428554166','','','','0','','');");
E_D("replace into `cn_ecms_news_check` values('114','15','0','0','0','0','2015-11-18','114','1','mervyn','0','0','0','0','0','0','0','1447829959','1447829959','1','0','0','','http://cn.yetpress.com/marketer/yetpress/2015-11-18/114.html','1','1','1','','KizCorp项目背景分析','1447829897','','','KizCorp项目背景分析','0','','');");
E_D("replace into `cn_ecms_news_check` values('113','15','0','0','1','0','2015-11-18','113','1','mervyn','9','9','0','0','0','0','0','1447829801','1447917196','1','0','0','','http://cn.yetpress.com/marketer/yetpress/2015-11-18/113.html','1','1','1','','最新挂机+投资：每天领钱，最慢50天回本，一年7~10倍投资回报！','1447828647','','','每天领钱，最慢50天回本，一年7~10倍投资回报！通过本文链接注册的用户购买矿场返利2%-6%；以后矿场每日收益加送1%~2%；用户每日挂机收入加送20%~50%；','0','','');");
E_D("replace into `cn_ecms_news_check` values('65','36','0','0','0','0','2015-03-24','65','1','mervyn','0','0','0','0','0','0','0','1427184962','1448174772','1','0','0','','http://cn.yetpress.com/about/notice/2015-03-24/65.html','1','1','1','','Yetpress会员制度-old','1427184933','','','yetpress会员介绍','0','','');");
E_D("replace into `cn_ecms_news_check` values('118','15','0','0','0','0','2015-11-22','118','1','mervyn','0','0','0','0','0','0','0','1448201602','1448202708','0','0','0','','http://cn.yetpress.com/marketer/yetpress/2015-11-22/118.html','1','1','1','','正规理财，注册送10，40%+月息，每天分红，每天提现...','1448201579','','',' Kiz完了，赶紧拥抱最稳健的正规理财项目；正规理财，注册送10，40%+月息，每天分红，每天提现... 这个项目是目前网络上唯一没有负面新闻的正规理财项目，运营一年多，5元即可提现。不投资','0','','');");
E_D("replace into `cn_ecms_news_check` values('119','15','0','0','0','0','2015-11-23','119','1','mervyn','0','0','0','0','0','0','0','1448246306','1448508528','0','0','0','','http://cn.yetpress.com/marketer/yetpress/2015-11-23/119.html','1','1','1','','钱袋子更多资料存储','1448246110','','','  试试钱袋子吧，有点类似kiz， 每天领钱，两个月左右回本，投资10元起，投资期限最短10天起，首充20元10天变成35提现。还有每日签到奖励0.1元起 ','0','','');");
E_D("replace into `cn_ecms_news_check` values('117','15','0','0','0','0','2015-11-22','117','1','mervyn','0','0','0','0','0','0','0','1448191391','1448191593','1','0','0','','http://cn.yetpress.com/marketer/yetpress/2015-11-22/117.html','1','1','1','','钱袋子项目更多问答','1448191340','','','  1、  请问你们是什么样的平台?是从事什么行业的？  &ldquo;钱袋子&rdquo;投资平台属于陕西晟翔投资有限公司、公司成立于2014年，注册资本金500万元人民币，在职员工70余名。钱','0','','');");
E_D("replace into `cn_ecms_news_check` values('115','15','0','0','0','0','2015-11-22','115','1','mervyn','0','0','0','0','0','0','0','1448172843','1448333081','1','0','0','','http://cn.yetpress.com/marketer/yetpress/2015-11-22/115.html','1','1','1','','投资赚钱的正规项目介绍，每日领取分红，本站加送3%~5%投资额','1448171978','','','注册送10元，月收益超过45%的理财项目推荐，每天可领取分红，满5元即可提现！','0','','');");

@include("../../inc/footer.php");
?>