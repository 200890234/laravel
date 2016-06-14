<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_ecms_news_index`;");
E_C("CREATE TABLE `cn_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=134 DEFAULT CHARSET=utf8");
E_D("replace into `cn_ecms_news_index` values('1','10','1','1425013189','1425013207','1439521455','1');");
E_D("replace into `cn_ecms_news_index` values('2','10','1','1425015334','1425015356','1425613476','1');");
E_D("replace into `cn_ecms_news_index` values('3','12','1','1425025848','1425026203','1427102691','1');");
E_D("replace into `cn_ecms_news_index` values('5','10','1','1425106580','1425106665','1438046495','1');");
E_D("replace into `cn_ecms_news_index` values('6','34','1','1425106667','1425108352','1456820746','1');");
E_D("replace into `cn_ecms_news_index` values('7','11','1','1425269989','1425270845','1425270845','1');");
E_D("replace into `cn_ecms_news_index` values('8','33','1','1425362279','1425364036','1425370637','1');");
E_D("replace into `cn_ecms_news_index` values('9','33','1','1425367697','1425368303','1425370619','1');");
E_D("replace into `cn_ecms_news_index` values('10','33','1','1425368548','1425369158','1425370581','1');");
E_D("replace into `cn_ecms_news_index` values('11','33','1','1425369255','1425369728','1425370570','1');");
E_D("replace into `cn_ecms_news_index` values('12','33','1','1425370049','1425370201','1425370556','1');");
E_D("replace into `cn_ecms_news_index` values('13','33','1','1425370317','1425370495','1425370545','1');");
E_D("replace into `cn_ecms_news_index` values('14','11','1','1425456120','1425456322','1425456322','1');");
E_D("replace into `cn_ecms_news_index` values('15','11','1','1425456323','1425456566','1425457140','1');");
E_D("replace into `cn_ecms_news_index` values('16','11','1','1425462851','1425462909','1425463720','1');");
E_D("replace into `cn_ecms_news_index` values('17','10','1','1425521403','1425521561','1426490228','1');");
E_D("replace into `cn_ecms_news_index` values('18','10','1','1425523867','1425523927','1425730883','1');");
E_D("replace into `cn_ecms_news_index` values('19','10','1','1425523930','1425525701','1426489547','1');");
E_D("replace into `cn_ecms_news_index` values('20','19','1','1425529287','1425529335','1426495560','1');");
E_D("replace into `cn_ecms_news_index` values('21','19','1','1425529337','1425529396','1426495548','1');");
E_D("replace into `cn_ecms_news_index` values('22','19','1','1425529398','1425529542','1426495544','1');");
E_D("replace into `cn_ecms_news_index` values('23','19','1','1425529545','1425529668','1426495542','1');");
E_D("replace into `cn_ecms_news_index` values('24','19','1','1425529671','1425529814','1426495538','1');");
E_D("replace into `cn_ecms_news_index` values('25','19','1','1425529817','1425529859','1426495533','1');");
E_D("replace into `cn_ecms_news_index` values('26','19','1','1425529862','1425530055','1426495531','1');");
E_D("replace into `cn_ecms_news_index` values('27','19','1','1425530056','1425530103','1426495453','1');");
E_D("replace into `cn_ecms_news_index` values('28','19','1','1425530106','1425530139','1426495347','1');");
E_D("replace into `cn_ecms_news_index` values('29','21','1','1425536252','1425536293','1450447317','1');");
E_D("replace into `cn_ecms_news_index` values('30','20','1','1425537016','1425537060','1425537060','1');");
E_D("replace into `cn_ecms_news_index` values('31','33','1','1425543550','1425543755','1425543984','1');");
E_D("replace into `cn_ecms_news_index` values('32','10','1','1425544100','1425544181','1426490250','1');");
E_D("replace into `cn_ecms_news_index` values('33','20','1','1425565402','1425566502','1425618449','1');");
E_D("replace into `cn_ecms_news_index` values('34','20','1','1425565430','1425618476','1425618738','1');");
E_D("replace into `cn_ecms_news_index` values('35','20','1','1425618515','1425618538','1425618538','1');");
E_D("replace into `cn_ecms_news_index` values('36','20','1','1425618540','1425618578','1425618578','1');");
E_D("replace into `cn_ecms_news_index` values('37','20','1','1425618580','1425618614','1425620742','1');");
E_D("replace into `cn_ecms_news_index` values('38','20','1','1425618617','1425618638','1425618638','1');");
E_D("replace into `cn_ecms_news_index` values('39','20','1','1425618641','1425618661','1425618661','1');");
E_D("replace into `cn_ecms_news_index` values('40','20','1','1425618664','1425618681','1425618681','1');");
E_D("replace into `cn_ecms_news_index` values('41','33','1','1425624950','1425625108','1425626724','1');");
E_D("replace into `cn_ecms_news_index` values('42','10','1','1425625139','1425626577','1425627569','1');");
E_D("replace into `cn_ecms_news_index` values('43','15','1','1425870540','1425872599','1447828486','1');");
E_D("replace into `cn_ecms_news_index` values('44','14','1','1425998363','1425998425','1425998497','1');");
E_D("replace into `cn_ecms_news_index` values('45','23','1','1426046153','1426046384','1435126996','1');");
E_D("replace into `cn_ecms_news_index` values('46','34','1','1426053817','1426053886','1426056887','1');");
E_D("replace into `cn_ecms_news_index` values('47','12','1','1426486714','1426487138','1426487324','1');");
E_D("replace into `cn_ecms_news_index` values('48','11','1','1426488172','1426488286','1426488286','1');");
E_D("replace into `cn_ecms_news_index` values('49','10','1','1426490070','1426490177','1426490177','1');");
E_D("replace into `cn_ecms_news_index` values('50','18','1','1426497883','1426498754','1426564899','1');");
E_D("replace into `cn_ecms_news_index` values('51','18','1','1426560829','1426561572','1426562354','1');");
E_D("replace into `cn_ecms_news_index` values('52','18','1','1426562306','1426563297','1426563297','1');");
E_D("replace into `cn_ecms_news_index` values('53','18','1','1426565001','1426565604','1426565961','1');");
E_D("replace into `cn_ecms_news_index` values('54','18','1','1426566478','1426566937','1426566937','1');");
E_D("replace into `cn_ecms_news_index` values('55','18','1','1426568552','1426569271','1426569358','1');");
E_D("replace into `cn_ecms_news_index` values('56','18','1','1426569572','1426569823','1426569823','1');");
E_D("replace into `cn_ecms_news_index` values('57','18','1','1426569974','1426570178','1426571540','1');");
E_D("replace into `cn_ecms_news_index` values('58','18','1','1426571817','1426572539','1426572539','1');");
E_D("replace into `cn_ecms_news_index` values('59','18','1','1426574126','1426574315','1426574838','1');");
E_D("replace into `cn_ecms_news_index` values('60','19','1','1426584130','1426585082','1426585082','1');");
E_D("replace into `cn_ecms_news_index` values('61','35','1','1426824770','1426825242','1427104733','1');");
E_D("replace into `cn_ecms_news_index` values('62','35','1','1427104772','1427104818','1427277657','1');");
E_D("replace into `cn_ecms_news_index` values('63','18','1','1427165425','1427165552','1427185051','1');");
E_D("replace into `cn_ecms_news_index` values('64','18','1','1427179765','1427180410','1427180708','1');");
E_D("replace into `cn_ecms_news_index` values('65','36','0','1427184933','1427184962','1448174772','1');");
E_D("replace into `cn_ecms_news_index` values('66','40','1','1427207246','1427207549','1428677773','1');");
E_D("replace into `cn_ecms_news_index` values('67','10','1','1427251973','1427253791','1456821060','1');");
E_D("replace into `cn_ecms_news_index` values('68','21','1','1427464938','1427467034','1435115825','1');");
E_D("replace into `cn_ecms_news_index` values('70','34','1','1427550685','1427551365','1427684043','1');");
E_D("replace into `cn_ecms_news_index` values('71','34','1','1427561764','1427562356','1427868965','1');");
E_D("replace into `cn_ecms_news_index` values('72','34','1','1427566739','1427566755','1427566755','1');");
E_D("replace into `cn_ecms_news_index` values('73','11','1','1427952580','1427952958','1427952958','1');");
E_D("replace into `cn_ecms_news_index` values('74','45','1','1428550350','1428550350','1428550350','1');");
E_D("replace into `cn_ecms_news_index` values('75','45','0','1428552235','1428552235','1428552235','0');");
E_D("replace into `cn_ecms_news_index` values('76','36','1','1428553392','1428553765','1428553824','1');");
E_D("replace into `cn_ecms_news_index` values('77','45','0','1428553976','1428553976','1428553976','0');");
E_D("replace into `cn_ecms_news_index` values('78','45','0','1428554133','1428554133','1428554133','0');");
E_D("replace into `cn_ecms_news_index` values('79','45','0','1428554166','1428554166','1428554166','0');");
E_D("replace into `cn_ecms_news_index` values('80','34','1','1428560232','1428560316','1428560316','1');");
E_D("replace into `cn_ecms_news_index` values('81','34','1','1428560416','1428562923','1428569386','1');");
E_D("replace into `cn_ecms_news_index` values('82','10','1','1428648618','1428648731','1428648731','1');");
E_D("replace into `cn_ecms_news_index` values('83','23','1','1428669930','1428670166','1428670347','1');");
E_D("replace into `cn_ecms_news_index` values('84','12','1','1428977616','1428978154','1428978154','1');");
E_D("replace into `cn_ecms_news_index` values('85','10','1','1428992917','1428993052','1429000641','1');");
E_D("replace into `cn_ecms_news_index` values('86','11','1','1428993195','1428993219','1440745876','1');");
E_D("replace into `cn_ecms_news_index` values('87','10','1','1429000846','1429000872','1429000872','1');");
E_D("replace into `cn_ecms_news_index` values('88','10','1','1429001234','1429001359','1429001685','1');");
E_D("replace into `cn_ecms_news_index` values('89','10','1','1429003011','1429003156','1429003767','1');");
E_D("replace into `cn_ecms_news_index` values('90','33','1','1429189767','1429189961','1429190393','1');");
E_D("replace into `cn_ecms_news_index` values('91','33','1','1429189964','1429190224','1429190370','1');");
E_D("replace into `cn_ecms_news_index` values('92','46','1','1429191329','1429191366','1429191621','1');");
E_D("replace into `cn_ecms_news_index` values('93','33','1','1429279357','1429279564','1429279681','1');");
E_D("replace into `cn_ecms_news_index` values('94','10','1','1430895070','1430895200','1430895704','1');");
E_D("replace into `cn_ecms_news_index` values('105','35','1','1440756785','1440756831','1440756831','1');");
E_D("replace into `cn_ecms_news_index` values('96','52','1','1438587364','1438587457','1438827837','1');");
E_D("replace into `cn_ecms_news_index` values('97','50','1','1438597514','1438597527','1438597527','1');");
E_D("replace into `cn_ecms_news_index` values('98','51','1','1438825201','1438825279','1438825279','1');");
E_D("replace into `cn_ecms_news_index` values('99','10','1','1438827963','1438828845','1439345208','1');");
E_D("replace into `cn_ecms_news_index` values('100','10','1','1439449931','1439450372','1439456033','1');");
E_D("replace into `cn_ecms_news_index` values('101','10','1','1440146000','1440146041','1440403932','1');");
E_D("replace into `cn_ecms_news_index` values('102','20','1','1440406943','1440407021','1441768925','1');");
E_D("replace into `cn_ecms_news_index` values('103','14','1','1440482709','1440482859','1440482867','1');");
E_D("replace into `cn_ecms_news_index` values('104','11','1','1437475977','1440744732','1440745848','1');");
E_D("replace into `cn_ecms_news_index` values('106','53','1','1441097756','1441098423','1441099661','1');");
E_D("replace into `cn_ecms_news_index` values('107','20','1','1441616072','1441616216','1441616368','1');");
E_D("replace into `cn_ecms_news_index` values('109','23','1','1442050609','1442050670','1442058076','1');");
E_D("replace into `cn_ecms_news_index` values('110','10','1','1442304001','1442304577','1442304577','1');");
E_D("replace into `cn_ecms_news_index` values('111','15','1','1442307060','1442307290','1442307290','1');");
E_D("replace into `cn_ecms_news_index` values('112','23','1','1442476349','1442476389','1442478035','1');");
E_D("replace into `cn_ecms_news_index` values('113','15','0','1447828647','1447829801','1447917196','1');");
E_D("replace into `cn_ecms_news_index` values('114','15','0','1447829897','1447829959','1447829959','1');");
E_D("replace into `cn_ecms_news_index` values('115','15','0','1448171978','1448172843','1448333081','1');");
E_D("replace into `cn_ecms_news_index` values('116','36','1','1448174803','1448175130','1448175169','1');");
E_D("replace into `cn_ecms_news_index` values('117','15','0','1448191340','1448191391','1448191593','1');");
E_D("replace into `cn_ecms_news_index` values('118','15','0','1448201579','1448201602','1448202708','0');");
E_D("replace into `cn_ecms_news_index` values('119','15','0','1448246110','1448246306','1448508528','0');");
E_D("replace into `cn_ecms_news_index` values('120','20','1','1448848577','1448848799','1448848799','1');");
E_D("replace into `cn_ecms_news_index` values('121','20','1','1448849542','1448849783','1448850095','1');");
E_D("replace into `cn_ecms_news_index` values('122','20','1','1448850917','1448851150','1448851150','1');");
E_D("replace into `cn_ecms_news_index` values('123','20','1','1448851370','1448851587','1448851587','1');");
E_D("replace into `cn_ecms_news_index` values('124','20','1','1448851822','1448851872','1448851872','1');");
E_D("replace into `cn_ecms_news_index` values('125','15','1','1449394623','1449394780','1449394780','1');");
E_D("replace into `cn_ecms_news_index` values('126','20','1','1450421766','1450421897','1450421897','1');");
E_D("replace into `cn_ecms_news_index` values('127','21','1','1450445297','1450445525','1450445525','1');");
E_D("replace into `cn_ecms_news_index` values('128','21','1','1450445532','1450445641','1450667477','1');");
E_D("replace into `cn_ecms_news_index` values('129','34','1','1450619407','1450619419','1450672478','1');");
E_D("replace into `cn_ecms_news_index` values('130','21','1','1451367592','1451367825','1451368656','1');");
E_D("replace into `cn_ecms_news_index` values('131','21','1','1451369968','1451370054','1451370054','1');");
E_D("replace into `cn_ecms_news_index` values('132','10','1','1452070355','1452071012','1452071012','1');");
E_D("replace into `cn_ecms_news_index` values('133','12','1','1456817385','1456818428','1456818428','1');");

@include("../../inc/footer.php");
?>