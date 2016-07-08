<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ModsModel extends Model
{
    //
    protected $table="sysmods";
    protected $primaryKey='mod_id';
    public function belongsToModTb(){
    	return $this->belongsTo('App\Models\Admin\ModTbModel','mod_id','tb_id');
    }
}
