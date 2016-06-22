<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\SysModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SysController extends Controller
{
    //
    public function index()
    {
        $data=SysModel::find(1);
//        var_dump($data);exit;
        return view("admin/set_conf",['data'=>$data]);
    }

    public function store()
    {
        $input=Input::all();
        echo "<pre>";
        print_r($input);
        echo "</pre>";
        exit;
    }
}
