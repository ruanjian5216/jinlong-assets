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
//默认根路由
//Route::请求方式（‘请求的url’，匿名函数或控制响应的方法）
Route::get('/', function () {
    //return view('welcome');
    echo 'hello';
});
Route::get('test', function () {
    //return view('welcome');
    echo 'hello';
});

Route::get('/home/test/test1','TestController@test1');
Route::get('/home/test/test2','Home\TestController@test');
Route::get('/admin/test/test3','Admin\TestController@test');
//接受用户输入
Route::get('/home/test/test4','Home\TestController@test2');



