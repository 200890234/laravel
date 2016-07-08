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
<p>位置： 管理数据表 > 管理数据表副表分表</p>
<div class="main_body">
	<ul class="body_menutab">
		<li>管理副表分表</li>
		<!-- <a href="{{ url('admin/mods') }}/"><li class="menutab_link">增加副表分表</li></a> -->
	</ul>
	<div class="clear"></div>
	<div class="tab_content">
		<div class="wrap_post" style="border-bottom:none;">
			<div class="div_th pl10">增加副表分表</div>
			<div class="blank5"></div>
			<div class="pl10">
				<span style="font-size:15px;color:#075A5F;">{{$prefix}}{{$tbname}}_data_&nbsp;
					<input type="text" class="input300 pl5" id="sepid" value="{{ $nextsepid }}">&nbsp;
					<input type="button" class="subm_btns" value="增加" id="addSepTb" token="<?php echo csrf_token(); ?>">&nbsp;*(只能由数字组成)
				</span>
			</div>
			<div class="blank5"></div>
		</div>
		<form action="" method="post">
			<div class="wrap_post">
				<table cellpadding="1" cellspacing="1" class="post_tb list_tb def_row_tb">
					<tbody>
						<tr class="tr_th">
							<th width="12%" align="center">表名</th>
							<th width="40%">记录数</th>
							<th width="48%">操作</th>
						</tr>
						@for ($i = 0; $i < count($sepname); $i++)
						<?php $arr=explode("_",$sepname[$i]); ?>	
					    <tr class="{{$sepid==end($arr)?'def_row':''}}">
							<td>{{$sepname[$i]}}</td>
							<td><a href="">{{$count[$i]}}</a></td>
							<td>
								[<a href="{{ url('admin/modTb/')}}/{{mb_substr($sepname[$i],3)}}/setDefSepTb">设为当前存放表</a>]
								@if ($sepname[$i]!=$prefix.$tbname.'_data_1')
									[<a href="{{ url('admin/modTb') }}/{{ mb_substr($sepname[$i],3) }}/delSepTb" class="ajaxDrop" token="<?php echo csrf_token(); ?>" deltext="确认删除？这将删除表中所有的数据！">删除</a>]
								@endif
							</td>
						</tr>
						@endfor
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
	// ajax新增分表
	$('#addSepTb').click(function(e) {
		var sepid=$('#sepid').val();//分表名的末尾id值
		var tbname='{{$prefix}}{{$tbname}}_data_'+$('#sepid').val();
		var token=$(this).attr('token');
		var d={"_method":"post","_token":token,"tb":tbname,"sepid":sepid};
		var url="{{ url('admin/modTb/addSepTb') }}";
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
</script>