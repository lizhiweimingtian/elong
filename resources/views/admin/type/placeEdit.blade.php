<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>景点详情编辑</title>
        <link href="../../public/admin/css/css.css" type="text/css" rel="stylesheet" />
        <link href="../../public/admin/css/main.css" type="text/css" rel="stylesheet" />
        <link rel="shortcut icon" href="../.././public/admin/images/main/favicon.ico" />
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
            .bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
            .main-for{ padding:10px;}
            .main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
            .main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
            .main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
            #addinfo a{ font-size:14px; font-weight:bold; background:url(images/main/addinfoblack.jpg) no-repeat 0 1px; padding:0px 0 0px 20px; line-height:45px;}
            #addinfo a:hover{ background:url(images/main/addinfoblue.jpg) no-repeat 0 1px;}
        </style>
        <!--文编辑器插件引入-->
        <script type="text/javascript" charset="utf-8" src="{{asset('/plugins/uedit/ueditor.config.js')}}"></script>
        <script type="text/javascript" charset="utf-8" src="{{asset('/plugins/uedit/ueditor.all.min.js')}}"></script>
        <script type="text/javascript" charset="utf-8" src="{{asset('/plugins/uedit/lang/zh-cn/zh-cn.js')}}"></script>
        <!--文件上传插件引入-->
        <script src="/plugins/uploadify/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="/plugins/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="/plugins/uploadify/uploadify.css">
    </head>
    <body>
      
        <!--main_top-->
        @if(session("info"))
        <ul>
            <li>{{session("info")}}</li>
        </ul>
        @endif
        @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $tmp)
            <li><font color="red">{{$tmp}}</font></li>
            @endforeach
        </ul>
        @endif
     
      
        <table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
            <tr>
                <td width="99%" align="left" valign="top">您的位置：景点管理&nbsp;&nbsp;>&nbsp;&nbsp;景点详情编辑</td>
            </tr>
            <tr>
                <td align="left" valign="top" id="addinfo">
                    <a href="/type_show" target="mainFrame" onFocus="this.blur()" class="add">返回景区（点）列表</a>
                </td>
            </tr>
            <tr>
                <td align="left" valign="top">
                    <form  name='fm' method="post" action="/type_placeEdit" enctype='multipart/form-data' onsubmit="check();">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
                            <tr onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                <td align="right" valign="middle" class="borderright borderbottom bggray">景 点 名 称：</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" name="place_id"  value="{{ $detail->place_id or $data->id}}">
                                    <input type="text" id="place" name="place_name" value="{{ $detail->place_name or $data->name}}" class="text-word">
                                </td>
                            </tr>
                            <tr onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                <td align="right" valign="middle" class="borderright borderbottom bggray">景 点 标 题：</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for">
                                    <input type="text" name="title" id="title" value="{{$detail->title or ""}}"  style="width:650px;height:45px">
                                </td>
                            </tr>

                             <tr onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                <td align="right" valign="middle" class="borderright borderbottom bggray">促 销 信 息：</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for">
                                    <input type="text" name="saleinfo" value="" style="width:650px;height:45px">
                                </td>
                            </tr>
                            
                            <tr onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                <td align="right" valign="middle" class="borderright borderbottom bggray">价 格 折 扣：</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for">
                                    促 销：<input type="radio" name="saleYN" value="1" >
                                    平 价：<input type="radio" name="saleYN" checked value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    首页显示： <input type="radio" name="isNindex" value="1" >
                                    不首页显示：<input type="radio" name="isNindex" checked value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    折 扣 点 数：<input type="text" name="zkou" value="{{$detail->zkou or ""}}" style="width:50px;height:25px">(两位小数)
                                    <b>原 价：</b><input type="text" name="old_price" value="{{$detail->old_price or ""}}" style="width:70px;height:25px">&nbsp;&nbsp;
                                    <b>现 价：</b><input type="text" name="price" value="{{$detail->price or ""}}" style="width:70px;height:25px">
                                </td>
                            </tr>
                            

                            <tr onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                <td align="right" valign="middle" class="borderright borderbottom bggray">添 加 美 图：</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for">
                                    <input type="file" name="pic" id="file_upload" value="" class="text-word" multiple="true">
                                    <input type="text"  name="photo_path" id="photo_path" value="{{$detail->photo_path or ""}}" class="text-word">
                                </td>
                            </tr>
                  
                            <tr onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                <td align="right" valign="middle" class="borderright borderbottom bggray">旅 程 安 排：</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for">
                                    第一天&nbsp; <input type="text"  name="day1"  value="{{$detail->day1 or ""}}" style="width:290px;height:40px">
                                    第二天&nbsp; <input type="text"  name="day2"  value="{{$detail->day2 or ""}}" style="width:290px;height:40px"><hr/>
                                    第三天&nbsp; <input type="text"  name="day3"  value="{{$detail->day3 or ""}}" style="width:290px;height:40px">
                                    第四天&nbsp; <input type="text"  name="day4"  value="{{$detail->day3 or ""}}" style="width:290px;height:40px">
                                </td>
                            </tr>
                            <tr onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                <td align="right" valign="middle" class="borderright borderbottom bggray">旅 程 简 介 ：</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for">
                                   
                                        <script id="editor" name="editorValue" type="text/plain" style="width:900px;height:450px;" >{{$detail->editorValue or ""}}</script>
                                    
                                    <script type="text/javascript">
                                        var URL = window.UEDITOR_HOME_URL = "/plugins/uedit/";
                                        var ue = UE.getEditor('editor');
                                    </script>

                                </td>
                            </tr>
                            <tr onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for">
                                    <input name="" type="submit" value="提交" class="text-but" >
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
        <script>
//
//            function check() {
//                var place = document.getElementById('place').value;
//                var title = document.getElementById('title').value;
//                var photo_path = document.getElementById('photo_path').value;
//               var photo_info = document.getElementById('photo_info').value;
//                var flag ="";
//                if (place.match(/^\.*$/)) {
//                    flag +="景点名称不能为空 ！\n";
//                }
//                if (title === "") {
//                    flag +="标题不能为空！\n";
//                }
//                if (photo_path.match(/^\.*$/)) {
//                    flag +="还没有添加图片 ！\n";
//                }
//                 if (photo_info.match(/^\.*$/)) {
//                    flag +="图片描述不能为空 ！";
//                }
//                return false;
//            }



        </script>
        <script>

            $(function() {
                $("#file_upload").uploadify({
                    swf: "/plugins/uploadify/uploadify.swf",
                    //设置按钮样式
                    buttonText: "选 择 美 图",
                    
//                    width: 50,
//                    height: 23,
                    //上传要求的设置
                    fileSizeLimit: 8 * 1024 * 1024,
                    fileTypeExts: "*.jpg;*.jpeg;*.png;*.gif",
                    //表单请求的方式
                    method: "post",
                    //表单数据
                    formData: {
                        _token: document.fm._token.value,
                    },
                    //表单提交地址
                    uploader: "/type_place_upload" ,
                    //上传成功的处理
                    onUploadSuccess: function(msg, txt, file) {
                        
                        eval("var result = " + txt);
                        if (!result.status)
                            alert(result.info)
                        else {
                            //预览图片
                            $("#preview").html("<img src=" + result.info + " width=120 />");
                            //将图片信息写入input隐藏域 随表单一起提交
                            $("input[name=photo_path]").val(result.info);
                        }
                    }
                });
            })
        </script>
    </body>
</html>