<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web','admin'],'namespace'=>'Admin'], function () {
    //登录注册，后台首页和布局项
	Route::get('/admin/','AdminController@index');
	Route::get('/admin/index','AdminController@index');

	Route::get('/admin/left','AdminController@left');
	Route::get('/admin/main','AdminController@main');

	//菜单项
	Route::resource('/admin/setConf','SysController');//系统参数设置
	Route::get('/admin/setExtend','SysController@setExtend');//系统扩展设置
	Route::resource('/admin/modTb','ModTbController');//数据表管理
	Route::get('/admin/modTb/setDefTb/{tbid}','ModTbController@setDefTb');//设置默认表
	Route::get('/admin/modTb/copyTb/{id}','ModTbController@copyTb');
	Route::resource('/admin/mods','ModController');//系统模型
	Route::get('/admin/mods/{tbid}/list','ModController@index');
	Route::get('/admin/mods/{tbid}/create','ModController@create');
	Route::get('/admin/modTb/setDefMod/{modid}','ModController@setDefMod');//设置默认模型
	Route::get('/admin/modTb/{tbid}/septb','ModTbController@sepTb');//分表管理
	Route::post('/admin/modTb/addSepTb','ModTbController@addSepTb');//增加分表
	Route::post('/admin/modTb/{tb}/delSepTb','ModTbController@delSepTb');//删除分表
	Route::get('/admin/modTb/{tb}/setDefSepTb','ModTbController@setDefSepTb');//设置为默认分表分表
	Route::get('/admin/modTb/{id}/fields','ModTbController@fields');//模型数据表字段管理
	Route::post('admin/modTb/field/setOrder','ModTbController@setOrder');//字段排序

	//数据字典 增删改查测试项
	Route::get('/admin/dataDict','AdminController@dataDict');
	Route::get('/admin/devNote','AdminController@devNote');
	Route::get('/admin/postTemp/tb/{tb}/type/{type}/act/{act}',function($tb,$type,$act){//dd
		return view("admin/postTemp",['tb'=>$tb,'type'=>$type,'act'=>$act]);
	});
	Route::post('/admin/doPostTemp','AdminController@doPostTemp');
	Route::post('/admin/dataDict','AdminController@dataDict');//list
	Route::get('/admin/updateTemp/tb/{tb}/id/{id}','AdminController@updateTemp');//update
	Route::get('/admin/deleteTemp/tb/{tb}/id/{id}/{ajax?}','AdminController@deleteTemp');//delete
	Route::post('/admin/doUpdateTemp','AdminController@doUpdateTemp');
});
Route::group(['middleware' => ['web'],'namespace'=>'Admin'], function () {
	Route::get('/admin/login', 'AdminController@login');
	Route::post('/admin/dologin','AdminController@dologin');
});
	Route::post('/xh/upload','XhUpload@doUpload');//这个放在group里csrf检测失败，把他拿出来不做csrf检测

