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
		<li>建立/修改系统模型</li>
	</ul>
	<div class="clear"></div>
	<div class="tab_content">
		@if ($act=='create')
			<?php 
				$action=url('admin/mods');	//create的提交地址
				$method="post";
				$hidden='<input type="hidden" name="mod_tb_id" value="'.$tbid.'">';
				$hidden.='<input type="hidden" name="mod_tb_name" value="'.$tbname.'">';
			?>
		@elseif($act=='edit')
		    <?php 
		    	$action=url('admin/mods').'/'.$modid;  //update的提交地址
				$method="put";
		    ?>
		@endif
		<form action="{{$action}}" method="post">
			{!! method_field($method) !!}
			{!! csrf_field() !!}
			{!! $hidden or null !!}
			<div class="wrap_post">
				<table cellpadding="1" cellspacing="1" class="post_tb">
					<tbody>
					<tr>
						<td>模型名称：</td>
						<td>
							<input type="text" class="input400" name="mod_name" id="mod_name" value="{{$data->mod_name or old('mod_name')}}{{$copyer->mod_name or ''}}">&nbsp;*(比如："新闻系统模型")
						</td>
					</tr>
					<tr>
						<td>模型别名：</td>
						<td>
							<input type="text" class="input400" name="mod_alias_name" id="mod_alias_name" value="{{$data->mod_alias_name or old('mod_alias_name')}}{{$copyer->mod_alias_name or ''}}">&nbsp;(比如："新闻"，用于前台显示)
						</td>
					</tr>
					<tr>
						<td>显示顺序：</td>
						<td>
							<input type="text" class="input400" name="mod_myorder" id="mod_myorder" value="{{$data->mod_myorder or old('mod_myorder')}}{{$copyer->mod_myorder or ''}}">&nbsp;(值越小显示越前面)
						</td>
					</tr>
					<tr>
						<td colsapn='2'>选择本模型的字段项</td>
					</tr>
					<tr>
						<td colsapn='2'>
							<table>
								<tr>
									<td>ddd</td>
									<td>eee</td>
									<td>ggg</td>
									<td>hhh</td>
								</tr>
								<tr>
									<td>eee</td>
									<td>ccc</td>
									<td>eee</td>
									<td>lll</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>录入表单模板：
							<div>
								<input type="checkbox" name="autoform" id="autoform">
								<label for="autoform">自动生成</label>
							</div>
						</td>
						<td>
							<textarea name="mod_form" id="mod_form">{{$data->mod_form or old('mod_form')}}{{$copyer->mod_form or ''}}</textarea>
						</td>
					</tr><!-- 
					<tr>
						<td>前台投稿表单模板：
							<div>
								<input type="checkbox" name="autocform" id="autocform">
								<label for="autocform">自动生成</label>
							</div>
						</td>
						<td>
							<textarea name="mod_contribution_form" id="mod_contribution_form">{{$data->mod_contribution_form or old('mod_contribution_form')}}{{$copyer->mod_contribution_form or ''}}</textarea>
						</td>
					</tr> -->
					<tr>
						<td>模型注释： </td>
						<td id="areah120">
							<textarea name="mod_note" id="mod_note">{{$data->mod_note or old('mod_note')}}{{$copyer->mod_note or ''}}</textarea>
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
			if("<?php echo $act ?>"!="update"){
				clearForm();
			}
		});
	}
</script>