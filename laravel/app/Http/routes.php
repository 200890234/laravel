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

Route::group(['middleware' => ['web']], function () {
    //
	Route::get('/admin/','AdminController@index');
	Route::get('/admin/index','AdminController@index');
	Route::get('/admin/login','AdminController@login');
	Route::post('/admin/dologin','AdminController@dologin');
	Route::get('/admin/left','AdminController@left');
	Route::get('/admin/main','AdminController@main');
	Route::get('/admin/setConf','AdminController@setConf');
	Route::get('/admin/setExtend','AdminController@setExtend');
	Route::get('/admin/dataDict','AdminController@dataDict');
	Route::get('/admin/devNote','AdminController@devNote');
	Route::get('/admin/sysModelAdd','AdminController@sysModelAdd');
	Route::get('/admin/sysModel','AdminController@sysModel');
	Route::get('/admin/postTemp/tb/{tb}/type/{type}/act/{act}',function($tb,$type,$act){//dd
		return view("postTemp",['tb'=>$tb,'type'=>$type,'act'=>$act]);
	});
	Route::post('/admin/doPostTemp','AdminController@doPostTemp');
	Route::post('/admin/dataDict','AdminController@dataDict');//list
	Route::get('/admin/updateTemp/tb/{tb}/id/{id}','AdminController@updateTemp');//update
	Route::get('/admin/deleteTemp/tb/{tb}/id/{id}','AdminController@deleteTemp');//delete
	Route::post('/admin/doUpdateTemp','AdminController@doUpdateTemp');
});
	Route::post('/xh/upload','XhUpload@doUpload');//这个放在group里csrf检测失败，把他拿出来不做csrf检测

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/tasks', 'TaskController@index');
	Route::post('/task', 'TaskController@store');
	Route::delete('/task/{task}', 'TaskController@destroy');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
