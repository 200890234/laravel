<?php
    /**
     * Created by JetBrains PhpStorm.
     * User: taoqili
     * Date: 12-7-26
     * Time: ����10:32
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
	include "Uploader.class.php";


	
	
	
    //�ϴ�����
    $config = array(
        "savePath" => "upload/" , //����·��
        "allowFiles" => array( ".rar" , ".doc" , ".docx" , ".zip" , ".pdf" , ".txt" , ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg", ".ogg", ".mov", ".wmv", ".mp4", ".webm") , //�ļ������ʽ
        "maxSize" => 100000, //�ļ���С���ƣ���λKB
        "fileNameFormat" => $_POST['fileNameFormat']
    );
    //�����ϴ�ʵ����������ϴ�
    $up = new Uploader( "upfile" , $config );

    /**
     * �õ��ϴ��ļ�����Ӧ�ĸ�������,����ṹ
     * array(
     *     "originalName" => "",   //ԭʼ�ļ���
     *     "name" => "",           //���ļ���
     *     "url" => "",            //���صĵ�ַ
     *     "size" => "",           //�ļ���С
     *     "type" => "" ,          //�ļ�����
     *     "state" => ""           //�ϴ�״̬���ϴ��ɹ�ʱ���뷵��"SUCCESS"
     * )
     */
    $info = $up->getFileInfo();

    /**
     * ���������������json����
     * {
     *   'url'      :'a.rar',        //�������ļ�·��
     *   'fileType' :'.rar',         //�ļ���������ͼƬ��˵��ǰ�˻���ӵ�title������
     *   'original' :'�༭��.jpg',   //ԭʼ�ļ���
     *   'state'    :'SUCCESS'       //�ϴ�״̬���ɹ�ʱ����SUCCESS,�����κ�ֵ��ԭ��������ͼƬ�ϴ�����
     * }
     */
    echo '{"url":"' .$info[ "url" ] . '","fileType":"' . $info[ "type" ] . '","original":"' . $info[ "originalName" ] . '","state":"' . $info["state"] . '"}';

