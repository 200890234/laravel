<?php
//---------------------------用户自定义标签函数文件
//列表模板之列表式分页 yetpress_cn
function yetpress_pager($num,$page,$dolink,$type,$totalpage,$line,$ok,$search="",$add){
	global $fun_r,$public_r;
	if($num<=$line)
	{
		$pager['showpage']='';
		return $pager;
	}
	//文件名
	if(empty($add['dofile']))
	{
		$add['dofile']='index';
	}
	//静态页数
	$repagenum=$add['repagenum'];
	$page_line=$public_r['listpagelistnum'];
	$snum=2;
	//$totalpage=ceil($num/$line);//取得总页数
	$firststr='<li><a title="Total record">&nbsp;<b>'.$num.'</b> </a></li>';
	//上一页
	if($page<>1)
	{
		$toppage='<li><a href="'.$dolink.$add['dofile'].$type.'">'.$fun_r['startpage'].'</a></li>';
		$pagepr=$page-1;
		if($pagepr==1)
		{
			$prido=$add['dofile'].$type;
		}
		else
		{
			$prido=$add['dofile'].'_'.$pagepr.$type;
		}
		$prepage='<li><a href="'.$dolink.$prido.'">'.$fun_r['pripage'].'</a></li>';
	}
	//下一页
	if($page!=$totalpage)
	{
		$pagenex=$page+1;
		$nextpagelink=$repagenum&&$repagenum<$pagenex?eReturnRewritePageLink2($add,$pagenex):$dolink.$add['dofile'].'_'.$pagenex.$type;
		$lastpagelink=$repagenum&&$repagenum<$totalpage?eReturnRewritePageLink2($add,$totalpage):$dolink.$add['dofile'].'_'.$totalpage.$type;
		$nextpage='<li><a href="'.$nextpagelink.'">'.$fun_r['nextpage'].'</a></li>';
		$lastpage='<li><a href="'.$lastpagelink.'">'.$fun_r['lastpage'].'</a></li>';
	}
	$starti=$page-$snum<1?1:$page-$snum;
	$no=0;
	for($i=$starti;$i<=$totalpage&&$no<$page_line;$i++)
	{
		$no++;
		if($page==$i)
		{//当前页
			$is_1='<li><a href="'.$thispagelink.'" class="listpage_on">';
			$is_2="</a></li>";
		}
		elseif($i==1)
		{//首页
			$is_1='<li><a href="'.$dolink.$add['dofile'].$type.'">';
			$is_2="</a></li>";
		}
		else
		{
			$thispagelink=$repagenum&&$repagenum<$i?eReturnRewritePageLink2($add,$i):$dolink.$add['dofile'].'_'.$i.$type;
			$is_1='<li><a href="'.$thispagelink.'">';
			$is_2="</a></li>";
		}
		$returnstr.='&nbsp;'.$is_1.$i.$is_2;
	}
	$returnstr=/*$firststr.*/$toppage.$prepage.$returnstr.$nextpage.$lastpage;
	$pager['showpage']=$returnstr;
	return $pager;
}


//列表模板分页函数   下拉式分页 yetpress_cn wap
function wap_droppager($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$search="",$add){
	global $fun_r;
	//文件名
	if(empty($add['dofile']))
	{
		$add['dofile']='index';
	}
	//静态页数
	$repagenum=$add['repagenum'];
	//首页
	if($pagenum<>1)
	{
		$pagetop="<a href='".$dolink.$add['dofile'].$dotype."'>".$fun_r['startpage']."</a>&nbsp;&nbsp;";
	}
	else
	{
		$pagetop=$fun_r['startpage']."&nbsp;&nbsp;";
	}
	//上一页
	if($pagenum<>1)
	{
		$pagepr=$pagenum-1;
		if($pagepr==1)
		{
			$prido=$add['dofile'].$dotype;
		}
		else
		{
			$prido=$add['dofile'].'_'.$pagepr.$dotype;
		}
		// $pagepri="<a href='".$dolink.$prido."'>".$fun_r['pripage']."</a>&nbsp;&nbsp;";
		$pagepri='<div class="pagePrev icon-pagePrev icon-cnListP"><a href="'.$dolink.$prido.'">'.$fun_r['pripage'].'</a></div>';
	}
	else
	{
		// $pagepri=$fun_r['pripage']."&nbsp;&nbsp;";
		$pagepri='<div class="pagePrev icon-pagePrev icon-cnListP pageDisable">'.$fun_r['pripage'].'</div>';
	}
	//下一页
	if($pagenum<>$page)
	{
		$pagenex=$pagenum+1;
		$nextpagelink=$repagenum&&$repagenum<$pagenex?eReturnRewritePageLink2($add,$pagenex):$dolink.$add['dofile'].'_'.$pagenex.$dotype;
		// $pagenext="<a href='".$nextpagelink."'>".$fun_r['nextpage']."</a>&nbsp;&nbsp;";
		$pagenext='<div class="pageNext icon-pageNext icon-cnListN "><a href="'.$nextpagelink.'">'.$fun_r['nextpage'].'</a></div>';
	}
	else
	{
		// $pagenext=$fun_r['nextpage']."&nbsp;&nbsp;";
		$pagenext='<div class="pageNext icon-pageNext icon-cnListN pageDisable">'.$fun_r['nextpage'].'</div>';
	}
	//尾页
	if($pagenum==$page)
	{
		$pageeof=$fun_r['lastpage'];
	}
	else
	{
		$lastpagelink=$repagenum&&$repagenum<$page?eReturnRewritePageLink2($add,$page):$dolink.$add['dofile'].'_'.$page.$dotype;
		$pageeof="<a href='".$lastpagelink."'>".$fun_r['lastpage']."</a>";
	}
	$options="";
	//取得下拉页码
	if(empty($search))
	{
		for($go=1;$go<=$page;$go++)
		{
			if($go==1)
			{$file=$add['dofile'].$dotype;}
			else
			{$file=$add['dofile'].'_'.$go.$dotype;}
			$thispagelink=$repagenum&&$repagenum<$go?eReturnRewritePageLink2($add,$go):$dolink.$file;
			if($ok==$go)
			{$select=" selected";}
			else
			{$select="";}
			$myoptions.="<option value='".$thispagelink."'>".$fun_r['gotos'].$go.$fun_r['gotol']."</option>";
			// $options.="<option value='".$thispagelink."'".$select.">".$fun_r['gotos'].$go.$fun_r['gotol']."</option>";
			$options.="<option class='pageOptions' value='".$thispagelink."'".$select.">".$go.'&nbsp;/&nbsp;'.$page."</option>";
		}
	}
	else
	{
		$myoptions=$search;
		$options=str_replace("value='".$dolink.$add['dofile'].'_'.$ok.$dotype."'>","value='".$dolink.$add['dofile']."_".$ok.$dotype."' selected>",$search);
	}
	$options="<select class='pageSelect' name=select onchange=\"self.location.href=this.options[this.selectedIndex].value\">".$options."</select>";
	//分页
	// $pagelink=$pagetop.$pagepri.$pagenext.$pageeof;
	$opts='<div id="pagenationSelectDiv3" class="pagenationSelectDiv">'
			.$options.
		'</div>';
	$pagelink=$pagepri.$opts.$pagenext;
	//替换模板变量
	// $pager['showpage']=ReturnListpageStr($pagenum,$page,$lencord,$num,$pagelink,$options);
	$pager['showpage']=$pagelink;
	$pager['option']=$myoptions;
	return $pager;
}

?>