<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input,
    Illuminate\Support\Facades\Redirect,
    DB;

class TypeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $places = DB::table("place")->orderBy('path')->paginate(10);
        return view("admin/type/show", ["places" => $places]);
    }

    /**
     * Show the form for creating a new resource.
     *  添加分区（也就是首页分类的大块）
     * @return \Illuminate\Http\Response
     */
    public function addFather(Request $request) {
        return view("admin/type/addFather");
    }

    //执行添加父分区
    public function add(Request $request) {
        $name = $request->get('name');
        if (($id = (DB::table('place')->insertGetId(["name" => $name]))) > 0) {
            if (false != ( DB::table('place')->where('id', $id)->update(["path" => '0-' . $id]) ))
                return redirect("/type_show");
        }else {
            alert('添加失败！！');
        }
    }
    /**
     * 显示修改父分区的页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function update_father(Request $request) {
        
      $data = DB::table('place')->where('id',$request->id)->first();
        return view("admin/type/updateFather",['data'=>$data]);
    }
    //执行修改父分区，并更新数据库
     public function updateFather(Request $request) {
       
      $affected = DB::table('place')->where('id',$request->id)->update(['name'=>$request->name]);
      if($affected == true){
        return redirect('/type_show')->with(['info'=>'修改成功！']);
      }
    }

    /**
     * Store a newly created resource in storage.
     * 添加子版块（也就是首页分类的大块中的小版块）
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addChild(Request $request) {
        return view("admin/type/addChild", ['id' => $request->id, 'name' => $request->name]);
    }

    //执行添加添加景点的方法
    public function addC(Request $request) {  
        $child = $request->except('_token');
        if (($id = DB::table('place')->insertGetId($child))>0){
            if (false != (DB::table('place')->where('id', $id)->update(['path' => ( '0-' . $request->pid . '-' . $id)])))
                return redirect("/type_show");
        }else {

            return redirect("/type_addChild");
        }
    }

    /**
     * Display the specified resource.
     *删除景点关联删除景点的详情
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request) {
        //如果父ID是接收到的ID的条数为0，则被操作对象为无子元素的元素，查询一下详情表里是否有与他相关的内容
        if((DB::table('place')->where('pid',$request->id)->first()) == false ){
            
                //如果详情表中该id的景点的信息不为空，则删除它的详情
                if (!false == (DB::table('place_detail')->where('place_id', $request->id))) {
                    DB::table('place_detail')->where('place_id', $request->id)->delete();
                }
                //否则直接删除景点（或者这个父分区）

                if (false != DB::table('place')->where('id', $request->id)->delete()){
                    
                     return redirect("/type_show")->with(['info'=>'删除成功！！']);
                
                }
        }else{
               return redirect('/type_show')->with(['info'=>'分区下有子元素，禁止删除！']);
        }       
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
     * Show the form for editing the specified resource.
     * 编辑景点详情并入库
     * @return \Illuminate\Http\Response
     */
    //显示编辑页面
    public function place_edit(Request $request) {
        $detail = DB::table('place_detail')->where('place_id', $request->id)->first();
        if($detail != false){
            return view('admin/type/placeEdit',['detail'=>$detail]);
        }else{
             $data = DB::table('place')->where('id', $request->id)->first();
             return view("admin/type/placeEdit", ['data' => $data]);
        }   
    }

    //执行编辑的数据入库
    public function placeEdit(Request $request) {

        //尝试编辑和修改用同一页面
        //如果数据库中没有要编辑的景点的详情则直接编辑详情并入库
       if(false ==DB::table('place_detail')->where('place_id',$request->place_id)->first())     
       {     
           $inser = $request->except('_token');
           $id = DB::table('place_detail')->insertGetId($inser);
           //如果数据入库成功，则查询对应的详情数据，带到查看详情的页面
            if ($id > 0) {
                $detail = DB::table('place_detail')->where('id',$id)->first();
                return view('admin/type/placeScan',['detail'=>$detail]);
            }
       }else{
           //否则修改已有数据，提交入库更新数据库的内容（景点详情）
           $update = $request->except('_token');
            if( true==DB::table('place_detail')->where('place_id',$request->place_id)->update($update)){
                $detail = DB::table('place_detail')->where('place_id',$request->place_id)->first();
                return view('admin/type/placeScan',['detail'=>$detail]);
            }else{
                return ("修改失败");
            }
       }
        
    }
    //图片上传
    public function placeUpload(Request $request) {
        //将文件重命名并转存
        $file = $request->file("Filedata");

        //新的文件名
        $rename = date("YmdHis") . rand(1000, 9999) . "." . $file->getClientOriginalExtension();

        //新的文件地址
        if ($file->move("./uploads/file", $rename)) {
            return response()->json(["status" => 1, "info" => "/uploads/file/" . $rename]);
        } else {
            return response()->json(["status" => 0, "info" => "上传失败"]);
        }
    }

    /**
     * 显示查看景点详情页
     * @param type $id
     */
    public function placeScan(Request $request) {
        $id = $request->id;
        
        if(false !=$detail = DB::table('place_detail')->where('place_id',$id)->first()){
       
            return view('admin/type/placeScan',['detail'=>$detail]);
        }else{
            $data=DB::table('place')->where('id',$id)->first();
            return view('admin/type/placeScan',['data'=>$data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//   

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
