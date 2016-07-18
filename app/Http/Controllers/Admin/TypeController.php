<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Symfony\Component\Console\Input\Input,
    Illuminate\Support\Facades\Redirect,
    DB;

class TypeController extends Controller {

    /**
     * Display a listing of the resource.
     *景点分区和景点列表
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) {
        $places = DB::table("place")
                ->where('place.name','LIKE',"%".$request->keyword."%")
                ->orderBy('path')
                 ->paginate(10);
        return view("admin/type/show", ["places" => $places])->with('keyword',$request->keyword);
    }

    /**
     * 景点详情列表页
     * @param \Illuminate\Http\Request $request
     * @return type
     */
     public function place_detail_list(Request $request) {
        $places = DB::table("place")
                ->leftjoin('place_detail','place_detail.place_id',"=",'place.id')
                ->where('place.name','LIKE',"%".$request->keyword."%")
                ->orderBy('path')
                ->paginate(10);
        return view("admin/type/placeDetailList", ["places" => $places])->with('keyword',$request->keyword);
    }
    
    /**
     * Show the form for creating a new resource.
     *  添加分区（也就是首页分类的大块）
     * @return \Illuminate\Http\Response
     */
    public function addFather(Request $request) {
        $father =DB::table("place")->where("pid",0)->get();
  
        return view("admin/type/addFather");
    }

    //执行添加父分区
    public function add(Request $request) {
        $this->Validate($request,
                        ["name"=>"required|unique:place"],
                        ["name.required"=>"分区名不能为空！！",
                          "name.unique"=>"该分区已存在！！"  
                            ]);
        $name = $request->get('name');
        $created_at = date("Y-m-d H:i:s",time());
    if (($id = (DB::table('place')->insertGetId(['name'=>$name,"created_at"=>$created_at]))) > 0) {
            if (false != ( DB::table('place')->where('id', $id)->update(["path" => '0-' . $id]) )){
              
               // return redirect("/type_show");
                echo"<script>alert('添加成功！！')</script>";
                echo "<script>window.location.href='/type_show'</script>";
            }
        }else {
            return back()->with(["info"=>"添加失败"]);
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
       $updated_at =date("Y-m-d H:i:s",time());
      $affected = DB::table('place')
              ->where('id',$request->id)
              ->update(['name'=>$request->name,'updated_at'=>$updated_at]);
      if($affected == true){
           echo"<script>alert('添加成功！！')</script>";
         echo "<script>window.location.href='/type_show'</script>";
      }
    }

    /**
     * Store a newly created resource in storage.
     * 添加子版块（也就是首页分类的大块中的小版块）
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addChild(Request $request) {
      $father = DB::table("place")->where("pid",0)->get();
        return view("admin/type/addChild", ['id' => $request->id, 'name' => $request->name,'father'=>$father]);
    }

    //执行添加添加景点的方法
    public function addC(Request $request) {  
        $child = $request->except('_token');
        $child['created_at']=date("Y-m-d H:i:s",time());
        $rules=[
             'name'=>"required|unique:place|max:255",
            'pid'=>"required"
        ];
        $messages=[
            'name.required'=>"景点名称未填写",
            'pid.required'=> "未选择景点所属分区",
             'name.unique'=>"该景点已存在"
        ];
        $validator = Validator::make($child,$rules,$messages);
           
     
        if($validator->fails()){
            return redirect("/type_addChild")->withErrors($validator,"addChild");
        }
        if (($id = DB::table('place')->insertGetId($child))>0){
            if (false != (DB::table('place')->where('id', $id)->update(['path' => ( '0-' . $request->pid . '-' . $id)])))
                 echo"<script>alert('添加成功！！')</script>";
                echo "<script>window.location.href='/type_show'</script>";
        }else {
            
            return back()->with(["info"=>"添加景点失败"]);
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
                    
                      echo"<script>alert('删除成功！！')</script>";
                      echo "<script>window.location.href='/type_show'</script>";
                }
        }else{  
                
                echo"<script>alert('分区下有子元素，禁止删除！！')</script>";
              echo "<script>window.location.href='/type_show'</script>";
        }       
    }


    /**
     * Show the form for editing the specified resource.
     * 1 显示编辑页面
     * 2 编辑景点详情并入库
     * @return \Illuminate\Http\Response
     */
    //  1  显示编辑页面
    public function place_edit(Request $request) {
        $detail = DB::table('place_detail')->where('place_id', $request->id)->first();
        if($detail != false){
            return view('admin/type/placeEdit',['detail'=>$detail]);
        }else{
             $data = DB::table('place')->where('id', $request->id)->first();
             return view("admin/type/placeEdit", ['data' => $data]);
        }   
    }

    //  2  执行编辑的数据入库
    public function placeEdit(Request $request) {

        //尝试编辑和修改用同一页面
        //如果数据库中没有要编辑的景点的详情则直接编辑详情并入库
       if(false ==DB::table('place_detail')->where('place_id',$request->place_id)->first())     
       {     
           $rules=[
               'place_name'=>'required|unique:place_detail',
               'title'=>'required|max:255',
               'photo_path'=>'required',
               'editorValue'=>'required'
           ];
           $messages=[
               'place_name.required'=>"景点名称不能为空！",
               'place_name.unique'=>"该景点名称已存在",
               "title.required"=>"景点标题不能为空！",
               "title.max"=>"标题过长，请重新填写",
               "photo_path.required"=>"景点图片没上传",
               'editorValue.required'=>'景点详情（行程）介绍，未填写！'
       ];
            
           $this->Validate($request,$rules,$messages);
           $inser = $request->except('_token');
           $inser["created_at"]=date("Y-m-d H:i:s",time());
        
           $id = DB::table('place_detail')->insertGetId($inser);
           //如果数据入库成功，则查询对应的详情数据，带到查看详情的页面
            if ($id > 0) {
                $detail = DB::table('place_detail')->where('id',$id)->first();
                return view('admin/type/placeScan',['detail'=>$detail]);
            }else{
                return back()->with(["info"=>"提交失败"]);
            }
       }else{
           //否则修改已有数据，提交入库更新数据库的内容（景点详情）
           $update = $request->except('_token');
            if( true==DB::table('place_detail')->where('place_id',$request->place_id)->update($update)){
                $detail = DB::table('place_detail')->where('place_id',$request->place_id)->first();
                return view('admin/type/placeScan',['detail'=>$detail]);
            }else{
                return back()->with(["info"=>"修改失败"]);
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
    
    //AJAX修改，是否促销
    public function ajax1(Request $request ){
        $data = $request->except("_token");
       if(!false == DB::table("place_detail")->where("place_id",$request->place_id)->update(["saleYN"=>$request->saleYN])){
                
            return response()->json(["status"=>1,"info"=>"修改成功！"]);
       }else{
           return response()->json(["status"=>0,"info"=>"修改失败"]);
       }
    }
     //AJAX修改是否前台显示
     public function ajax2(Request $request ){
        $data = $request->except("_token");
       if(!false == DB::table("place_detail")->where("place_id",$request->place_id)->update(["isNindex"=>$request->isNindex])){
                
            return response()->json(["status"=>1,"info"=>"修改成功！"]);
       }else{
           return response()->json(["status"=>0,"info"=>"修改失败"]);
       }
    }
    
    
    /**
     * 只查看符合条件的景点（促销的，首页显示的）
     */
    public function zhikan(){
       
      $places=  DB::table("place")
                ->leftjoin("place_detail","place.id","=","place_detail.place_id")
                ->where("saleYN",1)
                ->orderBy('path')
                ->paginate(5);
               
        return view("admin/type/show", ["places" => $places]);
    }
    
     public function zhikan2(){
       
      $places=  DB::table("place")
                ->leftjoin("place_detail","place.id","=","place_detail.place_id")
                ->where("isNindex",1)
                ->orderBy('path')
                ->paginate(8);
               
        return view("admin/type/show", ["places" => $places]);
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
