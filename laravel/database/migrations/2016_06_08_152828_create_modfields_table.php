<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModfieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modfields', function (Blueprint $table) {
            $table->increments('f_id');
            $table->string('f_name',60);
            $table->string('f_alias_name',60)->comment('模型标识别名');
            $table->integer('f_mod_id')->comment('所属模型id');
            $table->string('f_mod_name',30)->comment('所属模型名');
            $table->string('f_type',30)->comment('字段类型text,varchar等');
            $table->string('f_length',20)->comment('字段长度')->nullable();
            $table->integer('f_is_index')->default(0)->comment('是否加索引,1为加索引,0为不加索引');
            $table->integer('f_is_unique')->default(0)->comment('字段值是否唯一,1为唯一,0为不唯一');
            $table->integer('f_is_sys')->default(0)->comment('是否系统字段,1为系统字段,0为自己增加的字段');
            $table->integer('f_is_intro')->default(0)->comment('是否简介字段,1为简介字段,0为普通字段');
            $table->integer('f_is_subtb')->default(1)->comment('是否为副表字段,0为主表,1为副表');
            $table->text('f_init_val')->comment('字段初始值,多个值之间用\"|\"分隔,如:福建|北京')->nullable();
            $table->string('f_form_length',12)->comment('表单元素长度,如img或input type是text的长度等')->nullable();
            $table->string('f_form_type',20)->comment('表单显示类型,text,radio,editor等');
            $table->text('f_form_html')->comment('输入表单替换html代码');
            $table->text('f_contribution_html')->comment('投稿表单替换html代码');
            $table->integer('f_html_support')->default(0)->comment('内容支持html代码,1为支持,0为不支持,程序处理时要过滤标签');
            $table->integer('f_myorder')->default(0)->comment('自定义字段排序');
            $table->string('f_note')->comment('注释')->nullable();
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
        Schema::drop('modfields');
    }
}
