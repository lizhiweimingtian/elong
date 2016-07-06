<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台管理登录界面</title>
    <link href="admin/css/alogin.css" rel="stylesheet" type="text/css" />
</head>
<body>
    {{ session("info") }}      
    <form id="form1" runat="server" action="/logTodo" method="post">
    <input type="hidden" name="_token" value="{{ $data['_token'] or csrf_token() }}" />
    <div class="Main">
        <ul>
            <li class="top"></li>
            <li class="top2"></li>
            <li class="topA"></li>
            <li class="topB"><span><img src="admin/img/login/logo.gif" alt="" style="" /></span></li>
            <li class="topC"></li>
            <li class="topD">
                <ul class="login">
                    <li><span class="left login-text">用户名：</span> <span style="left">
                        <input id="Text1" style=" width: 200px; height:40px;" type="text" name="uname"/>  
                     
                    </span></li>
                    <li><span class="left login-text">密码：</span> <span style="left">
                       <input id="Text2" style=" width: 200px; height:40px;" type="password"  name="password" />  
                    </span></li>
					<li><span class="left login-text">验证码：</span> <span style="left">
                       <input id="Text3" style=" width: 100px; height:40px;" type="text" name="code"/><img src="{{ url('/captcha')."/". rand() }}" id="code" onclick="this.src = this.src.replace(/\d+$/, '') + Math.random();" align="top" />			   
                    </span></li>
                </ul>
            </li>
            <li class="topE"></li>
            <li class="middle_A"></li>
            <li class="middle_B"></li>
            <li class="middle_C"><span class="btn"><input name=""  class="denglu" type="image" src="admin/img/login/btnlogin.gif" /></span></li>
            <li class="middle_D"></li>
            <li class="bottom_A"></li>
            <li class="bottom_B">网站后台管理系统&nbsp;&nbsp;www.php.com</li>
        </ul>
    </div>
    </form>
    <!-- // <script src="{{ asset('/js/admin/login_index.js') }}"></script> -->
</body>
</html>