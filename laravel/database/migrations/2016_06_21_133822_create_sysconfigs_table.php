<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysconfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sysconfigs', function (Blueprint $table) {
            $table->increments('config_id');
            $table->string('config_sitepath','120')->comment('网站地址');
            $table->string('config_sitename','120')->comment('网站名称');
            $table->string('config_keywords','255')->comment('网站关键字');
            $table->text('config_description')->comment('网站简介');
            $table->string('config_email','200')->comment('管理员邮箱')->nullable();
            $table->integer('config_index_pattern')->default(0)->comment('首页模式 0为静态，1为动态');
            $table->string('config_index_extension',10)->default('.html')->comment('首页文件扩展名');
            $table->string('config_allowed_filetype','255')->comment('后台上传限制文件扩展名')->nullable();
            $table->integer('config_allowed_filesize')->comment('后台上传限制附件大小')->nullable();
            $table->integer('config_html_listsize')->comment('栏目页生成每组数')->nullable();
            $table->integer('config_html_articlesize')->comment('文章页生成每组数')->nullable();
            $table->integer('config_search_minlength')->default(0)->comment('搜索关键字最小字符');
            $table->integer('config_search_maxlength')->default(40)->comment('搜索关键字最大字符');
            $table->integer('config_search_perpage')->default(16)->comment('搜索页面每页显示数');
            $table->integer('config_search_interval')->default(0)->comment('搜索时间间隔,单位:秒');
            $table->integer('config_search_linksize')->default(10)->comment('搜索页面分页链接数');
            $table->integer('config_relate_rule')->default(2)->comment('相关链接依据,0为标题包含关键字,1为关键字相同,2为标题包含与关键字相同');
            $table->integer('config_comment_size')->default(5000)->comment('评论内容限制字数');
            $table->integer('config_comment_interval')->default(0)->comment('评论时间间隔,单位:秒');
            $table->text('config_comment_fields')->comment('评论字段集合')->nullable();
            $table->text('config_comment_septbs')->comment('评论分表集合')->nullable();
            $table->string('config_comment_deftb',20)->comment('默认评论分表')->nullable();
            $table->text('config_comment_requiredfields')->comment('评论必填字段集合')->nullable();
            $table->integer('config_allow_contribution')->default(1)->comment('是否开启投稿功能,1为开启，0为关闭');
            $table->integer('config_contribution_imgup')->default(1)->comment('前台投稿是否开启上传图片 1为开启，0为关闭');
            $table->integer('config_contribution_imgupsize')->default(2048)->comment('前台投稿上传最大图片大小KB');
            $table->string('config_contribution_imguptype','255')->default(2048)->comment('前台投稿上传图片扩展名限制');
            $table->integer('config_contribution_fileup')->default(1)->comment('前台投稿是否开启上传附件 1为开启，0为关闭');
            $table->integer('config_contribution_fileupsize')->default(20480)->comment('前台投稿最大附件大小');
            $table->string('config_contribution_fileuptype','255')->default(2048)->comment('前台投稿上传附件扩展名限制');
            $table->integer('config_allow_register')->default(1)->comment('是否开启会员注册,1为开启，0为关闭');
            $table->integer('config_login_timeout')->default(120)->comment('登录超时限制时间分钟');
            $table->integer('config_intro_length')->default(120)->comment('信息简介截取字数');
            $table->string('config_attach_dir',200)->comment('附件地址目录')->nullable();
            $table->string('config_bak_dir',200)->comment('数据备份存放目录')->nullable();
            $table->string('config_bak_zipdir',200)->comment('数据备份压缩包存放目录')->nullable();
            $table->integer('config_bak_mysql')->default(1)->comment('备份是否支持MYSQL查询方式 1为支持，0为不支持');
            $table->integer('config_reguser_minlength')->default(2)->comment('注册用户名最小字符数');
            $table->integer('config_reguser_maxlength')->default(36)->comment('注册用户名最大字符数');
            $table->integer('config_regpass_minlength')->default(6)->comment('注册密码最小字符数');
            $table->integer('config_regpass_maxlength')->default(36)->comment('注册密码最大字符数');
            $table->integer('config_register_score')->default(100)->comment('注册赠送点数');
            $table->integer('config_register_activatetype')->default(0)->comment('会员注册审核方式1为邮件激活，0为正常方式');
            $table->text('config_register_syskey')->comment('注册用户名保留关键字|隔开>admin|user|mervyn|yetpress|');
            $table->integer('config_default_tbid')->default(1)->comment('默认数据表ID');
            $table->string('config_default_tbname',60)->comment('默认数据表名')->nullable();
            $table->integer('config_default_adminstyle')->comment('默认后台界面风格ID')->nullable();
            $table->integer('config_usercaptcha_enabled')->default(1)->comment('是否开启会员登陆验证码,1为开启，0为关闭');
            $table->integer('config_admincaptcha_enabled')->default(1)->comment('是否开启后台管理员登陆验证码,1为开启，0为关闭');
            $table->integer('config_commentcaptcha_enabled')->default(1)->comment('是否开启评论验证码 1为开启，0为关闭');
            $table->integer('config_watermark_position')->default(9)->comment('水印位置');
            $table->string('config_watermark_imgpath',80)->comment('水印图片文件');
            $table->string('config_watermark_text',80)->default('cn.yetpress.com')->comment('水印文字内容');
            $table->string('config_watermark_fontsize',12)->default(5)->comment('水印文字大小');
            $table->string('config_watermark_fontcolor',12)->default('#FF0000')->comment('水印文字颜色');
            $table->integer('config_watermark_quality')->default(100)->comment('水印图片质量0-100');
            $table->integer('config_watermark_opactiy')->default(80)->comment('水印透明度0-100');
            $table->string('config_watermark_font',80)->comment('水印文字字体文件路径')->nullable();
            $table->integer('config_php_timeout')->default(0)->comment('PHP超时时间设置秒');
            $table->string('config_listpager_dropdownfunc',36)->comment('列表分页函数(下拉)')->nullable();
            $table->string('config_listpager_listfunc',36)->comment('列表分页函数(列表)')->nullable();
            $table->string('config_article_pagerfunc',36)->comment('内容分页函数')->nullable();
            $table->integer('config_listpager_linksize')->default(10)->comment('列表分页显示页码数');
            $table->integer('config_email_sendtype')->default(1)->comment('邮件发送模式 0为mail 函数发送，1为SMTP 模块发送');
            $table->string('config_email_smtphost',236)->comment('邮件SMTP服务器')->nullable();
            $table->string('config_email_smtpsender',236)->comment('邮件SMTP发信人地址')->nullable();
            $table->integer('config_email_smtplogincheck')->default(1)->comment('邮件SMTP是否需要登录验证  1为需要，0为不需要');
            $table->string('config_email_smtpusername',60)->comment('邮箱SMTP登录用户名')->nullable();
            $table->string('config_email_smtpuserpass',60)->comment('邮箱SMTP登录密码')->nullable();
            $table->string('config_email_smtpport',60)->comment('邮箱SMTP登录密码')->nullable();
            $table->string('config_email_stmpnickname',120)->comment('邮箱SMTP登录密码')->nullable();
            $table->string('config_pagenav_delimiter',20)->default('>')->comment('所在位置导航分隔字符');
            $table->integer('config_thumbnail_width')->default(260)->comment('图片缩略图默认宽度');
            $table->integer('config_thumbnail_height')->default(150)->comment('图片缩略图默认高度');
            $table->integer('config_thumbnail_crop')->default(1)->comment('图片缩略图超出部分是否截取 1为截取，0不截取');
            $table->integer('config_attach_dirset')->default(0)->comment('附件存放目录方式 0为栏目目录，1为/d/file/p目录，2为/d/file目录');
            $table->string('config_attach_datedir',30)->comment('附件存放日期目录')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sysconfigs');
    }
}
