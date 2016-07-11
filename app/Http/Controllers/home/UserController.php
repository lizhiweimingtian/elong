<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomeLoginRequest;
use Session;
use DB, Hash;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $SessData = Session::get("userData");
        $data = DB::table("userdetail")
                ->leftjoin("user", "userdetail.id","=","user.id")
                ->where("userdetail.id", $SessData->id)
                ->select("userdetail.*", "user.*")
                ->get();
//        dd($data[0]);
        return view("home.userdetail",["data" => $data[0]]);
    }

    /**
     * Show the form for creating a new resource
     * 前台登录
     * @return \Illuminate\Http\Response
     */
    public function login(HomeLoginRequest $request) {
        $data = $request->only("phone", "password");
        $phone = $data['phone'];
        $result = DB::table("user")->where("phone", $data['phone'])->first();
   
        if (empty($result)) {
            $request->flash();
            return back()->with(["info" => "帐号错误"]);
        } else if (!hash::check($data["password"], $result->password)) {
            $request->flash();
            return back()->with(["info" => "密码错误"]);
        } else {
            Session::put("userData", $result);
            return redirect("/tour");
        }
    }
    
     /**
     * Show the form for creating a new resource
     * 前台登录
     * @return \Illuminate\Http\Response
     */
    public function logout() 
    {
        Session::forget("userData");
        return redirect("/tour");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 个人中心用户资料修改
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $SessData = Session("userData");
//        dd($SessData);
//        dd($request->get("name"));
        DB::table("userdetail")->where("id",$SessData->id)
                ->update(["name"=>$request->get("name"),"nickname"=>$request->get("nickname"),"sex"=>$request->get("sex"),"age"=>$request->get("age"),
                "qq"=>$request->get("qq"),"email"=>$request->get("email"),"nowphone"=>$request->get("nowphone"),"updated_at"=>date("Y-m-d H:i:s")]);
    
        $data = DB::table("userdetail")
                ->leftjoin("user", "userdetail.id","=","user.id")
                ->where("userdetail.id", $SessData->id)
                ->select("userdetail.*", "user.*")
                ->get();
        
        if(false != $data){
            return view("home.userdetail",["data"=>$data[0]])->with(["info" => "修改成功!"]);                
        }else{
            return view("home.userdetail")->with(["info" => "修改失败!"]); 
        }
    }
    
     /**
     * Store a newly created resource in storage.
     * 个人中心用户资料修改
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function avartar(Request $request) {
        $upFile = $request->file("Filedata");
        dd($upFile);
    }
    
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mima(Request $request) {
        $SessData = Session("userData");
//        $id = $SessData->id;
//        dd($id);
//        dd($request->repassword);
//        dd($request->newpassword);
        $data = DB::table("user")->where("id",$SessData->id)->first();
//        dd($data->password);
        if(!Hash::check($request->oldpassword, $data->password)){
            return back()->with(["info" => "原密码输入错误！"]);
            
        }else if(!$request->newpassword == $request->repassword){
            return back()->with(["info" => "两次修改的密码不一致！"]);
//            dd(1);
        }else{
            $repassword = Hash::make($request->repassword);
            Session::put("userData", $repassword);
        }            
         if(false == (DB::table("user")->where("id", $SessData->id)->update(["password" =>$repassword]))){
                 return back()->with(["info" => "修改失败！"]);
        }else{
            return back()->with(["info" => "修改成功！"]);
        }
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
