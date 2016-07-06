<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends CommonController
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
		return view("admin.left");
	}
	public function swich()
	{
		return view("admin.swich");
	}
	public function main()
	{
		return view("admin.main");
	}
	public function bottom()
	{
		return view("admin.bottom");
	}

}