<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>

<link type="text/css" rel="stylesheet" href="{{asset('/css/admin/user_index.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}" />
<link href="admin/css/css.css" type="text/css" rel="stylesheet" />
<link href="admin/css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="admin/img/main/favicon.ico" />
<script src="{{ asset('/admin/js/jquery-2.0.2.min.js') }}" type="text/javascript"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(admin/img/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(admin/img/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(admin/img/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}

form p input[type='text']{
  width:200px;
  height:24px;
  font:14px/24px 宋体;
  border:1px solid #ddd;
  border-radius: 3px;
  color:#666;
  padding: 0 0 0 5px;
   margin-top:10px;
} 


</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：用户管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="post" action="/adm/user">
	         <span>管理员：</span>
           <input type="hidden" name="_token" value="{{csrf_token()}}" />
           <p><input type="text" name="keyword" value="{{$keyword}}" placeholder="请输入账号或昵称" />
           <input type="submit" value="查询" />
           </p>
          </form>
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">新增管理员</a></td>
  		</tr>
	</table>
    </td>
  </tr>
  
    
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab" class="bordered">
    
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">帐号</th>
        <th align="center" valign="middle" class="borderright">昵称</th>
        <th align="center" valign="middle" class="borderright">所属分组</th>
        <th align="center" valign="middle" class="borderright">状态</th>
        <th align="center" valign="middle" class="borderright">头像</th>
        <th align="center" valign="middle" class="borderright">创建时间</th>
        <th align="center" valign="middle" class="borderright">最后登录时间</th>
        <th align="center" valign="middle">操作</th>
      </tr>

      @foreach ($users as $tmp)
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->id}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->name}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->nickname}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">

           <!-- $auth={{$tmp->auth}} -->
          <select name="groups" uid="{{$tmp->id}}">
            @foreach ($groups as $group)
                @if ($tmp->group_id == $group->id)
                    <option value="{{$group->id}}" selected>{{$group->title}}</option>
                @else
                    <option value="{{$group->id}}">{{$group->title}}</option>
                @endif
            @endforeach
        </select>
        </td>
        <td align="center" valign="middle" class="borderright borderbottom">
          
          @if ($tmp->status==0)
              禁用
          @else
              启用
          @endif
        </td>
        <td align="center" valign="middle" class="borderright borderbottom"><img src="{{$tmp->avartar}}" width="80"></td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->created_at}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->updated_at}}</td>
        <td align="center" valign="middle" class="borderbottom"><a href="/adm/user/edit?id={{$tmp->id}}" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="/adm/user/status/{{$tmp->id}}" target="mainFrame" onFocus="this.blur()" class="add">
            @if($tmp->status==0)
            
              开启
            @else
              关闭 
            
            @endif
        </a><span class="gray">&nbsp;|&nbsp;</span><a href="/adm/user/destroy?id={{$tmp->id}}" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      @endforeach
    </table>
    <p>
  {!!$users->appends(['keyword' => $keyword])->render()!!}
</p>
</table>
<script src="{{asset("/admin/js/user_index.js")}}"></script>
</body>
</html>