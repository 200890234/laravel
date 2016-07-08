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
<p>位置： 管理数据表 > 管理系统模型</p>
<div class="main_body">
	<ul class="body_menutab">
		<li>管理系统模型</li>
		<a href="{{ url('admin/mods') }}/{{$tbid}}/create"><li class="menutab_link">增加系统模型</li></a>
	</ul>
	<div class="clear"></div>
	<div class="tab_content">
		<form action="" method="post">
			<div class="wrap_post">
				<table cellpadding="1" cellspacing="1" class="post_tb list_tb def_row_tb">
					<tbody>
						<tr class="tr_th">
							<th width="12%" align="center">ID</th>
							<th width="40%">模型名称</th>
							<th width="48%">操作</th>
						</tr>
						@foreach ($mods as $mod)
					    <tr class="{{$mod->mod_is_default==1?'def_row':''}}">
							<td>{{$mod->mod_id}}</td>
							<td><a href="">{{$mod->mod_name}}</a></td>
							<td>
								[<a href="{{ url('admin/modTb/setDefMod/') }}/{{ $mod->mod_id }}">设为默认</a>]
								[<a href="{{ url('admin/mods') }}/{{$mod->mod_id}}/edit">修改</a>]
								[<a href="{{ url('admin/modTb') }}/" class="ajaxDel" token="<?php echo csrf_token(); ?>">删除</a>]
							</td>
						</tr>
						@endforeach
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
<script>
	if("{{session('msg')}}"){
		// layer.msg("{{session('msg')}}");//最简单形式
		layer.msg("{{session('msg')}}",{
			shade: 0.3,
			shadeClose:true,
			time:1200
		});
	}
</script>