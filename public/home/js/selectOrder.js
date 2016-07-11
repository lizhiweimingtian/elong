/**
 * 页面加载完毕之后就执行的方法
 */
$(function(){
	$(".tagtips").poptip();//"不可退款" mouseOver事件
});


/**
 * 退款弹框的关闭事件
 */
function closePopDiv(){
	$("#refundSubmitButton").show();//显示“确定”按钮
	$("#refundApplyDiv").hide();//隐藏div弹框
	clearSubDom();//清空退款弹框的各个被填充元素的子元素
	$('.bg-tan').hide();//移除遮罩层
	$("#refundApply").show();//"退款申请"按钮显示
}

/**
 * 清空退款弹框的各个被填充元素的子元素
 */
function clearSubDom(){
	$("#refundReasonType").find("option[value='0']").attr("selected",true);//选中第一个option
	$('.refund-exp').hide();//隐藏掉说明输入框层
	$("#refundReason").val('');//说明输入框清空
	$("#replaceName").html('');//订单名称清空
	$("#actualAmount").empty();  //订单金额子元素清空
	$("#deductMoney").empty();//扣款金额子元素清空
	$("#refundMoney").empty();//退款金额子元素清空
}


/**
 * 退款申请弹框上的退款原因下拉框的change事件绑定
 */
function refundReasonTypeChange(){
	//选择“其他”，就显示“说明”输入框，否则隐藏
	var selectedValue = $("#refundReasonType").find("option:selected").val();
	if(selectedValue!=null && selectedValue==6){
		$("#refundReason").val('');//说明输入框内容清除掉
		$('.refund-exp').show();//显示出说明输入框层
	}else{
		$('.refund-exp').hide();//隐藏掉说明输入框层
	}
}



/**
 * 点击“退款申请”按钮事件
 */
function toRefundApplyAjax(orderId){

	//1、---------隐藏“退款申请”按钮，校验入参
	$("#refundApply").hide();
	if(orderId==undefined || orderId==null || orderId==''){
		return;
	}
	clearSubDom();//清空退款弹框的各个被填充元素的子元素
	$("#orderIdForRefundApply").val(orderId);//隐藏orderId的值

	//2、---------异步校验退款神申请资质是否合格
	$.ajax({
		url:'/myspace/ajax/getOrderRefundApplyCheckInfo.do',
		data:{orderId:orderId},
		type:'post',
		dataType:'json',
		success:function(result){
			//3、--------------查询成功后，拼装弹框，并显示
			if(result!=null && result.success){
				var userRefundApplyVO = result.userRefundApplyVO;
				//根据返回值给弹框div赋值
				var replaceName = userRefundApplyVO.orderName;//订单名称
				var actualAmount = (userRefundApplyVO.actualPayAmount*1.00/100.00).toFixed(2);//订单金额（即订单实付金额）
				var deductMoney = (userRefundApplyVO.deductAmount==null)?-1:userRefundApplyVO.deductAmount*1.00/100.00;//扣款金额
				var refundMoney = (userRefundApplyVO.refundAmount==null)?-1:userRefundApplyVO.refundAmount*1.00/100.00;//退款金额
				var refundType = userRefundApplyVO.refundType;//退款类型
				var userDeductDetailVOs = userRefundApplyVO.userDeductDetailVOs;//扣款明细

				//订单名称填充
				$("#replaceName").html(replaceName);

				//订单金额填充
				var $actualAmount = $("#actualAmount");
				var $actualAmoutJqueryObj = "<dfn>&yen;"+actualAmount+"</dfn>";
				$actualAmount.append($actualAmoutJqueryObj);

				//扣款金额、退款金额填充
				var $deductMoney = $("#deductMoney");//扣款金额jQuery对象
				var $refundMoney = $("#refundMoney");//退款金额jQuery对象

				if(refundType=='REFUND' && deductMoney!=-1 && refundMoney!=-1){//退款类型
					var $deductMoneyJqueryObj = "<span><dfn>&yen;"+(deductMoney*1.00).toFixed(2)+"</dfn></span>";//扣款金额dom元素
					$deductMoney.append($deductMoneyJqueryObj);
					var $refundMoneyJqueryObj = '<dfn>&yen;'+(refundMoney*1.00).toFixed(2)+'</dfn>'+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="refund-rep">注：暂不支持退优惠券</span>';//退款金额dom元素
					$refundMoney.append($refundMoneyJqueryObj);
					//退款明细dom元素
					$.each(userDeductDetailVOs,function(index,value){
						 //$itemNameAndDeductAmount = '';
						var itemOrderAndProductName = '';
						itemOrderAndProductName = itemOrderAndProductName + ((value.itemProductName==null)? '' : value.itemProductName);
						itemOrderAndProductName = itemOrderAndProductName + '(' +((value.itemSuppGoodsName==null)? '' : value.itemSuppGoodsName) + ')';
						var $itemNameAndDeductAmount = '<p class="refund-pro"><span class="refund-pri">&yen;'+(value.itemDeductAmount*1.00/100.00).toFixed(2)+'</span> |'+itemOrderAndProductName+'</p>'; //扣款明细金额和子订单名称dom元素
						var $itemRefundExplain = '<p class="refund-rep">扣款说明：'+value.itemDeductExplain+'</p>'; //扣款明细说明dom元素
						$deductMoney.append($itemNameAndDeductAmount);
						$deductMoney.append($itemRefundExplain);
					});
				}else{//售后类型
					$deductMoney.append('<p class="refund-pro"><span class="refund-pri">扣款金额需审核，提交后客服会尽快与您核实</p>');
					$refundMoney.append('<p class="refund-pro"><span class="refund-pri">扣款金额需审核，提交后客服会尽快与您核实</p>');
				}

				//显示弹框
				$('#refundApplyDiv').show();
				//加遮罩
				$('.bg-tan').show();
			}else if(result!=null){
				alert(result.errorMsg);
				$("#refundApply").show();//"退款申请"按钮显示
			}
		},
		error:function(){
			alert("系统异常！");
			$("#refundApply").show();//"退款申请"按钮显示
		}
	});

}

/**
 * 退款申请 入库后台提交
 * @param orderId
 * @param reason
 */
function refundAjax(isNeedVaildNum){
	$("#refundSubmitButton").hide();//隐藏“确定”按钮，防双击
	var orderId = $("#orderIdForRefundApply").val();//订单id

	//1、---------退款原因选择“其他”时，校验说明是否为空(说明为必填项)
	var selectedValue = $("#refundReasonType").find("option:selected").val();
	var reason = $("#refundReasonType").find("option:selected").text();
	if(selectedValue!=null && selectedValue==0){
		alert("请选择退款原因！");
		$("#refundSubmitButton").show();//显示“确定”按钮
		return;
	}
	if(selectedValue!=null && selectedValue==6){
		var refundReason = $.trim($("#refundReason").val());
		if(refundReason==undefined || refundReason==null || refundReason==''){
			alert("请填写说明！");
			$("#refundSubmitButton").show();//显示“确定”按钮
			return;
		}else if(refundReason.length>100){
			alert("说明填写的内容长度超过了100个字符！");
			$("#refundSubmitButton").show();//显示“确定”按钮
			return;
		}else{
			reason = refundReason;
		}
	}

	//2、---------是否需要校验判断
	var isNeedVaild = true;//默认需要
	if(isNeedVaildNum!=null && isNeedVaildNum==1){
		isNeedVaild = false;
	}

	//3、---------异步提交后台
	var domainUrl="/myspace/ajax/refundAjaxSubmit.do";
	if(categoryId=="1" ||categoryId=="17" || categoryId=="18"){//如果是酒店订单申请退款确认提交到酒店的action
		domainUrl="/vstHotelOrder/myspace/ajax/refundAjaxSubmit.do";
	}
	$.ajax({
		url:domainUrl,
		data:{orderId:orderId,reason:reason,isNeedVaild:isNeedVaild},
		type:'post',
		dataType:'json',
		success:function(result){

			if(result!=null && result.resultMap!=null){
				//如果是confirm之后的提交，则直接成功，刷新页面
				if(isNeedVaildNum==1){
					alert("退款申请提交成功！");
					window.location.href="/myspace/order.do";//刷新“我的订单”页面
                    return;
				}

				var comfirmMsg = '';

				if(result.resultMap.IS_CHANGE!=null && !result.resultMap.IS_CHANGE){//退款金额和类型未发生变化时，直接成功，刷新页面
					alert("退款申请提交成功！");
					window.location.href="/myspace/order.do";//刷新“我的订单”页面
                    return;
				}else if(result.resultMap.IS_CHANGE!=null && result.resultMap.IS_CHANGE){//退款金额和类型发生变化时，根据变化弹出相应的confirm弹窗

					if(result.resultMap.BEFORE_REFUND_TYPE!=null
						&& result.resultMap.NOW_REFUND_TYPE!=null
						&& result.resultMap.BEFORE_REFUND_TYPE != result.resultMap.NOW_REFUND_TYPE){//退款变售后
						comfirmMsg = '当前退款条件不满足可退范围，提交后客服会尽快与您核实';
					}else{//退款金额发生变化
						var beforeRefundAmont = result.resultMap.BEFORE_REFUND_AMOUNT*1.00/100.00;
						var nowRefundAmont = result.resultMap.NOW_REFUND_AMOUNT*1.00/100.00;
						comfirmMsg = '因退款时间变化，可退金额由'+beforeRefundAmont+'变化为'+nowRefundAmont;
					}
					if(confirm(comfirmMsg)){
						$("#refundSubmitButton").show();//显示“确定”按钮
						refundAjax(1);
					}else{
						closePopDiv();//隐藏弹框div、去掉遮罩层
					}
				}
			}else{
				alert(result.errorMsg);
				$("#refundSubmitButton").show();//显示“确定”按钮
			}
		},
		error:function(){
			alert("系统异常！");
			$("#refundSubmitButton").show();//显示“确定”按钮
		}
	});
}

/**
 * 退款进度 点击事件
 */
function refundProgress(orderId,categoryId){
	if(orderId==undefined || orderId==null || orderId==''){
		return;
	}
	var openUrl="/myspace/refundProgress.do?orderId="+orderId;
	if(categoryId=="1" ||categoryId=="17" || categoryId=="18"){
		openUrl="/vstHotelOrder/myspace/refundProgress.do?orderId="+orderId+"&categoryId="+categoryId;
	}
	window.open(openUrl);
}









function closePop() {
	$("#floatbox-background").remove();
	$("#floatbox-box").remove();
}

/**
 * 取消订单js
 * @param str
 * @param itemCode
 * @param otherReason
 */
function canel(str, itemCode, otherReason) {
	var data = "orderId=" + str;
	if (itemCode!=null) {
		data = data + "&itemCode=" + itemCode;
	}
	if (otherReason!=null) {
		data = data + "&reason=" + otherReason;
	}
	$.ajax({
		type:"POST", 
		url:encodeURI("/myspace/ordercancel.do?" + data,'UTF-8'),
		async:false, 
		dataType:"json", 
		success:function (json) {
			if (json.status == "true") {
				if(json.supplierChannel=="true"){
					$(".cancel_closed").html("取消申请中.");
				}else{
					$(".cancel_closed").html("您的订单已取消");
				}
				window.setTimeout("window.location.reload()", 5000);
			} else {
				alert("\u53d6\u6d88\u8ba2\u5355\u9519\u8bef\uff01");
			}
		}
	});
}

//function canelRefundApply(str,reason,bizType){
//	$.ajax({
//		type:"POST",
//		url:"/ajax/validateOrdRefundApply.do",
//		async:false,
//		dataType:"json",
//        data:{
//            orderId:str,
//            reason:reason,
//            bizType:bizType
//        },
//		success:function (json) {
//            if(json != null){
//                $(".cancel_closed").html(json.msg);
//                window.setTimeout("window.location.reload()", 5000);
//            }else{
//                alert("服务器端处理失败!");
//            }
//		}
//	});
//}

/**
 * 退款明细点击事件
 * @param orderId
 * @param bizType
 */
/*function toRefundDetail(orderId, bizType){
	$.ajax({
		type:"POST", 
		url:"/ajax/refundDetail.do?orderId=" + orderId + "&bizType= " + bizType,
		async:false, 
		dataType:"json", 
		success:function (json) {
			var con = '<div class="tkmx_box" id="js_tkmx"><p><strong>订单金额：</strong><b>'+json.orderAmount+'</b>元</p> ' +
			'<p><strong>已支付金额：</strong><span class="lv-c1">'+json.actualPay+'</span>元<span class="c_999 ml10">订单金额￥'+json.orderAmount+'-优惠￥'+json.youHuiAmount+'</span>' +
			'</p><p><strong>退款金额：</strong><span class="lv-c1">'+json.refundAmount+'</span>元</p>';
			if(json.pealtyAmount == null || json.pealtyAmount == "0.0"){
				con += '</div>';
			}else{
				con += '<p><strong>违约金：</strong>'+json.pealtyAmount+'元</p></div>';
			}
			pandora.dialog({
				title: "退款明细",
				content:con
			});
		}
	});
}*/
function pops(str) {
	$.pop({content:"<div class='order_cancel'><p>\u4f60\u786e\u8ba4\u8981\u53d6\u6d88\u8ba2\u5355" + str + "\uff1f</p><input name='' type='button' value='\u662f' onclick=canel('" + str + "') /><input name='' type='button' onclick='javascript:closePop();' value='\u5426'/></div>", boxConfig:{width:"280px", marginLeft:"-140px"}});
}

function sendSms(obj,id,mobile,userOrderId){
	$("#resendmsg").attr("disabled","true");
	$("#resendmsg").removeClass("sm-gray-btn");
	$("#reorderheadId").attr("value",id);
	$("#sendmobile").attr("value",mobile);
	$("#reuserOrderId").attr("value",userOrderId);
	subSendSms();
}
function subSendSms() {
		var float_layer = $("#float_layer");
		var float_bg = $("#float_bg");
		var close_btn = $("#close_btn");
		layer_xy(float_layer);
		float_layer.fadeIn("fast");
		var close_btn = $("#close_btn");
		close_btn.click(function(){
			float_bg.css({"display":""});
			float_layer.fadeOut("fast");
		 })
		runtime();
	}
function layer_xy(obj){
	 var windows = $(window);
	 var ctop = (windows.height() - obj.height())/2;
	 var cleft = (windows.width() - obj.width())/2;
	 if(ctop<=0){ctop = 0 + windows.scrollTop()}else{ctop=parseInt(ctop + windows.scrollTop())};
	 if(cleft<=0){cleft = 0}else{cleft=parseInt(cleft)};
	 obj.css({"top":ctop + "px","left":cleft + "px"});
}
var maxtime = -1;
var timer=null;
function resendmsg(){
	maxtime=60;
	var orderheadid=$("#reorderheadId").val();
	var mobile = $("#sendmobile").val();
	var reuserOrderId = $("#reuserOrderId").val();
	var dataMember = {'orderHeadId':orderheadid,'mobileNumber':mobile,'reuserOrderId':reuserOrderId};
	timer = setInterval("runtime()",1000);
	$.ajax({
		type:"POST", 
		url:"/myspace/resendMsg.do", 
		async:false, 
		data:dataMember, 
		dataType:"json", 
		success:function (data) {}
	});
}

function runtime(){
	if(maxtime>0){
		$("#resendmsg").attr("disabled","true");
		$("#resendmsg").addClass("sm-gray-btn");  
	}else{
		$("#resendmsg").removeAttr("disabled");
		$("#resendmsg").removeClass("sm-gray-btn");
	}
	if(maxtime>=0){   
		seconds = Math.floor(maxtime%60);   
		msg ="重发倒计时："+seconds;   
		document.getElementById("timer").innerHTML=msg;  
		--maxtime;
	}else{   
		clearInterval(timer);  
	}   
}



/*********************酒店退款按钮事件**************************/
/**
  点击“退款申请”按钮事件
*/
var categoryId="";
function vstOrdertoRefundApplyAjax(orderId,categoryId) {
	this.categoryId = categoryId;
	//1、---------隐藏“退款申请”按钮，校验入参
	$("#refundApply").hide();
	if (orderId == undefined || orderId == null || orderId == '') {
		return;
	}
	clearSubDom();//清空退款弹框的各个被填充元素的子元素
	$("#orderIdForRefundApply").val(orderId);//隐藏orderId的值

	//2、---------异步校验退款神申请资质是否合格
	$.ajax({
		url: '/vstHotelOrder/myspace/ajax/getOrderRefundApplyCheckInfo.do',
		data: {orderId: orderId},
		type: 'post',
		dataType: 'json',
		success: function (result) {
			//3、--------------查询成功后，拼装弹框，并显示
			if (result != null && result.success) {
				var userRefundApplyVO = result.userRefundApplyVO;
				//根据返回值给弹框div赋值
				var replaceName = userRefundApplyVO.orderName;//订单名称
				var listCancelTime = userRefundApplyVO.listCancelTime;//最后取消时间
				var deductTypeName = userRefundApplyVO.deductTypeName;//预付扣款类型
				var actualAmount = (userRefundApplyVO.actualPayAmount * 1.00 / 100.00).toFixed(2);//订单金额（即订单实付金额）
				var deductMoney = (userRefundApplyVO.deductAmount == null) ? -1 : userRefundApplyVO.deductAmount * 1.00 / 100.00;//扣款金额
				var refundMoney = (userRefundApplyVO.refundAmount == null) ? -1 : userRefundApplyVO.refundAmount * 1.00 / 100.00;//退款金额
				var refundType = userRefundApplyVO.refundType;//退款类型
				var userDeductDetailVOs = userRefundApplyVO.userDeductDetailVOs;//扣款明细

				//订单名称填充
				$("#replaceName").html(replaceName);

				//订单金额填充
				var $actualAmount = $("#actualAmount");
				var $actualAmoutJqueryObj = "<dfn>&yen;" + actualAmount + "</dfn>";
				$actualAmount.append($actualAmoutJqueryObj);

				//扣款金额、退款金额填充
				var $deductMoney = $("#deductMoney");//扣款金额jQuery对象
				var $refundMoney = $("#refundMoney");//退款金额jQuery对象

				if (refundType == 'REFUND' && deductMoney != -1 && refundMoney != -1 ) {//退款类型 //refundType=='REFUND' && deductMoney!=-1 && refundMoney!=-1
					if(categoryId==1){
						var $deductMoneyJqueryObj = "<span><dfn>&yen;" + (deductMoney * 1.00).toFixed(2) + "</dfn></span>";//扣款金额dom元素
						$deductMoney.append($deductMoneyJqueryObj + "</br><span>您所订购的房间</br>在" + listCancelTime + "之前提供无损退改房间</br>" + deductTypeName + "</span>");
						var $refundMoneyJqueryObj = '<dfn>&yen;' + (refundMoney * 1.00).toFixed(2) + '</dfn>' + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="refund-rep">注：暂不支持退优惠券</span>';//退款金额dom元素
						$refundMoney.append($refundMoneyJqueryObj);
					}else  if(categoryId==17 || categoryId==18){
						$deductMoney.append("您所订购的订单需要工作人员与供应商沟通确认退款金额提交退款申请后，会由我们工作人员与您联系");
						$refundMoney.append("待确认");
					}

					//退款明细dom元素
					$.each(userDeductDetailVOs, function (index, value) {
						//$itemNameAndDeductAmount = '';
						var itemOrderAndProductName = '';
						itemOrderAndProductName = itemOrderAndProductName + ((value.itemProductName == null) ? '' : value.itemProductName);
						itemOrderAndProductName = itemOrderAndProductName + '(' + ((value.itemSuppGoodsName == null) ? '' : value.itemSuppGoodsName) + ')';
						var $itemNameAndDeductAmount = '<p class="refund-pro"><span class="refund-pri">&yen;' + (value.itemDeductAmount * 1.00 / 100.00).toFixed(2) + '</span> |' + itemOrderAndProductName + '</p>'; //扣款明细金额和子订单名称dom元素
						var $itemRefundExplain = '<p class="refund-rep">扣款说明：' + value.itemDeductExplain + '</p>'; //扣款明细说明dom元素
						$deductMoney.append($itemNameAndDeductAmount);
						$deductMoney.append($itemRefundExplain);
					});
				}else {//售后类型
					$deductMoney.append('<p class="refund-pro"><span class="refund-pri">扣款金额需审核，提交后客服会尽快与您核实</p>');
					$refundMoney.append('<p class="refund-pro"><span class="refund-pri">扣款金额需审核，提交后客服会尽快与您核实</p>');
				}

				//显示弹框
				$('#refundApplyDiv').show();
				//加遮罩
				$('.bg-tan').show();
			} else if (result != null) {
				alert(result.errorMsg);
				$("#refundApply").show();//"退款申请"按钮显示
			}
		},
		error: function () {
			alert("系统异常！");
			$("#refundApply").show();//"退款申请"按钮显示
		}
	});

}

/**
 * 酒店取消
 */
function cancelHotel() {
	var reasonRadio = $('input:radio[name="itemCode"]:checked');
	var itemCode = reasonRadio.val();
	var orderId = $("#hotel_cancel_order_id_input_hidden").val();
	var reason = "";
	if (itemCode == "57") {
		reason = "其他_" + $("#otherReason_hotel").val();
	}

	if ((typeof(itemCode) == "undefined") && (typeof(reason) == "undefined" || reason == "")) {
		alert("请选择或输入取消订单理由!");
		return;
	}

	canel(orderId, itemCode, reason);

	var leftN = $(window).width() / 2 - 162, topN = $(window).height() / 2 - 151;
	$('.hotel_order_cancel_div').show();
	$('.hotel_order_cancel_div_t').hide();
	$(".hotel_order_cancel_t01").fadeIn(10).css({"top": topN + $(window).scrollTop(), "left": leftN});
}

/**
 * 关闭div dialog
 */
function closeCannotChangeDiv() {
	$('.hotel_cannto_change_t').hide();
}
function closeCancelingDiv() {
	$('.hotel_canceling_t').hide();
}
function closeCancelSuccessDiv() {
	$('.hotel_cancel_success_t').hide();
}
function closeCancelFailDiv() {
	$('.order_cancel_fail_t').hide();
}


//酒店订单取消
function toCancelHotel(orderId) {
	$("#hotel_cancel_order_id_input_hidden").val(orderId);
	var leftN = $(window).width() / 2 - 162, topN = $(window).height() / 2 - 151;
	$('.hotel_order_cancel_div').show();
	$(".hotel_order_cancel_div_t").fadeIn(10).css({"top": topN + $(window).scrollTop(), "left": leftN});

}


//订单不退不改

function orderNoChange(orderId, productName, paymentTarget, hotelTel,categoryId) {
	if(categoryId == 1){
		if (paymentTarget == "PREPAID") {
			$("#contact_information").text("预付：如有疑问，可联系驴妈妈客服热线1010-6060");
		} else if(paymentTarget == "PAY"){
			if(hotelTel==undefined || hotelTel==""){
				$("#contact_information").text("");
			}else{
				$("#contact_information").text("到付：如有疑问，可联系酒店电话:" + hotelTel);
			}
		}
		$(".cannot_change_show_message").html("非常报歉 ，您的订单酒店要求下单后不得退改");
	}else if(categoryId == 17 || categoryId == 18){
		$(".cannot_change_show_message").html("非常抱歉，您的订单不支持退改");
		$("#contact_information").html("如有疑问，可以联系驴妈妈客服热线1010-6060");
	}
	//productName过长截取
	if(productName.length >40){
		productName = productName.substring(0,40)+'...';
	}
	$("#hotel_name").text(productName);
	$("#orderIdBtn").val(orderId);

	$('.hotel_cannto_change_t').show();
	$('#hotel_cannot_change_div').show();
	//$(".hotel_cannto_change_t").fadeIn(10).css({"top":topN+$(window).scrollTop(),"left":leftN});
}

//订单取消中
function toCancelOn(orderId, productName, cancelTime) {
	$(".hotel_canceling_t .order_name").text(productName);
	$(".hotel_canceling_t .order_cancel_time").text(cancelTime);
	$("#hotel_canceling_orderId").val(orderId);
	var leftN = $(window).width() / 2 - 162, topN = $(window).height() / 2 - 151;
	$('.hotel_canceling').show();
	$(".hotel_canceling_t").fadeIn(10).css({"top": topN + $(window).scrollTop(), "left": leftN});
}

//订单取消成功
function toCancelSuccess(orderId, productName, cancelTime) {
	//productName过长截取
	if(productName.length >40){
		productName = productName.substring(0,40)+'...';
	}
	
	$(".hotel_cancel_success_t .order_name").text(productName);
	$(".hotel_cancel_success_t .order_cancel_time").text(cancelTime);
	$(".hotel_cancel_success_t").show();
	$('.hotel_cancel_success').show();
	$('#hotel_cancel_success_div').show();
}

//订单取消失败
function toCancelFail(orderId, productName, cancelTime) {
	$(".order_cancel_fail_t .order_name").text(productName);
	$(".order_cancel_fail_t .order_cancel_time").text(cancelTime);
	$("#orderIdBtn4").val(orderId);
	var leftN = $(window).width() / 2 - 162, topN = $(window).height() / 2 - 151;
	$('.hotel_cancel_fail').show();
	$(".order_cancel_fail_t").fadeIn(10).css({"top": topN + $(window).scrollTop(), "left": leftN});
}

