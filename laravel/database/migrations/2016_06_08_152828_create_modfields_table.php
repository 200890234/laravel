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
            $table->string('f_alias_name',60)->comment('ģ�ͱ�ʶ����');
            $table->integer('f_mod_id')->comment('����ģ��id');
            $table->string('f_mod_name',30)->comment('����ģ����');
            $table->string('f_type',30)->comment('�ֶ�����text,varchar��');
            $table->string('f_length',20)->comment('�ֶγ���')->nullable();
            $table->integer('f_is_index')->default(0)->comment('�Ƿ������,1Ϊ������,0Ϊ��������');
            $table->integer('f_is_unique')->default(0)->comment('�ֶ�ֵ�Ƿ�Ψһ,1ΪΨһ,0Ϊ��Ψһ');
            $table->integer('f_is_sys')->default(0)->comment('�Ƿ�ϵͳ�ֶ�,1Ϊϵͳ�ֶ�,0Ϊ�Լ����ӵ��ֶ�');
            $table->integer('f_is_intro')->default(0)->comment('�Ƿ����ֶ�,1Ϊ����ֶ�,0Ϊ��ͨ�ֶ�');
            $table->integer('f_is_subtb')->default(1)->comment('�Ƿ�Ϊ�����ֶ�,0Ϊ����,1Ϊ����');
            $table->text('f_init_val')->comment('�ֶγ�ʼֵ,���ֵ֮����\"|\"�ָ�,��:����|����')->nullable();
            $table->string('f_form_length',12)->comment('��Ԫ�س���,��img��input type��text�ĳ��ȵ�')->nullable();
            $table->string('f_form_type',20)->comment('����ʾ����,text,radio,editor��');
            $table->text('f_form_html')->comment('������滻html����');
            $table->text('f_contribution_html')->comment('Ͷ����滻html����');
            $table->integer('f_html_support')->default(0)->comment('����֧��html����,1Ϊ֧��,0Ϊ��֧��,������ʱҪ���˱�ǩ');
            $table->integer('f_myorder')->default(0)->comment('�Զ����ֶ�����');
            $table->string('f_note')->comment('ע��')->nullable();
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
