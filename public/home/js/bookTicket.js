$(function(){
			// 增加门票人数
			$('li.table_4 a.num_add').bind('click',function(){
				LVMAMA.order.ticket.bookNumOnchangeComm(this,"+");
			});
			
			// 减少门票人数
			$('li.table_4 a.num_subtraction').bind('click',function(){
				LVMAMA.order.ticket.bookNumOnchangeComm(this,"-");
			});

            // 保险数量变化
            $('#order_submit').on('change','#insuranceDiv .num_text',function(){
                LVMAMA.order.ticket.insuranceNumChange(this,"");
            });

			$("ul.bx_tab li").live('click', function(){
				LVMAMA.order.ticket.setInsuranceNum(LVMAMA.order.ticket.calBaseTicketPersonCount());
                LVMAMA.order.ticket.bxNumBussiness();
				bookNumOnchangeCallback.invoke();
			});

			//增加游玩人手机号-注册功能
			$("body").delegate("[item_type='main']", "blur", function(){
				var jThis = $(this);
				var mobileVal = jThis.val();
				if( !_lvPageTool.isMobile(mobileVal) ){	//condition: 非法手机号码
					_lvPageTool.refreshMobileComment('exception');
					return;
				}
				else{
					_lvPageTool.refreshMobileComment('init');
				}
				if(_lvPageTool.isLogin()){				//condition: 已经登录
					return;
				}

				_lvPageTool.isFrozenMobile({
					mobileVal: mobileVal,
					frozenFun: function(){_lvPageTool.refreshMobileComment('frozen');},
					isLvmmFun: function(){
						_lvPageTool.isLvmamaMobile(
								{
									mobileVal: mobileVal,
									registerFun :function(){		//如果需要注册,调用此函数
										_lvPageTool.refreshMobileComment('register');
									},
									isLVMobileFun: function(){		//如果是已注册手机号
										_lvPageTool.refreshMobileComment('init');
									}
								}
							);
					}});
			});
			//增加收件人手机注册功能
			//该功能是对游玩人手机号注册功能的补充，对于游玩人无手机号的情况拿收件人手机号进行注册，并校验是否冻结
			$("body").delegate("[item_type='main_deliv']", "blur", function(){
				//如果游玩人手机号已经存在也不进行后续操作。
				if($("body [item_type='main']").length>0){
					return;
				}
				
				var jThis = $(this);
				var mobileVal = jThis.val();
				if( !_lvPageTool.isMobile(mobileVal) ){	//condition: 非法手机号码
					_lvPageTool.refreshDeliverMobileComment('exception');
					return;
				}
				else{
					_lvPageTool.refreshDeliverMobileComment('init');
				}
				if(_lvPageTool.isLogin()){				//condition: 已经登录
					return;
				}
				_lvPageTool.isFrozenMobile({
					mobileVal: mobileVal,
					frozenFun: function(){_lvPageTool.refreshDeliverMobileComment('frozen');},
					isLvmmFun: function(){
						_lvPageTool.isLvmamaMobile(
								{
									mobileVal: mobileVal,
									registerFun :function(){		//如果需要注册,调用此函数
										_lvPageTool.refreshDeliverMobileComment('register');
									},
									isLVMobileFun: function(){		//如果是已注册手机号
										_lvPageTool.refreshDeliverMobileComment('init');
									}
								}
							);
					}});
			});
			
			$("li.table_4 span input").change(function(){
				var max=$(this).attr("maxQuantity");
				var min=$(this).attr("minQuantity");
				var mainItem=$(this).attr("mainItem");
				var num=$(this).val();

                var goodsid = $(this).attr('goodsid');
                var ticketType = $(this).attr("ticketType");
                if(ticketType == "DISNEY_TICKET"){
                    var msg = LVMAMA.order.ticket.checkTotalNumDisneyTicket(num);
                    if(msg != ""){
                        num = LVMAMA.order.ticket.countDisneyTicketNum(num,goodsid);
                        alert(msg);
                        $(this).val(num);
                    }

                   /* if(msg != ""){
                        disableSubmitButton();
                        $.alert(msg);
                        return;
                    }else{
                        enableSubmitButton();
                    }*/
                }

				var integerReg = "^[1-9]*[0-9][0-9]*$";
				if($.trim($(this).val()).match(integerReg)){
					if(parseInt(num)>parseInt(max)){
						$(this).val(max);
					}
					if(parseInt(num)<parseInt(min)){
						$(this).val(min);
					}
				}else{
					if(mainItem=="true"){
						if(min>0){
							$(this).val(min);
						}else{
							$(this).val(1);
						}
					}else{
						$(this).val(0);
					}
				}
				if(parseInt(num)>=parseInt(max)){
					LVMAMA.order.ticket.showInfo($(this),"最多预订数量："+max);
                    if(max!=min){
                        $(this).siblings('a.num_add').addClass('num_stop');
                        $(this).siblings('a.num_subtraction.num_stop').removeClass('num_stop');
                    }

				}
				if(parseInt(num)<=parseInt(min)&&mainItem=="true"){
					LVMAMA.order.ticket.showInfo($(this),"至少预订数量："+min);
                    if(max!=min){
                        $(this).siblings('a.num_add.num_stop').removeClass('num_stop');
                        $(this).siblings('a.num_subtraction').addClass('num_stop');
                    }
				}
				LVMAMA.order.ticket.ticketNumControlBxNum();
				bookNumOnchangeCallback.invoke();
			});
			
			// 提交订单
			$('div.fk_box a.btn_fk').bind('click',function(){
				var skuRelation = $("[name='masterSlaveGoodsRelation']").attr("value");
				skuRelation = eval("("+skuRelation+")");
				for(var key in skuRelation){
					if(parseInt($("[goodsid='"+key+"']").attr("value")) > 0 && parseInt($("[goodsid='"+skuRelation[key]+"']").attr("value")) == 0){
						alert("很遗憾，受限于景区要求，儿童需同行成人陪伴，无法单独预订儿童票");
						return;
					}
				}
				
				if(ticketOrderSubmitFlag){
					return;
				}
                //验证票种信息
                if(!checkTicketTypeInfor()){
                    return;
                }

				if(!Express.check()){
					return;
				}
				if($("#isFrozenFlag").val()=='Y'){
					return;
				}
				if(yanzhengOk() && LVMAMA.order.ticket.orderValidate()){
                    //是否是马戏票
                    if(isCircusFlag()){
                        $("li.table_4 span input").each(function(){
                            var goodsId=$(this).attr("goodsId");
                            var mainItem=$(this).attr("mainItem");
                            if(mainItem=="true"){
                                var option = $('.d_ccSelect option:selected');
                                $("input[name='itemMap["+goodsId+"].circusActInfo.circusActId']").val(option.attr("data-id"));
                                $("input[name='itemMap["+goodsId+"].circusActInfo.circusActStartTime").val(option.attr("start-time"));
                                $("input[name='itemMap["+goodsId+"].circusActInfo.circusActEndTime").val(option.attr("end-time"));
                            }
                        });
                    }
					//是否使用优惠券
					//var couponChecked= $("#couponChecked").val();
					var youhuiType = $("#youhui:checked").val();
					if(youhuiType=="coupon"&&$.trim($("#couponCode").val())==""){
						$("#couponVerifySpan").closest("div").addClass("error_show");
						$("#couponVerifySpan").next("span.error_text").html('<i class="tip-icon tip-icon-error"></i>请输入优惠券代码.');
						return false;
					}
					if(youhuiType=="bonus"){
						if(!ValidateBonus()){
							return false;
						}
					}
					var bxCount=0;
					var bxNumber=LVMAMA.order.ticket.calbaoxianPersonCount();
					$("dl.user_dl.bx_check dd label input[type=checkbox]:checked").each(function(i){
						bxCount=parseInt(bxCount)+parseInt(1);
					});
					if(bxCount!=bxNumber){
						LVMAMA.order.ticket.showErrorInfo(true,"被保险人与购买的保险数量不一致。");
						return;
					}

					if( $("#checkCodeValid").length>0){
						$("#checkCode2").val($("#pic_checkCode").val());
						$.ajax({
							url: "/vst_front/pic/checkPic",
							data: {pic_checkCode:$("#pic_checkCode").val(),uid:new Date().getTime()},
							async:false,
							success: function(result){
								if(result=='success'){
									$("#pic_checkCode").attr("disabled", "true");
									$("#checkCodeValid").val(1);
								}
							}
						});
						if( $("#checkCodeValid").val()!='1'){
							LVMAMA.order.ticket.showErrorInfo(true,"请您输入正确的校验码。");
							return;
						}
					}
				
			        if($(".promotionMap").size()>0) {
						if(!checkPromotionList()){
							return;
						}
					}
                    if(!checkOrderForPayOther()){
                        return;
                    }
					if($("div.fk_box a.btn_fk").attr('submitFlag')=="true"){
                        if(isCircusFlag()){
                            $.post("/vst_front/book/ajax/checkStock.do",getFormData(),function(data){
                                if(data.success){
                                    ticketOrderSubmitFlag=true;
                                    $("form[name='orderForm']").submit();
                                }else{
                                    //库存余量不足
                                    var $warningDom = "<div class=\"d_alertError d_alertBox\"><span class=\"tip-icon-big tip-icon-big-warning\"></span><em>当前余量不足，请选择其他日期或场次。</em></div>";
                                    showDialog($warningDom);

                                    $("li.table_4 span input").each(function(){
                                        var goodsId=$(this).attr("goodsId");
                                        var mainItem=$(this).attr("mainItem");
                                        if(mainItem=="true"){
                                            var option = $('.d_ccSelect option:selected');
                                            $("input[name='itemMap["+goodsId+"].circusActInfo.circusActId']").val("");
                                            $("input[name='itemMap["+goodsId+"].circusActInfo.circusActStartTime").val("");
                                            $("input[name='itemMap["+goodsId+"].circusActInfo.circusActEndTime").val("");
                                        }
                                    });

                                    return;
                                }
                            },"JSON");
                        }else{
                            ticketOrderSubmitFlag=true;
                            $("form[name='orderForm']").submit();
                        }
					}
				}
			});

        //赋值用户填写信息到userInfos中
        $("#Jtenantlist").live('mouseout',function(){
            LVMAMA.order.ticket.fillUserInfosMap();
        });
        $("#expressageInfoDiv").live('mouseout',function(){
            LVMAMA.order.ticket.fillUserInfosMap();
        });
});

var ticketOrderSubmitFlag=false;
var maxBonus=0;
function bonusChange(){
	$("#target").val("bonus");
	if(ValidateBonus()){
		checkStock(true);
	}
}

//提交订单
function submitOrder(){

    var skuRelation = $("[name='masterSlaveGoodsRelation']").attr("value");
    skuRelation = eval("("+skuRelation+")");
    for(var key in skuRelation){
        if(parseInt($("[goodsid='"+key+"']").attr("value")) > 0 && parseInt($("[goodsid='"+skuRelation[key]+"']").attr("value")) == 0){
            alert("很遗憾，受限于景区要求，儿童需同行成人陪伴，无法单独预订儿童票");
            return;
        }
    }

    if(ticketOrderSubmitFlag){
        return;
    }
    //验证票种信息
    if(!checkTicketTypeInfor()){
        return;
    }

    if(!Express.check()){
        return;
    }
    if($("#isFrozenFlag").val()=='Y'){
        return;
    }
    if(yanzhengOk() && LVMAMA.order.ticket.orderValidate()){
        //是否是马戏票
        if(isCircusFlag()){
            $("li.table_4 span input").each(function(){
                var goodsId=$(this).attr("goodsId");
                var mainItem=$(this).attr("mainItem");
                if(mainItem=="true"){
                    var option = $('.d_ccSelect option:selected');
                    $("input[name='itemMap["+goodsId+"].circusActInfo.circusActId']").val(option.attr("data-id"));
                    $("input[name='itemMap["+goodsId+"].circusActInfo.circusActStartTime").val(option.attr("start-time"));
                    $("input[name='itemMap["+goodsId+"].circusActInfo.circusActEndTime").val(option.attr("end-time"));
                }
            });
        }
        //是否使用优惠券
        //var couponChecked= $("#couponChecked").val();
        var youhuiType = $("#youhui:checked").val();
        if(youhuiType=="coupon"&&$.trim($("#couponCode").val())==""){
            $("#couponVerifySpan").closest("div").addClass("error_show");
            $("#couponVerifySpan").next("span.error_text").html('<i class="tip-icon tip-icon-error"></i>请输入优惠券代码.');
            return false;
        }
        if(youhuiType=="bonus"){
            if(!ValidateBonus()){
                return false;
            }
        }
        var bxCount=0;
        var bxNumber=LVMAMA.order.ticket.calbaoxianPersonCount();
        $("dl.user_dl.bx_check dd label input[type=checkbox]:checked").each(function(i){
            bxCount=parseInt(bxCount)+parseInt(1);
        });
        if(bxCount!=bxNumber){
            LVMAMA.order.ticket.showErrorInfo(true,"被保险人与购买的保险数量不一致。");
            return;
        }

        if( $("#checkCodeValid").length>0){
            $("#checkCode2").val($("#pic_checkCode").val());
            $.ajax({
                url: "/vst_front/pic/checkPic",
                data: {pic_checkCode:$("#pic_checkCode").val(),uid:new Date().getTime()},
                async:false,
                success: function(result){
                    if(result=='success'){
                        $("#pic_checkCode").attr("disabled", "true");
                        $("#checkCodeValid").val(1);
                    }
                }
            });
            if( $("#checkCodeValid").val()!='1'){
                LVMAMA.order.ticket.showErrorInfo(true,"请您输入正确的校验码。");
                return;
            }
        }

        if($(".promotionMap").size()>0) {
            if(!checkPromotionList()){
                return;
            }
        }
        if(!checkOrderForPayOther()){
            return;
        }


        if($("div.fk_box a.btn_fk").attr('submitFlag')=="true"){
            if(isCircusFlag()){
                $.post("/vst_front/book/ajax/checkStock.do",getFormData(),function(data){
                    if(data.success){
                        validateIdNo();
                    }else{
                        //库存余量不足
                        var $warningDom = "<div class=\"d_alertError d_alertBox\"><span class=\"tip-icon-big tip-icon-big-warning\"></span><em>当前余量不足，请选择其他日期或场次。</em></div>";
                        showDialog($warningDom);

                        $("li.table_4 span input").each(function(){
                            var goodsId=$(this).attr("goodsId");
                            var mainItem=$(this).attr("mainItem");
                            if(mainItem=="true"){
                                var option = $('.d_ccSelect option:selected');
                                $("input[name='itemMap["+goodsId+"].circusActInfo.circusActId']").val("");
                                $("input[name='itemMap["+goodsId+"].circusActInfo.circusActStartTime").val("");
                                $("input[name='itemMap["+goodsId+"].circusActInfo.circusActEndTime").val("");
                            }
                        });

                        return;
                    }
                },"JSON");
            }else{
                validateIdNo();
            }
        }



    }
}
function finalSubmit(){
    ticketOrderSubmitFlag=true;
    $("form[name='orderForm']").submit();
    ticketOrderSubmitFlag=false;
}
function validateIdNo(){
    //校验身份证。
        //开始校验身份证
        //如果specialTicket是故宫，才走这个校验
        if($("#specialTicketType").val()=="ID_NO_CHECK_TICKET"){
            $.post("/vst_front/book/ajax/checkIdNo.do",getFormData(),function(data){
                if(data.success){
                    finalSubmit();
                }else{
                    //身份证校验不通过
                    var $warningDom = "<div class=\"d_alertError d_alertBox\"><span class=\"tip-icon-big tip-icon-big-warning\"></span><em>"+data.message+"</em></div>";
                    showDialog($warningDom);
                    //console.log(data.attributes.log);`
                    return;
                }
            },"JSON");
        }else{
            finalSubmit();
        }

}

function checkTicketTypeInfor(){

    var travNumType = $("#travNumType").val();
    var occupType = $("#occupType").val();

    //如果下单项不是全部游玩人或者下单中人群信息不是全部游玩人就不需要校验
    if(travNumType != "TRAV_NUM_ALL" || occupType != "TRAV_NUM_ALL"){
        return true;
    }

    var childTotal = 0;//门票选择的儿童的总份数乘以总人数
    $("li.table_4 span input").each(function(){
        var childNum=$(this).attr("child");
        var ticketNum = $(this).val();
        childTotal += parseInt(childNum)*parseInt(ticketNum);
    });

    var childWriteInfoNum = 0;//填写游玩人中选择人群为儿童的个数
    $("#Jtenantlist").find("div.user_info.border_t1_dotted").each(function(k,v){
        var peopleType = $("select[name=\"travellers["+k+"].peopleType\"]").val();
        if(peopleType == 'PEOPLE_TYPE_CHILD'){
            childWriteInfoNum = parseInt(childWriteInfoNum)+1;
        }
    });

    if(childTotal != childWriteInfoNum){
        alert("由于订单中出行儿童数是"+childTotal+"人，请在用户信息板块的“人群”选项上，正确选择 成人 或者 儿童！");
        return false;
    }else{
        return true;
    }
}

function isCircusFlag(){
    return $("#circusFlag").val();
}

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

function getVisitTime(){
	var visitTimeInput = $('#visitTimeInput');
	if (visitTimeInput.val() == '') {
		return visitTimeInput.attr('data');
	} else {
		return visitTimeInput.val();
	}
}

function getFormData() {
	var serializeData = $("form[name='orderForm']").serialize();
	var visitTimeInput = $('#visitTimeInput');
	var visitTime = visitTimeInput.val();
	if (visitTime == visitTimeInput.attr('placeHolder') || visitTime == '') {
		serializeData = serializeData.replace('visitTime=', 'visitTime='+visitTimeInput.attr('data'));
	}
	return serializeData;
}

function checkPromotionList(){
	
	var flag=true;

	$.ajax({
		type : "post",
		url : "/vst_front/book/ajax/checkPromotionList.do",
		data: getFormData(),
		dataType: "json",
		async : false,
		success : function(data){
			if(data.success){
				if(data.attributes.pomMessage!=""){
					LVMAMA.order.ticket.calcPriceInfo();
					pandora.dialog({
						content: "亲，您下手慢了<b>"+data.attributes.pomMessage+"</b>已抢光，如有用户未支付，您可继续参加此活动。",
						//ok: function(){$('div.fk_box a.btn_fk').click();},
						//cancel: true,
						button: [{
							value: "继续",
							className: "pbtn-orange", // 可选btn参数：默认白色 pbtn-pink btn-porange pbtn-blue
							callback: function () {$('div.fk_box a.btn_fk').click();}
							},{
								value: "放弃",
								className: "pbtn-orange", // 可选btn参数：默认白色 pbtn-pink btn-porange pbtn-blue
								callback: function () {}
								}]
						});
					flag=false;
				}
			}else{
					LVMAMA.order.ticket.calcPriceInfo();
					pandora.dialog({
						content: "亲，服务器走神了，促销校验失败，无法使用促销优惠，确认继续购买？",
						//ok: function(){$('div.fk_box a.btn_fk').click();},
						//cancel: true,
						button: [{
							value: "继续",
							className: "pbtn-orange", // 可选btn参数：默认白色 pbtn-pink btn-porange pbtn-blue
							callback: function () {$('div.fk_box a.btn_fk').click();}
							},{
								value: "放弃",
								className: "pbtn-orange", // 可选btn参数：默认白色 pbtn-pink btn-porange pbtn-blue
								callback: function () {}
								}]
						});
					flag=false;
			}
		}
	});
	return flag;
}


function checkStock(){
	if(!LVMAMA.order.ticket.orderValidate()){
		$("div.fk_box a.btn_fk").addClass('stop_fk');
		$("div.fk_box a.btn_fk").attr('submitFlag','false');
		return;
	}
	cleanPromotion();
	$.post("/vst_front/book/ajax/checkStock.do",getFormData(),function(data){
		if(!data.success){
			disableSubmitButton();
			//需要提示库存不足
			showAmountInfo({"success":false});
			LVMAMA.order.ticket.showErrorInfo(true,data.message);
			
		}else{
			enableSubmitButton();
			LVMAMA.order.ticket.calcPriceInfo();
			LVMAMA.order.ticket.showErrorInfo(false,"");
		}
	},"JSON");
	LVMAMA.order.ticket.getTicketGoodsRebateAmount();
}



function disableSubmitButton() {
	$("div.fk_box a.btn_fk").addClass('stop_fk').attr('submitFlag','false');
}

function enableSubmitButton() {
	$("div.fk_box a.btn_fk").removeClass('stop_fk').attr('submitFlag','true');
}


function formatDateStr(x,y) {
	var z = {M:x.getMonth()+1,d:x.getDate(),h:x.getHours(),m:x.getMinutes(),s:x.getSeconds()};
	y = y.replace(/(M+|d+|h+|m+|s+)/g,function(v) {return ((v.length>1?"0":"")+eval('z.'+v.slice(-1))).slice(-2)});
	return y.replace(/(y+)/g,function(v) {return x.getFullYear().toString().slice(-v.length)});
}



//显示买赠信息
function showBuyPresentActivityInfo(data){
	cleanBuyPresentActivityInfo();
	if(data.success){
		var buyPersent=data.attributes.buyPersentActivity;
		if(buyPersent&&buyPersent.presents){
			var order_zp =$(".order_zp");
			//处理买赠是否提示不满足信息
			
			//循环处理赠品
			var presents=buyPersent.presents;
			if(presents){
				$.each(presents, function(k,item){
					var tmpHtml=$("<p class='zp-info'></p>");
					var tmpLable=$("<label class='check'></lable>");
					var tmpInput=$("<input class='radio' value='false' type='radio' disabled />");
					tmpInput.attr("checked","checked");
					tmpLable.append(tmpInput);
					tmpHtml.append(tmpLable);
					var expStr=item.presentName+"&emsp;x&emsp;"+item.sendCount;
					if(item.presentExpireStart && item.presentExpireEnd){
						expStr+="&emsp;有效期："
						+formatDateStr(new Date(item.presentExpireStart),"yyyy.MM.dd")+"&emsp;-&emsp;"+
									formatDateStr(new Date(item.presentExpireEnd),"yyyy.MM.dd");
						
					}
					tmpHtml.append(expStr);
					order_zp.find(".zp-dd").append(tmpHtml);
				});
			}

            if(buyPersent.isFulfil=='N'){
                order_zp.hide();
            }else{
                order_zp.show();
            }
		}
		
		
		
	}
}


function cleanBuyPresentActivityInfo(){
	var order_zp =$(".order_zp");
	order_zp.find(".zp-dd").html("");
	order_zp.hide();
	
}

function showAmountInfo(data){
	if(data.success){
		showAmountInfoNew(data);
	}else{
		$(".maxCanPayBouns").html((0).toFixed(2));
		$(".maxpayBounsAmt").val(0);
		$(".rebateAmountSpan").html((0).toFixed(2));
		$(".rebateAmountSpan").html((0).toFixed(2));
		$(".fk_box_free").find(".oughtPay").html("--");
		$(".fk_box_free").find(".oughtPayHidden").val(0);
		$(".fk_box_fixed").find(".orderamountPage").html("--");
	}
}

//弹出登录框
function openLoginWindow(){
	//判断登陆
	$.getJSON(
		"http://login.lvmama.com/nsso/ajax/checkLoginStatus.do?jsoncallback=?",
		{},
		function(data) {
			if (!data.success) {
				isOrNotJumpToUrl = false;
				showRadidLoginDiv();
			}
		}
	);
}

function loginFormSubmit(){
	$(".dialog-close").click();
	$.post("/vst_front/book/ajax/queryCurrentLoginUser.do", {},function(data){
		if(data.success) {
			if(data.attributes != null && data.attributes.user && data.attributes.user.userName) {
				$(".welcome").html("您好，<b>" + data.attributes.user.userName + "</b>");
				$("#bonusMsgDiv").css("display", "");
				if($("#picCodeContainer") && $("#picCodeContainer").length>0){
					$("#picCodeContainer").remove();
				}
				clickCouponVerify($("#couponVerifySpan"));
				queryRelatedContactPerson();
			}
		}
	});
}

function notNullStr(srcStr) {
	if(srcStr == null || srcStr == 'null') {
		return '';
	}
	
	return srcStr;
}

//查询常用联系人并显示到页面
function queryRelatedContactPerson() {
	$.post("/vst_front/book/ajax/queryRelatedContactPerson.do", {},function(data){
		if(data.success) {
			if(data.attributes != null && data.attributes.personList != null && data.attributes.personList.length > 0) {
				var personContent = "<b>常用联系人：</b>";
				$(data.attributes.personList).each(function(idx, currPerson){
					if(currPerson!=null){
						personContent += '<label class="check">' +
											'<input class="checkbox" type="checkbox" value="' + notNullStr(currPerson.receiverId) +
											'" name="contactsPersonCheckbox" personName="' + notNullStr(currPerson.fullName) +
											'" firstName="' + notNullStr(currPerson.firstName) + '" lastName="' + notNullStr(currPerson.lastName) +
											'" peopleType="' + notNullStr(currPerson.peopleType) + '" mobile="' + notNullStr(currPerson.mobile) +
											'" idNo="' + notNullStr(currPerson.idNo) + '" idType="' + notNullStr(currPerson.idType) +
											'" email="' + notNullStr(currPerson.email) + '">' + notNullStr(currPerson.fullName) + '</label>';
					}
				});
				$("#commonlyUsed").html(personContent);
				
				//绑定事件
				FRONT.book.user.travellersBindEvent();
			}
		}
	});
}

//回调接口
function callback(){
	this.funs = [];
	this.pushFun = function(fun) {
		this.funs.push(fun);
	};
	this.invoke = function() {
		for (var i = 0; i < this.funs.length; i++) {
			try {
				this.funs[i]();
			} catch (err) {
				alert(err);
				return false;
			}
		}
	};
}

//刷新价格
function refereshTimePrice(){
	var visitTime=getVisitTime();
	var productIds="";
	var goodsIds="";
	$("li.table_4 span input").each(function(i){
		var integerReg = "^[0-9]*[0-9][0-9]*$";
		if($.trim($(this).val()).match(integerReg)){
			var goodsId=$(this).attr("goodsId");
			var productId=$(this).attr("productId");
			if(goodsId!=undefined){
				goodsIds+=goodsId+",";
			}
			if(productId!=undefined){
				productIds+=productId+",";
			}
		}
	});
	if($.trim(visitTime)==""){
		return;
	}
	$.post("/vst_front/book/ticket/refereshTimePrice.do",
			{
			visitTime:visitTime,
			productIds:productIds,
			suppGoodsIds:goodsIds
			},function(data){
				if(data.success){
					$(data.attributes.ticketVoList).each(function(k,v){
						$("li.table_4 span input").each(function(){
							var goodsId=$(this).attr("goodsId");
							if(v.suppGoodsId==goodsId){
								if(v.suppGoodsAddTimePrice!=null){
									$(this).closest("li").siblings('li.table_2').html("<del>¥"+v.suppGoodsAddTimePrice.markerPriceYuan+"</del>");
									$(this).closest("li").siblings('li.table_3').find("b").text(v.suppGoodsAddTimePrice.priceYuan);
								}
							}
						});
					});
					var ticketProductVO =data.attributes.ticketProductVO;
					if(ticketProductVO!=null){
						$("li.table_4 span input").each(function(){
							var productId=$(this).attr("productId");
							if(ticketProductVO.product.productId==productId){
								$(this).closest("li").siblings('li.table_2').text("¥"+ticketProductVO.totalMarketPriceToYuan);
								$(this).closest("li").siblings('li.table_3').find("b").text(ticketProductVO.totalPriceToYuan);
							}
						});
					}
				}
			}
		);
}

function showExpressCheck(){
	var showFlag=false;
	$("li.table_4 span input").each(function(i){
		var num=$(this).val();
		var goodsType=$(this).attr("goodsType");
		if(LVMAMA.order.ticket.isTrueNumber(num)){
			if(goodsType=="EXPRESSTYPE_DISPLAY"){
				showFlag=true;
				return false;
			}
		}
	});
	
	if (! showFlag) {
		var checkedBxRadio = $("ul.bx_list").find("li.bx_list1 input[type=radio]:checked");
		var bxNumInput = checkedBxRadio.parents('li.bx_list').find("li.bx_list3 input[type=text]");

		if(LVMAMA.order.ticket.isTrueNumber($.trim(bxNumInput.val())) && bxNumInput.attr("goodsType")=="EXPRESSTYPE_DISPLAY"){
			return true;
		}
	}
	
	return showFlag;
}

//预订数量变更后的回调接口
var bookNumOnchangeCallback = new callback();
//日期确定后的回调接口
var calendarConfirmCallback = new callback();
//用户信息
var userInfos = new Array();

var LVMAMA={
		order:{
			ticket:{
				orderValidate:function(){
				var noError = true;
				$('a.num_add').each(function(i,v){
                    var num=$(v).siblings("input[type=text]").val();
                    var mainItem=$(v).siblings("input[type=text]").attr("mainItem");
                    if(LVMAMA.order.ticket.notNumber(num)&&mainItem=="true"){
                        //提示
                        noError = false;
                        return false;
                    }
				});
				return noError;
			},
			validateVisitTime: function() {
				//if($.trim($('#visitTimeInput').val())==""){
				//	window.location.href = '#visitTimeInput';
				//	nameFull($('.js_youwanTime'),'请选择游玩日期',190,-25,'warning');
				//	return false;
				//}
				//return true;
			},
            //获取马戏票场次信息
            getCircusInformation: function(){
                $('.d_ccLoading').show();
                $('.d_ccNull').hide();
                $('.d_ccSelect').hide();
                var suppGoodsId;
                $("li.table_4 span input").each(function(){
                    var goodsId=$(this).attr("goodsId");
                    var mainItem=$(this).attr("mainItem");
                    if(mainItem=="true"){
                        suppGoodsId=goodsId;
                        if($("#circusFlag").val()) {
                            $(this).attr("stockQuantity", 0);
                            $.ajax({
                                url: "/vst_front/book/ticket/refereshCircusInformation.do",
                                data: {
                                    suppGoodsId:suppGoodsId,
                                    visitTime:$("#visitTimeInput").val()
                                },
                                async:false,
                                success: function(result){
                                    $('.d_ccLoading').hide();
                                    $('.d_ccSelect option').remove();
                                    if(result.length > 0){
                                        var circusInformation = "<option selected='selected' disabled='true'>-请选择场次-</option>";
                                        for(var i = 0; i < result.length; i++){
                                            var circusActId = result[i].circusActId;
                                            var circusActStartTime = result[i].circusActStartTime;
                                            var circusActEndTime = result[i].circusActEndTime;
                                            if(circusActId && circusActStartTime && circusActEndTime){
                                                circusInformation += "<option data-id='"+circusActId+"' start-time='"+circusActStartTime+"' end-time='"+circusActEndTime+"'>"+circusActStartTime.split(" ")[1]+"——"+circusActEndTime.split(" ")[1]+"</option>";
                                            }else if(circusActEndTime == null || circusActEndTime == ""){
                                                circusInformation += "<option data-id='"+circusActId+"' start-time='"+circusActStartTime+"' end-time=''>"+circusActStartTime.split(" ")[1]+"场次</option>";
                                            }
                                        }
                                        $('.d_ccSelect').show();
                                        $('.d_ccSelect').append(circusInformation);
                                    }else{
                                        $('.d_ccNull').show();
                                    }
                                }
                            });
                        }
                        return;
                    }
                });
            },
            //获取马戏票库存信息
            getCircusStock: function(){
                var suppGoodsId;
                $("li.table_4 span input").each(function(){
                    var goodsId=$(this).attr("goodsId");
                    var mainItem=$(this).attr("mainItem");
                    if(mainItem=="true"){
                        suppGoodsId=goodsId;
                        return;
                    }
                });
                var circusId = $('.d_ccSelect option:selected').attr('data-id');
                var circusCount;
                $.ajax({
                    url: "/vst_front/book/ticket/getCircusStock.do",
                    data: {
                        suppGoodsId:suppGoodsId,
                        circusId: circusId,
                        visitTime:$("#visitTimeInput").val()
                    },
                    async:false,
                    success: function(result){
                        circusCount = result;
                        $("li.table_4 span input").each(function(){
                            var mainItem=$(this).attr("mainItem");
                            if(mainItem=="true"){
                                $(this).attr("stockQuantity",circusCount);
                                return;
                            }
                        });
                    }
                });
                return circusCount;
            },
			bookNumOnchangeComm: function(o,operator){


						var obj = $(o);
						var num=$(obj).siblings("input[type=text]").val();
                var ticketType = $(obj).siblings("input[type=text]").attr("ticketType");
                /*if(operator=="+" && ticketType == "DISNEY_TICKET"){
                    var msg = LVMAMA.order.ticket.checkTotalNumDisneyTicket();
                    if(msg != ""){
                        $.alert(msg);
                        return;
                    }
                }*/


				var min=parseInt($(obj).siblings("input[type=text]").attr("minQuantity"));
                //获取马戏票的库存
                var circusStock = parseInt($(obj).siblings("input[type=text]").attr("stockQuantity"));
				var max=parseInt($(obj).siblings("input[type=text]").attr("maxQuantity"));
                max = max>circusStock?circusStock:max;
				var mainItem=$(obj).siblings("input[type=text]").attr("mainItem");
				if(LVMAMA.order.ticket.notNumber(num)){
					num=0;
				}
				num = parseInt(num);
						
				if(operator=="+"&&num<max){
					num++;
                    if(ticketType == "DISNEY_TICKET"){
                        var goodsid = $(o).parent('span').find('input').attr('goodsid');
                        var msg = LVMAMA.order.ticket.checkTotalNumDisneyTicket(num,goodsid);
                        if(msg != ""){
                            $.alert(msg);
                            return;
                        }
                    }
				}else if(operator=="-"&&((num>=min&&mainItem=="false")||num>min)){
					num--;
						}
						
				if (num < min) {
					if (operator == '-') {
						if (mainItem == "false'") {
							num = 0;
						} else if (mainItem == "true") {
							num = min;
						}
					} else if (operator == '+' && mainItem == "false") {
						num = min;
					}
				}
				
				if(num>min && num<max && mainItem=="true" || num>0&&mainItem=="false"){
							if(operator=="+") {
								$(obj).siblings('a.num_subtraction.num_stop').removeClass('num_stop');
							}else{
								$(obj).siblings('a.num_add.num_stop').removeClass('num_stop');
							}
						}else{
                            if(num==min&&num<max){
                                $(obj).siblings('a.num_add.num_stop').removeClass('num_stop');
                            }else if(num==max&&num>min){
                                $(obj).siblings('a.num_subtraction.num_stop').removeClass('num_stop');
                            }
                            $(obj).addClass('num_stop');

							//if(operator=="-"){
							//	$(obj).addClass('num_stop');
							//}else{
							//	$(obj).siblings('a.num_subtraction').addClass('num_stop');
							//}
						}
						
						$(obj).siblings('input[type=text]').val(num);
						
				if(num>max){
							LVMAMA.order.ticket.showInfo(obj,"最多预订数量："+max);
						}
				if(num<parseInt(min)&&mainItem=="true"){
							LVMAMA.order.ticket.showInfo(obj,"至少预订数量："+min);
						}
						
						LVMAMA.order.ticket.ticketNumControlBxNum();
						
				if($.trim(getVisitTime())==""){
							return;
						}
						//if(parseInt(num)>0){
							bookNumOnchangeCallback.invoke();
						//}
						
					},
			isNumber: function(val) {
				return val.match("^[0-9]*$");
			},
			notNumber: function(val) {
				return !this.isNumber(val);
			},
			isTrueNumber: function(val) {
				return val.match("^[1-9][0-9]*$");
			},
			addTicketProductIds: function(productIds) {
				$("li.table_4 span input").each(function(){
					if(LVMAMA.order.ticket.isTrueNumber($(this).val())){
						var productId=$(this).attr("productId");
						if(productId!=undefined){
							productIds+=productId+",";
						}
					}
				});
				return productIds;
			},
			addTicketGoodIds: function(goodsIds) {
				$("li.table_4 span input").each(function(){
					if(LVMAMA.order.ticket.isTrueNumber($(this).val())){
						var goodsId=$(this).attr("goodsId");
						if(goodsId!=undefined){
							goodsIds+=goodsId+",";
						}
					}
				});
				return goodsIds;
			},
			addBxGoodIds: function(goodsIds) {
                var bxGoodsId = $("#bxGoodsId").val();
                if(bxGoodsId!=undefined&&parseInt(bxGoodsId) != 0){
                    goodsIds += bxGoodsId+",";
                }
				return goodsIds;
			},
            //将页面的用户信息填充到userInfos变量中
            fillUserInfosMap : function(){
                userInfos = new Array();
                $("#Jtenantlist").find(".user_info").each(function(i){
                    $(this).find(".user_dl").each(function(i){
                        $(this).find("input,select").each(function(i){
                            var _name = $(this).attr("name");
                            var _value = $(this).val();
                            if(_name != "" && _value != ""){
                                if($(this).attr("type") == "radio"){
                                    if($(this).attr("checked") == "checked"){
                                        userInfos.push({name:_name,value:_value});
                                    }
                                }else{
                                    userInfos.push({name:_name,value:_value});
                                }
                            }
                        })
                    });
                });

                $("#expressageInfoDiv").find(".user_info").each(function(i){
                    $(this).find(".user_dl").each(function(i){
                        $(this).find("input").each(function(i){
                            var _name = $(this).attr("name");
                            var _value = $(this).val();
                            if(_name != "" && _value != ""){
                                userInfos.push({name:_name,value:_value});
                            }
                        })
                    });
                })
            },
            //用userInfos里面的值填充用户信息
            fillUserInfos : function(){
                $("#Jtenantlist").find(".user_info").each(function(){
                    var num = $(this).attr("index");
                    for(var i = 0; i < userInfos.length; i++){
                        if(userInfos[i].name == "travellers["+num+"].idType"){
                            var _idTypeInput = userInfos[i].value;
                            FRONT.book.user.showBirthdayStrAndGender(_idTypeInput, num);
                        }
                    }

                    $(this).find(".user_dl").each(function(i){
                        $(this).find("input,select").each(function(i){
                            var _name = $(this).attr("name");
                            if(_name != ""){
                                for(var i = 0; i < userInfos.length;i++) {
                                    if (userInfos[i].name == _name) {
                                        var _value = userInfos[i].value;
                                        if($(this).attr("type") == "radio"){
                                            if($(this).val() == _value){
                                                $(this).attr("checked",true);
                                            }
                                        }else{
                                            $(this).val(_value);
                                        }
                                    }
                                }
                            }
                        })
                    });
                });

                $("#expressageInfoDiv").find(".user_info").each(function(){
                    $(this).find(".user_dl").each(function(i){
                        $(this).find("input").each(function(i){
                            var _name = $(this).attr("name");
                            if(_name != ""){
                                for(var i = 0; i < userInfos.length;i++) {
                                    if (userInfos[i].name == _name) {
                                        var _value = userInfos[i].value;
                                        $(this).val(_value);
                                    }
                                }
                            }
                        })
                    });
                });
                LVMAMA.order.ticket.fillUserInfosMap();
            },
			//刷新游玩人
			refereshTravellers:function(){
				var ticketNumber=LVMAMA.order.ticket.calTicketPersonCount();//门票人数
				var bxNumber=LVMAMA.order.ticket.calbaoxianPersonCount();

				var number = (ticketNumber>=bxNumber) ? ticketNumber : bxNumber; //人数
                var goodsIds = "";
                var productIds = "";
				productIds = LVMAMA.order.ticket.addTicketProductIds(productIds);
                goodsIds = LVMAMA.order.ticket.addTicketGoodIds(goodsIds);
				goodsIds = LVMAMA.order.ticket.addBxGoodIds(goodsIds);

						
				$.post("/vst_front/book/ticket/requiredItem.do",
					{
						productIds:productIds,
						suppGoodsIds:goodsIds,
						number:number,
						bxCount: bxNumber
					},
					function(data){
						$("#userinfoDiv").html(data);
						FRONT.book.user.travellersBindEvent();
						LVMAMA.order.ticket.bxNumBussiness();
						LVMAMA.order.ticket.initBxCheck();
                        LVMAMA.order.ticket.fillUserInfos();
						$(".js_birthday").each(function(){
							$(this).ui("calendar",{
								input : this,
								parm:{dateFmt:'yyyy-MM-dd'}
							})
						});
					}
				);
			},
			calTicketPersonCount:function(){ //选择的门票计算人数
				var adultCount=0;
				var childCount=0;
				$("li.table_4 span input").each(function(i){
						var num=$(this).val();
						var adult=$(this).attr("adult");
						var child=$(this).attr("child");
				if(LVMAMA.order.ticket.isTrueNumber(num)){
					num = parseInt(num);
							if(adult!=undefined&&adult>0){
						adultCount += parseInt(adult)*num;
							}
							if(child!=undefined&&child>0){

						childCount += parseInt(child)*num;
							}
							
						}
				});
				var sum = adultCount + childCount;
				return sum;
			},
			calBaseTicketPersonCount: function() {
				var mainInput = $("li.table_4 span input[mainitem=true]");
				return parseInt(mainInput.attr("adult")) + parseInt(mainInput.attr("child"));
			},
			calbaoxianPersonCount:function(){ //选择的保险计算人数
				return LVMAMA.order.ticket.getInsuranceNum();
			},
			calcPriceInfo:function(){
                $('li.table_4 a.num_add').attr("disabled",'disabled');
                $('li.table_4 a.num_subtraction').attr("disabled",'disabled');
                cleanPromotion();
                $.ajax({
                	type:"post",
                	url:"/vst_front/book/ajax/priceInfo.do",
                	data:getFormData(),
                	dataType: "json",
                	success:function(data){
                		  cleanPromotion();
                		  showBuyPresentActivityInfo(data);
                          showAmountInfo(data);
                		
                	},
                	complete:function(){
                		$('li.table_4 a.num_add').attr("disabled",false);
                        $('li.table_4 a.num_subtraction').attr("disabled",false);
                	}
                	
                });
			},

            //计算迪士尼演出票总数
            checkTotalNumDisneyTicket:function(num,goodsid) {
                var msg = "";
                var disneyTicketNum = 0;
                $("li.table_4 span input").each(function () {
                    if (!isNaN($(this).val()) && !isNaN($(this).attr("ticketDisneyNum"))) {
                        var ticketType = $(this).attr("ticketType");
                        var ticketDisneyNum = $(this).attr("ticketDisneyNum");//每一份迪士尼门票数（主要用于打包，单门票和其他票都是一）
                        var ticketName = $(this).attr("suppGoodsName");//如果是套票的话，在这里显示的是产品名称
                        var count = parseInt($(this).val());
                        if (goodsid == $(this).attr("goodsid")) {
                            count = parseInt(num);
                        }
                        if (ticketType == "DISNEY_TICKET") {
                            disneyTicketNum = disneyTicketNum + parseInt(count) * parseInt(ticketDisneyNum);
                            if (parseInt(count) > 0) {
                                msg = msg + ticketName + "\n";
                            }
                        }
                    }
                });
                if (disneyTicketNum > 5) {
                    msg = msg + "的总票数不能超过5张";
                } else {
                    msg = "";
                }

                return msg;
            },

            countDisneyTicketNum:function(num,goodsid){
                var disneyTicketNum = 0;
                var disneyCurrentNum = 0;
                var disneyCurrentOneNum = 1;
                $("li.table_4 span input").each(function(){
                    if(!isNaN($(this).val()) && !isNaN($(this).attr("ticketDisneyNum"))){
                        var ticketType=$(this).attr("ticketType");
                        var ticketDisneyNum = $(this).attr("ticketDisneyNum");//每一份迪士尼门票数（主要用于打包，单门票和其他票都是一）

                        if(ticketType == "DISNEY_TICKET"){
                            if(goodsid == $(this).attr("goodsid")){
                                disneyCurrentNum = parseInt(num)*parseInt(ticketDisneyNum);
                                disneyCurrentOneNum = ticketDisneyNum;
                            } else {
                                var count = parseInt($(this).val());
                                disneyTicketNum += parseInt(count)*parseInt(ticketDisneyNum);
                            }
                        }
                    }
                });
                if(disneyTicketNum+disneyCurrentNum > 5){
                    return parseInt((5 - disneyTicketNum)/disneyCurrentOneNum);
                } else {
                    return -1;
                }
            },
			sortNumber:function(a,b) {
				return a - b
			},
			couponSelect:function(){
					/*$("#couponInputRadio").removeAttr("checked");*/
			},
			insuranceNumChange:function(o,operator){
				var num = 0;
				var input = null;
						if(operator==""){
					input = $(o);
				} else {
					input = $(o).siblings("input[type=text]");
				}
				num = input.val();
				if(LVMAMA.order.ticket.notNumber(num)){
					num=0;
				}
				num = parseInt(num);
				var ticketNumber=parseInt(LVMAMA.order.ticket.calTicketPersonCount());//门票人数
				
				if(operator=="+"&&num<ticketNumber){
					num += LVMAMA.order.ticket.calBaseTicketPersonCount();
				}else if(operator=="-"&&num>LVMAMA.order.ticket.calBaseTicketPersonCount()){
					num -= LVMAMA.order.ticket.calBaseTicketPersonCount();
				}
				
				if(num<0){
					num=0;
				}
				
				if(num>ticketNumber){
					num=ticketNumber;
				}
						
				input.val(num);
				
				//if(num>=ticketNumber){
						//	LVMAMA.order.ticket.showInfo($(o),"最多预订数量3："+ticketNumber);
						//}
				/*if(num<=0){
							LVMAMA.order.ticket.showInfo($(o),"至少预订数量："+0);
						}*/
						
				this.validateInputLiButton(num, LVMAMA.order.ticket.calBaseTicketPersonCount(), ticketNumber);
                this.bxNumBussiness();
				bookNumOnchangeCallback.invoke();
			},
			showInfo:function(o,msg){
				var obj = o.parent(); //提示出现的模块位置
				var text = msg; //提示的文字
				var left = 5; //提示的left微调
				var top = 6; //提示的top微调
				//nameFull(obj,text,left,top); //提示调用的方法
				var type = 'warning'; //warning(感叹号)；
				nameFull(obj,text,left,top,type);//提示调用的方法
			},
			displayInsuranceSection: function() {
				var currVisitTime = $("#visitTimeInput").val();
				if(currVisitTime != "") {
					$("#insuranceDiv").show();
				}
			},
			bxNumBussiness:function(){
				this.bxNumChangeAction(false);
			},
			ticketNumControlBxNum:function(){
				this.bxNumChangeAction(true);
			},
			hideNeedVisitDate:function() {
				$('.js_youwanTime').removeClass('input_red');
				removeTips();
			},
			bxNumChangeAction: function(isTicketNumChange) {
				//isTicketNumChange 是否由于门票数量变化导致
				var ticketNumber = parseInt(LVMAMA.order.ticket.calTicketPersonCount());//门票人数
                $("ul.bx_tab li").each(function(i){
                    var bxNum = LVMAMA.order.ticket.getInsuranceNum();
                    var isChoice = $(this).hasClass('active');
                    if(isChoice){
                        if(i == 0){
                           LVMAMA.order.ticket.setInsuranceNum(0);
                           $("#bxGoodsId").val(0);
                           $("#bxGoodsBookQuantity").val(0);
                           $("#bxGoodsId").attr('disabled',"disabled");
                           $("#bxGoodsBookQuantity").attr('disabled',"disabled");
                            LVMAMA.order.ticket.validateInputLiButton(bxNum, 0, 0);
                           return; //不购买保险
                        }

                        $("#bxGoodsId").removeAttr("disabled");
                        $("#bxGoodsBookQuantity").removeAttr("disabled");
                        if(isTicketNumChange){
                           if((LVMAMA.order.ticket.notNumber($.trim(bxNum))) || (bxNum > ticketNumber)){
                               bxNum=ticketNumber;
                           }
                           LVMAMA.order.ticket.setInsuranceNum(bxNum);
                        }
                        var goodsId = $(this).attr('data-id');
                        LVMAMA.order.ticket.setHideBxGoodsInput(goodsId, bxNum);
                        LVMAMA.order.ticket.setBxCheckBoxName(goodsId);
                        LVMAMA.order.ticket.dealInsurancePersonBox();
                        LVMAMA.order.ticket.validateInputLiButton(bxNum, LVMAMA.order.ticket.calBaseTicketPersonCount(), ticketNumber);
                    }
                });

                //$("ul.bx_list").each(function(i){
				//	if (i == 0) {
				//		LVMAMA.order.ticket.setHideBxGoodsInput($('#bxGoodsId').val(), 0);
				//		return; //不购买保险
				//	}
                //
				//	var radioChecked =$(this).find("li.bx_list1 input[type=radio]").attr("checked");
				//	var bxNum = 0;
                //
				//	var inputLi = $(this).find("li.bx_list3");
				//	if(radioChecked == 'checked'){
				//		var bxNumInput = $(inputLi).find("input[type=text]");
				//		bxNum = parseInt(bxNumInput.val());
				//		var isBxNumInteger = false;
				//		if (isTicketNumChange) {
				//			if((LVMAMA.order.ticket.notNumber($.trim(bxNum))) || (bxNum > ticketNumber)){
				//				bxNum=ticketNumber;
				//			}
				//			bxNumInput.val(bxNum);
				//			isBxNumInteger = true;
				//		} else {
				//			if((LVMAMA.order.ticket.isNumber($.trim(bxNum)))){
				//				isBxNumInteger = true;
				//			}
				//		}
				//		if (isBxNumInteger) {
				//			var goodsId = bxNumInput.attr("goodsId");
				//			LVMAMA.order.ticket.setHideBxGoodsInput(goodsId, bxNum);
				//			LVMAMA.order.ticket.setBxCheckBoxName(goodsId);
				//		}
				//
				//		LVMAMA.order.ticket.dealInsurancePersonBox();
				//	}
				//	LVMAMA.order.ticket.validateInputLiButton(inputLi, bxNum, 0, ticketNumber, radioChecked == 'checked');
				//});
			},
			validateInputLiButton: function(value, minValue, maxValue) {
				if (value < maxValue) {
                    $("#insuranceAdd").removeClass("num_stop");
				} else {
					$("#insuranceAdd").addClass("num_stop");
				}
				if (value > minValue) {
					$("#insuranceSub").removeClass('num_stop');
				} else {
					$("#insuranceSub").addClass('num_stop');
				}
			},
			setHideBxGoodsInput: function(goodsId, bxNum) {
				$("#bxGoodsId").val(goodsId);
				$("#bxGoodsBookQuantity").val(bxNum);
				$("#bxGoodsId").attr("name","itemMap["+goodsId+"].goodsId");
				$("#bxGoodsBookQuantity").attr("name","itemMap["+goodsId+"].quantity");
			},
			dealInsurancePersonBox: function() {
				this.checkInsurancePersonBox();
				this.baoxianPersonsShowHide();
			},
			checkInsurancePersonBox: function() {
				var bxNum = this.calbaoxianPersonCount();
				$("dl.user_dl.bx_check dd input").each(function(i){
					if(i < bxNum){
						$(this).attr("checked","checked");
					}
				});
			},
			setBxCheckBoxName: function(goodsId) {
				$("dl.user_dl.bx_check").each(function(k){
					$(this).find("input[type=checkbox]").attr("name","personRelationMap[GOODS_"+goodsId+"].itemPersonRelationList["+k+"].seq");
				});
			},
            setInsuranceNum:function(num){
                //设置购买保险的个数
                $("#insuranceNumInput").val(num);
            },
            getInsuranceNum:function(){
                //得到购买保险个数
                if($("#insuranceNumInput").length <= 0){
                    return 0;
                }
                return $("#insuranceNumInput").val();
            },
			initBxCheck:function(){

				LVMAMA.order.ticket.baoxianPersonsShowHide();

						
						//初始化优惠券
						$('input[type=radio][name=youhui]:checked').each(function(){
							var v=$(this).val();
							if(v=="false"){
								//$(this).closest("dd").find("div.pro_info.yh_info").css('display','none');
								$("#coupon_info").css('display','none');
								$("#bonus_info").css('display','none');
							}
							if(v=="coupon"){
								//$(this).closest("dd").find("div.pro_info.yh_info").css('display','block');
								$("#coupon_info").css('display','block');
								$("#bonus_info").css('display','none');
							}
							if(v=="bonus"){
								$("#coupon_info").css('display','none');
								$("#bonus_info").css('display','block');
							}
							
						});
						
						//初始化其他票
						$("li.table_4 span input").each(function(i){
							var num=$(this).val();
							var mainItem=$(this).attr("mainItem");
					if(LVMAMA.order.ticket.isTrueNumber(num)&&mainItem=="false"){
								$(this).closest("dd").find("div.table_list.table_t").css('display','block');
								$(this).closest("dd").find("a.btn_qita").css('display','none');
								$(this).closest("dd").find("a.btn_qita").addClass('jt_up');
							}
						});
						
					},//刷新保险
					refereshInsurance:function(){
						var payTarget=$("#payTarget").val();
						var aperiodicFlag=$("#aperiodicFlag").val();
						if(payTarget!="PREPAID"||aperiodicFlag=="Y"){
							return;
						}
						var productId=$("#productIdTxt").val();
						var visitTime=getVisitTime();
						$.ajax({
							type: "post",
							async: false,
							url: "/vst_front/book/ticket/refereshInsurance.do",
							data: {productId:productId,visitTime:visitTime},
						   dataType: "html",
						   success: function (data) {
							   $("#insuranceDiv").html(data);
								LVMAMA.order.ticket.initBxCheck();
								LVMAMA.order.ticket.bindInsuranceEvent();
								LVMAMA.order.ticket.bxNumChangeAction(false);
							}
						});
					},
					bindInsuranceEvent:function(){
						// 增加保险人数
						$('#insuranceAdd').click(function(){
							LVMAMA.order.ticket.insuranceNumChange(this,"+");
						});
						
						// 减少保险人数
						$('#insuranceSub').click(function(){
							LVMAMA.order.ticket.insuranceNumChange(this,"-");
						});
					},

					refereshOtherTicket:function(){
						var payTarget=$("#payTarget").val();
						var aperiodicFlag=$("#aperiodicFlag").val();
						if(payTarget!="PREPAID"||aperiodicFlag=="Y"){
							return;
						}
						var suppGoodsId="";
						 $("li.table_4 span input").each(function(){
							 var goodsId=$(this).attr("goodsId");
							 var mainItem=$(this).attr("mainItem");
							 if(mainItem=="true"){
								 suppGoodsId=goodsId;
								 return;
							 }
						});
				var visitTime=getVisitTime();
						if(suppGoodsId=="" || $('.btn_qita').length == 0){
							return;
						}
						
						$.ajax({
								type: "post",
								async: false,
								url: "/vst_front/book/ticket/refereshOtherTicket.do",
								data: {suppGoodsId:suppGoodsId,visitTime:visitTime},
							   dataType: "html",
							   success: function (data) {
								   $("#otherTicketDiv").html(data);
									$('.btn_qita').show().removeClass('jt_up');
									$('#otherTicketDiv').find('.table_t').hide();
									LVMAMA.order.ticket.bindOtherTicketEvent();
								}
							});
						/*$.post("/vst_front/book/ticket/refereshOtherTicket.do",
							{
							suppGoodsId:suppGoodsId,
								visitTime:visitTime
							},
							function(data){
								$("#otherTicketDiv").html(data);
								$('.btn_qita').show().removeClass('jt_up');
								$('#otherTicketDiv').find('.table_t').hide();
								LVMAMA.order.ticket.bindOtherTicketEvent();
							}
						);*/
					},
					bindOtherTicketEvent:function(){
						// 增加门票人数
						$('#otherTicketDiv li.table_4 a.num_add').bind('click',function(){
							LVMAMA.order.ticket.bookNumOnchangeComm(this,"+");
						});
						
						// 减少门票人数
						$('#otherTicketDiv li.table_4 a.num_subtraction').bind('click',function(){
							LVMAMA.order.ticket.bookNumOnchangeComm(this,"-");
						});
					},
					showErrorInfo:function(showFlag,msg){
						if(showFlag){
							$("#ticketErrorInfoDiv").find("div").html("<span class='tip-icon tip-icon-big-warning'></span>"+msg);
							$("#ticketErrorInfoDiv").show();
						}else{
							$("#ticketErrorInfoDiv").hide();
						}
						
					},
					baoxianPersonNumCheck:function(obj){
						var bxCount=0;
						var bxNumber=LVMAMA.order.ticket.calbaoxianPersonCount();
						$("dl.user_dl.bx_check dd label input[type=checkbox]:checked").each(function(i){
							bxCount=parseInt(bxCount)+parseInt(1);
						});
						if(bxCount>bxNumber){
							LVMAMA.order.ticket.showInfo($(obj),"被保险人最多："+bxNumber+"人");
							$(obj).removeAttr("checked");
						}
			},
			baoxianPersonsShowHide:function(){
                var bxNumber = LVMAMA.order.ticket.calbaoxianPersonCount();
                var ticketNumber = LVMAMA.order.ticket.calTicketPersonCount();//门票人数
                var bxCheckBoxes = $("dl.user_dl.bx_check dd input");
                if (ticketNumber == bxNumber || bxNumber == 0) {
                    bxCheckBoxes.each(function () {
                        $(this).parents('.bx_check.user_dl').hide();
                    });
                } else {
                    bxCheckBoxes.each(function () {
                        $(this).parents('.bx_check.user_dl').show();
                    });
                }
            },
					getTicketGoodsRebateAmount:function(){
				$.post("/vst_front/book/ajax/getGoodsRebateAmount.do",getFormData(),
							function(data){
								if(data.success){
									var goodsRebateAmountMap = data.attributes.goodsRebateAmountMap;
									$("li.table_4 span input").each(function(i){
										var goodsId=$(this).attr("goodsId");
										var productId=$(this).attr("productId");
										$.each(goodsRebateAmountMap, function(k, v){
											if(k==goodsId||k==productId){
												var rebateStr="";
												$.each(v, function(i, obj){
													if(obj!=undefined && obj>0){
														if(i=="pcRebate"){
															rebateStr+="<span tip-content='预订此产品，游玩后发表体验点评，内容通过审核，即可获得最高&lt;span&gt;"+obj+"&lt;/span&gt;元点评奖金返现。' tip-title='写体验点评返奖金' class='tagsback tagsback-orange'><em>返</em><i>￥"+obj+"元</i></span>";
														}
														else if(i=="mobileRebate"){
															rebateStr+="<span tip-content='通过驴妈妈旅游客户端预订，发表点评即可多返"+obj+"元奖金。' class='tagsback tagsback-app'>+"+obj+"元</span>";
														}
													}
												});
												$("#"+goodsId+"RebateDiv").html(rebateStr);
												$("#"+productId+"RebateDivDIV").html(rebateStr);
												return;
											}
										});
									});
								}
							}
						);
					}
			 }
		 }
 };
function contactsPersonCheckboxFalse(){
		$("input[name='contactsPersonCheckbox']").attr("checked",false);
}

function checkCircusStock(){
    $('.d_ccSelect').removeClass('input_red');
    $('#circus .d_floatTip').hide();

    //库存弹层loading
    var $loginDom = "<div class=\"d_bigerload d_alertBox\">正在努力检查库存中，请耐心等候...</div>";
    showDialog($loginDom);
    setTimeout(function() {
        var circusCount = LVMAMA.order.ticket.getCircusStock();
        $('.dialog-close').trigger('click'); //关闭loading的盒子
    },100);

}

function showDialog(context){
    pandora.dialog({
        title: "",
        content: context
    });
}

var _lvPageTool = {
	isMobile: function( mobileVal ){
		var _mobile = /^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(17\d{1})|(18([0-4]|[5-9])))\d{8}$/;
		if(mobileVal!='' && _mobile.test(mobileVal)){
			return true;
		}
		return false;
	},
	isLogin: function(){
		var isLogin =  $("#login_user").attr("status");
		return isLogin==1;
	},
	refreshMobileComment: function(zItemFocus){
		$.each( $("[item_type='main']").siblings("span"), function(i, n){
			var jItem = $(n);
			if(jItem.attr("zItem")==zItemFocus){
				jItem.css("display", "inline-block");
			}
			else{
				jItem.css("display", "none");
			}
		});
	},
	refreshDeliverMobileComment: function(zItemFocus){
		$.each( $("[item_type='main_deliv']").siblings("span"), function(i, n){
			var jItem = $(n);
			if(jItem.attr("zItem")==zItemFocus){
				jItem.css("display", "inline-block");
			}
			else{
				jItem.css("display", "none");
			}
		});
	},
	isFrozenMobile: function(pSetting){
		$.ajax({
			type:"GET",
			async: false,
			dataType: "JSONP",
			url: "http://login.lvmama.com/nsso/ajax/checkAccountStatus.do?jsoncallback=?",
			data: {mobile: pSetting.mobileVal},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
					$("#isFrozenFlag").attr("value",'N');
				   },
			success: function(response){
				if(response.success==false){	//condition: 是冻结手机号
					$("#isFrozenFlag").attr("value",'Y');
					pSetting.frozenFun.call(this);
				}else{
					$("#isFrozenFlag").attr("value",'N');
					pSetting.isLvmmFun.call(this);
				}
			}
		});
	},
	isLvmamaMobile: function( pSetting ){
		if(!pSetting.mobileVal || pSetting.mobileVal==''){
			return;
		}
		$.ajax({
			type:"GET",
			dataType: "JSONP",
			url: "http://login.lvmama.com/nsso/ajax/checkUniqueField.do?jsoncallback=?",
			data: {mobile: pSetting.mobileVal},
			success: function(response){
				if(response.success!=false){	//condition: 不是驴妈妈手机号
					_lvPageTool.registerMobile(pSetting);
				}else{
					if( pSetting.isLVMobileFun!=undefined ){
						pSetting.isLVMobileFun.call(this);
					}
				}
			}
		});
	},
	registerMobile: function( pSetting ){
		if(!pSetting.mobileVal || pSetting.mobileVal==''){
			return;
		}
		$.ajax({
			type:"GET",
			dataType: "JSONP",
			url: "http://login.lvmama.com/nsso/ajax/silentRegisterByMobile.do?jsoncallback=?",
			data: {mobile: pSetting.mobileVal},
			success: function(response){
				if(response.success==true){	//condition: 注册成功
					if( pSetting.registerFun!=undefined ){
						pSetting.registerFun.call(this);
					}
				}
			}
		});
	}
};

function showTicketCalTotalPrice(){
    $("li.table_4 span input").each(function(){
        var quantity = parseInt($(this).val());
        var price = parseInt($(this).parent().parent().prev().find("b").html());
        $(this).parent().parent().next().find("b").html(quantity*price);
    });
}
