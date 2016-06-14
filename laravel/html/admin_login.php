<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>laravel cms - admin login</title>
	@include('inc.assets')
</head>
<body>
	<div class="loginwrap">
		<form action="admin/doadminlogin.php" method="post">
			<div class="loginform">
				<div class="loginfields"><input type="text" name="username" id="username" placeholder='输入管理员用户名'></div>
				<div class="loginfields"><input type="text" name="userpass" id="userpass" placeholder='输入管理员密码'></div>
				<div class="loginfields logincode">
					<ul>
						<li class="codeinput"><input type="text" name="vcode" id="vcode" placeholder='输入验证码'></li>
						<li class="codeimg"><img src="http://img3.cache.netease.com/www/v2013/img/newsapp_logo.png"></li>
					</ul>	
				</div>
				<div class="loginfields"><input type="submit" value="登录"></div>
			</div>
		</form>
		<div class="clear"></div>
	</div>
</body>
</html>