$(function(){
	// heardroom
	// $("#header").headroom();
	
	//query pin 
	// $(".list_left").pin();

	//responsive menu
	function set_menu(){
		var w_all=$(window).width(); //浏览器时下窗口可视区域宽度 
		if(w_all<=854){
			w_tabs=(w_all-221)/4;
			
		}
		/*alert($(document).width());//浏览器时下窗口文档对于象宽度 
		alert($(document.body).width());//浏览器时下窗口文档body的高度*/ 
	}
	set_menu();
	$(window).resize(function(){
		set_menu();
	})

	//设置首页方格右侧的高度
	function setBoxRight(){
		var height=$('.box-item--container').height();
		$(".box-item-right").height(height);
	}
	if($(window).width()>980){
		setBoxRight();
		$(window).resize(function(){
			setBoxRight();
		})
	}
	

	//瀑布流列表
    $("#device").gridalicious({
        gutter: 10,
        width: 218,
        animate: true,
        animationOptions: {
                speed: 150,
                duration: 400,
                complete:function(data){
                    // console.log("站长素材 - sc.chinaz.com"); 
                    set_list_height();
                    $(window).resize(function() {
                    	set_list_height();
                    });
                }
        },
    });


	//列表页高度
	function set_list_height(){
		var screenw=$(window).width();
		if(screenw>608){//608对应media query的625
			var h1=$(".list_left").height();
			var h2=$(".list_middle").height();
			var h3=$(".list_right").height();
			var main_h="";
			if(h1>h2){
				main_h=h1;
			}else{
				main_h=h2;
			}
			if(main_h<h3){main_h=h3;}
			$(".list_left").height(main_h);
			$(".list_middle").height(main_h);
			$(".list_right").height(main_h);
		}	
	}
	$(window).resize(function(e) {
		$(".list_left").height("auto");
		set_list_height();
	});
	if($(".gridalicious").length==0){// 图片列表页不应用此设置
		set_list_height();
		$(window).resize(function(){// 没有奏效
			set_list_height();
		})
	}else{//图片列表页的样式处理
		// $('.list_middle').css({"height":"800px"});
	}

	//栏目介绍伸缩
	$("#intro_title_wrap").click(function(){
		if($(this).text()=="点击展开栏目简介"){
			var objh=$(".list_middle");
			var addh=$('.intro_text').actual('outerHeight');
			$('.intro_text').slideDown(200);
			$(this).stop().text("点击收起栏目简介");
			$(".list_left").animate({"height":objh.height()+addh});
			$(".list_middle").animate({"height":objh.height()+addh});
			$(".list_right").animate({"height":objh.height()+addh});
		}else{
			var objh=$(".list_middle");
			var addh=$('.intro_text').outerHeight();
			$('.intro_text').slideUp(200);
			$(this).text("点击展开栏目简介");
			$(".list_left").animate({"height":objh.height()-addh});
			$(".list_middle").animate({"height":objh.height()-addh});
			$(".list_right").animate({"height":objh.height()-addh});
		}
	})
	//文章图片点击
	$('.content_body img').click(function(){
		var src=$(this).attr("src");
		window.open(src);
	})
	//文章字体大写切换
	$('.font-bigger').click(function() {
		if($(this).text()=="[ bigger ]") {
			$('.content_body').css("font-size","18px");
			$(this).text("[ normal ]");
		}else if($(this).text()=="[ normal ]") {
			$('.content_body').css("font-size","15px");
			$(this).text("[ bigger ]");
		};
	});
})