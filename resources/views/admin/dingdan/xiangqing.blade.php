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
<a href="{{$_SERVER['HTTP_REFERER']}}">返回上一页</a>
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>


    <td width="99%" align="left" valign="top">您的位置：订单详情</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="/adm/home/user/create" target="mainFrame" onFocus="this.blur()" class="add"></a></td>
  		</tr>
	</table>
    </td>
  </tr>
  
    
  
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab" class="bordered">
    
      <tr>
        <th align="center" valign="middle" class="borderright">目的地</th>
        <th align="center" valign="middle" class="borderright">旅游详情</th>
        <th align="center" valign="middle" class="borderright">订单金额</th>
        <th align="center" valign="middle" class="borderright">出发时间</th>    
      </tr>

      
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">{{$userRec->place_name}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$userRec->title}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$userRec->old_price}}</td>
       
        
        <td align="center" valign="middle" class="borderright borderbottom"></td>
       
      </tr>
    </table>
   
</table>

</body>
</html>