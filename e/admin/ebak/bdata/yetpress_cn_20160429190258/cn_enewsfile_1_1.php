<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsfile_1`;");
E_C("CREATE TABLE `cn_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsfile_1` values('2','1000010000000001','733677323845bafee9a9da1cb18f3d33.jpg','313386','2015-02-27','mervyn','1425025156','10','3575152_184954473029_2[1].jpg','0','0','1','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('3','1000010000000001','45a03350952ab26aa694007b4dda5327.mp4','1986840','2015-02-27','mervyn','1425025283','10','20140822014311_16534.mp4','0','0','1','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('5','1000010000000006','f9ab933942f22abd63e9be6af87bbbdf.mp4','1986840','2015-02-28','mervyn','1425109167','34','中国形象片版本一.mp4','3','0','6','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('6','1000010000000008','b22f5745814a44c206a0e9518e419406.png','1825880','2015-03-03','mervyn','1425363078','33','天台旅游攻略.png','1','0','8','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('7','1000010000000008','5054fc3620913febaa0c23c7d9d9605a.png','79189','2015-03-03','mervyn','1425363397','33','p2.png','1','0','8','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('8','1000010000000008','58c23fb82af59ae321873c8a14ae9d6f.png','45297','2015-03-03','mervyn','1425366407','33','b1.png','1','0','8','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('9','1000010000000008','08b9d85a58a67aa95513b857f4c0b854.png','104785','2015-03-03','mervyn','1425366407','33','b2.png','1','0','8','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('10','1000010000000009','30141f7e18adbe2a4d21f5321ea51a38.jpg','19422','2015-03-03','mervyn','1425367944','33','f1.jpg','1','0','9','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('11','1000010000000009','def0d83498cd9839bf78bea28bc48955.jpg','23137','2015-03-03','mervyn','1425368225','33','f2.jpg','1','0','9','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('12','1000010000000009','5074f99373c6a23b475154d649135d82.jpg','35155','2015-03-03','mervyn','1425368225','33','f3.jpg','1','0','9','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('13','1000010000000009','20a1c7ef5febcb35ed0047a7ae20b110.jpg','137752','2015-03-03','mervyn','1425368225','33','f4.jpg','1','0','9','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('14','1000010000000009','2552196944a506cb79b02d810263952c.jpg','102087','2015-03-03','mervyn','1425368225','33','f5.jpg','1','0','9','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('15','1000010000000009','f1adaadae9e21cd3576f1fb14114b8ca.jpg','38127','2015-03-03','mervyn','1425368225','33','f6.jpg','1','0','9','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('16','1000010000000010','561b849ec9ad01dc134dee956e3d7370.jpg','800130','2015-03-03','mervyn','1425368750','33','j1.jpg','1','0','10','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('17','1000010000000010','66954a4bf65e056cb44e232d0b848ca5.jpg','460865','2015-03-03','mervyn','1425369045','33','j2.jpg','1','0','10','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('18','1000010000000010','975902f096b10b5698ff7115c2f6ca76.jpg','560683','2015-03-03','mervyn','1425369073','33','j3.jpg','1','0','10','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('19','1000010000000010','d10de865ef70d40d9e48dc39161f4ad0.jpg','597578','2015-03-03','mervyn','1425369086','33','j4.jpg','1','0','10','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('20','1000010000000011','a2020778238a87a74879515079f0d557.jpg','303836','2015-03-03','mervyn','1425369647','33','z1.jpg','1','0','11','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('21','1000010000000011','8aebbae5c216d659ea630626e5c38e59.jpg','338299','2015-03-03','mervyn','1425369674','33','z2.jpg','1','0','11','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('22','1000010000000011','ac6553c6206dbd7b5bea607e7ff5c5ff.jpg','148902','2015-03-03','mervyn','1425369684','33','z3.jpg','1','0','11','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('23','1000010000000011','e70632073ccd3207739049c4e1975f0e.jpg','276400','2015-03-03','mervyn','1425369691','33','z4.jpg','1','0','11','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('24','1000010000000011','1c223c619a9204536943bf6ad55614cf.jpg','335477','2015-03-03','mervyn','1425369700','33','z5.jpg','1','0','11','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('25','1000010000000011','c0cadf036e26e7d87fc50a55610bdbc4.jpg','161571','2015-03-03','mervyn','1425369707','33','z6.jpg','1','0','11','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('26','1000010000000012','e6b471a2865dbc83e20734106c5e5e4c.jpg','1060643','2015-03-03','mervyn','1425370172','33','s1.jpg','1','0','12','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('27','1000010000000012','6b5ba1454c79b386184e0573893a29bf.jpg','117963','2015-03-03','mervyn','1425370270','33','ss2.jpg','1','0','12','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('28','1000010000000013','e91ca45647ca83c3313b751c00dd94cf.jpg','889947','2015-03-03','mervyn','1425370452','33','p1.jpg','1','0','13','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('29','1000010000000013','5592135218cd42f7026cbcc132a4da9f.jpg','511949','2015-03-03','mervyn','1425370459','33','p2.jpg','1','0','13','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('30','0','f308f60482c3b6a68e62fffd96b733eb.jpg','58614','2015-03-05','mervyn','1425542385','33','a1.jpg','1','0','1425540442','1425540442','0','0');");
E_D("replace into `cn_enewsfile_1` values('31','0','8b403b263522e346ba51e529620a85b6.jpg','690756','2015-03-05','mervyn','1425543558','33','a1.jpg','1','0','1425540442','1425540442','0','0');");
E_D("replace into `cn_enewsfile_1` values('32','1000010000000041','e9ce6eddfd4b32a8fa060fb0d239b495.jpg','286525','2015-03-06','mervyn','1425625025','33','y1.jpg','1','0','41','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('33','1000010000000041','f79bbfd23460d54a1573f868d35b0d18.jpg','246074','2015-03-06','mervyn','1425625034','33','y2.jpg','1','0','41','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('34','1000010000000041','6ece55bbfc6ea295ad4ac1cce7890c13.jpg','217236','2015-03-06','mervyn','1425625044','33','y3.jpg','1','0','41','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('35','1000010000000041','619077c628582dbebea26db3d5266af1.jpg','39934','2015-03-06','mervyn','1425625051','33','y4.jpg','1','0','41','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('36','1000010000000042','d6e111b41562e67fafee969301a29d40.jpg','286525','2015-03-06','mervyn','1425626605','10','y1.jpg','1','0','42','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('37','1000010000000042','f699b29d624f1b43b0e3fc76bdbbfdb3.rar','3432','2015-03-06','mervyn','1425627279','10','mervyn.rar','0','0','42','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('38','1000010000000045','4033686334d999f2d2c750491b75b999.mp4','1986840','2015-03-11','mervyn','1426046649','23','test1','0','0','45','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('41','0','717d537576a1f46cd4b1aaa66d5ac5d6.jpg','331392','2015-03-17','mervyn','1426583981','19','cont','1','0','1426583602','1426583602','0','0');");
E_D("replace into `cn_enewsfile_1` values('40','0','58022b6a41d5b3ebafcf355979cc3577.jpg','331392','2015-03-17','mervyn','1426583842','19','cont','1','0','1426583602','1426583602','0','0');");
E_D("replace into `cn_enewsfile_1` values('42','0','76ad453a988a7e4be6dd8ba22adcde98.jpg','331392','2015-03-17','mervyn','1426584036','19','cc','1','0','1426583602','1426583602','0','0');");
E_D("replace into `cn_enewsfile_1` values('43','0','e1bf6bfedcc496a1b1cda5df8116c91b.jpg','331392','2015-03-17','mervyn','1426584085','19','自制放大55倍天文望远镜.jpg','1','0','1426583602','1426583602','0','0');");
E_D("replace into `cn_enewsfile_1` values('73','0','e00d5dda4fac0d13001db986cd57fc82.jpg','10273','2015-03-17','mervyn','1426587356','10','u=3737515248,3243119456&amp;fm=21&amp;gp=0.jpg','1','0','1426585647','1426585647','0','0');");
E_D("replace into `cn_enewsfile_1` values('47','1000010000000060','b665638b07be34b291f55c25b41e3481.jpg','331392','2015-03-17','mervyn','1426585058','19','tt','1','0','60','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('74','0','31abe8497dfc7dc5b09c7d0609114c78.jpg','126541','2015-03-17','mervyn','1426587490','10','tttt.jpg','1','0','1426585647','1426585647','0','0');");
E_D("replace into `cn_enewsfile_1` values('75','0','f333cf003130cc76d947acdba6289c47.jpg','33323','2015-03-17','mervyn','1426587748','10','92599931.jpg','1','0','1426585647','1426585647','0','0');");
E_D("replace into `cn_enewsfile_1` values('76','0','71314799d56a154e02eab1b89822756c.png','39179','2015-03-17','mervyn','1426587762','10','无标题.png','1','0','1426585647','1426585647','0','0');");
E_D("replace into `cn_enewsfile_1` values('77','1000010000000062','a49e60a9772e20f703294dc6c3bec581.mp4','1986840','2015-03-23','mervyn','1427104809','35','20140822014311_16534.mp4','0','0','62','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('78','1000010000000063','a254c36c98e80cb8f11308fbb516e7ff.png','50374','2015-03-24','mervyn','1427179196','18','001.png','1','0','63','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('79','1000010000000063','3f3cf35f485180f62f03b5c7cb8e2378.png','41820','2015-03-24','mervyn','1427179229','18','002.png','1','0','63','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('80','1000060000000001','2bea6155c1c1aa994ff6c604775d42fc.jpg','33323','2015-04-01','mervyn','1427892398','44','92599931.jpg','1','0','1','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('81','1000010000000083','235708b0c34f80aa1666b1686e0f29ed.mp4','9839430','2015-04-10','mervyn','1428670122','23','Sexy Prank - Hot girl prank nude - Girl prank in public - Jo','0','0','83','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('82','1000010000000083','46b1138dd06682f875a7ec78db204238.jpg','48785','2015-04-10','mervyn','1428670340','23','123.jpg','1','0','83','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('83','1000010000000090','df67260137369fa7e75738ad7f4e94dd.png','446141','2015-04-16','mervyn','1429189894','33','ycn.png','1','0','90','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('86','1000010000000092','a30445a38c06fe2e1378d5b6dd3d5629.doc','26112','2015-04-16','mervyn','1429191560','46','叶伟安.doc','0','0','92','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('85','1000010000000091','3e1bf30e56258ea10f086b1d713986fb.png','2861766','2015-04-16','mervyn','1429190166','33','www.yetpress.com.png','1','0','91','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('87','1000010000000093','3fd3594d786fd737d65073b49e45c499.png','116386','2015-04-17','mervyn','1429279416','33','kuka.png','1','0','93','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('88','1000010000000096','cf910c3169b4af3f99e38594ea821167.jpg','21606','2015-08-03','mervyn','1438587415','52','u=1511090843,3329883121&amp;fm=21&amp;gp=0.jpg','1','0','96','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('89','1000010000000096','b47bbd4ca57e39f2aa2f5ad9617efd8d.jpg','18374','2015-08-06','mervyn','1438827810','52','u=425469333,2277929998&amp;fm=21&amp;gp=0.jpg','1','0','96','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('91','0','010336173dbde7ddc82b8b39e0463fff.png','57895','2015-09-02','mervyn','1441185485','53','cross.png','1','0','106','106','0','0');");
E_D("replace into `cn_enewsfile_1` values('92','1000010000000113','915547f61ebd27ef7261e25ca647db66.png','74951','2015-11-18','mervyn','1447832714','15','guaji','1','0','113','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('93','1000010000000113','696f4fdcab3f2372242a270ab1b0b0d6.png','97510','2015-11-18','mervyn','1447832984','15','invest','1','0','113','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('94','1000010000000113','2292a0556487ba06a2af26163015462e.png','94636','2015-11-18','mervyn','1447833474','15','refer_guaji','1','0','113','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('95','1000010000000113','b036a48e7e958769847c6aca60360a91.png','101293','2015-11-18','mervyn','1447833832','15','cps','1','0','113','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('96','1000010000000113','4b3bf0ce553bb7dd4d296373c89b0a49.png','82908','2015-11-18','mervyn','1447833997','15','cps_refer','1','0','113','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('97','1000010000000113','ef8de2fc755ea3a41b6cbbfdefec634a.png','66233','2015-11-18','mervyn','1447834407','15','example.png','1','0','113','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('98','1000010000000115','0fd372840b1db31fc6e9b6a8655eb537.jpg','166910','2015-11-22','mervyn','1448173556','15','1111.jpg','1','0','115','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('99','1000010000000115','ea004658e9f54d5958a42a2e755ec93f.jpg','70534','2015-11-22','mervyn','1448173889','15','222.jpg','1','0','115','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('100','1000010000000115','f9f4664c34773e9675b410684a29fd83.jpg','56304','2015-11-22','mervyn','1448173928','15','333.jpg','1','0','115','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('101','1000010000000115','a88a4616538148ec86fef37124f45fd5.jpg','147339','2015-11-22','mervyn','1448173988','15','444.jpg','1','0','115','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('102','1000010000000115','b835b9d18e6fa41484ed973e273e5648.jpg','75445','2015-11-22','mervyn','1448174133','15','555.jpg','1','0','115','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('103','1000010000000115','2b774df4dacd9fb4fab713450ed37c89.jpg','19465','2015-11-22','mervyn','1448174150','15','666.jpg','1','0','115','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('104','1000010000000115','68c86f0972750c30cd8bda02096790ae.jpg','60487','2015-11-22','mervyn','1448174187','15','777.jpg','1','0','115','0','0','0');");
E_D("replace into `cn_enewsfile_1` values('105','1000010000000119','3c9bac0a9872f666d9f9b0001dfc061f.jpg','59392','2015-11-23','mervyn','1448246251','15','tui1.jpg','1','0','119','0','0','0');");

@include("../../inc/footer.php");
?>