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

//调用系统的错误页
Route::get("/tips", function (){
    return view("errors.tips");
    exit;
});

Route::get("/adm","Admin\IndexController@index");
//后台页面
Route::get("/top","Admin\IndexController@top");
Route::get("/left","Admin\IndexController@left");
Route::get("/swich","Admin\IndexController@swich");
Route::get("/main","Admin\IndexController@main");
Route::get("/bottom","Admin\IndexController@bottom");
Route::get("/adm/login", "Admin\LoginController@index");
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
Route::get("/adm/login/captcha/{tmp}", "Admin\LoginController@captcha");

//登陆验证
Route::post("/adm/logTodo", "Admin\LoginController@logTodo");
//退出登陆
Route::get("/adm/logout", "Admin\LoginController@logout");

// Route::get("hello","HelloController@index");
//用户管理
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
//修改用户对应的分组
Route::post("/adm/user/setGroup","Admin\Usercontroller@setGroup");
//修改用户的状态
Route::get("/adm/user/status/{tmp}", "Admin\UserController@status");

//后台的前台用户
Route::resource("/adm/home", "Admin\UserController@home");
//编辑用户
Route::get("/adm/home/user/edit/{tmp}", "Admin\UserController@hedit");
Route::post("/adm/home/user/update", "Admin\UserController@hupdate");
//删除用户
Route::get("/adm/home/user/destroy/{tmp}", "Admin\UserController@hdestroy");
//修改用户的状态
Route::get("/adm/home/user/status/{tmp}", "Admin\UserController@hstatus");
//添加前台用户====================================================
Route::resource("/adm/home/user/create", "Admin\UserController@hcreate");
Route::post("/adm/user/home/store", "Admin\UserController@hstore");
/*----------------------------------------------------------*
 * 分组管理                                                 *
 *----------------------------------------------------------*/

 Route::resource("/adm/group","Admin\GroupController");
 Route::post("/adm/group/update/{tmp}","Admin\GroupController@update");
 Route::get("/adm/group/create","Admin\GroupController@create");
  Route::post("/adm/group/store","Admin\GroupController@store");
  Route::get("/adm/group/delete/{id}", "Admin\GroupController@destroy");

 Route::post("/adm/group/setRule", "Admin\GroupController@setRule");
 /*----------------------------------------------------------*
 * 权限管理                                                 *
 *----------------------------------------------------------*/
 Route::resource("/adm/rule", "Admin\RuleController");
 Route::post("/adm/rule/update/{id}", "Admin\RuleController@update");
 Route::post("/adm/rule/setStatus", "Admin\RuleController@setStatus");
 Route::get("/adm/rule/create","Admin\RuleController@create");
 Route::post("/adm/rule/store","Admin\RuleController@store");
 Route::get("/adm/rule/delete/{id}", "Admin\RuleController@destroy");
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



 /*----------------------------------------------------------*
 * 订单管理                                                 *
 *----------------------------------------------------------*/


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++/


/*****《》*******前台路由从此开始*****《》*********/



  //进入旅游首页
        Route::get('/tour', function() {
            return view('home.index');
        });

        //进入瀑布流首页
        Route::get('/', function() {
            return view('home.index_1');
        });

        Route::get('/fuwutiaokuan', function() {
            return view('home.other.fuwutiaokuan');
        });

        Route::get('/gonglue', function() {
            return view('home.gonglue');
        });
        Route::get('/zhijia', function() {
            return view('home.zhijia');
        });
        Route::get('guoleiyou', function() {
            return view('home.guoleiyou');
        });
        Route::get('huochepiao', function() {
            return view("home.huochepiao");
        });
        Route::get('chujinyou', function() {
            return view('home.chujinyou');
        });
        Route::get('xiadanqian', function() {
            return view('home.xiadanqian');
        });

        Route::get('zhuce', function() {
            return view('home.zhuce');
        });

        Route::get('login', function() {
            return view('home.login');
        });

        Route::get('dingdan', function() {
            return view('home.dingdan');
        });

        Route::get('xiadan', function() {
            return view('home.xiadan');
        });

        Route::get('zhifu', function() {
            return view('home.zhifu');
        });
        
         Route::get('huochepiao', function() {
            return view('home.huochepiao');
        });       

          Route::get('gonglue', function() {
            return view('home.gonglue');
        });
        
           Route::get('zhuce', function() {
            return view('home.zhuce');
        });
      
        Route::get('chujinyou', function() {
            return view('home.chujinyou');
        });

         Route::get('zhijia', function() {
            return view('home.zhijia');
         });
         
        //挷定至LoginController控制器的code（验证码)方法
        Route::get('/home/code/{tmp}', 'home\LoginController@code');

        //挷定至LoginController控制器的（注册)方法
        Route::post('/zhuce', 'home\LoginController@zhuce');

        //挷定至UserController控制器的login（登录)方法
        Route::post('/home/User/login', 'home\UserController@login');
        
         //挷定至LoginController控制器的logout（个人中心)方法
        Route::get('/zhongxin/logout', 'home\UserController@logout');
        
         //挷定至LoginController控制器的zhongxin（个人中心)方法
        Route::get('/home/Login/zhongxin', 'home\LoginController@zhongxin');
        
         Route::get('zhongxin', function() {
            return view('home.zhongxin');
         });
        
        /*********************************************************************
         * 前台个人中心
         *********************************************************************/
         //挷定至UserController控制器的对应资源方法（前台用户详情)方法
        Route::resource('/home/User', 'home\UserController');
        
         //（修改密码)页面
        Route::get('mima', function(){
            return view('home.mima');
        });
        
         //挷定至UserController控制器的avartar方法（前台用户详情)方法
        Route::get('/home/User/avartar', 'home\UserController@avartar');
        
          //挷定至UserController控制器的（修改密码)方法
        Route::resource('/home/User/mima', 'home\UserController@mima');
        
          /*********************************************************************
         * 前台用户出境游
         *********************************************************************/
         //挷定至UserController控制器的（前台用户详情)方法
        Route::resource('/home/tour', 'home\TourController');
//订单列表
Route::resource("/adm/dingdan", "Admin\dingdanController@index");






