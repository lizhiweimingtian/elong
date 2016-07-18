<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="csstransitions cssanimations ic_gecko ic_firefox ic_47">
<head><script src="silentRegisterByMobile.do" async=""></script><script src="adv.dat" async="" type="text/javascript"></script><script src="/home/other/presadva.dat" async="" type="text/javascript"></script><script src="/home/js/v.js" charset="utf-8"></script>

		<script src="/home/js/a.js" async="" type="text/javascript"></script><script src="/home/js/mv.js" async="" type="text/javascript"></script><script src="/home/js/mba.js" async="" type="text/javascript"></script><script src="/home/js/push.js"></script><script src="/home/js/fx.js" async="" type="text/javascript"></script><script src="/home/js/mvl.js" async="" type="text/javascript"></script><script src="/home/js/hm11.js"></script><script src="/home/js/eluminate.js"></script>
	<script src="/home/js/coremetrics-initalize.js"></script>
	<script>_LVMAMA_COREMETRICS.init(document.domain);</script><script src="/home/js/head.js"></script><script src="/home/js/90409730.js" type="text/javascript" language="javascript"></script><script src="/home/js/dispatcher-v3.js" type="text/javascript" language="javascript"></script><script type="text/javascript" src="/home/js/yahoo-min.js"></script><script type="text/javascript" src="/home/js/cp-v3.js"></script><script type="text/javascript" src="/home/js/json-min.js"></script>	
	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>填写订单</title>
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon">


	
<script async="" src="/home/js/pc.js"></script><script charset="utf-8" src="StdID.do" id=""></script><script type="text/javascript" src="/home/js/bcore.min.js"></script><script charset="utf-8" src="PageView.do"></script>
<link rel="stylesheet" type="text/css" href="/home/css/xiadan.css" media="all">
</head>
<body class="hotel-order"><script src="cvt.dat"></script>
<div class="order-header wrap">
	<div class="header-inner">
		<span class="logo">自助天下游 就找驴妈妈</span>
		<p class="welcome" name="topWelcome">
				</p>
		<p class="info">24小时服务热线：<strong>1010-6060</strong></p>
	</div>
</div>
	 <div class="main_box">
		    <div class="wrap">
                <input id="circusFlag" name="circusFlag" value="" type="hidden">
		    	<div id="ticketErrorInfoDiv" style="display: none;" class="warning_box"><div class="tiptext tip-warning"><span class="tip-icon tip-icon-big-warning"></span>很抱歉，您预订的产品因其他买家抢购以致库存不足，请修改数量。</div></div>
		    	  	<input id="distributorId" name="distributorId" value="" type="hidden">
		    		<input id="payTarget" name="payTarget" value="PREPAID" type="hidden">
		    		<input id="aperiodicFlag" name="aperiodicFlag" value="N" type="hidden">
                    <input id="specialTicketType" name="specialTicketType" value="" type="hidden">
<!-- 操作步骤 -->
<ol class="ui-step ui-step-3">
	<li class="ui-step1 ui-step-start ui-step-active">
		<div class="ui-step-arrow">
			<i class="arrow_r1"></i> <i class="arrow_r2"></i>
		</div> <span class="ui-step-text">填写订单</span>
	</li>
	<li class="ui-step2 ">
		<div class="ui-step-arrow">
			<i class="arrow_r1"></i> <i class="arrow_r2"></i>
		</div> <span class="ui-step-text">在线支付</span>
	</li>
	<li class="ui-step3 ui-step-end ">
		<div class="ui-step-arrow">
			<i class="arrow_r1"></i> <i class="arrow_r2"`></i>
		</div> <span class="ui-step-text">预订成功</span>
	</li>
</ol>
<!-- 操作步骤 -->

<form method="post" action="/zhifu" >

            <input name="tokenName" readonly="readonly" value="" type="hidden">
            <input name="distributionId" value="" type="hidden">
				<input name="suppGoodsFlag" value="true" type="hidden">
				<input id="productIdTxt" name="productId" value="428689" autocomplete="off" type="hidden">
				<input name="sameVisitTime" value="true" autocomplete="off" type="hidden">
                                <input name="suppGoodsId" value="2989144" type="hidden">
                            <div class="order_box border_3 order_box_new">
		        		<h1 class="order_name"><span>{{$xq->title}}</span>
									
		        		（在线支付）</h1>
		        	<dl class="order_dl">
		            	<dt>日期</dt>
		                <dd>
                                    <script src='/plugins/My97DatePicker/WdatePicker.js'></script> 
		                	<div class="input_time">
		                    	<input id="visitTimeInput" maxlength="10" name="visitTime"  value="" autocomplete="off" readonly="readonly" placeholder="请选择游玩日期" type="hidden" >
                                <input id="showVisitTimeInput" name="chufa_date" class="input js_youwanTime" autocomplete="off" placeholder="请选择游玩日期" onClick="WdatePicker({skin:'whyGreen'})">
		                        <i class="order_icon icon_titme"></i>
		                    </div>
		                </dd>
		            </dl>
                    <!--马戏票场次-->
		          <!--   <dl class="order_dl mb0">
		            	<dt>数量</dt>
		                <dd>
		                	<div class="table_list table_tit">
		                    	<ul class="table_list_t">
		                    	<li class="table_1">商品名称</li>
		                        <li class="table_2">市场价</li>
		                        <li class="table_3">驴妈妈价</li>
		                        <li class="table_4">数量</li>
		                        </ul>
		                    </div> -->
		                    
		                    <!--商品信息-->
<!-- <div style="display: block;" class="table_list table_t ">
	<ul class="table_list_t">
		<input name="itemMap[2989144].goodsId" value="2989144" autocomplete="off" type="hidden">
        <input name="itemMap[2989144].circusActInfo.circusActId" autocomplete="off" type="hidden">
        <input name="itemMap[2989144].circusActInfo.circusActStartTime" autocomplete="off" type="hidden">
        <input name="itemMap[2989144].circusActInfo.circusActEndTime" autocomplete="off" type="hidden">
        <li class="table_1">
        		<a href="javascript:;" class="pro_name" hidefocus="false" title="青石岭短漂单人票">青石岭短漂单人票<i class="icon_arrow"></i></a>
        </li>
        <li class="table_2"><del>¥98.00</del></li>
        <li class="table_3">¥<b>58.00</b>
        	<div id="2989144RebateDiv" style="width: 100px; display: inline;"></div>
		</li>
        <li class="table_4">
            <span class="num_box">
                <a href="javascript:void(0);" class="num_subtraction num_stop" hidefocus="false">－</a>
                <input name="itemMap[2989144].quantity" value="1" class="input num_text" goodsid="2989144" adult="1" child="0" maxquantity="100" minquantity="1" goodstype="NOTICETYPE_DISPLAY" mainitem="true" autocomplete="off" stockquantity="999" tickettype="" ticketdisneynum="1" suppgoodsname="青石岭短漂单人票" type="text">
                <a href="javascript:void(0);" class="num_add" hidefocus="false">+</a>
            </span>
        </li>
    </ul>
	
   <div class="pro_info clearfix">
    	<p>
        	<b>费用包含</b>
           	 1.青石岭短漂单人票1张（青石岭漂流（大约5公里）单人票1张）。
        </p>
        <p>
        	<b>入园须知</b>

                    ·入园时间：9:00～18:00<br>
                    ·入园地点：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区售票处<br>

            ·取票时间：9:00～18:00<br>
            ·取票地点：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区售票处<br>
            ·入园方式：1. 凭驴妈妈订单短信中的入园凭证（入园辅助码或二维码）入园<br>
		            ·有效期：（有效期内，仅限入园1次）指定游玩日当天有效
        </p>
        <p>
        	<b>重要提示</b>
            	产品有效期：至2016年10月10日；
退改规则：有效期内未使用可退，支持部分退。
        </p>
        <p>
        	<b>退改说明</b>
            	 <span class="service_poptip"><i class="icon_bz3"></i>随时退</span>&nbsp;本商品支持30天内随时退。预订付款后未使用，可在“我的订单”中申请退款，且不收取任何手续费。
        </p>
        <a href="javascript:;" class="pro_info_sq" hidefocus="false">收起</a>
        <div class="info_arrow"><span>◆</span><i>◆</i></div>
    </div>
</div>
 -->
<!-- 主商品 -->

      <div id="otherTicketDiv">        <div style="display: none;" class="table_list table_t">
			<!-- <ul class="table_list_t">
				<input name="itemMap[1780991].goodsId" value="1780991" autocomplete="off" type="hidden">
		        <li class="table_1">
		            <a href="javascript:;" class="pro_name" hidefocus="false" title="白河峡谷虹鳟鱼自助烧烤+CS娱乐+影视外景基地门票套票">白河峡谷虹鳟鱼自助烧烤+CS娱乐+影视外景基地门票套票<i class="icon_arrow"></i></a>
		        </li>
		         <li class="table_2"><del>¥138.00</del>
		         </li>
		        <li class="table_3">¥<b>68.00
				</b>
	        		<div id="1780991RebateDiv" style="width: 100px; display: inline;"><span tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得最高<span>2</span>元点评奖金返现。" tip-title="写体验点评返奖金" class="tagsback tagsback-orange"><em>返</em><i>￥2元</i></span></div>	
		        </li>
		        <li class="table_4">
		            <span class="num_box">
		                <a href="javascript:;" class="num_subtraction num_stop" hidefocus="false">－</a>
		                <input class="input num_text" name="itemMap[1780991].quantity" value="0" goodsid="1780991" adult="1" child="0" maxquantity="100" minquantity="1" goodstype="NOTICETYPE_DISPLAY" mainitem="false" tickettype="" ticketdisneynum="1" suppgoodsname="白河峡谷虹鳟鱼自助烧烤+CS娱乐+影视外景基地门票套票" type="text">
		                <a href="javascript:;" class="num_add" hidefocus="false">+</a>
		            </span>
		        </li>
		    </ul> -->
			
		   <!--  <div class="pro_info clearfix">
				    	<p>
				        	<b>费用包含</b>
				           	 1.虹鳟鱼自助烧烤+CS娱乐+影视外景基地套票1张（虹鳟鱼自助烧烤（三个小时不限量）、赠送真人CS（激光）、让子弹飞 影视外景地景区门票、免费垂钓）。
				        </p>
				        <p>
				        	<b>入园须知</b>
                                    ·入园时间：9:00～18:00<br>
                                    ·入园地点：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区售票处<br>
				            ·取票时间：9:00～18:00<br>
				            ·取票地点：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区售票处<br>
				            ·入园方式：1. 凭驴妈妈订单短信中的入园凭证（入园辅助码或二维码）入园<br>
						            ·有效期：（有效期内，仅限入园1次）指定游玩日当天有效
				        </p>
				        <p>
				        	<b>退改说明</b>
				             <span class="service_poptip"><i class="icon_bz3"></i>随时退</span>&nbsp;本商品支持30天内随时退。预订付款后未使用，可在“我的订单”中申请退款，且不收取任何手续费。
				        </p>
		        <a href="javascript:;" class="pro_info_sq" hidefocus="false">收起</a>
		        <div class="info_arrow"><span>◆</span><i>◆</i></div>
		    </div> -->
		</div>
		
        <div style="display: none;" class="table_list table_t">
			<ul class="table_list_t">
				<input name="itemMap[1780999].goodsId" value="1780999" autocomplete="off" type="hidden">
		        <li class="table_1">
		            <a href="javascript:;" class="pro_name" hidefocus="false" title="白河峡谷青石岭长漂+自助烧烤+CS娱乐+影视外景基地门票套票">白河峡谷青石岭长漂+自助烧烤+CS娱乐+影视外景基地门票套票<i class="icon_arrow"></i></a>
		        </li>
		         <li class="table_2"><del>¥318.00</del>
		         </li>
		        <li class="table_3">¥<b>228.00
				</b>
	        		<div id="1780999RebateDiv" style="width: 100px; display: inline;"><span tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得最高<span>7</span>元点评奖金返现。" tip-title="写体验点评返奖金" class="tagsback tagsback-orange"><em>返</em><i>￥7元</i></span></div>	
		        </li>
		        <li class="table_4">
		            <span class="num_box">
		                <a href="javascript:;" class="num_subtraction num_stop" hidefocus="false">－</a>
		                <input class="input num_text" name="itemMap[1780999].quantity" value="0" goodsid="1780999" adult="1" child="0" maxquantity="100" minquantity="1" goodstype="NOTICETYPE_DISPLAY" mainitem="false" tickettype="" ticketdisneynum="1" suppgoodsname="白河峡谷青石岭长漂+自助烧烤+CS娱乐+影视外景基地门票套票" type="text">
		                <a href="javascript:;" class="num_add" hidefocus="false">+</a>
		            </span>
		        </li>
		    </ul>
			
		    <div class="pro_info clearfix">
				    	<p>
				        	<b>费用包含</b>
				           	 1.白河峡谷青石岭长漂+自助烧烤+CS娱乐+影视外景基地门票套票1张（青石岭长漂（10公里）、虹鳟鱼自助烧烤（三个小时不限量）、赠送真人CS（激光）、让子弹飞 影视外景地景区门票、免费垂钓）。
				        </p>
				        <p>
				        	<b>入园须知</b>
                                    ·入园时间：9:00～18:00<br>
                                    ·入园地点：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区售票处<br>
				            ·取票时间：9:00～18:00<br>
				            ·取票地点：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区售票处<br>
				            ·入园方式：1. 凭驴妈妈订单短信中的入园凭证（入园辅助码或二维码）入园<br>
						            ·有效期：（有效期内，仅限入园1次）指定游玩日当天有效
				        </p>
				        <p>
				        	<b>退改说明</b>
				             <span class="service_poptip"><i class="icon_bz3"></i>随时退</span>&nbsp;本商品支持30天内随时退。预订付款后未使用，可在“我的订单”中申请退款，且不收取任何手续费。
				        </p>
		        <a href="javascript:;" class="pro_info_sq" hidefocus="false">收起</a>
		        <div class="info_arrow"><span>◆</span><i>◆</i></div>
		    </div>
		</div>
		
        <div style="display: none;" class="table_list table_t">
			<ul class="table_list_t">
				<input name="itemMap[1781013].goodsId" value="1781013" autocomplete="off" type="hidden">
		        <li class="table_1">
		            <a href="javascript:;" class="pro_name" hidefocus="false" title="白河峡谷青石岭短漂+自助烧烤+CS娱乐+影视外景基地门票套票">白河峡谷青石岭短漂+自助烧烤+CS娱乐+影视外景基地门票套票<i class="icon_arrow"></i></a>
		        </li>
		         <li class="table_2"><del>¥236.00</del>
		         </li>
		        <li class="table_3">¥<b>138.00
				</b>
	        		<div id="1781013RebateDiv" style="width: 100px; display: inline;"><span tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得最高<span>5</span>元点评奖金返现。" tip-title="写体验点评返奖金" class="tagsback tagsback-orange"><em>返</em><i>￥5元</i></span></div>	
		        </li>
		        <li class="table_4">
		            <span class="num_box">
		                <a href="javascript:;" class="num_subtraction num_stop" hidefocus="false">－</a>
		                <input class="input num_text" name="itemMap[1781013].quantity" value="0" goodsid="1781013" adult="1" child="0" maxquantity="100" minquantity="1" goodstype="NOTICETYPE_DISPLAY" mainitem="false" tickettype="" ticketdisneynum="1" suppgoodsname="白河峡谷青石岭短漂+自助烧烤+CS娱乐+影视外景基地门票套票" type="text">
		                <a href="javascript:;" class="num_add" hidefocus="false">+</a>
		            </span>
		        </li>
		    </ul>
			
		    <div class="pro_info clearfix">
				    	<p>
				        	<b>费用包含</b>
				           	 1.白河峡谷青石岭短漂+自助烧烤+CS娱乐+影视外景基地门票套票 1张（青石岭短漂（5公里）、虹鳟鱼自助烧烤（三个小时不限量）、赠送真人CS（激光）、让子弹飞 影视外景地景区门票、免费垂钓）。
				        </p>
				        <p>
				        	<b>入园须知</b>
                                    ·入园时间：9:00～18:00<br>
                                    ·入园地点：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区售票处<br>
				            ·取票时间：9:00～18:00<br>
				            ·取票地点：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区售票处<br>
				            ·入园方式：1. 凭驴妈妈订单短信中的入园凭证（入园辅助码或二维码）入园<br>
						            ·有效期：（有效期内，仅限入园1次）指定游玩日当天有效
				        </p>
				        <p>
				        	<b>退改说明</b>
				             <span class="service_poptip"><i class="icon_bz3"></i>随时退</span>&nbsp;本商品支持30天内随时退。预订付款后未使用，可在“我的订单”中申请退款，且不收取任何手续费。
				        </p>
		        <a href="javascript:;" class="pro_info_sq" hidefocus="false">收起</a>
		        <div class="info_arrow"><span>◆</span><i>◆</i></div>
		    </div>
		</div>
		
        <div style="display: none;" class="table_list table_t">
			<ul class="table_list_t">
				<input name="itemMap[2989149].goodsId" value="2989149" autocomplete="off" type="hidden">
		        <li class="table_1">
		            <a href="javascript:;" class="pro_name" hidefocus="false" title="青石岭长漂单人票">青石岭长漂单人票<i class="icon_arrow"></i></a>
		        </li>
		         <li class="table_2"><del>¥180.00</del>
		         </li>
		        <li class="table_3">¥<b>140.00
				</b>
	        		<div id="2989149RebateDiv" style="width: 100px; display: inline;"></div>	
		        </li>
		        <li class="table_4">
		            <span class="num_box">
		                <a href="javascript:;" class="num_subtraction num_stop" hidefocus="false">－</a>
		                <input class="input num_text" name="itemMap[2989149].quantity" value="0" goodsid="2989149" adult="1" child="0" maxquantity="100" minquantity="1" goodstype="NOTICETYPE_DISPLAY" mainitem="false" tickettype="" ticketdisneynum="1" suppgoodsname="青石岭长漂单人票" type="text">
		                <a href="javascript:;" class="num_add" hidefocus="false">+</a>
		            </span>
		        </li>
		    </ul>
			
		    <div class="pro_info clearfix">
				    	<p>
				        	<b>费用包含</b>
				           	 1.青石岭长漂单人票1张（青石岭漂流（大约10公里）单人票1张）。
				        </p>
				        <p>
				        	<b>入园须知</b>
                                    ·入园时间：9:00～18:00<br>
                                    ·入园地点：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区售票处<br>
				            ·取票时间：9:00～18:00<br>
				            ·取票地点：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区售票处<br>
				            ·入园方式：1. 凭驴妈妈订单短信中的入园凭证（入园辅助码或二维码）入园<br>
						            ·有效期：（有效期内，仅限入园1次）指定游玩日当天有效
				        </p>
				        <p>
				        	<b>退改说明</b>
				             <span class="service_poptip"><i class="icon_bz3"></i>随时退</span>&nbsp;本商品支持30天内随时退。预订付款后未使用，可在“我的订单”中申请退款，且不收取任何手续费。
				        </p>
		        <a href="javascript:;" class="pro_info_sq" hidefocus="false">收起</a>
		        <div class="info_arrow"><span>◆</span><i>◆</i></div>
		    </div>
		</div>
		
</div>
                                    <!-- <a href="javascript:void(0);" class="btn_qita" hidefocus="false">其他票种<i class="icon_arrow"></i></a> -->
		                    <!-- <p class="pro_jiage">
		                    	<b>门票总价：</b><span><small>¥</small>58.00</span>（
		                   	  	在线支付
			                    ）
		                    </p> -->
		                </dd>
		            </dl>

<!-- 买赠开始 -->
<!-- 不符合规范  order_dl 加class: order_dlNo-->
<dl class="order_dl order_zp" style="display: none;">
	<dt>赠  品</dt>
	<dd>
		<p class="wxts">赠品信息</p>
		<div class="zp-dd"></div>

	</dd>
</dl>

<!-- 买赠结束 -->		        </div>

                <!--保险信息-->
                    <div id="insuranceDiv">
<input disabled="disabled" id="bxGoodsId" name="itemMap[0].goodsId" value="0" autocomplete="off" type="hidden">
<input disabled="disabled" id="bxGoodsBookQuantity" name="itemMap[0].quantity" value="0" autocomplete="off" type="hidden">

<!-- <div class="order_box clearfix order_box_new">
    <h3 class="order_tit">保险信息</h3>
            <dl class="order_dl order_bx">
            <dt>保险</dt>
            <dd>
                <ul class="bx_tab">
                    <li class="active" data-id="0" data-price="0">不购买保险<i class="order_icon icon_gou"></i></li>
                                <li data-id="967678" data-price="7">人保景区意外险-20万尊贵型  ￥7/人<i class="order_icon icon_gou"></i></li>
                                <li data-id="967676" data-price="3">人保景区意外险-10万基础型  ￥3/人<i class="order_icon icon_gou"></i></li>
                                <li data-id="967677" data-price="5">人保景区意外险-15万特惠型  ￥5/人<i class="order_icon icon_gou"></i></li>
                </ul>
            </dd>
        </dl>
        <dl class="order_dl order_bx">
            <dt>数量</dt>
            <dd>
                    <span class="num_box">
                        <a class="num_subtraction num_stop" href="javascript:;" hidefocus="false" id="insuranceSub">－</a>
                        <input class="input num_text" value="0" id="insuranceNumInput" type="text">
                        <a class="num_add num_stop" href="javascript:;" hidefocus="false" id="insuranceAdd">+</a>
                    </span>
            </dd>
        </dl>

        <ul style="display: none; left: 854.5px; top: 454.5px;" class="bx_tab_info">
                        <li style="display: none;">
                            <p>意外身故、残疾、烧伤：200,000<br>意外及突发急性病医疗：20,000（100元免赔，100%赔付）<br>意外住院津贴：150元/天（3天免赔，最多赔偿180天）<br>突发急性疾病身故：50,000<br>高原反应:包含<br><br>保障期限：指定日内从被保险人进入景区开始到离开景区为止。<br>投保年龄：1岁—80周岁；70-80周岁被保险人保险责任为上述保险金额的一半；18周岁以下未成年人，身故保额累计以10万为限。<br>详细信息请见：<a href="http://www.lvmama.com/public/help_center_532" target="_blank">人保旅游景区门票意外险&gt;&gt;</a></p>
                            <div style="left: 104px;" class="info_arrow"><span>◆</span><i>◆</i></div>
                        </li>
                        <li style="display: none;">
                            <p>意外身故、残疾、烧伤：100,000<br>意外及突发急性病医疗：10,000（100元免赔，100%赔付）<br>意外住院津贴：50元/天（3天免赔，最多赔偿180天)<br>突发急性疾病身故：20,000<br>高原反应:包含<br><br>保障期限：指定日内从被保险人进入景区开始到离开景区为止。<br>投保年龄：1岁—80周岁；70-80周岁被保险人保险责任为上述保险金额的一半；18周岁以下未成年人，身故保额累计以10万为限。<br>详细信息请见：<a href="http://www.lvmama.com/public/help_center_532" target="_blank">人保旅游景区门票意外险&gt;&gt;</a></p>
                            <div style="left: 104px;" class="info_arrow"><span>◆</span><i>◆</i></div>
                        </li>
                        <li style="display: list-item;">
                            <p>意外身故、残疾、烧伤：：150,000<br>意外及突发急性病医疗：15,000（100元免赔，100%赔付）<br>意外住院津贴：100元/天（3天免赔，最多赔偿180天)<br>突发急性疾病身故：30,000<br>高原反应:包含<br><br>保障期限：指定日内从被保险人进入景区开始到离开景区为止。<br>投保年龄：1岁—80周岁；70-80周岁被保险人保险责任为上述保险金额的一半；18周岁以下未成年人，身故保额累计以10万为限。<br>详细信息请见：<a href="http://www.lvmama.com/public/help_center_532" target="_blank">人保旅游景区门票意外险&gt;&gt;</a></p>
                            <div style="left: 104px;" class="info_arrow"><span>◆</span><i>◆</i></div>
                        </li>
        </ul>
</div> -->
</div>
		        
		       
		        <div class="order_box">
		               <!--买赠信息-->
		        	 
		        	<!--优惠信息-->
		        	
		        	
		        	
		        	<h3 class="order_tit">用户信息</h3>
					
		        	
		            <!--用户信息-->
		            <div id="userinfoDiv"><div id="Jtenantlist">
        <input name="travNumType" id="travNumType" value="TRAV_NUM_ONE" type="hidden">
        <input name="occupType" id="occupType" value="TRAV_NUM_NO" type="hidden">
<div class="user_info border_t1_dotted" index="0">
		<input id="travellersId0" name="travellers[0].receiverId" value="" autocomplete="off" type="hidden">
		<dl class="user_dl">
			<dt><span class="red">*</span>姓名：</dt>
	    	<dd>
	    		<input type="hidden" name="_token" value="{{csrf_token()}}" />
	    		<input name="pid" value="{{$xq->id}}" type="hidden">
	    		<input type="text" maxlength="20" placeholder="姓名" name="user_name" class="input js_yz">
	    		<!-- <input class="input js_yz" id="fullName0" travellersid="" type_name="text" name="travellers[0].fullName" maxlength="20" placeholder="姓名" type="text"> -->
	    		<span class="error_text"><i class="tip-icon tip-icon-error"></i>请输入姓名</span>
	    	</dd>
		</dl>
	
		    <input id="isFrozenFlag" value="N" type="hidden">
                    <dl class="user_dl">
                        <dt><span class="red">*</span>手机号码：</dt>
                        <dd>
                            <input class="input js_yz js_textBig" id="mobile0" name="user_phone" item_type="main" name="travellers[0].mobile" maxlength="11" autocomplete="smartystreets" placeholder="请输入手机号码" type="text">
                            <span style="display: inline-block;" class="ts_text" zitem="init">此手机号为接收短信所用，作为订购与取票凭证，请准确填写。</span>
                            <span class="error_text" style="display: none;" zitem="register"><i class="tip-icon tip-icon-info"></i>该手机号非驴妈妈会员，系统将自动帮您注册为会员，账号密码稍后将以短信方式告知您。</span>
                            <span class="error_text" zitem="frozen" style="display: none;"><i class="tip-icon tip-icon-error"></i>此手机号已被驴妈妈冻结，不能下单，请更换手机号下单。</span>
                            <span style="display: none;" class="error_text" zitem="exception"><i class="tip-icon tip-icon-error"></i>手机号码不正确。</span>
                        </dd>
                    </dl>
	<!-- <dl style="display: none;" class="user_dl bx_check">
        <dt>&nbsp;</dt>
        <dd>
        	<label class="check js_bx_check"><input class="checkbox" name="" value="0" onchange="LVMAMA.order.ticket.baoxianPersonNumCheck(this);" type="checkbox">被保险人</label>
        </dd>
    </dl>
   	 <h5 class="youwan_tit">游玩人1(取票人)</h5>
	<div class="Preser_box">
        	<label class="check"><input id="saveCk0" checked="checked" class="checkbox" name="travellers[0].saveFlag" value="true" type="checkbox">保存</label>
   </div> -->
</div>
</div>
</div>
		             
		            <!--发票信息-->
		            
		            <!--配送方式-->
		           	<div id="expressageInfoDiv"></div>
		            <!--验证码-->
                        <input id="login_user" value="0" status="0" type="hidden">
                        <div id="picCodeContainer">
<div id="picCodeDiv">
	<input id="checkCodeValid" value="0" type="hidden">
	<!-- <dl class="user_dl">
		<dt><span class="red">*</span>验证码：</dt>
    	<dd>
    		<input value="" name="checkCode2" id="checkCode2" type="hidden">
    		<input name="pic_checkCode" id="pic_checkCode" onfocus="javascript:showPicImg();" class="input js_yz" maxlength="10" type="text">
    		<img src="initPic.dat" id="createCheckCode" onclick="javascript:reloadPicCode();" style="width: 100px; height: 30px; cursor: pointer;" align="middle">
    		<a hidefocus="false" href="javascript:reloadPicCode();" id="createCheckCodeHref" style="">&nbsp;看不清,换一个.</a>
    	</dd>
	</dl> -->
</div>
<script src="/home/js/adv.js"></script><script src="/home/js/jquery-1.7.min.js"></script>
<script type="text/javascript">
	//每次加载清空验证码
	$(function () {
		$("#pic_checkCode").val("");
		$("#checkCode2").val("");
		//防止火狐浏览器设置disabled
		$("#pic_checkCode").removeAttr("disabled");
	});
	var page_picSrc = "/vst_front/pic/initPic";
	function reloadPicCode() {  
		document.getElementById("createCheckCode").src = page_picSrc+"?nocache=" + new Date().getTime();
	}
	function showPicImg(){
		var jPicDom = $("#createCheckCode");
		if(jPicDom.attr("src")==""){
			jPicDom.attr("src", page_picSrc)
		}
		jPicDom.show();
		$("#createCheckCodeHref").show();
	}
	function checkPicCode(){
		$.ajax({
			url: "/vst_front/pic/checkPic",
			data: {checkCode:$("#pic_checkCode").val(),uid:new Date().getTime()},
			success: function(result){
				//console.log(result);
				if(result=='success'){
					$("#pic_checkCode").attr("disabled", "true");
					$("#checkCodeValid").val(1);
				}
			}
		});
	}
</script>                   	 	</div>
		        </div>

        <div class="order_box">
         
		<div class="user_info pt_10 no_bd mb_20">
			<dl id="promPromotionDiv" class="user_dl isPromdl ">
		    	<dt style="display: none;" class="isProm">可享促销：</dt>
		    	
		    </dl>
</div>
                       <!--  <div class="tiptext tip-info order_login">
            	
            </div> -->
            
        <!--新增促销优惠券模块---结束----------------------->		        <!--付款按钮-->
		        <div class="fk_box">
		        	

						<input type="submit" value="同意以下协议,去付款 " class="btn_fk">				
		        	
		    
		        	<div class="fk_l">
		                <div id="orderPriceDiv" class="fk_jg">
		                	<p class="fk_p1">应付总价<span><small>¥</small><lable class="orderamountPage">{{$xq->price}}</lable></span></p>
	                        <p style="display: none;" class="fk_p2">点评返现：<span>¥</span><span class="rebateAmountSpan">0.00</span></p>
		                </div>
		            </div>
		            		<span class="tiptext tip-line tip-warning"><span class="tip-icon tip-icon-warning"></span>提交订单并进行在线支付，成功后凭订单确认短信至指定的售票窗口取票游玩。</span>
		        </div>
		       </form>
		        <!--预订协议-->
<!--协议书-->
<div class="order_box mt_40">
	<div class="lv-agree">
		<h4>北京怀柔白河峡谷漂流预订须知</h4>
        （1）免票政策：景区规定统一售价，暂无其他免票政策。<br>
        （2）优惠政策：<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;景区规定统一售价，暂无其他优惠政策。<br>
        （3）说明：景区地址：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区
营业时间： 09:00-18:00
取票地点：北京市怀柔区琉璃庙镇青石岭村白河峡谷漂流景区售票处
产品有效期：至2016年10月7日
使用规则：在线支付成功后，凭收到的数字码至景区售票处验证入内
退改须知：有效期内未使用可退，不支持部分退<br>
     	
    
        <h5>驴妈妈旅游网预订条款</h5><br>
        <strong>1.驴妈妈预订条款的确认</strong><br>
                    驴妈妈旅游网（以下简称"驴妈妈"）各项服务的所有权与运作权归景域旅游运营集团所有。本服务条款具有法律约束力。一旦您点选"确认下单"成功提交订单后，即表示您自愿接受本协议之所有条款，并同意通过驴妈妈订购旅游产品。<br>           
        <strong>2．服务内容</strong><br>
        2.1 　驴妈妈服务的具体内容由景域旅游运营集团根据实际情况提供，驴妈妈对其所提供之服务拥有最终解释权。<br>
        2.2 　景域旅游运营集团在驴妈妈上向其会员提供相关网络服务。其它与相关网络服务有关的设备（如个人电脑、手机、及其他与接入互联网或移动网有关的装置）及所需的费用（如为接入互联网而支付的电话费及上网费、为使用移动网而支付的手机费等）均由会员自行负担。<br>
        
        <strong>3. 特别提示</strong><br>
        3.1 预订提前期与付款期：<br>
        预订提前期与付款期。景点门票预订：所有订单请提前2天预订，部分支持手机电子票（二维码）的景点，支持当天预订当天游玩。如需在线支付请在订单生成后1个小时内付清已订产品所有款项。酒店预订：驴妈妈网站提供的门市价仅供参考，具体价格以酒店当日挂牌价为准。如需在线支付请提前1天预订并在预订后的半小时内付清已订产品所有款项。如未在规定时间内未付清所有款项，驴妈妈将取消产品订单 。<br>
                      
        <strong>4. 订单生效</strong><br>
        订单生效后，您应按订单中约定的时间按时入园或入住酒店。如您未准时出发或未按时入园，视为您主动解约。<br>
                      
        <strong>5. 解除已生效订单</strong><br>
        5.1 景点订单<br>
        5.1.1 如您通过取票时付款，解除预订无须支付任何费用。<br>
        5.1.2 如您通过预付费预订，订单生效后，若要主动解除已生效订单，您须在行程前一天中午12点前通知驴妈妈解除所做预订，包括放弃整张订单的全部内容和减少出行人数，如未按规定时间内通知解除的情况，视违约处理，您需要按照如下标准支付违约金。<br>
        5.1.3 在至景点游玩前一天中午12点以前通知取消的，支付全部费用总额的5%的违约金，逾期则不予退费。<br>
        5.1.4 如景点有最新优惠活动，而本网站"会员价"高过于景点活动"优惠价"，本网站承诺会将游客已支付的高出"优惠价" 的差额退还到游客指定的账户内。<br>
        
        5.2 酒店订单<br>
        5.2.1 如您通过预付费预订并已完成支付，订单生效后，若要主动解除已生效订单，您须在行程前一天12点前通知驴妈妈解除所 做预订，包括放弃整张订单的全部内容和减少出行人数，如未按规定时间内通知解除的情况，视违约处理，您需要按照如下标准支付违约金。<br>
        5.2.2 在入住酒店前24小时内通知取消的，支付全部费用总额的5%违约金，逾期则不予退费。<br>
        5.3 线路订单<br>
        旅游出行前，一方当事人因违约不能成行的，按照下列标准承担违约责任。<br>
        
        5.3.1 违约方在出发前72小时通知对方的，应当支付旅游合同总价5%的违约金。<br>
        5.3.2 违约方在出发前72小时内通知对方的，应当支付旅游合同总价10%的违约金。<br>
        5.3.3 以上违约责任如涉及航空、陆运、水运票务等损失，可参照相关部门有关条款另行赔偿，违约金或赔偿金总额不超过旅游费用总额。<br>
                      
        5.4 特殊产品订单<br>
        部分产品由于资源限制等特殊性，一旦预订不予退费！（此信息会在产品相关页面作提示） <br>
                      
        <strong>6. 更改已生效订单</strong><br>
        订单生效后，您主动要求更改该订单内的任何项目，请务必在行程前一天中午12点前通知驴妈妈您的更改需求。驴妈妈会尽量满足 您的需求，但您必须全额承担因变更带来的损失及可能增加的费用。<br>
                      
        <strong>7. 因驴妈妈原因取消您的已生效订单</strong><br>
        在您按要求付清所有产品费用后，如因驴妈妈原因，致使您的产品取消，驴妈妈应当立即通知您。<br>
                      
        <strong>8. 不可抗力</strong><br>
        您和驴妈妈双方因不可抗力(包括但不限于地震、台风、雷击、水灾、火灾等自然原因,以及战争、政府行为、黑客攻击、电信部门技术管制等原因)不能履行或不能继续履行已生效订单约定内容的，双方均不承担违约责任，但法律另有规定的除外。因驴妈妈延迟履行已生效订单约定内容后发生不可抗力的，不能免除责任。<br>
                      
        <strong>9. 解决争议适用法律法规约定</strong><br>
        在您的预订生效后，如果在本须知或订单约定内容履行过程中，您对相关事宜的履行发生争议，您只同意按照中华人民共和国国家 旅游局颁布的相关法律法规来解决争议。<br>
                      
        <strong>10. 其它</strong><br>
        本须知未尽的其他事项，在驴妈妈确认给您的订单中另行约定。同时合同双方需承担对等的义务。<br>
        祝您旅途愉快! <br>
        如有疑问，请拨打驴妈妈客服电话:1010-6060<br>
     </div>
     <span class="xieyi_gd">查看更多<i class="icon_arrow"></i></span>
</div>
		    </div>
		
		</div>
    <!-- 频道公用js-->
	<script src="index11.php"></script>
	<script src="index10_001.php"></script>
	<script type="text/javascript" src="index10_002.php"></script>
	<!--临时去除<script src="http://s3.lvjs.com.cn/js/v6/order.js"></script>-->
	<script src="order_new.js"></script>
	<script src="promotion.js"></script>
	<script src="bookTicket.js"></script>
	<script src="travellers.js"></script>
	<script src="express.js"></script>
	<script src="payment_page.js"></script>
	
<script src="ga.js" async="" type="text/javascript"></script><script src="lvmama.js" charset="utf-8" async="" type="text/javascript"></script><script src="losc.js"></script>
<script src="index10_003.php"></script>
	<script type="text/javascript">
		var path="/vst_front/order/ticket/";
		
		var rootPath = '/vst_front';
		var thisProCategoryId = '11';
		$(function(){
            toMyOrder();
			$.getJSON("http://www.lvmama.com/check/login.do?jsoncallback=?", {}, function(dt) { 
				if(dt.success) {
					$("#picCodeContainer").remove(); 
				}
			});
			
			var jsonData = {
					trigger: ".js_youwanTime",
					triggerClass: "js_youwanTime",
					mos:4,//传递日历显示日期 
					template: "big", //小日历  small
					isTodayClick:true, //当天是否可点击 
					selectDateCallback: function(){
                        $("#visitTimeInput").val($('#showVisitTimeInput').val());
						calendarConfirmCallback.invoke();
                        $(this).removeClass('input_red');
					},//点击选择日期后的回调函数 
					completeCallback:function(){
						var date=$("#visitTimeInput").val();
						$(".ui-calendar").find("td[date-map]").children("div").removeClass("today");
						$(".ui-calendar").find("td[date-map='"+date+"']").children("div").addClass("today");
                    },
					sourceFn:function (cal){
						  pandora.calendar.mos = 12;
					      var tdElement=cal.warp.find("td");
					      var suppGoodsId;
					      var distributorId;
					      distributorId = $("#distributorId").val();
					      $("li.table_4 span input").each(function(){
								 var goodsId=$(this).attr("goodsId");
								 var mainItem=$(this).attr("mainItem");
								 if(mainItem=="true"){
									 suppGoodsId=goodsId;
									 return;
								 }
							});
					      var visitTime=$('#visitTimeInput').val();
					      $.post("/vst_front/book/ticket/getTicketTimePrice.do",{suppGoodsId:suppGoodsId,visitTime:visitTime,distributorId:distributorId},function(data){
					  		if(data.success){
					  			var dateArr = new Array(); // 记录时间价格的日期
					  			var datePos = 0; // 时间价格日期的数组坐标位
					  			$(data.attributes.timePriceList).each(function(i,e){
					  				$(tdElement).each(function(t,v){
					  					var specDate=e.specDateStr;
					  					var date=$(v).attr("date-map");
						  				if(date==specDate){
						  					if(e.stockFlag=="Y"){
						  						if(e.stock>0||e.oversellFlag=="Y"){
						  							if(e.stock>0 && e.stock<10){
						  								$(v).find("div span:eq(1)").html("余"+e.stock);
						  							}
						  						}else{
						  							$(v).find("div span:eq(1)").html("售完");
						  						}
						  					}else{
						  						//-------------------------处理控件上的促字标签---------------------------------
						  						
						  						if(data.attributes.promList!=null){
							  						$(data.attributes.promList).each(function(i,e){//遍历返回促销列表中的每个促销信息e
							  						
							  							var comparable_date = new Date(Date.parse(date));//将所有日期转化为可比较的日期类型
							  							var beginTime = new Date(e.beginTime);
							  							var endTime = new Date(e.endTime);
							  							var startVistTime = new Date(e.startVistTime);
							  							var endVistTime = new Date(e.endVistTime);
							  							if(beginTime!=null&&endTime!=null){
							  								if(comparable_date>=beginTime && comparable_date<=endTime){
							  									if(startVistTime != null){
							  										if(comparable_date >= startVistTime){
							  											$(v).find("div span:eq(1)").html("");
							  											if($(v).text().indexOf("促") <= 0){
							  												$(v).find("div").append('<span class="discount">促</span>'); 
							  											}
							  										}
							  									}
							  									
							  									if(endVistTime != null){
							  										if(comparable_date <= endVistTime){
							  											if($(v).text().indexOf("促") <= 0){
							  												$(v).find("div").append('<span class="discount">促</span>'); 
							  											} 
							  										}
							  									}
							  									
							  									if(startVistTime == null && endVistTime == null){
							  										//$(v).find("div span:eq(1)").html("促");
							  										if($(v).text().indexOf("促") <= 0){
							  												$(v).find("div").append('<span class="discount">促</span>'); 
							  											}
							  									}
							  									
							  								}
							  							}
							  						});
						  						}
						  						//-------------------------处理控件上的促字标签结束--------------------------
						  					}
						  					$(v).find("div span:eq(2)").html("￥"+e.subZeroPriceYuan);
						  					dateArr[datePos] = date;
					  						datePos++;
						  				}
						  			});
					  			});
					  			
					  			// 处理没有时间价格的日期
					  			$(tdElement).each(function(t,v){
					  				var date=$(v).attr("date-map");
					  				var isNodate = true;
					  				for(var i=0;i<datePos;i++){
					  					if(dateArr[i]==date){
					  						isNodate = false;
					  						break;
					  					}
					  				}	
					  				if(isNodate){
					  					$(v).find("div:eq(0)").removeClass().addClass("nodate");
					  				}
					  			});
					  			
					  		}else{
					  		}
					  	},"JSON");
					}
				}

            $('.order_icon').bind('click', function () {
                setTimeout(function () {
                    $('.js_youwanTime').click();
                }, 50);
            });
            pandora.calendar(jsonData);
				
				
				LVMAMA.order.ticket.displayInsuranceSection();
				LVMAMA.order.ticket.bxNumBussiness();
                LVMAMA.order.ticket.getCircusInformation();
				checkStock();
				LVMAMA.order.ticket.refereshTravellers();
				Express.showExpressageInfo();
				LVMAMA.order.ticket.getTicketGoodsRebateAmount();
				bookNumOnchangeCallback.pushFun(Express.showExpressageInfo);
				bookNumOnchangeCallback.pushFun(LVMAMA.order.ticket.refereshTravellers);
				bookNumOnchangeCallback.pushFun(checkStock);
				bookNumOnchangeCallback.pushFun(contactsPersonCheckboxFalse);
				calendarConfirmCallback.pushFun(refereshTimePrice);
                calendarConfirmCallback.pushFun(LVMAMA.order.ticket.getCircusInformation);
				calendarConfirmCallback.pushFun(LVMAMA.order.ticket.hideNeedVisitDate);
				calendarConfirmCallback.pushFun(LVMAMA.order.ticket.displayInsuranceSection);
				calendarConfirmCallback.pushFun(LVMAMA.order.ticket.refereshInsurance);
				calendarConfirmCallback.pushFun(LVMAMA.order.ticket.refereshOtherTicket);
				calendarConfirmCallback.pushFun(Express.showExpressageInfo);
				calendarConfirmCallback.pushFun(LVMAMA.order.ticket.getTicketGoodsRebateAmount);
				calendarConfirmCallback.pushFun(checkStock);
				calendarConfirmCallback.pushFun(LVMAMA.order.ticket.refereshTravellers);
				calendarConfirmCallback.pushFun(contactsPersonCheckboxFalse);
				FRONT.book.user.travellersBindEvent();
				LVMAMA.order.ticket.bindInsuranceEvent();
		});

        function toMyOrder(){
            $(".myOrder").each(function(index){
                //alert(index);
                $(this).html('您可在<a href="http://www.lvmama.com/myspace/order.do" rel="nofollow" hidefocus="false">“<u>我的订单</u>”</a>中申请。');
            })
        }
			<!--下单页数据监测开始  by 李志强-->
			cmCreateShopAction5Tag("428689","北京怀柔白河峡谷漂流","1","58.00","景点门票");
			cmDisplayShops(); 
			cmCreatePageviewTag("填写订单-景点门票(无登陆)", "景点门票购买流程 ");
			<!--下单页数据监测结束 by 李志强-->
		cmCreateConversionEventTag("景点门票","1","景点门票购买流程" );
		
		$(".toggle-others").live('click',function(){
			var $temp = $(this).siblings('.other');
            $temp.toggle();
            if($temp.is(':hidden')==true){
                $(this).find('span').text('展开其它保险').siblings('i').addClass('arrow-blue-down').removeClass('arrow-blue-up');
            }else{
                $(this).find('span').text('收起其它保险').siblings('i').removeClass('arrow-blue-down').addClass('arrow-blue-up');
            }
		});

	</script>
   <script>
     !function(w,d,e){
      var _money='58';                             // 按照页面刚加载时候的数据来
      var _productList='428689,1';  // 按照页面刚加载时候的数据来
      var b=location.href,c=d.referrer,f,s,g=d.cookie,h=g.match(/(^|;)\s*ipycookie=([^;]*)/),i=g.match(/(^|;)\s*ipysession=([^;]*)/);if (w.parent!=w){f=b;b=c;c=f;};u='//stats.ipinyou.com/cvt?a='+e('Rds.9ps.e7t6CKVu8aDDv6A4ka6sRP')+'&c='+e(h?h[2]:'')+'&s='+e(i?i[2].match(/jump\%3D(\d+)/)[1]:'')+'&u='+e(b)+'&r='+e(c)+'&rd='+(new Date()).getTime()+'&Money='+e(_money)+'&ProductList='+e(_productList)+'&e=';
      function _(){if(!d.body){setTimeout(_(),100);}else{s= d.createElement('script');s.src = u;d.body.insertBefore(s,d.body.firstChild);}}_();
      }(window,document,encodeURIComponent);
    </script>

<a class="" style="visibility: hidden;" hidefocus="false" id="goTopBtn" target="_self" href="javascript:;" title="返回顶部"></a><a class="" style="visibility: hidden;" hidefocus="false" href="http://www.lvmama.com/userCenter/user/transItfeedBack.do" target="_blank" id="Feedback" title="意见反馈"></a><div id="text_big" style="height: 36px; line-height: 36px; padding: 0px 10px; background: rgb(255, 253, 230) none repeat scroll 0% 0%; border: 1px solid rgb(255, 170, 0); position: absolute; color: rgb(51, 51, 51); font-family: Arial; font-size: 20px; left: 440.5px; top: 700.5px; min-width: 148px; display: none;"></div> <div class="poptip tip-light poptip-default" style="display: none;" id="poptip1">     <div class="tip-arrow tip-arrow-12">         <em>◆</em>         <i>◆</i>     </div>     <div class="tip-content">         <h5 class="tip-title"></h5>         <p></p>     </div> </div><ul class="email_list" id="email_list"></ul><iframe src="/home/other/index_1a.html" style="height: 0px; width: 0px; float: none; position: absolute; overflow: hidden; z-index: 333333; margin: 0px; padding: 0px; border: 0px none; background: transparent none repeat scroll 0% 0%;" scrolling="no" id="add_speed_bfd" allowtransparency="true" frameborder="0"></iframe></body>
</html>
