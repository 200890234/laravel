@include('admin.inc.assets')
<p>位置： 系统参数设置</p>
				<div class="col_note">
					<ul>
						<li>操作选项：<a href="{{ url('admin/postTemp/tb/aritcle_others/type/dictData/act/add') }}">增加信息</a></li>
						<li>
							<form action="">
								<input type="text" class="input400" placeholder="输入关键字" name="skey" id="skey">
								<input type="submit" class="sbtn submits" value="搜索">
							</form>
						</li>
						<li id="qucikitems">
							[<a href="">数据更新</a>]
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="main_body">
					<ul class="body_menutab">
						<li>基本设置</li>
						<li>用户设置</li>
						<li>文件设置</li>
						<li>搜索设置</li>
						<li>信息设置</li>
						<li>Ftp/Email</li>
						<li>图片设置</li>
					</ul>
					<div class="clear"></div>
						<form action="{{ url('admin/doPostTemp') }}" method="post" id="sysconf">
							<div class="tab_content">
								<div class="wrap_post">
									<!-- <div class="post_note">
										<input type="submit" class="subm_btns" value="提交">
										<input type="reset" class="subm_btns" value="重置">
									</div> -->
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<!-- <tr>
												<td colspan="2" style="height:auto;">
													<span class="error"></span>
												</td>
											</tr> -->
											<tr>
												<td class="post_r">站点名称：</td>
												<td>
													<input type="text" class="input600" name="sitename" id="sitename" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">网站地址：</td>
												<td>
													<input type="text" class="input600" name="sitepath" id="sitepath" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">附件地址：</td>
												<td>
													<input type="text" class="input600" name="attach_dir" id="attach_dir" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">管理员邮箱：</td>
												<td>
													<input type="text" class="input600" name="email" id="email" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">网站关键字：</td>
												<td>
													<input type="text" class="input600" name="keywords" id="keywords" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">网站简介：</td>
												<td><textarea name="description" id="description" cols="18" rows="2"></textarea></td>
											</tr>
											<tr>
												<td class="post_r">首页模式：</td>
												<td id="index_pattern">
													<input type="radio" name="index_pattern" id="index_pattern1" class="r_dio" value="0">
													<label for="index_pattern1"></label>&nbsp;静态首页&nbsp;&nbsp;
													<input type="radio" name="index_pattern" id="index_pattern2" class="r_dio" value="1">
													<label for="index_pattern2"></label>&nbsp;动态首页
												</td>
											</tr>
											<tr>
												<td class="post_r">首页文件扩展名：</td>
												<td>
													<input type="text" class="input400" name="index_extension" id="index_extension" value="">
													<select name="preset_ext" id="preset_ext">
														<option value=".html">扩展名</option>
														<option value=".html">.html</option>
														<option value=".php">.php</option>
														<option value=".htm">.htm</option>
														<option value=".shtml">.shtml</option>
													</select>
												</td>
											</tr>
											<tr>
												<td class="post_r">PHP超时时间设置：</td>
												<td>
													<input type="text" class="input400" name="php_timeout" id="php_timeout" value="">&nbsp;秒(一般不需要设置)
												</td>
											</tr>
										</tbody>
									</table>
									<div class="blank10"></div>
								</div>
								{!! csrf_field() !!}
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r">后台登陆验证码：</td>
												<td id="admincaptcha_enabled">
													<input type="radio" name="admincaptcha_enabled" id="admincaptcha_enabled1" class="r_dio" value="0">
													<label for="admincaptcha_enabled1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="admincaptcha_enabled" id="admincaptcha_enabled2" class="r_dio" value="1">
													<label for="admincaptcha_enabled2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">会员注册：</td>
												<td id="allow_register">
													<input type="radio" name="allow_register" id="allow_register1" class="r_dio" value="0">
													<label for="allow_register1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="allow_register" id="allow_register2" class="r_dio" value="1">
													<label for="allow_register2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">注册赠送点数：</td>
												<td>
													<input type="text" class="input400" name="register_score" id="register_score" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">注册用户名限制：</td>
												<td>
													<input type="text" class="input40" name="reguser_minlength" id="reguser_minlength" value="">
													~
													<input type="text" class="input40" name="reguser_maxlength" id="reguser_maxlength" value="">
													&nbsp;个字节
												</td>
											</tr>
											<tr>
												<td class="post_r">注册密码限制：</td>
												<td>
													<input type="text" class="input40" name="regpass_minlength" id="regpass_minlength" value="">
													~
													<input type="text" class="input40" name="regpass_maxlength" id="regpass_maxlength" value="">
													&nbsp;个字节
												</td>
											</tr>
											<tr>
												<td class="post_r">用户名保留关键字：</td>
												<td>
													<input type="text" class="input300" name="register_syskey" id="register_syskey" value="">&nbsp; (禁止包含字符,多个用"|"号隔开,支持多字验证)
												</td>
											</tr>
											<tr>
												<td class="post_r">投稿功能：</td>
												<td id="allow_contribution">
													<input type="radio" name="allow_contribution" id="allow_contribution1" class="r_dio" value="0">
													<label for="allow_contribution1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="allow_contribution" id="allow_contribution2" class="r_dio" value="1">
													<label for="allow_contribution2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">会员登陆验证码：</td>
												<td id="usercaptcha_enabled">
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled1" class="r_dio" value="0">
													<label for="usercaptcha_enabled1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled2" class="r_dio" value="1">
													<label for="usercaptcha_enabled2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">会员注册审核方式：</td>
												<td id="register_activatetype">
													<input type="radio" name="register_activatetype" id="register_activatetype1" class="r_dio" value="0">
													<label for="register_activatetype1"></label>&nbsp;无&nbsp;&nbsp;
													<input type="radio" name="register_activatetype" id="register_activatetype2" class="r_dio" value="1">
													<label for="register_activatetype2"></label>&nbsp;邮件激活 
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r">附件存放目录：</td>
												<td>
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled1" class="r_dio" value="0">
													<label for="usercaptcha_enabled1"></label>&nbsp;栏目目录&nbsp;&nbsp;
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled2" class="r_dio" value="1">
													<label for="usercaptcha_enabled2"></label>&nbsp;/d/file/p目录 
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled3" class="r_dio" value="2">
													<label for="usercaptcha_enabled3"></label>&nbsp;/d/file目录 
												</td>
											</tr>
											<tr>
												<td class="post_r">附件存放日期目录：</td>
												<td>
													<input type="text" class="input300" name="attach_datedir" id="attach_datedir" value="">&nbsp; (如Y-m-d，Y/m-d，Y/m/d，Ymd等形式)
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									搜索设置
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									信息设置
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									Email设置
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									图片设置
								</div>
							</div>
							<div class="post_action">
								<input type="submit" class="subm_btns" value="提交">
								<input type="reset" class="subm_btns" value="重置">
							</div>
					</form>
					<div class="blank50"></div>
					<div class="blank10"></div>
					<div class="blank5"></div>
				</div>
<script>
	$(function(){
		$('#preset_ext').change(function() {
			var ext=$(this).find("option:selected").val();
			$('#index_extension').val(ext);
		});
	})
</script>				