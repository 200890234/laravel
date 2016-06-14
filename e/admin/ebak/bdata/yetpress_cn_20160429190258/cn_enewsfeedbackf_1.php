<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsfeedbackf`;");
E_C("CREATE TABLE `cn_enewsfeedbackf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsfeedbackf` values('1','title','标题','text','','7','VARCHAR','120','','');");
E_D("replace into `cn_enewsfeedbackf` values('2','saytext','内容','textarea','','8','TEXT','','','');");
E_D("replace into `cn_enewsfeedbackf` values('3','name','姓名/昵称','text','','0','VARCHAR','30','','');");
E_D("replace into `cn_enewsfeedbackf` values('4','email','邮箱','text','','3','VARCHAR','80','','');");
E_D("replace into `cn_enewsfeedbackf` values('5','tel','联系电话','text','','4','VARCHAR','30','','');");
E_D("replace into `cn_enewsfeedbackf` values('6','website','网站','text','','5','VARCHAR','160','','');");
E_D("replace into `cn_enewsfeedbackf` values('8','info_id','信息id','text','','6','INT','11','11','0');");
E_D("replace into `cn_enewsfeedbackf` values('10','info_url','信息地址','text','','6','VARCHAR','255','','');");

@include("../../inc/footer.php");
?>