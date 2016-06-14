<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsmember`;");
E_C("CREATE TABLE `cn_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsmember` values('1','test','1a6f01b49a346d8b66d326201907fa3d','swlX4HG5xzMMkZKtg1yZ','test@test.test','1425091661','1','0','0','0.00','0','0','1','JbHj8K','akGvNmT4wpwA');");
E_D("replace into `cn_enewsmember` values('2','200890234','ceede90348db73c854c1822dc2099f72','BFLuhz6zKPu9JbxSFxs2','tt@tt.tt','1425352578','5','0','0','0.00','0','0','1','U6cjKA','7km8K7EiJQLg');");
E_D("replace into `cn_enewsmember` values('3','mj818116','753082fe6fa14ee130166f0b0e612ddd','Ll8gfgWaEcB8eJ5zpXK9','896590819@qq.com','1448235609','1','0','0','0.00','0','0','1','ICgXXz','2pHZxaBAytQ0');");
E_D("replace into `cn_enewsmember` values('4','admin123','dea720f39121296a1e55c7e7897ebfe6','bJZ2RH1jDeZSCmssgMfd','798651414@qq.com','1448243554','1','0','0','0.00','0','0','1','yqbPtW','ectRrV1elzzZ');");

@include("../../inc/footer.php");
?>