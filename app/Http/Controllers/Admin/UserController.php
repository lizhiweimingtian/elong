<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB, Hash;
class UserController extends CommonController {
		

	public function index(Request $request) {
      
		$users=DB::table("admin_user")
			->where("name","LIKE","%".$request->get("keyword")."%")
			->orWhere("nickname","LIKE","%".$request->get('keyword')."%")
			->paginate(2);

			 // dd($users);

			// foreach($users as $tmp)
			// {
			// 	var_dump($tmp);
			// }
			// dd(get_class_methods($users));
			// echo ($users->render());
		return view("admin.main_list",["users"=>$users,"keyword"=>$request->get("keyword")]);
  	}

	  public function create() {
	  		return view("admin.main_info");
		}


	public function store(Request $request) {
		$this->validate($request,[
				"name"=>"required|unique:admin_user",
				"password"=>"required|between:6,15",
				"repassword"=>"required|same:password",
				"nickname"=>"required",
			],[
				"name.required"=>"账号不能为空",
				"name.unique"=>"该账号已被占用",
				"password.required"=>"密码未填写",
				"password.between"=>"密码长度应为6-15位",
				"repassword.required"=>"确认密码未填写",
				"repassword.required"=>"确认密码未填写",
				"repassword.same"=>"两次密码输入不一致",
				"nickname.required"=>"昵称未填写",
			]);

		$data=$request->except("_token","repassword");
		$data["password"]=Hash::make($data["password"]);

		$data["avartar"]="/uploads/avartar/asd.png";
		$data["created_at"]=date("Y-m-d H:i:s");

		if(DB::table("admin_user")->insert($data))
		{
			return redirect("/adm/user");
		}else
		{
			return back()->with(["info"=>"注册失败"]);
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
		$userRec=DB::table("admin_user")->where("id",$id)->first();

		return view("admin.bianji",compact("userRec"));
	}

	public function edit1($id) {
		$userRec=DB::table("admin_user")->where("id",$id)->first();

		return view("admin.bianjigeren",compact("userRec"));
	}

	public function update(Request $request) {
		$this->validate($request,[
				"password"=>"between:6,15",
				"repassword"=>"same:password",
				"nickname"=>"required",
			],[
				"password.between"=>"密码长度应为6-15位",
				"repassword.same"=>"昵称未填写",
			]);
		$data=$request->except("id","_token","repassword");
		if(!empty($data["password"]))
		{
			$data["password"]=Hash::make($data["password"]);
		}else
		{
			unset($data["password"]);
		}
		if(DB::table("admin_user")->where("id",$request->get("id"))->update($data))
		{
			return redirect("/adm/user");
		}else{
			echo "请滚回！！！";
		}

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		if(DB::table("admin_user")->where("id",$id)->delete())
		{
			return redirect("adm/user");
		}else
		{
			return back()->with(["info"=>"删除失败"]);
		}
	}

	/**
	 * Change the avartar resouce from the loginer
	 * 
	 * @param 
	 */
	public function avartar(Request $request) {
			//转存文件
		$avartar = $request->file("Filedata");
		if (!$avartar->isValid()) {
		//			echo json_encode(array("status" => false, "info" => "不合法的上传"));
//			exit;
			return response()->json(array("status" => false, "info" => "不合法的上传"));
		}
		//重命名文件
		$suffix = $avartar->getClientOriginalExtension();
		$rename = date("YmdHis") . rand(1000, 9999) . "." . $suffix;
		//转存
		$result = $avartar->move("./uploads/avartar", $rename);
		
		//修改数据库
		$userModel = new \App\User();
		$user = $userModel->find($request->get("id"));
		$user->avartar = "/uploads/avartar/" . $rename;
		$user->save();
		//返回结果
		echo json_encode(array("status" => true, "info" => "/uploads/avartar/" . $rename));
	}

}

?>