<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<script src="{{ asset('/admin/js/jquery-2.0.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/uploadify/jquery.uploadify.min.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/plugins/uploadify/uploadify.css') }}" />
<link href="admin/css/css.css" type="text/css" rel="stylesheet" />
<link href="admin/css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="admin/img/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(admin/img/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(admin/img/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
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
.bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
.main-for{ padding:10px;}
.main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
.main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
.main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
#addinfo a{ font-size:14px; font-weight:bold; background:url(images/main/replayblack.jpg) no-repeat 0 0px; padding:0px 0 0px 20px; line-height:45px;}
#addinfo a:hover{ background:url(images/main/replayblue.jpg) no-repeat 0 0px;}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：网站配置&nbsp;&nbsp;>&nbsp;&nbsp;网站设置</td>
  </tr>
  <tr>
    <td align="left" valign="top" id="addinfo">
    <a href="./main_message.php" target="mainFrame" onFocus="this.blur()" class="add">返回上一级</a>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
  @foreach ($config as $tmp)
  <form action="/adm/page/update" method="post" enctype="multipart/form-data" name="upload">
  	<input type="hidden" name="_token" value="{{csrf_token()}}" />
     <input type="hidden" name="id" value="{{$tmp->id}}" />
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">网站名称：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
		    <input type='text' name="webname" style="height:35px; width:280px;" value="{{$tmp->webname}}">    
		</td>
        </tr>
      
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">网站关键字：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
		
		  <input type='text' name="keywords" style="height:35px; width:280px;" value="{{$tmp->keywords}}">
		</td>
      </tr>
     
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">网站logo：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for" style="line-height:24px;">
		    
         <input type='file' name="logo" id="logo" style="height:35px; width:280px;" value="">
			 <img src="{{$tmp->logo}}" id="im" width="130px">
		</td>
      </tr>
	  <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">网站版权：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for" style="line-height:24px;">
		     <input type='text' name="copy" style="height:35px; width:280px;" value="{{$tmp->copy}}">
		</td>
      </tr>
	  <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">网站状态：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for" style="line-height:24px;">
		     
			 <input type="radio" name="status" @if($tmp->status=='1') checked @endif value="1"/> 开启
			 <input type="radio" name="status" @if($tmp->status=="0") checked @endif value="0"/>关闭

		</td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
	  
        <td align="right" valign="middle" class="borderright borderbottom bggray">操作：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
		  <input type="submit" value="提交"/>
		  <input type="reset" value="重置"/>
		</td>
      </tr>  
    </table>
  </form>
 
  @endforeach
  <div class="fl">
      @if(session("info"))
      <ul> 
        <li>{{session("info")}}<li>
      </ul>
      @endif 
      @if (count($errors) > 0)
      <ul>
        @foreach($errors->all() as $tmp)
        <li>{{$tmp}}</li>
        @endforeach
      </ul>
      @endif
    </div>
    </td>
    </tr>
     <script src="{{url('/admin/js/wangzhan.js')}}"></script>
</table>
</body>
</html>