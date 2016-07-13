<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomeLoginRequest;
use Session;
use DB, Hash;

class TourController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
       
        return view("home.xiadanqian");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $place_data = DB::table('place_detail')
                ->join('place','place.id',"=","place_detail.place_id")
                ->where(['saleYN'=>1,'isNindex'=>1])
                ->get();
        $place_gn = DB::table('place_detail')
                ->join('place','place.id',"=","place_detail.place_id")
                ->where(['saleYN'=>0,'isNindex'=>1])
                ->get();
        return view ("home/index",['place_data'=>$place_data,'place_gn'=>$place_gn]);
    }
    /**
     * 显示景点详情页（下单前）
     */
     public function xiadanqian(Request $request) {
        $xq = DB::table('place_detail')->where('place_id',$request->id)->first();
      
        return view ('/home/xiadanqian',['xq'=>$xq]);
     }
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
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
