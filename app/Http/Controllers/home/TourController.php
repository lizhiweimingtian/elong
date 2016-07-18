<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Requests,Input;
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
        $config=DB::table("web_config")->get();

        if($config[0]->status !== '1'){
            return view("home.guanbi.index");
        }else{
            
        return view ("home.index",['place_data'=>$place_data,'place_gn'=>$place_gn,"config" => $config]);
    }
}
    /**"config" => $config
     * 显示景点详情页（下单前）
     */
     public function xiadanqian(Request $request) {
        $xq = DB::table('place_detail')->where('place_id',$request->id)->first();
      
        return view ('/home/xiadanqian',['xq'=>$xq]);
     }

     /**"config" => $config
     * 显示下单页（下单）
     */
     public function xiadan() {
        $id = input::get('id');
        // dd($id);
        $xq = DB::table('place_detail')->where('id',$id)->first();
        // dd($xq);
        return view ('/home/xiadan',['xq'=>$xq]);
     }

      /**"config" => $config
     * 显示付款页（付款）
     */
     public function zhifu(Request $request) {
        // dd($request);
        // dd($id);
        $uid=Session::get("userData")->id;
        $data=$request->only("pid","user_name","user_phone","chufa_date");
        $data["uid"]=$uid;
        $date=date("Y-m-d H:i:s");
        $data["xiadan_date"]=$date;

        // dd($data);
        // dd($data);
        if(false !== $id = DB::table('dingdan')->insertGetId($data)){
            $xq = DB::table('place_detail')->where('id',$request->pid)->first();
            $dingdan = DB::table('dingdan')->where('id',$id)->first();
                return view ('home.zhifu',["xq"=>$xq,"dingdan"=>$dingdan]);
        }else{
                dd(121);
        }
        
        
        // dd($xq);
        //return view ('home.zhifu',['xq'=>$xq]);
     }
    
    public function yizhifu(){
        $id = input::get('id');
        DB::table('dingdan')->where("id",$id)->update(["status"=>1]);
        return view("home.yizhifu",["id"=>$id]);
    }


    public function dingdan(){
        // $id = input::get('id');
        // $dd=DB::table('dingdan')->where("id",$id)->first();
        // $xq=DB::table('place_detail')->where("id",$dd->pid)->first();
        // return view("home.yizhifu",["dd"=>$dd]);

        $uid=Session::get("userData")->id;
        // $dd=DB::table("dingdan")->where("uid",$uid)->get();
        // dd($dd);


        $users=DB::table("dingdan")
            ->leftJoin("place_detail", "place_detail.id", "=", "dingdan.pid")          
            ->select("dingdan.*","place_detail.title","place_detail.price")
            ->where("dingdan.uid",$uid)
            ->paginate(2);

        return view("home.dingdan",["users"=>$users]);
    }
//退款=================================================================================
    public function tuikuan() {
        $id = input::get('id');
        // dd($id);
        if(DB::table('dingdan')->where('id',$id)->delete())
        {
            return redirect("/tips")->with(["info"=>"删除成功","url"=>"/dingdan"]);
        }else
        {
            return redirect("/tips")->with(["info"=>"删除失败，原因：缓存问题，请重新删除。","url"=>"/dingdan"]);
        }
        
        
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
