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


Route::get("demo","Admin\IndexController@demo");

// 接口
Route::group(['prefix' => 'api','namespace' => 'Api'],function(){
	// Route::get('','IndexController@index');

	Route::group(['prefix' => 'user'],function(){
        Route::post('register','UserController@register');
	});
});


//后台路由入口
Route::get("/admin/login","Admin\UserController@login");
Route::get("/admin/register","Admin\UserController@register");

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function(){
	Route::get('','IndexController@index');
	Route::group(['prefix' => 'sysconfig'],function(){
        Route::get('index','SysConfigController@index');
	});
});