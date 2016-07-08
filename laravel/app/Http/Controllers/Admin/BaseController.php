<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class BaseController extends Controller
{
	public function __construct(){
		
	}
    public function createModTable($tbname){
    	//新增数据表主表
    	//动态创建的表主键统一定为id
    	$query1="create table if not exists $tbname(
				id int(11) not null primary key auto_increment,
				column_id int(11) not null comment '栏目id',
				clicks int(11) default 0 comment '点击量',
				datepath varchar(20) not null default '' comment '存放日期目录2016-01-07',
				filename varchar(60) not null default '' comment '文章文件名(不带扩展名,默认就是文章id)',
				userid mediumint(8) unsigned NOT NULL DEFAULT '0' comment '发布用户id',
				username varchar(20) NOT NULL DEFAULT '' comment '发布用户用户名',
				headline tinyint(1) default '0' comment '头条等级0为非头条',
				recommend tinyint(1) default '0' comment '推荐等级0为非推荐',
				stick tinyint(1) default '0' comment '置顶等级0为非置顶',
				creator_type tinyint(1) default '0' comment '发布者类型0为后台发布1为会员发布',
				isurl tinyint(1) default '0' comment '是否是外部链接0为否1为是',
				havehtml tinyint(1) default '0' comment '是否是生成过html0为否1为是',
				titlefont varchar(14) NOT NULL DEFAULT '' comment '标题加色、加粗、加删除线。格式：“#ff0000,b|i|s|”',
				titleurl varchar(200) NOT NULL DEFAULT '' comment '链接地址,填了外链就是外链地址',
				subtb tinyint(3) default '1' comment '存放副表名，数字形式的表名',
				keywords varchar(80) DEFAULT null comment '关键字',
				title varchar(100) NOT NULL DEFAULT '',
				pubtime int(11) unsigned DEFAULT '0' comment '自定义发布时间',
				autopub tinyint(1) default '0' comment '是否定时发布，1为是，对未来时间有效',
				thumbnail varchar(120) NOT NULL DEFAULT '' comment '缩略图',
				subtitle varchar(120) NOT NULL DEFAULT '' comment '副标题',
				intro text NOT NULL comment '简介',
				`ischecked` tinyint(1) NOT NULL DEFAULT '1' comment '是否审核，1为已审核',
				voteups int(11) NOT NULL DEFAULT '0' comment '文章被顶的次数',
				created_at timestamp NULL DEFAULT NULL,
				updated_at timestamp NULL DEFAULT NULL,
				deleted_at timestamp NULL DEFAULT NULL
    		) default charset=utf8";
		//新增数据表默认分表1
		$septb=$tbname."_data_1";
		$query2="create table if not exists $septb(
				`id` int(11) not null primary key auto_increment,
				`column_id` smallint(5) unsigned NOT NULL DEFAULT '0' comment '栏目id',
				`keyreplace` tinyint(1) NOT NULL DEFAULT '0' comment '是否替换内容关键字1为替换',
				`infotplfile` smallint(5) unsigned NOT NULL DEFAULT '0' comment '内容模板ID,0为使用栏目选择的内容模板',
				`comment_close` tinyint(1) NOT NULL DEFAULT '0' comment '是否关闭评论,1为关闭评论，0为不关闭评论',
				`infotags` varchar(80) NOT NULL DEFAULT '' comment 'TAGS',
				`writer` varchar(30) NOT NULL DEFAULT '' comment '作者',
				`source` varchar(60) NOT NULL DEFAULT '' comment '来源',
				`infotext` mediumtext NOT NULL comment '正文',
				`created_at` timestamp NULL DEFAULT NULL,
				`updated_at` timestamp NULL DEFAULT NULL
			) default charset=utf8";
		//新增索引表
		$indextb=$tbname.'_index';
		$query3="create table if not exists $indextb(
				`id` int(11) not null primary key auto_increment,
				`column_id` smallint(5) unsigned NOT NULL DEFAULT '0' comment '栏目id',
				`ischecked` tinyint(1) NOT NULL DEFAULT '1' comment '是否审核，1为已审核',
				`pubtime` int(10) unsigned NOT NULL DEFAULT '0' comment '自定义发布时间',
				`havehtml` tinyint(1) NOT NULL DEFAULT '0' comment '是否生成过HTML标记,1为已生成',
				`created_at` timestamp NULL DEFAULT NULL,
				`updated_at` timestamp NULL DEFAULT NULL
			) default charset=utf8";
		DB::beginTransaction();
		try {
			DB::select($query1);//创建主表
			DB::select($query2);//创建副表
			DB::select($query3);//创建索引表
			DB::commit();
			return true;
		} catch (Exception $e) {
			DB::rollback();
			throw $e;
			return false;
		}
    }
    public function createSepTb($tb){
    	//新增数据表分表
		$query="create table if not exists $tb(
				`id` int(11) not null primary key auto_increment,
				`column_id` smallint(5) unsigned NOT NULL DEFAULT '0' comment '栏目id',
				`keyreplace` tinyint(1) NOT NULL DEFAULT '0' comment '是否替换内容关键字1为替换',
				`infotplfile` smallint(5) unsigned NOT NULL DEFAULT '0' comment '内容模板ID,0为使用栏目选择的内容模板',
				`comment_close` tinyint(1) NOT NULL DEFAULT '0' comment '是否关闭评论,1为关闭评论，0为不关闭评论',
				`infotags` varchar(80) NOT NULL DEFAULT '' comment 'TAGS',
				`writer` varchar(30) NOT NULL DEFAULT '' comment '作者',
				`source` varchar(60) NOT NULL DEFAULT '' comment '来源',
				`infotext` mediumtext NOT NULL comment '正文',
				`created_at` timestamp NULL DEFAULT NULL,
				`updated_at` timestamp NULL DEFAULT NULL
			) default charset=utf8";
		try {
				DB::select($query);
				DB::commit();
				return true;
			} catch (Exception $e) {
				DB::rollback();
				throw $e;
				return false;
			}
    }
    public function editModTable($altersql,$alterarr){
    	// $r=DB::select($altersql);//直接传字符串 laravel处理报错
    	DB::beginTransaction();
    	try {
    		foreach ($alterarr as $k => $v) {
    	    	DB::select("alter table $k rename $v");
    		}
    	    DB::commit();
    	    return true;
    	} catch (Exception $e) {
    	    DB::rollback();
    	    return false;
    	    throw $e;
    	}
    }
    public function delModTable($delarr){
    	DB::beginTransaction();
    	try {
    		for ($i=0; $i < count($delarr); $i++) { 
    			DB::select("drop table $delarr[$i]");	
    		}
    	    DB::commit();
    	    return true;
    	} catch (Exception $e) {
    	    DB::rollback();
    	    return false;
    	    throw $e;
    	}
    }
   public function getRowsCount($tb){
    	return DB::table($tb)->count();
    } 
}


