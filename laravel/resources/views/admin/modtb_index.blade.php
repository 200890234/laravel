@include('admin.inc.assets')
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
<p>位置： 管理数据表 > 新建数据表</p>
<div class="main_body">
	<ul class="body_menutab">
		<li>管理数据表</li>
	</ul>
	<div class="clear"></div>
	<div class="tab_content">
		<form action="" method="post">
			<div class="wrap_post">
				<table cellpadding="1" cellspacing="1" class="post_tb list_tb def_row_tb">
					<tbody>
					<tr class="tr_th">
						<th width="8%" align="center">ID</th>
						<th width="32%">表名称</th> <!--count($lists)=12}-->
						<th width="30%">管理</th>
						<th width="30%">操作</th>
					</tr>
					<tr class="def_row">
						<td>1</td>
						<td class="post_l"><a href="">新闻系统数据表( cn_ecms_news )</a></td>
						<td>
							[<a href="http://cn.yetpress.com/laravel/public/admin/updateTemp/tb/article_others/id/1">管理字段</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">管理系统模型</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">管理分表</a>]
						</td>
						<td>
							[<a href="http://cn.yetpress.com/laravel/public/admin/updateTemp/tb/article_others/id/1">设为默认表</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">复制</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">修改</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">删除</a>]
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td class="post_l"><a href="">新闻系统数据表( cn_ecms_news )</a></td>
						<td>
							[<a href="http://cn.yetpress.com/laravel/public/admin/updateTemp/tb/article_others/id/1">管理字段</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">管理系统模型</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">管理分表</a>]
						</td>
						<td>
							[<a href="http://cn.yetpress.com/laravel/public/admin/updateTemp/tb/article_others/id/1">设为默认表</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">复制</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">修改</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">删除</a>]
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td class="post_l"><a href="">新闻系统数据表( cn_ecms_news )</a></td>
						<td>
							[<a href="http://cn.yetpress.com/laravel/public/admin/updateTemp/tb/article_others/id/1">管理字段</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">管理系统模型</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">管理分表</a>]
						</td>
						<td>
							[<a href="http://cn.yetpress.com/laravel/public/admin/updateTemp/tb/article_others/id/1">设为默认表</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">复制</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">修改</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">删除</a>]
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td class="post_l"><a href="">新闻系统数据表( cn_ecms_news )</a></td>
						<td>
							[<a href="http://cn.yetpress.com/laravel/public/admin/updateTemp/tb/article_others/id/1">管理字段</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">管理系统模型</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">管理分表</a>]
						</td>
						<td>
							[<a href="http://cn.yetpress.com/laravel/public/admin/updateTemp/tb/article_others/id/1">设为默认表</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">复制</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">修改</a>]
							[<a href="http://cn.yetpress.com/laravel/public/admin/deleteTemp/tb/article_others/id/1">删除</a>]
						</td>
					</tr>
					</tbody>
				</table>
				<div id="listpage"></div>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	<div class="blank50"></div>
	<div class="blank10"></div>
	<div class="blank5"></div>
</div>