<?php
    header("Content-Type:text/html;charset=utf-8");
    error_reporting( E_ERROR | E_WARNING );
	////////////////////////////////////////////////////////////////////	
	$rep_url  =$_SERVER['DOCUMENT_ROOT'].'/' ;
	define('EmpireCMSAdmin','1');
	require($rep_url."e/class/connect.php");
	require($rep_url."e/class/db_sql.php");
	require($rep_url."e/class/functions.php");
	require($rep_url."e/class/t_functions.php");
	require($rep_url."e/data/dbcache/class.php");
	require($rep_url."e/class/hinfofun.php");
	require($rep_url."e/data/dbcache/MemberLevel.php");
	$link=db_connect();
	$empire=new mysqlquery();
	//验证用户
	$userid=getcvar('loginuserid',1);
	$username=getcvar('loginusername',1);
	$rnd=getcvar('loginrnd',1);
 	$lur=is_login($uid,$uname,$urnd);
	$logininid=$lur['userid'];
	$loginin=$lur['username'];
	$loginrnd=$lur['rnd'];
	$loginlevel=$lur['groupid'];
	$loginadminstyleid=$lur['adminstyleid'];
	//验证权限
 	CheckLevel($logininid,$loginin,$classid,"ad");
	db_close();
	$empire=null;
	////////////////////////////////////////////////////////////////////		
    include "Uploader.class.php";
    //上传配置
    $config = array(
        "savePath" => "upload/" ,             //存储文件夹
        "maxSize" => 1000 ,                   //允许的文件最大尺寸，单位KB
        "allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp" )  //允许的文件格式
    );
    //临时文件目录
    $tmpPath = "tmp/";

    //获取当前上传的类型
    $action = htmlspecialchars( $_GET[ "action" ] );
    if ( $action == "tmpImg" ) { // 背景上传
        //背景保存在临时目录中
        $config[ "savePath" ] = $tmpPath;
        $up = new Uploader( "upfile" , $config );
        $info = $up->getFileInfo();
        /**
         * 返回数据，调用父页面的ue_callback回调
         */
        echo "<script>parent.ue_callback('" . $info[ "url" ] . "','" . $info[ "state" ] . "')</script>";
    } else {
        //涂鸦上传，上传方式采用了base64编码模式，所以第三个参数设置为true
        $up = new Uploader( "content" , $config , true );
        //上传成功后删除临时目录
        if(file_exists($tmpPath)){
            delDir($tmpPath);
        }
        $info = $up->getFileInfo();
        echo "{'url':'" . $info[ "url" ] . "',state:'" . $info[ "state" ] . "'}";
    }
    /**
     * 删除整个目录
     * @param $dir
     * @return bool
     */
    function delDir( $dir )
    {
        //先删除目录下的所有文件：
        $dh = opendir( $dir );
        while ( $file = readdir( $dh ) ) {
            if ( $file != "." && $file != ".." ) {
                $fullpath = $dir . "/" . $file;
                if ( !is_dir( $fullpath ) ) {
                    unlink( $fullpath );
                } else {
                    delDir( $fullpath );
                }
            }
        }
        closedir( $dh );
        //删除当前文件夹：
        return rmdir( $dir );
    }



