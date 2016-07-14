<!DOCTYPE html>
<html>
<head><script src="adv.dat" async="" type="text/javascript"></script><script src="/home/other/presadva.dat" async="" type="text/javascript"></script><script src="/home/js/v.js" charset="utf-8"></script><script src="/home/js/a.js" async="" type="text/javascript"></script><script src="/home/js/mv.js" async="" type="text/javascript"></script><script src="/home/js/mba.js" async="" type="text/javascript"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>订单支付_驴妈妈旅游网</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="驴妈妈支付,驴妈妈旅游网">
	<meta name="description" content="驴妈妈支付">
	<meta http-equiv="Pragma" content="no-cache">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	
	<script src="/home/js/push.js"></script><script src="/home/js/fx.js" async="" type="text/javascript"></script><script src="/home/js/mvl.js" async="" type="text/javascript"></script><script src="/home/js/hm10.js"></script><script src="/home/js/mvl.js" async="" type="text/javascript"></script><script src="/home/other/zhifu.php"></script>
	<script src="/home/js/eluminate.js"></script>
	<script src="/home/js/coremetrics-initalize.js"></script>
	<script>_LVMAMA_COREMETRICS.init(document.domain);</script><script src="/home/js/head.js"></script><script src="/home/js/90409730.js" type="text/javascript" language="javascript"></script><script src="/home/js/dispatcher-v3.js" type="text/javascript" language="javascript"></script><script type="text/javascript" src="/home/js/yahoo-min.js"></script><script type="text/javascript" src="/home/js/cp-v3.js"></script><script type="text/javascript" src="/home/js/json-min.js"></script>
<script src="/home/js/j_REGISTER.js" async="" type="text/javascript"></script><script charset="utf-8" src="StdID.do" id=""></script><script type="text/javascript" src="/home/js/bcore.min.js"></script><script charset="utf-8" src="PageView.do"></script>
<link rel="stylesheet" type="text/css" href="/home/css/zhifu.css" media="all">
</head>
<body><script src="/home/js/adv.js"></script><script src="cvt.dat"></script>
	<div class="order-header wrap">
	    <div class="header-inner">
		    <a class="logo" href="http://www.lvmama.com/">自助游天下 就找驴妈妈</a>
	    	
	        
	        <p class="welcome">您好，<b>lv1873299tnpt</b> </p>
	        
		    <p class="info">24小时服务热线：<strong>1010-6060</strong></p>
	    </div>
	</div>
	
	<div class="main_box">
		<div class="wrap">
			<ol class="ui-step ui-step-3">
	            <li class="ui-step1 ui-step-start">
	                <div class="ui-step-arrow">
	                    <i class="arrow_r1"></i>
	                    <i class="arrow_r2"></i>
	                </div>
	                <span class="ui-step-text">填写订单</span>
	            </li>
	            <li class="ui-step2 ui-step-active">
	                <div class="ui-step-arrow">
	                    <i class="arrow_r1"></i>
	                    <i class="arrow_r2"></i>
	                </div>
	                <span class="ui-step-text">在线支付</span>
	            </li>
	            <li class="ui-step3 ui-step-end ">
	                <div class="ui-step-arrow">
	                    <i class="arrow_r1"></i>
	                    <i class="arrow_r2"></i>
	                </div>
	                <span class="ui-step-text">预订成功</span>
	            </li>
	        </ol>
	        
	        <!-- 支付产品信息 开始 -->
	        <div class="pay_top">
	            <div class="pay_top_info">
	                <div class="pay_info_tit">
	                    <span class="pay_info_btn js_info_show"><b>订单详情</b><i><samp>◆</samp><dfn>◆</dfn></i></span>
	                    	应付金额
	                    	<span class="pay_price">
		                    	<small>¥</small>&nbsp;{{$xq->price}}
		                    	
		                    	
	                    	</span>
	                </div>
	                <div class="pay_info_box js_info_box" style="display: none;">
	                    <p><b>订单号：</b>{{$dingdan->id}}</p>
	                    <p><b>产品名称：</b>{{$xq->title}}</p>
	                    
		                    <p><b id="">游玩时间：</b>{{$dingdan->chufa_date}}</p>
	                    
	                </div>
	                <div class="pay_info_box">
	                    <p><b>订单金额：</b><small>¥</small>&nbsp;<span class="c_333">{{$xq->price}}</span></p>
	                    <p><b>剩余支付时间：</b><span class="pay_countdown js_countdown" data-time="86396705"><i>0</i>天<i>23</i>时<i>59</i>分<i>30</i>秒</span></p>
	                </div>
					
	            </div>
	            <div class="pay_top_zfb">
	                
		                <!-- <iframe src="/home/img/weixin.png" id="alipayIframe" name="alipayIframe" scrolling="no" style="height: 157px; overflow: hidden; margin-top: 18px; margin-left: 18px;" frameborder="0" height="157px" width="157px"></iframe> -->
	                <img src="/home/img/weixin.png">
	                
	                <p>支付宝扫码支付</p>
	            </div>
	        </div><!-- 支付产品信息 结束 -->
	        
	        <!-- 白条支付 -->
			
	        <!-- 白条支付 -->
			
			<!-- 支付tab 开始 -->
        	<div class="pay_box">
        		<ul class="pay_type_tab">
        			
		                <li class="active" name="ONLINE_PAY">
		                	网银支付<i class="pay_icon pay_icon_tj"></i>
		                </li>
        			
		                <li name="WX_PAY">
		                	微信支付<i class="pay_icon pay_icon_tj"></i>
		                </li>
        			
		                <li name="PAY_PLATFORM">
		                	支付平台<i></i>
		                </li>
        			
		                <li name="TELE_PAY">
		                	电话支付<i></i>
		                </li>
        			
		                <li name="LV_INSTALMENT">
		                	小驴分期<i></i>
		                </li>
        			
		                <li name="ONLINE_PREAUTH">
		                	在线预授权<i></i>
		                </li>
        			
		                <li name="INSTALMENT_PAY">
		                	分期支付<i></i>
		                </li>
        			
	            </ul>
	            
	            
   					<div style="display: block;" class="pay_type_box">
	            	<!-- 网银支付begin -->
	            	
	            		<dl class="pay_type_ka">
		                    <dt>支持信用卡和储蓄卡</dt>
		                    <dd>
		                        <ul class="bank_list clearfix js_bank_list" id="ONLINE_PAY_UL">
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="beforeSubmitGateway(this,'icbc')" paymentgatewayconfigid="100020"><i class="bank icbc" title="工商银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="beforeSubmitGateway(this,'preabc')" paymentgatewayconfigid="100021"><i class="bank abc" title="中国农业银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="beforeSubmitGateway(this,'cmb')" paymentgatewayconfigid="100023"><i class="bank cmb" title="招商银行"></i></li>  
						            		
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="alipayWithBank(this,'99bill', 'BOC')" paymentgatewayconfigid="100024"><i class="bank boc" title="中国银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="beforeSubmitGateway(this,'comm')" paymentgatewayconfigid="100025"><i class="bank comm" title="交通银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="alipayWithBank(this,'99bill', 'CEB')" paymentgatewayconfigid="100026"><i class="bank ceb" title="光大银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="beforeSubmitGateway(this,'spdb')" paymentgatewayconfigid="100027"><i class="bank spdb" title="上海浦东发展银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="beforeSubmitGateway(this,'gfbPay')" paymentgatewayconfigid="100028"><i class="bank cgb" title="广发银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="beforeSubmitGateway(this,'citicWebpay')" paymentgatewayconfigid="100029"><i class="bank ecitic" title="中信银行_WEB"></i></li>  
						            		
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="alipayWithBank(this,'99bill', 'CIB')" paymentgatewayconfigid="100030"><i class="bank cib" title="兴业银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="beforeSubmitGateway(this,'cmbcpay')" paymentgatewayconfigid="100031"><i class="bank cmbc" title="民生银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="alipayWithBank(this,'99bill', 'BOB')" paymentgatewayconfigid="100032"><i class="bank bjbank" title="北京银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="alipayWithBank(this,'99bill', 'SHB')" paymentgatewayconfigid="100034"><i class="bank shbank" title="上海银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="alipayWithBank(this,'99bill', 'BJRCB')" paymentgatewayconfigid="100035"><i class="bank bjrcb" title="北京农村商业银行"></i></li>  
						            		
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="alipayWithBank(this,'99bill', 'PAB')" paymentgatewayconfigid="100036"><i class="bank pingan" title="平安银行"></i></li>  
						            		
						            	
						            
						            	
						            
						            	
						            		
						            		
						            		
						            		
						            		
						            		
						            		
					                            <li clickevent="alipayWithBank(this,'99bill', 'PSBC')" paymentgatewayconfigid="100038"><i class="bank psbc" title="中国邮政储蓄银行"></i></li>  
						            		
						            	
						            
						            	
						            
		                        </ul>
		                    </dd>
	            		</dl>
	            		<div class="bank_gd clearfix">
		                    <span class="pay_info_btn js_bank_gd"><b>更多银行</b><i><samp>◆</samp><dfn>◆</dfn></i></span>
		                </div>
		                <a class="btn btn-lg btn-orange btn_next" onclick="selectBanks(this, 'ONLINE_PAY_UL')" href="/yizhifu?id={{$dingdan->id}}">下一步</a>
	            	
	            	<!-- 网银支付end -->
	            	
	            	<!-- 微信支付begin -->
	            	
	            	<!-- 微信支付end -->
	            	
	            	<!-- 平台支付begin -->
	            	
	            	<!-- 平台支付end -->

	            	<!-- 电话支付begin -->
	            	
	            	<!-- 电话支付end -->
	            	
	            	<!-- 小驴分期begin -->
	            	
	            	<!-- 小驴分期end -->

	            	<!-- 在线预授权begin -->
	            	
	            	<!-- 在线预授权end -->

	            	<!-- 分期支付begin -->
	            	
	            	<!-- 分期支付end -->
	            	
	            	</div>
	            
   					<div class="pay_type_box">
	            	<!-- 网银支付begin -->
	            	
	            	<!-- 网银支付end -->
	            	
	            	<!-- 微信支付begin -->
	            	
	            		<div class="pay_type_wx">
		                    <div class="type_wx_tips_img"></div>
		                    <p class="type_wx_text">提示：点击“下一步”，打开手机微信“扫一扫”，扫描二维码进行支付。</p>
		                </div>
		                <a class="btn btn-lg btn-orange btn_next js_weixin" onclick="selectBanks(this, 'WEIXIN_PLATFORM_UL')">下一步</a>
	            	
	            	<!-- 微信支付end -->
	            	
	            	<!-- 平台支付begin -->
	            	
	            	<!-- 平台支付end -->

	            	<!-- 电话支付begin -->
	            	
	            	<!-- 电话支付end -->
	            	
	            	<!-- 小驴分期begin -->
	            	
	            	<!-- 小驴分期end -->

	            	<!-- 在线预授权begin -->
	            	
	            	<!-- 在线预授权end -->

	            	<!-- 分期支付begin -->
	            	
	            	<!-- 分期支付end -->
	            	
	            	</div>
	            
   					<div class="pay_type_box">
	            	<!-- 网银支付begin -->
	            	
	            	<!-- 网银支付end -->
	            	
	            	<!-- 微信支付begin -->
	            	
	            	<!-- 微信支付end -->
	            	
	            	<!-- 平台支付begin -->
	            	
	            		<dl class="pay_type_ka pay_type_pingtai">
		                    <dd>
		                        <ul class="bank_list clearfix js_bank_list" id="PAY_PLATFORM_UL">
		                            
						            	
						            		<!-- 屏蔽银联支付渠道的长隆产品 -->
							            	
							            	
							            	
							            		<li clickevent="beforeSubmitGateway(this,'alipay')" paymentgatewayconfigid="100041"><i class="bank alipay" title="支付宝"></i></li>
							            	
						            	
		                            
						            	
		                            
						            	
		                            
						            	
						            		<!-- 屏蔽银联支付渠道的长隆产品 -->
							            	
							            	
							            	
							            		<li clickevent="beforeSubmitWeixinWebGateway(this,'weixinUnifiedOrderWeb')" paymentgatewayconfigid="100000"><i class="bank weixinpay" title="微信WEB扫码支付"></i></li>
							            	
						            	
		                            
						            	
		                            
						            	
						            		<!-- 屏蔽银联支付渠道的长隆产品 -->
							            	
							            	
							            	
							            		<li clickevent="beforeSubmitGateway(this,'unionpayDirect')" paymentgatewayconfigid="100047"><i class="bank unionpay-quick" title="银联快捷"></i></li>
							            	
						            	
		                            
						            	
		                            
						            	
						            		<!-- 屏蔽银联支付渠道的长隆产品 -->
							            	
							            	
							            	
							            		<li clickevent="beforeSubmitGateway(this,'alipayDirectpay')" paymentgatewayconfigid="100048"><i class="bank alipay-quick" title="支付宝快捷"></i></li>
							            	
						            	
		                            
						            	
		                            
						            	
		                            
						            	
						            		<!-- 屏蔽银联支付渠道的长隆产品 -->
							            	
							            	
							            	
							            		<li clickevent="beforeSubmitGateway(this,'unionpay')" paymentgatewayconfigid="100039"><i class="bank unionpay2" title="银联"></i></li>
							            	
						            	
		                            
		                        </ul>
		                    </dd>
		                </dl>
		                <a class="btn btn-lg btn-orange btn_next" onclick="selectBanks(this, 'PAY_PLATFORM_UL')">下一步</a>
		                
	            	
	            	<!-- 平台支付end -->

	            	<!-- 电话支付begin -->
	            	
	            	<!-- 电话支付end -->
	            	
	            	<!-- 小驴分期begin -->
	            	
	            	<!-- 小驴分期end -->

	            	<!-- 在线预授权begin -->
	            	
	            	<!-- 在线预授权end -->

	            	<!-- 分期支付begin -->
	            	
	            	<!-- 分期支付end -->
	            	
	            	</div>
	            
   					<div class="pay_type_box">
	            	<!-- 网银支付begin -->
	            	
	            	<!-- 网银支付end -->
	            	
	            	<!-- 微信支付begin -->
	            	
	            	<!-- 微信支付end -->
	            	
	            	<!-- 平台支付begin -->
	            	
	            	<!-- 平台支付end -->

	            	<!-- 电话支付begin -->
	            	
	            		<p><img src="/home/img/paytype2.png" alt="电话支付"></p>
		                <p class="typetit">以下银行的<span class="orange">借记卡</span>，支持电话支付，无需开通网银也能支付：<span class="orange">（单笔及日累计额度均为4万）</span></p>
		                <ul class="bank_list clearfix">
		                    <li><label class="radio inline"><i class="bank cmb" title="招商银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank ccb" title="中国建设银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank boc" title="中国银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank icbc" title="中国工商银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank comm" title="交通银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank cmbc" title="中国民生银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank ceb" title="中国光大银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank pingan" title="平安银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank cgb" title="广发银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank shbank" title="上海银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank spdb" title="浦发银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank cib" title="兴业银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank sdb" title="深圳发展银行"></i></label></li>
		                </ul>
		                <p class="typetit">以下银行的<span class="orange">信用卡</span>，支持电话支付，无需开通网银也能支付：<span class="orange">（单笔及日累计额度均为4万）</span></p>
		                <ul class="bank_list clearfix">
		                    <li><label class="radio inline"><i class="bank icbc" title="中国工商银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank ccb" title="中国建设银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank ceb" title="中国光大银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank shbank" title="上海银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank pingan" title="平安银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank sdb" title="深圳发展银行"></i></label></li>
		                    <li><label class="radio inline"><i class="bank ecitic" title="中信银行"></i></label></li>
		                </ul>	
	            	
	            	<!-- 电话支付end -->
	            	
	            	<!-- 小驴分期begin -->
	            	
	            	<!-- 小驴分期end -->

	            	<!-- 在线预授权begin -->
	            	
	            	<!-- 在线预授权end -->

	            	<!-- 分期支付begin -->
	            	
	            	<!-- 分期支付end -->
	            	
	            	</div>
	            
   					<div class="pay_type_box">
	            	<!-- 网银支付begin -->
	            	
	            	<!-- 网银支付end -->
	            	
	            	<!-- 微信支付begin -->
	            	
	            	<!-- 微信支付end -->
	            	
	            	<!-- 平台支付begin -->
	            	
	            	<!-- 平台支付end -->

	            	<!-- 电话支付begin -->
	            	
	            	<!-- 电话支付end -->
	            	
	            	<!-- 小驴分期begin -->
	            	
	            		


<div class="tabcon">
    
        <div class="xhcontent">
            <div class="tiptext tip-warning">
                <p class="tiptext-fq JS_moreBox">1.年龄20-60周岁（持有国内身份证的中国公民），无不良信用记录;<br>2.每笔订单出行人不超过6人（含6人），且贷款申请人必须在出行人之列（申请额度最高支持5万）;<br>3.贷款申请人需提供清晰的本人手持身份证照片和身份证正面照片,
                    并提供可使用的银行卡借记卡;<br>4.2小时内审核订单，通过后支付成功；如不通过，请使用其他方式支付；审批时间为每日9:30-21:30（20:00后提交订单，可能延后到次日审批）;<br>5.支持借记卡：工商银行，农业银行，中国银行，建设银行，邮储银行，中信银行，光大银行，兴业银行，平安银行<br>6.支持申请区域：上海、浙江、北京、江苏、苏州、江西、重庆、四川、广东、贵州、云南、湖北、安徽、河北、河南、山东、内蒙古、深圳
                    <a href="javascript:;" class="JS-openMore tiptext-openMore">查看银行及区域<span></span></a>
                </p>
            </div>
            
            <label class="radio inline new_pay_posBox fq-pay-label">
                <input name="instalbankpay" class="input-radio" checked="checked" type="radio">
                <i title="中银消费信贷" class="bank zyxf"></i>
            </label>
            
            <div class="poptip tip-light poptip-default fq-poptip">
                <div class="tip-arrow tip-arrow-12">
                    <em>◆</em> <i>◆</i>
                </div>
                
                    <div class="tip-content tip-xlfq">
                            
                                <label>
                                    <input clickevent="beforeSubmitGateway(this,'boccredit')" name="bankpay" checked="checked" value="3,N" title="中银消费信贷" type="radio">3期，每期金额为<dfn>¥19.33</dfn>，总记约为<dfn>¥58.00</dfn>，手续费<dfn>¥0.00</dfn>
                                </label>
                            
                                <label>
                                    <input clickevent="beforeSubmitGateway(this,'boccredit')" name="bankpay" value="6,N" title="中银消费信贷" type="radio">6期，每期金额为<dfn>¥9.67</dfn>，总记约为<dfn>¥58.00</dfn>，手续费<dfn>¥0.00</dfn>
                                </label>
                            
                                <label>
                                    <input clickevent="beforeSubmitGateway(this,'boccredit')" name="bankpay" value="9,N" title="中银消费信贷" type="radio">9期，每期金额为<dfn>¥7.02</dfn>，总记约为<dfn>¥63.22</dfn>，手续费<dfn>¥5.22</dfn>
                                </label>
                            
                                <label>
                                    <input clickevent="beforeSubmitGateway(this,'boccredit')" name="bankpay" value="12,N" title="中银消费信贷" type="radio">12期，每期金额为<dfn>¥5.41</dfn>，总记约为<dfn>¥64.96</dfn>，手续费<dfn>¥6.96</dfn>
                                </label>
                            
                        <div class="tip-xlfqText clearfix"><span class="tip-icon tip-icon-default"></span>使用中银消费分期支付您的订单，此处显示每期还款金额是根据您的订单估算得出的金额，中银消费有权决定是否接受您的分期付款申请，实际支付金额以中银消费官网显示金额为准。</div>
                    </div>
                
            </div>
        </div>
    
    
    
        <div class="order-btn">
            <button class="btn btn-lg btn-orange btn_next mt20" onclick="selectBanks(this, 'instalmentPay')">&nbsp;&nbsp;下一步&nbsp;&nbsp;</button>
        </div>
    
</div>

	            	
	            	<!-- 小驴分期end -->

	            	<!-- 在线预授权begin -->
	            	
	            	<!-- 在线预授权end -->

	            	<!-- 分期支付begin -->
	            	
	            	<!-- 分期支付end -->
	            	
	            	</div>
	            
   					<div class="pay_type_box">
	            	<!-- 网银支付begin -->
	            	
	            	<!-- 网银支付end -->
	            	
	            	<!-- 微信支付begin -->
	            	
	            	<!-- 微信支付end -->
	            	
	            	<!-- 平台支付begin -->
	            	
	            	<!-- 平台支付end -->

	            	<!-- 电话支付begin -->
	            	
	            	<!-- 电话支付end -->
	            	
	            	<!-- 小驴分期begin -->
	            	
	            	<!-- 小驴分期end -->

	            	<!-- 在线预授权begin -->
	            	
	            		
	            		
	            			<p>当前产品不支持在线预授权支付，请选用其他支付方式</p>
	            		
	            	
	            	<!-- 在线预授权end -->

	            	<!-- 分期支付begin -->
	            	
	            	<!-- 分期支付end -->
	            	
	            	</div>
	            
   					<div class="pay_type_box">
	            	<!-- 网银支付begin -->
	            	
	            	<!-- 网银支付end -->
	            	
	            	<!-- 微信支付begin -->
	            	
	            	<!-- 微信支付end -->
	            	
	            	<!-- 平台支付begin -->
	            	
	            	<!-- 平台支付end -->

	            	<!-- 电话支付begin -->
	            	
	            	<!-- 电话支付end -->
	            	
	            	<!-- 小驴分期begin -->
	            	
	            	<!-- 小驴分期end -->

	            	<!-- 在线预授权begin -->
	            	
	            	<!-- 在线预授权end -->

	            	<!-- 分期支付begin -->
	            	
	            		


<div class="tabcon credit-stages">
	
	
		 <p>当前产品不支持信用卡分期支付，请选用其他支付方式</p>
	
</div>

	            	
	            	<!-- 分期支付end -->
	            	
	            	</div>
	            
        	</div>
        	
		</div>
	</div>
	
	
<!-- 预授权更多银行 -->
<div id="bankTipsLayer" class="hide">
    <div id="bankTipsLayerCase">
        <!--此处开始循环 -->
        <ul>
            <li>B-F</li>
            <li>G-H</li>
            <li>J-P</li>
            <li>Q-T</li>
            <li>W-Z</li>
        </ul>
        <ul>
            <li>包商银行</li>
            <li>贵阳银行</li>
            <li>江苏银行</li>
            <li>青海银行</li>
            <li>威海市商业银行</li>
        </ul>
        <ul>
            <li>长沙银行</li>
            <li>广州银行</li>
            <li>江苏省农村信用社联合社</li>
            <li>齐鲁银行</li>
            <li>潍坊银行</li>
        </ul>
        <ul>
            <li>常熟农村商业银行</li>
            <li>广州农村商业银行</li>
            <li>江阴农村商业银行</li>
            <li>上海农商银行</li>
            <li>温州银行</li>
        </ul>
        <ul>
            <li>承德银行</li>
            <li>赣州银行</li>
            <li>金华银行</li>
            <li>上饶银行</li>
            <li>乌鲁木齐商业银行</li>
        </ul>
        <ul>
            <li>成都农商银行</li>
            <li>哈尔滨银行</li>
            <li>九江银行</li>
            <li>顺德农村商业银行</li>
            <li>无锡农村商业银行</li>
        </ul>
        <ul>
            <li>重庆农村商业银行</li>
            <li>湖南省农村信用社联合社</li>
            <li>兰州银行</li>
            <li>台州银行</li>
            <li>宜昌市商业银行</li>
        </ul>
        <ul>
            <li>重庆银行</li>
            <li>徽商银行</li>
            <li>龙江银行</li>
            <li>&nbsp;&nbsp;</li>
            <li>银川市商业银行</li>
        </ul>
        <ul>
            <li>大连银行</li>
            <li>河北银行</li>
            <li>南昌银行</li>
            <li>&nbsp;&nbsp;</li>
            <li>尧都农村商业银行</li>
        </ul>
        <ul>
            <li>东营银行</li>
            <li>杭州银行股份有限公司</li>
            <li>南京银行</li>
            <li>&nbsp;&nbsp;</li>
            <li>鄞州银行</li>
        </ul>
        <ul>
            <li>福建农信社</li>
            <li>&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;</li>
            <li>浙江稠州商业银行</li>
        </ul>
        <ul>
            <li>鄂尔多斯银行</li>
            <li>&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;</li>
            <li>浙江泰隆商业银行</li>
        </ul>
        <ul>
            <li>&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;</li>
            <li>浙江民泰商业银行</li>
        </ul>
        <ul>
            <li>&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;</li>
            <li>吴江农村商业银行</li>
        </ul>
        <!--到此循环结束 -->
    </div>
</div>
	
	<!-- 弹框 -->
	<div class="pay_state" id="pay_state" style="display: none;">
	    <p>请在新开页面付款后选择：</p>
	    <div class="pay_state_btn">
	        <span class="btn btn-lg btn-orange" onclick="payOKButton()">已完成付款</span>
	        <span class="btn btn-lg btn-orange" onclick="payQuestionButton()">付款遇到问题</span>
	    </div>
	    <a href="#">&lt;&lt;返回重新选择支付方式</a>
	</div>

	<div class="pay_overtime" id="pay_overtime" style="display: none;">
	    <p><span class="tip-icon-big tip-icon-big-warning"></span>该笔订单支付超时，请重新下单！</p>
	</div>

	<div class="pay_repeat" id="pay_repeat" style="display: none;">
	    <p><span class="tip-icon-big tip-icon-big-warning"></span>该笔订单已支付成功！</p>
	</div>
	<!-- 弹框 -->
	
	<!--页面等待-->
	<div class="payWaiting" style="display: none;">
	<div class="windowBg"></div>
	<div class="winloading">
		<img style="vertical-align: middle;" src="/home/img/loadingGIF46px.gif" height="46" width="46">　
		<p class="mlv-load">正在支付,请稍后... </p>
	</div>
	</div>
	
	<form name="submit_vst_pay" method="post" id="submit_vst_pay" action="" target="_blank">
		<input name="objectName" value="北京怀柔白河峡谷漂流、青石岭短漂单人票" type="hidden">
		<input name="extParameters" id="extParameters" type="hidden">
	</form>
	<!-- 公共底部  --><!-- footer\ --><div class="wrap" style="clear: both;"><a class="public_ft" href="http://www.lvmama.com/public/user_security" target="_blank"><ul class="public_ft_list"><li><i class="ft_ioc1"></i><strong>价格保证</strong>同类产品，保证低价</li><li><i class="ft_ioc2"></i><strong>退订保障</strong>因特殊情况影响出行，保证退订</li><li><i class="ft_ioc3"></i><strong>救援保障</strong>旅途中遇意外情况，保证援助</li><li><i class="ft_ioc4"></i><strong>7x24小时服务</strong>快速响应，全年无休</li></ul></a></div><!-- copyright\ --><div class="lv-footer clearfix wrap" style="margin: 0px auto;">    <p class="footer-link">       <a href="http://www.lvmama.com/public/about_lvmama" rel="nofollow">关于我们</a> |        <a href="http://www.lvmama.com/public/lianxi_us" rel="nofollow">联系我们</a> |        <a href="http://www.lvmama.com/public/site_map">网站地图</a> |        <a href="http://hotels.lvmama.com/brand/">酒店品牌</a> |        <a href="http://hotels.lvmama.com/area/">酒店查询</a> |        <a href="http://www.lvmama.com/public/help" rel="nofollow">帮助中心</a> |        <a href="http://www.lvmama.com/public/links">友情链接</a> |        <a href="http://www.lvmama.com/public/jobs" rel="nofollow">诚聘英才</a> |    <a href="http://www.lvmama.com/public/zizhi_lvmama" rel="nofollow">旅游度假资质</a> |        <a href="http://www.lvmama.com/userCenter/user/transItfeedBack.do" rel="nofollow">意见反馈</a> |        <a rel="nofollow" href="http://www.lvmama.com/public/adwy">广告业务</a>    </p>    <p class="lv-copyright">Copyright © 2016 www.lvmama.com. 上海景域文化传播股份有限公司版权所有　<a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">沪ICP备13011172号-3</a>　增值电信业务经营许可证编号：<a rel="nofollow" href="http://pic.lvmama.com/img/ICP.jpg" target="_blank">沪B2-20100030</a></p>   <div class="lv-safety">      <a class="safety2" target="_blank" rel="nofollow" title="经营性网站备案信息" href="http://www.miibeian.gov.cn/"></a>      <a class="safety3" target="_blank" rel="nofollow" title="网络110报警服务" href="http://www.cyberpolice.cn/"></a>      <a class="safety4" target="_blank" rel="nofollow" title="支付宝特约商家" href="https://www.alipay.com/aip/aip_validate_list.htm?trust_id=AIP0102495"></a>      <a class="safety5" target="_blank" rel="nofollow" title="AAA级信用企业" href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1664396140"></a>      <a class="safety6" target="_blank" rel="nofollow" title="上海工商" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20110930103539539"></a>      <a class="safety7" target="_blank" rel="nofollow" title="可信网站" href="https://ss.cnnic.cn/verifyseal.dll?sn=2010101800100002662&amp;ct=df&amp;pa=590007"></a>      <a class="safety8" target="_blank" rel="nofollow" title="诚信认证示范企业" href="https://credit.szfw.org/CX20160614015657160455.html" id="___szfw_logo___" hidefocus="false"></a>      <a class="safety9" target="_blank" rel="nofollow" title="网络社会征信网" href="http://www.zx110.org/"></a>      <a class="safety10" target="_blank" rel="nofollow" title="360网站安全检测" href="http://webscan.360.cn/"></a>      <a class="safety11" target="_blank" rel="nofollow" title="网监安全" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010702001030"></a>      <a class="safety13" target="_blank" rel="nofollow" title="举报中心" href="http://www.shjbzx.cn/"></a>   </div></div><!-- //footer --><!-- 公共底部结束  -->
	<!-- js begin -->
	<script type="text/javascript">
		jQuery(function() {
			var alipayShowEnable = "true";
			if(alipayShowEnable) {
				alipayCode();//支付宝扫码支付前置
			}
			setInterval(checkAlipayStatus, 1000);
			/*游玩时间*/
			var visitTime = "20160827000000";
			visitTime = visitTime.substring(0,4) + "-" + visitTime.substring(4,6) + "-" + visitTime.substring(6,8);
			$("#visitTime").after(visitTime);
			/*游玩时间*/
			
			// 倒计时
		    $(".js_countdown").countdown({
		        format : "dd:hh:mm:ss",   // 时间格式 自定义倒计时类型 现支持 dd:hh:mm:ss(默认) hh:mm:ss dd:hh:mm mm:ss 四种格式
		        prezero : true,  // 前导零
		        effect : true,  // 支持自定义格式
		        overtips : '<span class="c_f60">该订单已过期</span>',  // 自定义结束提醒
		        timeauto : false,   // 默认不自适应格式
		        timediff : 0  , // 调整时间差，单位毫秒
		        overFn:function(){
		            //改变二维码
		            $('.pay_top_zfb').html('<img src="http://pic.lvmama.com/img/pay/v1/over_time_ewm.png" width="158" height="158"><p>支付宝扫码支付</p>');
		            //弹出提示
		            openNoTimeTip();
		        }
		    });
			
			/*cm代码部署*/
			cmCreatePageviewTag("VST支付", "Q0001");
			$.getJSON("http://login.lvmama.com/nsso/ajax/getUserNo.do?jsoncallback=?",function(req){
				var booker = "null";
				if(req.success){
					booker = req.result;
				}
				cmCreateShopAction9Tag("428689","北京怀柔白河峡谷漂流","1","5800",booker,"31020202","58.00", "景点门票");
				cmDisplayShops();
				cmCreateOrderTag("31020202","58.00","",booker);
			});
		});
		
		function alipayCode() {
			jQuery("#alipayIframe").attr("src","http://pay.lvmama.com/payment/pay/choosePay.do?paymentgateway=alipay&paymentGateWayConfigId=100041&payType=SINGLE&platFrom=domain&payPlatType=_third_plat_pay&objectId=31020202&amount=5800&objectType=ORD_ORDER&paymentType=PAY&waitPayment=1440&approveTime=20160630133542&visitTime=20160827000000&bizType=VST_ORDER&royaltyParameters=&signature=454B3325A5696A2DC520A5328FA74271&noCardFlag=&qr_pay_mode=4&qrcode_width=157");
		}
		
		//定时扫描，判定是否成功进行了支付宝支付
		function checkAlipayStatus() {
			//发送get请求
			var orderId=$("#orderId").val();
			$.get("remoting/alipayStatus.do?orderId=31020202&t="+( new Date() ).getTime().toString(), function(data) {
				//循环输出json数组
				var obj = eval('(' + data + ')');
				if(obj.success) {
					window.location.href = "http://pay.lvmama.com/payment/pay/alipaycallback.do?orderId=31020202&orderType=&objectId=31020202&bizType=VST_ORDER";
				}else {
					;
				}	
			});	
			//校验是否重复支付
			/*var basePh= 'http://pay.lvmama.com/payfront';
			$.ajax({
	            url: basePh + "/view/payRepeatCheck.do",
	            type: "post",
	            async:false,
	      	    dataType:"json", 
	            data: {
	            	"orderId": "31020202",
	                "approveTime": "20160630133542",
	                "waitPayment": "1440",
	                "orderFrom": "",
	                "bizType": "VST_ORDER"
	            },
	            success: function (data) {
	                if (data.jsonMap.status == "success") {
	                	//改变二维码
			            $('.pay_top_zfb').html('<img src="http://pic.lvmama.com/img/pay/v1/over_time_ewm.png" width="158" height="158"><p>支付宝扫码支付</p>');
			            //弹出提示
			            //openPayRepeatTip();
	                }
	            }
	        });*/
		}
		
		function selectBanks(form, ulId){
			if("instalmentPay" == ulId || "creditInstalmentPay" == ulId) {
				var bank = $('input:radio[name="bankpay"]:checked'); 
				var clickEvent=bank.attr("clickEvent");
				if(clickEvent!=null){
		       		eval("("+clickEvent+")");
				}else{
		   			alert("请选择支付方式");
				}
			} else if ("WEIXIN_PLATFORM_UL" == ulId) {
				beforeSubmitWeixinWebGateway(this, "weixinUnifiedOrderWeb", "");
			} else {
				var bank = $("#" + ulId + " li.active");    
				var clickEvent=bank.attr("clickEvent");
				if(clickEvent!=null){
		       		eval("("+clickEvent+")");
				}else{
		   			alert("请选择支付方式");
				}
			}
			btn_dsp();
		}
		
		function beforeSubmitGateway(a, gateway, noCardFlag){
			var basePh= 'http://pay.lvmama.com/payfront';		
	        var orderId= '31020202';		
	        var approveTime= '20160630133542';		
	        var waitPayment= '1440';
	        var orderFrom= '';
	        var bizType = 'VST_ORDER';

	        $.ajax({
	            url: basePh + "/view/payRepeatCheck.do",
	            type: "post",
	            async:false,
	      	    dataType:"json", 
	            data: {
	            	"orderId": orderId,
	                "approveTime": approveTime,
	                "waitPayment": waitPayment,
	                "orderFrom": orderFrom,
	                "bizType": bizType
	            },
	            success: function (data) {
	                if (data.jsonMap.status == "success") {
	                	openPayRepeatTip();
	                }else if(data.jsonMap.status == "fail"){
		 	    		if(data.jsonMap.waitTime == "0") {
		 	    			openNoTimeTip();
		 	    		} else {
		 	    			openwaitPayTip();
							var v= $('.pay_type_tab li.active');
							v = $("#"+v.attr("name")+"_UL li.active");
							if(v.length == 0) {
								v = $('input:radio[name="bankpay"]:checked');
							}
			 				$("#extParameters").val(v.val());
			 				if(gateway == "yeepayQuick") {
			 					document.getElementById("submit_vst_pay").action = 'http://10.9.1.24:8080/pet_payment/pay/'+gateway+'.do?objectId=31020202&amount=5800&objectType=ORD_ORDER&paymentType=PAY&waitPayment=1440&approveTime=20160630133542&visitTime=20160827000000&bizType=VST_ORDER&royaltyParameters=&signature=454B3325A5696A2DC520A5328FA74271&noCardFlag='+noCardFlag;
			 				} else {
				 	    		document.getElementById("submit_vst_pay").action = 'http://pay.lvmama.com/payment/pay/choosePay.do?paymentgateway='+gateway+'&paymentGateWayConfigId='+v.attr("paymentGateWayConfigId")+'&payType=SINGLE&platFrom=domain&payPlatType=_third_plat_pay&objectId=31020202&amount=5800&objectType=ORD_ORDER&paymentType=PAY&waitPayment=1440&approveTime=20160630133542&visitTime=20160827000000&bizType=VST_ORDER&royaltyParameters=&signature=454B3325A5696A2DC520A5328FA74271&noCardFlag='+noCardFlag;
			 				}
			 	    		document.getElementById("submit_vst_pay").submit();
		 	    		}
		 	    	 }
	            }
	        });
	 	}
		
		function beforeSubmitInstalmentGateway(a, gateway, noCardFlag){
	        var basePh= 'http://pay.lvmama.com/payfront';		
	        var orderId= '31020202';		
	        var approveTime= '20160630133542';		
	        var waitPayment= '1440';
	        var orderFrom= '';
	        var bizType = 'VST_ORDER';

	        $.ajax({
	            url: basePh + "/view/payRepeatCheck.do",
	            type: "post",
	            async:false,
	      	    dataType:"json", 
	            data: {
	            	"orderId": orderId,
	                "approveTime": approveTime,
	                "waitPayment": waitPayment,
	                "orderFrom": orderFrom,
	                "bizType": bizType
	            },
	            success: function (data) {
	                if (data.jsonMap.status == "success") {
		 	    	      	// 付款状态
	                		openPayRepeatTip();
		 	    	 }else if(data.jsonMap.status == "fail"){	 	    		
		 	    		if(data.jsonMap.waitTime == "0") {
		 	    			openNoTimeTip();
		 	    		} else {
		 	    			openwaitPayTip();
							var v= $('input[name=bankpay]:checked');//小驴分期选择class
			 				$("#extParameters").val(v.val());
							var instalment= $('input[name=bank-stages]:checked');//信用卡分期期数
				 	    	document.getElementById("submit_vst_pay").action = 'http://pay.lvmama.com/payment/pay/weijinPay.do?paymentgateway=' + gateway + '&paymentGateWayConfigId=' + v.attr("paymentGateWayConfigId") 
				 	    			+ '&payType=INSTALMENT&platFrom=domain&payPlatType=_third_plat_pay&objectId=31020202&amount=5800&objectType=ORD_ORDER&paymentType=PAY&waitPayment=1440&approveTime=20160630133542&visitTime=20160827000000&bizType=VST_ORDER&token=' + instalment.val()
				 	    			+ '&signature=454B3325A5696A2DC520A5328FA74271&noCardFlag=' + noCardFlag
				 	    			+ '&gatewaySysType=WEIJIN&pay_method_memo=' + v.attr("payMethodMemo") + '&paymentGateway=' + gateway;
			 	    		document.getElementById("submit_vst_pay").submit();
		 	    		}
		 	    	 }
	            }
	        });
	 	}
		
		function alipayWithBank(a, gateway, bankId){
	        var basePh= 'http://pay.lvmama.com/payfront';		
	        var orderId= '31020202';		
	        var approveTime= '20160630133542';		
	        var waitPayment= '1440';	
	        var orderFrom= '';
	        var bizType = 'VST_ORDER';

	        $.ajax({
	            url: basePh + "/view/payRepeatCheck.do",
	            type: "post",
	            async:false,
	      	    dataType:"json", 
	            data: {
	                "orderId": orderId,
	                "approveTime": approveTime,
	                "waitPayment": waitPayment,
	                "orderFrom": orderFrom,
	                "bizType": bizType
	            },
	            success: function (data) {
	                if (data.jsonMap.status == "success") {
	                	openPayRepeatTip();
		 	    	}else if(data.jsonMap.status == "fail"){
		 	    		if(data.jsonMap.waitTime == "0") {
		 	    			openNoTimeTip();
		 	    		} else {
		 	    			openwaitPayTip();
		 	    			var v= $('.pay_type_tab li.active');
							v = $("#"+v.attr("name")+"_UL li.active");
							if(v.length == 0) {
								v = $('input:radio[name="bankpay"]:checked');
							}
				 	  	    window.open('http://pay.lvmama.com/payment/pay/choosePay.do?paymentgateway='+gateway+'&paymentGateWayConfigId='+v.attr("paymentGateWayConfigId")+'&payType=SINGLE&platFrom=domain&payPlatType=_online_plat_pay&objectId=31020202&bankid='+bankId+'&amount=5800&objectType=ORD_ORDER&paymentType=PAY&waitPayment=1440&approveTime=20160630133542&visitTime=20160827000000&bizType=VST_ORDER&royaltyParameters=&signature=454B3325A5696A2DC520A5328FA74271','lvmamaPay');
		 	    		}
		 	    	}else{
		 	    	    alert(data.jsonMap.status);
		 	    	}
	            }
	        });
		}
		
		function beforeSubmitWeixinWebGateway(a, gateway, noCardFlag){
	        var basePh= 'http://pay.lvmama.com/payfront';		
	        var orderId= '31020202';
	        var approveTime= '20160630133542';		
	        var waitPayment= '1440';
	        var orderFrom= '';
	        var bizType = 'VST_ORDER';

	        $.ajax({
	            url: basePh + "/view/payRepeatCheck.do",
	            type: "post",
	            async:false,
	      	    dataType:"json", 
	            data: {
	            	"orderId": orderId,
	                "approveTime": approveTime,
	                "waitPayment": waitPayment,
	                "orderFrom": orderFrom,
	                "bizType": bizType
	            },
	            success: function (data) {
	                if (data.jsonMap.status == "success") {
	                	openPayRepeatTip();
		 	    	 }else if(data.jsonMap.status == "fail"){
		 	    		if(data.jsonMap.waitTime == "0") {
		 	    			openNoTimeTip();
		 	    		} else {
		 	    			openwaitPayTip();	
		 	    			var v= $('.pay_type_tab li.active');
							v = $("#"+v.attr("name")+"_UL li.active");
			 	    		document.getElementById("submit_vst_pay").action = 'http://pay.lvmama.com/payment/pay/choosePay.do?paymentgateway='+gateway+'&paymentGateWayConfigId=100000&payType=SINGLE&platFrom=domain&payPlatType=_third_plat_pay&objectId=31020202&amount=5800&objectType=ORD_ORDER&paymentType=PAY&waitPayment=1440&approveTime=20160630133542&visitTime=20160827000000&bizType=VST_ORDER&royaltyParameters=&signature=454B3325A5696A2DC520A5328FA74271&noCardFlag='+noCardFlag+"&beforeURL="+escape(window.location.href);
			 	    		document.getElementById("submit_vst_pay").submit();
		 	    		}
		 	    	 }else{
		 	    	    alert(data.jsonMap.status);
		 	    	 }
	            }
	        });
		}
		
		//dsp部署
		function btn_dsp() {
			//爱投dsp代码部署
		    var _star_v = [], _gtype = "3", gtmac="1134";
		    _star_v.push(['31020202']);//请将"{订单标识}"替换为订单的唯一标识
		    _star_v.push(['58.0']);//请将"{订单金额}"替换为订单金额

		    var j_protocol = (location.protocol == "https:");
		    var nReg = document.createElement("script");nReg.type = "text/javascript"; nReg.async = true;nReg.src = ("https:" == document.location.protocol ? "https://sslcdn.istreamsche.com" : "http://ga.istreamsche.com") + "/stat/j_REGISTER.js";document.getElementsByTagName("head")[0].appendChild(nReg);
			
		    //品友dsp代码部署
		    !function(w,d,e){
	    	var _orderno='31020202';
	    	var _money='58.0';
	    	var _productList='428689,1;';
	    	var b=location.href,c=d.referrer,f,s,g=d.cookie,h=g.match(/(^|;)\s*ipycookie=([^;]*)/),i=g.match(/(^|;)\s*ipysession=([^;]*)/);if (w.parent!=w){f=b;b=c;c=f;};u='//stats.ipinyou.com/cvt?a='+e('Rds.I6s.2jyVHfzlzNmm4oi3c-OLn0')+'&c='+e(h?h[2]:'')+'&s='+e(i?i[2].match(/jump\%3D(\d+)/)[1]:'')+'&u='+e(b)+'&r='+e(c)+'&rd='+(new Date()).getTime()+'&OrderNo='+e(_orderno)+'&Money='+e(_money)+'&ProductList='+e(_productList)+'&e=';
	    	function _(){if(!d.body){setTimeout(_(),100);}else{s= d.createElement('script');s.src = u;d.body.insertBefore(s,d.body.firstChild);}}_();
	    	}(window,document,encodeURIComponent);
		}
		
		function openwaitPayTip() {
			pandora.dialog({
	            title: "支付状态",
	            content: $('#pay_state'),
	            width:500
	        });
		}
		function openNoTimeTip() {
			pandora.dialog({
                title: "温馨提示",
                content: $('#pay_overtime'),
                width:420,
                wrapClass: "dialog-overtime", //模板名称
                ok:function(){
                    //点击OK 回调
                },
                okClassName:'btn btn-orange'
            });
		}
		function openPayRepeatTip() {
			pandora.dialog({
                title: "温馨提示",
                content: $('#pay_repeat'),
                width:420,
                wrapClass: "dialog-repeat", //模板名称
                ok:function(){
                    //点击OK 回调
                },
                okClassName:'btn btn-orange'
            });
		}
		
		function payOKButton(){
			var address = "http://hotels.lvmama.com/vst_front/order/view.do?orderId=31020202";
			var bizType = "VST_ORDER";
			if("GEEX_ORDER"==bizType){
				window.location.href = "http://www.lvmama.com/myspace/geex.do";
			}else if("FLIGHT_ORDER"==bizType){
				window.location.href = "http://flight.lvmama.com/union-web/order/getTrafficOrderList?bizType=FLIGHT_ORDER";
			}else if("TRAIN_ORDER"==bizType){
				window.location.href = "http://flight.lvmama.com/union-web/order/getTrafficOrderList?bizType=TRAIN_ORDER";
			}else{
				window.location.href = address;
			}
		}
		function payQuestionButton(){
			window.open("http://www.lvmama.com/public/order_and_pay#m_1_3");
		}
		
		function payWaitingWithMask(show){
			if(show) {
				$(".payWaiting").show();
			}else{
				$(".payWaiting").hide();
			}
		}
		
	</script>
	
	<!-- 驴妈妈跟踪部署开始-->
	<script type="text/javascript">
		_fxcmd.push(['trackOrder',{oid:31020202,otp:58.00},[]]);
	</script>
	<!-- 驴妈妈跟踪部署结束-->
	<script type="text/javascript">
		//百分点；给猜你喜欢推荐栏喂数据
		window["_BFD"] = window["_BFD"] || {};
		_BFD.BFD_INFO = {
			"order_id" : "31020202",   //当前订单号
			"order_items" : "[["428689",58.0,1]]",   //产品ID，产品价格，购买数量
			"total" : "58.0",   //用户实际支付的价格
			"user_id" : "2c9486e55598b6b001559aa384ed0718", //网站当前用户id，如果未登录就为0或空字符串
			"page_type" : "order" //当前页面全称，请勿修改
		};
	</script>
	<script type="text/javascript">
		//品友dsp代码部署
	    !function(w,d,e){
		var _orderno='31020202';
		var _money='58.0';
		var _productList='428689,1;';
		var b=location.href,c=d.referrer,f,s,g=d.cookie,h=g.match(/(^|;)\s*ipycookie=([^;]*)/),i=g.match(/(^|;)\s*ipysession=([^;]*)/);if (w.parent!=w){f=b;b=c;c=f;};u='//stats.ipinyou.com/cvt?a='+e('Rds.I6s.2jyVHfzlzNmm4oi3c-OLn0')+'&c='+e(h?h[2]:'')+'&s='+e(i?i[2].match(/jump\%3D(\d+)/)[1]:'')+'&u='+e(b)+'&r='+e(c)+'&rd='+(new Date()).getTime()+'&OrderNo='+e(_orderno)+'&Money='+e(_money)+'&ProductList='+e(_productList)+'&e=';
		function _(){if(!d.body){setTimeout(_(),100);}else{s= d.createElement('script');s.src = u;d.body.insertBefore(s,d.body.firstChild);}}_();
		}(window,document,encodeURIComponent);
	</script>
	
	<script type="text/javascript">
		//爱投dsp代码部署
	    var _star_v = [], _gtype = "3", gtmac="1134";
	    _star_v.push(['31020202']);//请将"{订单标识}"替换为订单的唯一标识
	    _star_v.push(['58.0']);//请将"{订单金额}"替换为订单金额
	
	    var j_protocol = (location.protocol == "https:");
	    var nReg = document.createElement("script");nReg.type = "text/javascript"; nReg.async = true;nReg.src = ("https:" == document.location.protocol ? "https://sslcdn.istreamsche.com" : "http://ga.istreamsche.com") + "/stat/j_REGISTER.js";document.getElementsByTagName("head")[0].appendChild(nReg);
	</script>
	
	<script type="text/javascript">
		var _mvq = window._mvq || []; 
		window._mvq = _mvq;
		_mvq.push(['$setAccount', 'm-193368-0']);
		_mvq.push(['$logConversion']);
		(function() {
			var mvl = document.createElement('script');
			mvl.type = 'text/javascript'; mvl.async = true;
			mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(mvl, s); 
		})();	
	</script>
	<script type="text/javascript">
		var productList = '428689,5800,1;';
		var _mvq = window._mvq || []; 
		window._mvq = _mvq;
		_mvq.push(['$setAccount', 'm-193368-0']);
		_mvq.push(['$setGeneral', 'ordercreate', '', '', '']);
		_mvq.push(['$logConversion']);
		_mvq.push(['$addOrder','31020202', '58.0']);
		if(productList != "") {
			for(var i=0; i<productList.split(";"); i++) {
				var item = productList.split(";")[i];
				var itemArr = productList.split(";")[i].spilt(",");
				_mvq.push(['$addItem', '31020202', itemArr[0], itemArr[1], itemArr[2]]);
			}
		} else {
			_mvq.push(['$addItem', '31020202']);
		}
		_mvq.push(['$logData']);
	</script>
	<script src="/home/js/ga.js" async="" type="text/javascript"></script><script src="/home/js/lvmama.js" charset="utf-8" async="" type="text/javascript"></script><script type="text/javascript" src="/home/other/zhifu_001.php"></script>

 <div class="poptip tip-light poptip-default" style="display: none;" id="poptip1">     <div class="tip-arrow tip-arrow-12">         <em>◆</em>         <i>◆</i>     </div>     <div class="tip-content">         <h5 class="tip-title"></h5>         <p></p>     </div> </div><iframe src="index_2.html" style="height: 0px; width: 0px; float: none; position: absolute; overflow: hidden; z-index: 333333; margin: 0px; padding: 0px; border: 0px none; background: transparent none repeat scroll 0% 0%;" scrolling="no" id="add_speed_bfd" allowtransparency="true" frameborder="0"></iframe></body>
</html>
