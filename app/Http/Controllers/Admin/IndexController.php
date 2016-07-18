<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB, Hash;
use Session;

class IndexController extends Controller
{
    //后台主页
	public function index()
	{
//		return "这是网站后台";
		return view("admin.index");
	}
	public function top()
	{
		return view("admin.top");
	}
	public function left()
	{
		$id=Session::get('userData')->id;
		// return view("admin.left");
		$userRec=DB::table("admin_user")->where("id",session('userData')->id)->first();
		$group=DB::table("admin_group_rule")->where("uid",$id)->first();

		return view("admin.left",["userRec"=>$userRec,"group"=>$group]);
	}
	public function swich()
	{
		return view("admin.swich");
	}
	public function main()
	{	
		$id=Session::get('userData')->id;
       
		// $users=DB::table("admin_user")
		// 	->leftJoin("admin_group_rule", "admin_user.id", "=", "admin_group_rule.uid")
		// 	->select("admin_user.*","admin_group_rule.group_id")
		// 	->where("admin_user.id",$id);
		// dd($users);
		$users=DB::table("admin_user")->where("id",$id)->first();
		$group=DB::table("admin_group_rule")->where("uid",$id)->first();
		 return view("admin.main",["users"=>$users,"group"=>$group]);
	}
	public function bottom()
	{
		return view("admin.bottom");
	}

}