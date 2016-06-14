<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $pagetitle; ?></title>
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
		<meta name="keywords" content="<?php echo $r[keyboard]; ?>">
		<meta name="description" content="<?php echo $r[smalltext] ?>">

		<script type="text/javascript">
		//html root的字体计算应该放在最前面，这样计算就不会有误差了/
		var _htmlFontSize = (function() {
			var clientWidth = document.documentElement ? document.documentElement.clientWidth : document.body.clientWidth;
			if (clientWidth > 640) clientWidth = 640;
			document.documentElement.style.fontSize = clientWidth * 1 / 16 + "px";
			return clientWidth * 1 / 16;
		})();
		</script>
		<link rel="stylesheet" type="text/css" href="<?php echo $public_r[newsurl]; ?>skin/yetpress_wap/css/base.min.css" title="default"
		/>
		<link rel="stylesheet" id="mobiStyleTemplateCss" type="text/css" href="<?php echo $public_r[newsurl]; ?>skin/yetpress_wap/css/344.min.css"
		/>
		<link rel="stylesheet" id="mobiCubeNavigationCss" type="text/css" href="<?php echo $public_r[newsurl]; ?>skin/yetpress_wap/css/cubeNavigation.min.css"
		/>