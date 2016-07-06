$(function(){
	
});

$(document).ready(function(){
	$("select[id^='idType']").each(function(){
		var num = $(this).attr("num");
		var val = $(this).val();
		
		if(val=='HUIXIANG'|| val=='TAIBAOZHENG'){
			showIssuedDiv(num,val);
		}else{
			FRONT.book.user.makeHtmlEmptyAndHide("#expDateDl"+num);
			FRONT.book.user.makeHtmlEmptyAndHide("#issuedDl"+num);
		}
	});
});


var FRONT={
	book:{
		user:{
            travellerInfoNum:function(){
                return $("#Jtenantlist").find("div.user_info.border_t1_dotted").length;
            },
			cancelSelectPerson:function(obj){
				//这个方法应该是未使用的
				var travellersId= $(obj).attr("travellersId");
				//现在页面有两个人员选择区域，不能用id选择器
				var commonlyUsed = $(obj).parentsUntil(".order_box", "#trav_person_list").siblings(".name_list_new_box").find(".name_list_new");
				commonlyUsed.find("input[type=checkbox]:checked").each(function(){
					var receiverId=$(this).val();
					if(travellersId==receiverId){
						$(this).removeAttr("checked");
						return;
					}
				});
				$("#Jtenantlist").find("div.user_info.border_t1_dotted").each(function(k){
					var fullNameInput =$("#fullName" + k);
					var id = fullNameInput.attr("travellersId");
					if(travellersId==id){
						$("#travellersId" + k).val("");
						fullNameInput.val("");
						fullNameInput.attr("travellersId","");
						$("#mobile" + k).val("");
						$("#email" + k).val("");
						$("#idType" + k).val("");
						$("#idType" + k).trigger("change");
						$("#idNo" + k).val("").show();
						$("#expDate" + k).val("");
						$("#issued" + k).val("");
						$("#cancelA" + k).attr("travellersId","");
						return false;
					}
				});
				$(obj).closest("div").find("input[type=checkbox]").removeAttr("checked");
			},
			isInputInfoEmpty: function(input) {
				return input.length == 0 || input == null || input.val() == "";
			},
			isTravellerInfoEmpty: function(userInfoDiv) {
				//姓名，邮箱，证件类型，证件号码为空
				return FRONT.book.user.isInputInfoEmpty(userInfoDiv.find('input[id^="fullName"]'))
					&& FRONT.book.user.isInputInfoEmpty(userInfoDiv.find('input[id^="mobile"]'))
					&& FRONT.book.user.isInputInfoEmpty(userInfoDiv.find('input[id^="idNo"]'));
			},
			isContactInfoEmpty: function(userInfoDiv) {
				//姓名，邮箱，手机号为空
				return FRONT.book.user.isInputInfoEmpty(userInfoDiv.find('input[id^="contactFullName"]'))
					&& FRONT.book.user.isInputInfoEmpty(userInfoDiv.find('input[id^="contactMobile"]'))
					&& FRONT.book.user.isInputInfoEmpty(userInfoDiv.find('input[id^="contactEmail"]'));
			},
			isEmergencyInfoEmpty: function(userInfoDiv) {
				//姓名，邮箱，手机号为空
				return FRONT.book.user.isInputInfoEmpty(userInfoDiv.find('input[id^="emergencyPersonFullName"]'))
					&& FRONT.book.user.isInputInfoEmpty(userInfoDiv.find('input[id^="emergencyPersonMobile"]'));
			},
			travellersBindEvent:function(){//绑定常用游客事件
				$("#commonlyUsed, #commonlyUsed1").find("input[type=checkbox]").change(function(){
					FRONT.book.user.checkIocTxt($(this));
					if(typeof xianluFullNameTxtChange =="function"){
						xianluFullNameTxtChange();
					}
                    if(typeof userInfos == "object"){
                        LVMAMA.order.ticket.fillUserInfosMap();
                    }
				});
				var idTypeSelectors = $("select[id^='idType']");
				idTypeSelectors.change(function(){
					/*切换证件类型时清空证件号码*/
					$(this).siblings('input[id^="idNo"]').val('');
					var num = $(this).attr("num");
					var val =$(this).val();
					$("#idNo"+num).show();
					FRONT.book.user.showBirthdayStrAndGender(val,num);
				});
				idTypeSelectors.each(function(){
					var num = $(this).attr("num");
					var val =$(this).val();
					FRONT.book.user.showBirthdayStrAndGender(val,num);
				});
			},
			checkIocTxt:function(checkBox){ //常用游客checkbox控制客人姓名text
				var receiverId= checkBox.val();
				var container = checkBox.parentsUntil("#order_submit", ".order_box");
				if (checkBox.attr('checked') == 'checked') {

					var isCheckedPersonInFlag = false;
					var hasBuyerInfoDivFlag = false;
					var hasEmergencyInfoDivFlag = false;
					var hasEmptyUserInfoDivFlag = false;
					var foundIndex = null;
					if ($("buyer")) {
						$("#buyer").each(function(k,v){
							var buyerId = container.find("#contactFullName").attr("buyerId");
							if(buyerId == receiverId){
								isCheckedPersonInFlag = true;
								return false;
							}
							if (buyerId == "" && FRONT.book.user.isContactInfoEmpty($(v))) {
								hasBuyerInfoDivFlag = true;
								return false;
							}
						});
					}
					if ($("emergencyPerson")) {
						$("#emergencyPerson").each(function(k,v){
							var emergencyId = container.find("#emergencyPersonFullName").attr("emergencyId");
							if(emergencyId == receiverId){
								isCheckedPersonInFlag = true;
								return false;
							}
							if (emergencyId == "" && FRONT.book.user.isEmergencyInfoEmpty($(v))) {
								hasEmergencyInfoDivFlag = true;
								return false;
							}
						});
					}

					container.find("#Jtenantlist").find("div.user_info.border_t1_dotted").each(function(k,v){
						var travellersId = container.find("#fullName" + k).attr("travellersId");
						if(travellersId == receiverId){
							isCheckedPersonInFlag = true;
							return false;
						}
						if (travellersId == "" && FRONT.book.user.isTravellerInfoEmpty($(v))) {
							hasEmptyUserInfoDivFlag = true;
							foundIndex = k;
							return false;
						}
					});

					if (isCheckedPersonInFlag) {
						return;
					}
					if(!hasEmptyUserInfoDivFlag && !hasEmergencyInfoDivFlag && !hasBuyerInfoDivFlag) {
                        var travellerNum = FRONT.book.user.travellerInfoNum();
                        //container.find("#Jtenantlist").size() 用来判断是否在同一个order_box
                        if(travellerNum == 1 && container.find("#Jtenantlist").size()> 0){
                        	var commonlyUsed = checkBox.parent().parent();
                        	commonlyUsed.find("input[type=checkbox]").each(function() {
                                    if($(this).attr('value') != checkBox.attr('value')) {
                                        $(this).removeAttr("checked");
                                    }
                                }
                            );
                            fillUserInfo(0,receiverId,checkBox);
                            return;
                        }
						//FRONT.book.user.showInfo(checkBox,"人数已满。");
						//checkBox.removeAttr("checked");
					} else {
						if (hasBuyerInfoDivFlag) {
							var fullNameInput = container.find("#contactFullName");
							fullNameInput.attr("buyerId",receiverId);
							fullNameInput.val(checkBox.attr("personName"));
							container.find("#contactMobile").val(checkBox.attr("mobile"));
							container.find("#contactEmail").val(checkBox.attr("email"));
							//清空该区域的错误提示信息吧
							fullNameInput.parentsUntil(".order_box", ".user_info").find('dd').removeClass('error_show');
						} else if (hasEmergencyInfoDivFlag) {
							var fullNameInput = container.find("#emergencyPersonFullName");
							fullNameInput.attr("emergencyId",receiverId);
							var emergencyId = fullNameInput.attr("emergencyId");
							fullNameInput.val(checkBox.attr("personName"));
							container.find("#emergencyPersonMobile").val(checkBox.attr("mobile"));
							
							//清空该区域的错误提示信息吧
							fullNameInput.parentsUntil(".order_box", ".user_info").find('dd').removeClass('error_show');
						} else {
							/*var fullNameInput = $("#fullName" + foundIndex);
							var travellersId = fullNameInput.attr("travellersId");
							var num = fullNameInput.parents('div.user_info.border_t1_dotted').attr("index");
							var k = foundIndex;

							var idType= checkBox.attr("idType");
							if (idType == "") {
								idType = "ID_CARD";
							}
							$("#travellersId" + k).val(receiverId);
							fullNameInput.val(checkBox.attr("personName"));
							fullNameInput.attr("travellersId",receiverId);
							$("#firstName" + k).val(checkBox.attr("firstName"));
							$("#lastName" + k).val(checkBox.attr("lastName"));
							$("#peopleType" + k).val(checkBox.attr("peopleType"));
							$("#mobile" + k).val(checkBox.attr("mobile"));
							$("#email" + k).val(checkBox.attr("email"));
							$("#idType" + k).val(idType);
							if(idType!="CUSTOMER_SERVICE_ADVICE"){
								$("#idNo" + k).val(checkBox.attr("idNo"));
								$("#idNo"+num).show();
							}
							FRONT.book.user.showBirthdayStrAndGender(idType,num);
							$("#gender" + k).val(checkBox.attr("gender"));
							$("#birthday" + k).val(checkBox.attr("birthday"));

							if(idType=="HUIXIANG"||idType=="TAIBAOZHENG"){
								$("#expDate" + k).val(checkBox.attr("expDate"));
								$("#issued" + k).val(checkBox.attr("issued"));
							}else{
								$("#expDate" + k).val("");
								$("#issued" + k).val("");
							}

							$("#cancelA" + k).attr("travellersId",receiverId);*/
							fillUserInfo(foundIndex,receiverId,checkBox);
						}
					}
				} else {
					if ($("buyer")) {
						$("#buyer").each(function(k,v){
							var buyerId = container.find("#contactFullName").attr("buyerId");
							if(buyerId == receiverId) {
								container.find("#contactFullName").val("");
								container.find("#contactFullName").attr("buyerId","");
								container.find("#contactMobile").val("");
								container.find("#contactEmail").val("");
							}
						});
					}
					if ($("emergencyPerson")) {
						$("#emergencyPerson").each(function(k,v){
							var emergencyId = container.find("#emergencyPersonFullName").attr("emergencyId");
							if(emergencyId == receiverId){
								container.find("#emergencyPersonFullName").val("");
								container.find("#emergencyPersonFullName").attr("emergencyId","");
								container.find("#emergencyPersonMobile").val("");
							}
						});
					}
					
					container.find("#Jtenantlist").find("div.user_info.border_t1_dotted").each(function(k){
						var fullNameInput = $("#fullName" + k);
						var id = fullNameInput.attr("travellersId");
						if(receiverId==id){//&& fullNameInput.val() == checkBox.attr("personName")
							var num = $(this).attr("index");
							$("#travellersId" + k).val("");
							fullNameInput.attr("travellersId","").val("");
							$("#firstName" + k).val("");
							$("#lastName" + k).val("");
							$("#peopleType" + k).val("");
							$("#mobile" + k).val("");
							$("#email" + k).val("");
							var idTypeInput = $("#idType" + k);
							idTypeInput.val("");
							$("#idType" + k).trigger("change");
							$("#idNo" + k).val("").show();
							$("#expDate" + k).val("");
							$("#issued" + k).val("");
							$("#gender" + k).val("");
							$("#birthday" + k).val("");
							$("#cancelA" + k).attr("travellersId","");
							FRONT.book.user.showBirthdayStrAndGender(idTypeInput.val(),num);
							return false;
						}
					});
				}
			},
			makeHtmlEmptyAndHide: function(cssSelector) {
				$(cssSelector).html('').hide();
			},
			showBirthdayStrAndGender:function(val,num){
				//是否是游玩人后置订单
				var travellerDelayFlag = $("#order_submit").find("[name=travellerDelayFlag]").val();
				
				if(val!="HUIXIANG"&&val!="TAIBAOZHENG"){
					FRONT.book.user.makeHtmlEmptyAndHide("#expDateDl"+num);
					FRONT.book.user.makeHtmlEmptyAndHide("#issuedDl"+num);
				}else{
					var expDateDlF=$("#expDateDl"+num).attr("optional");
					var issuedDlF=$("#expDateDl"+num).attr("optional");
					var expDate=$('<dt>有效期：</dt><dd><input class="input js_birthday js_yz" id="expDate'+num+'" name="travellers['+num+'].expDate" type_name="text"  type="text" readonly="readonly" placeholder="yyyy-mm-dd"></dd>');
					if(expDateDlF){
						expDate.find("input[type_name='text']").attr("optional",true);
					}
					var issued=$('<dt>签发地：</dt><dd><input class="input  js_yz"  maxlength="20" id="issued'+num+'" name="travellers['+num+'].issued" type_name="text" type="text" ></dd>');
					if(issuedDlF){
						issued.find("input[type_name='text']").attr("optional",true);
					}
					$("#expDateDl"+num).show().html("").append(expDate);
					$("#issuedDl"+num).show().html("").append(issued);
				}
				
				var idNoMsgOuterHTML = '',destBu = $("#destBuFlag").val();
				if(destBu && destBu == 'true'){
					idNoMsgOuterHTML =  "<span id='idNoMsg"+num+"' zitem='init' class='ts_text'>您购买的门票或保险需要您的身份证信息</span>";
					$("#idNoMsg"+num).remove();
				}
				
				if(val=="CUSTOMER_SERVICE_ADVICE"){
					$("#idNo"+num).hide().parent().removeClass('error_show');
					FRONT.book.user.makeHtmlEmptyAndHide("#xingbieDl"+num);
					FRONT.book.user.makeHtmlEmptyAndHide("#birthdayDl"+num);
					FRONT.book.user.makeHtmlEmptyAndHide("#expDateDl"+num);
					FRONT.book.user.makeHtmlEmptyAndHide("#issuedDl"+num);
				}else if(val=="ID_CARD"){
					FRONT.book.user.makeHtmlEmptyAndHide("#xingbieDl"+num);
					FRONT.book.user.makeHtmlEmptyAndHide("#birthdayDl"+num);
					FRONT.book.user.makeHtmlEmptyAndHide("#expDateDl"+num);
					FRONT.book.user.makeHtmlEmptyAndHide("#issuedDl"+num);
					$("#idNo"+num).after(idNoMsgOuterHTML);
				}else{
					var birthdayHtml = '<dt><span class="' + (travellerDelayFlag == 'Y'?'':'red')+ ' optionalFlag">*</span>出生日期：</dt>'
						+ '<dd><input class="input js_birthday js_yz" id="birthday'+num+'"  name="travellers['+num+'].birthdayStr" type_name="text" type="text" readonly="readonly" placeholder="请输入出生日期">' 
						+ '<span class="error_text"><i class="tip-icon tip-icon-error"></i>请选择出生日期</span></dd>';
					var xingbieHtml = '<dt>'+ (travellerDelayFlag == 'Y'?'':'<span class="red">*</span>') + '性别：</dt>' 
									+ '<dd><label class="check"><input class="radio" id="gender'+num+'" name="travellers['+num+'].gender" value="MAN" checked="" type="radio">男</label>'
									+ '<label class="check"><input class="radio" id="gender['+num+']"  name="travellers['+num+'].gender" value="WOMAN" type="radio">女</label></dd>';
					
					var birthdayDlF=$("#birthdayDl"+num).attr("optional");
					var birthday=$(birthdayHtml);
					birthday.find(".js_birthday").attr("onclick","WdatePicker({maxDate:'%y-%M-%d'})");
					if(birthdayDlF || travellerDelayFlag == 'Y'){
						birthday.find(".optionalFlag").html("");
						birthday.find("input[type_name='text']").attr("optional",true);
					}

					$("#xingbieDl"+num).show().html(xingbieHtml);
					$("#birthdayDl"+num).show().html("").append(birthday);
					$(".js_birthday").each(function(){
						$(this).ui("calendar",{
							input : this,
							parm:{dateFmt:'yyyy-MM-dd'}
						});
					});
					
				}
			},
			showInfo:function(o,msg){
				var obj = o.parent(); //提示出现的模块位置
				var text = msg; //提示的文字
				var left = 5; //提示的left微调
				var top = 6; //提示的top微调
				//nameFull(obj,text,left,top); //提示调用的方法
				var type = 'warning'; //warning(感叹号)；
				nameFull(obj,text,left,top,type);//提示调用的方法
			}

		}
	}
};
function contactsPersonCheckboxFalse(){
	$("input[name='contactsPersonCheckbox']").attr("checked",false);
}

function showIssuedDiv(index,idType){
	if(idType!="HUIXIANG"&&idType!="TAIBAOZHENG"){
		FRONT.book.user.makeHtmlEmptyAndHide("#expDateDl"+index);
		FRONT.book.user.makeHtmlEmptyAndHide("#issuedDl"+index);
	}else{
		var expDateDlF=$("#expDateDl"+num).attr("optional");
		var issuedDlF=$("#expDateDl"+num).attr("optional");
		var expDate=$('<dt>有效期：</dt><dd><input class="input js_birthday js_yz" id="expDate'+num+'" name="travellers['+num+'].expDate" type_name="text"  type="text" readonly="readonly" placeholder="yyyy-mm-dd"></dd>');
		if(expDateDlF){
			expDate.find("input[type_name='text']").attr("optional",true);
		}
		var issued=$('<dt>签发地：</dt><dd><input class="input  js_yz"  maxlength="20" id="issued'+num+'" name="travellers['+num+'].issued" type_name="text" type="text" ></dd>');
		if(issuedDlF){
			issued.find("input[type_name='text']").attr("optional",true);
		}
		$("#expDateDl"+num).show().html("").append(expDate);
		$("#issuedDl"+num).show().html("").append(issued);
	}

}

function fillUserInfo(foundIndex,receiverId,checkBox){
    var fullNameInput = $("#fullName" + foundIndex);
    var travellersId = fullNameInput.attr("travellersId");
    var num = fullNameInput.parents('div.user_info.no_bd').attr("index");
    var k = foundIndex;

    var idType= checkBox.attr("idType");
    //如果是客服联系我，也强制改为身份证，因为前台没有客服联系我的选项了
    if (idType == "" || idType=="CUSTOMER_SERVICE_ADVICE") {
        idType = "ID_CARD";
    }
    $("#travellersId" + k).val(receiverId);
    fullNameInput.val(checkBox.attr("personName")).trigger("change");//.trigger("change");增加改变后调用change事情，不然文本改变不会被监听到
    fullNameInput.attr("travellersId",receiverId);
    $("#firstName" + k).val(checkBox.attr("firstName"));
    $("#lastName" + k).val(checkBox.attr("lastName"));
    $("#peopleType" + k).val(checkBox.attr("peopleType"));
    $("#mobile" + k).val(checkBox.attr("mobile"));
    $("#email" + k).val(checkBox.attr("email"));
    $("#idType" + k).val(idType);
    $("#idType" + k).trigger("change");
    //if(idType!="CUSTOMER_SERVICE_ADVICE"){
    $("#idNo" + k).val(checkBox.attr("idNo"));
    if($("#idNo" + k).length > 0){
        var regExp=new RegExp(" ","g");
        $("#idNo"+k).val($("#idNo"+k).val().replace(regExp,""));
        $("#idNo"+k).show();
    }

    //}
    FRONT.book.user.showBirthdayStrAndGender(idType,k);
    $("#gender" + k).val(checkBox.attr("gender"));
    $("#birthday" + k).val(checkBox.attr("birthday"));

    if(idType=="HUIXIANG"||idType=="TAIBAOZHENG"){
        $("#expDate" + k).val(checkBox.attr("expDate"));
        $("#issued" + k).val(checkBox.attr("issued"));
    }else{
        $("#expDate" + k).val("");
        $("#issued" + k).val("");
    }

    $("#cancelA" + k).attr("travellersId",receiverId);
}
 
