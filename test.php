<?php 
header("Content-type: text/html; charset=utf-8");
$url = "http://10.178.178.132:8080/sms/sms/send";
//param ?mobiles=15158104951&content=ceshi&templateFlag=true&companyId=igo_wz
//param ?mobiles=15158104951&content=ceshi&templateFlag=true&companyId=igo_wz
//初始化
/*$ch = curl_init();
//设置选项，包括URL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
//执行并获取HTML文档内容
$output = curl_exec($ch);
// $output=iconv("utf-8", "gb2312", $output);
//释放curl句柄
curl_close($ch);
//打印获得的数据
print_r($output);*/
$content="验证码是2315，感谢您注册新通教育网。使用中如有疑问，请致电400 618 8866咨询。祝您愉快！";
//$content=iconv("gb2312","utf-8",$content);
//$content=mb_convert_encoding($content,"utf-8","gb2312");
//$content=iconv("utf-8", "gb2312", $content);
//echo $content;exit;
$ch = curl_init();
/*$this_header=array(
		"content-type: application/x-www-form-urlencoded;
		charset=UTF-8"
	);*/
$post_data = array ("mobiles" => "15158104951","content" =>$content,"templateFlag" => "true","companyId" => "igo_wz");
//var_dump($post_data);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $this_header);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// post数据
curl_setopt($ch, CURLOPT_POST, 1);
// post的变量
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
//$output=iconv("utf-8", "gb2312", $output);
curl_close($ch);
//打印获得的数据
var_dump($output);

?>