<?php
    /**
     * Created by JetBrains PhpStorm.
     * User: taoqili
     * Date: 12-1-16
     * Time: ����11:44
     * To change this template use File | Settings | File Templates.
     */
    header("Content-Type: text/html; charset=gbk");
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
	//��֤�û�
	$userid=getcvar('loginuserid',1);
	$username=getcvar('loginusername',1);
	$rnd=getcvar('loginrnd',1);
 	$lur=is_login($uid,$uname,$urnd);
	$logininid=$lur['userid'];
	$loginin=$lur['username'];
	$loginrnd=$lur['rnd'];
	$loginlevel=$lur['groupid'];
	$loginadminstyleid=$lur['adminstyleid'];
	//��֤Ȩ��
 	CheckLevel($logininid,$loginin,$classid,"ad");
	db_close();
	$empire=null;
	////////////////////////////////////////////////////////////////////	
    //��Ҫ������Ŀ¼�б����ʹ������ͼ��ַ������������ʱ���ܻ�������ص���ʱ
    $paths = array('upload/','upload1/');

    $action = htmlspecialchars( $_POST[ "action" ] );
    if ( $action == "get" ) {
        $files = array();
        foreach ( $paths as $path){
            $tmp = getfiles( $path );
            if($tmp){
                $files = array_merge($files,$tmp);
            }
        }
        if ( !count($files) ) return;
        rsort($files,SORT_STRING);
        $str = "";
        foreach ( $files as $file ) {
            $str .= $file . "ue_separate_ue";
        }
        echo $str;
    }

    /**
     * ������ȡĿ¼�µ�ָ�����͵��ļ�
     * @param $path
     * @param array $files
     * @return array
     */
    function getfiles( $path , &$files = array() )
    {
        if ( !is_dir( $path ) ) return null;
        $handle = opendir( $path );
        while ( false !== ( $file = readdir( $handle ) ) ) {
            if ( $file != '.' && $file != '..' ) {
                $path2 = $path . '/' . $file;
                if ( is_dir( $path2 ) ) {
                    getfiles( $path2 , $files );
                } else {
                    if ( preg_match( "/\.(gif|jpeg|jpg|png|bmp)$/i" , $file ) ) {
                        $files[] = $path2;
                    }
                }
            }
        }
        return $files;
    }
