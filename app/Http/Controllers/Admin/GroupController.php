<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests,Input;
use App\Http\Controllers\Controller;
use DB,Session;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //查找所有的分组
        $groups=DB::table("admin_group")->get();
        $rules=DB::table("admin_group_access")->get();
        return  view("admin.group.index",["groups"=>$groups,"rules"=>$rules]);
    }
    
    
    //设置分组的权限（AJAX）
    public function setRule(Request $request)
    {
     //判断是添加还是删除分组的权限
    $rules = explode(",", DB::table("admin_group")->where("id", $request->get("group"))->pluck("rules"));//[1,2,3,4,5,6]
        if (false !== $key = array_search($request->get("rule"), $rules))
        {
            unset($rules[$key]);
        } else 
        {
            array_push($rules, $request->get("rule"));
        }
        
        //修改分组对应的权限
        if (false !== $affectedRows = DB::table("admin_group")->where("id", $request->get("group"))->update(["rules" => join(',', $rules)]))
        {
            return response()->json(["stauts" => 1, "info" => "修改成功"]);
        } else
        {
            return response()->json(["status" => 0, "info" => "修改失败"]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $rules=DB::table("admin_group_access")->get();
      return view("admin.group.create",compact("rules"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
            "title"=>"required",
            "rules"=>"required",
        ],[
            "title.required"=>"分组名未填写！",
            "rules.required"=>"分组权限未选择"
        ]);
       //添加分组
        $data=$request->only("title","rules");
        $data["rules"]=join(",",$data["rules"]);
        if(false !==$inserID=DB::table("admin_group")->insertGetId($data))
        {
            return redirect("/tips")->with(["info"=>"OK!","url"=>"/adm/group"]);
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
    public function edit()
    {
        // var_dump($request);
    
        $id = input::get('id');

        //获取该分组信息
        $group=DB::table("admin_group")->where("id",$id)->first();
        $rules=DB::table("admin_group_access")->get();
        return view("admin.group.edit",["group"=>$group,"rules"=>$rules]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
                "title"=>"required",
                "rules"=>"required",
            ],[
                "title.required"=>"分组名未填写！",
                "rules.required"=>"分组权限未选择"
            ]);
        $data=$request->only("title","rules");
        $data["rules"]=join(",",$data["rules"]);
        if(false !== $affectedRow=DB::table("admin_group")->where("id",$request->id)->update($data))
        {
            return redirect("/tips")->with(["info" => "修改成功".$affectedRow." Line.", "url" => "/adm/group"]);
        }else{
             return redirect("/tips")->with(["info" => "修改失败".$affectedRow." Line.", "url" => "/adm/group"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {   $id = input::get('id');

       if(false !== DB::table("admin_group")->where("id",$id)->delete())
       {
        return redirect("/tips")->with(["info"=>"删除成功.","url"=>"/adm/group"]);
       }else
       {
        return redirect("/tips")->with(["info"=>"Failed.","url"=>"/adm/group"]);
       }
    }
}
