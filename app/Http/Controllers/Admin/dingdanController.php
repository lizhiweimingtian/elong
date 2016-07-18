<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class dingdanController extends Controller
{
	public function index(Request $request)
	{
         $users=DB::table("dingdan")
            ->leftJoin("user", "dingdan.uid", "=", "user.id")
            ->leftJoin("userdetail", "dingdan.uid", "=", "userdetail.id")
            ->select("user.*","userdetail.*","dingdan.id","dingdan.xiadan_date","dingdan.pid")
            ->where("user.phone","LIKE","%".$request->get("keyword")."%")
            ->orWhere("dingdan.id","LIKE","%".$request->get('keyword')."%")
            ->orderBy("dingdan.id", "DESC")
            ->paginate(1);

       
		return view("admin.dingdan.index",["users"=>$users,"keyword"=>$request->get("keyword")]);

	}
    public function xiangqing($pid)
    {
        $userRec=DB::table("place_detail")->where("id",$pid)->first();
        $dingdan=DB::table("dingdan")->where("pid",$pid)->first();
        return view("admin.dingdan.xiangqing",compact("userRec","dingdan"));

    }
    public function delete($id)
    {

        if(DB::table("dingdan")->where("id",$id)->delete()){
                return redirect("/adm/dingdan");
            }else{
                return back()->with(["info"=>"删除失败"]);
            }
    }

   }
	
?>