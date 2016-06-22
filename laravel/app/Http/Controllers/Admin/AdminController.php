<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;//引入controller类 位于同级目录时 无需引入
use App\Http\Requests;
use Hash;//用于hash加密
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;   //使用validator
use Auth;//使用Auth facade来认证
//use Illuminate\Http\Request; //改用Request facade
use Request;
use Captcha;//使用验证码类
use App\Models\Admin\AdminModel;//使用模型

class AdminController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('admin/login');
            exit;
        }
        $admin=AdminModel::getAdminInfo();
        return view('admin/admin_index',['adminInfo'=>$admin]);

    }

    public function login(){
        //captcha()/Captcha::create() 图片; captcha_src()/Captcha::src() url;captcha_img()/Captcha::img() img标签的html=>;
        //captcha_src("mini") //参数里传样式
        $captcha=captcha_src();
        return view('admin/admin_login',['captcha'=>$captcha]);//传数组参数 view中用$captcha获取
        // return view('admin_login')->with('name', 'Victoria');//传单独数据参数
    }
    public function messages(){//重写默认的messages方法 用于自定义显示错误文字信息
        return [
            'username.required'=>'用户名必填',
            'userpass.required'=>'密码必填',
            'vcode.required'=>'验证码必填',
            'vcode.captcha'=>'验证码错误',
        ];
    }
    public function dologin(){
        // var_dump($_POST); //直接获取post的数据
        // echo Request::get('username'); //获取单个值的写法
        $input=Request::all();//使用request facade获取所有信息 格式为数组
//         var_dump($input);exit;
        $validator = validator::make($input,[
                "username"=>"required|",
                "userpass"=>"required|",
                "vcode"=>"required|captcha"
            ],$this->messages());//传第三个参数自定义错误信息 可以直接写数组
        if($validator->fails()){
            return redirect('admin/login')->withErrors($validator)->withInput();
        }
        // echo bcrypt($input['userpass']);
        // exit;
        //验证用户信息
        //一、在AdminModel.php模型中定义要使用的表为admin，主键为admin_id
        //二、config/auth.php中providers>users>model 修改指定到AdminModel模型类的位置
        //三、使用attempt来认证
        //四、第二步骤是修改了users下的model子项，如果还有其他登录表单（如前台登录），要怎么改呢？？ http://www.zhangxihai.cn/archives/96
        // if (Auth::attempt(['admin_name' => $input['username'], 'admin_pass' => $input['userpass']])) {
        if (Auth::attempt(['admin_name' => $input['username'], 'password' => $input['userpass']])) {
            return redirect()->intended('admin/index');
        }else{
            return redirect('admin/login')->withInput()->with('failinfo',"登录失败，用户名或密码错误");//参数在模板中用session('failinfo')获取
        }
    }
    public function left(){//管理左侧
        return view("admin/inc/menu");
    }
    public function main(){//管理主界面
        return view("admin/main");
    }
    public function setExtend(){//
        return view("admin/setExtend");
    }
    public function dataDict(){//
        $data=AdminModel::getDataDictList();
        return view("admin/dataDict",['lists'=>$data]);
    }
    public function devNote(){//
        return view("admin/devNote");
    }
    public function sysModelAdd(){//
        return view("admin/sysModelAdd");
    }
    public function sysModel(){//
        return view("admin/sysModel");
    }
    public function doPostTemp(){// 简单发布功能页面
        $message=[
                'title.required'=>'请填写标题',
                'content.required'=>'请填写内容',
        ];
        $input=Request::all();
        $validator = validator::make($input,[
                "title"=>"required",
                "content"=>"required",
            ],$message);
        if($validator->fails()){
            return redirect('/admin/postTemp/tb/'.$input["tb"].'/type/'.$input["type"].'/act/'.$input["act"])->withErrors($validator)->withInput();
        }
        $data=[
            'la_title'=>$input["title"],
            'la_content'=>$input["content"],
            'la_time'=>time(),
            'la_type'=>$input["type"],
        ];
        $rs=AdminModel::addDataDict($data);
        if($rs>0){
            $msg="发布成功";
        }else{
            $msg="发布失败";
        }
//        echo $msg;
        return Redirect::to('admin/dataDict')->with('msg',$msg);
    }
    public function updateTemp($tb,$id){// 简单列表页面
        $data=AdminModel::getDataDict($tb,$id);
        return view('admin/updateTemp',['tb'=>$tb,'id'=>$id,'list'=>$data]);
    }
    public function doUpdateTemp(){// update datadict
        $message=[
                'title.required'=>'请填写标题',
                'content.required'=>'请填写内容',
        ];
        $input=Request::all();
        $tb=$input['tb'];
        $id=$input['id'];
        $validator = validator::make($input,[
                "title"=>"required",
                "content"=>"required",
            ],$message);
        if($validator->fails()){
            return redirect('/admin/updateTemp/tb/'.$tb.'/id/'.$id)->withErrors($validator)->withInput();
        }
        $data=[
            'la_title'=>$input["title"],
            'la_content'=>$input["content"],
        ];
        $rs=AdminModel::updateDataDict($tb,$id,$data);
        if($rs>0){
            $msg="修改成功";
        }else{
            $msg="修改失败";
        }
//        echo $msg;
        //echo '<script>alert("'.$msg.'");</script>';
        return Redirect::to('admin/dataDict')->with('msg',$msg);
    }
    public function deleteTemp($tb,$ids){// 简单列表页面
        //单个删除和批量删除 in(....)
        $ids=explode(",", $ids);
        $del=adminModel::deleteDataDict($tb,$ids);
        if($del>0){
            $msg="删除成功";
        }else{
            $msg="删除失败";
        }
//        echo $msg;
        return Redirect::to('admin/dataDict')->with('msg',$msg);
    }
}
