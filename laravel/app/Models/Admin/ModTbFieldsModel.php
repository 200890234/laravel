<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ModTbFieldsModel extends Model
{
	protected $table='modtbfields';
	protected $primaryKey='f_id';
    public function belongsToModTb(){
    	return $this->belongsTo('App\Models\Admin\ModTbModel','f_tb_id');
    }
}
