<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

 Route::get('/', function () {
     return view('welcome');
 });
// Route::get('adm', function () {
//     return view('admin.index');
//     // echo "asas";
// }); 

Route::get("/adm","Admin\IndexController@index");
//后台页面
Route::get("/top","Admin\IndexController@top");
Route::get("/left","Admin\IndexController@left");
Route::get("/swich","Admin\IndexController@swich");
Route::get("/main","Admin\IndexController@main");
Route::get("/bottom","Admin\IndexController@bottom");
Route::get("/login", "Admin\LoginController@index");
//left引入的页面
Route::get("/main", "Admin\LoginController@index");
Route::get('/main', function () {
    return view('admin.main');
});
Route::get('/main_list', function () {
    return view('admin.main_list');
});
Route::get('/main_info', function () {
    return view('admin.main_info');
});
Route::get('/main_menu', function () {
    return view('admin.main_menu');
});
Route::get('/main_message', function () {
    return view('admin.main_message');
});

//验证码请求路由规则
Route::get("/captcha/{tmp}", "Admin\LoginController@captcha");

//登陆验证
Route::post("/logTodo", "Admin\LoginController@logTodo");
//退出登陆
Route::get("/logout", "Admin\LoginController@logout");

// Route::get("hello","HelloController@index");

Route::resource("/adm/user", "Admin\UserController@index");
Route::resource("/adm/user/create", "Admin\UserController@create");
Route::post("/adm/user/store", "Admin\UserController@store");
Route::get("/adm/user/destroy/{tmp}", "Admin\UserController@destroy");
Route::get("/adm/user/edit/{tmp}", "Admin\UserController@edit");
Route::post("/adm/user/update", "Admin\UserController@update");
//个人信息修改
Route::get("/adm/user/edit1/{tmp}", "Admin\UserController@edit1");
//修改头像
Route::post("/adm/user/avartar", "Admin\UserController@avartar");
/*********************************************************
 * 添加(删除)版块和分区
 ********************************************************/
//添加父分区
Route::any("/type_addFather","Admin\TypeController@addFather");
Route::any("/type_addFather/add","Admin\TypeController@add");
//添加子版块
Route::any("/type_addChild","Admin\TypeController@addChild");
Route::any("/type_addC","Admin\TypeController@addC");
//查看分区
Route::any('/type_show','Admin\TypeController@show');
//删除分区
Route::any('/type_delete','Admin\TypeController@delete');





/*********************************************************
 * 《-----添加版块和分区结束
 ********************************************************/










