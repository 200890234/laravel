<?php 
	$mtype=$_GET["mtype"];//一级菜单类型 sys,info,column,tpl,user
	$sysArr=array(
				"系统设置"=>array(
					"参数设置"=>"setConf.php?",
					"扩展设置"=>"setExtend.php?",
				),
				"数据库及开发日志"=>array(
					"备份数据"=>"setConf.php?",
					"恢复数据"=>"setExtend.php?",
					"数据字典文章管理"=>"dataDict.php?",
					"开发日志文章管理"=>"devNote.php?",
				),
				"数据表与系统模型"=>array(
					"新建系统模型表"=>"sysModelAdd.php?",
					"管理系统模型表"=>"sysModel.php?",
				),
			);
	$infoArr=array();
	$columnArr=array(
				"管理栏目"=>array(
					"栏目列表"=>"setConf.php?",
					"新建栏目"=>"post.php?",
				),
			);
	$tplArr=array();
	$userArr=array();

	$arrName=$mtype."Arr";
?>
<link rel="stylesheet" href="../css/admin.css">
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/common.js"></script>
<ul class="leftul">
<?php foreach ($$arrName as $key => $value) :?>
	<li><a href="javascript:void(0);"><font>+</font><?php echo $key; ?></a>
		<ul class="leftsubul">
			<?php foreach ($value as $k=>$v) :?>
				<li><a href="<?php echo $v; ?>"><?php echo $k; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</li>
<?php endforeach; ?>
<div class="blank10"></div>
<div class="blank20"></div>
</ul>