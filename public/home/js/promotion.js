
//促销信息
function showPromPromtion(data){
	try {
		var promList=data.attributes.promList;
		var price=data.attributes.price;
			if(promList!=null){
				var promStr="";
				var channelPromStr ="";
				var selectChannel=$("input[paymentChannel]:checked").val();
				var kval=-1;
				var lastAmount=0;
				$.each(promList, function(k, item){
					var branchs=item.branchs;
					var promType="";
					if(branchs.indexOf('MAN_TYPE')>-1){
						promType='成人';
					}
					if(branchs.indexOf('CHILD_TYPE')>-1){
						if(promType=='成人'){
							promType+="、";
						}
						promType+='儿童';
					}
					if(item.promitionType!="ORDERCHANNELFAVORABLE"){
					promStr+="<input type='hidden' class='promotionMap' name='promotionMap["+item.key+"]' value='"+item.promPromotionId+"'>";
					promStr+="<dd class='pl_100'><span class='tags101'>";
					if(item.promitionType=="eraly_order_type"){
						promStr+="早订早惠</span><span class='yh_price'>- <dfn>¥</dfn>"+item.discountAmount/100+"</span>";
						promStr+=promType;
						promStr+="提前"+item.ruleValue+"天预订，销售单价优惠";
					}
					else if(item.promitionType=="more_order_more_favorable"){
						promStr+="多订多惠</span><span class='yh_price'>- <dfn>¥</dfn>"+item.discountAmount/100+"</span>";
						promStr+=promType;
						if(item.ruleType=="EACH_FULL"){
							promStr+="每满"+item.ruleValue+"份，销售总价优惠";
						}if(item.ruleType=="FULL"){
							promStr+="满"+item.ruleValue+"份起，销售单价优惠";
						}if(item.ruleType=="REDUCE_PRICE"){
							promStr+="满"+item.ruleValue+"份后，每增加"+item.promResult.addEach+"份，销售总价优惠";
						}
						
					}else if(item.promitionType=="IMMEDIATELY_FAVORABLE"){
						promStr+="立减</span><span class='yh_price'>- <dfn>¥</dfn>"+item.discountAmount/100+"</span>";
						
						promStr+=promType;
						if(item.ruleType=="EACH_FULL"){
							promStr+="满"+item.ruleValue/100+"元，销售总价优惠";
						}if(item.ruleType=="REDUCE_PRICE"){
							promStr+="满"+item.ruleValue/100+"元后，每增加"+item.promResult.addEach/100+"元，销售总价优惠";
						}
						
					}else if(item.promitionType=="LINERfAVORABLE"){
						promStr+="邮轮优惠</span><span class='yh_price'>- <dfn>¥</dfn>"+item.discountAmount/100+"</span>";//邮轮下单页处理
					}
					if(item.promitionType!="LINERfAVORABLE"){
					if(item.promResult.amountType=="AMOUNT_FIXED"){
							promStr+=item.promResult.fixedAmount/100+"元，";
						}
					if(item.promResult.amountType=="AMOUNT_PERCENT"){
						promStr+=item.promResult.rateAmount+"%，";
					}
					}
					promStr+="合计优惠"+item.discountAmount/100+"元</dd>";
				}
				else{//渠道优惠
					if(channelPromStr==""){
						channelPromStr+="<dd class='pl_70'><span class='tags101'>渠道优惠</span><dd/>";
						channelPromStr+="<dd class='pl_70'><input id='noChannelProm' onclick='clearChannelPromotion(\"true\")' type='radio' paymentChannel='0' checked='checked' value='none'/>不使用渠道促销</dd>";
					}
					channelPromStr+="<dd class='pl_70'><input count='"+item.discountAmount+"' type='radio' paymentChannel='1' onclick=selectChannelPromotion('channelPromotionMap_"+k+"') id='channelPromotionMap_"+k+"'   key='"+item.key+"'  value='"+item.promPromotionId+"'>使用"+item.channelOrder+"支付，";
					var dw = "";
					var ruleValue="";
					var addEch="";
					if(item.promResult.ruleCalcType=="order_AMOUNT"){
						dw="元";
						ruleValue=item.ruleValue/100;
						addEch =item.promResult.addEach/100;
					}
					if(item.promResult.ruleCalcType=="order_count"){
						dw="份";
						ruleValue=item.ruleValue;
						addEch =item.promResult.addEach;
					}
					if(item.ruleType=="FULL"){
						channelPromStr+="满"+ruleValue+""+dw+"起，销售单价优惠";
					}
					if(item.ruleType=="EACH_FULL"){
						channelPromStr+="满"+ruleValue+""+dw+"起，销售总价优惠";
					}
					if(item.ruleType=="REDUCE_PRICE"){
						channelPromStr+="满"+ruleValue+""+dw+"后，每增加"+addEch+""+dw+"，销售总价优惠";
					}
					
					if(item.promResult.amountType=="AMOUNT_FIXED"){
						channelPromStr+=item.promResult.fixedAmount/100+"元，";
					}
					if(item.promResult.amountType=="AMOUNT_PERCENT"){
						channelPromStr+=item.promResult.rateAmount+"%，";
					}
					channelPromStr+="合计优惠"+item.discountAmount/100+"元</dd>";
					if(kval==-1 || lastAmount<item.discountAmount){
						kval=k;
						lastAmount=item.discountAmount;
					}
					
				}
					});
				promStr+=channelPromStr;
				$("#promPromotionDiv").append(promStr);
				$(".isProm").css('display','');
				
				//$("#promPromotionDiv").css('display','');
				$("#promotinTag").css('display','');
				if(typeof(selectChannel)!="undefined"){
					$("#promPromotionDiv").find("input[type='radio'][paymentChannel][value='"+selectChannel+"']").attr("checked",true);
					var selectId =$("#promPromotionDiv").find("input[type='radio'][paymentChannel][value='"+selectChannel+"']").attr("id");
					if(selectId!="noChannelProm"&&typeof(selectId)!="undefined"){
						selectChannelPromotion(selectId);
					}
				}
			}
			if(promList.length==0){
				$("#promPromotionDiv").append("<dd></dd>");
				$(".isProm").css('display','none');
				$("#promPromotionDiv dd").remove();
			}
			if(kval!=-1){
				selectChannelPromotion('channelPromotionMap_'+kval);
			}

	}catch(e){
		
	}
}

function selectChannelPromotion(id){
	clearChannelPromotion('true');
	$("#noChannelProm").attr("checked",false);
	var selectRadio = document.getElementById(""+id);
	selectRadio.checked=true;
	var key = selectRadio.getAttribute("key");
	selectRadio.setAttribute("name","promotionMap["+key+"]");
	var oughtPayToYuan= $("#oughtPayToYuan").attr("defaultOughtPay");
	
	var promotionPrice= $("#promotionPrice").attr("defaultPromValue");
	
	var count = selectRadio.getAttribute("count");
	
	oughtPayToYuan = Number(oughtPayToYuan);
	promotionPrice= Number(promotionPrice);
	count= Number(count)/100;
	oughtPayToYuan=oughtPayToYuan-count;
	oughtPayToYuan = Math.round(oughtPayToYuan*100)/100;
	if(oughtPayToYuan<0){
		oughtPayToYuan=0;
	}
	promotionPrice=promotionPrice+count;
	 $("#oughtPayToYuan").html(oughtPayToYuan);
	 $("#promotionPrice").html(promotionPrice);
}

function clearChannelPromotion(clearSelect){
	$("input[id^=channelPromotionMap_]").each(function(index,currObj){
		if(clearSelect=='true'){
			currObj.checked=false;
		}
		currObj.name="";
	});
	var oughtPayToYuan= $("#oughtPayToYuan").attr("defaultOughtPay");
	var promotionPrice= $("#promotionPrice").attr("defaultPromValue");
	$("#oughtPayToYuan").html(oughtPayToYuan);
	$("#promotionPrice").html(promotionPrice);
}

//清空促销信息
function cleanPromotion(){
	$(".promotionMap").each(function(k,obj){
		obj.name="";
		obj.value="";
	});
	$(".isProm").css('display','none');
	$("#promPromotionDiv dd").remove();
	clearChannelPromotion('false');
}

var maxBonus=0;
function bonusChange(){
	$("#target").val("bonus");
	if(ValidateBonus()){
		checkStock(true);
	}
}

//是否使用优惠券
$('input[type=radio][name=youhui]').bind('click',function(){
	var v=$(this).val();
	$("#couponChecked").val(v);
	if(v=="false"){
		//优惠券
		$("#couponCode").val("");
		$("#couponVerifySpan").next("span.error_text").html("");
        $("#couponVerifySpan").closest("div").removeClass("error_show");
        //奖金
        $("#bonus_number").val("");
        $("#bonus_error_msg").html('');
    	$("#bonus_error_msg").css("display","none");
	}
	if(v=="bonus"){
		$("#bonus_number").val("0.00");
		$("#couponCode").val("");
		$("#couponVerifySpan").next("span.error_text").html("");
        $("#couponVerifySpan").closest("div").removeClass("error_show");
	}
	if(v=="coupon"){
		$("#bonus_number").val("");
        $("#bonus_error_msg").html('');
    	$("#bonus_error_msg").css("display","none");
	}
	checkStock();
});

function ValidateBonus(){
	$("#bonus_error_msg").html('');
	$("#bonus_error_msg").css("display","none");
	var bonus = $("#bonus_number").val();
	var re = /^(\d+\.\d{1,2}|\d+)$/
	if(bonus==""){
		//$("#target").val("");
		$("#bonus_number").val(0.00);
		return true;
	}
	if(!re.test(bonus)){
		$("#bonus_error_msg").html('<i class="tip-icon tip-icon-error"></i>输入奖金抵扣格式不正确');
		$("#bonus_error_msg").css("display","block");
		$("#target").val("");
		return false;
	}
	if(parseFloat(bonus)>parseFloat(maxBonus)){
		$("#bonus_error_msg").html('<i class="tip-icon tip-icon-error"></i>奖金抵扣额度不能超过最大抵扣额度');
		$("#bonus_error_msg").css("display","block");
		$("#target").val("");
		return false;
	}
	return true;
}


$("#couponVerifySpan").click(function(){
	clickCouponVerify($(this));
});

function clickCouponVerify(currObj) {
	var code=$("#couponCode").val();
    if($.trim(code)==""){
	    $(currObj).closest("div").addClass("error_show");
	    $(currObj).next("span.error_text").html('<i class="tip-icon tip-icon-error"></i>请输入优惠券代码.');//.css('display','inline-block')
	   	return;
    }
    $(currObj).next("span.error_text").html("");
    $(currObj).closest("div").removeClass("error_show");
   	checkStock();
}

$("#couponCode").blur(function() {
	clickCouponVerify("#couponVerifySpan");
});

$("#couponCode").change(function(){
   var code=$("#couponCode").val();
   if($.trim(code)==""){
  	 $("#couponChecked").val("false");
  	 $(this).closest("div").addClass("error_show");
  	 $(this).closest("div").find("span.error_text").html('<i class="tip-icon tip-icon-error"></i>请输入优惠券代码.');
	 checkStock();
   }
});