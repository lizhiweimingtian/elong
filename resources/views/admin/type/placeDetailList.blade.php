<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>景区景点详情列表</title>
        <link href="../../public/admin/css/css.css" type="text/css" rel="stylesheet" />
        <link href="../../public/admin/css/main.css" type="text/css" rel="stylesheet" />
        <link rel="shortcut icon" href="../.././public/admin/images/main/favicon.ico" />
        <link type="text/css" rel="stylesheet" href="/bootstrap/css/bootstrap.css">
        <script src="/admin/js/jquery-2.0.2.min.js"></script>
        <meta name="csrf-token" content="{{csrf_token()}}"/>
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
            #search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
            #search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
            #search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
            #search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
            #search a.add{ background:url(images/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
            #search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
            #main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
            #main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
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
            #addinfo{ padding:0 0 10px 0;}
            input.text-word{ width:50px; height:24px; line-height:20px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; text-align:center; color:#666}
            .tda{width:100px;}
            .tdb{ padding-left:20px;}
            td#xiugai{ padding:10px 0 0 0;}
            td#xiugai input{ width:100px; height:40px; line-height:30px; border:none; border:1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
            .zhikan{margin-left:50px;}
        </style>
        
        
    </head>
    <body>
        <!--main_top-->
        <font color="red">{{$info or ""}}</font>
        <p>您的位置：景区景点详情列表</p> 
        <form method="post" action="/type_show">  
            <table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
               <tr>
                    <span>管理员：</span><input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <span>
                         <input type="text" name="keyword" value="{{$keyword or ""}}" placeholder="请输入景区（点）名称" />
                        <input type="submit" value="查询" />
                   </span>  
                    <span  class="zhikan"><a href="/type_zhikan"><font color="blue"><b>只看促销景点</b></font ></a>  </span>  <span  class="zhikan"><a href="/type_zhikan2"><font color="blue"><b>只看首页显示景点</b></font ></a> </span><input type="button" onclick="javascript:window.history.go(-1);" value="返回"/>
                </tr>
            </table>
       
            
                 <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
                            <tr>
                                <th align="center" valign="middle" class="borderright borderbottom tdb">分类树</th>
                                <th align="center" valign="middle" class="borderright borderbottom tdb">ID</th>
                                <th align="center" valign="middle" class="borderright borderbottom tdb">景点或所属分区</th>
                                <th align="center" valign="middle" class="borderright borderbottom tdb">是否促销</th>
                                <th align="center" valign="middle" class="borderright borderbottom tdb">是否首页显示</th>
                                <th align="center" valign="middle" class="borderright borderbottom tdb">  操  作 </th>
                            </tr>
                                @foreach($places as $tmp)	
                               @if($tmp->pid == 0 )
                            <tr class="bggray">
                                <td align="left" valign="middle" class="borderright borderbottom tdb"><img src="/admin/img/main/dirfirst.gif" width="15" height="13"></td>
                                <td align="center" valign="middle" class="borderright borderbottom"><b><font color="red">{{ $tmp->place_id }}</font></b></td>
                                <td align="center" valign="middle" class="borderright borderbottom tdb"><b><font color="red">{{ $tmp->name }}</font></b></td>
                                <td align="center" valign="middle" class="borderright borderbottom tdb"></td>
                                <td align="center" valign="middle" class="borderright borderbottom tdb"></td>
                                <td align="center" valign="middle" class="borderbottom"> </td>
                               
                            </tr>
                            @endif
                            @if($tmp->pid != 0 )
                            <tr>
                                <td align="left" valign="middle" class="borderright borderbottom tdb"><img src="/admin/img/main/dirsecond.gif" width="28" height="28"></td>
                                <td align="center" valign="middle" class="borderright borderbottom">{{ $tmp->place_id }}</td>
                                <td align="center" valign="middle" class="borderright borderbottom tdb">{{ $tmp->name }}</td>
                                <td align="center" valign="middle" class="borderright borderbottom tdb" >
                                   是：<input class="saleYN" type='radio' name='saleYN_{{ $tmp->place_id }}' value='1' place_id="{{ $tmp->place_id }}" @if($tmp->saleYN==1) checked @endif/> &nbsp
                                   否：<input class="saleYN" type='radio' name='saleYN_{{ $tmp->place_id }}' value='0' place_id="{{ $tmp->place_id }}" @if($tmp->saleYN==0) checked @endif/>
                                </td>
                                <td align="left" valign="middle" class="borderright borderbottom tdb">
                                   是：<input class="isNindex" type='radio' name='isNindex_{{ $tmp->place_id }}' value='1' place_id="{{ $tmp->place_id }}" @if($tmp->isNindex==1) checked @endif/> &nbsp
                                   否：<input class="isNindex" type='radio' name='isNindex_{{ $tmp->place_id }}' value='0' place_id="{{ $tmp->place_id }}" @if($tmp->isNindex==0) checked @endif/>
                                </td>
                                <td align="center" valign="middle" class="borderbottom">
                                    <a href="/type_place_edit?id={{ $tmp->place_id }}" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span>
                                    <a href="/type_placeScan?id={{ $tmp->place_id }}" target="mainFrame" onFocus="this.blur()" class="add">查看</a><span class="gray">&nbsp;|&nbsp;</span>
                                    <a href="/type_delete?id={{ $tmp->place_id }}" target="mainFrame" onFocus="this.blur()" class="add">删除</a>
                                </td>
                            </tr>    
                          @endif
                          @endforeach

               </table>
            <p>{!!$places->render()!!}</p>
        </form>
        <script>
            $(function(){
                
                    $(".saleYN").click(function(){
                            $.ajax({
                                type:"post",
                                url:"/place_ajax1",
                                data:'saleYN='+$(this).val()+"&place_id="+$(this).attr('place_id'),
                                dataType:"json",

                                success:function(result){

                                    alert(result.info);
                                }
                            });
                    });
                    
                    $(".isNindex").click(function(){
                       $.ajax({
                           type:"post",
                           url:"/place_ajax2",
                           data:'isNindex='+$(this).val()+"&place_id="+$(this).attr('place_id'),
                           dataType:"json",
                           
                           success:function(result){
                            
                               alert(result.info);
                           }
                       });
                    });
        });
 
        </script>
    </body>
</html>