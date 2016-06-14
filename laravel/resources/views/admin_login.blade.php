<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>laravel cms - admin login</title>
    @include('inc.assets')    
</head>
<body>
    <?php 
        function loopWithChar($arr,$char){//循环数组 通过分隔符显示为字符串
            $str="";
            foreach ($arr as $key => $value) {
                $str.=$value.$char;
            }
            $str=trim($str,$char);
            return $str;
        }

    ?>
    <div class="loginwrap">
        <?php //var_dump($errors->all());//出现错误跳转回来后的错误信息 ?>
        <!-- @if (count($errors) > 0)    循环错误信息
                <center>
                     @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </center>
        @endif -->
        <?php 
            // var_dump($errors->first("vcode")); //指定字段的第一个错误信息 字符串
            // var_dump($errors->get("vcode")); //指定字段的所有错误信息 数组
            // var_dump($errors->all()); //所有字段的所有错误信息 数组

        ?>
		<form action="{{ url('admin/dologin') }}" method="post">
            {!! csrf_field() !!} <!-- 令牌 -->
			<div class="loginform">
				<div class="loginfields">
                    <input type="text" name="username" id="username" placeholder='输入管理员用户名' value="{{ old('username') }}">  <!-- old方法显示用户已输入的内容 -->
                    <span class="clearspan" style="color:#ff0000"><?php echo loopWithChar($errors->get('username'),'|') ?></span>
                </div>
				<div class="loginfields">
                    <input type="password" name="userpass" id="userpass" placeholder='输入管理员密码' value="{{ old('userpass') }}">
                    <span class="clearspan" style="color:#ff0000"><?php echo loopWithChar($errors->get('userpass'),'|') ?></span>
                </div>
				<div class="loginfields logincode">
					<ul>
						<li class="codeinput"><input type="text" name="vcode" id="vcode" placeholder='输入验证码' value="{{ old('vcode') }}"></li>
						<li class="codeimg"><img src="{{ $captcha }}" id="capCode"><img id="refCode" src="{{ asset('images') }}/refresh.png"></li>
					</ul>	
                    <span class="clearspan" style="color:#ff0000"><?php echo loopWithChar($errors->get('vcode'),'|') ?></span>
                </div>
                <div class="loginfields">
                    <input type="submit" value="登录">
                    <span class="clearspan" style="color:#ff0000"><?php echo session("failinfo") ?></span>  <!-- session("failinfo")获取控制器传过来的数据 -->
                </div>
			</div>
		</form>
		<div class="clear"></div>
	</div>
</body>
</html>