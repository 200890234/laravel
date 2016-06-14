<?php 
$editor_url=str_replace(array('&editor=1&ckk=1','&editor=2&ckk=2','&editor=3&ckk=3','&editor=4&ckk=4','&editor=5&ckk=5'),array('','','','',''),$_SERVER['REQUEST_URI'] ) ;
$editor=$_GET['editor'];
$ckk=$_GET['ckk']?$_GET['ckk']:'2' ;//1百度编辑器,2帝国自带编辑器,3kinder编辑器,4ckeditor编辑器,5tinymce编辑器

?>
	<style>
		.editored{
			background: #00BFBF;
			padding: 5px 5px;
		}
	</style>
	<table width="100%" align="center" cellpadding="3" cellspacing="1" class="tableborder">
		<tr class="header"> 
	<td width="16%" height="25">
				<div align="left">选择编辑器</div>
	</td>
	<td>
	<a <?=$editor==1||$ckk==1?'class="editored"':'' ?> href="<?=$editor_url ?>&editor=1&ckk=1">ueditor编辑器</a>  <a <?=$editor==2||$ckk==2?'class="editored"':'' ?> href="<?=$editor_url ?>&editor=2&ckk=2">infoeditor编辑器(自带)</a> <a <?=$editor==3||$ckk==3?'class="editored"':'' ?> href="<?=$editor_url ?>&editor=3&ckk=3">kindeditor编辑器</a> <a <?=$editor==4||$ckk==4?'class="editored"':'' ?> href="<?=$editor_url ?>&editor=4&ckk=4">ckeditor编辑器</a> <a <?=$editor==5||$ckk==5?'class="editored"':'' ?> href="<?=$editor_url ?>&editor=5&ckk=5">tinymce编辑器</a>
	</td>
		</tr>
	</table>
<?php if($editor==1||$ckk==1){ //百度编辑器 ?>
<?php include(ECMS_PATH.'/e/data/ecmseditor/ueditor/php/editor.php');?>
<?php }elseif($editor==2||$ckk==2){ //原生编辑器 ?>
<?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":stripSlashes($r[newstext]),"Default","","300","100%")?>
<?php }elseif($editor==3||$ckk==3) { ?>
<?php include(ECMS_PATH.'/e/data/ecmseditor/kindeditor/kindeditor.php');?>
<?php }elseif($editor==4||$ckk==4) { ?>
<?php include(ECMS_PATH.'/e/data/ecmseditor/ckeditor/ckeditor.php');?>
<?php }elseif($editor==5||$ckk==5) {  ?>
<?php include(ECMS_PATH.'/e/data/ecmseditor/tinymce/tinymce.php');?>
<?php } ?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
<tr> 
<td bgcolor="#FFFFFF"> <input name="dokey" type="checkbox" value="1"<?=$r[dokey]==1?' checked':''?>>
关键字替换&nbsp;&nbsp; <input name="copyimg" type="checkbox" id="copyimg" value="1">
远程保存图片(
<input name="mark" type="checkbox" id="mark" value="1">
<a href="SetEnews.php" target="_blank">加水印</a>)&nbsp;&nbsp; 
<input name="copyflash" type="checkbox" id="copyflash" value="1">
远程保存FLASH(地址前缀： 
<input name="qz_url" type="text" id="qz_url" size="">
)</td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><input name="repimgnexturl" type="checkbox" id="repimgnexturl" value="1"> 图片链接转为下一页&nbsp;&nbsp; <input name="autopage" type="checkbox" id="autopage" value="1">自动分页,每 
<input name="autosize" type="text" id="autosize" value="5000" size="5">
个字节为一页&nbsp;&nbsp; 取第 
<input name="getfirsttitlepic" type="text" id="getfirsttitlepic" value="" size="1">
张上传图为标题图片( 
<input name="getfirsttitlespic" type="checkbox" id="getfirsttitlespic" value="1">
缩略图: 宽 
<input name="getfirsttitlespicw" type="text" id="getfirsttitlespicw" size="3" value="<?=$public_r[spicwidth]?>">
*高
<input name="getfirsttitlespich" type="text" id="getfirsttitlespich" size="3" value="<?=$public_r[spicheight]?>">
)</td>
</tr>
</table>
///////////////////////////////////////////////
1\以上代码放入：数据表与系统模型->管理数据表->某表管理字段->newstext修改->输入表单替换html代码
直接复制代码替换就行。
2\编辑器工具放入e/data/ecmseditor/
3\后台刷新，编辑使用！
