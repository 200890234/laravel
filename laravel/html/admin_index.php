<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>laravel cms - admin index</title>
	<link rel="stylesheet" href="css/admin.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/common.js"></script>
</head>
<body id="top_body">
	<header class="header" id="header">
		<nav class="topnav">
			<ul class="topul" id="top_menu">
				<li><a href="javascript:void(0);" mtype="sys">系统设置</a></li>
				<li><a href="javascript:void(0);" mtype="info">信息管理</a></li>
				<li><a href="javascript:void(0);" mtype="column">栏目管理</a></li>
				<li><a href="javascript:void(0);" mtype="tpl">模板管理</a></li>
				<li><a href="javascript:void(0);" mtype="user">用户管理</a></li>
				<li><a href="javascript:void(0);" frame="main.php" target="_blank">后台首页</a></li>
				<li><a href="/">网站首页</a></li>
				<div class="clear"></div>
			</ul>
		</nav>
	</header>
	<section class="main_left">
		<div id="loader_left">
			<IFRAME frameBorder="0" id="left" name="left" scrolling="auto" src="inc/menu.php?mtype=column" style="width: 100%;height:100%;visibility:inherit;z-index:2"></IFRAME>
		</div>
	</section>
	<section class="main_right">
		<div class="right_wrap">
			<div id="loader_right">
				<IFRAME frameBorder="0" id="right" name="right" scrolling="auto" src="main.php?mtype=column" style="width: 100%;height:100%;visibility:inherit;z-index:2"></IFRAME>
			</div>
		</div>
	</section>
	<section class="clear"></section>
	<footer class="footer">
		
	</footer>
</body>
</html>