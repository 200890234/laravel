<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsfeedbackclass`;");
E_C("CREATE TABLE `cn_enewsfeedbackclass` (
  `bid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(60) NOT NULL DEFAULT '',
  `btemp` mediumtext NOT NULL,
  `bzs` varchar(255) NOT NULL DEFAULT '',
  `enter` text NOT NULL,
  `mustenter` text NOT NULL,
  `filef` varchar(255) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `checkboxf` text NOT NULL,
  `usernames` text NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsfeedbackclass` values('1','默认反馈分类','[!--cp.header--]<table width=100% align=center cellpadding=3 cellspacing=1 bgcolor=\\\\''#DBEAF5\\\\''><form name=\\\\''feedback\\\\'' method=\\\\''post\\\\'' enctype=\\\\''multipart/form-data\\\\'' action=\\\\''../../enews/index.php\\\\''><input name=\\\\''enews\\\\'' type=\\\\''hidden\\\\'' value=\\\\''AddFeedback\\\\''><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>您的姓名</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''name\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''>(*)</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>联系邮箱</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''email\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''></td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>联系电话</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''tel\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''>(*)</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>网站</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''website\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''></td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>联系地址</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''info_id\\\\'' type=\\\\''text\\\\'' value=\\\\''0\\\\'' size=\\\\''11\\\\''></td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>信息标题</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''title\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''>(*)</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>信息内容</td><td bgcolor=\\\\''ffffff\\\\''><textarea name=\\\\''saytext\\\\'' cols=\\\\''60\\\\'' rows=\\\\''12\\\\''></textarea>(*)</td></tr><tr><td bgcolor=\\\\''ffffff\\\\''></td><td bgcolor=\\\\''ffffff\\\\''><input type=\\\\''submit\\\\'' name=\\\\''submit\\\\'' value=\\\\''提交\\\\''></td></tr></form></table>[!--cp.footer--]','','您的姓名<!--field--->name<!--record-->联系邮箱<!--field--->email<!--record-->联系电话<!--field--->tel<!--record-->网站<!--field--->website<!--record-->联系地址<!--field--->info_id<!--record-->信息标题<!--field--->title<!--record-->信息内容<!--field--->saytext<!--record-->',',name,tel,title,saytext,',',','0',',','');");
E_D("replace into `cn_enewsfeedbackclass` values('2','信息报错','[!--cp.header--]<div class=\\\\\"feedback\\\\\">\r\n                            <form name=\\\\''feedback\\\\'' method=\\\\''post\\\\'' enctype=\\\\''multipart/form-data\\\\'' action=\\\\''../../enews/index.php\\\\''>\r\n                                <input name=\\\\''enews\\\\'' type=\\\\''hidden\\\\'' value=\\\\''AddFeedback\\\\''>\r\n                                <input name=\\\\''info_id\\\\'' type=\\\\''hidden\\\\'' value=\\\\''<?php echo \$_GET[\\\\\"info_id\\\\\"]; ?>\\\\''>\r\n                                <input name=\\\\''info_url\\\\'' type=\\\\''hidden\\\\'' value=\\\\''<?php echo \$_GET[\\\\\"info_url\\\\\"]; ?>\\\\''>\r\n                                <ul>\r\n                                    <li><input type=\\\\\"text\\\\\" class=\\\\\"comment_box2 form-control\\\\\" name=\\\\\"name\\\\\" placeholder=\\\\\"姓名/昵称\\\\\"></li>\r\n                                    <li><input type=\\\\\"text\\\\\" class=\\\\\"comment_box2 form-control\\\\\" name=\\\\\"email\\\\\" placeholder=\\\\\"联系邮箱(必填)\\\\\"></li>\r\n                                    <li><input type=\\\\\"text\\\\\" class=\\\\\"comment_box2 form-control\\\\\" name=\\\\\"tel\\\\\" placeholder=\\\\\"联系电话\\\\\"></li>\r\n                                    <li><input type=\\\\\"text\\\\\" class=\\\\\"comment_box2 form-control\\\\\" name=\\\\\"title\\\\\" placeholder=\\\\\"标题\\\\\"></li>\r\n                                    <li><textarea name=\\\\\"saytext\\\\\" id=\\\\\"saytext\\\\\" class=\\\\\"form-control\\\\\" placeholder=\\\\\"详细说明(必填)\\\\\"></textarea></li>\r\n                                    <li class=\\\\\"li_feedsub\\\\\" style=\\\\\"padding-bottom:10px;\\\\\"><input type=\\\\\"submit\\\\\" name=\\\\\"submit\\\\\" class=\\\\\"feedback_submit\\\\\" value=\\\\\"提  交\\\\\"></li>\r\n                                </ul>\r\n                            </form>\r\n                        </div>[!--cp.footer--]','','姓名/昵称<!--field--->name<!--record-->联系邮箱<!--field--->email<!--record-->联系电话<!--field--->tel<!--record-->信息ID<!--field--->info_id<!--record-->信息地址<!--field--->info_url<!--record-->标题<!--field--->title<!--record-->详细说明<!--field--->saytext<!--record-->',',email,info_id,info_url,saytext,',',','0',',','');");
E_D("replace into `cn_enewsfeedbackclass` values('3','请求删帖','[!--cp.header--]<div class=\\\\\"feedback\\\\\">\r\n                            <form name=\\\\''feedback\\\\'' method=\\\\''post\\\\'' enctype=\\\\''multipart/form-data\\\\'' action=\\\\''../../enews/index.php\\\\''>\r\n                                <input name=\\\\''enews\\\\'' type=\\\\''hidden\\\\'' value=\\\\''AddFeedback\\\\''>\r\n                                <input name=\\\\''info_id\\\\'' type=\\\\''hidden\\\\'' value=\\\\''<?php echo \$_GET[\\\\\"info_id\\\\\"]; ?>\\\\''>\r\n                                <ul>\r\n                                    <li><input type=\\\\\"text\\\\\" class=\\\\\"comment_box2 form-control\\\\\" name=\\\\\"name\\\\\" placeholder=\\\\\"姓名/昵称\\\\\"></li>\r\n                                    <li><input type=\\\\\"text\\\\\" class=\\\\\"comment_box2 form-control\\\\\" name=\\\\\"email\\\\\" placeholder=\\\\\"联系邮箱(必填)\\\\\"></li>\r\n                                    <li><input type=\\\\\"text\\\\\" class=\\\\\"comment_box2 form-control\\\\\" name=\\\\\"tel\\\\\" placeholder=\\\\\"联系电话\\\\\"></li>\r\n                                    <li><input type=\\\\\"text\\\\\" class=\\\\\"comment_box2 form-control\\\\\" name=\\\\\"title\\\\\" placeholder=\\\\\"标题\\\\\"></li>\r\n                                    <li><textarea name=\\\\\"saytext\\\\\" id=\\\\\"saytext\\\\\" class=\\\\\"form-control\\\\\" placeholder=\\\\\"删除原因(必填)\\\\\"></textarea></li>\r\n                                    <li class=\\\\\"li_feedsub\\\\\" style=\\\\\"padding-bottom:10px;\\\\\"><input type=\\\\\"submit\\\\\" name=\\\\\"submit\\\\\" class=\\\\\"feedback_submit\\\\\" value=\\\\\"提  交\\\\\"></li>\r\n                                </ul>\r\n                            </form>\r\n                        </div>[!--cp.footer--]','','姓名/昵称<!--field--->name<!--record-->联系邮箱<!--field--->email<!--record-->联系电话<!--field--->tel<!--record-->信息ID<!--field--->info_id<!--record-->标题<!--field--->title<!--record-->删除原因<!--field--->saytext<!--record-->',',email,info_id,title,saytext,',',','0',',','');");
E_D("replace into `cn_enewsfeedbackclass` values('4','wap站留言板','[!--temp.mheader--]\r\n<!-- //输出模块样式css -->\r\n<style id=\\\\''mobiStyleModule\\\\''>\r\n</style>\r\n<style id=\\\\''mobiStyleNav\\\\'' type=\\\\''text/css\\\\''>\r\n.open .navItem:nth-child(2) {transition-delay: 160ms;} \r\n.open .navItem:nth-child(4) {transition-delay: 240ms;} \r\n.open .navItem:nth-child(6) {transition-delay: 320ms;} \r\n.open .navItem:nth-child(8) {transition-delay: 400ms;} \r\n.open .navItem:nth-child(10) {transition-delay: 480ms;} \r\n.open .navItem:nth-child(12) {transition-delay: 560ms;} \r\n.open .navItem:nth-child(14) {transition-delay: 640ms;} \r\n.open .navItem:nth-child(16) {transition-delay: 720ms;} \r\n.open .navItem:nth-child(18) {transition-delay: 800ms;}\r\n</style>\r\n<style id=\\\\''mobiCubeStyleModule\\\\''>\r\n</style>\r\n<style id=\\\\''mobiSearchStyleModule\\\\''>\r\n</style>\r\n<!-- 系统特殊隐藏栏目隐藏头部、banner -->\r\n</head>\r\n<body faiscomobi=\\\\\"true\\\\\" id=\\\\\"g_body\\\\\" class=\\\\\"g_locale2052 mobiCol9\\\\\">\r\n<div class=\\\\\"webLeft\\\\\">\r\n</div>\r\n<div id=\\\\\"g_web\\\\\" class=\\\\\"g_web\\\\\">\r\n	<!-- this is loading  -->\r\n	[!--temp.mmenuadd--]\r\n	<div id=\\\\\"webBannerBox\\\\\" class=\\\\\"webBannerBox \\\\\">\r\n	</div>\r\n	<div id=\\\\\"webContainerBox\\\\\" class=\\\\\"webContainerBox\\\\\">\r\n		<div id=\\\\\"webModuleContainer\\\\\" class=\\\\\"webModuleContainer\\\\\">\r\n			<div id=\\\\''module7\\\\'' class=\\\\''form Handle formStyle10 \\\\'' _autoheight=\\\\''1\\\\''>\r\n				<div class=\\\\''formBannerTitle formBannerTitle7\\\\''>\r\n					<div class=\\\\''titleLeft titleLeft7\\\\''>\r\n					</div>\r\n					<div class=\\\\''titleCenter titleCenter7\\\\''>\r\n						<div class=\\\\''titleText titleText7\\\\''>\r\n							<div class=\\\\''titleTextIcon icon-titleText\\\\''>\r\n								&nbsp;\r\n							</div>\r\n							<div class=\\\\''textContent\\\\''>\r\n								留言板\r\n							</div>\r\n						</div>\r\n						<div class=\\\\''formBannerMore formBannerMore7\\\\''>\r\n						</div>\r\n					</div>\r\n					<div class=\\\\''titleRight titleRight7\\\\''>\r\n					</div>\r\n				</div>\r\n				<div class=\\\\''formMiddle formMiddle7\\\\''>\r\n					<div class=\\\\''middleLeft middleLeft7\\\\''>\r\n					</div>\r\n					<div class=\\\\''middleCenter middleCenter7\\\\''>\r\n						<div class=\\\\''formMiddleContent formMiddleContent7 moduleContent\\\\''>\r\n							<div class=\\\\''msgBoard\\\\''>\r\n								<div class=\\\\''msgTop\\\\''>\r\n									<div class=\\\\''g_globalLine mtitle\\\\''>\r\n										<div class=\\\\''mbTitle publishIcon\\\\''>\r\n											<span class=\\\\''icon-publishIcon\\\\''></span>发表留言\r\n										</div>\r\n									</div>\r\n									<div class=\\\\''noticeArea\\\\''>\r\n										<div class=\\\\''notice\\\\'' style=\\\\''display:none;\\\\''>\r\n										</div>\r\n									</div>\r\n									<form name=\\\\''feedback\\\\'' id=\\\\''feedwap\\\\'' method=\\\\''post\\\\'' enctype=\\\\''multipart/form-data\\\\'' action=\\\\''../../enews/index.php\\\\''>\r\n										<input name=\\\\''enews\\\\'' type=\\\\''hidden\\\\'' value=\\\\''AddFeedback\\\\''>\r\n										<div class=\\\\''g_globalLine\\\\''>\r\n											<input id=\\\\''reqName\\\\'' name=\\\\''name\\\\'' value=\\\\''\\\\'' type=\\\\''text\\\\'' maxlength=\\\\''50 \\\\'' placeholder=\\\\''姓名(必填)\\\\'' class=\\\\''msg_isMust msg_ipt g_input\\\\''/>\r\n											<span class=\\\\''icon-mnameIcon\\\\''></span>\r\n										</div>\r\n										<div class=\\\\''g_globalLine\\\\''>\r\n											<input id=\\\\''title\\\\'' name=\\\\''title\\\\'' value=\\\\''\\\\'' type=\\\\''text\\\\'' maxlength=\\\\''50 \\\\'' placeholder=\\\\''标题(必填)\\\\'' class=\\\\''msg_isMust msg_ipt g_input\\\\''/>\r\n											<span class=\\\\''icon-mnameIcon\\\\''></span>\r\n										</div>\r\n										<div class=\\\\''g_globalLine\\\\''>\r\n											<input id=\\\\''reqEmail\\\\'' name=\\\\''email\\\\'' value=\\\\''\\\\'' type=\\\\''email\\\\'' maxlength=\\\\''50 \\\\'' placeholder=\\\\''电子邮件\\\\'' class=\\\\'' msg_ipt g_input\\\\''/>\r\n											<span class=\\\\''icon-memailIcon\\\\''></span>\r\n										</div>\r\n										<div class=\\\\''g_globalLine\\\\''>\r\n											<input id=\\\\''reqPhone\\\\'' type=\\\\''tel\\\\'' name=\\\\''tel\\\\'' value=\\\\''\\\\'' maxlength=\\\\''50 \\\\'' placeholder=\\\\''联系电话\\\\'' class=\\\\'' msg_ipt g_input\\\\''/>\r\n											<span class=\\\\''icon-mphoneIcon\\\\''></span>\r\n										</div>\r\n										<div class=\\\\''g_globalLine\\\\''>\r\n											<textarea id=\\\\''reqContent\\\\'' name=\\\\''saytext\\\\'' class=\\\\''g_textArea msg_textArea\\\\'' maxlength=\\\\''200\\\\'' placeholder=\\\\''内容\\\\''/></textarea>\r\n											<span class=\\\\''icon-mmsgIcon\\\\''></span>\r\n										</div>\r\n										<div style=\\\\''clear:both\\\\''>\r\n										</div>\r\n										<!-- <div class=\\\\''g_globalLine\\\\''>\r\n											<input id=\\\\''msgBoardCaptcha\\\\'' type=\\\\''text\\\\'' class=\\\\''captchaText g_input\\\\'' maxlength=\\\\''4\\\\'' placeholder=\\\\''请输入验证码\\\\''/>\r\n											<img id=\\\\''msgBoardCaptchaImg\\\\'' class=\\\\''captchaImg\\\\'' src=\\\\''validateCode.jsp?939\\\\'' onclick=\\\\''Mobi.changeValidateCode(jm(\\\\\"#msgBoardCaptchaImg\\\\\"))\\\\''/></span>\r\n										</div> -->\r\n										<div class=\\\\''g_globalLine \\\\''>\r\n											<input type=\\\\''button\\\\'' name=\\\\''submit\\\\'' id=\\\\\"subwap\\\\\" class=\\\\''g_button sendIcon msgSubmitButton submitIcon\\\\'' onclick=\\\\\"\\\\\" value=\\\\''提交\\\\''/>\r\n											<span class=\\\\''mustSpan\\\\''>&nbsp&nbsp</span>\r\n										</div>\r\n									</form>\r\n								</div>\r\n								<div class=\\\\''msgBottom\\\\''>\r\n									<div class=\\\\''msgBottomTop\\\\''>\r\n										<div class=\\\\''g_globalLine mtitle\\\\''>\r\n											<div class=\\\\''mbTitle userMsgIcon\\\\'' style=\\\\''display: inline-block;\\\\''>\r\n												<span class=\\\\''icon-userMsgIcon\\\\''></span>用户留言\r\n											</div>\r\n										</div>\r\n									</div>\r\n								</div>\r\n							</div>\r\n						</div>\r\n					</div>\r\n					<div class=\\\\''middleRight middleRight7\\\\''>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n	[!--temp.mfooter--]\r\n	<script>\r\n		jm(function(){\r\n                        jm(\\\\\".pageTitle\\\\\").text(\\\\\"留言板\\\\\");\r\n			jm(\\\\\"#subwap\\\\\").on(\\\\\"click\\\\\",function(){\r\n				var name=jm(\\\\''#reqName\\\\'').val();\r\n				var content=jm(\\\\''#reqContent\\\\'').val();\r\n				var title=jm(\\\\''#title\\\\'').val();\r\n				if(!name){\r\n					jm(\\\\\".notice\\\\\").text(\\\\\"请输入姓名\\\\\").show();\r\n					//jm(\\\\\"#reqName\\\\\").focus();\r\n					return false;\r\n				}else if(!content){\r\n					jm(\\\\\".notice\\\\\").text(\\\\\"请输入內容\\\\\").show();\r\n					//jm(\\\\\"#reqContent\\\\\").focus();\r\n					return false;\r\n				}else if(!title){\r\n					jm(\\\\\".notice\\\\\").text(\\\\\"请输入标题\\\\\").show();\r\n					//jm(\\\\\"#title\\\\\").focus();\r\n					return false;\r\n				};\r\n				jm.ajax({  \r\n                      type: \\\\\"POST\\\\\",  \r\n                      url: \\\\\"[!--news.url--]e/enews/index.php\\\\\",  \r\n                      data: jm(\\\\''#feedwap\\\\'').serialize(),  \r\n                      success:function(data){  \r\n                    	alert(\\\\\"提交成功\\\\\");\r\n                 	  }\r\n                })\r\n			})\r\n		})\r\n	</script>','','您的姓名<!--field--->name<!--record-->联系邮箱<!--field--->email<!--record-->联系电话<!--field--->tel<!--record-->标题<!--field--->title<!--record-->信息内容<!--field--->saytext<!--record-->',',name,title,saytext,',',','0',',','');");

@include("../../inc/footer.php");
?>