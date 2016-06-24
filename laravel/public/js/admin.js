$(function(){
	//替换url参数方法
	function replaceUrlParam(oldUrl, paramName, replaceWith) {
	    var re = eval('/(' + paramName + '=)([^&]*)/gi');
	    var nUrl = oldUrl.replace(re, paramName + '=' + replaceWith);
	    return nUrl;
	}
	// 导航特效
	$('.topul>li').hover(function() {
		$(this).find("ul").stop().slideDown(300);
	}, function() {
		$(this).find("ul").stop().slideUp(300);
	});
	//左侧菜单伸缩
	$('.leftsubul').eq(0).show();
	$(".leftul>li").eq(0).find('font').html("&ndash;");
	$(".leftul>li").click(function(e) {
		var state=$(this).find('font').html();
		if(state=="+"){
			$(this).find('.leftsubul').slideDown("100");
			$(this).find('font').html("&ndash;");
		}else{
			$(this).find('.leftsubul').slideUp("100");
			$(this).find('font').html("+");
		}
	});
	//菜单加载
	$("#top_menu a").click(function() {
		var mtype=$(this).attr('mtype');
		var frame=$(this).attr('frame');
		if(mtype){
			var url="../admin/left?mtype="+mtype;
			$('#left').attr("src",url);
		}else if(frame){
			// var url="inc/menu.php?mtype="+mtype;
			$('#right').attr("src",frame);
		}
	});
	//左侧菜单链接点击
	$(".leftul li ul li a").click(function(e) {
		e.preventDefault();
		var link=$(this).attr("href");
		$(".leftsubul").find("a").css("background","#1ABC9C");
		$(this).css("background","#0b7076");
		// $('#right').attr("src",link);
		$(window.parent.document).find('#right').attr("src",link);
		return false;
	});
	//主题选项切换
	$(".body_menutab li").length>1?$(".body_menutab li").eq(0).css("background","#075A5F"):"";//选项卡多个的时候第一个默认选中
	
	$('.tab_content:gt(0)').hide();
	$(".body_menutab li").click(function() {
		var index=$(this).index();
		$(this).css("background","#075A5F");
		$(this).siblings('li').css("background","#1ABC9C");
		$('.tab_content').eq(index).show();
		$('.tab_content').eq(index).siblings(".tab_content").hide();
	});
	//表格移入行的背景色
	$('.def_row_tb tr').hover(function(){
		$(this).addClass('hover_row');
	},function(e){
		$(this).removeClass('hover_row');
	})
	//设置checkbox状态
	$(".c_all").click(function() {//全选 .c_item是传送数据需要获取的内容
		if($(this).is(":checked")){
			$('.c_box').prop("checked",true);
		}else{
			$('.c_box').prop("checked",false);
		}
	});
	$("#batDelete").click(function() {
		var url=$(this).attr('url');
		//获取所有选中的值 用,拼接
		var len=$('.c_item:checked').length;
		var str="";
		$('.c_item:checked').each(function() {
			str+=$(this).val()+",";
		});
		str=str.substring(0,str.length-1);
		if(str==""){
			alert("未做任何选择");
		}else{//批量删除ajax
			var url=url+str;
			$.get(url, function(data) {
				alert(data);
				var link=window.location.href;
				link=replaceUrlParam(link,"page","1");
				window.location.href=link;//跳转回到第一页
			});
		}
	});
	//刷新后台登录验证码
	function refCode(ele){
		$(ele).click(function() {
			var src=$("#capCode").attr("src");
			var newsrc=src+"?"+Math.random(12);
			$("#capCode").attr("src",newsrc);
		});
	}
	refCode('#capCode');
	refCode('#refCode');
})