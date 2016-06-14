<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysmodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sysmods', function (Blueprint $table) {
            $table->increments('mod_id');
            $table->string('mod_name',60);
            $table->string('mod_alias_name',60)->comment('模型标识别名')->nullable();
            $table->integer('mod_tb_id')->comment('数据表ID');
            $table->string('mod_tb_name',60)->comment('数据表名');
            $table->text('mod_sub_tbs')->comment('数据表分表集合')->nullable();
            $table->text('mod_form')->comment('录入表单模板');
            $table->text('mod_contribution_form')->comment('前台投稿表单模板');
            $table->string('mod_note')->comment('模型注释')->nullable();
            $table->text('mod_input_items')->comment('录入项')->nullable();
            $table->text('mod_required_items')->comment('必填项')->nullable();
            $table->text('mod_contribution_items')->comment('投稿项')->nullable();
            $table->string('mod_search_items')->comment('搜索项')->nullable();
            $table->text('mod_order_items')->comment('排序项')->nullable();
            $table->text('mod_list_items')->comment('列表模板项')->nullable();
            $table->text('mod_content_items')->comment('内容模板项')->nullable();
            $table->text('mod_final_classes')->comment('终极栏目ID集合')->nullable();
            $table->integer('mod_myorder')->default(0)->comment('自定义排序');
            $table->integer('mod_is_default')->default(0)->comment('是否默认模型,1为默认,0为非默认');
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
        Schema::drop('sysmods');
    }
}
