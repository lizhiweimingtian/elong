<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session,Hash;
class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * 显示一个资源列表
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rules=DB::table("admin_group_access")->orderBy("name")->get();
        return view("admin.rule.index",["rules"=>$rules]);
    }

    
    //设置权限是否启用
    public function setStatus(Request $request)
    {
        if(false!==DB::table("admin_group_access")->where("id",$request->get("rule"))->update(["status"=>$request->get("status")]))
        {
            return response()->json(["status"=>1,"info"=>"操作成功"]);
        }else
        {
            return response()->json(["status"=>0,"info"=>"操作失败"]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("admin.rule.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //验证数据
        $this->validate($request,[
                "title"=>"required",
                "name"=>"required",
            ],[
                "title.required"=>"规则名称未填写",
                "name.required"=>"规则设置未填写",
            ]);
        //数据入库
        $data=$request->except("_token");
        if(false !==$insertID=DB::table("admin_group_access")->insertGetId($data))
        {
            return redirect("/tips")->with(["info"=>"Add OK,Line".$insertID,"url"=>"/adm/rule"]);
        }else
        {
           return back()->with(["info" => "添加失败"]); 
        }
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $rule=DB::table("admin_group_access")->where("id",$id)->first();
       return view("admin.rule.edit",compact("rule"));
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
       $data=$request->only("title","name","status");
       if(false !== DB::table("admin_group_access")->where("id",$id)->update($data))
       {
        return redirect("/tips")->with(["info"=>"Update OK","url"=>"/adm/rule"]);
       }else
       {
        return redirect("/tips")->with(["info"=>"Update Failed","url"=>"/adm/rule"]);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //删除该权限
       if(false !==DB::table("admin_group_access")->where("id",$id)->delete())
       {
        return redirect("/tips")->with(["info" => "Delete OK.", "url" => "/adm/rule"]);
       }else
       {
            return redirect("/tips")->with(["info" => "Delete Fail.", "url" => "/adm/rule"]);
       }
    }
}
