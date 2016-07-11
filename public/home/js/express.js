var Express;
if (!Express) {
	Express = {};
};
Express.isQuery=false;
//信息验证
Express.check=function(){	
	if(!Express.isShow()){
		return true;
	}
	if(Express.isQuery){
		return false;
	}
	var isOk=true;	
	if($("#user_name")&&$("#user_name").val()!=null&&$("#user_name").val().length>25){
		isOk=false;
	}
	if($("#user_address")&&$("#user_address").val()!=null&&$("#user_address").val().length>100){
		isOk=false;
	}
	return isOk;
	
};
// 初始化省市联动select
Express.initCity = function(path, parentId, destCitySelect) {
	$.ajax({
		url : path + "expressDic.do?parentId=" + parentId,
		type : 'get',
		dataType : 'json',
		success : function(data) {
				$.each(eval(data), function(i, item) {
					if(item!=null){$(
							"<option value='" + item.districtId + "@"
									+ item.districtName + "'>" + item.districtName
									+ "</option>").appendTo(destCitySelect);}
				});
			
		}
	});
};
// 处理快递价格结果信息
Express.disposeExpressPriceResult = function(data) {
	var priceInfo = data.attributes.priceInfo;
	var expressGoodsInfo = data.attributes.expressGoodIds;
	// 快递总价显示控制
	var priceInfoHtml = "免邮费";
	var expressItemHtml="";
	if (priceInfo.expressPriceToYuan != '0.00') {
		priceInfoHtml = "¥<big>"
				+ priceInfo.expressPriceToYuan + "</big>";
	}
	$("span.express_price").html(priceInfoHtml);
	/*// 创建快递收费项目隐藏域
	if (expressGoodsInfo&&expressGoodsInfo!="") {
		var ids=expressGoodsInfo.split(",");		
		for(var i=0;i<ids.length;i++){
			expressItemHtml += "<input type='hidden' name='itemMap["
				+ ids[i] + "].goodsId' value='" + ids[i]
				+ "' autocomplete='off'/>";
			expressItemHtml += "<input type='hidden' name='itemMap["
				+ ids[i]
				+ "].quantity' value='1' goodsId="+ids[i]+" adult='1' child='0' maxQuantity='8' minQuantity='0' mainItem='true' />";
		}		
		if(expressItemHtml&&expressItemHtml!=""){
			$("#expressItemDiv").html(expressItemHtml);
		}		
	}*/
};

// 计算快递费用
Express.countPrice = function() {
	var city2Code = $("#js_city2").find('option:selected').attr("value");
	if (city2Code == "选择市") {
		var	priceInfoHtml = "<span class='express_price'>请选择地址</span>";
		/*$("span.express_price").html(priceInfoHtml);*/
		$("#expressItemDiv").html("");
		checkStock();
		return;
	}
	$("#expressItemDiv").html("");
	$.post("/vst_front/order/express/findOrderExpressGoods.do",$("form[name='orderForm']").serialize(),function(data){
		if(data.success){
			var expressItemHtml="";
			$(data.attributes.expressSuppGoodsVOList).each(function(index,item){
				var quantity=1;
				if(item.minQuantity>0){
					quantity=item.minQuantity;
				}
				expressItemHtml += "<input type='hidden' name='itemMap["
					+ item.suppGoodsId + "].goodsId' value='" +item.suppGoodsId
					+ "' autocomplete='off'/>";
				expressItemHtml += "<input type='hidden' name='itemMap["
					+ item.suppGoodsId + "].visitTime' value='" +data.attributes.visitTime
					+ "' autocomplete='off'/>";
				expressItemHtml += "<input type='hidden' name='itemMap["
					+ item.suppGoodsId
					+ "].quantity' value='"+quantity+"' goodsId="+item.suppGoodsId+" adult='"+item.adult+"' child='"+item.child+"' maxQuantity='"+item.maxQuantity+"' minQuantity='"+item.minQuantity+"' mainItem='false' />";
			
			});
			$("#expressItemDiv").html(expressItemHtml);
			checkStock();
		}
	},"JSON");
};
//省市联动事件定义
Express.initCitySelectEvent = function(path) {
	// 省份增加事件
	$("#js_city1").change(function() {
		var city1Code = $("#js_city1").find('option:selected').attr("value");
		$("#js_city2").empty();
		$("<option>选择市</option>").appendTo("#js_city2");
		Express.initCity(path, city1Code, $("#js_city2"));
	});
	// 城市增加事件
	$("#js_city2").change(function() {
		// 这里需要得到所有的快递元素列表
		Express.isQuery=true;
		Express.countPrice();
		Express.isQuery=false;
	});
};
//快递相关内容初始化
Express.init = function(path) {	
	Express.isQuery=false;
	if(!Express.isShow()){
		return;
	}
	$("#js_city1").empty();
	$("<option>选择省</option>").appendTo("#js_city1");
	$("#js_city2").empty();
	$("<option>选择市</option>").appendTo("#js_city2");
	Express.initCity(path, 8, $("#js_city1"));
	Express.initCitySelectEvent(path);
};
//快递页面是否被显示
Express.isShow=function(){
	if(!$("#js_city1")||!$("#js_city1").val()){
		return false;
	}
	return true;
};

Express.showExpressageInfo=function(){
	var showFlag=showExpressCheck();
	if(showFlag){
		var htmlStr='<h3 class="order_tit border_b2">配送方式</h3>';
			htmlStr+='<div class="user_info user_b">';
			htmlStr+='<dl class="user_dl">';
				htmlStr+='<dt><span class="red">*</span>收件人：</dt>';
				htmlStr+='<dd><input id="user_name" maxlength="25" class="input js_yz" type_name="username" name="expressage.recipients" type="text" placeholder="请输入收件人"><span class="error_text"><i class="tip-icon tip-icon-error"></i>请输入收件人姓名</span></dd>';
			htmlStr+='</dl>';
			htmlStr+='<dl class="user_dl">';
				htmlStr+='<dt><span class="red">*</span>联系电话：</dt>';
				htmlStr+='<dd>';
				htmlStr+='<input class="input js_yz js_textBig" type_name="mobile" maxlength="11" item_type="main_deliv" name="expressage.contactNumber" type="text" autocomplete="smartystreets" placeholder="请输入手机号">';
				htmlStr+='<span class="ts_text" zItem="init">此手机号为接收短信所用，作为订购与取票凭证，请准确填写。</span>';
				htmlStr+='<span class="error_text" style="display:none" zItem="register"><i class="tip-icon tip-icon-info"></i>该手机号非驴妈妈会员，系统将自动帮您注册为会员，账号密码稍后将以短信方式告知您。</span>';
				htmlStr+='<span class="error_text" zItem="frozen" style="display:none"><i class="tip-icon tip-icon-error"></i>此手机号已被驴妈妈冻结，不能下单，请更换手机号下单。</span>';
				htmlStr+='<span class="error_text" zItem="exception"><i class="tip-icon tip-icon-error"></i>请输入收件人手机号码</span>';
				htmlStr+='</dd>';
			htmlStr+='</dl>';
			htmlStr+='<dl class="user_dl">';
			htmlStr+='<dt><span class="red">*</span>邮寄地址：</dt>';
			htmlStr+='<dd>';
			htmlStr+='<select class="select" id="js_city1" name="expressage.province">';
			htmlStr+='<option>选择省</option>';
			htmlStr+='</select>';
			htmlStr+='<select class="select" id="js_city2" name="expressage.city">';
			htmlStr+='<option>选择市</option>';
			htmlStr+='</select>';
			htmlStr+='<br/>';
			htmlStr+='<input id="user_address"  maxlength="100" class="input w_290 js_yz" type_name="address" name="expressage.address" type="text" placeholder="详细地址">';
			htmlStr+='<span class="error_text"><i class="tip-icon tip-icon-error"></i>请选择和输入详细地址</span>';
			htmlStr+='</dd>';
			htmlStr+='</dl>';
			htmlStr+='<dl class="user_dl">';
			htmlStr+='<dt>邮政编码：</dt>';
			htmlStr+='<dd><input class="input js_yz" type_name="youbian" name="expressage.postcode" type="text" placeholder="邮政编码">';
			htmlStr+='<span class="error_text"><i class="tip-icon tip-icon-error"></i>邮编格式不对</span></dd>';
			htmlStr+='</dl>';
			htmlStr+='<dl class="user_dl">';
			htmlStr+='<dt>快递费用：</dt>';
			htmlStr+='<dd><span class="express_price">免邮费</span></dd>';
			htmlStr+='</dl>';
			htmlStr+='<dl class="user_dl js_ziquText">';
			htmlStr+='<dt>自取地址：</dt>';
			htmlStr+='<dd>上海市普陀区金沙江路1759号圣诺亚大厦B幢10楼驴妈妈旅游网</dd>';
			htmlStr+='</dl>';
			htmlStr+='<div id="expressItemDiv"></div>';
			htmlStr+='</div>';
		$("#expressageInfoDiv").html(htmlStr);
		Express.init(path);
	}else{
		$("#expressageInfoDiv").html("");
	}
}