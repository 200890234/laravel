<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class ModTbModel extends Model
{
    protected $table="modtables";
    protected $primaryKey="tb_id";
    protected $guarded=[];

    public function hasManyMods(){
    	return $this->hasMany('App\Models\Admin\ModsModel','mod_tb_id','tb_id');
    }
    public function hasManyModTbFields(){
    	return $this->hasMany('App\Models\Admin\ModTbFieldsModel','f_tb_id','tb_id');
    }
    public static function addModTbSysFields($tbid,$tbname){//新增系统字段 参数：模型数据表id+表名
    	try {
    		DB::table('modtbfields')->insert([
    			['f_name'=>'title', 'f_alias_name'=>'标题', 'f_tb_id'=>$tbid, 'f_tb_name'=>$tbname, 'f_type'=>'varchar', 'f_length'=>'255', 'f_is_index'=>'0', 'f_is_unique'=>'0', 'f_is_sys'=>'1', 'f_is_intro'=>'0', 'f_is_subtb'=>'0', 'f_init_val'=>'', 'f_form_length'=>'', 'f_form_type'=>'text',
    			'f_form_html'=>'<div><input type="text" class="input600" name="title" id="title" value=""></div>
								<div class="blank10"></div>
								<div class="f_attr">属性：
									<input type="checkbox" name="titlefont[b]" id="titlebold" value="b">
									<label for="titlebold">粗体</label>
									<input type="checkbox" name="titlefont[i]" id="titleitalic" value="i">
									<label for="titleitalic">斜体</label>
									<input type="checkbox" name="titlefont[s]" id="titlestrick" value="s">
									<label for="titlestrick">删除线</label>
									&nbsp;&nbsp;&nbsp;&nbsp;
									颜色：<input type="text" class="pl5" name="titlecolor" id="titlecolor" value="">&nbsp;
									<input type="color" id="cpicker" onchange="document.getElementById(\'titlecolor\').value=this.value">
								</div>',
    			'f_contribution_html'=>'<input type="text" class="input600" name="title" value="">',
    			'f_html_support'=>'0', 'f_myorder'=>'0', 'f_note'=>'标题'
    			],
    			['f_name'=>'subtitle', 'f_alias_name'=>'副标题', 'f_tb_id'=>$tbid, 'f_tb_name'=>$tbname, 'f_type'=>'varchar', 'f_length'=>'120', 'f_is_index'=>'0', 'f_is_unique'=>'0', 'f_is_sys'=>'0', 'f_is_intro'=>'0', 'f_is_subtb'=>'0', 'f_init_val'=>'', 'f_form_length'=>'', 'f_form_type'=>'text',
    			'f_form_html'=>'<input type="text" class="input600" name="subtitle" value="">',
    			'f_contribution_html'=>'<input type="text" class="input600" name="subtitle" value="">',
    			'f_html_support'=>'0', 'f_myorder'=>'1', 'f_note'=>'副标题'
    			],
    			['f_name'=>'special.field', 'f_alias_name'=>'特殊属性', 'f_tb_id'=>$tbid, 'f_tb_name'=>$tbname, 'f_type'=>'', 'f_length'=>'', 'f_is_index'=>'0', 'f_is_unique'=>'0', 'f_is_sys'=>'1', 'f_is_intro'=>'0', 'f_is_subtb'=>'0', 'f_init_val'=>'', 'f_form_length'=>'', 'f_form_type'=>'',
    			'f_form_html'=>'<div class="f_attr">信息属性：
    								<input type="checkbox" name="ischecked" id="ischecked" value="1">
									<label for="ischecked">审核</label>&nbsp;&nbsp;
									推荐<select name="recommend" id="recommend">
										<option value="0">不推荐</option>
										<option value="1">1级推荐</option>
										<option value="2">2级推荐</option>
										<option value="3">3级推荐</option>
										<option value="4">4级推荐</option>
										<option value="5">5级推荐</option>
										<option value="6">6级推荐</option>
										<option value="7">7级推荐</option>
										<option value="8">8级推荐</option>
										<option value="9">9级推荐</option>
									</select>&nbsp;&nbsp;
									头条<select name="headline" id="headline">
										<option value="0">不头条</option>
										<option value="1">1级头条</option>
										<option value="2">2级头条</option>
										<option value="3">3级头条</option>
										<option value="4">4级头条</option>
										<option value="5">5级头条</option>
										<option value="6">6级头条</option>
										<option value="7">7级头条</option>
										<option value="8">8级头条</option>
										<option value="9">9级头条</option>
									</select>&nbsp;&nbsp;
									置顶<select name="stick" id="stick">
										<option value="0">不置顶</option>
										<option value="1">1级置顶</option>
										<option value="2">2级置顶</option>
										<option value="3">3级置顶</option>
										<option value="4">4级置顶</option>
										<option value="5">5级置顶</option>
										<option value="6">6级置顶</option>
										<option value="7">7级置顶</option>
										<option value="8">8级置顶</option>
										<option value="9">9级置顶</option>
									</select>&nbsp;&nbsp;
    							</div>
								<div class="blank10"></div>
								<div class="f_attr">&nbsp;关键字：
									<input type="text" class="input400" name="keywords" id="keywords">(多个请用","隔开)
								</div>
								<div class="blank10"></div>
								<div class="f_attr">外部链接：
									<input type="text" class="input400" name="titleurl" id="titleurl">(多个请用","隔开)
								</div>',
    			'f_contribution_html'=>'',
    			'f_html_support'=>'0', 'f_myorder'=>'0', 'f_note'=>'特殊属性'
    			],
    			['f_name'=>'intro', 'f_alias_name'=>'简介', 'f_tb_id'=>$tbid, 'f_tb_name'=>$tbname, 'f_type'=>'text', 'f_length'=>'', 'f_is_index'=>'0', 'f_is_unique'=>'0', 'f_is_sys'=>'0', 'f_is_intro'=>'0', 'f_is_subtb'=>'0', 'f_init_val'=>'', 'f_form_length'=>'', 'f_form_type'=>'textarea',
    			'f_form_html'=>'<textarea name="intro" id="intro"></textarea>',
    			'f_contribution_html'=>'<textarea name="intro" id="intro"></textarea>',
    			'f_html_support'=>'0', 'f_myorder'=>'1', 'f_note'=>'简介'
    			],
    			['f_name'=>'pubtime', 'f_alias_name'=>'自定义发布时间', 'f_tb_id'=>$tbid, 'f_tb_name'=>$tbname, 'f_type'=>'int', 'f_length'=>'11', 'f_is_index'=>'0', 'f_is_unique'=>'0', 'f_is_sys'=>'1', 'f_is_intro'=>'0', 'f_is_subtb'=>'0', 'f_init_val'=>'', 'f_form_length'=>'', 'f_form_type'=>'text',
    			'f_form_html'=>'<input type="text" class="input600" name="pubtime" id="pubtime" value="">(留空则为当前时间)',
    			'f_contribution_html'=>'',
    			'f_html_support'=>'0', 'f_myorder'=>'0', 'f_note'=>'自定义发布时间'
    			],
    			['f_name'=>'autopub', 'f_alias_name'=>'是否定时发布', 'f_tb_id'=>$tbid, 'f_tb_name'=>$tbname, 'f_type'=>'int', 'f_length'=>'1', 'f_is_index'=>'0', 'f_is_unique'=>'0', 'f_is_sys'=>'1', 'f_is_intro'=>'0', 'f_is_subtb'=>'0', 'f_init_val'=>'0', 'f_form_length'=>'', 'f_form_type'=>'checkbox',
    			'f_form_html'=>'<input type="checkbox" class="input600" name="autopub" id="autopub" value=""><label for="autopub">定时发布(对自定义发布时间是未来时间的起作用)</label>',
    			'f_contribution_html'=>'',
    			'f_html_support'=>'0', 'f_myorder'=>'0', 'f_note'=>'是否定时发布'
    			],
    			['f_name'=>'thumbnail', 'f_alias_name'=>'缩略图', 'f_tb_id'=>$tbid, 'f_tb_name'=>$tbname, 'f_type'=>'varchar', 'f_length'=>'120', 'f_is_index'=>'0', 'f_is_unique'=>'0', 'f_is_sys'=>'1', 'f_is_intro'=>'0', 'f_is_subtb'=>'0', 'f_init_val'=>'', 'f_form_length'=>'', 'f_form_type'=>'img',
    			'f_form_html'=>'',
    			'f_contribution_html'=>'',
    			'f_html_support'=>'0', 'f_myorder'=>'0', 'f_note'=>'缩略图'
    			],
    		]);
    	} catch (Exception $e) {
    		throw $e;
    	}
    }
}
