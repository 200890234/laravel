<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('admin_id')->index();
            $table->string('admin_name',60);
            $table->integer('admin_groupid');//用户组id
            $table->integer('admin_deptid')->nullable();//部门id
            $table->string('admin_email',60)->nullable();
            $table->string('admin_pass',120);
            $table->string('admin_salt',60);
            $table->dateTime('admin_last_login')->nullable();
            $table->string('admin_last_ip')->nullable();
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
        Schema::drop('admin');
    }
}
