<?
if(!defined('InEmpireCMS'))
{exit();}
?><!DOCTYPE html>
<html>
	<head>
		<title><?=$bname?></title>
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
                <meta name="keywords" content="<?=$bname?>">
                <meta name="description" content="<?=$bname?>">
		<script type="text/javascript">
		//html root的字体计算应该放在最前面，这样计算就不会有误差了/
		var _htmlFontSize = (function() {
			var clientWidth = document.documentElement ? document.documentElement.clientWidth : document.body.clientWidth;
			if (clientWidth > 640) clientWidth = 640;
			document.documentElement.style.fontSize = clientWidth * 1 / 16 + "px";
			return clientWidth * 1 / 16;
		})();
		</script>
		<link rel="stylesheet" type="text/css" href="http://cn.yetpress.com/skin/yetpress_wap/css/base.min.css" title="default"/>
		<link rel="stylesheet" id="mobiStyleTemplateCss" type="text/css" href="http://cn.yetpress.com/skin/yetpress_wap/css/344.min.css"/>
		<link rel="stylesheet" id="mobiCubeNavigationCss" type="text/css" href="http://cn.yetpress.com/skin/yetpress_wap/css/cubeNavigation.min.css"/>
<!-- //输出模块样式css -->
<style id='mobiStyleModule'>
</style>
<style id='mobiStyleNav' type='text/css'>
.open .navItem:nth-child(2) {transition-delay: 160ms;} 
.open .navItem:nth-child(4) {transition-delay: 240ms;} 
.open .navItem:nth-child(6) {transition-delay: 320ms;} 
.open .navItem:nth-child(8) {transition-delay: 400ms;} 
.open .navItem:nth-child(10) {transition-delay: 480ms;} 
.open .navItem:nth-child(12) {transition-delay: 560ms;} 
.open .navItem:nth-child(14) {transition-delay: 640ms;} 
.open .navItem:nth-child(16) {transition-delay: 720ms;} 
.open .navItem:nth-child(18) {transition-delay: 800ms;}
</style>
<style id='mobiCubeStyleModule'>
</style>
<style id='mobiSearchStyleModule'>
</style>
<!-- 系统特殊隐藏栏目隐藏头部、banner -->
</head>
<body faiscomobi="true" id="g_body" class="g_locale2052 mobiCol9">
<div class="webLeft">
</div>
<div id="g_web" class="g_web">
	<!-- this is loading  -->
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
								<a href='htttp://m.yetpress.com/' _colid='3' id='navbar_3'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>首页</span></a>
							</div>
							<div 1 id='itemSep_104' class='itemSep'> </div>
							<div id='navItem_104' class='navItem navItem_104  icon-navItem'>
								<a href='http://m.yetpress.com/secret_stuff/' _colid='104' id='navbar_104'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>绝密资料</span></a>
							</div>
							<div 6 id='itemSep_6' class='itemSep'> </div>
							<div id='navItem_7' class='navItem navItem_7  icon-navItem'>
								<a href='http://cn.yetpress.com/e/wap/list.php?classid=23&style=0&bclassid=5' _colid='7' id='navbar_7'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>创意恶搞</span></a>
							</div>
							<div 7 id='itemSep_7' class='itemSep'> </div>
							<div id='navItem_8' class='navItem navItem_8  icon-navItem'>
								<a href='http://cn.yetpress.com/e/wap/list.php?classid=40&style=0&bclassid=5' _colid='7' id='navbar_8'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>精品福利</span></a>
							</div>
							<div 7 id='itemSep_8' class='itemSep'> </div>
							<div id='navItem_6' class='navItem navItem_6  icon-navItem'>
								<a href='http://m.yetpress.com/product/' _colid='6' id='navbar_6'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>产品展示</span></a>
							</div>
							<div 9 id='itemSep_9' class='itemSep'> </div>
							<div id='navItem_103' class='navItem navItem_103  icon-navItem'>
								<a href='http://m.yetpress.com/notice/' _colid='103' id='navbar_103'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>站点公告</span></a>
							</div>
							<div 1 id='itemSep_103' class='itemSep'> </div>
							<div id='navItem_9' class='navItem navItem_9  icon-navItem'>
								<a href='http://cn.yetpress.com/e/tool/feedback/?bid=4' _colid='9' id='navbar_9'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>留言板</span></a>
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
	</div>
	<div id="webContainerBox" class="webContainerBox">
		<div id="webModuleContainer" class="webModuleContainer">
			<div id='module7' class='form Handle formStyle10 ' _autoheight='1'>
				<div class='formBannerTitle formBannerTitle7'>
					<div class='titleLeft titleLeft7'>
					</div>
					<div class='titleCenter titleCenter7'>
						<div class='titleText titleText7'>
							<div class='titleTextIcon icon-titleText'>
								&nbsp;
							</div>
							<div class='textContent'>
								留言板
							</div>
						</div>
						<div class='formBannerMore formBannerMore7'>
						</div>
					</div>
					<div class='titleRight titleRight7'>
					</div>
				</div>
				<div class='formMiddle formMiddle7'>
					<div class='middleLeft middleLeft7'>
					</div>
					<div class='middleCenter middleCenter7'>
						<div class='formMiddleContent formMiddleContent7 moduleContent'>
							<div class='msgBoard'>
								<div class='msgTop'>
									<div class='g_globalLine mtitle'>
										<div class='mbTitle publishIcon'>
											<span class='icon-publishIcon'></span>发表留言
										</div>
									</div>
									<div class='noticeArea'>
										<div class='notice' style='display:none;'>
										</div>
									</div>
									<form name='feedback' id='feedwap' method='post' enctype='multipart/form-data' action='../../enews/index.php'>
										<input name='enews' type='hidden' value='AddFeedback'>
										<div class='g_globalLine'>
											<input id='reqName' name='name' value='' type='text' maxlength='50 ' placeholder='姓名(必填)' class='msg_isMust msg_ipt g_input'/>
											<span class='icon-mnameIcon'></span>
										</div>
										<div class='g_globalLine'>
											<input id='title' name='title' value='' type='text' maxlength='50 ' placeholder='标题(必填)' class='msg_isMust msg_ipt g_input'/>
											<span class='icon-mnameIcon'></span>
										</div>
										<div class='g_globalLine'>
											<input id='reqEmail' name='email' value='' type='email' maxlength='50 ' placeholder='电子邮件' class=' msg_ipt g_input'/>
											<span class='icon-memailIcon'></span>
										</div>
										<div class='g_globalLine'>
											<input id='reqPhone' type='tel' name='tel' value='' maxlength='50 ' placeholder='联系电话' class=' msg_ipt g_input'/>
											<span class='icon-mphoneIcon'></span>
										</div>
										<div class='g_globalLine'>
											<textarea id='reqContent' name='saytext' class='g_textArea msg_textArea' maxlength='200' placeholder='内容'/></textarea>
											<span class='icon-mmsgIcon'></span>
										</div>
										<div style='clear:both'>
										</div>
										<!-- <div class='g_globalLine'>
											<input id='msgBoardCaptcha' type='text' class='captchaText g_input' maxlength='4' placeholder='请输入验证码'/>
											<img id='msgBoardCaptchaImg' class='captchaImg' src='validateCode.jsp?939' onclick='Mobi.changeValidateCode(jm("#msgBoardCaptchaImg"))'/></span>
										</div> -->
										<div class='g_globalLine '>
											<input type='button' name='submit' id="subwap" class='g_button sendIcon msgSubmitButton submitIcon' onclick="" value='提交'/>
											<span class='mustSpan'>&nbsp&nbsp</span>
										</div>
									</form>
								</div>
								<div class='msgBottom'>
									<div class='msgBottomTop'>
										<div class='g_globalLine mtitle'>
											<div class='mbTitle userMsgIcon' style='display: inline-block;'>
												<span class='icon-userMsgIcon'></span>用户留言
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='middleRight middleRight7'>
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
		<script type="text/javascript" charset="utf-8" src="http://cn.yetpress.com/skin/yetpress_wap/js/jqmobi.min.js"> </script>
		<script type="text/javascript" charset="utf-8" src="http://cn.yetpress.com/skin/yetpress_wap/js/jqmobi_ui.min.js"> </script>
		<script id="mobiOperationJS" type="text/javascript" charset="utf-8" src="http://cn.yetpress.com/skin/yetpress_wap/js/mobi.min.js"> </script>
		<script type="text/javascript" src="http://cn.yetpress.com/skin/yetpress_wap/js/2052.min.js"></script>
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
	<script>
		jm(function(){
                        jm(".pageTitle").text("留言板");
			jm("#subwap").on("click",function(){
				var name=jm('#reqName').val();
				var content=jm('#reqContent').val();
				var title=jm('#title').val();
				if(!name){
					jm(".notice").text("请输入姓名").show();
					//jm("#reqName").focus();
					return false;
				}else if(!content){
					jm(".notice").text("请输入內容").show();
					//jm("#reqContent").focus();
					return false;
				}else if(!title){
					jm(".notice").text("请输入标题").show();
					//jm("#title").focus();
					return false;
				};
				jm.ajax({  
                      type: "POST",  
                      url: "http://cn.yetpress.com/e/enews/index.php",  
                      data: jm('#feedwap').serialize(),  
                      success:function(data){  
                    	alert("提交成功");
                 	  }
                })
			})
		})
	</script>