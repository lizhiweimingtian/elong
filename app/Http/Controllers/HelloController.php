<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

// use App\Http\Request;
use App\Http\Controllers\Controller;

class HelloController extends Controller{

	public function index(){
		return view("hello")->with("name","sas");
	}
}
?>