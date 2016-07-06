<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><script src="adv.dat" async="" type="text/javascript"></script><script src="/home/other/presadva.dat" async="" type="text/javascript"></script><script src="detect.json" id="_1467185704784_352"></script><script src="/home/js/v.js" charset="utf-8"></script><script src="/home/js/a.js" async="" type="text/javascript"></script><script src="/home/js/mv.js" async="" type="text/javascript"></script><script src="/home/js/mba.js" async="" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<title>驴妈妈登录</title>
	
	
	
<script src="/home/js/fm.js" async="" type="text/javascript"></script><script src="/home/js/push.js"></script><script src="/home/js/fx.js" async="" type="text/javascript"></script><script src="/home/js/mvl.js" async="" type="text/javascript"></script><script src="/home/js/hma.js"></script><script src="/home/js/90409730.js" type="text/javascript" language="javascript"></script><script src="/home/js/dispatcher-v3.js" type="text/javascript" language="javascript"></script><script type="text/javascript" src="/home/js/bcore.min.js"></script><script type="text/javascript" src="/home/js/yahoo-min.js"></script><script type="text/javascript" src="/home/js/cp-v3.js"></script><script charset="utf-8" src="/home/other/StdID.do" id=""></script><script type="text/javascript" src="/home/js/json-min.js"></script><script charset="utf-8" src="/home/other/PageView.do"></script>
<link rel="stylesheet" type="text/css" href="/home/css/login.css" media="all">
</head>

<body><div style="position: absolute; bottom: 0px;"><object type="application/x-shockwave-flash" wmode="transparent" data="/home/other/clear.swf" id="fmFlash" height="1" width="1"><param name="movie" value="/clear.swf?v1=2"><param name="allowScriptAccess" value="always"><param name="flashVars" value="sessionId=403e3342-dd98-459d-a284-de4b0b3709ef_13613899&amp;partnerCode=lvmama&amp;serviceUrl=fp.fraudmetrix.cn"></object></div>
<script src="/home/js/adv.js"></script><script src="/home/js/eluminate.js"></script>
<script src="/home/js/coremetrics-initalize.js"></script>
<script>_LVMAMA_COREMETRICS.init(document.domain);</script>

<!-- 头部-->
<div class="login_top">
			<h1 class="lv_logo"><a href="http://www.zzz.com/">驴妈妈旅游网</a></h1>
            <h2 class="lv_logo_keywords">登录中心</h2>
			<span class="login_hotline">1010-6060</span>
		</div>
<!-- 头部结束-->

<!-- 主体-->
<div class="login-wrap">
	<div class="login-box clearfix">
    	<div class="user-box">
        	<ul class="tab clearfix">
            	<li class="left active">普通登录</li>
                <li class="right">手机动态密码登录</li>
            </ul>
            <!-- 普通登录-->
             <span>&nbsp;&nbsp;&nbsp;<font color="red"><b>{{ session("info") }}</b></font></span>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>&nbsp;&nbsp;&nbsp;<font color="red"><b>{{ $error }}</b></font></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="content" style="display: block;">
            	<ul class="ipt-box clearfix">
            		<form method="post" id="loginform" name="login_form" action="/home/User/login">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
	            		<li>
	                    	<input value="" class="user-ipt" name="phone" id="usernameOrNum" type="text">
                                   
                                    <p style="display: none; background-image: none;" id="userNameTips" class="name">邮箱/手机号/用户名/会员卡</p>
                               </li>
	                	<li class="pswd">
	                    	<input value="" class="user-ipt" name="password" id="passwordNum" type="password">
	                        <p style="display: none; background-image: none;" id="passwdTips" class="passwd">请输入密码</p>
	                        <!-- 报错-->
	                        <div class="validateErrorTip">
	                            <div class="validate-error-arrowR"><em>◆</em><i>◆</i></div>
	                            <div class="validateContent">请输入密码</div>
	                        </div>
	                    	<!-- 报错结束-->
	                     </li>
	                    <li class="forget_pw clearfix"><span class="check-box fl"><input name="remPassWord" checked="" class="check" value="11" type="checkbox">记住密码30天</span><a href="http://login.lvmama.com/nsso/findpass/index.do" class="link fr">忘记密码？</a></li>
	                    <li class="last">
                                
                                <input type="submit" class="loing-btn" id="loginButton" value="登录" />
	                    </li>	               
	            	</form>
                </ul>
                <p class="lv-member">还不是驴妈妈会员？<a href="/zhuce" class="link">免费注册</a></p>
 
            </div>
            <!-- 普通登录结束-->
            <!-- 手机验证登录-->
  
            <!-- 手机验证登录结束-->
           
        </div>
        
    </div>
   
	<ul class="login-main-box" style="display:block;"><li><img src="/home/img/dl-hyzb.jpg" height="520" width="1920"></li></ul>

  
</div>
<!-- 主体结束-->
<script src="/home/js/footer.js"></script><!-- 公共底部  --><!-- footer\ --><div class="wrap" style="clear: both;"><a class="public_ft" href="http://www.lvmama.com/public/user_security" target="_blank"><ul class="public_ft_list"><li><i class="ft_ioc1"></i><strong>价格保证</strong>同类产品，保证低价</li><li><i class="ft_ioc2"></i><strong>退订保障</strong>因特殊情况影响出行，保证退订</li><li><i class="ft_ioc3"></i><strong>救援保障</strong>旅途中遇意外情况，保证援助</li><li><i class="ft_ioc4"></i><strong>7x24小时服务</strong>快速响应，全年无休</li></ul></a></div><!-- copyright\ --><div class="lv-footer clearfix wrap" style="margin: 0px auto;">    <p class="footer-link">       <a href="http://www.lvmama.com/public/about_lvmama" rel="nofollow">关于我们</a> |        <a href="http://www.lvmama.com/public/lianxi_us" rel="nofollow">联系我们</a> |        <a href="http://www.lvmama.com/public/site_map">网站地图</a> |        <a href="http://hotels.lvmama.com/brand/">酒店品牌</a> |        <a href="http://hotels.lvmama.com/area/">酒店查询</a> |        <a href="http://www.lvmama.com/public/help" rel="nofollow">帮助中心</a> |        <a href="http://www.lvmama.com/public/links">友情链接</a> |        <a href="http://www.lvmama.com/public/jobs" rel="nofollow">诚聘英才</a> |    <a href="http://www.lvmama.com/public/zizhi_lvmama" rel="nofollow">旅游度假资质</a> |        <a href="http://www.lvmama.com/userCenter/user/transItfeedBack.do" rel="nofollow">意见反馈</a> |        <a rel="nofollow" href="http://www.lvmama.com/public/adwy">广告业务</a>    </p>    <p class="lv-copyright">Copyright © 2016 www.lvmama.com. 上海景域文化传播股份有限公司版权所有　<a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">沪ICP备13011172号-3</a>　增值电信业务经营许可证编号：<a rel="nofollow" href="http://pic.lvmama.com/img/ICP.jpg" target="_blank">沪B2-20100030</a></p>   <div class="lv-safety">      <a class="safety2" target="_blank" rel="nofollow" title="经营性网站备案信息" href="http://www.miibeian.gov.cn/"></a>      <a class="safety3" target="_blank" rel="nofollow" title="网络110报警服务" href="http://www.cyberpolice.cn/"></a>      <a class="safety4" target="_blank" rel="nofollow" title="支付宝特约商家" href="https://www.alipay.com/aip/aip_validate_list.htm?trust_id=AIP0102495"></a>      <a class="safety5" target="_blank" rel="nofollow" title="AAA级信用企业" href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1664396140"></a>      <a class="safety6" target="_blank" rel="nofollow" title="上海工商" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20110930103539539"></a>      <a class="safety7" target="_blank" rel="nofollow" title="可信网站" href="https://ss.cnnic.cn/verifyseal.dll?sn=2010101800100002662&amp;ct=df&amp;pa=590007"></a>      <a class="safety8" target="_blank" rel="nofollow" title="诚信认证示范企业" href="https://credit.szfw.org/CX20160614015657160455.html" id="___szfw_logo___" hidefocus="false"></a>      <a class="safety9" target="_blank" rel="nofollow" title="网络社会征信网" href="http://www.zx110.org/"></a>      <a class="safety10" target="_blank" rel="nofollow" title="360网站安全检测" href="http://webscan.360.cn/"></a>      <a class="safety11" target="_blank" rel="nofollow" title="网监安全" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010702001030"></a>      <a class="safety13" target="_blank" rel="nofollow" title="举报中心" href="http://www.shjbzx.cn/"></a>   </div></div><!-- //footer --><!-- 公共底部结束  -->
<script src="/home/other/index.php"></script>
<script type="text/javascript" src="/home/js/login_v2.js"></script>
<script src="/home/js/ga.js" async="" type="text/javascript"></script><script src="/home/js/lvmama.js" charset="utf-8" async="" type="text/javascript"></script><script type="text/javascript" src="/home/js/losc.js"></script>

<script type="text/javascript">
        document.domain='lvmama.com';
        function union_login(url){ 
            window.open(url); 
        }
		function agreement(url){
			window.open(url);
		}
</script>

<script type="text/javascript">
		function refreshCheckCode(s) {
		    var elt = document.getElementById(s);
		    elt.src = elt.src + "?_=" + (new Date).getTime();
		}
	
              document.getElementById("usernameOrNum").value = '18732991130';
			        	  
             document.getElementById("passwordNum").value = 'XDLlamp142';
			        	 

</script>
<!-- 接入同盾 -->
<script type="text/javascript">
    (function() {
        _fmOpt = {
            partner: 'lvmama',
            appName: 'lvmama_web',
            token: '403e3342-dd98-459d-a284-de4b0b3709ef_13613899',
            fpHost: 'https://fp.fraudmetrix.cn',
            staticHost: 'static.fraudmetrix.cn',
            tcpHost: 'fp.fraudmetrix.cn',
            wsHost: 'fp.fraudmetrix.cn:9090'
        };
        var cimg = new Image(1,1);
        cimg.onload = function() {
            _fmOpt.imgLoaded = true;
        };
        cimg.src = "https://fp.fraudmetrix.cn/fp/clear.png?partnerCode=lvmama&appName=lvmama_web&tokenId=" + _fmOpt.token;
        var fm = document.createElement('script'); fm.type = 'text/javascript'; fm.async = true;
        fm.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'static.fraudmetrix.cn/fm.js?ver=0.1&t=' + (new Date().getTime()/3600000).toFixed(0);
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(fm, s);
    })();
</script>
<script>
	cmCreatePageviewTag("登录页面", "LoginPage", null, null,"-_--_--_--_--_-其他页面");
</script>

<div class="complete_box" style="display: none;"><ul class="complete_list"></ul></div><div class="complete_box_hotel hotelDestBox" style="display: none;"></div><div class="complete_box_hotel hotelKeywordBox" style="display: none;"></div><div class="complete_error_tips" style="display: none;"><span>找不到目的地：</span><span class="word"></span><i>×</i></div><div class="app_right"> <a href="http://m.lvmama.com/download?ch=xuanfu" class="app_href" target="_blank"></a> <a href="javascript:;" class="app_close"></a> </div><a id="goTopBtn" target="_self" href="javascript:;" title="返回顶部"></a><a href="http://www.lvmama.com/userCenter/user/transItfeedBack.do" target="_blank" id="Feedback" title="意见反馈"></a><iframe src="/home/other/index_1a.html" style="height: 0px; width: 0px; float: none; position: absolute; overflow: hidden; z-index: 333333; margin: 0px; padding: 0px; border: 0px none; background: transparent none repeat scroll 0% 0%;" scrolling="no" id="add_speed_bfd" allowtransparency="true" frameborder="0"></iframe></body>
</html>
