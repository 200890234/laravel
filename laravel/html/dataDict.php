<link rel="stylesheet" href="css/admin.css">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/common.js"></script>
<p>位置： 数据字典文章管理</p>
				<div class="col_note">
					<ul>
						<li>操作选项：<a href="postTemp.php">增加信息</a></li>
						<li>
							<form action="">
								<input type="text" placeholder="输入关键字" name="skey" id="skey">
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
						<li>信息列表</li>
						<li>选项设置</li>
					</ul>
					<div class="clear"></div>
					<div class="tab_content">
						<form action="" method="post">
							<div class="wrap_post">
								<table cellpadding="1" cellspacing="1" class="post_tb list_tb">
									<tbody>
										<tr class="tr_th">
											<th width="5%" align="center"><input type="checkbox" name="" class="c_box c_all" id="c_all_t"><label for="c_all_t"></label></th>
											<th width="8%" align="center">ID</th>
											<th width="50%">标题</th>
											<th width="20%">发布时间</th>
											<th width="17%">操作</th>
										</tr>
										<tr>
											<td sytle="text-align:center;"><input type="checkbox" name="" class="c_box c_item" id="list_ids_1" value="1"><label for="list_ids_1"></label></td>
											<td>123</td>
											<td class="post_l"><a href="">大沙发上房顶上是地发生地方对萨法</a></td>
											<td>2016-02-13 12:12:12</td>
											<td><a href="">修改</a> | <a href="">删除</a></td>
										</tr>
										<tr>
											<td sytle="text-align:center;"><input type="checkbox" name="" class="c_box c_item" id="list_ids_2" value="2"><label for="list_ids_2"></label></td>
											<td>123</td>
											<td class="post_l"><a href="">大沙发上房顶上是地发生地方对萨法</a></td>
											<td>2016-02-13 12:12:12</td>
											<td><a href="">修改</a> | <a href="">删除</a></td>
										</tr>
										<tr>
											<td sytle="text-align:center;"><input type="checkbox" name="" class="c_box c_item" id="list_ids_3" value="3"><label for="list_ids_3"></label></td>
											<td>123</td>
											<td class="post_l"><a href="">大沙发上房顶上是地发生地方对萨法</a></td>
											<td>2016-02-13 12:12:12</td>
											<td><a href="">修改</a> | <a href="">删除</a></td>
										</tr>
										<tr>
											<td sytle="text-align:center;"><input type="checkbox" name="" class="c_box c_all" id="c_all_b"><label for="c_all_b"></td>
											<td colspan="4" class="post_l"><input type="button" class="subm_btns" value="删除"></td>
										</tr>
									</tbody>
								</table>
								<div class="blank10"></div>
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