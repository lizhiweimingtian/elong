<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB, Hash;

class IndexController extends Controller
{
    //前台主页
	public function index()
	{   
		$config=DB::table("web_config")->get();
		// dd($config[0]->status);
		if($config[0]->status !== '1'){
			return view("home.guanbi.index");
		}else{
			return view("home.index",["config" => $config]);
		 // return view('home.index');
	}
	
		}
//瀑布
	public function pubu()
	{   
		$config=DB::table("web_config")->get();
	    return view("home.index_1",["config" => $config]);
		 // return view('home.index');
	}
	
		
        
}