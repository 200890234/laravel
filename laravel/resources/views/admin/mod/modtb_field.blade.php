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
<p>位置： 管理数据表 > 管理字段</p>
<div class="main_body">
	<ul class="body_menutab">
		<li>管理字段</li>
	</ul>
	<div class="clear"></div>
	<div class="tab_content">
		<form action="" method="post">
			<div class="wrap_post">
				<ul class="body_menutab">
					<a href=""><li class="menutab_link">增加字段</li></a>
					<div class="blank5"></div>
				</ul>
				<table cellpadding="1" cellspacing="1" class="post_tb list_tb def_row_tb" id="field_tb">
					<tbody>
					<tr class="tr_th">
						<th width="10%" align="center">排序</th>
						<th width="10%" align="center">主表/副表</th>
						<th width="12%" align="center">字段名</th>
						<th width="20%" align="center">字段中文别名</th>
						<th width="20%">字段类型</th>
						<th width="28%">操作</th>
					</tr> 
					@foreach ($data as $d)
					    <tr class="{{$d->f_is_sys==1?'def_row':''}}">
							<td><input type="text" name="f_myorder" class="text60 pl5 f_myorder" value="{{ $d->f_myorder }}" fname="{{$d->f_name}}"></td>
							<td>
								@if ($d->f_is_sys==1)
								    {{$d->f_is_subtb==1?"副表":"主表"}}
								@else
									<a href="javascript:void(0);" class="toggletb" fname="{{$d->f_name}}">{{$d->f_is_subtb==1?"副表":"主表"}}</a>
								@endif
							</td>
							<td>{{ $d->f_name }}</td>
							<td>{{ $d->f_alias_name }}</td>
							@if ($d->f_is_sys==1)
								<td>系统字段</td>
							@else
								<td>{{ $d->f_type }}({{ $d->f_length }})</td>
							@endif
							<td>
								@if ($d->f_is_sys==1)
									[<a href="{{url('admin/modTb')}}/{{$tbid}}/fid/{{$d->f_id}}/edit">修改系统字段</a>]
								@else
									[<a href="{{url('admin/modTb')}}/{{$tbid}}//edit">修改</a>]
									[<a href="{{url('admin/modTb')}}/{{$tbid}}/xxx" class="ajaxDel" token="<?php echo csrf_token(); ?>">删除</a>]
								@endif
							</td>
						</tr>
					@endforeach
					<tr>
						<td><input type="button" value="修改排序" id="set_myorder" class="subm_btns"></td>
						<td colspan="5"></td>
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
<script>
	var msg="{{session('msg')}}";
	if(msg.length>0){
		// layer.msg("{{session('msg')}}");//最简单形式
		layer.msg(msg,{
			shade: 0.3,
			shadeClose:true,
			time:1200
		});
	}
	//修改排序
	$('#set_myorder').click(function(e) {
		var cur=$(this);
		var forder=[];
		var fname=[];
		$('#field_tb .f_myorder').each(function(index, el) {
			fname[index]=$(this).attr('fname');
			forder[index]=$(this).val();
		});
		var name=JSON.stringify(fname);
		var order=JSON.stringify(forder);
		var token='{{csrf_token()}}';
		var d={"_method":"post","_token":token,'fname':name,'forder':order};
		var url="{{url('admin/modTb/field/setOrder')}}";
		$.post(url, d, function(data) {
			// console.log(data);return;
			layer.msg(data,{
				shade: 0.3,
				shadeClose:true,
				time:1200
			},function(){
				location.reload();
			});
		});
	});
	//切换主副表
	$('.toggletb').click(function(e) {
		var fname=$(this).attr('fname');
		alert('主副表转换功能待开发');
	});
</script>