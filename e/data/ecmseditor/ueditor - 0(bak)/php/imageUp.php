<?php
	

    /**
     * Created by JetBrains PhpStorm.
     * User: taoqili
     * Date: 12-7-18
     * Time: 上午10:42
     */
    header("Content-Type: text/html; charset=gbk");
    error_reporting(E_ERROR | E_WARNING);
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
    date_default_timezone_set("Asia/chongqing");
    include "Uploader.class.php";
    //上传图片框中的描述表单名称，
    $title = htmlspecialchars($_POST['pictitle'], ENT_QUOTES);
    $path = htmlspecialchars($_POST['dir'], ENT_QUOTES);
    $globalConfig = include( "config.php" );
    $imgSavePathConfig = $globalConfig[ 'imageSavePath' ];

    //获取存储目录
    if ( isset( $_GET[ 'fetch' ] ) ) {

        header( 'Content-Type: text/javascript' );
        echo 'updateSavePath('. json_encode($imgSavePathConfig) .');';
        return;

    }

    //上传配置
    $config = array(
        "savePath" => $imgSavePathConfig,
        "maxSize" => 1000, //单位KB
        "allowFiles" => array(".gif", ".png", ".jpg", ".jpeg", ".bmp"),
        "fileNameFormat" => $_POST['fileNameFormat']
    );

    if ( empty( $path ) ) {

        $path = $config[ 'savePath' ][ 0 ];

    }

    //上传目录验证
    if ( !in_array( $path, $config[ 'savePath' ] ) ) {
        //非法上传目录
        echo '{"state":"\u975e\u6cd5\u4e0a\u4f20\u76ee\u5f55"}';
        return;
    }

    $config[ 'savePath' ] = $path . '/';

    //生成上传实例对象并完成上传
    $up = new Uploader("upfile", $config);

    /**
     * 得到上传文件所对应的各个参数,数组结构
     * array(
     *     "originalName" => "",   //原始文件名
     *     "name" => "",           //新文件名
     *     "url" => "",            //返回的地址
     *     "size" => "",           //文件大小
     *     "type" => "" ,          //文件类型
     *     "state" => ""           //上传状态，上传成功时必须返回"SUCCESS"
     * )
     */
    $info = $up->getFileInfo();

    /**
     * 向浏览器返回数据json数据
     * {
     *   'url'      :'a.jpg',   //保存后的文件路径
     *   'title'    :'hello',   //文件描述，对图片来说在前端会添加到title属性上
     *   'original' :'b.jpg',   //原始文件名
     *   'state'    :'SUCCESS'  //上传状态，成功时返回SUCCESS,其他任何值将原样返回至图片上传框中
     * }
     */
    echo "{'url':'" . $info["url"] . "','title':'" . $title . "','original':'" . $info["originalName"] . "','state':'" . $info["state"] . "'}";

