<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class PageController extends Controller
{
	public function index()
	{
        $config=DB::table("web_config")->get();
        // dd(compact("config"));
        return view("admin.page.index",["config" => $config]);
	}

    public function update(Request $request) {
        $this->validate($request,[
                "webname"=>"required",
                "keywords"=>"required",
                "copy"=>"required",
            ],[
                "webname.required"=>"网站名称不能为空",
                "keywords.required"=>"网站关键字不能为空",
                "copy.required"=>"网站版权不能为空",
            ]);

        $data=$request->except("_token");

        if (FALSE !== $result = DB::table("web_config")->update($data)) {
        
            // return redirect("adm/user");
            return redirect("/tips")->with(["info"=>"修改成功","url"=>"/adm/page"]);
        }else{
            return redirect("/tips")->with(["info"=>"修改失败，原因未知.","url"=>"/adm/page"]);
        }

       
    }
    public function avartar(Request $request) {
            //转存文件
        $avartar = $request->file("Filedata");
        if (!$avartar->isValid()) {
        //          echo json_encode(array("status" => false, "info" => "不合法的上传"));
//          exit;
            return response()->json(array("status" => false, "info" => "不合法的上传"));
        }
        //重命名文件
        $suffix = $avartar->getClientOriginalExtension();
        $rename = date("YmdHis") . rand(1000, 9999) . "." . $suffix;
        //转存
        $result = $avartar->move("./uploads/avartar", $rename);
        
        //修改数据库
        DB::table("web_config")->where("id",$request->get("id"))->update(["logo" => "/uploads/avartar/" . $rename]);
        // $userModel = new \App\User();
        // $user = $userModel->find($request->get("id"));
        // $user->avartar = "/uploads/avartar/" . $rename;
        // $user->save();
        //返回结果
        echo json_encode(array("status" => true, "info" => "/uploads/avartar/" . $rename));
    }

   }
	
?>