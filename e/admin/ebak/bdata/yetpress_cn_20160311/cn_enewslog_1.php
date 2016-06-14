<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewslog`;");
E_C("CREATE TABLE `cn_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=185 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewslog` values('1','mervyn','2015-02-18 15:47:07','111.140.74.187','1','','0','');");
E_D("replace into `cn_enewslog` values('2','200890234','2015-02-26 15:10:30','173.224.217.148','0','','0','');");
E_D("replace into `cn_enewslog` values('3','mervyn','2015-02-26 15:10:51','173.224.217.148','1','','0','');");
E_D("replace into `cn_enewslog` values('4','mervyn','2015-02-27 10:07:30','60.177.244.89','1','','0','');");
E_D("replace into `cn_enewslog` values('5','mervyn','2015-02-28 09:44:55','60.177.244.89','1','','0','');");
E_D("replace into `cn_enewslog` values('6','mervyn','2015-02-28 13:35:56','60.177.244.89','1','','0','');");
E_D("replace into `cn_enewslog` values('7','mervyn','2015-02-28 13:36:16','60.177.244.89','1','','0','');");
E_D("replace into `cn_enewslog` values('8','mervyn','2015-02-28 17:08:00','60.177.244.89','1','','0','');");
E_D("replace into `cn_enewslog` values('9','mervyn','2015-03-02 10:28:54','220.191.56.158','1','','0','');");
E_D("replace into `cn_enewslog` values('10','mervyn','2015-03-03 09:37:49','220.191.56.158','1','','0','');");
E_D("replace into `cn_enewslog` values('11','mervyn','2015-03-04 12:10:32','220.191.56.158','1','','0','');");
E_D("replace into `cn_enewslog` values('12','mervyn','2015-03-05 10:02:34','220.191.56.158','1','','0','');");
E_D("replace into `cn_enewslog` values('13','mervyn','2015-03-05 22:19:59','173.224.217.148','1','','0','');");
E_D("replace into `cn_enewslog` values('14','mervyn','2015-03-06 11:40:26','106.187.47.129','1','','0','');");
E_D("replace into `cn_enewslog` values('15','mervyn','2015-03-07 20:20:41','58.101.127.56','1','','0','');");
E_D("replace into `cn_enewslog` values('16','mervyn','2015-03-09 10:30:00','115.194.3.199','1','','0','');");
E_D("replace into `cn_enewslog` values('17','mervyn','2015-03-10 21:43:33','106.185.32.220','0','','1','');");
E_D("replace into `cn_enewslog` values('18','mervyn','2015-03-10 21:43:33','106.185.32.220','0','','1','');");
E_D("replace into `cn_enewslog` values('19','mervyn','2015-03-10 21:43:33','106.185.32.220','0','','1','');");
E_D("replace into `cn_enewslog` values('20','mervyn','2015-03-10 21:43:33','106.185.32.220','0','','1','');");
E_D("replace into `cn_enewslog` values('21','mervyn','2015-03-10 21:43:38','106.185.32.220','1','','0','');");
E_D("replace into `cn_enewslog` values('22','mervyn','2015-03-10 22:39:15','106.185.32.220','1','','0','');");
E_D("replace into `cn_enewslog` values('23','mervyn','2015-03-11 11:55:00','210.255.114.186','0','','1','');");
E_D("replace into `cn_enewslog` values('24','mervyn','2015-03-11 11:55:05','210.255.114.186','1','','0','');");
E_D("replace into `cn_enewslog` values('25','mervyn','2015-03-16 14:04:26','67.198.168.42','1','','0','');");
E_D("replace into `cn_enewslog` values('26','mervyn','2015-03-17 10:40:47','125.120.255.43','1','','0','');");
E_D("replace into `cn_enewslog` values('27','mervyn','2015-03-18 16:58:45','125.120.255.43','1','','0','');");
E_D("replace into `cn_enewslog` values('28','mervyn','2015-03-19 14:16:09','125.120.249.121','1','','0','');");
E_D("replace into `cn_enewslog` values('29','mervyn','2015-03-20 12:08:38','125.120.249.121','1','','0','');");
E_D("replace into `cn_enewslog` values('30','mervyn','2015-03-21 21:12:43','106.185.45.249','1','','0','');");
E_D("replace into `cn_enewslog` values('31','mervyn','2015-03-23 13:46:22','115.197.223.204','1','','0','');");
E_D("replace into `cn_enewslog` values('32','mervyn','2015-03-23 13:46:22','115.197.223.204','1','','0','');");
E_D("replace into `cn_enewslog` values('33','mervyn','2015-03-23 13:46:25','115.197.223.204','1','','0','');");
E_D("replace into `cn_enewslog` values('34','mervyn','2015-03-23 13:48:10','115.197.223.204','1','','0','');");
E_D("replace into `cn_enewslog` values('35','mervyn','2015-03-23 17:08:03','115.197.223.204','1','','0','');");
E_D("replace into `cn_enewslog` values('36','mervyn','2015-03-24 10:46:41','115.230.115.25','1','','0','');");
E_D("replace into `cn_enewslog` values('37','mervyn','2015-03-24 22:20:11','58.101.49.151','1','','0','');");
E_D("replace into `cn_enewslog` values('38','mervyn','2015-03-24 22:20:11','58.101.49.151','1','','0','');");
E_D("replace into `cn_enewslog` values('39','mervyn','2015-03-25 10:43:00','125.120.242.167','1','','0','');");
E_D("replace into `cn_enewslog` values('40','mervyn','2015-03-25 15:30:28','125.120.242.167','1','','0','');");
E_D("replace into `cn_enewslog` values('41','mervyn','2015-03-25 17:59:05','106.185.45.249','1','','0','');");
E_D("replace into `cn_enewslog` values('42','mervyn','2015-03-25 17:59:05','106.185.45.249','1','','0','');");
E_D("replace into `cn_enewslog` values('43','mervyn','2015-03-25 17:59:13','106.185.45.249','1','','0','');");
E_D("replace into `cn_enewslog` values('44','mervyn','2015-03-25 23:47:55','106.185.45.249','1','','0','');");
E_D("replace into `cn_enewslog` values('45','mervyn','2015-03-25 23:50:08','106.185.45.249','1','','0','');");
E_D("replace into `cn_enewslog` values('46','mervyn','2015-03-27 11:13:43','60.177.243.103','1','','0','');");
E_D("replace into `cn_enewslog` values('47','mervyn','2015-03-27 17:18:19','60.177.243.103','1','','0','');");
E_D("replace into `cn_enewslog` values('48','mervyn','2015-03-27 22:00:17','110.164.21.3','1','','0','');");
E_D("replace into `cn_enewslog` values('49','mervyn','2015-03-28 15:29:15','58.101.62.243','1','','0','');");
E_D("replace into `cn_enewslog` values('50','mervyn','2015-03-28 20:50:15','218.109.140.151','1','','0','');");
E_D("replace into `cn_enewslog` values('51','mervyn','2015-03-28 21:00:49','218.109.140.151','1','','0','');");
E_D("replace into `cn_enewslog` values('52','mervyn','2015-03-29 00:50:00','218.109.140.151','1','','0','');");
E_D("replace into `cn_enewslog` values('53','mervyn','2015-03-30 09:37:33','115.194.26.167','0','','1','');");
E_D("replace into `cn_enewslog` values('54','mervyn','2015-03-30 09:37:51','115.194.26.167','1','','0','');");
E_D("replace into `cn_enewslog` values('55','mervyn','2015-03-30 13:18:35','115.194.26.167','1','','0','');");
E_D("replace into `cn_enewslog` values('56','mervyn','2015-03-30 18:24:02','110.164.21.3','1','','0','');");
E_D("replace into `cn_enewslog` values('57','mervyn','2015-03-30 21:00:15','110.164.21.3','0','','1','');");
E_D("replace into `cn_enewslog` values('58','mervyn','2015-03-30 21:00:23','110.164.21.3','1','','0','');");
E_D("replace into `cn_enewslog` values('59','mervyn','2015-03-31 13:34:13','115.194.26.167','1','','0','');");
E_D("replace into `cn_enewslog` values('60','mervyn','2015-03-31 17:04:47','110.164.21.3','1','','0','');");
E_D("replace into `cn_enewslog` values('61','mervyn','2015-03-31 23:12:44','106.185.45.249','1','','0','');");
E_D("replace into `cn_enewslog` values('62','mervyn','2015-04-01 09:27:15','115.204.103.167','1','','0','');");
E_D("replace into `cn_enewslog` values('63','mervyn','2015-04-01 09:34:43','115.204.103.167','1','','0','');");
E_D("replace into `cn_enewslog` values('64','mervyn','2015-04-01 18:32:47','110.164.21.3','1','','0','');");
E_D("replace into `cn_enewslog` values('65','mervyn','2015-04-02 12:57:08','60.177.246.122','1','','0','');");
E_D("replace into `cn_enewslog` values('66','mervyn','2015-04-08 15:57:39','110.164.21.3','1','','0','');");
E_D("replace into `cn_enewslog` values('67','mervyn','2015-04-09 09:40:06','115.194.25.116','0','','1','');");
E_D("replace into `cn_enewslog` values('68','mervyn','2015-04-09 09:40:29','115.194.25.116','1','','0','');");
E_D("replace into `cn_enewslog` values('69','mervyn','2015-04-10 14:30:36','115.197.208.24','1','','0','');");
E_D("replace into `cn_enewslog` values('70','mervyn','2015-04-10 20:37:38','58.101.87.103','0','','1','');");
E_D("replace into `cn_enewslog` values('71','mervyn','2015-04-10 20:37:38','58.101.87.103','0','','1','');");
E_D("replace into `cn_enewslog` values('72','mervyn','2015-04-10 20:39:32','58.101.87.103','1','','0','');");
E_D("replace into `cn_enewslog` values('73','mervyn','2015-04-13 09:46:28','115.197.220.6','1','','0','');");
E_D("replace into `cn_enewslog` values('74','mervyn','2015-04-13 10:52:25','110.164.21.3','1','','0','');");
E_D("replace into `cn_enewslog` values('75','mervyn','2015-04-13 11:47:16','110.164.21.3','1','','0','');");
E_D("replace into `cn_enewslog` values('76','mervyn','2015-04-13 18:43:56','110.164.21.3','1','','0','');");
E_D("replace into `cn_enewslog` values('77','mervyn','2015-04-14 10:12:38','115.199.56.111','1','','0','');");
E_D("replace into `cn_enewslog` values('78','mervyn','2015-04-16 20:38:14','58.101.36.229','1','','0','');");
E_D("replace into `cn_enewslog` values('79','mervyn','2015-04-16 20:43:07','58.101.36.229','1','','0','');");
E_D("replace into `cn_enewslog` values('80','mervyn','2015-04-16 20:43:07','58.101.36.229','1','','0','');");
E_D("replace into `cn_enewslog` values('81','mervyn','2015-04-17 22:00:10','218.109.253.43','1','','0','');");
E_D("replace into `cn_enewslog` values('82','mervyn','2015-05-06 14:50:44','115.199.55.141','1','','0','');");
E_D("replace into `cn_enewslog` values('83','mervyn','2015-05-27 14:00:31','122.224.113.178','1','','0','');");
E_D("replace into `cn_enewslog` values('84','mervyn','2015-06-24 11:11:57','122.224.113.178','1','','0','');");
E_D("replace into `cn_enewslog` values('85','mervyn','2015-07-16 11:34:34','122.224.113.178','1','','0','');");
E_D("replace into `cn_enewslog` values('86','mervyn','2015-07-21 18:50:45','122.224.113.178','1','','0','');");
E_D("replace into `cn_enewslog` values('87','mervyn','2015-07-24 09:16:10','122.224.113.178','1','','0','');");
E_D("replace into `cn_enewslog` values('88','mervyn','2015-07-27 17:39:37','122.224.113.178','1','','0','');");
E_D("replace into `cn_enewslog` values('89','mervyn','2015-07-28 09:08:48','122.224.113.178','1','','0','');");
E_D("replace into `cn_enewslog` values('90','mervyn','2015-07-29 17:30:05','122.224.113.178','1','','0','');");
E_D("replace into `cn_enewslog` values('91','mervyn','2015-07-29 18:25:04','122.224.113.178','1','','0','17501');");
E_D("replace into `cn_enewslog` values('92','mervyn','2015-07-31 13:33:49','122.224.113.178','1','','0','14263');");
E_D("replace into `cn_enewslog` values('93','mervyn','2015-08-02 14:47:30','115.195.134.191','1','','0','50235');");
E_D("replace into `cn_enewslog` values('94','mervyn','2015-08-03 13:55:18','122.224.113.178','1','','0','29546');");
E_D("replace into `cn_enewslog` values('95','mervyn','2015-08-03 19:30:02','115.195.134.191','1','','0','49910');");
E_D("replace into `cn_enewslog` values('96','mervyn','2015-08-04 10:39:17','122.224.113.178','1','','0','13600');");
E_D("replace into `cn_enewslog` values('97','mervyn','2015-08-05 09:58:43','122.224.113.178','1','','0','33402');");
E_D("replace into `cn_enewslog` values('98','mervyn','2015-08-05 17:44:05','122.224.113.178','1','','0','27750');");
E_D("replace into `cn_enewslog` values('99','mervyn','2015-08-06 09:15:42','122.224.113.178','1','','0','33635');");
E_D("replace into `cn_enewslog` values('100','mervyn','2015-08-07 09:08:42','122.224.113.178','1','','0','41685');");
E_D("replace into `cn_enewslog` values('101','mervyn','2015-08-11 15:04:33','122.224.113.178','1','','0','33536');");
E_D("replace into `cn_enewslog` values('102','mervyn','2015-08-12 09:54:02','122.224.113.178','1','','0','23121');");
E_D("replace into `cn_enewslog` values('103','mervyn','2015-08-13 15:10:05','122.224.113.178','1','','0','32227');");
E_D("replace into `cn_enewslog` values('104','mervyn','2015-08-13 16:49:37','122.224.113.178','1','','0','24826');");
E_D("replace into `cn_enewslog` values('105','mervyn','2015-08-14 09:11:30','122.224.113.178','1','','0','45908');");
E_D("replace into `cn_enewslog` values('106','mervyn','2015-08-14 16:39:25','199.83.88.183','1','','0','63104');");
E_D("replace into `cn_enewslog` values('107','mervyn','2015-08-17 10:07:42','122.224.113.178','1','','0','22357');");
E_D("replace into `cn_enewslog` values('108','mervyn','2015-08-17 12:18:41','122.224.113.178','1','','0','16744');");
E_D("replace into `cn_enewslog` values('109','mervyn','2015-08-17 12:18:42','122.224.113.178','1','','0','16744');");
E_D("replace into `cn_enewslog` values('110','mervyn','2015-08-17 12:31:37','122.224.113.178','1','','0','27861');");
E_D("replace into `cn_enewslog` values('111','mervyn','2015-08-18 15:29:35','122.224.113.178','1','','0','30392');");
E_D("replace into `cn_enewslog` values('112','mervyn','2015-08-19 17:39:48','122.224.113.178','1','','0','19633');");
E_D("replace into `cn_enewslog` values('113','mervyn','2015-08-21 16:33:03','122.224.113.178','1','','0','20418');");
E_D("replace into `cn_enewslog` values('114','mervyn','2015-08-24 15:51:30','122.224.113.178','1','','0','19755');");
E_D("replace into `cn_enewslog` values('115','mervyn','2015-08-25 10:32:37','122.224.113.178','1','','0','12731');");
E_D("replace into `cn_enewslog` values('116','mervyn','2015-08-25 14:03:57','115.160.176.10','1','','0','63197');");
E_D("replace into `cn_enewslog` values('117','mervyn','2015-08-27 16:41:10','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('118','mervyn','2015-08-28 14:11:01','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('119','mervyn','2015-08-28 18:09:10','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('120','mervyn','2015-08-29 15:27:26','125.118.80.224','1','','0','0');");
E_D("replace into `cn_enewslog` values('121','mervyn','2015-08-29 15:27:26','125.118.80.224','1','','0','0');");
E_D("replace into `cn_enewslog` values('122','mervyn','2015-08-29 18:44:04','125.118.80.224','0','','1','0');");
E_D("replace into `cn_enewslog` values('123','mervyn','2015-08-29 18:44:22','125.118.80.224','1','','0','0');");
E_D("replace into `cn_enewslog` values('124','mervyn','2015-08-29 21:38:53','27.98.206.77','1','','0','0');");
E_D("replace into `cn_enewslog` values('125','mervyn','2015-08-31 09:52:12','45.34.135.186','1','','0','0');");
E_D("replace into `cn_enewslog` values('126','mervyn','2015-08-31 11:09:39','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('127','mervyn','2015-08-31 16:05:42','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('128','mervyn','2015-09-01 09:44:20','45.34.135.186','1','','0','0');");
E_D("replace into `cn_enewslog` values('129','mervyn','2015-09-01 16:54:34','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('130','mervyn','2015-09-02 10:49:24','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('131','mervyn','2015-09-02 13:41:54','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('132','mervyn','2015-09-02 16:59:56','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('133','mervyn','2015-09-07 11:45:20','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('134','mervyn','2015-09-07 16:40:29','174.139.79.202','1','','0','0');");
E_D("replace into `cn_enewslog` values('135','mervyn','2015-09-08 14:44:05','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('136','mervyn','2015-09-09 11:20:12','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('137','mervyn','2015-09-12 17:16:26','122.235.232.153','1','','0','0');");
E_D("replace into `cn_enewslog` values('138','mervyn','2015-09-12 17:35:03','122.235.232.153','1','','0','0');");
E_D("replace into `cn_enewslog` values('139','mervyn','2015-09-15 15:31:49','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('140','mervyn','2015-09-15 16:50:40','202.56.13.27','1','','0','0');");
E_D("replace into `cn_enewslog` values('141','mervyn','2015-09-17 15:50:14','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('142','mervyn','2015-09-18 14:32:25','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('143','mervyn','2015-11-03 14:28:04','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('144','mervyn','2015-11-16 17:35:13','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('145','mervyn','2015-11-18 14:31:41','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('146','mervyn','2015-11-19 13:19:26','103.17.74.70','1','','0','0');");
E_D("replace into `cn_enewslog` values('147','mervyn','2015-11-22 13:56:58','61.91.74.74','1','','0','0');");
E_D("replace into `cn_enewslog` values('148','mervyn','2015-11-22 16:11:23','218.255.247.33','1','','0','0');");
E_D("replace into `cn_enewslog` values('149','mervyn','2015-11-22 18:09:31','60.176.84.240','1','','0','0');");
E_D("replace into `cn_enewslog` values('150','mervyn','2015-11-22 18:26:58','60.176.84.240','1','','0','0');");
E_D("replace into `cn_enewslog` values('151','mervyn','2015-11-22 18:50:12','60.176.84.240','1','','0','0');");
E_D("replace into `cn_enewslog` values('152','mervyn','2015-11-22 21:29:38','60.176.84.240','1','','0','0');");
E_D("replace into `cn_enewslog` values('153','mervyn','2015-11-22 22:12:33','60.176.84.240','1','','0','0');");
E_D("replace into `cn_enewslog` values('154','mervyn','2015-11-22 22:12:43','60.176.84.240','1','','0','0');");
E_D("replace into `cn_enewslog` values('155','mervyn','2015-11-23 10:34:31','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('156','mervyn','2015-11-24 10:39:41','59.188.244.10','1','','0','0');");
E_D("replace into `cn_enewslog` values('157','mervyn','2015-11-26 09:54:57','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('158','mervyn','2015-11-30 09:56:06','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('159','mervyn','2015-12-06 14:32:56','59.124.128.36','1','','0','0');");
E_D("replace into `cn_enewslog` values('160','mervyn','2015-12-06 17:35:42','59.124.128.36','1','','0','0');");
E_D("replace into `cn_enewslog` values('161','mervyn','2015-12-07 09:46:41','103.228.92.159','1','','0','0');");
E_D("replace into `cn_enewslog` values('162','meravyn','2015-12-08 18:33:26','122.224.113.178','0','','0','0');");
E_D("replace into `cn_enewslog` values('163','mervyny','2015-12-08 18:33:34','122.224.113.178','0','','1','0');");
E_D("replace into `cn_enewslog` values('164','mervyny','2015-12-08 18:33:38','122.224.113.178','0','','1','0');");
E_D("replace into `cn_enewslog` values('165','mervyn','2015-12-08 18:33:41','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('166','mervyn','2015-12-08 18:33:44','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('167','mervyn','2015-12-18 14:54:47','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('168','mervyn','2015-12-18 21:25:28','59.124.128.36','1','','0','0');");
E_D("replace into `cn_enewslog` values('169','mervyn','2015-12-19 17:20:15','59.124.128.36','1','','0','0');");
E_D("replace into `cn_enewslog` values('170','mervyn','2015-12-20 21:49:12','59.124.128.36','1','','0','0');");
E_D("replace into `cn_enewslog` values('171','mervyn','2015-12-21 09:44:13','59.124.128.36','1','','0','0');");
E_D("replace into `cn_enewslog` values('172','mervyn','2015-12-21 11:10:27','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('173','mervyn','2015-12-21 15:59:44','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('174','mervyn','2015-12-29 13:39:25','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('175','mervyn','2016-01-06 16:51:26','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('176','mervyn','2016-01-08 09:51:36','122.224.113.178','1','','0','0');");
E_D("replace into `cn_enewslog` values('177','mervyn','2016-03-01 12:42:46','127.0.0.1','1','','0','11051');");
E_D("replace into `cn_enewslog` values('178','mervyn','2016-03-01 14:55:49','127.0.0.1','0','','1','15466');");
E_D("replace into `cn_enewslog` values('179','mervyn','2016-03-01 14:56:00','127.0.0.1','1','','0','15471');");
E_D("replace into `cn_enewslog` values('180','mervyn','2016-03-01 15:21:24','127.0.0.1','1','','0','16457');");
E_D("replace into `cn_enewslog` values('181','mervyn','2016-03-01 15:24:17','127.0.0.1','1','','0','16563');");
E_D("replace into `cn_enewslog` values('182','mervyn','2016-03-01 16:29:42','127.0.0.1','1','','0','18897');");
E_D("replace into `cn_enewslog` values('183','mervyn','2016-03-07 15:20:13','127.0.0.1','1','','0','12513');");
E_D("replace into `cn_enewslog` values('184','mervyn','2016-03-11 15:04:07','127.0.0.1','1','','0','59387');");

@include("../../inc/footer.php");
?>