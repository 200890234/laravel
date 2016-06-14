<?php 
// var_dump($r);
if(!defined('InEmpireCMS'))
{
	exit();
}
require_once("header.temp.php"); 
?>
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
<body faiscomobi="true" id="g_body" class="g_locale2052 mobiCol21">
<div class="webLeft">
</div>
<div id="g_web" class="g_web">
	<!-- this is loading  -->
	<?php require_once("menu.temp.php"); ?>
	<div id="webBannerBox" class="webBannerBox webDetailPage">
	</div>
	<div id="webContainerBox" class="webContainerBox">
		<div id="webModuleContainer" class="webModuleContainer">
			<div id='module19' _headerhiden='1' class='form Handle formStyle36 ' _autoheight='1'>
				<div style='display:none;' class='formBannerTitle formBannerTitle19'>
					<div class='titleLeft titleLeft19'>
					</div>
					<div class='titleCenter titleCenter19'>
						<div class='titleText titleText19'>
							<div class='titleTextIcon icon-titleText'>
								 &nbsp;
							</div>
							<div class='textContent'>
							</div>
						</div>
						<div class='formBannerMore formBannerMore19'>
						</div>
					</div>
					<div class='titleRight titleRight19'>
					</div>
				</div>
				<div class='formMiddle formMiddle19'>
					<div class='middleLeft middleLeft19'>
					</div>
					<div class='middleCenter middleCenter19'>
						<div class='formMiddleContent formMiddleContent19 moduleContent'>
							<div class='newsNewDetailPanel' id='newsNewDetailPanel19'>
								<div class='newsDetail' id='newsDetail19'>
									<div class='productDetailHeader' id='productDetailHeader19'>
										<span class='icon-gClose g_round g_iconMiddle newsBack icon-defaultColor'></span>
										<a class='icon-gHome g_iconMiddle g_round newsHome icon-defaultColor' href='<?php echo $public_r["newsurl"] ?>wap/' style='right:2.5rem'></a>
										<span id='newsDetailShare' class='icon-share g_iconMiddle g_round newsShare icon-defaultColor'></span>
									</div>
									<div class='newsFigure icon-noFigure g_bgColor' id='newsFigure19' style='width=100%;height:5.0rem;opacity:0.9;'>
										<div class='newsInfoTitle'>
											<div class='g_displayClamp2'>
												 <?=DoWapClearHtml($r[title])?>
											</div>
										</div>
									</div>
									<div class='newsContentPanel'>
										<div class='newsCustomPanel'>
											<div class='newsCustom newsDate'>
												 <?=date("Y-m-d H:i:s",$r[newstime])?>
											</div>
											<div class='newsCustom newsAuthor'>
											</div>
											<div class='newsCustom newsGroupName'>
												<span class='icon-group g_mainColor'></span><a href="<?=$listurl?>"><?=$classname?></a>
											</div>
											<div class='newsCustom newsView'>
												<span class='icon-views g_mainColor'></span><?=$r['onclick']?>
											</div>
										</div>
										<div class="content_share">
											<!-- JiaThis Button BEGIN -->
											<div id="ckepop" style="clear:both;margin:0.5rem auto;float:right;">
												<a class="jiathis_button_weixin" style="font-size:16px;">微信分享</a>
											</div> 
											<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
											<!-- JiaThis Button END -->
										</div>
										<div class='newsContent'>
											<?php //var_dump($r); ?>
											<video src="<?php echo $r['video_file'] ?>" controls="controls">>
												视频不被支持
											</video>
											<div class="clear"></div>
											<?php echo $r['newstext']; ?>
										</div>
										<div class='newsSource'>
											 上一篇：
										</div>
										<div class='newsLink'>
											<span>下一篇：</span><a href=''></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class='middleRight middleRight19'>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once("footer.temp.php"); ?>
<?php exit; ?>




<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
DoWapHeader($pagetitle);
?>
<p><b>标题:</b><?=DoWapClearHtml($r[title])?><br/>
<b>作者:</b><?=DoWapRepF($r[writer],'writer',$ret_r)?><br/>
<b>日期:</b><?=date("Y-m-d H:i:s",$r[newstime])?><br/>
<b>内容:</b></p>
<p><?=DoWapRepNewstext($r[newstext])?></p>
<p><br/><a href="<?=$listurl?>">返回列表</a> <a href="index.php?style=<?=$wapstyle?>">网站首页</a></p>
<?php
DoWapFooter();
?>