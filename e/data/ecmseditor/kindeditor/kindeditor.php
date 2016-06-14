<link rel="stylesheet" href="/e/data/ecmseditor/kindeditor/themes/default/default.css" />
    <script charset="utf-8" src="/e/data/ecmseditor/kindeditor/kindeditor-all.js"></script>
    <script>
		KindEditor.options.filterMode = false;
        KindEditor.ready(function(K) {
            var editor1 = K.create('textarea[name="newstext"]', {
                cssPath : '/e/data/ecmseditor/kindeditor/plugins/code/prettify.css',
                uploadJson : '/e/data/ecmseditor/kindeditor/php/upload_json.php',
                fileManagerJson : '/e/data/ecmseditor/kindeditor/php/file_manager_json.php',
                allowFileManager : true,
				newlineTag : 'p',//回车换行设置可选'br'
            });
		
        });
    </script>


<!--<textarea name="newstext" style="width:100%;height:570px;visibility:hidden;"><?//=$ecmsfirstpost==1?"":stripSlashes($r[newstext])?> </textarea>-->
<?php //输出的内容转换掉<,>和空格，否则input之类的或直接解析成文本框
$newstext=stripSlashes($r[newstext]);
$newstext = str_replace('&nbsp;', '&amp;nbsp;', $newstext);
$newstext = str_replace('&gt;', '&amp;gt;', $newstext);
$newstext = str_replace('&lt;', '&amp;lt;', $newstext);
 ?>
<textarea name="newstext" style="width:100%;height:570px;visibility:hidden;"><?=$ecmsfirstpost==1?"":$newstext?> </textarea>