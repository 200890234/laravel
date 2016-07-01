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
		<li>建立/修改数据表</li>
	</ul>
	<div class="clear"></div>
	<div class="tab_content">
		@if (isset($data) && is_object($data))
			<?php 
				$action=url('admin/modTb').'/'.$data->tb_id;  //update的提交地址
				$method="put";
			?>
		@else
		    <?php 
		    	$action=url('admin/modTb');	//create的提交地址
				$method="post";
		    ?>
		@endif
		<form action="{{$action}}" method="post">
			{!! method_field($method) !!}
			{!! csrf_field() !!}
			<div class="wrap_post">
				<table cellpadding="1" cellspacing="1" class="post_tb">
					<tbody>
					<tr>
						<td>数据表名：</td>
						<td>
							{{$prefix}} ecms_ <input type="text" class="input300" name="tb_name" id="tb_name" value="{{$data->tb_name or old('tb_name')}}{{$copyer->tb_name or ''}}">&nbsp;*(如:news,只能由字母、数字组成)
						</td>
					</tr>
					<tr>
						<td>数据表中文名：</td>
						<td>
							<input type="text" class="input400" name="tb_namecn" id="tb_namecn" value="{{$data->tb_namecn or old('tb_namecn')}}{{$copyer->tb_namecn or ''}}">&nbsp;*(如:新闻数据表)
						</td>
					</tr>
					<tr>
						<td>数据表简介：</td>
						<td id="area600">
							<textarea name="tb_intro" id="tb_intro">{{$data->tb_intro or old('tb_intro')}}{{$copyer->tb_intro or ''}}</textarea>
						</td>
					</tr>
					</tbody>
				</table>
				<div class="clear"></div>
			</div>
			<div class="post_action">
				<input type="submit" class="subm_btns" value="提交">
				<input type="reset" class="subm_btns" value="重置">
			</div>
		</form>
	</div>
	<div class="blank50"></div>
	<div class="blank10"></div>
	<div class="blank5"></div>
</div>
<?php
	$errorinfo=$errors->messages();
	$errinfo=[];
	foreach ($errorinfo as $k => $v) {
		$errinfo[$k]=$v[0];//新的错误信息数组
	}
	$errjson=json_encode($errinfo);//转换json 易于js处理
?>
<script>
	$(function(){
		// layer.tips('只想提示地精准些', '#sitename',{tipsMore: true,time:0}); //tips功能
		var errdata=eval('('+'<?php echo $errjson ?>'+')');
		for(i in errdata){
			var ele="#"+i;
			layer.tips(errdata[i], ele,{tipsMore: true,time:0}); //tips功能
		}
	})
	if("{{session('msg')}}"){
		// layer.msg("{{session('msg')}}");//最简单形式
		layer.msg("{{session('msg')}}",{
			shade: 0.3,
			shadeClose:true,
			time:1200
		},function(){
			clearForm();
		});
	}
</script>