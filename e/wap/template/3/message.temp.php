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
								<div class='titleText titleText302'>
									<div class='titleTextIcon icon-titleText'>
										&nbsp;
									</div>
									<div class='textContent'>
										文章列表
									</div>
								</div>
								<div class='formBannerMore formBannerMore302'>
									<a class='titleMoreLink titleMoreLink302' href=/nr.jsp?moduleId=302><span class='titleMoreIcon icon-titleMore titleMoreIcon302'>&nbsp;</span><span class='titleMore titleMore302'>更多</span></a>
								</div>
							</div>
							<div class='titleRight titleRight302'>
							</div>
						</div>
						<style>
							.jiathis_line{display:block;float:left;font-size:14px;line-height:20px;}
							.jiathis_line1{margin-top: 2px;}
							#jiathis_weixin_modal{padding-left: 10px;}
							.jiathis_modal_header{font-size:18px;text-align:center;}
							.jiathis_modal_footer{width:260px;margin:auto;}
							#jiathis_weixin_tip a{color:#138D76;}
						</style>
						<div class="formMiddle formMiddle311">
							<div class="middleLeft middleLeft311"></div>
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
											<video src="<?php echo $r['video_file'] ?>" controls="controls">>
												视频不被支持
											</video>
											<p style="margin:3px auto;font-size:18px;"><a href="<?=$titleurl?>"><?=DoWapClearHtml($r[title])?></a></p>
											<p>
												<!-- JiaThis Button BEGIN -->
				                                <div id="ckepop">
				                                    <span style="">
				                                    	<span class="jiathis_line">分享到：</span>
					                                    <a class="jiathis_button_weixin jiathis_line jiathis_line1">微信</a>
					                                    <a class="jiathis_button_qzone jiathis_line jiathis_line1">QQ空间</a>
				                                    </span>
			                                    	<div class="clear"></div>
				                                </div> 
				                                <!-- JiaThis Button END -->
											</p>
										</div>
									<?php
										}
									?>
                                    <script>
                  						function setShare(url,title,summary){
                  							jiathis_config.url = url;
	                                    	jiathis_config.title = title;
	                                    	jiathis_config.summary = summary;
                  						}
                                    	var jiathis_config = {}
                                	</script>
									<!--分享功能代码统一放到页尾-->
									<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
									<!--分享功能代码结束-->
									<!-- <div class="mobiVideoOnline" id="video311">
										<video src="http://www.kukahome.com/admin/template/siteTemplate/kukahome/video/kuka.mp4" controls="controls">>
											视频不被支持
										</video>
										<p><a href="">地发生地方对萨法对</a></p>
										<p>
											JiaThis Button BEGIN
												                                <div id="ckepop">
												                                    <a href=""><span class="jiathis_txt" style="margin-right:20px;">进入详情页>></span></a>
												                                    <span style="float:right;">
												                                    	<span class="jiathis_txt">分享本视频：</span>
													                                    <a class="jiathis_button_weixin">微信</a> 
													                                    <a class="jiathis_button_tsina">微博</a> 
													                                    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
													                                    <a class="jiathis_counter_style"></a> 
												                                    </span>
											                                    	<div class="clear"></div>
												                                </div> 
											                                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
											                                    <script>
											                                    	var jiathis_config = { 
													url: "http://www.yourdomain.com", 
													title: "自定义网页标题 #微博话题#", 
													summary:"分享的文本摘要" 
												}
											                                	</script>
												                                JiaThis Button END
										</p>
									</div> -->
									<div id="pagenation3" class="pagenation">
										<?php if($returnpage){ ?>
											<p><?=$returnpage?><br /></p>
										<?php } ?>
										<!-- <div class="pagePrev icon-pagePrev icon-cnListP pageDisable">
										</div>
										<div id="pagenationSelectDiv3" class="pagenationSelectDiv">
											<select class="pageSelect" onchange="location = this.options[this.selectedIndex].value;">
												<option class="pageOptions" selected="selected" value="#">1&nbsp;&nbsp;/&nbsp;&nbsp;1</option>
											</select>
										</div>
										<div class="pageNext icon-pageNext icon-cnListN pageDisable">
										</div> -->
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