<?php
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("","Index\IndexController@index");


Route::get("demo","Index\IndexController@demo");
Route::get("sm","Index\IndexController@sm");
Route::get("demo1","Admin\IndexController@demo1");
Route::get("demo2","Admin\IndexController@demo2");
Route::post('getuserlist','Api\UserController@list');


// 接口
Route::group(['prefix' => 'api','namespace' => 'Api'],function(){
	// Route::get('','IndexController@index');
	Route::group(['prefix' => 'user'],function(){
		Route::post('register','UserController@register');
		Route::post('login','UserController@login');
		Route::post('loginout','UserController@loginout');
		Route::post('add','UserController@add');
		Route::post('del','UserController@add');
		Route::post('edit','UserController@edit');
		
	});
});


//后台路由入口
Route::get("/admin/login","Admin\UserController@login");
Route::get("/admin/register","Admin\UserController@register");

Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => ['CheckLogin']],function(){
	Route::get('','IndexController@index');
	Route::group(['prefix' => 'sysconfig'],function(){
        Route::get('index','SysConfigController@index');
	});
	Route::group(['prefix' => 'log'],function(){
        Route::get('access','LogController@access');
	});
	Route::group(['prefix' => 'user'],function(){
        Route::get('index','UserController@index');
        Route::get('add','UserController@add');
        Route::get('list','UserController@demo');
        Route::get('del','UserController@del');
        Route::get('edit','UserController@edit');
	});
});