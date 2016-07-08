<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\ModTbModel;
use App\Models\Admin\ModTbFieldsModel;
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
            'tb_name.unique'=>'数据表已存在',
            'tb_name.regex'=>'数据表名只能是数字和字母',
            'tb_namecn.required'=>'数据表中文名必填',
        ];
        $rules=[
                "tb_name"=>["required",'unique:modtables',"regex:/^[0-9a-zA-Z]+$/"],
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
        $modtb['tb_septbs']='1,';
        $modtb['tb_def_septb']='1';//默认数据表不能删除
        $modtb['tb_def_modid']='1';//默认系统模型不能删除
        //dd($modtb);exit;
        //$ins=DB::table("modtables")->insert($modtb);
        //改用create方法来插入数据，自动处理update_at和create_at 注意需要在模型里定义$fillable或$guarded数组
        //插入表信息到数据表中的时候 还要创建对应的表并带有默认系统字段
        $prefix=Config::get('database.connections.mysql.prefix');
        $tb_name=$input['tb_name'];
        // echo $tb_name;exit;
        $createname=$prefix.$tb_name;
        DB::beginTransaction();
        try {
            $ins=ModTbModel::Create($modtb);//插入数据表
            $id=$ins->tb_id;
            $this->createModTable($createname);//建立主表 副表 和 索引表
            ModTbModel::addModTbSysFields($id,$tb_name);//向字段表中插入系统字段
            DB::commit();
            return back()->with('msg','添加成功');
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('msg','添加失败');
            throw $e;
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
        $prefix=Config::get('database.connections.mysql.prefix');
        $dbname=Config::get('database.connections.mysql.database');
        $key=$prefix.$row->tb_name."_data_";
        $tblist= DB::select("select TABLE_NAME from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA='$dbname' and TABLE_NAME like '%$key%'");//取出所有分表
        $alterarr=[];//alter修改表数组  旧表名=>新表名
        $altersql="";//修改副表sql
        foreach ($tblist as $k => $v) {
           $oldname=$v->TABLE_NAME;
           $newname=str_replace($row->tb_name, $data['tb_name'], $oldname);
           $altersql.="alter table $oldname rename $newname;";
           $alterarr[$oldname]=$newname;
        }
        //把主表和索引表的修改sql加入该数组
        $oldtb=$prefix.$row->tb_name;//旧主表
        $newtb=$prefix.$data['tb_name'];//新主表
        $oldindex=$prefix.$row->tb_name."_index";//旧索引表
        $newindex=$prefix.$data['tb_name']."_index";//新索引表
        $altersql.="alter table $oldtb rename $newtb;";
        $altersql.="alter table $oldindex rename $newindex;";
        $alterarr[$oldtb]=$newtb;
        $alterarr[$oldindex]=$newindex;//数组组装完成
        $row->tb_name=$data['tb_name'];
        $row->tb_namecn=$data['tb_namecn'];
        $row->tb_intro=$data['tb_intro'];
        DB::beginTransaction();
        try {
            $row->save();//修改数据表信息
            // $this->editModTable($altersql);//修改已创建的表信息  传字符串laravel执行会出问题
            $this->editModTable($altersql,$alterarr);//修改已创建的表信息 传数组过去在循环执行alter的sql
            DB::commit();
            return back()->with('msg','修改成功');
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('msg','修改失败');
            throw $e;
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
        $row=ModTbModel::find($id);
        $isdef=$row->tb_isdefault;
        if($isdef==1){
            echo "默认数据表不能删除";
            exit;
        }
        $tbname=$row->tb_name;//表名 delModTable
        $prefix=Config::get('database.connections.mysql.prefix');
        $dbname=Config::get('database.connections.mysql.database');
        $key=$prefix.$row->tb_name."_data_";
        $tblist= DB::select("select TABLE_NAME from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA='$dbname' and TABLE_NAME like '%$key%'");//取出所有分表
        $delarr=[];//
        foreach ($tblist as $k => $v) {
           $name=$v->TABLE_NAME;
           $delarr[]=$name;
        }
        $maintb=$prefix.$row->tb_name;//主表
        $indextb=$prefix.$row->tb_name."_index";//索引表
        // dd($delarr);exit;
        $delarr[]=$maintb;
        $delarr[]=$indextb;
        DB::beginTransaction();
        try {
            $row->delete();//删除记录
            $this->delModTable($delarr);//删除对应的数据表
            DB::table('modtbfields')->where("f_tb_id",$id)->delete();
            DB::commit();
            $msg="删除成功 ";
        } catch (Exception $e) {
            DB::rollback();
            $msg="删除失败 ";
            throw $e;
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
    //分表管理
    public function sepTb($tbid){
        $prefix=Config::get('database.connections.mysql.prefix');
        $row=ModTbModel::find($tbid);
        $sepid=$row->tb_def_septb;//默认分表id名
        $tbname=$row->tb_name;//表名

        $prefix=Config::get('database.connections.mysql.prefix');
        $dbname=Config::get('database.connections.mysql.database');
        $key=$prefix.$row->tb_name."_data_";
        $tblist= DB::select("select TABLE_NAME from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA='$dbname' and TABLE_NAME like '%$key%'");//取出所有分表
        foreach ($tblist as $k => $v) {
           $sepname[]=$v->TABLE_NAME;//分表名
           $tname=mb_substr($v->TABLE_NAME, strlen($prefix));
           $arr=explode("_", $v->TABLE_NAME);
           // $isdef[]=end($arr)==1?1:0;//取分表名(_最后一个id数字值) 判断默认分表尾部id值
           $max[]=end($arr);//分表的尾部id号数组
           $count[]=$this->getRowsCount($tname);//查询数据库时去掉表前缀
        }
        $nextsepid=max($max)+1;//下一个分表id名
        return view('admin/mod/septb_index',compact('sepname','count','sepid','prefix','tbname','nextsepid'));
    }
    //增加分表
    public function addSepTb(Request $request){
        $data=$request->all();
        $tbname=$data["tb"];//完整的分表名
        $arr=explode("_", $tbname);
        $sepid=$data["sepid"];
        //要先判断分表是否已经存在
        $dbname=Config::get('database.connections.mysql.database');
        $thistb=DB::select("select TABLE_NAME from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA='$dbname' and TABLE_NAME ='$tbname'");//查找这张表
        if(count($thistb)>0){
            echo '该分表已存在';exit;
        }
        DB::beginTransaction();
        try {
            $this->createSepTb($tbname);
            $prefix=Config::get('database.connections.mysql.prefix');
            $query="update ".$prefix."modtables set tb_septbs=concat(tb_septbs,'$sepid',',') where tb_name='$arr[1]'";
            DB::select($query);//修改模型表信息表的分表集合字段
            DB::commit();
            echo '新增分表成功';
        } catch (Exception $e) {
            DB::rollback();
            echo "新增分表失败";
            throw $e;
        }
    }
    //删除分表
    public function delSepTb($tb){
        $prefix=Config::get('database.connections.mysql.prefix');
        $arr=explode("_", $tb);
        $sepid=end($arr);
        //首先判断是否是默认存储分表 默认分表不可删除
        $t=DB::table("modtables")->where("tb_name",$arr[0])->first();
        $septbstr=$t->tb_def_septb;
        if($septbstr==$sepid){
            echo '默认分表不可删除';
            exit;
        }
        $query="drop table ".$prefix.$tb;//删除已建立的表
        $query1="update ".$prefix."modtables set tb_septbs=replace(tb_septbs,'$sepid,','') where tb_name='$arr[0]'";//修改模型表中分表集合字段
        // echo $query1;exit;
        DB::beginTransaction();
        try {
            DB::statement($query);
            DB::statement($query1);
            DB::commit();
            echo '删除分表成功';
        } catch (Exception $e) {
            DB::rollback();
            echo '删除分表成功';
            throw $e;
        }
    }
    public function setDefSepTb($tb){
        $arr=explode("_", $tb);
        $sepname=$arr[0];//主表名
        $separr['tb_def_septb']=end($arr);
        // dd($sep);exit;
        $prefix=Config::get('database.connections.mysql.prefix');
        DB::beginTransaction();
        try {
            ModTbModel::where("tb_name",$sepname)->update($separr);//更新modtables表中的默认分表字段值
            DB::commit();
            return back()->with('msg','设置成功');
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('msg','设置失败');
            throw $e;
        }
    }

    //字段管理开始
    public function fields($id){//管理模型数据表字段
        $data=ModTbModel::find($id)->hasManyModTbFields()->orderBy('f_myorder')->get();
        $tbid=$id;
        return view('admin/mod/modtb_field',compact('data','tbid'));
    }
    //修改字段排序 ajax
    public function setOrder(Request $request){
        $fname=$request->fname;
        $forder=$request->forder;
        $fname=json_decode($fname);
        $forder=json_decode($forder);
        DB::beginTransaction();
        try {
            for ($i=0; $i < count($fname); $i++) { 
                DB::table('modtbfields')->where('f_name',$fname[$i])->update(['f_myorder'=>$forder[$i]]);
            }
            DB::commit();
            echo "修改字段排序成功";
        } catch (Exception $e) {
            DB::rollback();
            echo "修改字段排序失败";
            throw $e;
        }
        
        
    }
}
