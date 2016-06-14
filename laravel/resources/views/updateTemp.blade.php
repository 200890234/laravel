@include('inc.assets')
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
<p>位置： 数据字典文章管理</p>
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
						<li>基本信息</li>
						<li>选项设置</li>
					</ul>
					<div class="clear"></div>
					<form action="{{ url('admin/doUpdateTemp') }}" method="post">
						<div class="tab_content">
							<div class="wrap_post">
								<div class="post_note">
									<input type="submit" class="subm_btns" value="提交">
									<input type="reset" class="subm_btns" value="重置">
								</div>
								<table cellpadding="1" cellspacing="1" class="post_tb">
									<tbody>
										<tr>
											<td colspan="2" style="height:auto;">
												<span class="error"><?php echo loopWithChar($errors->all(),'，') ?></span>
											</td>
										</tr>
										<tr>
											<td class="post_r">标题：</td>
											<td>
												<input type="text" class="input600" name="title" value="{{ $list[0]->la_title }}">
											</td>
										</tr>
										<tr>
											<td class="post_r">内容：</td>
											<td><textarea name="content" id="content">{{ $list[0]->la_content }}</textarea></td>
										</tr>
										<input type="hidden" name="updateTime" id="updateTime">
										<input type="hidden" name="id" id="id" value="{{$id}}">
										<input type="hidden" name="tb" id="tb" value="{{$tb}}">
									</tbody>
								</table>
								<div class="blank10"></div>
							</div>
							{!! csrf_field() !!}
						</div>
						<div class="tab_content">
							<div class="wrap_post">
									附加选项
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
					var editor=$('#content').xheditor({
						background:"#C7DFD1",
						upLinkUrl:"{{ url('xh/upload') }}",
						upLinkExt:"zip,rar,txt,doc,xls,ppt",
						upImgUrl:"{{ url('xh/upload') }}",
						upImgExt:"jpg,jpeg,gif,png",
						upFlashUrl:"{{ url('xh/upload') }}",
						upFlashExt:"swf",
						upMediaUrl:"{{ url('xh/upload') }}",
						upMediaExt:"avi"
					});
				</script>