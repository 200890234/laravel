@include('inc.assets')
<p>位置： 数据字典文章管理</p>
				<div class="col_note">
					<ul>
						<li>操作选项：<a href="{{ url('admin/postTemp/tb/aritcle_others/type/dictData/act/add') }}">增加信息</a></li>
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
											<th width="50%">标题(共{{count($lists)}}/{!! $lists->count() !!}条)</th>
											<th width="20%">发布时间</th>
											<th width="17%">操作</th>
										</tr>
										@foreach ($lists as $list)
										    <tr>
												<td sytle="text-align:center;"><input type="checkbox" name="" class="c_box c_item" id="list_ids_{{$list->la_id}}" value="{{$list->la_id}}"><label for="list_ids_{{$list->la_id}}"></label></td>
												<td>{{$list->la_id}}</td>
												<td class="post_l"><a href="">{{mb_substr($list->la_title,0,"25","utf-8")}}</a></td>
												<td>{{date('Y-m-d H:i:s',$list->la_time)}}</td>
												<td><a href="{{ url('admin/updateTemp/tb/article_others/id') }}/{{ $list->la_id }}">修改</a> | <a href="{{ url('admin/deleteTemp/tb/article_others/id/') }}/{{ $list->la_id }}">删除</a></td>
											</tr>
										@endforeach
										<tr>
											<td sytle="text-align:center;"><input type="checkbox" name="" class="c_box c_all" id="c_all_b"><label for="c_all_b"></td>
											<td colspan="4" class="post_l"><input type="button" class="subm_btns" value="批量删除" id="batDelete" url="{{ url('admin/deleteTemp') }}/tb/article_others/id/"></td>
										</tr>
									</tbody>
								</table>
								<div id="listpage">{!! $lists->links() !!}</div>
								<div class="clear"></div>
							</div>
						</form>
					</div>
					<div class="blank50"></div>
					<div class="blank10"></div>
					<div class="blank5"></div>
				</div>
				<!-- 分页相关帮助函数
				$results->count()
				$results->currentPage()
				$results->firstItem()
				$results->hasMorePages()
				$results->lastItem()
				$results->lastPage() (Not available when using simplePaginate)
				$results->nextPageUrl()
				$results->perPage()
				$results->previousPageUrl()
				$results->total() (Not available when using simplePaginate)
				$results->setPath('custom/url'); 自定义链接格式
				$results->url($page) -->