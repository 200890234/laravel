<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\ModTbModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ModTbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin/modtb_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $prefix=Config::get('database.connections.mysql.prefix');
        return view('admin/modtb_add',compact('prefix'));
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
        $input=Input::except(['_token']);
        $messages=[
            'tb_name.required'=>'数据表名必填',
            'tb_name.regex'=>'数据表名只能是数字和字母',
            'tb_namecn.required'=>'数据表中文名必填',
        ];
        $rules=[
                "tb_name"=>["required","regex:/^[0-9a-zA-Z]+$/"],
                "tb_namecn"=>"required|",
            ];
        $validator = validator::make($input,$rules,$messages);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        //循环赋值
        $modtb=[];
        foreach($input as $k=>$v){
            $modtb[$k]=$v;
        }
        //dd($modtb);exit;
        $ins=DB::table("modtables")->insert($modtb);
        if($ins){
            return back()->with('msg','添加成功');
        }else{
            return back()->with('msg','添加失败');
        }
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
        //
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
}
