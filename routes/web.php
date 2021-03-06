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


//后台路由组

Route::group(['prefix'=>'admin'],function (){
    Route::get('login',function (){
        return view('admin\login');
    });
    Route::post('check_login','Admin\LoginController@authenticate')->middleware('login');
	//首页
    Route::group(['middleware'=>'auth'],function (){

        Route::get('/','Admin\IndexController@index');
        Route::get('welcome','Admin\IndexController@welcome');

        //用户管理页面
        Route::resource('user','Admin\UserController');

        //角色管理
        Route::resource('role','Admin\RoleController');

        Route::get('logout','Admin\LoginController@logout');
    });

});

