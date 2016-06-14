<?php
if(!defined('InEmpireCMS'))
{exit();}
?><tr bgcolor='#FFFFFF' height=25><td>栏目分类关键字</td><td>
<input name="categories" type="text" id="categories" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars($addr[categories])?>" size="60">
</td></tr><tr bgcolor='#FFFFFF' height=25><td>终极栏目页面内容</td><td><?=ECMS_ShowEditorVar("column_content",$ecmsfirstpost==1?"":$addr[column_content],"Default","","300","90%")?>
</td></tr>