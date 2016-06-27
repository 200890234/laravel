<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\SysModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class SysController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=SysModel::find(1);
        return view("admin/set_conf",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $input=Input::except(['_token','_method']);
        $messages=[
            'sitename.required'=>'站点名称必填',
            'sitepath.required'=>'网站地址必填',
            'attach_dir.required'=>'附件地址必填',
            'email.email'=>'邮箱格式错误',
            'register_score.numeric'=>'注册赠送点数必须是数字',
        ];
        $validator = validator::make($input,[
            "sitename"=>"required|",
            "sitepath"=>"required|",
            "attach_dir"=>"required|",
            "email"=>"email|",
            "register_score"=>"numeric|",
        ],$messages);
        if($validator->fails()){
            return back()->withErrors($validator,"sysconfig")->withInput();
        }
        $config=SysModel::find(1);
        //$config->config_description=$input["description"];
        //循环赋值
        foreach($input as $k=>$v){
            $f="config_".$k;
            $config->$f=$v;
        }
        $up=$config->save();
        if($up){
            return back()->with('msg','更新成功');
        }else{
            return back()->with('msg','更新失败');
        }
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
