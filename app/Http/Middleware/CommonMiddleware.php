<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Session;
class CommonMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         //查询所有的权限列表
         $rules = DB::table("admin_group_access")->where("status", "1")->get();
        //非登录模块的路由 都需要【登陆验证】
        if (!Session::has("userData") && !preg_match('/^\/log/',$_SERVER['REQUEST_URI'])) {
            //如果用户没有登录 则跳转到登录页
            return redirect("/login");
        
        }else if(!empty($rules))
        {
            $auth_list=array();
            foreach($rules as $rule)
            {
                $auth_list[$rule->name]=$rule->title;
            }
            // dd($auth_list);
            $subject = preg_replace("/\?.+/", "", $_SERVER['REQUEST_URI']);
             //dd($subject);
            $subject = preg_replace("/\/\d$/", "", $subject);
            //dd($subject);
            if(array_key_exists($subject, $auth_list))
            {
                //验证用户是否具备操作权限
                $groupid=(DB::table("admin_user")
                    ->leftJoin("admin_group_rule","admin_user.id","=","admin_group_rule.uid")
                    ->where("admin_user.id",Session::get("userData")->id)
                    ->pluck("group_id"));
                // dd($groupid);
                $rules=DB::table("admin_group")->where("id",$groupid)->pluck("rules");
                $ruleid=DB::table("admin_group_access")->where("name",$subject)->pluck("id");
                if(!in_array($ruleid,explode(",",$rules)))
                {
                    if(in_array($subject, ["/Admin/group/setRule", "/Admin/user/setGroup"]))  return response(["status" => 0, "info" => "对不起，你无权操作！"]);
                    return redirect("/tips")->with(["info" => "对不起，你无权操作！", "url" => $_SERVER['HTTP_REFERER']]);
                }
            }

        }
        return $next($request);
    }
}
