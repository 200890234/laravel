<link rel="stylesheet" href="css/admin.css">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/common.js"></script>
<p>位置： 数据字典文章管理</p>
				<div class="col_note">
					<ul>
						<li>操作选项：<a href="postTemp.php">增加信息</a></li>
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
						<li>基本信息</li>
						<li>选项设置</li>
					</ul>
					<div class="clear"></div>
					<div class="tab_content">
						<form action="" method="post">
							<div class="wrap_post">
								<div class="post_note">
									<input type="submit" class="subm_btns" value="提交">
									<input type="reset" class="subm_btns" value="重置">
								</div>
								<table cellpadding="1" cellspacing="1" class="post_tb">
									<tbody>
										<tr>
											<td class="post_r">标题：</td>
											<td><input type="text" class="input400" name="title"></td>
										</tr>
										<tr>
											<td class="post_r">内容：</td>
											<td><textarea name="content" id="content"></textarea></td>
										</tr>
										<input type="hidden" name="addtime" id="addtime">
									</tbody>
								</table>
								<div class="blank10"></div>
							</div>
							<div class="post_action">
								<input type="submit" class="subm_btns" value="提交">
								<input type="reset" class="subm_btns" value="重置">
							</div>
						</form>
					</div>
					<div class="tab_content">
						附加选项
					</div>
					<div class="blank50"></div>
					<div class="blank10"></div>
					<div class="blank5"></div>
				</div>