<!DOCTYPE html>
<html>
<head><script src="adv.dat" async="" type="text/javascript"></script><script src="/home/other/presadv.dat" async="" type="text/javascript"></script><script src="/home/js/a.js" async="" type="text/javascript"></script><script src="/home/js/v.js" charset="utf-8"></script><script src="/home/js/mv.js" async="" type="text/javascript"></script><script src="/home/js/mba.js" async="" type="text/javascript"></script><script src="/home/js/s.js" async="" type="text/javascript"></script><script src="/home/js/push.js"></script><script src="/home/js/fx.js" async="" type="text/javascript"></script><script src="/home/js/mvl.js" async="" type="text/javascript"></script><script src="/home/js/hm.js"></script><script src="/home/js/ga.js" async="" type="text/javascript"></script>
<meta charset="UTF-8">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 

<title>【驴妈妈旅游】_景点门票_自由行_跟团游_国内游_出境游_酒店_机票</title>
<meta name="keywords" content="自由行,景点门票,跟团游,自驾游,机票,酒店">
<meta name="description" content="驴妈妈旅游网-中国新型的B2C旅游电子商务网站，为旅游者提供景区门票、自由行、度假酒店、机票、国内游、出境游等一站式旅游服务，《自在游天下,就找驴妈妈!》">

<meta property="qc:admins" content="276353266764651516375">
<meta name="baidu_ssp_verify" content="408500f95bb55fbf53b1e73e2c4faee9">
@foreach ($config as $tmp)
<title>{{$tmp->webname}}</title>
<meta name="keywords" content="{{$tmp->keywords}}">
<meta name="description" content="驴妈妈旅游网-中国新型的B2C旅游电子商务网站，为旅游者提供景区门票、自由行、度假酒店、机票、国内游、出境游等一站式旅游服务，《自在游天下,就找驴妈妈!》
">

<script src="/home/js/90409730.js" type="text/javascript" language="javascript"></script><script src="/home/js/90409730.js" type="text/javascript" language="javascript"></script><script src="/home/js/dispatcher-v3.js" type="text/javascript" language="javascript"></script><script type="text/javascript" src="/home/js/bcore.min.js"></script><script type="text/javascript" src="/home/js/yahoo-min.js"></script><script type="text/javascript" src="/home/js/cp-v3.js"></script><script charset="utf-8" src="/home/other/StdID.do" id=""></script><script type="text/javascript" src="/home/js/json-min.js"></script><script charset="utf-8" src="/home/other/PageView.do"></script>
<link rel="stylesheet" type="text/css" href="/home/css/index.css" media="all">
<script type=text/javascript src="/plugins/My97DatePicker/WdatePicker.js"></script>
<script src="/home/js/lunbobanar.js"></script>

</head>
<!-- 首屏 banner 及导航 -->
<body class="home" allyes_city="BJ">


<div class="sytopBan"><ul class="sytopBan-ul"><li class=""><a href="" target="_blank"><img src="/home/img/dt-hynt.jpg" to_trd="null" height="60" width="1200"></a></li><li class="active"><a href="" target="_blank"><img src="/home/img/dt-dsn.jpg"  to_trd="null" height="60" width="1200"></a></li></ul><div class="sytopBan-tab"><span class=""></span><span class="active"></span></div></div>   

@include("home.common.header1");

@endforeach
<!-- 首屏 banner 及导航 -->
<div class="lv-ban">
	<!--首页搜索super 1-->
        <!--JavaScript部分-->
  
<div class="lv_s_all">
    <ul class="lv_s_tab" id='ul_list'>
	<li class="active" data-type="GROUP"onclick="secBoard(0);">跟团游</li>
        <li   data-type="FREETOUR" onclick="secBoard(1);">自由行</li>
    	<li   data-type="TICKET" onclick="secBoard(2);">景点门票</li>
        <li   data-type="HOTEL" onclick="secBoard(3);">度假酒店</li>
        <li   data-type="FLIGHT" onclick="secBoard(4);">机票</li>
        <li   data-type="SHIP" onclick="secBoard(5);">邮轮</li>
        <li   data-type="VISA" onclick="secBoard(6);">签证</li>
    </ul>
   
    <div id='div_list' class="lv_s_r">
    	<!--跟团游板块 -->
    	<div class="lv_s_list" style="display: block;">
        	<!--出发地和搜索框-->
            <ul class="lv_s_ipt">
            	<li style="display: block;">
                    <div class="lv_s_table clearfix">
                        <div class="lv_s_td">
                            <div class="lv_s_t">出发地：</div>
                            <div class="lv_s_city_all">
                                
                                <div class="lv_s_city_btn js_s_city_btn " onclick="goCity();" id="123" >
<!--                                    <b data-id="13">北京</b><i class="lv_s_arrow"></i>-->
                                    <input type="text" class="search" value="" id="avi">
                                </div>
                                <div class="lv_s_city js_all_city" style="display:none" id="goCity" onclick="yincang(this)">
                                    <p>热门出发城市</p>
                                <div class="search_city_hot cfd_hot" id="abc"> 
                                    <a class="w"  data-code="" id="abc" data-id="8" data-name="">全国</a> 
                                    @foreach($place_city as $v)
                                    <a class="w"  data-code="{{$v->code}}" data-id="{{$v->id}}" data-name="{{$v->name}}">{{$v->name}}</a>
                                    @endforeach
                                </div>
                                    <dl class="city_down_list"> 
                                        <dt>A-G</dt> 
                                        <dd> 
                                            @foreach($code_ag as $ag) 
                                            <a class="w" data-code="{{$ag->code}}" data-id="{{$ag->id}}" data-name="{{$ag->name}}" >{{$ag->name}}</a>  
                                             @endforeach
                                        </dd>
                                    </dl>
                                  <dl class="city_down_list">
                                        <dt>H-N</dt> 
                                        <dd>
                                            @foreach($code_hn as $hn)
                                            <a class="w" data-code="{{$hn->code}}" data-id="{{$hn->id}}" data-name="{{$hn->name}}">{{$hn->name}}</a> 
                                             @endforeach
                                        </dd>
                                    </dl>
                                    <dl class="city_down_list"> 
                                        <dt>P-T</dt> 
                                        <dd> @foreach($code_pt as $pt)
                                            <a class="w" data-code="{{$pt->code}}" data-id="{{$pt->id}}" data-name="{{$pt->name}}">{{$pt->name}}</a> 
                                            @endforeach
                                        </dd>
                                    </dl>
                                    <dl class="city_down_list"> 
                                        <dt>W-Z</dt>
                                        <dd> @foreach($code_wz as $wz)
                                            <a class="w" data-code="{{$wz->code}}" data-id="{{$wz->id}}" data-name="{{$wz->name}}">{{$wz->name}}</a>
                                            @endforeach
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="lv_s_td ml10">
                            <div class="lv_s_t">目的地：</div>
                            <input style="color: rgb(187, 187, 187);" num="0" class="lv_s_input js_s_input w_308" id="dest1" value="" placeholder="请输入目的地、主题、或关键词" autocomplete="off" type="text">
                        </div>
                    </div>
                </li>
            </ul>
        	
            
            <!--搜索按钮--开始-->
            <div class="lv_s_search lv_s_search_quality_box">
                <div class="lv_s_search_quality"></div>
                <span class="lv_s_search_btn" >搜索</span>
            </div><!--搜索按钮--结束-->
            
            <!--热门模块--开始-->
            <div class="lv_s_hot" style="display: block;">
	            	<dl>
	                	<dt>国内热门</dt>
	                    <dd>
		                    	<a href="" target="_blank">内蒙古</a>
		                    	<a href="" target="_blank">三亚</a>
		                    	<a href="" target="_blank">云南</a>
		                    	<a href="" target="_blank">九寨沟</a>
		                    	<a href="" target="_blank">青海</a>
		                    	<a href="" target="_blank">张家界</a>
		                    	<a href="" target="_blank">上海</a>
		                    	<a href="" target="_blank">厦门</a>
		                    	<a href="" target="_blank">黄山</a>
		                    	<a href="" target="_blank">桂林</a>
		                    	<a href="" target="_blank">乌镇</a>
		                    	<a href="" target="_blank">山西</a>
		                    	<a href="" target="_blank">西藏</a>
		                    	<a href="" target="_blank">新疆</a>
		                    	<a href="" target="_blank">长白山</a>
		                    	<a href="" target="_blank">西安</a>
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>出境热门</dt>
	                    <dd>
		                    	<a href="" target="_blank">泰国</a>
		                    	<a href="" target="_blank">日本</a>
		                    	<a href="" target="_blank">韩国</a>
		                    	<a href="" target="_blank">长滩岛</a>
		                    	<a href="" target="_blank">欧洲</a>
		                    	<a href="" target="_blank">马来西亚</a>
		                    	<a href="" target="_blank">澳洲</a>
		                    	<a href="" target="_blank">柬埔寨</a>
		                    	<a href="" target="_blank">美国</a>
		                    	<a href="" target="_blank">中国台湾</a>
		                    	<a href="" target="_blank">越南</a>
		                    	<a href="" target="_blank">迪拜</a>
		                    	<a href="" target="_blank">巴厘岛</a>
		                    	<a href="" target="_blank">普吉岛</a>
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>热门主题</dt>
	                    <dd>
		                    	<a href="" target="_blank">甘肃玩乐参团</a>
		                    	<a href="" target="_blank">开心驴行</a>
		                    	<a href="" target="_blank">摄影</a>
		                    	<a href="" target="_blank">出境温泉季</a>
		                    	<a href="" target="_blank">送咕咚洗衣机</a>
		                    	<a href="" target="_blank">毕业游</a>
		                    	<a href="" target="_blank">599家庭套房</a>
		                    	<a href="" target="_blank">暑期欢乐送</a>
		                    	<a href="" target="_blank">送红酒</a>
		                    	<a href="" target="_blank">上海迪士尼</a>
	                    </dd>
	                </dl>
            </div>
            <!--热门模块--结束-->
            
        </div>
        
        <!--自由行板块-->
        <div class="lv_s_list" style="display:none">
        	<!--自由行分类切换-->
        	<ul class="lv_s_ipt_tab">
            	<li class="active">酒店+景点<i class="lv_s_tab_arrow"></i></li>
                <li class="">机票+酒店<i class="lv_s_tab_arrow"></i></li>
            </ul>
            <ul class="lv_s_ipt">
            	<li style="display: block;"><input style="color: rgb(187, 187, 187);" num="1" class="lv_s_input js_s_input w_438 mt20" value="" placeholder="请输入目的地、主题、或关键词" autocomplete="off" type="text"></li>
                <li>
                	<!--出发地和搜索框-->
                    <div class="lv_s_table clearfix">
                        <div class="lv_s_td">
                            <div class="lv_s_t">出发地：</div>
                            <div class="lv_s_city_all">
                                <div class="lv_s_city_btn js_s_city_btn">
                                    <b data-id="13">北京</b><i class="lv_s_arrow"></i>
                                </div>
                                <div class="lv_s_city js_all_city">
                                    <p>热门出发城市</p>
                                <div class="search_city_hot cfd_hot">
                                    <a class="w" data-code="" data-id="8" data-name="">全国</a>
                                     @foreach($place_city as $v)
                                    <a class="w"  data-code="{{$v->code}}" data-id="{{$v->id}}" data-name="{{$v->name}}">{{$v->name}}</a>
                                    @endforeach
                                </div>
                                    <dl class="city_down_list"> 
                                        <dt>A-G</dt> 
                                        <dd> 
                                            @foreach($code_ag as $ag) 
                                            <a class="w" data-code="{{$ag->code}}" data-id="{{$ag->id}}" data-name="{{$ag->name}}" >{{$ag->name}}</a>  
                                             @endforeach
                                        </dd>
                                    </dl>
                                  <dl class="city_down_list">
                                        <dt>H-N</dt> 
                                        <dd>
                                            @foreach($code_hn as $hn)
                                            <a class="w" data-code="{{$hn->code}}" data-id="{{$hn->id}}" data-name="{{$hn->name}}">{{$hn->name}}</a> 
                                             @endforeach
                                        </dd>
                                    </dl>
                                    <dl class="city_down_list"> 
                                        <dt>P-T</dt> 
                                        <dd> @foreach($code_pt as $pt)
                                            <a class="w" data-code="{{$pt->code}}" data-id="{{$pt->id}}" data-name="{{$pt->name}}">{{$pt->name}}</a> 
                                            @endforeach
                                        </dd>
                                    </dl>
                                    <dl class="city_down_list"> 
                                        <dt>W-Z</dt>
                                        <dd> @foreach($code_wz as $wz)
                                            <a class="w" data-code="{{$wz->code}}" data-id="{{$wz->id}}" data-name="{{$wz->name}}">{{$wz->name}}</a>
                                            @endforeach
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="lv_s_td ml10">
                            <div class="lv_s_t">目的地：</div>
                            <input style="color: rgb(187, 187, 187);" num="2" class="lv_s_input js_s_input w_308" value="" placeholder="请输入目的地、主题、或关键词" autocomplete="off" type="text">
                        </div>
                    </div>
                </li>  
            </ul>
            
            <!--搜索按钮--开始-->
            <div class="lv_s_search">
            	<span class="lv_s_search_btn">搜索</span>
            </div><!--搜索按钮--结束-->
            
            <!--热门模块--酒店+景点--开始-->
            <div class="lv_s_hot" style="display: block;">
	            	<dl>
	                	<dt>热搜城市</dt>
	                    <dd>
		                    	<a href="" target="_blank">北京</a>
		                    	<a href="" target="_blank">天津</a>
                                        <a href="" target="_blank">青岛</a>
		                    	<a href="" target="_blank">长白山</a>
                                        <a href="" target="_blank">秦皇岛</a>
		                    	<a href="" target="_blank">泰安</a>
                                        <a href="" target="_blank">大连</a>
		                    	<a href="" target="_blank">呼伦贝尔</a>
                                        <a href="" target="_blank">济南</a>
		                    	<a href="" target="_blank">大同</a>
		                    
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>精选主题</dt>
	                    <dd>
                                         <a href="" target="_blank">温泉</a>
		                    	<a href="" target="_blank">初夏郊游</a>
                                        <a href="" target="_blank">古镇村落</a>
		                    	<a href="" target="_blank">主题乐园</a>
		                    	<a href="" target="_blank">主题乐园</a>
		                    	
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>热门景点</dt>
	                    <dd>
                                        <a href="" target="_blank">古北水镇</a>
		                    	<a href="" target="_blank">北京欢乐谷</a>
                                        <a href="" target="_blank">呼伦贝尔草原</a>
		                    	<a href="" target="_blank">泰山</a>
                                        <a href="" target="_blank">长白山</a>
		                    	<a href="" target="_blank">大连发现王国</a>
	                    </dd>
	                </dl>
            </div>
            <!--热门模块--结束-->
            
            <!--热门模块--机票+酒店--开始-->
            <div class="lv_s_hot" style="display: none;">
	            	<dl>
	                	<dt>国内热门</dt>
	                    <dd>
		                    	<a href="" target="_blank">丽江</a>
		                    	<a href="" target="_blank">厦门</a>
                                        <a href="" target="_blank">桂林</a>
		                    	<a href="" target="_blank">西安</a>
                                        <a href="" target="_blank">浙江</a>
		                    	<a href="" target="_blank">青岛</a>
		                    	
		                    	<a href="" target="_blank">九寨沟</a>
		                    	<a hrref="" target="_blank">张家界</a>
		                    	<a href="" target="_blank">南昌</a>
		                    	<a href="" target="_blank">黄山</a>
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>出境热门</dt>
	                    <dd>
		                    	<a href="" target="_blank">泰国</a>
		                    	<a href="" target="_blank">长滩岛</a>
		                    	<a href="" target="_blank">毛里求斯</a>
		                    	<a href="" target="_blank">韩国</a>
		                    	<a href="" target="_blank">日本</a>
		                    	<a href="" target="_blank">马尔代夫</a>
		                    	<a href="" target="_blank">巴厘岛</a>
		                    	<a href="" target="_blank">越南</a>
		                    	<a href="" target="_blank">塞舌尔</a>
		                    	<a href="" target="_blank">马来西亚</a>
		                    	<a href="" target="_blank">新加坡</a>
		                    	<a href="" target="_blank">香港</a>
	                    </dd>
	                </dl>
            </div>
            <!--热门模块--结束-->
        </div>
        
        <!--景点门票板块-->
        <div class="lv_s_list" style="display:none">
        	<ul class="lv_s_ipt mt5">
                    <li style="display: block;"><input style="color: rgb(187, 187, 187);" num="3" class="lv_s_input js_s_input w_438" value="" placeholder="请输入目的地、主题或景区名" autocomplete="off" type="text"></li>
            </ul>
            <!--搜索按钮--开始-->
            <div class="lv_s_search">
            	<span class="lv_s_search_btn">搜索</span>
            </div><!--搜索按钮--结束-->
            
            <!--热门模块--开始-->
            <div class="lv_s_hot" style="display: block;">
	            	<dl>
	                	<dt>热搜景点</dt>
	                    <dd>
		                    	<a href="" target="_blank">上海迪士尼乐园</a>
		                    	<a href="" target="_blank">东方明珠</a>
		                    	<a href="" target="_blank">野生动物园</a>
		                    	<a href="" target="_blank">巧克力乐园</a>
		                    	<a href="" target="_blank">杜莎蜡像馆</a>
		                    	<a href="" target="_blank">长风海洋世界</a>
		                    	<a href="" target="_blank">公主学院乐园</a>
                                        <a href="" target="_blank">上海欢乐谷</a>
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>国内热门</dt>
	                    <dd>
		                    	<a href="" target="_blank">上海</a>
		                    	<a href="" target="_blank">北京</a>
		                    	<a href="" target="_blank">广州</a>
		                    	<a href="" target="_blank">成都</a>
		                    	<a href="" target="_blank">杭州</a>
		                    	<a href="" target="_blank">无锡</a>
		                    	<a href="" target="_blank">常州</a>
		                    	<a href="" target="_blank">南京</a>
		                    	<a href="" target="_blank">深圳</a>
		                    	<a href="" target="_blank">宁波</a>
		                    	<a href="" target="_blank">厦门</a>
		                    	<a href="" target="_blank">三亚</a>
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>出境热门</dt>
	                    <dd>
		                    	<a href="" target="_blank">香港海洋公园</a>
		                    	<a href="" target="_blank">香港迪士尼乐园</a>
		                    	<a href="" target="_blank">挪亚方舟</a>
                                        <a href="" target="_blank">香港杜莎夫人蜡像馆</a>
		                    	<a href="" target="_blank">香港昂坪360缆车</a>
		                    	<a href="" target="_blank">香港太平山顶</a>
		                    	<a href="" target="_blank">香港天际100观景台</a>
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>精选主题</dt>
	                    <dd>
		                    	<a href="" target="_blank">天天特价</a>
		                    	<a href="" target="_blank">赏花</a>
		                    	<a href="" target="_blank">主题乐园</a>
		                    	<a href="" target="_blank">动植物园</a>
		                    	<a href="" target="_blank">海滨岛屿</a>
	                    </dd>
	                </dl>
            </div>
            <!--热门模块--结束-->
        </div>
       
        <!--酒店板块-->
        <div class="lv_s_list" style="display:none">
        	<div class="lv_s_tit"><a href="" target="_blank">国际酒店<span> &gt;</span></a>国内酒店<small>(含港澳台)</small></div>
            <!--酒店搜索框-->
        	<!--出发地和搜索框-->
            <div class="lv_s_table clearfix">
                <div style="z-index: 2;" class="lv_s_td">
                    <div class="lv_s_t">目的地：</div>
                    <input data-id="13" style="color: rgb(187, 187, 187);" num="4" class="lv_s_input js_s_hotel js_searchDest w_108" value="城市/地区/区域" autocomplete="off" type="text">
                    <!--热门搜索-->
                    <div class="search_hotel_mdd" style="display: none; top: 69px;">
                        <p>支持中文/拼音/简拼输入</p>
                        <ul class="mdd_tab">
                            <li class="active">热门<i class="hotel_icon"></i></li>
                            <li>ABCD<i class="hotel_icon"></i></li>
                            <li>EFGH<i class="hotel_icon"></i></li>
                            <li>JKLM<i class="hotel_icon"></i></li>
                            <li>NOPQRS<i class="hotel_icon"></i></li>
                            <li>TUVWX<i class="hotel_icon"></i></li>
                            <li>YZ<i class="hotel_icon"></i></li>
                        </ul>
                        <ul class="mdd_list js_hotel_city">
                        
                        <li style="display: block;"> <!--热门--> <a class="w" data-id="9" hidefocus="false">上海</a> <a class="w" data-id="56" hidefocus="false">南京</a> <a class="w" data-id="57" hidefocus="false">无锡</a> <a class="w" data-id="59" hidefocus="false">常州</a> <a class="w" data-id="60" hidefocus="false">苏州</a> <a class="w" data-id="65" hidefocus="false">扬州</a> <a class="w" data-id="66" hidefocus="false">镇江</a> <a class="w" data-id="67" hidefocus="false">泰州</a> <a class="w" data-id="69" hidefocus="false">杭州</a> <a class="w" data-id="70" hidefocus="false">宁波</a> <a class="w" data-id="71" hidefocus="false">温州</a> <a class="w" data-id="72" hidefocus="false">嘉兴</a> <a class="w" data-id="73" hidefocus="false">湖州</a> <a class="w" data-id="74" hidefocus="false">绍兴</a> <a class="w" data-id="77" hidefocus="false">舟山</a> <a class="w" data-id="78" hidefocus="false">台州</a> <a class="w" data-id="79" hidefocus="false">丽水</a> <a class="w" data-id="81" hidefocus="false">芜湖</a> <a class="w" data-id="87" hidefocus="false">安庆</a> <a class="w" data-id="149" hidefocus="false">巢湖</a> <a class="w" data-id="152" hidefocus="false">池州</a> <a class="w" data-id="154" hidefocus="false">福州</a> <a class="w" data-id="155" hidefocus="false">厦门</a> <a class="w" data-id="160" hidefocus="false">南平</a> <a class="w" data-id="168" hidefocus="false">鹰潭</a> <a class="w" data-id="173" hidefocus="false">上饶</a> <a class="w" data-id="175" hidefocus="false">青岛</a> <a class="w" data-id="322" hidefocus="false">广州</a> <a class="w" data-id="324" hidefocus="false">深圳</a> <a class="w" data-id="328" hidefocus="false">江门</a> <a class="w" data-id="196" hidefocus="false">惠州</a> <a class="w" data-id="200" hidefocus="false">阳江</a> <a class="w" data-id="201" hidefocus="false">清远</a> <a class="w" data-id="1820" hidefocus="false">阳西</a> <a class="w" data-id="88" hidefocus="false">黄山</a> <a class="w" data-id="138" hidefocus="false">吉林</a></li><li> <!--ABCD--> <a class="w" data-id="276" hidefocus="false">阿坝藏族羌族自治州</a> <a class="w" data-id="87" hidefocus="false">安庆</a> <a class="w" data-id="41" hidefocus="false">澳门</a> <a class="w" data-id="216" hidefocus="false">百色</a> <a class="w" data-id="82" hidefocus="false">蚌埠</a> <a class="w" data-id="94" hidefocus="false">保定</a> <a class="w" data-id="236" hidefocus="false">保山</a> <a class="w" data-id="211" hidefocus="false">北海</a> <a class="w" data-id="13" hidefocus="false">北京</a> <a class="w" data-id="230" hidefocus="false">毕节地区</a> <a class="w" data-id="189" hidefocus="false">滨州</a> <a class="w" data-id="97" hidefocus="false">沧州</a> <a class="w" data-id="314" hidefocus="false">常德</a> <a class="w" data-id="59" hidefocus="false">常州</a> <a class="w" data-id="137" hidefocus="false">长春</a> <a class="w" data-id="308" hidefocus="false">长沙</a> <a class="w" data-id="149" hidefocus="false">巢湖</a> <a class="w" data-id="258" hidefocus="false">成都</a> <a class="w" data-id="96" hidefocus="false">承德</a> <a class="w" data-id="152" hidefocus="false">池州</a> <a class="w" data-id="114" hidefocus="false">赤峰</a> <a class="w" data-id="146" hidefocus="false">滁州</a> <a class="w" data-id="245" hidefocus="false">大理白族自治州</a> <a class="w" data-id="124" hidefocus="false">大连</a> <a class="w" data-id="48" hidefocus="false">大庆</a> <a class="w" data-id="187" hidefocus="false">德州</a> <a class="w" data-id="178" hidefocus="false">东营</a> <a class="w" data-id="202" hidefocus="false">东莞</a></li><li> <!--EFGH--> <a class="w" data-id="303" hidefocus="false">恩施土家族苗族自治州</a> <a class="w" data-id="327" hidefocus="false">佛山</a> <a class="w" data-id="154" hidefocus="false">福州</a> <a class="w" data-id="172" hidefocus="false">抚州</a> <a class="w" data-id="169" hidefocus="false">赣州</a> <a class="w" data-id="322" hidefocus="false">广州</a> <a class="w" data-id="224" hidefocus="false">贵阳</a> <a class="w" data-id="209" hidefocus="false">桂林</a> <a class="w" data-id="43" hidefocus="false">哈尔滨</a> <a class="w" data-id="221" hidefocus="false">海口</a> <a class="w" data-id="92" hidefocus="false">邯郸</a> <a class="w" data-id="336" hidefocus="false">汉中</a> <a class="w" data-id="69" hidefocus="false">杭州</a> <a class="w" data-id="80" hidefocus="false">合肥</a> <a class="w" data-id="218" hidefocus="false">河池</a> <a class="w" data-id="199" hidefocus="false">河源</a> <a class="w" data-id="190" hidefocus="false">菏泽</a> <a class="w" data-id="311" hidefocus="false">衡阳</a> <a class="w" data-id="111" hidefocus="false">呼和浩特</a> <a class="w" data-id="117" hidefocus="false">呼伦贝尔</a> <a class="w" data-id="73" hidefocus="false">湖州</a> <a class="w" data-id="136" hidefocus="false">葫芦岛</a> <a class="w" data-id="63" hidefocus="false">淮安</a> <a class="w" data-id="300" hidefocus="false">黄冈</a> <a class="w" data-id="88" hidefocus="false">黄山</a> <a class="w" data-id="292" hidefocus="false">黄石</a> <a class="w" data-id="196" hidefocus="false">惠州</a></li><li> <!--JKLM--> <a class="w" data-id="170" hidefocus="false">吉安</a> <a class="w" data-id="138" hidefocus="false">吉林</a> <a class="w" data-id="174" hidefocus="false">济南</a> <a class="w" data-id="181" hidefocus="false">济宁</a> <a class="w" data-id="72" hidefocus="false">嘉兴</a> <a class="w" data-id="328" hidefocus="false">江门</a> <a class="w" data-id="75" hidefocus="false">金华</a> <a class="w" data-id="106" hidefocus="false">晋中</a> <a class="w" data-id="297" hidefocus="false">荆门</a> <a class="w" data-id="299" hidefocus="false">荆州</a> <a class="w" data-id="166" hidefocus="false">九江</a> <a class="w" data-id="192" hidefocus="false">开封</a> <a class="w" data-id="233" hidefocus="false">昆明</a> <a class="w" data-id="249" hidefocus="false">拉萨</a> <a class="w" data-id="340" hidefocus="false">兰州</a> <a class="w" data-id="98" hidefocus="false">廊坊</a> <a class="w" data-id="267" hidefocus="false">乐山</a> <a class="w" data-id="238" hidefocus="false">丽江</a> <a class="w" data-id="79" hidefocus="false">丽水</a> <a class="w" data-id="62" hidefocus="false">连云港</a> <a class="w" data-id="109" hidefocus="false">临汾</a> <a class="w" data-id="186" hidefocus="false">临沂</a> <a class="w" data-id="208" hidefocus="false">柳州</a> <a class="w" data-id="351" hidefocus="false">陇南</a> <a class="w" data-id="193" hidefocus="false">洛阳</a> <a class="w" data-id="263" hidefocus="false">绵阳</a> <a class="w" data-id="52" hidefocus="false">牡丹江</a></li><li> <!--NOPQRS--> <a class="w" data-id="163" hidefocus="false">南昌</a> <a class="w" data-id="268" hidefocus="false">南充</a> <a class="w" data-id="56" hidefocus="false">南京</a> <a class="w" data-id="207" hidefocus="false">南宁</a> <a class="w" data-id="160" hidefocus="false">南平</a> <a class="w" data-id="61" hidefocus="false">南通</a> <a class="w" data-id="285" hidefocus="false">南阳</a> <a class="w" data-id="70" hidefocus="false">宁波</a> <a class="w" data-id="162" hidefocus="false">宁德</a> <a class="w" data-id="44" hidefocus="false">齐齐哈尔</a> <a class="w" data-id="231" hidefocus="false">黔东南苗族侗族自治州</a> <a class="w" data-id="91" hidefocus="false">秦皇岛</a> <a class="w" data-id="175" hidefocus="false">青岛</a> <a class="w" data-id="201" hidefocus="false">清远</a> <a class="w" data-id="76" hidefocus="false">衢州</a> <a class="w" data-id="184" hidefocus="false">日照</a> <a class="w" data-id="157" hidefocus="false">三明</a> <a class="w" data-id="257" hidefocus="false">三亚</a> <a class="w" data-id="9" hidefocus="false">上海</a> <a class="w" data-id="173" hidefocus="false">上饶</a> <a class="w" data-id="323" hidefocus="false">韶关</a> <a class="w" data-id="74" hidefocus="false">绍兴</a> <a class="w" data-id="324" hidefocus="false">深圳</a> <a class="w" data-id="123" hidefocus="false">沈阳</a> <a class="w" data-id="89" hidefocus="false">石家庄</a> <a class="w" data-id="60" hidefocus="false">苏州</a> <a class="w" data-id="54" hidefocus="false">绥化</a></li><li> <!--TUVWX--> <a class="w" data-id="78" hidefocus="false">台州</a> <a class="w" data-id="100" hidefocus="false">太原</a> <a class="w" data-id="182" hidefocus="false">泰安</a> <a class="w" data-id="67" hidefocus="false">泰州</a> <a class="w" data-id="90" hidefocus="false">唐山</a> <a class="w" data-id="42" hidefocus="false">台湾</a> <a class="w" data-id="228" hidefocus="false">铜仁地区</a> <a class="w" data-id="183" hidefocus="false">威海</a> <a class="w" data-id="180" hidefocus="false">潍坊</a> <a class="w" data-id="334" hidefocus="false">渭南</a> <a class="w" data-id="71" hidefocus="false">温州</a> <a class="w" data-id="119" hidefocus="false">乌兰察布</a> <a class="w" data-id="367" hidefocus="false">乌鲁木齐</a> <a class="w" data-id="57" hidefocus="false">无锡</a> <a class="w" data-id="81" hidefocus="false">芜湖</a> <a class="w" data-id="291" hidefocus="false">武汉</a> <a class="w" data-id="256" hidefocus="false">西安</a> <a class="w" data-id="354" hidefocus="false">西宁</a> <a class="w" data-id="244" hidefocus="false">西双版纳傣族自治州</a> <a class="w" data-id="121" hidefocus="false">锡林郭勒盟</a> <a class="w" data-id="155" hidefocus="false">厦门</a> <a class="w" data-id="301" hidefocus="false">咸宁</a> <a class="w" data-id="321" hidefocus="false">湘西土家族苗族自治州</a> <a class="w" data-id="295" hidefocus="false">襄樊</a> <a class="w" data-id="298" hidefocus="false">孝感</a> <a class="w" data-id="279" hidefocus="false">新乡</a> <a class="w" data-id="93" hidefocus="false">邢台</a> <a class="w" data-id="58" hidefocus="false">徐州</a> <a class="w" data-id="40" hidefocus="false">香港</a></li><li> <!--YZ--> <a class="w" data-id="273" hidefocus="false">雅安</a> <a class="w" data-id="179" hidefocus="false">烟台</a> <a class="w" data-id="335" hidefocus="false">延安</a> <a class="w" data-id="145" hidefocus="false">延边朝鲜族自治州</a> <a class="w" data-id="64" hidefocus="false">盐城</a> <a class="w" data-id="65" hidefocus="false">扬州</a> <a class="w" data-id="200" hidefocus="false">阳江</a> <a class="w" data-id="1820" hidefocus="false">阳西</a> <a class="w" data-id="294" hidefocus="false">宜昌</a> <a class="w" data-id="171" hidefocus="false">宜春</a> <a class="w" data-id="362" hidefocus="false">银川</a> <a class="w" data-id="130" hidefocus="false">营口</a> <a class="w" data-id="337" hidefocus="false">榆林</a> <a class="w" data-id="313" hidefocus="false">岳阳</a> <a class="w" data-id="107" hidefocus="false">运城</a> <a class="w" data-id="329" hidefocus="false">湛江</a> <a class="w" data-id="315" hidefocus="false">张家界</a> <a class="w" data-id="95" hidefocus="false">张家口</a> <a class="w" data-id="159" hidefocus="false">漳州</a> <a class="w" data-id="195" hidefocus="false">肇庆</a> <a class="w" data-id="66" hidefocus="false">镇江</a> <a class="w" data-id="191" hidefocus="false">郑州</a> <a class="w" data-id="203" hidefocus="false">中山</a> <a class="w" data-id="77" hidefocus="false">舟山</a> <a class="w" data-id="325" hidefocus="false">珠海</a> <a class="w" data-id="176" hidefocus="false">淄博</a> <a class="w" data-id="226" hidefocus="false">遵义</a></li></ul>
                        <span class="hotel_icon mdd_close"></span>
                    </div>
                    <div class="search_hotel_keyword" style="display: none; top: 69px; left: 160px;"></div>
                    <div style="display: none;" class="lv_search_tips">
                        <p>请输入酒店所在目的地</p>
                        <div class="lv_tips_arrow"><span>◆</span><i>◆</i></div>
                    </div>
                </div>
                <div class="lv_s_td ml10">
                    <div class="lv_s_t">关键字<span class="c_999">（选填）</span>：</div>
                    <input style="color: rgb(187, 187, 187);" num="5" class="lv_s_input js_s_hotel js_searchKeyword w_298" data-required="false" value="酒店名/商圈/地标" autocomplete="off" type="text">
                </div>
                <div class="lv_s_td">
                    <div class="lv_s_t">入住日期：</div>
                    <input class="lv_s_time w_203 J_calendar" onClick="WdatePicker({skin:'whyGreen'})" readonly="readonly"  data-check="checkIn" name="beginBookTime" value="" autocomplete="off" type="text">
                    <div class="lv_s_time_info">
                        <i class="lv_s_time_icon"></i>
                        <span>明天</span>
                    </div>
                    <div class="lv_s_time_tips">如您需入住20天以上，请致电客服热线 <b>1010-6060</b>。</div>
                </div>
                <div class="lv_s_td ml10">
                    <div class="lv_s_t">退房日期：</div>
                    <input class="lv_s_time w_203 J_calendar" onClick="WdatePicker({skin:'whyGreen'})" data-check="checkIn" name="endBookTime" readonly="readonly" value="" autocomplete="off" type="text">
                    <div class="lv_s_time_info">
                        <i class="lv_s_time_icon"></i>
                        <span>后天</span>
                    </div>
                </div>
            </div><!--出发地和搜索框--结束-->
            
            
            <!--搜索按钮--开始-->
            <div class="lv_s_search">
            	<span class="lv_s_search_btn">搜索</span>
            </div><!--搜索按钮--结束-->
            
            <!--热门模块--酒店+景点--开始-->
            <div class="lv_s_hot" style="display: block;">
	            	<dl>
	                	<dt>热门城市</dt>
	                    <dd>
		                    	<a href="" target="_blank">上海</a>
		                    	<a href="" target="_blank">广州</a>
		                    	<a href="" target="_blank">北京</a>
		                    	<a href="" target="_blank">成都</a>
		                    	<a href="" target="_blank">南京</a>
		                    	<a href="" target="_blank">杭州</a>
		                    	<a href="" target="_blank">无锡</a>
		                    	<a href="" target="_blank">湖州</a>
		                    	<a href="" target="_blank">厦门</a>
		                    	<a href="" target="_blank">青岛</a>
		                    	<a href="" target="_blank">绍兴</a>
		                    	<a href="" target="_blank">宁波</a>
		                    	<a href="" target="_blank">澳门</a>
		                    	<a href="" target="_blank">香港</a>
		                    	<a href="" target="_blank">西安</a>
		                    	<a href="" target="_blank">三亚</a>
	                    </dd>
	                </dl>
            </div>
            <!--热门模块--结束-->
        </div>
       
        <!-- 机票板块 -->
        <div class="lv_s_list" style="display:none">
        	<div class="lv_s_tit">国内机票</div>
        	<div class="ft-type clearfix">
                <!-- 隐藏域 存储机票类型 往返:RT, 单程:OW 可在下面data-type进行配置-->
                <input name="routeType" id="routeType" class="input-flight-type" value="OW" type="hidden">
                <a id="owButton" class="active" class="w" data-type="OW"><i></i>单程</a>
                <a id="rtButton" class="w" data-type="RT"><i></i>往返</a>
            </div>

            <div class="ft-input-cities">
                <div class="ft-input-group">
                	<input name="departureAirportCode" id="departureAirportCode" autocomplete="off" value="PEK" type="hidden">
                    <input class="input-city JS_select_depa" id="deptCity" value="" placeholder="请输入出发地" type="text">
                    <em class="input-info">从：</em>
                </div>
                <div class="ft-input-group">
                    <input class="input-city JS_select_dest" id="arrvCity" autocomplete="off" value="" placeholder="请输入目的地" type="text">
                    <input name="arrivalAirportCode" id="arrivalAirportCode" value="" type="hidden">
                    <em class="input-info">到：</em>
                </div>
                <a class="w"></a>
                <div class="same-city-error"><i class="warning"></i>出发城市和到达城市不能相同<p><span>◆</span><i>◆</i></p></div>
                <div class="invalid-city-error"><i class="warning"></i>没有找到该城市<p><span>◆</span><i>◆</i></p></div>
            </div>
            <div class="ft-input-days">
                <div class="ft-input-group">
                    <input name="goDate" id="goDate" class="input-calendar JS_calendar_depa" onClick="WdatePicker({skin:'whyGreen'})"  value="" type="text">
                    <em class="input-info">出发：</em>
                    <div class="ft-calendar-info">
                        
                   
                    </div>
                </div>
                <div class="ft-input-group ft-return-day-group ft-input-group-disable">
                    <input name="backDate" id="backDate" class="input-calendar JS_calendar_back" readonly="readonly" value="YYYY-MM-DD" type="text">
                    <em class="input-info">返回：</em>
                    <div class="ft-calendar-info">
                        <span class="dayAfter3"></span>
                        <i></i>
                    </div>
                </div>
            </div>

            <div class="lv_s_search">
            	<span class="ft-search-btn">搜索</span>
            </div>          

            <div style="display: block;" class="lv_s_hot lv_flightHot">
		        	<dl>
		            	<dt>热门城市</dt>
		                <dd>
		                    	<a href="" target="_blank">上海</a>
		                    	<a href="" target="_blank">成都</a>
		                    	<a href="" target="_blank">三亚</a>
		                    	<a href="" target="_blank">厦门</a>
		                    	<a href="" target="_blank">西安</a>
		                    	<a href="" target="_blank">昆明</a>
		                </dd>
		            </dl>
		        	<dl>
		            	<dt>热门航线</dt>
		                <dd>
		                    	<a href="" target="_blank">北京-上海</a>
		                    	<a href="" target="_blank">北京-成都</a>
		                    	<a href="" target="_blank">北京-三亚</a>
		                    	<a href="" target="_blank">北京-厦门</a>
		                </dd>
		            </dl>
            </div>
        </div>
        
        <!--邮轮板块-->
        <div class="lv_s_list"  style="display:none">
        	<ul class="lv_s_ipt mt5">
                    <li style="display: block;"><input style="color: rgb(187, 187, 187);" num="6" class="lv_s_input js_s_input w_438" value="" placeholder="请输入邮轮公司、邮轮航线或出发港口" autocomplete="off" type="text"></li>
            </ul>
            <!--搜索按钮--开始-->
            <div class="lv_s_search">
            	<span class="lv_s_search_btn">搜索</span>
            </div><!--搜索按钮--结束-->
            
            <!--热门模块--开始-->
            <div class="lv_s_hot" style="display: block;">
	            	<dl>
	                	<dt>热门航线</dt>
	                    <dd>
		                    	<a href="" target="_blank">日韩航线</a>
		                    	<a href="" target="_blank">日本航线</a>
		                    	<a href="" target="_blank">加勒比海航线</a>
		                    	<a href="" target="_blank">东南亚航线</a>
		                    	<a href="" target="_blank">地中海航线</a>
		                    	<a href="" target="_blank">澳新航线</a>
		                    	<a href="" target="_blank">中东航线</a>
		                    	<a href="" target="_blank">阿拉斯加航线</a>
		                    	<a href=""  target="_blank">环球航线</a>
		                    	<a href=""  target="_blank">极地航线</a>
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>邮轮公司</dt>
	                    <dd>
		                    	<a href=""  target="_blank">天海邮轮</a>
		                    	<a href=""  target="_blank">歌诗达邮轮</a>
		                    	<a href=""  target="_blank">皇家加勒比邮轮</a>
		                    	<a href=""  target="_blank">美国公主邮轮</a>
		                    	<a href=""  target="_blank">NCL邮轮</a>
		                    	<a href=""  target="_blank">丽星邮轮</a>
		                    	<a href=""  target="_blank">MSC地中海邮轮</a>
		                    	<a href="" target="_blank">渤海邮轮</a>
		                    	<a href="" target="_blank">庞洛邮轮</a>
		                    	<a href="" target="_blank">PAV邮轮</a>
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>出发港口</dt>
	                    <dd>
		                    	<a href="" target="_blank">上海</a>
		                    	<a href="" target="_blank">天津</a>
		                    	<a href="" target="_blank">香港</a>
		                    	<a href="" target="_blank">海口</a>
		                    	<a href="" target="_blank">厦门</a>
		                    	<a href="" target="_blank">广州</a>
		                    	<a href="" target="_blank">青岛</a>
		                    	<a href="" target="_blank">新加坡</a>
		                    	<a href="" target="_blank">罗德岱堡</a>
		                    	<a href="" target="_blank">迈阿密</a>
		                    	<a href="" target="_blank">大连</a>
	                    </dd>
	                </dl>
            </div>
            <!--热门模块--结束-->
        </div>
        
        <!--签证板块-->
        <div class="lv_s_list" style="display:none">
        	<ul class="lv_s_ipt mt5">
            	<li style="display: block;"><input style="color: rgb(187, 187, 187);" num="7" class="lv_s_input js_s_input w_438" value="请输入你需要签证的国家、地区" autocomplete="off" type="text"></li>
            </ul>
            <!--搜索按钮--开始-->
            <div class="lv_s_search">
            	<span class="lv_s_search_btn">搜索</span>
            </div><!--搜索按钮--结束-->
            
            <!--热门模块--开始-->
            <div class="lv_s_hot" style="display: block;">
	            	<dl>
	                	<dt>亚洲热门</dt>
	                    <dd>
		                    	<a href="" target="_blank">日本</a>
		                    	<a href="" target="_blank">韩国</a>
		                    	<a href="" target="_blank">泰国</a>
		                    	<a href="" target="_blank">新加坡</a>
		                    	<a href="" target="_blank">菲律宾</a>
		                    	<a href="" target="_blank">马来西亚</a>
		                    	<a href="" target="_blank">中国台湾</a>
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>欧洲热门</dt>
	                    <dd>
		                    	<a href="" target="_blank">法国</a>
		                    	<a href="" target="_blank">意大利</a>
		                    	<a href="" target="_blank">英国</a>
		                    	<a href="" target="_blank">希腊</a>
		                    	<a href="" target="_blank">德国</a>
		                    	<a href="" target="_blank"> 瑞士</a>
		                    	<a href="" target="_blank">荷兰</a>
		                    	<a href="" target="_blank">西班牙</a>
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>美洲热门</dt>
	                    <dd>
		                    	<a href="" target="_blank">美国</a>
		                    	<a href="" target="_blank">加拿大</a>
	                    </dd>
	                </dl>
	            	<dl>
	                	<dt>大洋洲热门</dt>
	                    <dd>
		                    	<a href="" target="_blank">澳大利亚</a>
		                    	<a href="" target="_blank">新西兰</a>
	                    </dd>
	                </dl>
            </div>
            <!--热门模块--结束-->
        </div>
    </div>
</div>

	<div class="lv-ban-wrap-all">
		<div class="lv-ban-wrap">
			<!--<ul class="lv-ban-imgs" id="js_allyes_1">-->
			<!--<li class=""><a href="" target="_blank"><img src="/home/img/sy01-hynt-qg.jpg" to_trd="null" height="400" width="1920"></a></li>-->
				

                         <A onmouseover="displayStatusMsg();return document.returnValue" href="javascript:jump2url()"><IMG style="FILTER: revealTrans(duration=2,transition=20)" height=400 src="photo/search_banner.gif" width=1920 border=1 name=bannerADrotator> </A> 
                        <SCRIPT>nextAd()</SCRIPT>
			<!--</ul>-->
		
			<!-- ban交互状态按钮 -->
			<ul class="lv-ban-tab"><li class=""></li><li class=""></li><li class=""></li><li class=""></li><li class=""></li><li class="active"></li><li class=""></li><li class=""></li></ul>
		</div><!-- //lv_banpic -->
	</div>
       
</div><!-- //lv_ban -->
<!--精品推荐-->
<div class="wrap">

<!-- 特惠版块 开始 -->
	<div class="public-box clearfix count-first tehui-box" data-count-first="暑期大促">
		 <div class="public-tit">
            <h3 class="fl"><strong>暑期大促</strong></h3>
            <ul class="tehui-sub">
            	            		<li onclick="onClickTag('首页_特卖版块横向0切换','特卖版块横向0切换');" class="active">每日特惠<span class="tehui-arrow"></span></li>
            		<li onclick="onClickTag('首页_特卖版块横向1切换','特卖版块横向1切换');">境内特价<span class="tehui-arrow"></span></li>
            		<li onclick="onClickTag('首页_特卖版块横向2切换','特卖版块横向2切换');">境外特价<span class="tehui-arrow"></span></li>
            </ul>
            <a class="public-tit-more fr" href="" target="_blank">更多特卖<i class="icon-v7 icon-v7-more"></i></a>
        </div>
        <div class="tehuiBox clearfix">
            <div class="tehui-left fl"b>
                <ul class="tehuiLink">
	    			<li><a href="" target="_blank" title="全程无购物 放浪大西北">全程无购物 放浪大西北</a></li>
	    			<li><a href="" target="_blank" title="限时特卖 每日开抢">限时特卖 每日开抢</a></li>
	    			<li><a href="" target="_blank" title="百元周边游 0元住酒店">百元周边游 0元住酒店</a></li>
                </ul>
            </div>
	<!-- //tehuiBox-left -->
            <div class="tehuiPro fr">
                
                <ul class="css3_liy-5 css3_run clearfix" style="display: block">
                    @foreach($place_data as $tmp)
                    <li>
                        	<a class="tehuiPro-img" title="{{$tmp->title}}★★★★【暑期特卖】" href="/xiadanqian?id={{$tmp->id}}" target="_blank"><img alt="{{$tmp->title}}★★★★【暑期特卖】" src="{{$tmp->photo_path}}" height="143" width="215">
                        	<span class="pro-tip"><dfn>{{$tmp->zkou}}</dfn>折</span>
                        	</a>
                        	<a class="tehuiPro-tit" title="{{$tmp->title}}★★★★【暑期特卖】" href="/xiadanqian?id={{$tmp->id}}" target="_blank">{{$tmp->title}}★★★★【暑期特卖】</a>
                        <p class="tehuiPro-info">
                            
                            <span class="tehuiPro-info-price"><dfn><i>¥</i>{{$tmp->price}}</dfn>原价 
	                            <del><i>¥</i>{{$tmp->old_price}}</del>
                            </span>
                        </p>
                    </li>
                   @endforeach  
                </ul>
            </div><!-- //tehuiBox-pro -->
        </div><!-- //tehuiBox -->	</div>
<!-- 特惠版块 结束 -->



<!-- 国内游开始 -->
	<div class="public-box clearfix count-first" data-count-first="国内游">
	<div class="public-tit">
    	    <h3 class="fl"><strong>国内游</strong><span>行走山水间,足迹遍中国</span></h3>
    	    <ul class="JS_public public-sub">
    	    	    	    			<li onclick="onClickTag('首页_国内版块横向0切换','国内版块横向0切换');" class="active" paramdatasearchname="热卖" paramdatacode="gny_HotPlace_remai" paramid="tab1" parenttype="picgny"> 热卖<em class="icon-v7 icon-v7-sub"></em></li>
    	    			<li onclick="onClickTag('首页_国内版块横向1切换','国内版块横向1切换');" paramdatasearchname="手机专享" paramdatacode="gny_HotPlace_wxzx" paramid="tab2" parenttype="picgny"><i class="icon-v7 icon-v7-mobile"></i> 手机专享<em class="icon-v7 icon-v7-sub"></em></li>
			</ul>
    	    <a class="public-tit-more fr" href="http://www.lvmama.com/destroute" target="_blank">更多国内游<i class="icon-v7 icon-v7-more"></i></a>
    	</div>
		<div class="guonei-box clearfix">
			<!-- 公共左边导航模块开始 -->
			<div class="public-asidebg fl count-first" data-count-first="左侧导航">
				<div class="public-asidenav">
					<dl>
						<dt>
							<h3>热门目的地</h3>
						</dt>
							<dd><a href="" title="三亚" target="_blank">三亚</a>
							<a class="r" href="" title="云南" target="_blank">云南</a></dd>
							<dd><a href="" title="内蒙古" target="_blank">内蒙古</a>
							<a class="r" href="" title="西藏" target="_blank">西藏</a></dd>
							<dd><a href="" title="桂林" target="_blank">桂林</a>
							<a class="r" href="" title="九寨沟" target="_blank">九寨沟</a></dd>
							<dd><a href="" title="北京" target="_blank">北京</a>
							<a class="r" href="" title="厦门" target="_blank">厦门</a></dd>
							<dd><a href="" title="张家界" target="_blank">张家界</a>
							<a class="r" href="" title="黄山" target="_blank">黄山</a></dd>
							<dd><a href="" title="山西" target="_blank">山西</a>
							<a class="r" href="" title="乌镇" target="_blank">乌镇</a></dd>
							<dd><a href="" title="杭州" target="_blank">杭州</a>
							<a class="r" href="" title="天津" target="_blank">天津</a></dd>
						<dt>
							<h3>热门主题</h3>
						</dt>
							<dd><a href="" title="草原专列" target="_blank">草原专列</a>
							<a class="r" href="" title="开心驴行" target="_blank">开心驴行</a></dd>
							<dd><a href="" title="暑期大促" target="_blank">暑期大促</a>
							<a class="r" href="" title="三亚清仓" target="_blank">三亚清仓</a></dd>
							<dd><a href="" title="送红酒" target="_blank">送红酒</a>
							<a class="r" href="" title="送咕咚洗衣机" target="_blank">送咕咚洗衣机</a></dd>
					</dl>
				</div>
			</div>
			<!-- 公共左边导航模块结束 -->

			<!-- 侧边产品list -->
			<div class="public-pro clearfix fl count-first" data-count-first="右侧图片列表">
				<div class="pro-list fl">
					<ul class="css3_liy-5 css3_run">
                                            
                                           
								<li class="w485_243">
									<p class="pro-list-pic"><a href="/xiadanqian?id={{$place_gn['0']->id}}" title="{{$place_gn['0']->title}}" target="_blank"><img src="{{$place_gn['0']->photo_path}}" alt="{{$place_gn['0']->title}}" height="243" width="485"></a></p>

									<p class="pro-list-tit"><span class="pro-list-price fr"><i>￥</i><em>2700</em>起</span><span class="pro-tag">跟团游<em>|</em>
									</span><a href="" title="{{$place_gn['0']->title}}" target="_blank">{{$place_gn['0']->title}}</a></p>
								</li>
								<li class="w235_243">
									<p class="pro-list-pic"><a href="/xiadanqian?id={{$place_gn['1']->id}}" title="{{$place_gn['1']->title}}" target="_blank"><img src="{{$place_gn['1']->photo_path}}" alt="{{$place_gn['1']->title}}" height="243" width="235"></a></p>

									<p class="pro-list-tit"><span class="pro-list-price fr"><i>￥</i><em>1849</em>起</span><span class="pro-tag">跟团游<em>|</em>
									</span><a href="" title="{{$place_gn['1']->title}}" target="_blank">{{$place_gn['1']->title}}</a></p>
								</li>
								<li>
									<p class="pro-list-pic"><a href="/xiadanqian?id={{$place_gn['2']->id}}" title="{{$place_gn['2']->title}}" target="_blank"><img src="{{$place_gn['2']->photo_path}}" alt="{{$place_gn['2']->title}}" height="157" width="235"></a></p>

									<p class="pro-list-tit"><span class="pro-list-price fr"><i>￥</i><em>2080</em>起</span><span class="pro-tag">跟团游<em>|</em>
									</span><a href="" title="{{$place_gn['2']->title}}" target="_blank">{{$place_gn['2']->title}}</a></p>
								</li>
								<li>
									<p class="pro-list-pic"><a href="/xiadanqian?id={{$place_gn['3']->id}}" title="{{$place_gn['3']->title}}" target="_blank"><img src="{{$place_gn['3']->photo_path}}" alt="{{$place_gn['3']->title}}" height="157" width="235"></a></p>

									<p class="pro-list-tit"><span class="pro-list-price fr"><i>￥</i><em>1935</em>起</span><span class="pro-tag">自由行<em>|</em>
									</span><a href="" title="{{$place_gn['3']->title}}" target="_blank">{{$place_gn['3']->title}}</a></p>
								</li>
								<li>
									<p class="pro-list-pic"><a href="/xiadanqian?id={{$place_gn['4']->id}}" title="{{$place_gn['4']->title}}" target="_blank"><img src="{{$place_gn['4']->photo_path}}" alt="{{$place_gn['4']->title}}" height="157" width="235"></a></p>

									<p class="pro-list-tit"><span class="pro-list-price fr"><i>￥</i><em>1900</em>起</span><span class="pro-tag">跟团游<em>|</em>
									</span><a href="" title="{{$place_gn['4']->title}}" target="_blank">{{$place_gn['4']->title}}</a></p>
								</li>
                                                                
					</ul>
				</div>
				
				<!-- 特卖会 -->
				<div class="public-tuango fr">
					<a href="" title="{{$place_gn['5']->title}}" target="_blank">
						<img src="{{$place_gn['5']->photo_path}}" alt="{{$place_gn['5']->title}}" height="435" width="195">
						<div class="tuango-info skyblue">
							<strong>特卖</strong>
							<p>{{$place_gn['5']->title}}</p>
							<p class="tuango-price"><i>￥</i><em>1935</em>起</p>
						</div>						
					</a>
				</div>

			</div>

		</div>	</div>
<!-- 国内游结束 -->

<!-- 周边游开始 -->
	<div class="public-box clearfix count-first" data-count-first="周边游">
<div class="public-tit">
    	    <h3 class="fl"><strong>周边游</strong><span>拎包就走,轻松出游</span></h3>
    	    <ul class="JS_public public-sub">
    	          	    	<li onclick="onClickTag('首页_周边版块横向0切换','周边版块横向0切换');" class="active" paramdatasearchname="自由行" paramdatacode="Week_HotPlace_zyx" paramid="tab1" parenttype="picWeek">
    	    				自由行<em class="icon-v7 icon-v7-sub"></em>
    	    	</li>
    	    	<li onclick="onClickTag('首页_周边版块横向1切换','周边版块横向1切换');" paramdatasearchname="跟团游" paramdatacode="Week_HotPlace_gty" paramid="tab2" parenttype="picWeek">
    	    				跟团游<em class="icon-v7 icon-v7-sub"></em>
    	    	</li>
    	    	<li onclick="onClickTag('首页_周边版块横向2切换','周边版块横向2切换');" paramdatasearchname="手机专享" paramdatacode="Week_HotPlace_wxzx" paramid="tab3" parenttype="picWeek">
    	    				<i class="icon-v7 icon-v7-mobile"></i>手机专享<em class="icon-v7 icon-v7-sub"></em>
    	    	</li>
			</ul>
    	    <a class="public-tit-more fr" href="http://www.lvmama.com/freetour" target="_blank">更多周边游<i class="icon-v7 icon-v7-more"></i></a>
    	</div>
		<div class="weekend-box clearfix">
			<!-- 公共左边导航模块开始 -->
			<div class="public-asidebg fl count-first" data-count-first="左侧导航">
				<div class="public-asidenav">
					<dl>
						<dt>
							<h3>热门目的地</h3>
						</dt>
								<dd><a href="http://s.lvmama.com/scenictour/H13K110000?keyword=%E5%8C%97%E4%BA%AC#list" title="北京" target="_blank">北京</a>
						 		<a class="r" href="http://www.lvmama.com/zt/i/gubei" title="古北水镇" target="_blank">古北水镇</a></dd>
								<dd><a href="http://s.lvmama.com/all/H13K110000?keyword=%E9%9D%92%E5%B2%9B#list" title="青岛" target="_blank">青岛</a>
						 		<a class="r" href="http://dujia.lvmama.com/tour/qinhuangdao6/scenictour" title="北戴河" target="_blank">北戴河</a></dd>
								<dd><a href="http://dujia.lvmama.com/tour/tianjin2" title="天津" target="_blank">天津</a>
						 		<a class="r" href="http://s.lvmama.com/scenictour/H13K110000?keyword=%E5%86%85%E8%92%99%E5%8F%A4&amp;k=0#list" title="内蒙古" target="_blank">内蒙古</a></dd>
								<dd><a href="http://s.lvmama.com/scenictour/H13K110000?keyword=%E5%A4%A7%E8%BF%9E&amp;k=0#list" title="大连" target="_blank">大连</a>
						 		<a class="r" href="http://dujia.lvmama.com/tour/changbaishan3577/scenictour" title="长白山" target="_blank">长白山</a></dd>
								<dd><a href="http://dujia.lvmama.com/tour/taian200181/scenictour" title="泰安" target="_blank">泰安</a>
						 		<a class="r" href="http://dujia.lvmama.com/tour/shanxi15/scenictour" title="山西" target="_blank">山西</a></dd>
						<dt>
							<h3>当季热门</h3>
						</dt>
						 		<dd><a href="http://dujia.lvmama.com/tour/qingdao161/scenictour" title="海滨岛屿" target="_blank">海滨岛屿</a>
								
						 		<a class="r" href="http://dujia.lvmama.com/tour/s-53174eac4e3b98984e5056ed/scenictour" title="主题乐园" target="_blank">主题乐园</a></dd>
								
						 		<dd><a href="http://www.lvmama.com/zt/promo/mddchunyou/bj/" title="初夏郊游" target="_blank">初夏郊游</a>
								
						 		<a class="r" href="http://www.lvmama.com/zt/i/gubei" title="古镇村落" target="_blank">古镇村落</a></dd>
								
						 		<dd><a href="http://dujia.lvmama.com/tour/neimenggu27/scenictour" title="草原沙漠" target="_blank">草原沙漠</a>
								
						 		<a class="r" href="http://dujia.lvmama.com/tour/s-53174eac4eb25b50/scenictour" title="家庭出游" target="_blank">家庭出游</a></dd>
								
						 		<dd><a href="http://dujia.lvmama.com/tour/s-53174eac6e296cc9/scenictour" title="爽泡温泉" target="_blank">爽泡温泉</a>
								
						 		<a class="r" href="http://s.lvmama.com/scenictour/J63K110000?keyword=%E5%8C%97%E4%BA%AC#list" title="古迹遗址" target="_blank">古迹遗址</a></dd>
								
					</dl>
				</div>
			</div>
			<!-- 公共左边导航模块结束 -->

			<!-- 侧边产品list -->
			<div class="public-pro clearfix fl count-first" data-count-first="右侧图片列表">
				<div class="pro-list fl">
					<ul class="css3_liy-5 css3_run">
							 			<li class="w485_243">
											<p class="pro-list-pic"><a href="/xiadanqian?id={{$place_zb['0']->id}}" title="{{$place_zb['0']->title}}" target="_blank"><img src="{{$place_zb['0']->photo_path}}" alt="{{$place_zb['0']->title}}" height="243" width="485"></a></p>
											<p class="pro-list-tit"><span class="pro-list-price fr"><i>￥</i><em>558</em>起</span><a href="" title="{{$place_zb['0']->title}}" target="_blank">{{$place_zb['0']->title}}</a></p>
										</li>
									 	<li class="w235_243">
											<p class="pro-list-pic"><a href="/xiadanqian?id={{$place_zb['1']->id}}" title="{{$place_zb['1']->title}}" target="_blank"><img src="{{$place_zb['1']->photo_path}}" alt="{{$place_zb['1']->title}}" height="243" width="235"></a></p>
											<p class="pro-list-tit"><span class="pro-list-price fr"><i>￥</i><em>699</em>起</span><a href="" title="{{$place_zb['1']->title}}" target="_blank">{{$place_zb['1']->title}}</a></p>
										</li>
									 	<li>
											<p class="pro-list-pic"><a href="/xiadanqian?id={{$place_zb['2']->id}}" title="{{$place_zb['2']->title}}" target="_blank"><img src="{{$place_zb['2']->photo_path}}" alt="{{$place_zb['2']->title}}" height="157" width="235"></a></p>
											<p class="pro-list-tit"><span class="pro-list-price fr"><i>￥</i><em>680</em>起</span><a href="" title="{{$place_zb['2']->title}}" target="_blank">{{$place_zb['2']->title}}</a></p>
										</li>
									 	<li>
											<p class="pro-list-pic"><a href="/xiadanqian?id={{$place_zb['3']->id}}" title="{{$place_zb['3']->title}}" target="_blank"><img src="{{$place_zb['3']->photo_path}}" alt="{{$place_zb['3']->title}}" height="157" width="235"></a></p>
											<p class="pro-list-tit"><span class="pro-list-price fr"><i>￥</i><em>460</em>起</span><a href="" title="{{$place_zb['3']->title}}" target="_blank">{{$place_zb['3']->title}}</a></p>
										</li>
									 	<li>
											<p class="pro-list-pic"><a href="/xiadanqian?id={{$place_zb['4']->id}}" title="{{$place_zb['4']->title}}" target="_blank"><img src="{{$place_zb['4']->photo_path}}" alt="{{$place_zb['4']->title}}" height="157" width="235"></a></p>
											<p class="pro-list-tit"><span class="pro-list-price fr"><i>￥</i><em>998</em>起</span><a href="" title="{{$place_zb['4']->title}}" target="_blank">{{$place_zb['4']->title}}</a></p>
										</li>
					</ul>
				</div>
				
				<!-- 特卖会 -->
				<div class="public-tuango fr">
					<a href="/xiadanqian?id={{$place_zb['5']->id}}" title="{{$place_zb['5']->title}}" target="_blank">
						<img src="{{$place_zb['5']->photo_path}}" alt="{{$place_zb['5']->title}}" height="435" width="195">
						<div class="tuango-info green">
							<strong>特卖</strong>
							<p>{{$place_zb['5']->title}}</p>
							<p class="tuango-price"><i>￥</i><em>{{$place_zb['5']->price}}</em>起</p>
						</div>
					</a>
				</div>

			</div>

		</div>	</div>
<!-- 周末游结束 -->


<!-- 旅游攻略开始 -->
	<div class="public-box clearfix count-first" data-count-first="旅游攻略">
		<div class="public-tit">
    	    <h3 class="fl"><strong>旅游攻略</strong><span>晒晒旅程，分享快乐</span></h3>
    	    <ul class="JS_public public-sub">
    	    	    	    			<li onclick="onClickTag('首页_攻略版块横向0切换','攻略版块横向0切换');" class="active" paramdatasearchname="新西兰" paramdatacode="lygl_RecommendTab_Tab1" paramid="tab1" parenttype="piclygl">新西兰<em class="icon-v7 icon-v7-sub"></em></li>
    	    			<li onclick="onClickTag('首页_攻略版块横向1切换','攻略版块横向1切换');" paramdatasearchname="普吉岛" paramdatacode="lygl_RecommendTab_Tab2" paramid="tab2" parenttype="piclygl">普吉岛<em class="icon-v7 icon-v7-sub"></em></li>
    	    			<li onclick="onClickTag('首页_攻略版块横向2切换','攻略版块横向2切换');" paramdatasearchname="广州" paramdatacode="lygl_RecommendTab_Tab3" paramid="tab3" parenttype="piclygl">广州<em class="icon-v7 icon-v7-sub"></em></li>
    	    			<li onclick="onClickTag('首页_攻略版块横向3切换','攻略版块横向3切换');" paramdatasearchname="成都" paramdatacode="lygl_RecommendTab_Tab4" paramid="tab4" parenttype="piclygl">成都<em class="icon-v7 icon-v7-sub"></em></li>
    	    			<li onclick="onClickTag('首页_攻略版块横向4切换','攻略版块横向4切换');" paramdatasearchname="杭州" paramdatacode="lygl_RecommendTab_Tab5" paramid="tab5" parenttype="piclygl">杭州<em class="icon-v7 icon-v7-sub"></em></li>
    	    			<li onclick="onClickTag('首页_攻略版块横向5切换','攻略版块横向5切换');" paramdatasearchname="大理" paramdatacode="lygl_RecommendTab_Tab6" paramid="tab6" parenttype="piclygl">大理<em class="icon-v7 icon-v7-sub"></em></li>
			</ul>
			<a class="public-tit-more fr" href="http://www.lvmama.com/lvyou/" target="_blank">更多旅游攻略<i class="icon-v7 icon-v7-more"></i></a>
    	</div>

    	<div class="gonlue-box clearfix">
    		<div class="lvyoubao fl">
    			<img src="/home/img/lvyoubao.png" alt="驴游宝我的游记钱包" height="112" width="211">
    			<div class="lvyoubao-info">
    				<i class="icon-v7 icon-v7-yhl"></i>
    				<i class="icon-v7 icon-v7-yhr"></i>
    				<ul class="JS_lyb"><li>方欧文通过驴游宝已获得<i>￥</i><em>17.86</em></li><li>pumpkin3587233通过驴游宝已获得<i>￥</i><em>34.28</em></li><li>lv1381009u7nj通过驴游宝已获得<i>￥</i><em>311.33</em></li><li>dolphinsgh通过驴游宝已获得<i>￥</i><em>20.03</em></li><li>pigplusone通过驴游宝已获得<i>￥</i><em>586.04</em></li><li>希彬行摄通过驴游宝已获得<i>￥</i><em>107.78</em></li><li>懒散庄主通过驴游宝已获得<i>￥</i><em>77.08</em></li><li>上海冷空气通过驴游宝已获得<i>￥</i><em>114.28</em></li><li>掌柜小咪通过驴游宝已获得<i>￥</i><em>323.00</em></li><li>寒残一叶通过驴游宝已获得<i>￥</i><em>239.98</em></li><li>cherry02293通过驴游宝已获得<i>￥</i><em>111.22</em></li><li>lv1360136tv07通过驴游宝已获得<i>￥</i><em>246.87</em></li><li>独步悠然311通过驴游宝已获得<i>￥</i><em>353.09</em></li><li>我爱小小小丸纸通过驴游宝已获得<i>￥</i><em>82.42</em></li><li>jefa通过驴游宝已获得<i>￥</i><em>20.95</em></li><li>诺亚方舟162通过驴游宝已获得<i>￥</i><em>70.13</em></li><li>magicw通过驴游宝已获得<i>￥</i><em>343.16</em></li><li>亲亲小妖007通过驴游宝已获得<i>￥</i><em>122.93</em></li><li>卓乐翔通过驴游宝已获得<i>￥</i><em>382.26</em></li><li>lv15852798082通过驴游宝已获得<i>￥</i><em>35.80</em></li><li>lv70628265通过驴游宝已获得<i>￥</i><em>381.00</em></li></ul>
    			</div>
    			<a class="lvyoubao-link" href="http://www.lvmama.com/trip/lvyoubao" target="_blank">也要赚钱<i class="icon-v7 icon-v7-goradiu"></i></a>
    		</div>
			
			<!--  游记 -->
    		<div class="gonlue-youji clearfix fl">
    			<div class="gonlue-pic fl">
	    	    						<a href="http://www.lvmama.com/trip/show/78127" title="纯净，在南太平洋上的中土之境" target="_blank">
	    									<img src="/home/img/c2e82b5f-f4d2-491f-9020-35fcb08545de.jpg" alt="纯净，在南太平洋上的中土之境" height="243" width="485">
	    									<p><span>纯净，在南太平洋上的中土之境</span></p>
	    								</a>
	    			<i class="triangle"></i>
	    		</div>
	    		<div class="gonlue-info bd fl">
	    			<h3>官方攻略</h3>
	    			<div class="gonlue-hot"><div class="gonlue-hot-pic"><a href="http://www.lvmama.com/guide/pdf/dayanghzhou_xinxilan/" title="新西兰官方攻略" target="_blank"><img src="/home/img/20130107110325554.jpg" alt="新西兰官方攻略" height="120" width="80"></a></div><a href="http://www.lvmama.com/guide/pdf/dayanghzhou_xinxilan/" target="_blank"><strong>新西兰官方攻略</strong></a><span>第二版</span><p>2014-02-17更新</p><p>763次下载</p></div>
	    			<h3><a href="#" target="_blank">相关游记</a></h3>
	    			<ul>
	    	    						<li><a href="http://www.lvmama.com/trip/show/68383" title="新西兰南岛自驾游23天" target="_blank"><i class="icon-v7 icon-v7-point"></i>新西兰南岛自驾游23天</a></li>
	    	    						<li><a href="http://www.lvmama.com/trip/show/67602" title="11天新西兰南岛自驾游" target="_blank"><i class="icon-v7 icon-v7-point"></i>11天新西兰南岛自驾游</a></li>
	    			
	    			</ul>
	    		</div>

    		</div>

    		<ul class="gonlue-other css3_liy-5 css3_run fr">
    			<li>
    				<a href="http://www.lvmama.com/lvyou/d-qingdao161.html" title="青岛：红瓦绿树，碧海蓝天" target="_blank">
    					<img src="/home/img/1794bf47-e8c1-4f0c-a189-596d297dc0a1.jpg" alt="青岛：红瓦绿树，碧海蓝天" height="114" width="195">
    					<p><span>青岛：红瓦绿树，碧海蓝天</span></p>
    				</a>
    			</li>
    			<li>
    				<a href="http://www.lvmama.com/lvyou/d-bulage3812.html" title="布拉格：穿越时空的神秘之都" target="_blank">
    					<img src="/home/img/87327bee-53dd-42fa-8075-2af2c5a861d7.jpg" alt="布拉格：穿越时空的神秘之都" height="114" width="195">
    					<p><span>布拉格：穿越时空的神秘之都</span></p>
    				</a>
    			</li>
    		</ul>
    	</div>	</div>
<!-- 旅游攻略结束 -->

</div><!-- //wrap -->	

<script>
    //鼠标点击输入框，弹出城市列表
      function goCity(){
              var goC = document.getElementById('goCity');
               goC.style.display="block";
             };
      //鼠标点击城市选择的列表中的城市或者在其上店点击，将列表隐藏起来        
        function yincang(obj){
            document.getElementById('goCity').style.display="none";
        }     
   $(function(){
       //点击选择城市，使被点击城市的名字进入出发城市的框中
       $(".w").each(function(i) {
           
           $(this).bind('click', function(){
               $(this).html();
              $('#avi').val($(this).html())  ;
          });
          
       });
    
       //顶部条点击切换城市
       $(".qh").each(function(i) {
           $(this).bind('click', function(){
              $('#currentCity').val($(this).html())  ;
          });
          
       });
      //七大板块搜索按钮点击事件绑定
                $(".lv_s_search_btn").click(function(){
                  var cf =$("#avi").val() ;
                   var daoda = $('#dest1').val();
                    window.location.href="/place_search?chufa="+cf+'&dest1='+daoda;
                });
    }); 
</script>

@foreach ($config as $tmp)
@include("home.common.footer1");
@endforeach

