<script type="text/javascript" src="/e/data/ecmseditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/e/data/ecmseditor/ckfinder/ckfinder.js"></script>
<textarea id="newstext" name="newstext" style="width:100%;height:50%;visibility:hidden;"><?=$ecmsfirstpost==1?"":stripSlashes($r[newstext])?> </textarea>
<script>
CKEDITOR.replace( 'newstext', {
				//fullPage: true,
				allowedContent: true,
				filebrowserBrowseUrl : '/e/data/ecmseditor/ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : '/e/data/ecmseditor/ckfinder/ckfinder.html?Type=Images',
				filebrowserFlashBrowseUrl : '/e/data/ecmseditor/ckfinder/ckfinder.html?Type=Flash',
				filebrowserUploadUrl :'/e/data/ecmseditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : '/e/data/ecmseditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl :'/e/data/ecmseditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			});
</script>
