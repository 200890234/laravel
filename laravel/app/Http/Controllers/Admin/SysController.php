<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SysController extends Controller
{
    //
    public function setConf(){//
        return view("admin/set_conf");
    }
}
