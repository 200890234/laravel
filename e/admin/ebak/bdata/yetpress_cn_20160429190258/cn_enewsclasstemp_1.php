<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsclasstemp`;");
E_C("CREATE TABLE `cn_enewsclasstemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsclasstemp` values('1','通用一级栏目模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--pagetitle--] - Powered by EmpireCMS</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"channle\\\\\">\r\n[!--temp.header--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"news_list\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>您当前的位置：[!--newsnav--]</td>\r\n</tr>\r\n</table>\r\n[listsonclass]\\\\''selfinfo\\\\'',5,38,0,0,7,0,0[/listsonclass]</td>\r\n<td class=\\\\\"sider\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>推荐资讯</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"8\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[phomenewspic]\\\\''selfinfo\\\\'',2,4,128,90,1,20,2[/phomenewspic]\r\n</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>最后更新</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,44,0,0,2,0[/ecmsinfo] \r\n</ul></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>热门点击</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ol class=\\\\\"rank\\\\\">\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,40,0,1,10,0[/ecmsinfo] \r\n</ol></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0');");
E_D("replace into `cn_enewsclasstemp` values('2','分类信息一级栏目模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--pagetitle--] - Powered by EmpireCMS</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"channle\\\\\">\r\n[!--temp.header--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"news_list\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>您当前的位置：[!--newsnav--]</td>\r\n</tr>\r\n</table>\r\n[listsonclass]\\\\''selfinfo\\\\'',5,38,0,0,7,0,0[/listsonclass]</td>\r\n<td class=\\\\\"sider\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>分类信息搜索</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><form action=\\\\\"[!--news.url--]e/search/index.php\\\\\" method=\\\\\"post\\\\\" name=\\\\\"searchform\\\\\" id=\\\\\"searchform\\\\\">\r\n<table width=\\\\\"98%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"6\\\\\">\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"tbname\\\\\" value=\\\\\"info\\\\\">\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"tempid\\\\\" value=\\\\\"1\\\\\">\r\n<tr>\r\n<td><input name=\\\\\"keyboard\\\\\" type=\\\\\"text\\\\\" class=\\\\\"inputText\\\\\" id=\\\\\"keyboard\\\\\" size=\\\\\"18\\\\\" />\r\n<select name=\\\\\"show\\\\\">\r\n<option value=\\\\\"title,smalltext,myarea\\\\\" selected=\\\\\"selected\\\\\">不限</option>\r\n<option value=\\\\\"title\\\\\">信息标题</option>\r\n<option value=\\\\\"smalltext\\\\\">信息内容</option>\r\n<option value=\\\\\"myarea\\\\\">所在地</option>\r\n</select></td>\r\n</tr>\r\n<tr>\r\n<td><select name=\\\\\"classid\\\\\">\r\n<option value=\\\\''9\\\\''>所有分类</option>\r\n<option value=\\\\''10\\\\''>|-房屋信息</option>\r\n<option value=\\\\''11\\\\'' >&nbsp;&nbsp;|-房屋求租</option>\r\n<option value=\\\\''12\\\\'' >&nbsp;&nbsp;|-房屋出租</option>\r\n<option value=\\\\''13\\\\'' >&nbsp;&nbsp;|-房屋求购</option>\r\n<option value=\\\\''14\\\\'' >&nbsp;&nbsp;|-房屋出售</option>\r\n<option value=\\\\''15\\\\'' >&nbsp;&nbsp;|-办公用房</option>\r\n<option value=\\\\''16\\\\'' >&nbsp;&nbsp;|-旺铺门面</option>\r\n<option value=\\\\''17\\\\''>|-跳蚤市场</option>\r\n<option value=\\\\''18\\\\'' >&nbsp;&nbsp;|-电脑配件</option>\r\n<option value=\\\\''19\\\\'' >&nbsp;&nbsp;|-电器数码</option>\r\n<option value=\\\\''20\\\\'' >&nbsp;&nbsp;|-通讯产品</option>\r\n<option value=\\\\''21\\\\'' >&nbsp;&nbsp;|-居家用品</option>\r\n<option value=\\\\''22\\\\''>|-同城生活</option>\r\n<option value=\\\\''23\\\\'' >&nbsp;&nbsp;|-本地新闻</option>\r\n<option value=\\\\''24\\\\'' >&nbsp;&nbsp;|-购物打折</option>\r\n<option value=\\\\''25\\\\'' >&nbsp;&nbsp;|-旅游活动</option>\r\n<option value=\\\\''26\\\\'' >&nbsp;&nbsp;|-便民告示</option>\r\n<option value=\\\\''27\\\\''>|-求职招聘</option>\r\n<option value=\\\\''28\\\\'' >&nbsp;&nbsp;|-工程技术</option>\r\n<option value=\\\\''29\\\\'' >&nbsp;&nbsp;|-财务会计</option>\r\n<option value=\\\\''30\\\\'' >&nbsp;&nbsp;|-餐饮行业</option>\r\n<option value=\\\\''31\\\\'' >&nbsp;&nbsp;|-经营管理</option>\r\n</select>\r\n<input name=\\\\\"Submit2\\\\\" type=\\\\\"image\\\\\" value=\\\\\"搜索\\\\\" src=\\\\\"[!--news.url--]skin/default/images/search.gif\\\\\" />　\r\n[<a href=\\\\\"[!--news.url--]e/DoInfo/ChangeClass.php?mid=8\\\\\" target=\\\\\"_blank\\\\\">发布信息</a>]</td>\r\n</tr>\r\n</table>\r\n</form></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>地区导航</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[!--temp.infoarea--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>分类导航</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[!--temp.infoclassnav--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>热门点击</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ol class=\\\\\"rank\\\\\">\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,40,0,1,10,0[/ecmsinfo] \r\n</ol></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0');");
E_D("replace into `cn_enewsclasstemp` values('3','会员服务区封面模板','[!--temp.header--]\r\n        <div class=\\\\\"content\\\\\"> \r\n            <div class=\\\\\"main\\\\\">\r\n            <!-- BEGIN CONTENT AREA -->\r\n                <div class=\\\\\"list_main\\\\\">\r\n                    [!--temp.left--]\r\n                    <div class=\\\\\"list_middle\\\\\">\r\n                        <div class=\\\\\"intro_title\\\\\">\r\n                            <div class=\\\\\"crumb\\\\\">\r\n                                位置：[!--newsnav--]\r\n                            </div>\r\n                            <div id=\\\\\"intro_title_wrap\\\\\">点击展开栏目简介</div>\r\n                            <div class=\\\\\"clear\\\\\"></div>\r\n                        </div>\r\n                        <div class=\\\\\"clear\\\\\"></div>\r\n                        <div class=\\\\\"intro_text\\\\\">\r\n                            <pre>[!--class.intro--]</pre>\r\n                        </div>\r\n                        <div class=\\\\\"clear\\\\\"></div>\r\n                        <ul class=\\\\\"list_ul\\\\\">\r\n                            请选择左侧导航选择对应的栏目进入\r\n                        </ul>\r\n                    </div>\r\n                    [!--temp.right--]\r\n                    <div class=\\\\\"clear\\\\\"></div>\r\n                </div>\r\n             <div class=\\\\\"clear\\\\\"></div>\r\n            <!-- END CONTENT AREA -->\r\n            </div>\r\n        </div>\r\n    [!--temp.footer--]','0');");
E_D("replace into `cn_enewsclasstemp` values('4','wap首页（封面）模板','[!--temp.mheader--]\r\n		<!-- //输出模块样式css -->\r\n		<style id=\\\\''mobiStyleModule\\\\''>\r\n			#module303 {border:none;} #module303 {padding:0px;} #module303 .formMiddle303{border:none;}\r\n			#module303 .formMiddle303{padding:0px;} #module303 .formBannerTitle303{border:none;}\r\n			#module303 .formBannerTitle303{padding:0px;} #module303 {background:none;}\r\n			#module303 .formMiddle303 {background:none;} #module303 .g_background{background:none;}\r\n			#module303 .formMiddle303 .formMiddleCenter303{background:none;} #module303\r\n			.formMiddleContent303{background:none;}\r\n		</style>\r\n		<style id=\\\\''mobiStyleNav\\\\'' type=\\\\''text/css\\\\''>\r\n			.open .navItem:nth-child(2) {transition-delay: 160ms;} .open .navItem:nth-child(4)\r\n			{transition-delay: 240ms;} .open .navItem:nth-child(6) {transition-delay:\r\n			320ms;} .open .navItem:nth-child(8) {transition-delay: 400ms;} .open .navItem:nth-child(10)\r\n			{transition-delay: 480ms;} .open .navItem:nth-child(12) {transition-delay:\r\n			560ms;} .open .navItem:nth-child(14) {transition-delay: 640ms;} .open .navItem:nth-child(16)\r\n			{transition-delay: 720ms;} .open .navItem:nth-child(18) {transition-delay:\r\n			800ms;}\r\n		</style>\r\n		<style id=\\\\''mobiCubeStyleModule\\\\''>\r\n			#module303{overflow:hidden;}\r\n		</style>\r\n		<style id=\\\\''mobiSearchStyleModule\\\\''>\r\n		</style>\r\n		<!-- 系统特殊隐藏栏目隐藏头部、banner -->\r\n	</head>\r\n	<body faiscoMobi=\\\\\"true\\\\\" id=\\\\\"g_body\\\\\" class=\\\\\"g_locale2052 mobiCol3\\\\\">\r\n		<div class=\\\\\"webLeft\\\\\">\r\n		</div>\r\n		<div id=\\\\\"g_web\\\\\" class=\\\\\"g_web\\\\\">\r\n			<!-- this is loading -->\r\n			[!--temp.mmenu--]\r\n			<div id=\\\\\"webBannerBox\\\\\" class=\\\\\"webBannerBox \\\\\">\r\n				<div id=\\\\''webBanner\\\\'' class=\\\\''webBanner\\\\''>\r\n					<div id=\\\\''bannerSwipe\\\\'' class=\\\\''swipe\\\\''>\r\n						<div class=\\\\''bannerSwipeContainer defaultBanner\\\\''>\r\n							<div id=\\\\''bannerItem240003\\\\''><a href=\\\\\"http://www.baidu.com\\\\\"><div vheight=\\\\''300\\\\'' vwidth=\\\\''640\\\\'' class=\\\\''bannerImageDiv systemtBanner\\\\'' style=\\\\''background-image:url(http://mo.faidns.com/image/banner/240003.jpg);\\\\''/></div></a></div>\r\n							<div id=\\\\''bannerItem230004\\\\''><a href=\\\\\"http://www.baidu.com\\\\\"><div vheight=\\\\''300\\\\'' vwidth=\\\\''640\\\\'' class=\\\\''bannerImageDiv systemtBanner\\\\'' style=\\\\''background-image:url(http://mo.faidns.com/image/banner/230004.jpg);\\\\''/></div></a></div>\r\n							<div id=\\\\''bannerItem250001\\\\''><a href=\\\\\"http://www.baidu.com\\\\\"><div vheight=\\\\''300\\\\'' vwidth=\\\\''640\\\\'' class=\\\\''bannerImageDiv systemtBanner\\\\'' style=\\\\''background-image:url(http://mo.faidns.com/image/banner/250001.jpg);\\\\''/></div></a></div>\r\n							<div id=\\\\''bannerItem210002\\\\''><a href=\\\\\"http://www.baidu.com\\\\\"><div vheight=\\\\''300\\\\'' vwidth=\\\\''640\\\\'' class=\\\\''bannerImageDiv systemtBanner\\\\'' style=\\\\''background-image:url(http://mo.faidns.com/image/banner/210002.jpg);\\\\''/></div></a></div>\r\n							<div id=\\\\''bannerItem190006\\\\''><a href=\\\\\"http://www.baidu.com\\\\\"><div vheight=\\\\''300\\\\'' vwidth=\\\\''640\\\\'' class=\\\\''bannerImageDiv systemtBanner\\\\'' style=\\\\''background-image:url(http://mo.faidns.com/image/banner/190006.jpg);\\\\''/></div></a></div>\r\n						</div>\r\n						<div id=\\\\''bannerBullet\\\\'' class=\\\\''bannerBullet\\\\''>\r\n							<ul id=\\\\''bullets\\\\'' class=\\\\''bullets\\\\''>\r\n								<li class=\\\\''on\\\\''></li>\r\n								<li></li>\r\n								<li></li>\r\n								<li></li>\r\n								<li></li>\r\n							</ul>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n			<div id=\\\\\"webContainerBox\\\\\" class=\\\\\"webContainerBox\\\\\">\r\n				<div id=\\\\\"webModuleContainer\\\\\" class=\\\\\"webModuleContainer\\\\\">\r\n					<div id=\\\\''module303\\\\'' _headerHiden=\\\\''1\\\\'' class=\\\\''form Handle template344 formStyle31 moduleStyle6\\\\''\r\n					_autoHeight=\\\\''1\\\\''>\r\n						<div style=\\\\''display:none;\\\\'' class=\\\\''formBannerTitle formBannerTitle303\\\\''>\r\n							<div class=\\\\''titleLeft titleLeft303\\\\''>\r\n							</div>\r\n							<div class=\\\\''titleCenter titleCenter303\\\\''>\r\n								<div class=\\\\''titleText titleText303\\\\''>\r\n									<div class=\\\\''titleTextIcon icon-titleText\\\\''>\r\n										&nbsp;\r\n									</div>\r\n									<div class=\\\\''textContent\\\\''>\r\n									</div>\r\n								</div>\r\n								<div class=\\\\''formBannerMore formBannerMore303\\\\''>\r\n								</div>\r\n							</div>\r\n							<div class=\\\\''titleRight titleRight303\\\\''>\r\n							</div>\r\n						</div>\r\n						<div class=\\\\''formMiddle formMiddle303\\\\''>\r\n							<div class=\\\\''middleLeft middleLeft303\\\\''>\r\n							</div>\r\n							<div class=\\\\''middleCenter middleCenter303\\\\''>\r\n								<div class=\\\\''formMiddleContent formMiddleContent303 moduleContent\\\\''>\r\n									<div class=\\\\''cubeNavigationArea cubeNavigationArea6\\\\'' value=\\\\''6\\\\'' id=\\\\''cubeNavigation303\\\\''>\r\n										<div class=\\\\''cubeLink cubeLink1 \\\\'' id=\\\\''cubeNavigation303_cubeLink1\\\\'' linkid=\\\\''1\\\\''>\r\n											<a class=\\\\''cubeLink_a \\\\'' href=\\\\''<?=\$class_r[48][\\\\''classurl\\\\'']?>/\\\\'' style=\\\\''cursor:default;\\\\'' id=\\\\''cubeLink_a1_cubeNav303\\\\''>\r\n											<div class=\\\\''cubeLink_bg\\\\''></div><div class=\\\\''cubeLink_curtain\\\\''></div><div class=\\\\''cubeLink_ico icon-cube\\\\''></div>\r\n											<div class=\\\\''cubeLink_text g_link\\\\''><div class=\\\\''cubeLink_text_p \\\\''>绝密资料<p class=\\\\''cubeLink_subText_p\\\\''></p>\r\n											</div></div>\r\n											</a>\r\n										</div>\r\n										<div class=\\\\''cubeLink cubeLink2 \\\\'' id=\\\\''cubeNavigation303_cubeLink2\\\\'' linkid=\\\\''2\\\\''>\r\n											<a class=\\\\''cubeLink_a \\\\'' href=\\\\''[!--news.url--]e/wap/list.php?classid=23&style=0&bclassid=5\\\\'' style=\\\\''cursor:default;\\\\'' id=\\\\''cubeLink_a2_cubeNav303\\\\''>\r\n											<div class=\\\\''cubeLink_bg\\\\''></div><div class=\\\\''cubeLink_curtain\\\\''></div><div class=\\\\''cubeLink_ico icon-cube\\\\''></div>\r\n											<div class=\\\\''cubeLink_text g_link\\\\''><div class=\\\\''cubeLink_text_p \\\\''>创意恶搞<p class=\\\\''cubeLink_subText_p\\\\''></p>\r\n											</div></div>\r\n											</a>\r\n										</div>\r\n										<div class=\\\\''cubeLink cubeLink3 \\\\'' id=\\\\''cubeNavigation303_cubeLink3\\\\'' linkid=\\\\''3\\\\''>\r\n											<a class=\\\\''cubeLink_a \\\\'' href=\\\\''[!--news.url--]e/wap/list.php?classid=40&style=0&bclassid=5\\\\'' style=\\\\''cursor:default;\\\\'' id=\\\\''cubeLink_a3_cubeNav303\\\\''>\r\n											<div class=\\\\''cubeLink_bg\\\\''></div><div class=\\\\''cubeLink_curtain\\\\''></div><div class=\\\\''cubeLink_ico icon-cube\\\\''></div>\r\n											<div class=\\\\''cubeLink_text g_link\\\\''><div class=\\\\''cubeLink_text_p \\\\''>精品福利<p class=\\\\''cubeLink_subText_p\\\\''></p>\r\n											</div></div>\r\n											</a>\r\n										</div>\r\n										<div class=\\\\''cubeLink cubeLink4 \\\\'' id=\\\\''cubeNavigation303_cubeLink4\\\\'' linkid=\\\\''4\\\\''>\r\n											<a class=\\\\''cubeLink_a \\\\'' href=\\\\''<?=\$class_r[52][\\\\''classurl\\\\'']?>/\\\\'' style=\\\\''cursor:default;\\\\'' id=\\\\''cubeLink_a4_cubeNav303\\\\''>\r\n											<div class=\\\\''cubeLink_bg\\\\''></div><div class=\\\\''cubeLink_curtain\\\\''></div><div class=\\\\''cubeLink_ico icon-cube\\\\''></div>\r\n											<div class=\\\\''cubeLink_text g_link\\\\''><div class=\\\\''cubeLink_text_p \\\\''>产品展示<p class=\\\\''cubeLink_subText_p\\\\''></p>\r\n											</div></div>\r\n											</a>\r\n										</div>\r\n										<div class=\\\\''cubeLink cubeLink5 \\\\'' id=\\\\''cubeNavigation303_cubeLink5\\\\'' linkid=\\\\''5\\\\''>\r\n											<a class=\\\\''cubeLink_a \\\\'' href=\\\\''[!--news.url--]e/wap/search.php\\\\'' style=\\\\''cursor:default;\\\\'' id=\\\\''cubeLink_a5_cubeNav303\\\\''>\r\n											<div class=\\\\''cubeLink_bg\\\\''></div><div class=\\\\''cubeLink_curtain\\\\''></div><div class=\\\\''cubeLink_ico icon-cube\\\\''></div>\r\n											<div class=\\\\''cubeLink_text g_link\\\\''><div class=\\\\''cubeLink_text_p \\\\''>搜索<p class=\\\\''cubeLink_subText_p\\\\''></p>\r\n											</div></div>\r\n											</a>\r\n										</div>\r\n									</div>\r\n								</div>\r\n							</div>\r\n							<div class=\\\\''middleRight middleRight303\\\\''>\r\n							</div>\r\n						</div>\r\n					</div>\r\n					<div id=\\\\''module302\\\\'' class=\\\\''form Handle  formStyle6 \\\\'' _autoHeight=\\\\''1\\\\''>\r\n						<div class=\\\\''formBannerTitle formBannerTitle302\\\\''>\r\n							<div class=\\\\''titleLeft titleLeft302\\\\''>\r\n							</div>\r\n							<div class=\\\\''titleCenter titleCenter302\\\\''>\r\n								<div class=\\\\''titleText titleText302\\\\''>\r\n									<div class=\\\\''titleTextIcon icon-titleText\\\\''>\r\n										&nbsp;\r\n									</div>\r\n									<div class=\\\\''textContent\\\\''>\r\n										站点公告\r\n									</div>\r\n								</div>\r\n								<div class=\\\\''formBannerMore formBannerMore302\\\\''>\r\n									<a class=\\\\''titleMoreLink titleMoreLink302\\\\'' href=\\\\\"<?=\$class_r[51][\\\\''classurl\\\\'']?>/\\\\\"><span class=\\\\''titleMoreIcon icon-titleMore titleMoreIcon302\\\\''>&nbsp;</span><span class=\\\\''titleMore titleMore302\\\\''>更多</span></a>\r\n								</div>\r\n							</div>\r\n							<div class=\\\\''titleRight titleRight302\\\\''>\r\n							</div>\r\n						</div>\r\n						<div class=\\\\''formMiddle formMiddle302\\\\''>\r\n							<div class=\\\\''middleLeft middleLeft302\\\\''>\r\n							</div>\r\n							<div class=\\\\''middleCenter middleCenter302\\\\''>\r\n								<div class=\\\\''formMiddleContent formMiddleContent302 moduleContent\\\\''>\r\n									<div class=\\\\''newsList\\\\'' id=\\\\''newsList302\\\\''>\r\n										[e:loop={\\\\''51\\\\'',3,0,0}]\r\n										<div class=\\\\''newsLine line icon-gline wWLine firstClass wholeLine\\\\''>\r\n											<div id=\\\\''lineBody5\\\\'' class=\\\\''lineBody lineBodyTable\\\\''>\r\n												<div class=\\\\''linkTableCell\\\\''>\r\n													<div class=\\\\''linkTable\\\\''>\r\n														<a hidefocus=\\\\''true\\\\'' href=\\\\''<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\'' target=\\\\\"_self\\\\\"><?=\$bqr[\\\\''title\\\\'']?></a>\r\n													</div>\r\n												</div>\r\n											</div>\r\n										</div>\r\n										[/e:loop]\r\n									</div>\r\n								</div>\r\n							</div>\r\n							<div class=\\\\''middleRight middleRight302\\\\''>\r\n							</div>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n			[!--temp.mfooter--]','0');");

@include("../../inc/footer.php");
?>