<?php 
if(!defined('InEmpireCMS'))
{
	exit();
}
require_once("header.temp.php"); 
?>
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
			<?php require_once("menu.temp.php"); ?>
			<div id="webBannerBox" class="webBannerBox ">
				<div id='webBanner' class='webBanner'>
					<div id='bannerSwipe' class='swipe'>
						<div class='bannerSwipeContainer defaultBanner'>
							<div id='bannerItem240003'><div vheight='300' vwidth='640' class='bannerImageDiv systemtBanner' style='background-image:url(https://www.baidu.com/img/baidu_jgylogo3.gif);'/></div></div>
							<div id='bannerItem230004'><div vheight='300' vwidth='640' class='bannerImageDiv systemtBanner' style='background-image:url(https://www.baidu.com/img/baidu_jgylogo3.gif);'/></div></div>
							<div id='bannerItem250001'><div vheight='300' vwidth='640' class='bannerImageDiv systemtBanner' style='background-image:url(https://www.baidu.com/img/baidu_jgylogo3.gif);'/></div></div>
							<div id='bannerItem210002'><div vheight='300' vwidth='640' class='bannerImageDiv systemtBanner' style='background-image:url(https://www.baidu.com/img/baidu_jgylogo3.gif);'/></div></div>
							<div id='bannerItem190006'><div vheight='300' vwidth='640' class='bannerImageDiv systemtBanner' style='background-image:url(https://www.baidu.com/img/baidu_jgylogo3.gif);'/></div></div>
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
												搜索结果
												<input type="text" class="s_text" placeholder="请输入关键字...">
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
						<div class="formMiddle formMiddle311">
							<div class="middleLeft middleLeft311"></div>
							<?php if($_GET['keyword']){ ?>
							<div class="search_note">
								<font class="snote_a">搜索结果：</font>
								<font class="snote_b"><a href="<?=$listurl?>">返回列表</a></font>
								<div class="clear"></div>
							</div>
							<?php } ?>
							<div class="middleCenter middleCenter311">
								<div class="formMiddleContent formMiddleContent311 moduleContent videoContent">
									<?php
										while($r=$empire->fetch($sql))
										{
											// var_dump($r);
											$titleurl="show.php?classid=".$r[classid]."&amp;id=".$r[id]."&amp;style=".$wapstyle."&amp;cpage=".$page."&amp;cid=".$classid."&amp;bclassid=".$bclassid;
											$titleurl1="show.php?classid=".$r[classid]."&id=".$r[id]."&style=".$wapstyle."&cpage=".$page."&cid=".$classid."&bclassid=".$bclassid;
											//截取字数
											if($pr['wapsubtitle'])
											{
												$r[title]=sub($r[title],0,$pr['wapsubtitle'],false);
											}
											//时间格式
											$r[newstime]=date($pr['wapshowdate'],$r[newstime]);
										?>
										<div class="mobiVideoOnline" id="" onmouseover='setShare("<?php echo $public_r[newsurl].'e/wap/'.$titleurl1?>","<?=$r[title]?>","<?=$r[smalltext]?>")'>
											<p style="margin:3px auto;font-size:18px;"><a href="<?=$titleurl?>"><?=DoWapClearHtml($r[title])?></a></p>
										</div>
									<?php
										}
									?>
									
									<div id="pagenation3" class="pagenation">
										<?php if($returnpage){ ?>
											<p><?=$returnpage?><br /></p>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="middleRight middleRight311"></div>
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
<p><b>列表:</b><?=$pagetitle?></p>
<p>
<?php
while($r=$empire->fetch($sql))
{
	$titleurl="show.php?classid=".$r[classid]."&amp;id=".$r[id]."&amp;style=".$wapstyle."&amp;cpage=".$page."&amp;cid=".$classid."&amp;bclassid=".$bclassid;
	//截取字数
	if($pr['wapsubtitle'])
	{
		$r[title]=sub($r[title],0,$pr['wapsubtitle'],false);
	}
	//时间格式
	$r[newstime]=date($pr['wapshowdate'],$r[newstime]);
?>
<a href="<?=$titleurl?>"><?=DoWapClearHtml($r[title])?></a> <small>(<?=$r[newstime]?>)</small><br />
<?php
}
?>
</p>
<?php
if($returnpage)
{
?>
<p><?=$returnpage?><br /></p>
<?php
}
?>
<p><a href="index.php?style=<?=$wapstyle?>&amp;bclassid=<?=$bclassid?>">返回</a> <a href="index.php?style=<?=$wapstyle?>">网站首页</a></p>
<?php
DoWapFooter();
?>