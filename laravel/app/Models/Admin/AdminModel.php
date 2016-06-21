<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class AdminModel extends Authenticatable
{
    //
    protected $table='admin';
    protected $primaryKey='admin_id';
 	public function getAuthPassword(){//重写密码字段
    	return $this->admin_pass;
    }
    public static function getAdminInfo(){
    	$admin=DB::table("admin")->get();
    	return $admin;
    }
    public static function addDataDict($data){
    	$ins=DB::table('article_others')->insert($data);
    	return $ins;// 成功是1
    }
    public static function getDataDictList(){//数据字典列表
    	$list=DB::table('article_others')->paginate(12); //用了分页就不用get()了
    	return $list;
    }
    public static function getDataDict($tb,$id){//数据字典单条数据
    	$data=DB::table($tb)->where('la_id',$id)->get();
    	return $data;
    }
    public static function updateDataDict($tb,$id,$data){
    	$up=DB::table($tb)->where('la_id',$id)->update(['la_title'=>$data['la_title'],'la_content'=>$data['la_content']]);
    	return $up;
    }
    public static function deleteDataDict($tb,$ids){
    	$del=DB::table($tb)->whereIn('la_id',$ids)->delete();
    	return $del;
    }
}
