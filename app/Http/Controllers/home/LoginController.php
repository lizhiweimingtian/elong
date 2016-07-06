<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\HomeZhuceRequest;

use App\Http\Controllers\Controller;
use DB, Hash;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Illuminate\Support\MessageBag;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function code()
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('code', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }
    /**
     * Show the form for editing the specified resource.
     * 获取前台用户注册信息，存入数据库
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function zhuce(HomeZhuceRequest $request)
    {   
         if(null == $request->get("read")){
             $request->flash();
             return back()->with(["info" => "请阅读《驴妈妈旅游网会员服务条款》"]);;
         }    
         //验证验证码
         if(session("code") != $request->get("code"))
         {
             $request->flash();
             return back()->with(["info" => "验证码错误"]);
         }
         
         //数据入库1
         $data = $request->only("phone", "password","nickname");
         $data1 = array();
         $data1['phone'] = $data['phone'];
         $data1["password"] = Hash::make($data["password"]);
         //设置注册时间
         $data1["created_at"] = date("Y-m-d H:i:s");        
         //数据入库2
         $data2 = array();
         $data2['nickname'] = $data['nickname'];
         //设置默认头像
         $data2["avartar"] = "/upload/1.gif";
         
         if (TRUE == DB::table("user")->insert($data1));
         if (TRUE == DB::table("userdetail")->insert($data2)){                
                  return redirect("/login");
             }else{
                  return back()->with(["info" => "注册失败"]);
             }         
     }

       
     /**
     * Show the form for creating a new resource
     * 跳转至个人中心（我的驴妈妈）
     * @return \Illuminate\Http\Response
     */
    public function zhongxin(Request $request)
    {   
        $SessData = Session::get("userData");
        $data = DB::table("userdetail")
                ->leftjoin("user", "userdetail.id","=","user.id")
                ->where("userdetail.id", $SessData->id)
                ->select("userdetail.*", "user.phone")
                ->first();
            return view("home.zhongxin")->with(["data" => $data]);
        
    }
     /**
     * Show the form for creating a new resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 获取前台用户注册信息，存入数据库
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
