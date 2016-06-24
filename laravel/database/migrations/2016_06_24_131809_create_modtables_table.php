<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModtablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modtables', function (Blueprint $table) {
            $table->increments('tb_id');
            $table->string('tb_name',60)->comment('数据表名');
            $table->string('tb_namecn',60)->comment('数据表中文名');
            $table->text('tb_intro')->comment('数据表简介')->nullable();;
            $table->integer('tb_isdefault')->default(0)->comment('是否默认表 1为默认，0为非默认');
            $table->text('tb_septbs')->comment('分表集合')->nullable();;
            $table->string('tb_def_septb',20)->comment('默认分表')->nullable();;
            $table->integer('tb_def_modid')->comment('默认系统模型ID')->nullable();;
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
        Schema::drop('modtables');
    }
}
