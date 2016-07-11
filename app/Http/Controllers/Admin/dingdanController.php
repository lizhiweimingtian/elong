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
            ->select("user.*","userdetail.*","dingdan.id","dingdan.xiadan_date")
            ->where("user.phone","LIKE","%".$request->get("keyword")."%")
            ->orWhere("dingdan.id","LIKE","%".$request->get('keyword')."%")
            ->orderBy("dingdan.id", "DESC")
            ->paginate(1);

       
		return view("admin.dingdan.index",["users"=>$users,"keyword"=>$request->get("keyword")]);

	}
   
	
}
?>