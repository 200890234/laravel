<?php 
$ueurl = $public_r['newsurl']."e/data/ecmseditor/ueditor/" ;// UE编辑器地址
?>
<script type="text/javascript" >
	window.UEDITOR_HOME_URL = "<?=$ueurl?>";
</script>
<script type="text/javascript" charset="utf-8" src="<?=$ueurl?>ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?=$ueurl?>ueditor.all.min.js"></script>
<textarea id="newstext" name="newstext"  style="height:50%;"><?=$ecmsfirstpost==1?"":stripSlashes($r['newstext'])?></textarea>
<script type="text/javascript">
     var editor = UE.getEditor('newstext');
</script>