<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Validator;
use DB, Hash;
class LoginController extends Controller
{
	public function index(Request $request)
	{
		$data =$request->old();
		return view("admin.login.index", compact("data"));
	}
	//生成验证码的方法
	public function captcha($tmp)
    {
    	
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 80, $height = 34, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('code', $phrase);
		
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    public function logTodo(Request $request)
    {
    	
    	if(session("code")!=$request->get("code")){
    		$request->flash();
    		return back()->with(["info"=>"验证码错误"]);
    	}
    	$data=$request->only("uname","password","code");

    	$result=Validator::make($data,[
    		"uname"=>"required",
    		"password"=>"required|between:6,15"
    	]);
    	//如果验证失败  回跳
    	if($result->fails())
    	{
    		return back()->with(["info"=>$result->errors()]);
    	}

    	//连接数据库查看帐号是否存在，密码是否正确
    	$userModel=new \App\User();
    	$userRec=$userModel->where("name",$data["uname"])->get()->first();
    	// dd($userRec);
    	// exit;
    	if(empty($userRec))
    	{
    		$request->flash();
    		return back()->with(["info"=>"账号不存在"]);
    	}else if(!hash::check($data["password"],$userRec["password"]))
    	{
    		$request->flash();
    		return back()->with(["info"=>"密码不正确"]);
    	}else
    	{
            // $userModel->where("name",$data["uname"])->update(["updated_at"=>date()]);
            $time=date("Y-m-d H:i:s");
            DB::table("admin_user")->where("name",$data["uname"])->update(["updated_at"=>$time]);
    		session(["userData"=>$userRec]);
    		return redirect("/adm");
    	}
    }

    public function logout()
    {
    	Session::forget("userData");
    	return redirect("/adm");
    }
}
?>