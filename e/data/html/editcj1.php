<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr><td bgcolor=ffffff>标题</td><td bgcolor=ffffff><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10"><a onclick="foreColor();"><img src="../data/images/color.gif" width="21" height="21" align="absbottom"></a>
  </td>
</tr>
</table></td></tr><tr><td bgcolor=ffffff>副标题</td><td bgcolor=ffffff><input name="ftitle" type="text" size=60 id="ftitle" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[ftitle]))?>">
</td></tr><tr><td bgcolor=ffffff>视频附件</td><td bgcolor=ffffff>
<input name="video_file" type="text" id="video_file" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[video_file]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?<?=$ecms_hashur[ehref]?>&type=0&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=video_file','','width=700,height=550,scrollbars=yes');" title="选择已上传的文件"><img src="../data/images/changefile.gif" border="0" align="absbottom"></a>
</td></tr><tr><td bgcolor=ffffff>发布时间</td><td bgcolor=ffffff><input name="newstime" type="text" value="<?=$r[newstime]?>"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'"></td></tr><tr><td bgcolor=ffffff>标题图片</td><td bgcolor=ffffff><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?<?=$ecms_hashur[ehref]?>&type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a></td></tr><tr><td bgcolor=ffffff>内容简介</td><td bgcolor=ffffff><textarea name="smalltext" cols="80" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td bgcolor=ffffff>作者</td><td bgcolor=ffffff><?php
$writer_sql=$empire->query("select writer from {$dbtbpre}enewswriter");
while($w_r=$empire->fetch($writer_sql))
{
	$w_class.="<option value='".$w_r[writer]."'>".$w_r[writer]."</option>";
}
?>
<input type=text name=writer value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[writer]))?>" size=""> 
        <select name="w_id" id="select7" onchange="document.add.writer.value=document.add.w_id.value">
          <option>选择作者</option>
		  <?=$w_class?>
        </select>
<input type="button" name="wbutton" value="增加作者" onclick="window.open('NewsSys/writer.php?<?=$ecms_hashur[ehref]?>&addwritername='+document.add.writer.value);">
</td></tr><tr><td bgcolor=ffffff>信息来源</td><td bgcolor=ffffff><?php
$befrom_sql=$empire->query("select sitename from {$dbtbpre}enewsbefrom");
while($b_r=$empire->fetch($befrom_sql))
{
	$b_class.="<option value='".$b_r[sitename]."'>".$b_r[sitename]."</option>";
}
?>
<input type="text" name="befrom" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[befrom]))?>" size=""> 
        <select name="befrom_id" id="befromid" onchange="document.add.befrom.value=document.add.befrom_id.value">
          <option>选择信息来源</option>
          <?=$b_class?>
        </select>
<input type="button" name="wbutton" value="增加来源" onclick="window.open('NewsSys/BeFrom.php?<?=$ecms_hashur[ehref]?>&addsitename='+document.add.befrom.value);">
</td></tr><tr><td bgcolor=ffffff>新闻正文</td><td bgcolor=ffffff><?php 
$editor_url=str_replace(array('&editor=2&ckk=2','&editor=3&ckk=3'),array('','',),$_SERVER['REQUEST_URI'] ) ;
$editor=$_GET['editor'];
$ckk=$_GET['ckk']?$_GET['ckk']:'3' ;//1百度编辑器,2帝国自带编辑器,3kinder编辑器,4ckeditor编辑器,5tinymce编辑器

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
        <a <?=$editor==2||$ckk==2?'class="editored"':'' ?> href="<?=$editor_url ?>&editor=2&ckk=2">infoeditor编辑器(自带)</a> 
        <a <?=$editor==3||$ckk==3?'class="editored"':'' ?> href="<?=$editor_url ?>&editor=3&ckk=3">kindeditor编辑器</a> 
	</td>
		</tr>
	</table>
<?php }elseif($editor==2||$ckk==2){ //原生编辑器 ?>
<?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":stripSlashes($r[newstext]),"Default","","500","100%")?>
<?php }elseif($editor==3||$ckk==3) { ?>
<?php include(ECMS_PATH.'/e/data/ecmseditor/kindeditor/kindeditor.php');?>
<?php } ?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
<tr> 
<td bgcolor="#FFFFFF"> <input name="dokey" type="checkbox" value="1"<?=$r[dokey]==1?' checked':''?>>
关键字替换&nbsp;&nbsp; <input name="copyimg" type="checkbox" id="copyimg" value="1">
远程保存图片(
<input name="mark" type="checkbox" id="mark" value="1">
<a href="SetEnews.php?<?=$ecms_hashur[ehref]?>&" target="_blank">加水印</a>)&nbsp;&nbsp; 
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
</table></td></tr>