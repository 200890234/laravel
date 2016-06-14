<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsmembergroup`;");
E_C("CREATE TABLE `cn_enewsmembergroup` (
  `groupid` smallint(6) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(60) NOT NULL DEFAULT '',
  `level` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `favanum` smallint(6) NOT NULL DEFAULT '0',
  `daydown` int(11) NOT NULL DEFAULT '0',
  `msglen` int(11) NOT NULL DEFAULT '0',
  `msgnum` int(11) NOT NULL DEFAULT '0',
  `canreg` tinyint(1) NOT NULL DEFAULT '0',
  `formid` smallint(6) NOT NULL DEFAULT '0',
  `regchecked` tinyint(1) NOT NULL DEFAULT '0',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `dayaddinfo` smallint(6) NOT NULL DEFAULT '0',
  `infochecked` tinyint(1) NOT NULL DEFAULT '0',
  `plchecked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsmembergroup` values('1','普通会员','1','0','120','0','255','50','1','1','0','1','0','0','0');");
E_D("replace into `cn_enewsmembergroup` values('2','VIP会员','2','0','200','0','255','120','0','1','0','1','0','0','0');");
E_D("replace into `cn_enewsmembergroup` values('8','私密会员','9','0','120','0','255','500','0','1','0','0','0','0','0');");
E_D("replace into `cn_enewsmembergroup` values('5','私密会员(超管)','99','0','120','0','255','50','0','1','0','0','0','0','0');");
E_D("replace into `cn_enewsmembergroup` values('6','高级vip会员','3','0','120','0','255','50','0','1','0','0','0','0','0');");
E_D("replace into `cn_enewsmembergroup` values('7','个性化会员','4','0','120','0','255','500','0','1','0','0','0','0','0');");

@include("../../inc/footer.php");
?>