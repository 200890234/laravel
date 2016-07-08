<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\ModsModel;
use App\Models\Admin\ModTbModel;
use DB;
use Config;

class ModController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tbid)
    {
        //
        $mods= ModTbModel::find($tbid)->hasManyMods;
        // dd($mods);
        // dd($mods->mod_name);exit;
        return view('admin/mod/mods_index',compact('mods','tbid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($tbid)
    {
        $tbname=ModTbModel::find($tbid)->mod_name;
        $act="create";
        return view('admin/mod/mods_add',compact('tbid','tbname','act'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=ModsModel::find($id);
        $modid=$id;
        $act="edit";
        return view('admin/mod/mods_add',compact('data','modid','act'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function setDefMod($modid){//设置默认模型
        $up=DB::table('sysmods')->where('mod_is_default','1')->update(['mod_is_default'=>"0"]);//设置其他表为非默认
        $row=ModsModel::find($modid);
        $row->mod_is_default="1";
        $save=$row->save(); //save()或update()方法设置当前表为默认表
        if($up&&$save){
            return back()->with('msg','操作成功');
        }
    }
}
