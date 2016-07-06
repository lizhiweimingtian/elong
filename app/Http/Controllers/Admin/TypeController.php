<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input,
        Illuminate\Support\Facades\Redirect,
        DB;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()     
    {  
       $places = DB::table("place")->get();
        return view("admin/type/show",["places" => $places]);   
    }

    /**
     * Show the form for creating a new resource.
     *  添加分区（也就是首页分类的大块）
     * @return \Illuminate\Http\Response
     */
    public function addFather(Request $request)
    {  
        return view("admin/type/addFather");
    }
    //执行添加
     public function add(Request $request)
    {   
        $name = $request->get('name');
       if(false!= DB::table('place')->insert(["name"=>$name]));
        return redirect("/type_show");
       
    }
    /**
     * Store a newly created resource in storage.
     *添加子版块（也就是首页分类的大块中的小版块）
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addChild(Request $request)
    {
         return view("admin/type/addChild");
         
    }
    //执行添加添加子版块的方法
    public function addC(Request $request)
    {   $pid =$request->get('pid');
       $name =$request->get('name');
       
        if(false!= DB::table('place')->insert(["name"=>$name,'pid'=>$pid]));
        return redirect("/type_show");
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {   
      $id =$request->get('id');

       if(false!= DB::table('place')->where('id',"=",$id)->delete());
       return redirect("/type_show");
       echo "修改成功";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
