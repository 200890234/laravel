<?php 
	$mtype=$_GET["mtype"];//一级菜单类型 sys,info,column,tpl,user
	$sysArr=array(
				"系统设置"=>array(
					"参数设置"=>"admin/setConf",
					"扩展设置"=>"admin/setExtend",
				),
				"数据库及开发日志"=>array(
					"备份数据"=>"admin/sqlBak",
					"恢复数据"=>"admin/sqlRecovery",
					"数据字典文章管理"=>"admin/dataDict",
					"开发日志文章管理"=>"admin/devNote",
				),
				"数据表与系统模型"=>array(
					"新建数据表"=>"admin/modTb/create",
					"管理数据表"=>"admin/modTb/",
				),
			);
	$infoArr=array();
	$columnArr=array(
				"管理栏目"=>array(
					"栏目列表"=>"admin/setConf",
					"新建栏目"=>"admin/post",
				),
			);
	$tplArr=array();
	$userArr=array();

	$arrName=$mtype."Arr";
?>
@include('admin.inc.assets')
<ul class="leftul">
<?php foreach ($$arrName as $key => $value) :?>
	<li><a href="javascript:void(0);"><font>+</font>{{ $key }}</a>
		<ul class="leftsubul">
			<?php foreach ($value as $k=>$v) :?>
				<li><a href="{{ url($v) }}">{{ $k }}</a></li>
			<?php endforeach; ?>
		</ul>
	</li>
<?php endforeach; ?>
<div class="blank10"></div>
<div class="blank20"></div>
</ul>