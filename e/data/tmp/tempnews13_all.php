<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
	<head>
		<title><?=$grpagetitle?></title>
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
                <meta name="keywords" content="<?=$ecms_gr[keyboard]?>">
                <meta name="description" content="<?=$grpagetitle?>">
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
<style id='productNewDetailStyleModule'>
</style>
<style id='mobiSearchStyleModule'>
</style>
<style type="text/css">
.webDetailPage {
	display:none;
}
.form {
	padding:0 !important;
	margin:0 !important;
}
.g_web .moveAnimation,.g_web .webModuleContainer {
	transform:initial;
	-webkit-transform: initial;
}
</style>
<!-- 系统特殊隐藏栏目隐藏头部、banner -->
</head>
<body faiscomobi="true" id="g_body" class="g_locale2052 mobiCol20">
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
								<a href='<?=$class_r[47]['classurl']?>/' _colid='3' id='navbar_3'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>首页</span></a>
							</div>
							<div 1 id='itemSep_104' class='itemSep'> </div>
							<div id='navItem_104' class='navItem navItem_104  icon-navItem'>
								<a href='<?=$class_r[48]['classurl']?>/' _colid='104' id='navbar_104'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>绝密资料</span></a>
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
								<a href='<?=$class_r[52]['classurl']?>/' _colid='6' id='navbar_6'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>产品展示</span></a>
							</div>
							<div 9 id='itemSep_9' class='itemSep'> </div>
							<div id='navItem_103' class='navItem navItem_103  icon-navItem'>
								<a href='<?=$class_r[51]['classurl']?>/' _colid='103' id='navbar_103'><span class='navItemIcon icon-navItemIcon'></span><span class='navItemName'>站点公告</span></a>
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
							<?=$class_r[$ecms_gr[classid]][classname]?>
						</span>
					</div>
				</div>
			</div>
	<div id="webBannerBox" class="webBannerBox webDetailPage">
	</div>
	<div id="webContainerBox" class="webContainerBox">
		<div id="webModuleContainer" class="webModuleContainer">
			<div id='module18' _headerhiden='1' class='form Handle formStyle35 ' _autoheight='1'>
				<div style='display:none;' class='formBannerTitle formBannerTitle18'>
					<div class='titleLeft titleLeft18'>
					</div>
					<div class='titleCenter titleCenter18'>
						<div class='titleText titleText18'>
							<div class='titleTextIcon icon-titleText'>
								&nbsp;
							</div>
							<div class='textContent'>
							</div>
						</div>
						<div class='formBannerMore formBannerMore18'>
						</div>
					</div>
					<div class='titleRight titleRight18'>
					</div>
				</div>
				<div class='formMiddle formMiddle18'>
					<div class='middleLeft middleLeft18'>
					</div>
					<div class='middleCenter middleCenter18'>
						<div class='formMiddleContent formMiddleContent18 moduleContent'>
							<div id='productNewDetailPanel18' class='productNewDetailPanel'>
								<div class='productDetailHeader' id='productDetailHeader18'>
									<span class='icon-gClose g_round g_iconMiddle proBack icon-defaultColor'>
									</span>
									<span class='icon-gOther g_round g_iconMiddle proOther icon-defaultColor'>
									</span>
									<div class='proOtherPanel'>
										<a class='icon-gHome g_iconMiddle g_round proHome icon-defaultColor' href='index.jsp'></a>
										<span id='productDetailShare' class='icon-share g_iconMiddle g_round proShare icon-defaultColor'>
										</span>
									</div>
								</div>
								<div class='productNewDetail'>
									<div class='proImgSwipe' id='productNewDetailSwipe18'>
										<div class='proDetailImgBox'>
											<div class='swipImgBox'>
												<div vwidth='0' vheight='0' class='proDetailImg' style='background-image:url(http://3.ss.faidns.com/image/demo/0_big_2.jpg);'>
												</div>
											</div>
										</div>
										<div class='productNameSwipBox'>
											<div class='g_displayClamp2'>
												 <?=$ecms_gr[title]?>
											</div>
										</div>
									</div>
									<div class='productDetailTabPanel' id='productDetailTabPanel18'>
										<ul class='tabUl' id='productTabUl'>
											<li class='g_middleColor tabLi tabActive' id='tabLi1' data='1'>
											产品详情 </li>
											<li class='g_middleColor tabLi' id='tabLi2' data='2'>
											产品参数 </li>
											<li class='g_middleColor tabLi' id='tabLi3' data='3'>
											产品评论 </li>
										</ul>
										<div class='tabBody'>
											<div class='tabPanel tabPanelAtive' id='tabPanel1'>
												 11111
											</div>
											<div class='tabPanel' id='tabPanel2'>
												 222222
											</div>
											<div class='tabPanel' id='tabPanel3'>
												 3333
											</div>
										</div>
									</div>
								</div>
								<div id='userCommentPanel' class='userCommentPanel' style='display:none;'>
									<div class='userCommentHead'>
										<span class='userCommentGoBack icon-gClose g_iconMiddle'>
										</span>
										发表评论 <a class='userCommentGoHome icon-gHome g_iconMiddle' href='index.jsp'></a>
									</div>
									<div class='userCommentBody'>
										<ul class='tabUl'>
											<li class='tabLi tabActive' id='tabUserLi1' data='1'>
											登录评论 </li>
											<li class='tabLi' id='tabUserLi2' data='2'>
											匿名评论 </li>
										</ul>
										<div class='tabBody'>
											<div class='tabPanel tabPanelAtive' id='tabUserPanel1'>
												<div class='userCommentInfo'>
													<div class='g_globalLine'>
														<input type="text" maxlength="50" id="user" class="itemEdit g_input" placeholder="请输入帐号">
														<span class="icon-mnameIcon">
														</span>
													</div>
													<div class='g_globalLine'>
														<input type="password" maxlength="20" id="password" class="itemEdit g_input" placeholder="请输入密码">
														<span class="icon-mpswIcon">
														</span>
													</div>
													<div id='userCommentRemarkPanel1'>
														<div class="g_globalLine">
															<textarea class="itemEdit msgIcon g_textArea icon-msgIcon" id="userCommentRemark" minlength='2' maxlength='1000' placeholder='请输入内容'>
															</textarea>
															<span class="icon-mmsgIcon">
															</span>
														</div>
														<div class="loginCaptchaCtrl g_globalLine">
															<input id="loginCaptcha" type="text" class="captchaText g_input" maxlength="4" placeholder='请输入验证码'>
															<img id="loginCaptchaImg" class="captchaImg" src="validateCode.jsp?v=610" onclick="Mobi.changeValidateCode(jm('#loginCaptchaImg'))">
														</div>
													</div>
													<div id='userCommentLoginAndComform' class='userCommentComform g_button'>
														 提交
													</div>
												</div>
											</div>
											<div class='tabPanel' id='tabUserPanel2'>
												<div class='userCommentInfo' id='userCommentInfo2'>
													<div class='g_globalLine'>
														<input type="text" maxlength="50" id="anonymityCommentUser" class="itemEdit g_input" placeholder="请输入称呼">
														<input type="hidden" id="postCommentId" value="5">
														<span class="icon-mnameIcon">
														</span>
													</div>
													<div id='userCommentRemarkPanel2'>
													</div>
													<div id='anonymityCommentComform' class='userCommentComform g_button'>
														 提交
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class='productMallOptionPanel' id='productMallOptionPanel' style='display:none;'>
									<div class='productMallOptionContentPanel'>
										<div class='productMallOptionMargin'>
										</div>
										<div class='productMallOptionContent'>
											<div class='productMallOptionHead'>
												<div class='productMallOptionImage'>
													<div class='productMallOptionImageContent'>
														<span class="imageMiddleSpan">
														</span>
														<img class='mallOptionImg' src='http://3.ss.faidns.com/image/demo/0_big_2.jpg'/>
													</div>
												</div>
												<div class='productDetail'>
													<div class='productDetailName'>
														<div class='productName g_middleColor'>
															 产品5
														</div>
														<span class='mallPrice'>
														￥ </span>
														<span class='mallPrice' id='mallPrice'>
														0.00 </span>
														&nbsp;&nbsp;&nbsp;&nbsp;
													</div>
												</div>
												<div class='productDetailClose icon-Off g_iconMiddle icon-defaultColor'>
												</div>
											</div>
											<div class='productNumberPanel g_middleColor'>
												<span>
												购买数量 </span>
												<div class='productNumberContent'>
													<span id='g_decrease' class='g_decrease g_opacity50 icon-decrease g_iconMiddle' onclick='Mobi.increase()'>
													</span>
													<input type='number' class='g_buyNumber' id='productNum' autocomplete='off' value='1' min='1' max='9999999'/>
													<span id='g_increase' class='g_increase icon-increase g_iconMiddle' onclick='Mobi.decrease()'>
													</span>
												</div>
											</div>
											<div class='productMallBuyPanel'>
												<div id='productBuy' type='button' class='g_button productMallBuy'>
													 确认
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='middleRight middleRight18'>
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
							top<b></b>
						</div>
					</div>
				</div>
				<div class='technical'>
					<div class='technicalSupport'>
						<font face='Arial'>&copy;</font>2015&nbsp;yetpress&nbsp;版权所有
					</div>
					<div class='technicalSupport'>
						技术支持：<a href='http://m.faisco.com' target='_blank' hidefocus='true'>凡科建站</a><a class='PcVer' href='http://www.tpress1.icoc.cc?_siteUrl' target='_blank' hidefocus='true'>电脑版</a><a class='rep' href='http://m.faisco.com/ts.jsp?acct=tpress1' target='_blank' hidefocus='true'>举报</a>
					</div>
				</div>
			</div>
		</div>
		<div id="fullScreenDivCotainer" class='fullScreenDivCotainer form'>
		</div>
	</div>
	<!--设置网站的背景颜色  start-->
	<div class="webBackgroundBox ">
		<div id="webBodyBackground" class="webBackground ">
		</div>
		<div id='navExistOffPanel' class='navExistOffPanel'>
		</div>
	</div>
	<!--设置网站的背景颜色  end-->
</div>
<div class="webRight">
</div>
<script type="text/javascript" charset="utf-8" src="http://cn.yetpress.com/skin/yetpress_wap/js/jqmobi.min.js?v=201505251725"></script>
<script type="text/javascript" charset="utf-8" src="http://cn.yetpress.com/skin/yetpress_wap/js/jqmobi_ui.min.js?v=201504131742"></script>
<script id="mobiOperationJS" type="text/javascript" charset="utf-8" src="http://cn.yetpress.com/skin/yetpress_wap/js/mobi.min.js?v=201507021409"></script>
<script type="text/javascript" src="http://cn.yetpress.com/skin/yetpress_wap/js/2052.min.js?v=201506291745"></script>
<script type="text/javascript">
var _jsErrCahche = [];

if (typeof Fai == 'undefined'){
	Fai = {};
	//解决页面被嵌套在iframe的场景
	Fai.top = window;
}
Fai.top._templateFrameId = 344;
Fai.top._templateLayoutId = 2;
Fai.top._mobiSiteTitleChanged = 0; 	//用于记录网站标题是否有改动jm(document).ready(function() {
	Fai.top._mobiSiteTitle = {"fontType":0,"align":0,"font":{"size":12,"family":"","colorType":0,"color":"#000"}};   	//网站标题数据
jm(document).ready(function() {
	//手机视图初始化函数
	Mobi.initMobiPage({"id":344,"createTime":"2014-09-28","preview":"http://mo.faidns.com/image/template/344/344.jpg","previewGif":"","color":8,"style":"http://mo.faidns.com/css/template/344.min.css?v=201506291745","type":1,"moduleStyle":0,"designType":0,"presetIndex":0,"cube":6,"layout":2,"imagePage":312,"backgroundImage":0,"colors":[8],"colorsName":["青绿"]});
    
    //前端性能数据上报
    Mobi.report();
    Mobi.showQqBg();
	Mobi.showPhonesBg();
	Mobi.logoSizeCompressByMargin();
	Mobi.titlePositionRefreshByLogo();
	Mobi.initModulePhotoSwipe('productNewDetailSwipe18');
	Mobi.initProductSwipe('productNewDetailSwipe18');
	var cururl="<?php echo sys_ReturnBqTitleLink($navinfor); ?>";
	Fai.top._shareData = {"browserTitle":"", "shareUrl":"http://m.tpress1.icoc.cc/pd.jsp?id=5&_sc=2", "shareLinkList":'[{"url":"http://service.weibo.com/share/share.php?title=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2&url=http://m.tpress1.icoc.cc/pd.jsp?id=5&_sc=2","icon":"sina_weibo"},{"url":"http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?summary=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2&url=http://m.tpress1.icoc.cc/pd.jsp?id=5&_sc=2&title=","icon":"qq_zone"},{"url":"http://v.t.qq.com/share/share.php?title=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2&url=http://m.tpress1.icoc.cc/pd.jsp?id=5&_sc=2","icon":"qq_weibo"},{"url":"http://www.kaixin001.com/rest/records.php?content=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2&style=11","icon":"kaixin001"},{"url":"http://widget.renren.com/dialog/share?resourceUrl=http://m.tpress1.icoc.cc/pd.jsp?id=5&_sc=2&description=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2&title=","icon":"renren"},{"url":"http://shuo.douban.com/!service/share?name=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2&text=http://m.tpress1.icoc.cc/pd.jsp?id=5&_sc=2","icon":"douban"},{"url":"http://share.jianghu.taobao.com/share/addShare.htm?url=http://m.tpress1.icoc.cc/pd.jsp?id=5&_sc=2&title=","icon":"taojianghu"},{"url":"http://t.sohu.com/third/post.jsp?url=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26amp%3B_sc%3D2&title=","icon":"sohu_weibo"},{"url":"http://t.163.com/article/user/checkLogin.do?info=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2&togImg=true","icon":"netease_weibo"},{"url":"http://apps.hi.baidu.com/share/?content=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2&url=http://m.tpress1.icoc.cc/pd.jsp?id=5&_sc=2&title=","icon":"baidu_hi"},{"url":"http://tieba.baidu.com/i/app/open_share_api?comment=&url=http://m.tpress1.icoc.cc/pd.jsp?id=5&_sc=2&title=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2","icon":"baidu_tieba"},{"url":"http://www.facebook.com/sharer.php?t=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2&u=http://m.tpress1.icoc.cc/pd.jsp?id=5&_sc=2","icon":"FaceBook"},{"url":"http://twitter.com/intent/tweet?text=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2","icon":"Twitter"},{"url":"http://www.linkedin.com/shareArticle?summary=http%3A%2F%2Fm.tpress1.icoc.cc%2Fpd.jsp%3Fid%3D5%26_sc%3D2&url=http://m.tpress1.icoc.cc/pd.jsp?id=5&_sc=2&title=","icon":"LinkedIn"}]'};
	Mobi.productNewDetailEventInit({'moduleId':18,'productId':5,'mallOptionsOpen':false});
	Mobi.manageFaiscoAd(2);
	if(false){
		Mobi.ing("",true);
	}	
});
</script>
</body>
</html>