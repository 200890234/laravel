<script type="text/javascript" src="/e/data/ecmseditor/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    language : 'zh_CN',
    theme: "modern",
	skin: 'lightgray',
    height: 400,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager qrcode "
   ],
   templates: [ 
        {title: 'Some title 1', description: 'Some desc 1', content: 'My content'}, 
        {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'} 
    ],
   relative_urls: false,
   remove_script_host: false,
   force_p_newlines:false,
   toolbar1: "undo redo | code bbcode pagebreak responsivefilemanager qrcode | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons", 
   toolbar2: "save styleselect fontselect fontsizeselect ",
   external_filemanager_path:"/e/data/ecmseditor/tinymce/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "/e/data/ecmseditor/tinymce/filemanager/plugin.js"}
 }); 
 
jQuery(document).ready(function ($) {
      $('.iframe-btn').fancybox({
	  'width'	: 880,
	  'height'	: 570,
	  'type'	: 'iframe',
	  'autoScale'   : false
      });
      $('#download-button').on('click', function() {
	    ga('send', 'event', 'button', 'click', 'download-buttons');      
      });
      $('.toggle').click(function(){
	    var _this=$(this);
	    $('#'+_this.data('ref')).toggle(200);
	    var i=_this.find('i');
	    if (i.hasClass('icon-plus')) {
		  i.removeClass('icon-plus');
		  i.addClass('icon-minus');
	    }else{
		  i.removeClass('icon-minus');
		  i.addClass('icon-plus');
	    }
      });
}); 
</script> 
<textarea id="newstext" name="newstext" style="width:100%;height:400px;visibility:hidden;"><?=$ecmsfirstpost==1?"":stripSlashes($r['newstext'])?> </textarea>
