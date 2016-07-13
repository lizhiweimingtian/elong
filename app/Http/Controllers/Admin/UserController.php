<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB, Hash;
class UserController extends Controller {
		

	public function index(Request $request) {
      
		$users=DB::table("admin_user")
			->leftJoin("admin_group_rule", "admin_user.id", "=", "admin_group_rule.uid")
			->where("admin_user.name","LIKE","%".$request->get("keyword")."%")
			->orWhere("admin_user.nickname","LIKE","%".$request->get('keyword')."%")
			->orderBy("admin_user.id", "DESC")
			->paginate(2);

			 // dd($users);

			// foreach($users as $tmp)
			// {
			// 	var_dump($tmp);
			// }
			// dd(get_class_methods($users));
			// echo ($users->render());
			$groups = DB::table("admin_group")->get();
		return view("admin.main_list",["users"=>$users,"groups"=>$groups,"keyword"=>$request->get("keyword")]);
  	}

	  public function create() {
	  	$groups=DB::table("admin_group")->get();
	  		return view("admin.main_info",["groups" => $groups]);
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
		//数据入库
		$data=$request->except("_token","repassword", "groupid");
		$data["password"]=Hash::make($data["password"]);

		$data["avartar"]="/uploads/avartar/asd.png";
		$data["created_at"]=date("Y-m-d H:i:s");

		// if(DB::table("admin_user")->insert($data))
		// {
		// 	return redirect("/adm/user");
		// }else
		// {
		// 	return back()->with(["info"=>"注册失败"]);
		// }
		 if (FALSE !== $id = DB::table("admin_user")->insertGetId($data)) {//返回提示
            DB::table("admin_group_rule")->insert(["uid" => $id, "group_id" => $request->get("groupid")]);
            return redirect("/adm/user");
        } else {
            return back()->with(["info" => "注册失败"]);
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
	public function edit(Request $request) {
		$id = $request::get('id');
		$userRec = DB::table("admin_user")->leftJoin("admin_group_rule", "admin_user.id", "=", "admin_group_rule.uid")->where("admin_user.id", $id)->select("admin_user.*", "admin_group_rule.group_id")->first();
		$groups = DB::table("admin_group")->get();
		return view("admin.bianji",["userRec" => $userRec, "groups" => $groups]);
	}

	public function edit1($id) {
		$userRec=DB::table("admin_user")->where("id",$id)->first();

		return view("admin.bianjigeren",compact("userRec"));
	}
	//修改用户的状态
	public function status($id) {
		$userRec=DB::table("admin_user")->where("id",$id)->first();

		if($userRec->status==0){
			DB::table("admin_user")->where("id",$id)->update(["status" => 1]);
            // return redirect("adm/user");
            return redirect("/tips")->with(["info"=>"修改成功.当前用户状态为：开启","url"=>"/adm/user"]);
		}else{
			DB::table("admin_user")->where("id",$id)->update(["status" => 0]);
            // return redirect("adm/user");
            return redirect("/tips")->with(["info"=>"修改成功.当前用户状态为：禁用","url"=>"/adm/user"]);
		}
	}

	public function update(Request $request) {
		$this->validate($request,[
				"password"=>"between:6,15",
				"repassword"=>"same:password",
				"nickname"=>"required",
			],[
				"password.between"=>"密码长度应为6-15位",
				"repassword.same"=>"两次密码输入不一致",
			]);
		$data=$request->except("id","_token","repassword", "groupid"	);
		if(!empty($data["password"]))
		{
			$data["password"]=Hash::make($data["password"]);
		}else
		{
			unset($data["password"]);
		}
		if (FALSE !== $result = DB::table("admin_user")->where("id", $request->get("id"))->update($data)) {
            //修改用户对应的分组编号
	            DB::table("admin_group_rule")->where("uid", $request->get("id"))->update(["group_id" => $request->get("groupid")]);
            return redirect("adm/user");
        }

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Request $request) {
		$id = $request::get('id');
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

	public function setGroup(Request $request)
	{
		//修改user_group表中 某用户uid对应的分组编号groupid
		if(FALSE !==DB::table("admin_group_rule")->where("uid",$request->get("uid"))->update(["group_id"=>$request->get("groupid")]))
		{
			return response()->json(["status"=>1,"info"=>"修改成功"]);
		}else
		{
			return response()->json(["status"=>0,"info"=>"修改失败"]);
		}
	}
//后台的前台用户
/*
========================================================
======================================================
========================================================
*/
	public function home(Request $request) {
      
		$users=DB::table("user")
			->leftJoin("userdetail", "user.id", "=", "userdetail.id")
			->where("user.phone","LIKE","%".$request->get("keyword")."%")
			->orWhere("userdetail.nickname","LIKE","%".$request->get('keyword')."%")
			->orderBy("user.id", "DESC")
			->paginate(8);

			 // dd($users);

			// foreach($users as $tmp)
			// {
			// 	var_dump($tmp);
			// }
			// dd(get_class_methods($users));
			// echo ($users->render());
			// $groups = DB::table("admin_group")->get();
		return view("admin.home.index",["users"=>$users,"keyword"=>$request->get("keyword")]);
  	}
  	//编辑
  	public function hedit(Request $request) {

  		$id = $request::get('id');
		$userRec = DB::table("user")->leftJoin("userdetail", "user.id", "=", "userdetail.id")->where("user.id", $id)->select("user.*", "userdetail.*")->first();
		
		return view("admin.home.bianji",["userRec" => $userRec]);
	}
	public function hupdate(Request $request) {
		$this->validate($request,[
				// "password"=>"between:6,15",
				// "repassword"=>"same:password",
				"nickname"=>"required",
				"age"=>"required",
				"email"=>"required",
				"nowphone"=>"between:10,11",
			],[
				// "password.between"=>"密码长度应为6-15位",
				// "repassword.same"=>"两次密码输入不一致",
				"nickname.required"=>"昵称未填写",
				"age.required"=>"年龄未填写",
				"email.required"=>"邮箱未填写",
				"nowphone"=>"手机号应为11位",
			]);
		$data=$request->except("id","_token");
		// if(!empty($data["password"]))
		// {
		// 	$data["password"]=Hash::make($data["password"]);
		// }else
		// {
		// 	unset($data["password"]);
		// }
		if (FALSE !== $result = DB::table("userdetail")->where("id", $request->get("id"))->update($data)) {
            
            return redirect("/adm/home");
        }

	}
	//删除=======================================================================
	public function hdestroy(Request $request) {
		$id = $request::get('id');
		if(DB::table("user")->where("id",$id)->delete())
		{	
			if(DB::table("userdetail")->where("id",$id)->delete()){
				return redirect("adm/home");
			}else{
				return back()->with(["info"=>"userdetail表：删除失败"]);
			}
			
		}else
		{
			return back()->with(["info"=>"user表:删除失败"]);
		}
	}
	//修改用户的状态
	public function hstatus($id) {
		$userRec=DB::table("user")->where("id",$id)->first();

		if($userRec->status==0){
			DB::table("user")->where("id",$id)->update(["status" => 1]);
            // return redirect("adm/user");
            return redirect("/tips")->with(["info"=>"修改成功.当前用户状态为：开启","url"=>"/adm/home"]);
		}else{
			DB::table("user")->where("id",$id)->update(["status" => 0]);
            // return redirect("adm/user");
            return redirect("/tips")->with(["info"=>"修改成功.当前用户状态为：禁用","url"=>"/adm/home"]);
		}
	}
	//添加用户====================================================================================
		 public function hcreate() {
	  	
	  		return view("admin.home.create");
		}


	public function hstore(Request $request) {
		$this->validate($request,[
				"phone"=>"required|unique:user",
				"password"=>"required|between:6,15",
				"repassword"=>"required|same:password",
				"nickname"=>"required",
				"age"=>"required",
				"qq"=>"required",
				"email"=>"required",
				"nowphone"=>"between:10,11",
			],[
				"phone.required"=>"账号不能为空",
				"phone.unique"=>"该账号已被占用",
				"password.required"=>"密码未填写",
				"password.between"=>"密码长度应为6-15位",
				"repassword.required"=>"确认密码未填写",
				"repassword.required"=>"确认密码未填写",
				"repassword.same"=>"两次密码输入不一致",
				"nickname.required"=>"昵称未填写",
				"age.required"=>"年龄未填写",
				"qq.required"=>"QQ未填写",
				"email.required"=>"邮箱未填写",
				"nowphone"=>"手机号应为11位",

			]);
		//数据入库
		$data=$request->only("phone","password");
		$data["password"]=Hash::make($data["password"]);
		$data["created_at"]=date("Y-m-d H:i:s");

		if (FALSE !== $id = DB::table("user")->insertGetId($data)) {//返回提示
			$data1=$request->except("phone","password","_token","repassword");
			$data1["avartar"]="/uploads/avartar/asd.png";
			$data1["id"]=$id;
			// dd($data1);
            // DB::table("userdetail")->insert($data1);
            if (FALSE !== $idd = DB::table("userdetail")->insertGetId($data1)){
            	return redirect("/adm/home");

            }else{
            	return back()->with(["info" => "注册失败as"]);
            }
        } else {
            return back()->with(["info" => "注册失败"]);
        }

		
	    

		
		 // if (FALSE !== $id = DB::table("admin_user")->insertGetId($data)) {//返回提示
   //          DB::table("admin_group_rule")->insert(["uid" => $id, "group_id" => $request->get("groupid")]);
   //          return redirect("/adm/user");
   //      } else {
   //          return back()->with(["info" => "注册失败"]);
   //      }
	}
	//============================================================================================================================================================================================

}

?>