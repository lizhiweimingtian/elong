<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;

class HomeMiddleware
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
        //非登录模块的路由，都需要登陆验证
        if(!Session::has("userData") && "/home/Login/zhongxin" == $_SERVER['REQUEST_URI']){
            //如果没有登陆，跳转到登录页面
            return redirect("/login");
        }        
            return $next($request);
    }
}
