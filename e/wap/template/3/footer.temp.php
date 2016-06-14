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
		<div class="webBackgroundBox webDetailPage">
			<div id="webBodyBackground" class="webBackground ">
			</div>
			<div id='navExistOffPanel' class='navExistOffPanel'>
			</div>
		</div>
		<!--设置网站的背景颜色  end-->
	</div>
	<div class="webRight">
	</div>
	<script type="text/javascript" language="javascript">
	//管理态下的预览页面提前作处理
	if( !false && window.top !== window.self){
	    var g_className = document.getElementById("g_body").className;
	    document.getElementById("g_body").className = g_className + ' g_viewMode';
	}  
	</script>
	<script type="text/javascript" charset="utf-8" src="<?php echo $public_r[newsurl] ?>skin/yetpress_wap/js/jqmobi.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?php echo $public_r[newsurl] ?>skin/yetpress_wap/js/jqmobi_ui.min.js"></script>
	<script id="mobiOperationJS" type="text/javascript" charset="utf-8" src="<?php echo $public_r[newsurl] ?>skin/yetpress_wap/js/mobi.min.js"></script>
	<script type="text/javascript" src="<?php echo $public_r[newsurl] ?>skin/yetpress_wap/js/2052.min.js"></script>
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
	   var imgUrl = "<?php echo $public_r[newsurl].$r[titlepic] ?>";  //图片LOGO注意必须是绝对路径
       var lineLink = "<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>";   //网站网址，必须是绝对路径
       var descContent = '<?=DoWapClearHtml($r[smalltext])?>'; //分享给朋友或朋友圈时的文字简介
       var shareTitle = '<?php echo $r[title] ?>';  //分享title
       var appid = ''; //apiID，可留空
       var circletext=shareTitle+" "+descContent;
         
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
               // "desc": descContent,
               // "title": shareTitle
               "title": circletext
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