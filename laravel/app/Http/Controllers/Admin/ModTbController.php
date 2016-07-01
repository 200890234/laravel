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

class ModTbController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tbs=DB::table('modtables')->get();
        return view('admin/mod/modtb_index',["tbs"=>$tbs]);
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
        return view('admin/mod/modtb_add',compact('prefix','data'));
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
        // var_dump($input);exit;
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
        //$ins=DB::table("modtables")->insert($modtb);
        //改用create方法来插入数据，自动处理update_at和create_at 注意需要在模型里定义$fillable或$guarded数组
        $ins=ModTbModel::Create($modtb);
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
        $row=ModTbModel::find($id);
        // dd($row);exit;
        $prefix=Config::get('database.connections.mysql.prefix');
        return view('admin/mod/modtb_add',['prefix'=>$prefix,'data'=>$row]);
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
        $data=Input::except(['_method','_token']);
        // dd($data);
        $row=ModTbModel::find($id);
        $row->tb_name=$data['tb_name'];
        $row->tb_namecn=$data['tb_namecn'];
        $row->tb_intro=$data['tb_intro'];
        $up=$row->save();//save()方法返回 true
        if($up){
            $msg="修改成功";
        }else{
            $msg="修改失败";
        }
        return back()->with('msg',$msg);
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
        $row=ModTbModel::find($id);
        $del=$row->delete();//成功则返回true
        if($del){
            $msg="删除成功";
        }else{
            $msg="删除失败";
        }
        echo $msg;//ajax返回
    }

    /**
     * 设置默认表    
     */
    public function setDefTb($tbid){
        //设置其他表为非默认
        DB::table('modtables')->where('tb_isdefault','1')->update(['tb_isdefault'=>0]);
        //save()或update()方法设置当前表为默认表
        $row=ModTbModel::find($tbid);
        $row->tb_isdefault='1';
        $row->save();//save()方法返回 true
        // $up=DB::table('modtables')->where('tb_id',$tbid)->update(['tb_isdefault'=>1]);//update方法 返回1
        return back()->with('msg','操作成功');
    }
    /**
     * 复制表操作
     */
    public function copyTb($id){
        $prefix=Config::get('database.connections.mysql.prefix');
        $copyer=ModTbModel::find($id);
        return view("admin/mod/modtb_add",compact('prefix','copyer'));
    }
}
