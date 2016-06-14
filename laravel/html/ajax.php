<?php 
	$action=$_GET["action"];
	if($action=="setSession"){
		$stype=$_GET["stype"];//menu,account,
		$sname=$_GET["sname"];
		$sval=$_GET["sval"];
		$_SESSION[$stype][$sname]=$sval;
	}


?>