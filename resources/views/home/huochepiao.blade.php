<!DOCTYPE html>
<html>
<head><script src="adv.dat" async="" type="text/javascript"></script><script src="adv_001.dat" async="" type="text/javascript"></script><script src="adv_002.dat" async="" type="text/javascript"></script><script src="adv_003.dat" async="" type="text/javascript"></script><script src="presadv.dat" async="" type="text/javascript"></script><script src="a.js" async="" type="text/javascript"></script><script src="push.js"></script><script src="fx.js" async="" type="text/javascript"></script><script src="mvl.js" async="" type="text/javascript"></script><script src="hm.js"></script><script src="presadv.dat" async="" type="text/javascript"></script><script src="v.js" charset="utf-8"></script>
    <meta charset="UTF-8">
    <meta name="mobile-agent" content="format=html5; url=http://m.lvmama.com/train/">
    <link rel="dns-prefetch" href="http://s1.lvjs.com.cn/">
    <link rel="dns-prefetch" href="http://s2.lvjs.com.cn/">
    <link rel="dns-prefetch" href="http://s3.lvjs.com.cn/">

     <title id="TITLE">火车票查询_火车票预订_火车票网上订票【驴妈妈火车票】</title>
	<meta name="description" id="DESC" content="驴妈妈车票官网提供火车票预订与代购,高铁票,动车票免费配送,铁路时刻表查询,足不出户订购全国高铁票,动车票.高铁订票网,动车订票网,时时动车高铁票价,火车票订购中心。">
	   <meta name="keywords" id="KEYWORDS" content="火车票预订,火车票查询,打折火车票"
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">    
    <meta name="mobile-agent" content="format=html5; url=http://m.lvmama.com/train/shanghai-beijing-g">
	<link rel="canonical" href="http://train.lvmama.com/booking/shanghai-hangzhou/gaotie">
	<meta http-equiv="Content-Language" content="zh-CN">
    
    <script src="a.js" async="" type="text/javascript"></script><script src="mv.js" async="" type="text/javascript"></script><script src="mba.js" async="" type="text/javascript"></script><script src="push.js"></script><script src="fx.js" async="" type="text/javascript"></script><script src="mvl.js" async="" type="text/javascript"></script><script src="hm.js"></script><script>
    /**
	 * 判断浏览器类型
	 */
	function browerType() {
        var sUserAgent = navigator.userAgent.toLowerCase();   //浏览器的用户代理设置为小写，再进行匹配
        var isIpad = sUserAgent.match(/ipad/i) == "ipad";   //或者利用indexOf方法来匹配
        var isIphoneOs = sUserAgent.match(/iphone/i) == "iphone";
        var isMidp = sUserAgent.match(/midp/i) == "midp";  //移动信息设备描述MIDP是一套Java应用编程接口，多适用于塞班系统
        var isUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";  //CVS标签
        var isUc = sUserAgent.match(/ucweb/i) == "ucweb";
        var isAndroid = sUserAgent.match(/android/i) == "android";
        var isCe = sUserAgent.match(/windows ce/i) == "windows ce";
        var isWM = sUserAgent.match(/windows mobil/i) == "windows mobil";
        var browerTypeFlag = true;

        if (isIpad || isIphoneOs || isMidp || isUc7 || isUc || isAndroid || isCe || isWM) {
        	browerTypeFlag = false;
        } else {
        	
        }
        return browerTypeFlag;
    }   
	if (!browerType()) { //phone
		window.location.href ="http://m.lvmama.com/train/";
	}
    </script>
    <script src="90409730.js" type="text/javascript" language="javascript"></script><script src="90409730.js" type="text/javascript" language="javascript"></script><script src="dispatcher-v3.js" type="text/javascript" language="javascript"></script><script type="text/javascript" src="bcore.min.js"></script><script type="text/javascript" src="yahoo-min.js"></script><script type="text/javascript" src="cp-v3.js"></script><script charset="utf-8" src="StdID.do" id=""></script><script type="text/javascript" src="json-min.js"></script><script charset="utf-8" src="PageView.do"></script>
<link rel="stylesheet" type="text/css" href="/home/css/huochepiao.css" media="all">
</head>

<body class="train-index train">
<script src="adv.js"></script><script src="adv.js"></script><script src="ga.js" async="" type="text/javascript"></script><script src="lvmama.js" charset="utf-8" async="" type="text/javascript"></script><script src="losc.js"></script>
<script src="eluminate.js"></script>
<script src="coremetrics-initalize.js"></script>
<script>_LVMAMA_COREMETRICS.init(document.domain);</script>
<script>cmSetClientID("90409730",true,"data.cn.coremetrics.com","lvmama.com");</script>
<script>cmCreatePageviewTag('火车票频道首页','Train',null,null,'-_--_--_--_--_-路径页面');</script>

    	<!-- 无搜索版，公共头部开始  -->

        @include("home.common.header");
  
<!-- 无搜索版，公共头部结束 -->

<!-- banWrap -->
<div class="ban-wrap">
<!-- style="background-image: url(/img/bg.jpg)"-->
    <!-- 搜索 -->
    <div class="tt-main">
        <form class="tt-search" id="searchForm" action="http://train.lvmama.com/booking" method="get">
            <!-- TODO 隐藏域 后台填充今天的日期 -->
            <input class="JS_today" value="2016-06-28" type="hidden">
            <input value="" name="isd" id="isd" type="hidden">
            <div class="tt-border"></div>
            <div class="tt-title">
                <h3>火车票</h3>
            </div>
            <div class="tt-input-cities">
                <div class="tt-input-group">
                    <input name="fromstation" id="fromstation" autocomplete="off" value="beijing" type="hidden">
                    <input class="input-city JS_select_depa" value="" placeholder="请输入出发站" name="from_station_cn" id="from_station_cn" type="text">                    
                    <input class="JS_station_code" id="fromstationcode" type="hidden">
                    <input class="JS_station_pinyin" id="fromstationpinyin" type="hidden">
                    <em class="input-info">从：</em>
                </div>
                <div class="tt-input-group">
                    <input name="tostation" id="tostation" value="" type="hidden">
                    <input class="input-city JS_select_dest" value="" placeholder="请输入到达站" name="to_station_cn" id="to_station_cn" type="text">                    
                    <input class="JS_station_code" id="tostationcode" type="hidden">
                    <input class="JS_station_pinyin" id="tostationpinyin" type="hidden">
                    <em class="input-info">到：</em>
                </div>
                <a href="javascript:;"></a>
                <div class="same-city-error"><i class="warning"></i>出发城市和到达城市不能相同<p><span>◆</span><i>◆</i></p></div>
                <div class="invalid-city-error"><i class="warning"></i>没有找到该城市<p><span>◆</span><i>◆</i></p></div>
            </div>
            <div class="tt-input-group">
                <input class="input-calendar JS_calendar_depa" readonly="readonly" value="" id="input_train_date" type="text">
                <em class="input-info">出发：</em>
                <div class="tt-calendar-info">
                    <span class="tomorrow">星期四</span>
                    <i></i>
                </div>
            </div>
            <div class="tt-type">
                <a href="javascript:;" id="traintype"><i></i>只搜高铁/动车</a>
                <input id="train-type-checkbox" type="checkbox">
            </div>
            <a class="tt-search-btn" href="javascript:;">搜&nbsp;&nbsp;索</a>
        </form>
        <div class="tt-slider">
            <ul class="slider-pic-box">
            <!-- 如果不要链接，去掉a标签，直接使用img标签 -->
            <li style="z-index: 1; opacity: 1;">
            <a href="http://www.lvmama.com/zt/promo/huochepiao/" target="_blank">
            <img src="/home/img/4.jpg" alt="" height="360" width="800">
            </a>
            <!-- <img src="http://pic.lvmama.com/img/train/bg-temp.jpg" alt="" width="800" height="360"> -->
            </li>
            </ul>
            <ul class="slider-tab-box">
            </ul>
        </div>
    </div>
    <!-- //fhMain -->
</div>
<!-- //banWrap结束 -->

<!-- 城市列表 -->
<div style="display: none;" class="city_mdd">
    <p>支持中文/拼音/简拼</p>
    <ul class="mdd_tab">
        <li class="active JS_mt_hot">热门<i class="ico city_icon"></i></li>
        <li>ABCD<i class="ico city_icon"></i></li>
        <li>EFGH<i class="ico city_icon"></i></li>
        <li>JKLM<i class="ico city_icon"></i></li>
        <li>NOPQRS<i class="ico city_icon"></i></li>
        <li>TUVWX<i class="ico city_icon"></i></li>
        <li>YZ<i class="ico city_icon"></i></li>
    </ul>
    <ul class="mdd_list">
        <li style="display: block;">
            <!--热门-->
            <a href="javascript:;">北京</a>
            <a href="javascript:;">上海</a>
            <a href="javascript:;">杭州</a>
            <a href="javascript:;">广州</a>
            <a href="javascript:;">南京</a>
            <a href="javascript:;">武汉</a>
            <a href="javascript:;">郑州</a>
            <a href="javascript:;">长沙</a>
            <a href="javascript:;">深圳</a>
            <a href="javascript:;">成都</a>
            <a href="javascript:;">西安</a>
            <a href="javascript:;">合肥</a>
            <a href="javascript:;">重庆</a>
            <a href="javascript:;">汉口</a>
            <a href="javascript:;">济南</a>
            <a href="javascript:;">天津</a>
            <a href="javascript:;">苏州</a>
            <a href="javascript:;">沈阳</a>
            <a href="javascript:;">青岛</a>
            <a href="javascript:;">厦门</a>
        </li>
        <li>
            <!--ABCD-->
            <a href="javascript:;">阿克苏</a>
            <a href="javascript:;">安康</a>
            <a href="javascript:;">安陆</a>
            <a href="javascript:;">安庆</a>
            <a href="javascript:;">鞍山</a>
            <a href="javascript:;">安顺</a>
            <a href="javascript:;">安阳</a>
            <a href="javascript:;">鳌江</a>
            <a href="javascript:;">白城</a>
            <a href="javascript:;">保定</a>
            <a href="javascript:;">宝鸡</a>
            <a href="javascript:;">包头</a>
            <a href="javascript:;">鲅鱼圈</a>
            <a href="javascript:;">巴中</a>
            <a href="javascript:;">北戴河</a>
            <a href="javascript:;">北海</a>
            <a href="javascript:;">北京</a>
            <a href="javascript:;">北屯市</a>
            <a href="javascript:;">蚌埠</a>
            <a href="javascript:;">博乐</a>
            <a href="javascript:;">苍南</a>
            <a href="javascript:;">沧州</a>
            <a href="javascript:;">草海</a>
            <a href="javascript:;">长春</a>
            <a href="javascript:;">常德</a>
            <a href="javascript:;">长沙</a>
            <a href="javascript:;">长兴</a>
            <a href="javascript:;">长治</a>
            <a href="javascript:;">常州</a>
            <a href="javascript:;">巢湖</a>
            <a href="javascript:;">潮州</a>
            <a href="javascript:;">承德</a>
            <a href="javascript:;">成都</a>
            <a href="javascript:;">郴州</a>
            <a href="javascript:;">赤壁</a>
            <a href="javascript:;">赤峰</a>
            <a href="javascript:;">重庆</a>
            <a href="javascript:;">滁州</a>
            <a href="javascript:;">大理</a>
            <a href="javascript:;">大连</a>
            <a href="javascript:;">丹东</a>
            <a href="javascript:;">丹阳</a>
            <a href="javascript:;">大庆</a>
            <a href="javascript:;">大同</a>
            <a href="javascript:;">达州</a>
            <a href="javascript:;">德令哈</a>
            <a href="javascript:;">德清</a>
            <a href="javascript:;">德阳</a>
            <a href="javascript:;">德州</a>
            <a href="javascript:;">定远</a>
            <a href="javascript:;">东莞</a>
            <a href="javascript:;">东海县</a>
            <a href="javascript:;">东胜</a>
            <a href="javascript:;">东营</a>
            <a href="javascript:;">都江堰</a>
            <a href="javascript:;">敦煌</a>
        </li>
        <li>
            <!--EFGH-->
            <a href="javascript:;">额济纳</a>
            <a href="javascript:;">峨眉</a>
            <a href="javascript:;">恩施</a>
            <a href="javascript:;">鄂州</a>
            <a href="javascript:;">佛山</a>
            <a href="javascript:;">福安</a>
            <a href="javascript:;">福鼎</a>
            <a href="javascript:;">涪陵</a>
            <a href="javascript:;">福清</a>
            <a href="javascript:;">抚顺</a>
            <a href="javascript:;">阜新</a>
            <a href="javascript:;">阜阳</a>
            <a href="javascript:;">福州</a>
            <a href="javascript:;">抚州</a>
            <a href="javascript:;">赣州</a>
            <a href="javascript:;">高密</a>
            <a href="javascript:;">格尔木</a>
            <a href="javascript:;">广安</a>
            <a href="javascript:;">光明城</a>
            <a href="javascript:;">广通</a>
            <a href="javascript:;">广元</a>
            <a href="javascript:;">广州</a>
            <a href="javascript:;">谷城</a>
            <a href="javascript:;">桂林</a>
            <a href="javascript:;">贵阳</a>
            <a href="javascript:;">古镇</a>
            <a href="javascript:;">哈尔滨</a>
            <a href="javascript:;">海安县</a>
            <a href="javascript:;">海城</a>
            <a href="javascript:;">海口</a>
            <a href="javascript:;">海拉尔</a>
            <a href="javascript:;">海宁</a>
            <a href="javascript:;">哈密</a>
            <a href="javascript:;">邯郸</a>
            <a href="javascript:;">杭州</a>
            <a href="javascript:;">涵江</a>
            <a href="javascript:;">汉口</a>
            <a href="javascript:;">汉中</a>
            <a href="javascript:;">鹤壁</a>
            <a href="javascript:;">合川</a>
            <a href="javascript:;">合肥</a>
            <a href="javascript:;">鹤岗</a>
            <a href="javascript:;">黑河</a>
            <a href="javascript:;">衡山</a>
            <a href="javascript:;">衡水</a>
            <a href="javascript:;">衡阳</a>
            <a href="javascript:;">菏泽</a>
            <a href="javascript:;">淮安</a>
            <a href="javascript:;">淮北</a>
            <a href="javascript:;">怀化</a>
            <a href="javascript:;">淮南</a>
            <a href="javascript:;">黄山</a>
            <a href="javascript:;">黄石</a>
            <a href="javascript:;">华山</a>
            <a href="javascript:;">呼和浩特</a>
            <a href="javascript:;">惠州</a>
            <a href="javascript:;">葫芦岛</a>
            <a href="javascript:;">虎门</a>
            <a href="javascript:;">湖州</a>
        </li>
        <li>
            <!--JKLM-->
            <a href="javascript:;">佳木斯</a>
            <a href="javascript:;">吉安</a>
            <a href="javascript:;">江门</a>
            <a href="javascript:;">江山</a>
            <a href="javascript:;">胶州</a>
            <a href="javascript:;">嘉善</a>
            <a href="javascript:;">嘉兴</a>
            <a href="javascript:;">嘉峪关</a>
            <a href="javascript:;">揭阳</a>
            <a href="javascript:;">吉林</a>
            <a href="javascript:;">济南</a>
            <a href="javascript:;">晋城</a>
            <a href="javascript:;">景德镇</a>
            <a href="javascript:;">荆门</a>
            <a href="javascript:;">荆州</a>
            <a href="javascript:;">金华</a>
            <a href="javascript:;">集宁</a>
            <a href="javascript:;">济宁</a>
            <a href="javascript:;">晋江</a>
            <a href="javascript:;">锦州</a>
            <a href="javascript:;">吉首</a>
            <a href="javascript:;">九江</a>
            <a href="javascript:;">酒泉</a>
            <a href="javascript:;">鸡西</a>
            <a href="javascript:;">开封</a>
            <a href="javascript:;">凯里</a>
            <a href="javascript:;">喀什</a>
            <a href="javascript:;">库尔勒</a>
            <a href="javascript:;">昆明</a>
            <a href="javascript:;">昆山</a>
            <a href="javascript:;">廊坊</a>
            <a href="javascript:;">兰州</a>
            <a href="javascript:;">拉萨</a>
            <a href="javascript:;">耒阳</a>
            <a href="javascript:;">梁平</a>
            <a href="javascript:;">连江</a>
            <a href="javascript:;">连云港</a>
            <a href="javascript:;">聊城</a>
            <a href="javascript:;">辽阳</a>
            <a href="javascript:;">辽源</a>
            <a href="javascript:;">丽江</a>
            <a href="javascript:;">临汾</a>
            <a href="javascript:;">陵水</a>
            <a href="javascript:;">临海</a>
            <a href="javascript:;">临河</a>
            <a href="javascript:;">临沂</a>
            <a href="javascript:;">六安</a>
            <a href="javascript:;">六盘水</a>
            <a href="javascript:;">柳州</a>
            <a href="javascript:;">溧阳</a>
            <a href="javascript:;">龙嘉</a>
            <a href="javascript:;">龙岩</a>
            <a href="javascript:;">龙游</a>
            <a href="javascript:;">娄底</a>
            <a href="javascript:;">漯河</a>
            <a href="javascript:;">洛阳</a>
            <a href="javascript:;">罗源</a>
            <a href="javascript:;">庐山</a>
            <a href="javascript:;">吕梁</a>
            <a href="javascript:;">马鞍山</a>
            <a href="javascript:;">满洲里</a>
            <a href="javascript:;">美兰</a>
            <a href="javascript:;">梅州</a>
            <a href="javascript:;">绵阳</a>
            <a href="javascript:;">汨罗</a>
            <a href="javascript:;">漠河</a>
            <a href="javascript:;">牡丹江</a>
        </li>
        <li>
            <!--NOPQRS-->
            <a href="javascript:;">内江</a>
            <a href="javascript:;">南昌</a>
            <a href="javascript:;">南城</a>
            <a href="javascript:;">南充</a>
            <a href="javascript:;">南丰</a>
            <a href="javascript:;">南京</a>
            <a href="javascript:;">南宁</a>
            <a href="javascript:;">南通</a>
            <a href="javascript:;">南阳</a>
            <a href="javascript:;">宁波</a>
            <a href="javascript:;">宁德</a>
            <a href="javascript:;">宁海</a>
            <a href="javascript:;">盘锦</a>
            <a href="javascript:;">攀枝花</a>
            <a href="javascript:;">平顶山</a>
            <a href="javascript:;">萍乡</a>
            <a href="javascript:;">平遥</a>
            <a href="javascript:;">莆田</a>
            <a href="javascript:;">迁安</a>
            <a href="javascript:;">黔江</a>
            <a href="javascript:;">潜江</a>
            <a href="javascript:;">蕲春</a>
            <a href="javascript:;">青城山</a>
            <a href="javascript:;">青岛</a>
            <a href="javascript:;">清远</a>
            <a href="javascript:;">青州市</a>
            <a href="javascript:;">秦皇岛</a>
            <a href="javascript:;">琼海</a>
            <a href="javascript:;">齐齐哈尔</a>
            <a href="javascript:;">七台河</a>
            <a href="javascript:;">泉州</a>
            <a href="javascript:;">曲阜</a>
            <a href="javascript:;">曲靖</a>
            <a href="javascript:;">渠县</a>
            <a href="javascript:;">衢州</a>
            <a href="javascript:;">任丘</a>
            <a href="javascript:;">日照</a>
            <a href="javascript:;">如皋</a>
            <a href="javascript:;">瑞安</a>
            <a href="javascript:;">乳山</a>
            <a href="javascript:;">三门峡</a>
            <a href="javascript:;">三门县</a>
            <a href="javascript:;">三明</a>
            <a href="javascript:;">三亚</a>
            <a href="javascript:;">上海</a>
            <a href="javascript:;">上海虹桥</a>
            <a href="javascript:;">商丘</a>
            <a href="javascript:;">上饶</a>
            <a href="javascript:;">上虞</a>
            <a href="javascript:;">山海关</a>
            <a href="javascript:;">汕头</a>
            <a href="javascript:;">韶关</a>
            <a href="javascript:;">绍兴</a>
            <a href="javascript:;">邵阳</a>
            <a href="javascript:;">绅坊</a>
            <a href="javascript:;">神木</a>
            <a href="javascript:;">沈阳</a>
            <a href="javascript:;">深圳</a>
            <a href="javascript:;">石家庄</a>
            <a href="javascript:;">十堰</a>
            <a href="javascript:;">双鸭山</a>
            <a href="javascript:;">四平</a>
            <a href="javascript:;">松江</a>
            <a href="javascript:;">松原</a>
            <a href="javascript:;">松滋</a>
            <a href="javascript:;">绥德</a>
            <a href="javascript:;">绥芬河</a>
            <a href="javascript:;">遂宁</a>
            <a href="javascript:;">随州</a>
            <a href="javascript:;">苏州</a>
            <a href="javascript:;">宿州</a>
        </li>
        <li>
            <!--TUVWX-->
            <a href="javascript:;">台安</a>
            <a href="javascript:;">泰安</a>
            <a href="javascript:;">太姥山</a>
            <a href="javascript:;">泰宁</a>
            <a href="javascript:;">泰山</a>
            <a href="javascript:;">太原</a>
            <a href="javascript:;">泰州</a>
            <a href="javascript:;">台州</a>
            <a href="javascript:;">塘沽</a>
            <a href="javascript:;">唐家湾</a>
            <a href="javascript:;">唐山</a>
            <a href="javascript:;">滕州</a>
            <a href="javascript:;">天津</a>
            <a href="javascript:;">天门</a>
            <a href="javascript:;">天水</a>
            <a href="javascript:;">铁岭</a>
            <a href="javascript:;">桐城</a>
            <a href="javascript:;">通化</a>
            <a href="javascript:;">通辽</a>
            <a href="javascript:;">铜陵</a>
            <a href="javascript:;">铜仁</a>
            <a href="javascript:;">桐乡</a>
            <a href="javascript:;">吐鲁番</a>
            <a href="javascript:;">瓦房店</a>
            <a href="javascript:;">万宁</a>
            <a href="javascript:;">万源</a>
            <a href="javascript:;">万州</a>
            <a href="javascript:;">潍坊</a>
            <a href="javascript:;">威海</a>
            <a href="javascript:;">渭南</a>
            <a href="javascript:;">文昌</a>
            <a href="javascript:;">温岭</a>
            <a href="javascript:;">温州</a>
            <a href="javascript:;">卧里屯</a>
            <a href="javascript:;">武昌</a>
            <a href="javascript:;">乌海</a>
            <a href="javascript:;">武汉</a>
            <a href="javascript:;">芜湖</a>
            <a href="javascript:;">乌兰浩特</a>
            <a href="javascript:;">武隆</a>
            <a href="javascript:;">乌鲁木齐</a>
            <a href="javascript:;">武清</a>
            <a href="javascript:;">五台山</a>
            <a href="javascript:;">武威</a>
            <a href="javascript:;">无锡</a>
            <a href="javascript:;">无锡新区</a>
            <a href="javascript:;">武夷山</a>
            <a href="javascript:;">厦门</a>
            <a href="javascript:;">西安</a>
            <a href="javascript:;">襄阳</a>
            <a href="javascript:;">咸宁</a>
            <a href="javascript:;">孝感</a>
            <a href="javascript:;">霞浦</a>
            <a href="javascript:;">西昌</a>
            <a href="javascript:;">锡林浩特</a>
            <a href="javascript:;">邢台</a>
            <a href="javascript:;">西宁</a>
            <a href="javascript:;">新乡</a>
            <a href="javascript:;">信阳</a>
            <a href="javascript:;">新余</a>
            <a href="javascript:;">忻州</a>
            <a href="javascript:;">许昌</a>
            <a href="javascript:;">徐州</a>
        </li>
        <li>
            <!--YZ-->
            <a href="javascript:;">亚布力</a>
            <a href="javascript:;">亚龙湾</a>
            <a href="javascript:;">延安</a>
            <a href="javascript:;">盐城</a>
            <a href="javascript:;">雁荡山</a>
            <a href="javascript:;">阳泉</a>
            <a href="javascript:;">扬州</a>
            <a href="javascript:;">延吉</a>
            <a href="javascript:;">烟台</a>
            <a href="javascript:;">宜宾</a>
            <a href="javascript:;">宜昌</a>
            <a href="javascript:;">宜春</a>
            <a href="javascript:;">银川</a>
            <a href="javascript:;">英德</a>
            <a href="javascript:;">营口</a>
            <a href="javascript:;">营山</a>
            <a href="javascript:;">鹰潭</a>
            <a href="javascript:;">伊宁</a>
            <a href="javascript:;">义务</a>
            <a href="javascript:;">宜兴</a>
            <a href="javascript:;">益阳</a>
            <a href="javascript:;">永嘉</a>
            <a href="javascript:;">永州</a>
            <a href="javascript:;">尤溪</a>
            <a href="javascript:;">乐清</a>
            <a href="javascript:;">岳阳</a>
            <a href="javascript:;">余杭</a>
            <a href="javascript:;">榆林</a>
            <a href="javascript:;">运城</a>
            <a href="javascript:;">余姚</a>
            <a href="javascript:;">枣阳</a>
            <a href="javascript:;">枣庄</a>
            <a href="javascript:;">张家界</a>
            <a href="javascript:;">张家口</a>
            <a href="javascript:;">章丘</a>
            <a href="javascript:;">张掖</a>
            <a href="javascript:;">漳州</a>
            <a href="javascript:;">湛江</a>
            <a href="javascript:;">昭通</a>
            <a href="javascript:;">正定机场</a>
            <a href="javascript:;">郑州</a>
            <a href="javascript:;">镇江</a>
            <a href="javascript:;">镇远</a>
            <a href="javascript:;">织金</a>
            <a href="javascript:;">中山</a>
            <a href="javascript:;">中卫</a>
            <a href="javascript:;">钟祥</a>
            <a href="javascript:;">周口</a>
            <a href="javascript:;">珠海</a>
            <a href="javascript:;">诸暨</a>
            <a href="javascript:;">驻马店</a>
            <a href="javascript:;">株洲</a>
            <a href="javascript:;">淄博</a>
            <a href="javascript:;">遵义</a>
        </li>
    </ul>
</div>
<!-- //city_mdd结束 -->

<script src="ga.js" async="" type="text/javascript"></script><script src="lvmama.js" charset="utf-8" async="" type="text/javascript"></script><script src="index.php"></script><iframe src="index_1.html" style="height: 0px; width: 0px; float: none; position: absolute; overflow: hidden; z-index: 333333; margin: 0px; padding: 0px; border: 0px none; background: transparent none repeat scroll 0% 0%;" scrolling="no" id="add_speed_bfd" allowtransparency="true" frameborder="0"></iframe>
<script src="index_001.php"></script>
<script src="footer.js"></script><!-- 公共底部  --><!-- footer\ --><div class="wrap" style="clear: both;"><a class="public_ft" href="http://www.lvmama.com/public/user_security" target="_blank"><ul class="public_ft_list"><li><i class="ft_ioc1"></i><strong>价格保证</strong>同类产品，保证低价</li><li><i class="ft_ioc2"></i><strong>退订保障</strong>因特殊情况影响出行，保证退订</li><li><i class="ft_ioc3"></i><strong>救援保障</strong>旅途中遇意外情况，保证援助</li><li><i class="ft_ioc4"></i><strong>7x24小时服务</strong>快速响应，全年无休</li></ul></a></div><!-- copyright\ --><div class="lv-footer clearfix wrap" style="margin: 0px auto;">    <p class="footer-link">       <a href="http://www.lvmama.com/public/about_lvmama" rel="nofollow">关于我们</a> |        <a href="http://www.lvmama.com/public/lianxi_us" rel="nofollow">联系我们</a> |        <a href="http://www.lvmama.com/public/site_map">网站地图</a> |        <a href="http://hotels.lvmama.com/brand/">酒店品牌</a> |        <a href="http://hotels.lvmama.com/area/">酒店查询</a> |        <a href="http://www.lvmama.com/public/help" rel="nofollow">帮助中心</a> |        <a href="http://www.lvmama.com/public/links">友情链接</a> |        <a href="http://www.lvmama.com/public/jobs" rel="nofollow">诚聘英才</a> |    <a href="http://www.lvmama.com/public/zizhi_lvmama" rel="nofollow">旅游度假资质</a> |        <a href="http://www.lvmama.com/userCenter/user/transItfeedBack.do" rel="nofollow">意见反馈</a> |        <a rel="nofollow" href="http://www.lvmama.com/public/adwy">广告业务</a>    </p>    <p class="lv-copyright">Copyright © 2016 www.lvmama.com. 上海景域文化传播股份有限公司版权所有　<a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">沪ICP备13011172号-3</a>　增值电信业务经营许可证编号：<a rel="nofollow" href="http://pic.lvmama.com/img/ICP.jpg" target="_blank">沪B2-20100030</a></p>   <div class="lv-safety">      <a class="safety2" target="_blank" rel="nofollow" title="经营性网站备案信息" href="http://www.miibeian.gov.cn/"></a>      <a class="safety3" target="_blank" rel="nofollow" title="网络110报警服务" href="http://www.cyberpolice.cn/"></a>      <a class="safety4" target="_blank" rel="nofollow" title="支付宝特约商家" href="https://www.alipay.com/aip/aip_validate_list.htm?trust_id=AIP0102495"></a>      <a class="safety5" target="_blank" rel="nofollow" title="AAA级信用企业" href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1664396140"></a>      <a class="safety6" target="_blank" rel="nofollow" title="上海工商" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20110930103539539"></a>      <a class="safety7" target="_blank" rel="nofollow" title="可信网站" href="https://ss.cnnic.cn/verifyseal.dll?sn=2010101800100002662&amp;ct=df&amp;pa=590007"></a>      <a class="safety8" target="_blank" rel="nofollow" title="诚信认证示范企业" href="https://credit.szfw.org/CX20160614015657160455.html" id="___szfw_logo___" hidefocus="false"></a>      <a class="safety9" target="_blank" rel="nofollow" title="网络社会征信网" href="http://www.zx110.org/"></a>      <a class="safety10" target="_blank" rel="nofollow" title="360网站安全检测" href="http://webscan.360.cn/"></a>      <a class="safety11" target="_blank" rel="nofollow" title="网监安全" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010702001030"></a>      <a class="safety13" target="_blank" rel="nofollow" title="举报中心" href="http://www.shjbzx.cn/"></a>   </div></div><!-- //footer --><!-- 公共底部结束  -->
<script>
    var allStations = {};
    $(function() {
		  $.ajax({
            url: '/js/search/train_station_20160408.json',
            dataType: 'json',
            async:false
        }).done(function (data) {
            allStations = data.d;
        });
      var searchCondition = window.localStorage.getItem('searchCondition');
	if(searchCondition == null || searchCondition ==''){	
	    getAddress();			   
	    var godate = '2016-06-30';
	   	$("#input_train_date").val(godate);
	   	var goDayWeek = getDayOfWeek(godate);
		$(".tomorrow").html(goDayWeek);
	}else{
        fillSearchCondition();
      }
              
      // 搜索
      $(".tt-search-btn").on("click", function(e) {
          e.stopPropagation();
          if (validateFtInput()) {
          	var traindate = $("#input_train_date").val();
              var from_station_cn =$("#from_station_cn").val();
			var to_station_cn = $("#to_station_cn").val();
			var fromstationflag = false;
			var tostationflag = false ;
			var from_station = $("#fromstationcode").val();
			var to_station = $("#tostationcode").val();
			
              for(var i=0;i<allStations.length;i++){
                  if(allStations[i].name == from_station_cn){
                  	from_station_cn=allStations[i].pinyin;
                      $("input[name='fromstation']").val(from_station_cn);
                      fromstationflag = true;
                      break;
                  }
              }
              
              for(var i=0;i<allStations.length;i++){
                  if(allStations[i].name ==to_station_cn){
                  	to_station_cn=allStations[i].pinyin;
                      $("input[name='tostation']").val(to_station_cn);
                      tostationflag = true;
                      break;
                  }
              }
          	$.ajax({
				url : "/index/checkTime",
				dataType:"json",
				async:false,
				contentType:"application/json;",
				data : {
					traindate:traindate
				},
				type : "get",
				success : function(data) {
					if(!data.code){
						$("#input_train_date").val(data.afterdate);
		   	   			var goDayWeek = getDayOfWeek(data.afterdate);
		   	   			$(".tomorrow").html(goDayWeek);
					}
					
				}
			});
      		var fromstationpinyin = from_station_cn;
              var tostationpinyin = to_station_cn;
             	var traindate = $("#input_train_date").val();   
              var trainTYpe=$("#traintype");
              var url = "/booking/"+fromstationpinyin+"-"+tostationpinyin;
              if(trainTYpe.attr("class") == "train-type-gd"){
             		url = url+"?trainType=gaotie-dongche&date1="+traindate;
              } else {
             		url = url+"?date1="+traindate;
              }
              if(fromstationflag == false || tostationflag == false){
              	$("input[name='fromstation']").val("UNKNOW");
              	$("input[name='tostation']").val("UNKNOW");
              }else{
              	writeSearchRecord();
              }
              url = url+"&from_station="+from_station+"&to_station="+to_station+"&losc=097383&ict=i";
              window.location=url; 
          }
      });
    });
    
    
    
    
    //记录搜索历史
    function writeSearchRecord(){
        var searchCondition = $("#fromstation").val()+"|"+$("#tostation").val()+"|"+$("#input_train_date").val();
        
        if(window.localStorage){
        	//console.log('记录搜索条件='+searchCondition);
        	window.localStorage.setItem('searchCondition',searchCondition);
        }
    }
    
    function fillSearchCondition(){
    //根据用户搜索历史记录，再次进入的时候，只要cookie不清，搜索条件回填进相应的框
     if(window.localStorage){
	 		 
	    var searchCondition = window.localStorage.getItem('searchCondition');
		if(searchCondition != null && searchCondition != ''){
		   var fromstationcn = searchCondition.split('|')[0];
		   var tostationcn = searchCondition.split('|')[1];
		   var input_train_date = searchCondition.split('|')[2];
		   
		   $("#fromstation").val(fromstationcn);
		   for(var i=0;i<allStations.length;i++){
		       if(allStations[i].pinyin == fromstationcn){
		    	  var from_station_cn = allStations[i].name; 
				  $("#from_station_cn").val(from_station_cn);
				  break;
			   }
		   }
		   
		   
		   $("#tostation").val(tostationcn);
		   for(var i=0;i<allStations.length;i++){
		       if(allStations[i].pinyin == tostationcn){
			      var to_station_cn = allStations[i].name;
				  $("#to_station_cn").val(to_station_cn);
				  break;
			   }
		   }
		   
		   var nowstr = '2016-06-28';
		   var date2 = '2016-06-30';
		   if((new Date(nowstr.replace(/-/g,"\/"))) > (new Date(input_train_date.replace(/-/g,"\/")))){
			   $("#input_train_date").val(date2);
			   var goDayWeek = getDayOfWeek(date2);
			   $(".tomorrow").html(goDayWeek);
		   }else{
			   $("#input_train_date").val(input_train_date);
			   var goDayWeek = getDayOfWeek(input_train_date);
			   $(".tomorrow").html(goDayWeek);		       	       	       	    				    					   
		   }		   
	       return;
		            
		}
	 
     }
     
    }	
    
    function getAddress(){
    	//读取用户IP地址
	 	var flag = false;
		$.ajax({
		   type: "GET",
		   url: "/ajax/ip",
		   timeout:5000,
		   success: function(data){
			   for(var i=0;i<allStations.length;i++){
			        if(data.city==allStations[i].name){			         
			            $("#from_station_cn").val(data.city);
			            $("#fromstation").val(allStations[i].pinyin);
			            flag = true;
			            break;
			        }
				}
				if(!flag){
					 $("#from_station_cn").val("上海");
					 $("#fromstation").val("shanghai");
				}
		   }
		});	
    }		
	
	//获取当前时间+2天
	function getNextDay(d){
        d = new Date(d).getTime();
        d = d + 2*1000*60*60*24;
        d = new Date(d).Format("yyyy-MM-dd");
        return d;      
    } 

	
	/**
	 * getDayOfWeek 返回星期
	 * @param {string} date 格式:"YYYY-MM-DD"
	 */
	function getDayOfWeek(date){
	    var nowDay;
	    if (date) {
	        var dayArray = date.split("-");
	        nowDay = new Date(parseInt(dayArray[0], 10), parseInt(dayArray[1], 10) - 1, parseInt(dayArray[2], 10));
	    } else {
	        nowDay = new Date();
	    }
	    
	    var day = nowDay.getDay();
	    var dayArray = ["星期天","星期一","星期二","星期三","星期四","星期五","星期六"];
	    return dayArray[day];
	}
	
	
	Date.prototype.Format = function(formatStr){   
	    var str = formatStr;   
	    str=str.replace(/yyyy|YYYY/,this.getFullYear());   
	    str=str.replace(/MM/,(this.getMonth()+1)>9?(this.getMonth()+1).toString():'0' + (this.getMonth()+1));   
	    str=str.replace(/dd|DD/,this.getDate()>9?this.getDate().toString():'0' + this.getDate());   
	    return str;   
	}   
</script>
<div class="hh_cooperate" id="cooperateDiv">
	    <p><b>友情链接：</b><span>
	                    <a href="http://www.lvmama.com/lvyou/guide/2015-1208-199837.html" target="_blank" hidefocus="false">查看更多</a>
	    </span></p>
</div>



<div class="complete_box" style="display: none;"><ul class="complete_list"></ul></div><div class="complete_box_hotel hotelDestBox" style="display: none;"></div><div class="complete_box_hotel hotelKeywordBox" style="display: none;"></div><div class="complete_error_tips" style="display: none;"><span>找不到目的地：</span><span class="word"></span><i>×</i></div><div class="app_right"> <a href="http://m.lvmama.com/download?ch=xuanfu" class="app_href" target="_blank"></a> <a href="javascript:;" class="app_close"></a> </div><a id="goTopBtn" target="_self" href="javascript:;" title="返回顶部"></a><a href="http://www.lvmama.com/userCenter/user/transItfeedBack.do" target="_blank" id="Feedback" title="意见反馈"></a><div class="complete-wrap destinationBox" style="display: none;"></div><div class="des_error_tips" style="display: none;"><span>没有找到含“</span><span style="color: rgb(238, 51, 136); font-weight: bold;" class="word"></span><span>”的城市</span></div></body>
</html>
