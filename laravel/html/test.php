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
<body>
	<header class="header" id="header">
		<nav class="topnav">
			<ul class="topul" id="top_menu">
				<li><a href="javascript:void(0);" mtype="sys">系统设置</a></li>
				<li><a href="javascript:void(0);" mtype="info">信息管理</a></li>
				<li><a href="javascript:void(0);" mtype="column">栏目管理</a></li>
				<li><a href="javascript:void(0);" mtype="tpl">模板管理</a></li>
				<li><a href="javascript:void(0);" mtype="user">用户管理</a></li>
				<div class="clear"></div>
			</ul>
		</nav>
	</header>
	<section class="main_left">
		<div id="loader_left">
			<IFRAME frameBorder="0" id="left" name="left" scrolling="auto" src="inc/menu.php?mtype=column" style="width: 100%;height:100%;visibility:inherit;z-index:2"></IFRAME>
			<!-- <ul class="leftul">
				<li><a href="javascript:void(0);"><font>+</font>菜单一</a>
					<ul class="leftsubul">
						<li><a href="">子菜单一子菜单一</a></li>
						<li><a href="">子菜单二</a></li>
						<li><a href="">子菜单三</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);"><font>+</font>菜单二</a><ul class="leftsubul">
						<li><a href="">子菜单一</a></li>
						<li><a href="">子菜单二</a></li>
						<li><a href="">子菜单三</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);"><font>+</font>菜单三</a><ul class="leftsubul">
						<li><a href="">子菜单一</a></li>
						<li><a href="">子菜单二</a></li>
						<li><a href="">子菜单三</a></li>
					</ul>
				</li>
				<div class="clear"></div>
			</ul> -->
		</div>
	</section>
	<section class="main_right">
		<div class="right_wrap">
			<div id="loader_right">
				<!-- <IFRAME frameBorder="0" id="left" name="left" scrolling="auto" src="main.php?mtype=column" style="width: 100%;height:100%;visibility:inherit;z-index:2"></IFRAME> -->
				<p>位置： 管理信息 > 网络编程 > html&js > 信息列表</p>
				<div class="col_note">
					<ul>
						<li>操作选项：<a href="">增加信息</a></li>
						<li>
							<form action="">
								<input type="text" placeholder="输入关键字" name="skey" id="skey">
								<input type="submit" class="sbtn submits" value="搜索">
							</form>
						</li>
						<li id="qucikitems">
							[<a href="">预览首页</a>]
							[<a href="">预览首页</a>]
							[<a href="">刷新所有信息JS</a>]
							[<a href="">预览首页</a>]
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="main_body">
					<ul class="body_menutab">
						<li>基本设置</li>
						<li>选项设置</li>
					</ul>
					<div class="clear"></div>
					<div class="wrap_post">
						<div class="post_note">
							增加信息 |
							<a href="">我的信息 |</a>
							<a href="">我的信息</a>
						</div>
						<table cellpadding="1" cellspacing="1" class="post_tb">
							<tbody>
								<tr>
									<td class="post_f">标题：</td>
									<td><input type="text" name="title"></td>
								</tr>
								<tr>
									<td class="post_f">标题：</td>
									<td><input type="text" name="title"></td>
								</tr>
								<tr>
									<td class="post_f">标题：</td>
									<td><input type="text" name="title"></td>
								</tr>
								<tr>
									<td class="post_f">标题：</td>
									<td><input type="text" name="title"></td>
								</tr>
								<tr>
									<td class="post_f">标题：</td>
									<td><input type="text" name="title"></td>
								</tr>
								<tr>
									<td class="post_f">标题：</td>
									<td><input type="text" name="title"></td>
								</tr>
								<tr>
									<td class="post_f">标题：</td>
									<td><input type="text" name="title"></td>
								</tr>
								<tr>
									<td class="post_f">对萨法三对四：</td>
									<td><textarea name="content" id="content" cols="80" rows="8"></textarea></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="post_action">
						<button>提交</button>
						<button>重置</button>
					</div>
					<div class="blank10"></div>
					<div class="blank10"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="clear"></section>
	<footer class="footer">
		
	</footer>
</body>
</html>

