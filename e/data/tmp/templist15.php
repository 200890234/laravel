<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
	<head>
		<title>[!--pagetitle--]</title>
                <base href="http://cn.yetpress.com/" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
		/>
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=2.0,user-scalable=1"> -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="layoutmode" content="standard">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="renderer" content="webkit">
		<!--uc浏览器判断到页面上文字居多时，会自动放大字体优化移动用户体验。添加以下头部可以禁用掉该优化-->
		<meta name="wap-font-scale" content="no">
		<meta content="telephone=no" name="format-detection" />
		<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
                <meta name="keywords" content="[!--pagekey--]">
                <meta name="description" content="[!--pagedes--]">
		<script type="text/javascript">
		//html root的字体计算应该放在最前面，这样计算就不会有误差了/
		var _htmlFontSize = (function() {
			var clientWidth = document.documentElement ? document.documentElement.clientWidth : document.body.clientWidth;
			if (clientWidth > 640) clientWidth = 640;
			document.documentElement.style.fontSize = clientWidth * 1 / 16 + "px";
			return clientWidth * 1 / 16;
		})();
		</script>
		<link rel="stylesheet" type="text/css" href="[!--news.url--]skin/yetpress_wap/css/base.min.css" title="default"/>
		<link rel="stylesheet" id="mobiStyleTemplateCss" type="text/css" href="[!--news.url--]skin/yetpress_wap/css/344.min.css"/>
		<link rel="stylesheet" id="mobiCubeNavigationCss" type="text/css" href="[!--news.url--]skin/yetpress_wap/css/cubeNavigation.min.css"/>
		<!-- //输出模块样式css -->
		<style id='mobiStyleModule'>
			#module303 {border:none;} #module303 {padding:0px;} #module303 .formMiddle303{border:none;}
			#module303 .formMiddle303{padding:0px;} #module303 .formBannerTitle303{border:none;}
			#module303 .formBannerTitle303{padding:0px;} #module303 {background:none;}
			#module303 .formMiddle303 {background:none;} #module303 .g_background{background:none;}
			#module303 .formMiddle303 .formMiddleCenter303{background:none;} #module303
			.formMiddleContent303{background:none;}
		</style>
		<style id='mobiStyleNav' type='text/css'>
			.open .navItem:nth-child(2) {transition-delay: 160ms;} .open .navItem:nth-child(4)
			{transition-delay: 240ms;} .open .navItem:nth-child(6) {transition-delay:
			320ms;} .open .navItem:nth-child(8) {transition-delay: 400ms;} .open .navItem:nth-child(10)
			{transition-delay: 480ms;} .open .navItem:nth-child(12) {transition-delay:
			560ms;} .open .navItem:nth-child(14) {transition-delay: 640ms;} .open .navItem:nth-child(16)
			{transition-delay: 720ms;} .open .navItem:nth-child(18) {transition-delay:
			800ms;}
		</style>
		<style id='mobiCubeStyleModule'>
			#module303{overflow:hidden;}
		</style>
		<style id='mobiSearchStyleModule'>
		</style>
		<!-- 系统特殊隐藏栏目隐藏头部、banner -->
	</head>
	<body faiscoMobi="true" id="g_body" class="g_locale2052 mobiCol3">
		<div class="webLeft">
		</div>
		<div id="g_web" class="g_web">
			<!-- this is loading -->
			<div id="webLoading" class="loading" style='display:none;'>
				<div id="splashscreen" class='splashscreen ui-loader'>
					<span class='ui-icon ui-icon-loading spin'>
					</span>
				</div>
			</div>
			<div id="webTopBox" class="webTopBox webDetailPage">
				<div id="webTop" class="webTop">
					<div id='navbar' class='navbar navBaseIcon'>
						<div id='navbarList' class='navbarList'>
							<div 3 id='itemSep_3' class='itemSep'> </div>
							<div id='navItem_3' class='navItem navItem_3 itemSelected icon-navItem'>
								<a href='<?=$class_r[47]['classurl']?>/' _colid='3' id='navbar_3'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>首页</span></a>
							</div>
							<div 1 id='itemSep_104' class='itemSep'> </div>
							<div id='navItem_104' class='navItem navItem_104  icon-navItem'>
								<a href='<?=$class_r[48]['classurl']?>/' _colid='104' id='navbar_104'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>绝密资料</span></a>
							</div>
							<div 6 id='itemSep_6' class='itemSep'> </div>
							<div id='navItem_7' class='navItem navItem_7  icon-navItem'>
								<a href='[!--news.url--]e/wap/list.php?classid=23&style=0&bclassid=5' _colid='7' id='navbar_7'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>创意恶搞</span></a>
							</div>
							<div 7 id='itemSep_7' class='itemSep'> </div>
							<div id='navItem_8' class='navItem navItem_8  icon-navItem'>
								<a href='[!--news.url--]e/wap/list.php?classid=40&style=0&bclassid=5' _colid='7' id='navbar_8'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>精品福利</span></a>
							</div>
							<div 7 id='itemSep_8' class='itemSep'> </div>
							<div id='navItem_6' class='navItem navItem_6  icon-navItem'>
								<a href='<?=$class_r[52]['classurl']?>/' _colid='6' id='navbar_6'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>产品展示</span></a>
							</div>
							<div 9 id='itemSep_9' class='itemSep'> </div>
							<div id='navItem_103' class='navItem navItem_103  icon-navItem'>
								<a href='<?=$class_r[51]['classurl']?>/' _colid='103' id='navbar_103'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>站点公告</span></a>
							</div>
							<div 1 id='itemSep_103' class='itemSep'> </div>
							<div id='navItem_9' class='navItem navItem_9  icon-navItem'>
								<a href='[!--news.url--]e/tool/feedback/?bid=4' _colid='9' id='navbar_9'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>留言板</span></a>
							</div>
						</div>
						<div class='navLeft icon-navLeft'>
						</div>
						<div class='navRight icon-navRight'>
						</div>
					</div>
				</div>
			</div>
			<div id="webHeaderBox" class="webHeaderBox webDetailPage">
				<div class='navButton' id='navButton'>
					<div class='navButtonPanel'>
					</div>
					<div class='menuNav'>
						<div class='menuNavTip icon-menuNavTip'>
						</div>
					</div>
				</div>
				<div id='webHeader' class='webHeader webHeaderBg'>
					<div id='header' class='header' style='padding:0px;'>
						<span class='pageLogo   ' style='display:none;' id='pageLogo' sid='0'
						pw='160' ph='160'>
							<div id='pageLogoImg' class='logoImg ' style='background-image:url(http://6416328.s21d-6.faidns.com/0/);background-size: contain;background-position: center;background-repeat: no-repeat;'>
							</div>
						</span>
						<span class='pageTitle' id='pageTitle'>
							[!--class.name--]
						</span>
					</div>
				</div>
			</div>
			<div id="webBannerBox" class="webBannerBox ">
				<div id='webBanner' class='webBanner'>
					<div id='bannerSwipe' class='swipe'>
						<div class='bannerSwipeContainer defaultBanner'>
							<div id='bannerItem240003'><div vheight='300' vwidth='640' class='bannerImageDiv systemtBanner' style='background-image:url(http://mo.faidns.com/image/banner/240003.jpg);'/></div></div>
							<div id='bannerItem230004'><div vheight='300' vwidth='640' class='bannerImageDiv systemtBanner' style='background-image:url(http://mo.faidns.com/image/banner/230004.jpg);'/></div></div>
							<div id='bannerItem250001'><div vheight='300' vwidth='640' class='bannerImageDiv systemtBanner' style='background-image:url(http://mo.faidns.com/image/banner/250001.jpg);'/></div></div>
							<div id='bannerItem210002'><div vheight='300' vwidth='640' class='bannerImageDiv systemtBanner' style='background-image:url(http://mo.faidns.com/image/banner/210002.jpg);'/></div></div>
							<div id='bannerItem190006'><div vheight='300' vwidth='640' class='bannerImageDiv systemtBanner' style='background-image:url(http://mo.faidns.com/image/banner/190006.jpg);'/></div></div>
						</div>
						<div id='bannerBullet' class='bannerBullet'>
							<ul id='bullets' class='bullets'>
								<li class='on'></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="webContainerBox" class="webContainerBox">
				<div id="webModuleContainer" class="webModuleContainer">
					<div id='module303' _headerHiden='1' class='form Handle template344 formStyle31 moduleStyle6'
					_autoHeight='1'>
						<div style='display:none;' class='formBannerTitle formBannerTitle303'>
							<div class='titleLeft titleLeft303'>
							</div>
							<div class='titleCenter titleCenter303'>
								<div class='titleText titleText303'>
									<div class='titleTextIcon icon-titleText'>
										&nbsp;
									</div>
									<div class='textContent'>
									</div>
								</div>
								<div class='formBannerMore formBannerMore303'>
								</div>
							</div>
							<div class='titleRight titleRight303'>
							</div>
						</div>
					</div>
					<?php if($GLOBALS[navclassid]==48||$GLOBALS[navclassid]==49||$GLOBALS[navclassid]==50){ ?>
					<div id="subnav">
						<a href="<?=$class_r[49]['classurl']?>/" bid="<?php echo $GLOBALS[navclassid] ?>"><button>资料列表</button></a>
						<a href="<?=$class_r[50]['classurl']?>/" bid="<?php echo $GLOBALS[navclassid] ?>"><button>免费分享</button></a>
						<div class="clear"></div>
					</div>
					<style>
						#subnav{margin:0 .25rem;margin-top:;padding-top:.6rem;}
						#subnav a{display:block;float:left;width:50%;text-align:center;}
						#subnav a button{
							width:96%;height:1.5rem;
							margin:auto;background:#8FDABA;
							border-radius:5px;border:none;
							font-size:.8rem;font-family:"microsoft yahei";
						}
					</style>
					<?php } ?>
					<div id='module302' class='form Handle  formStyle6 ' _autoHeight='1'>
						<div class='formBannerTitle formBannerTitle302'>
							<div class='titleLeft titleLeft302'>
							</div>
							<div class='titleCenter titleCenter302'>
								<style>
									.s_text{
										border:1px solid #8FDABA;
										border-radius:5px;
										background:transparent;
										margin-left: 0.2rem;
										padding:0.04rem 0.15rem;
										vertical-align: middle;
										font-size:0.7rem;
										width:7.5rem;
										height: 1rem;
									}
									.s_text::-webkit-input-placeholder { color:#f3f3f3;font-size:0.7rem }
									.s_text::-moz-placeholder { color:#f3f3f3;font-size:0.7rem } /* firefox 19+ */
									.s_text:-ms-input-placeholder { color:#f3f3f3;font-size:0.7rem } /* ie */
									.titlesec{float: left;font-size:0.9rem;}
									.icon_sou{width:1rem;height:1rem;vertical-align: middle;margin-left: 0.2rem;}
								</style>
									<form action="" method="post" id="list_search">
										<div class='titleText titleText302' style="width:auto;">
											<div class='titleTextIcon icon-titleText'>
												&nbsp;
											</div>
											<div class='titlesec'>
												文章列表
												<input type="text" class="s_text" placeholder="搜索本栏目...">
											</div>
										</div>
										<div class="titlesec">
											<input type="image" src="<?=$public_r[newsurl]?>skin/yetpress_wap/images/more.png" class="icon_sou">
										</div>
									</form>
							</div>
							<div class='titleRight titleRight302'>
							</div>
						</div>
						<style>
							.search_note{margin:0.5rem 2.5%;}
							.snote_a{float: left;}
							.snote_b{float:right;}
							.snote_b a{color:#16a086;}
						</style>
						<div class='formMiddle formMiddle302'>
							<div class='middleLeft middleLeft302'></div>
							<?php if($_GET['title']){ ?>
							<div class="search_note">
								<font class="snote_a">搜索结果：</font>
								<font class="snote_b"><a href="<?=sys_ReturnBqClassname($class_r[$GLOBALS[navclassid]],9)?>" temp1="[!--this.classlink--]">返回列表</a></font>
								<div class="clear"></div>
							</div>
							<?php } ?>
							<div class='middleCenter middleCenter302'>
								<div class='formMiddleContent formMiddleContent302 moduleContent'>
									<div class='newsList' id='newsList302'>
										[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]										
									</div>
                                                                        <?php $public_r[listpagefun]="wap_droppager";?>
									<div id="pagenation3" class="pagenation">
                                                                                [!--show.page--]
									</div>
								</div>
							</div>
							<div class='middleRight middleRight302'>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="webFooterBox" class="webFooterBox ">
				<!--图片详情Div -->
				<div id='webFooter' class='webFooter'>
					<div id='footer' class='footer'>
						<div class='bottomdiv'>
							<div class='bottom'>
								<div class='backtop' onclick='Mobi.scrollToTop("webContainerBox")'>
									top
									<b>
									</b>
								</div>
							</div>
						</div>
						<div class='technical'>
							<div class='technicalSupport'>
								<font face='Arial'>
									&copy;
								</font>
								2015&nbsp;yetpress&nbsp;版权所有
							</div>
							<div class='technicalSupport'>
								技术支持：
								<a href='http://m.faisco.com' target='_blank' hidefocus='true'>凡科建站</a>
								<a class='PcVer' href='http://www.tpress1.icoc.cc?_siteUrl' target='_blank'
								hidefocus='true'>电脑版</a>
								<a class='rep' href='http://m.faisco.com/ts.jsp?acct=tpress1' target='_blank'
								hidefocus='true'>举报</a>
							</div>
						</div>
					</div>
				</div>
				<div id="fullScreenDivCotainer" class='fullScreenDivCotainer form'>
				</div>
			</div>
			<!--设置网站的背景颜色 start-->
			<div class="webBackgroundBox ">
				<div id="webBodyBackground" class="webBackground ">
				</div>
				<div id='navExistOffPanel' class='navExistOffPanel'>
				</div>
			</div>
			<!--设置网站的背景颜色 end-->
		</div>
		<div class="webRight">
		</div>
		<script type="text/javascript" language="javascript">
		//管理态下的预览页面提前作处理
if (!false && window.top !== window.self) {
	var g_className = document.getElementById("g_body").className;
	document.getElementById("g_body").className = g_className + ' g_viewMode';
}
		</script>
		<script type="text/javascript" charset="utf-8" src="[!--news.url--]skin/yetpress_wap/js/jqmobi.min.js"> </script>
		<script type="text/javascript" charset="utf-8" src="[!--news.url--]skin/yetpress_wap/js/jqmobi_ui.min.js"> </script>
		<script id="mobiOperationJS" type="text/javascript" charset="utf-8" src="[!--news.url--]skin/yetpress_wap/js/mobi.min.js"> </script>
		<script type="text/javascript" src="[!--news.url--]skin/yetpress_wap/js/2052.min.js"></script>
		<script type="text/javascript">
	var _jsErrCahche = [];
	if (typeof Fai == 'undefined'){
		Fai = {};
		//解决页面被嵌套在iframe的场景
		Fai.top = window;
	}
	Fai.top._templateFrameId = 344;
	Fai.top._templateLayoutId = 2;
	Fai.top._mobiSiteTitleChanged = 0; 	//用于记录网站标题是否有改动
	Fai.top._mobiSiteTitle = {"fontType":0,"align":0,"font":{"size":12,"family":"","colorType":0,"color":"#000"},"bgType":"0","bgFont":{"color":"#000","alpha":100},"bgImgFileId":"","bgImgStyle":"1"};   
	jm(document).ready(function() {
		// 绑定退出事件
		jm(window).bind("load", function() {
			//当前模块 start
			Mobi.initSwipe('bannerSwipe', {
				"showType": 0,
				"bn": 1,
				"b": [],
				"c": [],
				"h": false
			});
			//调整导航栏与g_web的top值
			//部分主题有css3动画，所以会导致计算失误，需要等css3动画执行完之后计算
			Mobi.autoFixGWebTop(2);
			//加载背景音乐
			if (0 == 1) {
				Mobi.initBgm('http://6416328.s21d-6.faidns.com/0/');
			} else {
				Mobi.initBgmCookie();
			}
			Mobi.initFooterHeight();
		});
		//手机视图初始化函数
		Mobi.initMobiPage({"id":344,"createTime":"2014-09-28","preview":"http://mo.faisys.com/image/template/344/344.jpg","previewGif":"","color":8,"style":"http://mo.faisys.com/css/template/344.min.css?v=201507131732","type":1,"moduleStyle":0,"designType":0,"presetIndex":0,"cube":6,"layout":2,"imagePage":312,"backgroundImage":0,"colors":[8],"colorsName":["青绿"]});
	     // 取统计数据
	    if(true)
	    {
		    Mobi.statisticalMobiVisitors({colId:-1, pdId:-1, ndId:-1, sc:0, rf:"http://m.tpress1.icoc.cc/nr.jsp"});
	    }
	    //前端性能数据上报
	    Mobi.report();
	    Mobi.showQqBg();
		Mobi.showPhonesBg();
		// Mobi.setShowSiteTitleBgFlag('0');
		// Mobi.changeSiteTitleBg('null','null','null','null','null');
		Mobi.logoSizeCompressByMargin();
		Mobi.titlePositionRefreshByLogo();
		Fai.top._shareData = {"browserTitle":"", "shareUrl":"http%3A%2F%2Fm.tpress1.icoc.cc%2Fnd.jsp%3Fid%3D4%26_sc%3D2", "shareLinkList":'[{"url":"http://service.weibo.com/share/share.php?title=http%253A%252F%252Fm.tpress1.icoc.cc%252Fnd.jsp%253Fid%253D4%2526_sc%253D2&url=http%3A%2F%2Fm.tpress1.icoc.cc%2Fnd.jsp%3Fid%3D4%26_sc%3D2","icon":"sina_weibo"},{"url":"http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?summary=http%253A%252F%252Fm.tpress1.icoc.cc%252Fnd.jsp%253Fid%253D4%2526_sc%253D2&url=http%3A%2F%2Fm.tpress1.icoc.cc%2Fnd.jsp%3Fid%3D4%26_sc%3D2&title=","icon":"qq_zone"},{"url":"http://v.t.qq.com/share/share.php?title=http%253A%252F%252Fm.tpress1.icoc.cc%252Fnd.jsp%253Fid%253D4%2526_sc%253D2&url=http%3A%2F%2Fm.tpress1.icoc.cc%2Fnd.jsp%3Fid%3D4%26_sc%3D2","icon":"qq_weibo"},{"url":"http://www.kaixin001.com/rest/records.php?content=http%253A%252F%252Fm.tpress1.icoc.cc%252Fnd.jsp%253Fid%253D4%2526_sc%253D2&style=11","icon":"kaixin001"},{"url":"http://widget.renren.com/dialog/share?resourceUrl=http%3A%2F%2Fm.tpress1.icoc.cc%2Fnd.jsp%3Fid%3D4%26_sc%3D2&description=http%253A%252F%252Fm.tpress1.icoc.cc%252Fnd.jsp%253Fid%253D4%2526_sc%253D2&title=","icon":"renren"},{"url":"http://shuo.douban.com/!service/share?name=http%253A%252F%252Fm.tpress1.icoc.cc%252Fnd.jsp%253Fid%253D4%2526_sc%253D2&text=http%3A%2F%2Fm.tpress1.icoc.cc%2Fnd.jsp%3Fid%3D4%26_sc%3D2","icon":"douban"},{"url":"http://t.sohu.com/third/post.jsp?url=http%253A%252F%252Fm.tpress1.icoc.cc%252Fnd.jsp%253Fid%253D4%2526_sc%253D2&title=","icon":"sohu_weibo"}]'};
		Mobi.initModulePhotoSwipe('newsDetail19');
		Mobi.initNewsEvent(19);
		Mobi.switchJump();
		Mobi.manageFaiscoAd(2);
		if(false){
			Mobi.ing("",true);
		}	
	});
	//Mobi.preventScroll(document.getElementById("g_body"));//阻止滚轮事件冒泡
	</script>
	<script>
       var imgUrl = "[!--titlepic--]";  //图片LOGO注意必须是绝对路径
       var lineLink = "<?php echo sys_ReturnBqTitleLink($navinfor); ?>";   //网站网址，必须是绝对路径
       var descContent = '[!--smalltext--]'; //分享给朋友或朋友圈时的文字简介
       var shareTitle = '[!--title--]';  //分享title
       var appid = ''; //apiID，可留空
         
       function shareFriend() {
           WeixinJSBridge.invoke('sendAppMessage',{
               "appid": appid,
               "img_url": imgUrl,
               "img_width": "200",
               "img_height": "200",
               "link": lineLink,
               "desc": descContent,
               "title": shareTitle
           }, function(res) {
               //_report('send_msg', res.err_msg);
           })
       }
       function shareTimeline() {
           WeixinJSBridge.invoke('shareTimeline',{
               "img_url": imgUrl,
               "img_width": "200",
               "img_height": "200",
               "link": lineLink,
               "desc": descContent,
               "title": shareTitle
           }, function(res) {
                  //_report('timeline', res.err_msg);
           });
       }
       function shareWeibo() {
           WeixinJSBridge.invoke('shareWeibo',{
               "content": descContent,
               "url": lineLink,
           }, function(res) {
               //_report('weibo', res.err_msg);
           });
       }
       // 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
       document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
           // 发送给好友
           WeixinJSBridge.on('menu:share:appmessage', function(argv){
               shareFriend();
           });
           // 分享到朋友圈
           WeixinJSBridge.on('menu:share:timeline', function(argv){
               shareTimeline();
           });
           // 分享到微博
           WeixinJSBridge.on('menu:share:weibo', function(argv){
               shareWeibo();
           });
       }, false);
       jm('#list_search').submit(function(e) {
			e.preventDefault();
			var key=jm('.s_text').val();
			window.location.href="<?=$listurl?>&keyword="+key;
		});
	</script>
	</body>

</html>