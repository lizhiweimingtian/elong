// JavaScript Document

$(function(){ 
	
	
	/*$('.js_youwanTime').focus(function(){ 
		pandora.calendar();
	});*/
	
	//下单日期调用，此代码已经迁移到后台
/**/
	var fixed_box = $('.fk_box_fixed');
	if(fixed_box.length>0){
		function fk_scroll(){
			var win_t = $(window).height() - fixed_box.height();
			var obj_t = fixed_box.offset().top;
			var scroll_t = $(document).scrollTop();
			if(scroll_t > obj_t - win_t){
				fixed_box.find('.fk_box').css('position','absolute')
			}else{
				fixed_box.find('.fk_box').css('position','fixed')
			}
		}
		$(window).scroll(function(){ 
			fk_scroll();
		});
		fk_scroll();
		
	}
	
	var name_list_new_box = $('.name_list_new_box'),
		namebox_len = name_list_new_box.length;
	if(namebox_len>0){
		$(window).scroll(function(){ 
			var last_namebox = name_list_new_box.eq(namebox_len-1);
			var win_t = $(window).height() - last_namebox.height();
			var obj_t = last_namebox.offset().top;
			var scroll_t = $(document).scrollTop();
			var order_box_h = last_namebox.parents('.order_box').height();
			if(scroll_t > obj_t && scroll_t && scroll_t < order_box_h+obj_t-100){
				
				last_namebox.find('.name_list_new').css({'position':'fixed','top':0,'z-index':199})
			}else{
				last_namebox.find('.name_list_new').css({'position':'relative','top':'inherit','z-index':0})
			}
		});
	}
	
	
	/*pandora.calendar({
        trigger: ".js_qzTime",
		template: "small",    //小日历
		isTodayClick:true,  //当天是否可点击
		offsetAmount:{left:-339,top:0}
    });
	
	pandora.calendar({
        trigger: ".js_bxTime",
		template: "small",    //小日历
		isTodayClick:true  //当天是否可点击
    });*/


	$(".js_birthday,.js_selectdate").each(function(){
		$(this).ui("calendar",{
		   input : this,
		   parm:{dateFmt:'yyyy-MM-dd'}
		})
	})
	
	$('.js_zhengjian').change(function(){ 
		var isIE=!!window.ActiveXObject;//判断ie
        var isIE6=isIE&&!window.XMLHttpRequest;//判断是否IE6
		if(isIE6){
			setTimeout(function(){
				var T = $(document).scrollTop();
				$('body,html').scrollTop(T+1);
			},150);
		}
		
		$(this).siblings('.input').val('');
	});
	
	//手机号码放大
	var bigHtml = '<div id="text_big" style="height:36px; line-height:36px; padding:0 10px; background:#FFFDE6;  border:#FFAA00 solid 1px; position:absolute; color:#333; font-family:Arial; font-size:20px; display:none;"></div>';
	$('body').append(bigHtml)
	$('.js_textBig').live('keyup',function(){ 
		var This = $(this);
		textBig(This);

	})
	$('.js_textBig').live('focus',function(){ 
		var This = $(this);
		var text = This.val();
		if(text.length>0){
			textBig(This);
		}
	})
	$('.js_textBig').live('blur',function(){ 
		$('#text_big').hide().html('');
	});
	
	function textBig(This){
		var text = This.val();
		var L = This.offset().left;
		var T = This.offset().top-37;
		var arr = [];
		for(var i=0;i<text.length;i++){
			arr.push(text.substring(i,i+1));
			if(This.attr('type_name') == 'mobile'){
				if(i==2 || i==6){
					arr.push(" ");
				}
			}else if(This.attr('type_name') == 'shenfenzheng'){
				if(i==5 || i==13){
					arr.push(" ");
				}
			}
			
		}
		$('#text_big').show().css({'left':L,'top':T,'min-width':$(This).outerWidth()-22}).html(arr.join(''));
	}
	
	
	//点击产品名称，展开内容
	$('.pro_name,.pro_info_sq,.js_name').live("click", function(){ 
		var pro_info = $(this).parents('.table_t').find('.pro_info');
		if(pro_info.is(':hidden')){
			$(this).parents('.table_t').addClass('jt_up').find('.pro_info').show();
		}else{
			$(this).parents('.table_t').removeClass('jt_up').find('.pro_info').hide();
		}
	});
	
	//目的地保险展开收起
	$('.js_bx_name,.bx_info_sq').live("click", function(){ 
		var bx_list_box = $(this).parents('.bx_list_box');
		if(bx_list_box.hasClass('jt_up')){
			bx_list_box.removeClass('jt_up').find('.pro_info').hide();
		}else{
			bx_list_box.addClass('jt_up').find('.pro_info').show();
		}
	});
	
	$('.bx_other').live('click',function(){
		if(!$(this).hasClass('bx_show')){
			$(this).addClass('bx_show').html('收起').siblings('.bx_list_box').show();
		}else{
			$(this).removeClass('bx_show').html('查看全部').siblings('.bx_list_box:gt(0)').hide();
		}
		
	});
	
	
	$('.js_bx_check').click(function(){ 
		if($(this).find('input').attr('checked')){
			$(this).parents('.user_dl').prev('.hide').show();
		}else{
			$(this).parents('.user_dl').prev('.hide').hide();
		}
	});
	
	$('.btn_qita').click(function(){ 
		var pro_info = $(this).siblings('#otherTicketDiv');
		if(pro_info.find('.table_t').eq(0).is(':hidden')){
			$(this).hide().addClass('jt_up');
			pro_info.find('.table_t').show();
		}else{
			$(this).removeClass('jt_up');
			pro_info.find('.table_t').hide();
		}
		
	});
	
	
	$(".tagsback,.tags101,.bx_ts,.js_tips").poptip({
		place : 6
	});
	
	$(".bx_ts").poptip({
		place : 6,
		skin:'#ff6600'
	});
	
	//选择联系人提示人数已满,此代码已经迁移到后台
	/*$('.name_list_new .check').click(function(){ 
		var obj = $(this);
		nameFull(obj);
	});
	*/
	
	//提示人数上限,此代码已经迁移到后台
	/*$('.num_add').click(function(){ 
		var obj = $(this).parent(); //提示出现的模块位置
		var text = '最多2人'      //提示的文字
		var left = 5;            //提示的left微调
		var top = 6;             //提示的top微调
		var type = 'warning';    //warning(感叹号)；
		var fn = false;
		nameFull(obj,text,left,top,type,fn) //提示调用的方法
	});*/
	
	
	$('.js_kuaidi').click(function(){ 
		$(this).parents('.table_t').addClass('kd_yixuan').siblings('.table_t').removeClass('kd_yixuan');
	});
	
	//选择优惠券
	$('.yh_list').change(function(){ 
		$(this).parent().next('.pro_info').show();
		$(this).parents('dd').siblings().find('.pro_info').hide();
	});
	
	//付款按钮
	/*$('.btn_fk').click(function(){ 
		if(yanzhengOk()){
			
		}
	});*/
	
	//鼠标离开输入框，验证
	$('.js_yz').live('blur',function(){ 
		var This = $(this);
		yanzhengThis(This);
		/*setTimeout(function(){
			yanzhengThis(This)
		},150);*/
		
		//检测中文姓名输入完成后，生成英文拼音
		var cnText = This.val();
		if(This.attr('type_name')=="chinese" && /^[\u4e00-\u9fa5]+$/.test(cnText)){
			var enInput = This.parents('.user_dl').next('.user_dl').find('input'),
				enInput1 = enInput.eq(0),
				enInput2 = enInput.eq(1);
			if(enInput1.attr('type_name')=="english2" || enInput1.attr('type_name')=="english"){
				/*$.getJSON('http://www.lvmama.com/aaa.do?cnName='+ cnText +'&callback=?',function(data){
					//返回英文姓、名
			
				});*/
			}
			
		}
	});
	//alert(12)
	
	$('.js_nowrite').live('click',function(){
		var $errorObj = $(this).parents('.order_box').find('.error_show');
		if($(this).text()=='暂不填写'){
			$(this).text('填写游玩人').parents('.order_box').css({'height':40,'overflow':'hidden'}).find('.user_info').hide();

			//检测填写错误，然后置空
			for (var i = 0; i < $errorObj.length; i++) {
				var $errorThis = $errorObj.eq(i),
					$errorInput = $errorThis.find('.js_yz');
				$errorThis.removeClass('error_show');
				$errorInput.val('');
			};
		}else{
			$(this).text('暂不填写').parents('.order_box').css('height','auto').find('.user_info').show();
		}
	});
	
	
	//选择发票
	$('.js_fapiaoYes').change(function(){ 
		$(this).parents('.list_tit').next('.user_info').show();
		$('.js_fapiaoTip').show();
	});
	$('.js_fapiaoNo').change(function(){ 
		$(this).parents('.list_tit').next('.user_info').hide();
		$('.js_fapiaoTip').hide();
	});
	
	//选择快递
	$('.js_kuaidi').change(function(){ 
		$(this).parents('.list_tit').next('.user_info').find('.user_dl:last').hide().siblings().show();
	});
	$('.js_ziqu').change(function(){ 
		$(this).parents('.list_tit').next('.user_info').find('.user_dl:last').show().siblings().hide();
	});
	
	//协议更多展开
	$('.xieyi_gd').click(function(){ 
		$(this).hide().siblings('.lv-agree').addClass('xieyi_show');
		$('html,body').animate({'scrollTop':$(document).scrollTop()+250},300)
	})
	
	//合同弹窗
	$('.xieyi_qw').click(function(){ 
		pandora.dialog({
			title: "合同模板",
			width: 780,
			content: $(".ht_box")
		});
	})

	//可享促销展开
	$('.youhui_tit').live('click',function(){ 
		$('.js_nameFull,.js_popTips').remove();
		if(!$(this).hasClass('info_show')){
			$(this).addClass('info_show').siblings('.youhui_info').show();
		}else{
			$(this).removeClass('info_show').siblings('.youhui_info').hide();
		}
	});
	
	

	
	$('.js_btn_qita').live('click',function(){ 
		var pro_info = $(this).siblings('.otherHideDiv');
		if(pro_info.find('.table_t').eq(0).is(':hidden')){
			$(this).hide().addClass('jt_up');
			pro_info.show().find('.table_t').show();
		}else{
			$(this).removeClass('jt_up');
			pro_info.hide().find('.table_t').hide();
		}
		
	});
	
	
	$('.js_name_shouqi').live('click',function(){ 
		if($(this).hasClass('btn_up')){
			$(this).removeClass('btn_up').html('更多<i class="icon_arrow"></i>').parent().height(26);
		}else{
			$(this).addClass('btn_up').html('收起<i class="icon_arrow"></i>').parent().height('auto');;
		}
		$(this).parents('.name_list_new_box').height($(this).parent().outerHeight(true));
		
	});
	
	

	
	//直接显示证件类型
	$('.js_zj_show').live('change',function(){ 
		$(this).parent().siblings('.zj_list').show();
	});
	//客服来电填写证件
	$('.js_zj_hide').live('change',function(){ 
		$(this).parent().siblings('.zj_list').hide();
	});
	//邮轮填写信息，清空
	/*$('.js_btn_qk').live('click',function(){ 
		$(this).parents('.user_info').find('input').val('');
		$(this).parents('.user_info').find('dd,li').removeClass('error_show');
	});*/
	
	$(".js_yk_name").die().live('keyup',function(){
	    if($(this).val().trim() == $('.js_jj_name').val()){
	        $('.js_jj_name').parent('dd').addClass('error_show2');
	    }else{
	        $('.js_jj_name').parent('dd').removeClass('error_show2');
	    }
	});

	$('.js_yk_mobile').die().live('keyup',function(){
	    if($(this).val().trim() == $('.js_jj_mobile').val()){
	        $('.js_jj_mobile').parent('dd').addClass('error_show2');
	    }else{
	        $('.js_jj_mobile').parent('dd').removeClass('error_show2');
	    }
	});
	//邮轮紧急联系人手机检测
	$('.js_jj_mobile').live('keyup',function(){ 
		var $This = $(this);
		for(var i=0;i<$('.js_yk_mobile').length;i++){
			if($('.js_yk_mobile').eq(i).val()==$This.val() && $This.val()!=''){
				setTimeout(function(){
					$This.parent('dd').addClass('error_show2');
				},200)
			}else{
				$This.parent('dd').removeClass('error_show2');
			}
			
		}
	});
	//邮轮紧急联系人姓名检测
	$('.js_jj_name').live('keyup',function(){ 
		var $This = $(this);
		for(var i=0;i<$('.js_yk_name').length;i++){
			if($('.js_yk_name').eq(i).val()==$This.val() && $This.val()!=''){
				setTimeout(function(){
					$This.parent('dd').addClass('error_show2');
				},200)
			}else{
				$This.parent('dd').removeClass('error_show2');
			}
			
		}
	});
	
	//复制购买人信息
	$('.js_btn_copy').live('click',function(){ 
		var $input1 = $('.js_copy_info').eq(0).find('.js_yz');
		var $input2 = $(this).parents('.user_info').find('.js_yz');
		var konglen = 0;
		for(var i=0;i<$input1.length;i++){
			var attr1 = $input1.eq(i).attr('type_name');
			var value = $input1.eq(i).val();
			if(value!=''){
				for(var j=0;j<$input2.length;j++){
					var attr2 = $input2.eq(j).attr('type_name');
					if(attr1==attr2){
						$input2.eq(j).val(value).trigger("change");
					}
				}
				$(this).parents('.user_info').find('dd').removeClass('error_show');
			}else{
				konglen++;
			}
		}
		
		if(konglen==$input1.length){
			$.msg('请先填写购买人信息',1500);
		}
		
		/*var copyName = $('.js_copy_info').eq(0).find('.input').eq(0).val();
		var copyMobile = $('.js_copy_info').eq(0).find('.input').eq(1).val();
		if(copyName!='' && copyMobile!=''){
			$(this).siblings('.input').val(copyName);
			$(this).parents('.user_dl').next('.user_dl').find('.input').val(copyMobile);
			$(this).parents('.user_info').find('dd').removeClass('error_show');
		}else{
			alert('请先填写购买人信息!')
		}*/
	});
	
	//发送验证码,一放在后台
	/*var times = 60,
		timer4 = null,
		downTime = true;
	$('.js_order_yzm').live('click',function(){ 
		if(times==60 && downTime){
			downTime = false;
			var This = $(this);
			This.html('<span class="c_f60">60</span>秒后重发').addClass('disabled');
			
			timer4 = setInterval(function(){
				times--;
				This.find('span').html(times);
				if(times==0){
					clearTimeout(timer4);
					This.html('重发验证码').removeClass('disabled');
					times=60;
					downTime = true;
				}
			},1000);
			
			//发送验证码的请求，在这里写.	
		}
		
	});*/
	
	//保险切换
	$('.bx_tab li').live('click',function(){ 
		$(this).addClass('active').siblings().removeClass('active');
	});
	
	//var bx_tab_info = $('.bx_tab_info');
	var timer_bx = null;
	$('.bx_tab li').live('mouseenter',function(){ 
		var L = $(this).parent().offset().left,
			thisT = $(this).offset().top+35-$('.main_box').offset().top,
			arrowL = $(this).width()/2+8,
			infoL = $(this).offset().left,
			num = $(this).index();
		
		if(num>0){
			clearTimeout(timer_bx);
			$('.bx_tab_info').show().css({'left':infoL,'top':thisT}).find('li').eq(num-1).show().siblings().hide();
			$('.bx_tab_info').find('.info_arrow').css('left',arrowL);
		}
	});
	$('.bx_tab li').live('mouseleave',function(){
		var num = $(this).index();
		if(num>0){
			timer_bx = setTimeout(function(){
				$('.bx_tab_info').hide();
			},200);
		}
	});
	
	$('.bx_tab_info').live('mouseenter',function(){ 
		clearTimeout(timer_bx);
	});
	$('.bx_tab_info').live('mouseleave',function(){ 
		timer_bx = setTimeout(function(){
			$('.bx_tab_info').hide();
		},200)
	});
	
	
	
	
	$('.pro_name_bx').live('click',function(){ 
		if(!$(this).parents('dl').hasClass('jt_up')){
			$(this).parents('dl').addClass('jt_up');
			$(this).siblings('.pro_info_bx').show();
		}else{
			$(this).parents('dl').removeClass('jt_up');
			$(this).siblings('.pro_info_bx').hide();
		}
	});
	
	$('.pro_info_bx_sq').live('click',function(){ 
		$('.pro_name_bx').click();
	});

	
	//酒店下单
	/*pandora.calendar({
        trigger: ".js_hotel_time",
        isRange: true,
        cascade: {
            days: 1,
            trigger: ".js_hotel_time"
        },
        isTodayClick: true,
        template: "small",
        selectDateCallback: null
    });*/
	
	
	//邮箱自动补全
	var emailArr = ['qq.com','163.com','126.com','sina.com','sina.cn','yahoo.com','hotmail.com','gmail.com','sohu.com','yeah.net','139.com','foxmail.com','189.com'],
		emailIndex = -1,
		nowInput;
	
	if($('.js_email').length>0){};
	
	$('body').append('<ul class="email_list" id="email_list"></ul>');
	
	$('.js_email').live('keyup',function(e){ 
		var This = $(this),
			email_list = $('#email_list'),
			sText = This.val();
		
		if(/@/.test(sText)){
			var thisL = This.offset().left,
				thisT = This.offset().top+This.outerHeight()-1,
				html = '',
				emaillen = emailArr.length,
				activeText = '';
			
			if(sText.substring(sText.length-1,sText.length)=="@"){
				for(var i=0;i<emaillen;i++){
					html+='<li>'+sText+emailArr[i]+'</li>';
				}
				email_list.html(html).css({'display':'block','left':thisL,'top':thisT});
				emailIndex=-1;
			};
			if(e.keyCode == "38"){
				emailIndex--;
				if(emailIndex<=-1){emailIndex=emaillen-1};
				email_list.find('li').eq(emailIndex).addClass('active').click().siblings().removeClass('active');
			}else if(e.keyCode == "40"){
				
				emailIndex++;
				if(emailIndex>=emaillen){emailIndex=0};
				email_list.find('li').eq(emailIndex).addClass('active').click().siblings().removeClass('active');
			}else if(e.keyCode == "13"){
				This.blur();
			}
		}else{
			email_list.hide();
			emailIndex=-1;
		};
		
	}).live('focus',function(){ 
		nowInput = $(this);
	}).live('blur',function(){ 
		setTimeout(function(){
			$('#email_list').hide();
			emailIndex=-1;
		},150)
		
	});;
	
	$('#email_list li').live('click',function(e){ 
		var ThisLi = $(this),
			sText = ThisLi.text();
		nowInput.val(sText);
		if(ThisLi.click.caller==null){
			nowInput.blur();
		}
	});

	
	//范例点击
	$('.fanli_btn').live('click',function(e){
		e.stopPropagation(); 
		var obj = $(this);
		if($('.fanli_box').is(":hidden")){
			$('.fanli_box').show();
			fanlixy(obj);
		}else{
			$('.fanli_box').hide();
		}
		
	});
	
	$(document).live('click',function(){ 
		$('.fanli_box').hide();
	});
	
	$('.fanli_box').live('click',function(e){ 
		e.stopPropagation(); 
	});
	
	$(window).resize(function(){ 
		var obj = $('.fanli_btn');
		fanlixy(obj);
	});
	
	function fanlixy(obj){
		if(obj.length>0){
			var L = obj.offset().left+obj.width()+10,
				T = obj.offset().top-20;
			$('.fanli_box').css({'left':L,'top':T});	
		}
		
	}
	
	$('.fanli_tab li').hover(function(){ 
		var num = $(this).index();
		$(this).addClass('active').siblings().removeClass('active');
		$('.fanli_list li').eq(num).show().siblings().hide();
	});
	

	$('.xieyi_ok').find('input').change(function(event) {
		$('.xieyi_ok').removeClass('red').find('.check').removeClass('xieyi_shake');
	});
	
	
});



	//检测是否全部填写OK
	function yanzhengOk(){
		var obj = $('.js_youwanTime'); 
		for(var i=0;i<obj.length;i++){
			objThis = obj.eq(i);
			if(objThis.is(':visible')){
				if(objThis.val()==''){
					$('body,html').scrollTop(0);
					objThis.addClass('input_red');
					nameFull(objThis,'请选择游玩日期',215,-25,'warning'); 
					return false;
				}else{
					objThis.removeClass('input_red');
				}
			}
		}

		//长隆马戏场地选择验证
		var $circus = $('#circus');
		var $d_ccSelect = $('.d_ccSelect');
		if($circus.length != 0) {
			if ($d_ccSelect.is(':hidden')) {
				$('body,html').scrollTop(0);
				alert('暂无场次信息，请选择其他日期。');
				return false;
			}
			if ($d_ccSelect.val() == "-请选择场次-") {
				$('body,html').scrollTop(0);
				$d_ccSelect.addClass('input_red');
				$circus.find('.d_floatTip').show();
				return false;
			}else{
				$d_ccSelect.removeClass('input_red');
				$circus.find('.d_floatTip').hide();
			}
		}
		
		var $yanzheng = $('.js_yz');
		for(var i=0;i<$yanzheng.length;i++){
			var This = $yanzheng.eq(i);
			yanzhengThis(This)
		}
		
		var _english2 = /^[a-zA-Z\s]+$/;
		for(var i=0;i<$('.error_show').length;i++){
			var $error_show = $('.error_show').eq(i),
				yzInput = $error_show.find('.js_yz');
			if($error_show.is(':visible')){
				yzInput.eq(0).focus();
				if(yzInput.eq(0).attr('type_name')=='english2'){
					if(_english2.test(yzInput.eq(0).val())){
						yzInput.eq(1).focus();
					}
				}
				
				return false;
			}
		};
		
		for(var i=0;i<$('.error_show2').length;i++){
			if($('.error_show2').eq(i).is(':visible')){
				$('.error_show2').eq(i).find('.js_yz:first').focus();
				return false;
			}
		};
		
		if(!$('.xieyi_ok').find('input').attr('checked') && $('.xieyi_ok').is(':visible')){
			//alert('请勾选同意预定须知及合同条款')
			if($('.xieyi_ok').length>0){
				$(document).scrollTop($('.xieyi_ok').offset().top-100);
				$('.xieyi_ok').find('.check').addClass('xieyi_shake');
			}
			
			$('.xieyi_ok').addClass('red');
			return false;
		}

		return true;
	}
	
	//验证当前输入框
	function yanzhengThis(This){
	    var _mobile = /^\d{11}$/;
		var _mobile2 = /^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(17\d{1})|(18([0-4]|[5-9])))\d{8}$/;
		var _email = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		var isIDCard2= /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;/*/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{4}$/*/
		var _english = /^[\u4e00-\u9fa5]+$/;
		var _english2 = /^[a-zA-Z\s]+$/;
		var _username = /^[a-zA-Z\u4e00-\u9fa5\s]+$/;
		var value = $.trim(This.val()),
			thisSvalue = $.trim(This.siblings('input').val());
		var thisP = This.parent(),
			errorDom = thisP.find('.error_text');
			
		function errorHtml(text){
			thisP.addClass('error_show');
			errorDom.html('<i class="tip-icon tip-icon-error"></i>'+ text +'。');
		}
			
		if(This.is(':visible')){
			
			var optional = This.attr('optional');
			
			//验证是否输入文字
			if(This.attr('type_name')=='text'){
				var error_tips = This.attr('placeholder');
				if(value=='' && optional!="true"){
					errorHtml(error_tips);
				}else{
					thisP.removeClass('error_show');
				}
			};
			
			
			//验证中英文姓名
			if(This.attr('type_name')=='username'){
				if( value=='' && optional!="true"){
					errorHtml('请输入姓名');
				}else if(!_username.test(value) && value!=''){
					errorHtml('姓名只能包含汉字、字母和空格，请重新输入');
				}else{
					thisP.removeClass('error_show');
				}
			};
			
			
			//验证非汉字
			if(This.attr('type_name')=='english'){
				if( value=='' || _english.test(value)){
					thisP.addClass('error_show');
				}else{
					thisP.removeClass('error_show');
				}
			};
			
			//验证汉字
			if(This.attr('type_name')=='chinese'){
				if( value==''){
					errorHtml('请输入中文姓名');
				}else if(!_english.test(value)){
					errorHtml('中文姓名只能包含汉字，请重新输入');
				}else{
					thisP.removeClass('error_show');
				}
			};
			
			//验证英文字母
			if(This.attr('type_name')=='english2'){
				if(value=='' && optional!="true"){
					errorHtml('请输入英文姓、名');
				}else if(!_english2.test(value) && value!=''){
					errorHtml('英文姓名只能包含字母，请重新输入');
				}else{
					if(This.siblings('input').attr('type_name')=='english2' && _english2.test(thisSvalue) || thisSvalue=='' && optional=="true"){
						thisP.removeClass('error_show');
					}else if(optional!="true"){
						thisP.addClass('error_show');
					}
				}
			};
			
			//验证抵现数字
			if(This.attr('type_name')=='number'){
				if( value=='' && This.prev().find('input').attr('checked') || isNaN(value) && This.prev().find('input').attr('checked') ||  isNaN(value) && This.prev().find('input').length==0 ||  value=='' && This.prev().find('input').length==0){
					thisP.addClass('error_show');
				}else{
					thisP.removeClass('error_show');
				}
			};
			//验证优惠券是否选择和输入
			if(This.attr('type_name')=='youhuiquan'){
				if( value=='' && This.prev().find('input').attr('checked') || isNaN(value) && This.prev().find('input').attr('checked')){
					thisP.addClass('error_show');
				}else{
					thisP.removeClass('error_show');
				}
			};
			//验证手机
			if(This.attr('type_name')=='mobile'){
				if(value=='' && optional!="true"){
					errorHtml('请输入手机号');
				}else if(!_mobile.test(value) && value!=''){
					errorHtml('手机号码必须为11位的数字，请重新输入');
				}else if(value.length==11 && !_mobile2.test(value)){
					errorHtml('暂不支持您输入的号码段，请联系驴妈妈客服<span class="c_f60">1010-6060</span>进行反馈');
				}else{
					thisP.removeClass('error_show');
				}
			};
			//验证邮箱
			if(This.attr('type_name')=='email'){
				if(value=='' && optional!="true"){
					errorHtml('请输入邮箱地址');
				}else if(!_email.test(value) && value!=''){
					errorHtml('电子邮箱格式不正确，请重新输入');
				}else{
					thisP.removeClass('error_show');
				}
			};
			//验证身份证
			if(This.attr('type_name')=='shenfenzheng'){
			    if(value=='' && optional!="true"){
					errorHtml('请输入证件号码');
				}else if(!isIdCardNo(value) && This.siblings('.select').val() == 'ID_CARD' && value!=''){
					errorHtml('请输入正确的身份证号码');
				}else{
					thisP.removeClass('error_show');
				}
			};
			//验证地址
			if(This.attr('type_name')=='address'){
				if($('#js_city1').val()=='选择省' || $('#js_city2').val()=='选择市'){
					errorHtml('请选择省份、城市');
				}else if(value=='' || value.length<5){
					errorHtml('请输入正确的详细地址');
				}else{
					thisP.removeClass('error_show');
				}
			};
			//验证邮编
			if(This.attr('type_name')=='youbian'){
				if(value.length!=6 && value!=''){
					errorHtml('邮政编码只能为6位数字，请重新输入');
				}else{
					thisP.removeClass('error_show');
				}
			};
			
			
			//验证中英文
			if(This.attr('type_name')=='cnEn'){
				var error_tips = This.attr('placeholder');
				if( value=='' && optional!="true"){
					errorHtml(error_tips);
				}else if(!_username.test(value) && value!=''){
					errorHtml('只能填写汉字或字母，请重新输入');
				}else{
					thisP.removeClass('error_show');
				}
			};
			
		}//检测是否可见，只验证可见元素
	}

	function isIdCardNo(num) {
	    num = num.toUpperCase();
	    if (!(/(^\d{15}$)|(^\d{17}([0-9]|X)$)/.test(num))) {
	        return false;
	    }
	    //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。 
	    var len, re;
	    len = num.length;
	    if (len == 15) {
	        re = new RegExp(/^(\d{6})(\d{2})(\d{2})(\d{2})(\d{3})$/);
	        var arrSplit = num.match(re);
	        //检查生日日期是否正确 
	        var dtmBirth = new Date('19' + arrSplit[2] + '/' + arrSplit[3] + '/' + arrSplit[4]);
	        var bGoodDay;
	        bGoodDay = (dtmBirth.getYear() == Number(arrSplit[2])) && ((dtmBirth.getMonth() + 1) == Number(arrSplit[3])) && (dtmBirth.getDate() == Number(arrSplit[4]));
	        if (!bGoodDay) {
	            return false;
	        } else {
	            //将15位身份证转成18位 
	            //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。 
	            var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
	            var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
	            var nTemp = 0, i;
	            num = num.substr(0, 6) + '19' + num.substr(6, num.length - 6);
	            for (i = 0; i < 17; i++) {
	                nTemp += num.substr(i, 1) * arrInt[i];
	            }
	            num += arrCh[nTemp % 11];
	            return num;
	        }
	    }
	    if (len == 18) {
	        re = new RegExp(/^(\d{6})(\d{4})(\d{2})(\d{2})(\d{3})([0-9]|X)$/);
	        var arrSplit = num.match(re);
	        //检查生日日期是否正确 
	        var dtmBirth = new Date(arrSplit[2] + "/" + arrSplit[3] + "/" + arrSplit[4]);
	        var bGoodDay;
	        bGoodDay = (dtmBirth.getFullYear() == Number(arrSplit[2])) && ((dtmBirth.getMonth() + 1) == Number(arrSplit[3])) && (dtmBirth.getDate() == Number(arrSplit[4]));
	        if (!bGoodDay) {
	            return false;
	        }
	        else {
	            //检验18位身份证的校验码是否正确。 
	            //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。 
	            var valnum;
	            var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
	            var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
	            var nTemp = 0, i;
	            for (i = 0; i < 17; i++) {
	                nTemp += num.substr(i, 1) * arrInt[i];
	            }
	            valnum = arrCh[nTemp % 11];
	            if (valnum != num.substr(17, 1)) {
	                return false;
	            }
	            return num;
	        }
	    }
	    return false;
	}

	//显示联系人已满
	function nameFull(obj,text,left,top,type,fn){
		var L = obj.offset().left-10;
		var T = obj.offset().top+25;
		var Text = '人数已满';
		var html = '';
		var jtL = '';
		var fx = 12;
		$('.js_nameFull').remove();
		if(left){
			L = obj.offset().left-10+left;
		}
		if(top){
			T = obj.offset().top+25+top;
		}
		//提示文字
		if(text){
			Text = text;
		}
		//选择游玩日期提示
		if(obj.val()=='' && obj.hasClass('js_youwanTime')){
			fx = 9;
			$('html,body').animate({'scrollTop':0},300);
			obj.addClass('input_red');
		}
		
		//优惠券模块填写错误提示
		if(obj.attr('yz_input')=='true'){
			obj.addClass('input_red');
			jtL = ' style="left:30px;"'
		}
		
		//优惠券chek提示
		if(obj.attr('tips_L')=='true'){
			jtL = ' style="left:20px;"'
		}
		
		//提示类型
		if(type!=true){
			html = '<span class="tiptext tip-error tip-line js_nameFull"><span class="tip-icon tip-icon-error"></span>'+Text+'<div class="tip-arrow tip-arrow-'+fx+'"'+ jtL +'><em>◆</em><i>◆</i></div></span>';
		}
		if(type=='warning'){
			html = '<span class="tiptext tip-warning tip-line js_nameFull"><span class="tip-icon tip-icon-warning"></span>'+Text+'<div class="tip-arrow tip-arrow-'+fx+'"'+ jtL +'><em>◆</em><i>◆</i></div></span>';
		}
		if($('.js_nameFull').length==0){
			$('body').append(html);
		}
		if(obj.hasClass('num_box')){
			obj.addClass('num_false');
		}
		
		//提示定位
		$('.js_nameFull').css({'position':'absolute','left':L,'top':T});
		if(fn==true){
			$('.js_nameFull').remove();
			obj.removeClass('num_false');
			$('.warning_box').hide();
		}else if(fn==undefined){
			obj.mouseout(function(){
				$('.js_nameFull').remove();
				obj.removeClass('num_false');
			});
		}else{
			//库存不足提示
			var warHtml = '<div class="warning_box"><div class="tiptext tip-warning"><span class="tip-icon tip-icon-big-warning"></span>很抱歉，您预订的产品因其他买家抢购以致库存不足，请修改数量。</div></div>'
			$('body').append(warHtml);
			if(T<$(document).scrollTop()){
				$('html,body').scrollTop(T-100);
			}
			
		}
		/**/
	}
	
	//优惠券模块提示文字
	var tipsid = 100;
	function popTips(obj,text,type,nodel){
		var L = obj.offset().left;
		var T = obj.offset().top + obj.outerHeight() + 6;
		var html = '';
		tipsid++;
		//计算弹窗提示箭头位置
		if(obj.outerWidth()<30){L=L-(30-obj.outerWidth())+3}
		
		if(!nodel){
			$('.js_popTips').remove();
		}
		
		//提示类型
		if(type=='warning'){
			html = '<div class="tiptext tip-warning tip-line js_popTips js_tips'+tipsid+'"><span class="tip-icon tip-icon-warning"></span>'+text+'<div class="tip-arrow tip-arrow-12" style="left:20px;"><em>◆</em><i>◆</i></div></div>';
		}else if(type=='error'){
			html = '<div class="tiptext tip-error tip-line js_popTips js_tips'+tipsid+'"><span class="tip-icon tip-icon-error"></span>'+text+'<div class="tip-arrow tip-arrow-12" style="left:20px;"><em>◆</em><i>◆</i></div></div>';
		}else{
			html = '<div class="tiptext tip-light js_popTips js_tips'+tipsid+'"><span class="tip-icon tip-icon-error"></span>'+text+'<div class="tip-arrow tip-arrow-12" style="left:20px;"><em>◆</em><i>◆</i></div></div>';
		};
		
		$('body').append(html);
		/*if($('.js_popTips').length==0){
			$('body').append(html);
		}*/
		
		//提示定位
		$('.js_tips'+tipsid).css({'position':'absolute','left':L,'top':T});
	}
	
	
	//删除提示
	function removeTips(){
		$('.js_nameFull,.js_popTips').remove();
	}
	
	
	//添加卡
	function addCard(cardName,cardNum,cardPrice){
		var cardTit = '<tr><th width="25%">'+cardName+'号</th><th width="25%">剩余金额</th><th width="25%">本次使用</th><th width="25%">　</th></tr>';
		var cardHtml ='<tr><td>'+cardNum+'</td><td>'+cardPrice+'元</td><td><div class="yong_price" yong_price="0"><input class="input" type="text">元</div></td><td><span class="btn btn-mini btn-orange js_card_ok">确认</span> <span class="btn btn-mini btn-default js_card_cancel">取消</span></td></tr>';
		if(cardName=='储值卡'){
			if($('.czk_table tr').length==0){
				$('.czk_table').append(cardTit+cardHtml);
			}else{
				$('.czk_table').append(cardHtml);
			}
		}else if(cardName=='礼品卡'){
			if($('.lpk_table tr').length==0){
				$('.lpk_table').append(cardTit+cardHtml);
			}else{
				$('.lpk_table').append(cardHtml);
			}
		}
	}
	
	
	//页面loading状态
	function winLoading(data,txt){
		if(data==true && $('.windowBg').length==0){
			$('body').append('<div class="windowBg" style=" position:absolute; top:0; left:0; width:100%; background:#999; filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity:0.5; opacity:0.5; z-index:998;"></div><div class="winloading" style=" width:300px; height:50px; padding:26px 0; text-align:center; line-height:52px; font-size:14px; color:#666; background:#fff; border:#999 solid 1px; z-index:999; position:fixed; top:50%; margin-top:-50px; left:50%; margin-left:-150px;"><img style=" vertical-align:middle;" src="http://pic.lvmama.com/img/new_v/ui_scrollLoading/loadingGIF46px.gif" width="46" height="46" />　'+txt+'</div>');
			var height_w =$(document).height();
			$('.windowBg').css({'height':height_w});
		}else{
			$('.windowBg,.winloading').remove();
		}
		 
	}
	
	
	//添加被保险人名字
	function bxNameHtml(length){
		var html = '';
		for(i=0;i<length;i++){
			html += '<label class="check"></label>';
		}
		for(i=0;i<$('.js_bx_name').length;i++){
			$('.js_bx_name').eq(i).html(html);
		}
		
	}
	//被保险人显示隐藏
	function bxNameShow(length,bxName){
		var html = '<input class="checkbox" type="checkbox">'+bxName;
		if(bxName==false){
			for(i=0;i<$('.js_bx_name').length;i++){
				$('.js_bx_name').eq(i).find('.check').eq(length).html('');
			}
		}else{
			for(i=0;i<$('.js_bx_name').length;i++){
				$('.js_bx_name').eq(i).find('.check').eq(length).html(html);
			}
		}
		
	}

//门票-长隆库存校验-订单填写-场次
(function(){
	
	tipFix();

	// 最多可选提示 动态定位方法
	function tipFix(){
		var $floatTip = $('.d_floatTipFix');
		var $num_box = $floatTip.prev('.num_box');
		var $doc = $(document);
		var $win = $(window);

		if($floatTip.length != 1) return false;

		changePos();

		$win.scroll(function(event) {
			changePos();
		});

		$win.resize(function(event) {
			changePos();
		});

		function changePos(){
			$floatTip.css({
				'top' : $num_box.offset().top - $doc.scrollTop(),
				'left': $num_box.offset().left
			});
		}
	}

})();	

// 机+酒 下单
$(function(){
    $(".flight-add-one-day").poptip({
        offsetX : -29,
        place: 7
    });

    $(".plane-type").hover(function() {
        var $this = $(this);
        var $planeInfoDetail = $(".plane-info-detail");
        var thisL = $this.offset().left,
        thisT = $this.offset().top,
        thisH = $this.outerHeight(true);

        $planeInfoDetail.find(".pi-plan").text($this.data("plan"));
        $planeInfoDetail.find(".pi-name").text($this.data("name"));
        $planeInfoDetail.find(".pi-type").text($this.data("type"));
        $planeInfoDetail.find(".pi-min").text($this.data("min"));
        $planeInfoDetail.find(".pi-max").text($this.data("max"));

        $('.plane-info').show().css({
            'left': thisL,
            'top': thisT + thisH + 4
        });
    },function () {
        var timeId = setTimeout(function(){
            $('.plane-info').hide();
        },300);
        $('.plane-info').mouseenter(function(){
            clearTimeout(timeId);
        }).mouseleave(function(){
            $(this).hide();
        });
    });
});

// 20160311
$(function(){ 
	var $document = $(document);

	$document.on("click", function(){
		$(".js_yhim_complete").hide();
	});
	
	//门票数量提示
	$(".js_ticket_amount").poptip({
		place : 6,
        offsetX: 2
	});
	// 展开单门票
	$(".yh_all_st").on("click", function(){
		var $this = $(this);
		var openClassName = 'yh_all_st_open';
		var $singleTicketList = $this.siblings('.yh_single_ticket');
		if($this.hasClass(openClassName)) {
			$this.html('查看全部('+$this.data("num")+')<i class="icon_arrow"></i>');
			var shownAmount = hideUnselectedElem($singleTicketList);
			// 未选择项往后排
			var $hiddenTicket = $this.siblings('.yh_single_ticket:hidden');
			for(var i=0; i<$hiddenTicket.length;i++){
				$this.before($hiddenTicket.eq(i));
			}

			if(shownAmount<3) {
				$this.siblings('.yh_single_ticket:hidden:lt('+(3-shownAmount)+')').show();
			}
		} else {
			$singleTicketList.show();
			$this.html('收起<i class="icon_arrow"></i>');
		}
		$this.toggleClass(openClassName);
	});

	// 展开保险
	$(".yh_bx .bx_title").on("click", function(){
		var $this = $(this);
		var $bx = $this.parents(".yh_bx");
		var $bxList = $this.siblings(".bx_list_box");
		var openClassName = 'bx_title_open';
		if ($this.hasClass(openClassName)) {
			var shownAmount = hideUnselectedElem($bxList);
			if(shownAmount<1) {
				$this.siblings('.bx_list_box:hidden:lt('+(1-shownAmount)+')').show();
			} else {
			}
			for(var i=0; i<$bxList.length; i++) {
				if($bxList.eq(i).hasClass('jt_up')) {
					$bxList.eq(i).find(".js_bx_name").click();
				}
			}
		} else {
			$bxList.show();
		}
		$this.toggleClass(openClassName);
	});

	// 展开全部保险
	$(".yh_all_bx").on("click", function(){
		var $this = $(this);
		var openClassName = 'yh_all_bx_open';
		var $bxList = $this.siblings('.yh_bx');
		if($this.hasClass(openClassName)) {
			$this.html('查看全部保险类型('+$this.data("num")+')<i class="icon_arrow"></i>');
			for(var i=0; i<$bxList.length; i++) {
				// 收起产品名下的商品
				var $thisBx = $bxList.eq(i);
				var $bxTitle = $bxList.eq(i).find(".bx_title");
				if($bxTitle.hasClass('bx_title_open')) {
					$bxTitle.click();
				}
				// 收起产品
				if(!isBxSelected($thisBx)) {
					$thisBx.hide();
				}
				if($this.siblings('.yh_bx:hidden').length == $bxList.length){
					$bxList.eq(0).show();
				}
			}

		} else {
			$bxList.show();
			$this.html('隐藏其他保险类型<i class="icon_arrow"></i>');
		}
		$this.toggleClass(openClassName);
	});

	function hideUnselectedElem($list) {
		var shownAmount = 0;
		for(var i=0; i<$list.length; i++) {
			if($list.eq(i).find(".table_select").val()==0) {
				$list.eq(i).hide();
			} else {
				shownAmount+=1;
			}
		}
		return shownAmount;
	}

	function isBxSelected($bx) {
		var $select = $bx.find(".bx_selectNum");
		for(var i=0; i<$select.length; i++) {
			if($select.eq(i).val()!= '0') {
				return true;
			}
		}
		return false;
	}


    $document.on("change", ".yhim_title :checkbox", function () {
        var $this = $(this);
        var $content = $(".yhim_content");
        if ($this.prop("checked")) {
            $content.show()
        } else {
            $content.hide();
        }

    });

    $(".js_invoice_type").on("change", function(){
        var $this = $(this);
        var $companyInput = $(".input_yh_company");
        var $personInput = $(".input_yh_person");
    	if ($this.val()=="company") {
    		$companyInput.addClass('js_yz').removeAttr('disabled');
    		$personInput.attr("disabled","disabled").removeClass('js_yz');
    	} else {
    		$personInput.addClass('js_yz').removeAttr('disabled');
    		$companyInput.attr("disabled","disabled").removeClass('js_yz');
    	}
    	$this.parents("dd").find("p").removeClass('error_show');
    });


    // 联系人，邮寄地址信息填充
    $(".input_yh_user, .input_yh_address").on("focus", function(){
    	var $this = $(this);
    	var $thisComplete = $this.siblings(".js_yhim_complete");
    	if($this.val()=="") {
			$thisComplete.find("li").removeClass('active');
			$thisComplete.show();
    	}
    });

    $(".input_yh_user, .input_yh_address").on("blur", function(){
    	setTimeout(function(){
    		$(".js_yhim_complete").hide();
    	},300);
    });

    $(".input_yh_user").on("click", function(e){
    	e.stopPropagation();
    	$(".yhim_address_complete").hide();
    });

    $(".input_yh_address").on("click", function(e){
    	e.stopPropagation();
    	$(".yhim_user_complete").hide();
    });

    $(".input_yh_user, .input_yh_address").on("input propertychange", function(){
    	var $this = $(this);
    	var $thisComplete = $this.siblings(".js_yhim_complete");
    	if($this.val()!=""){
    		$thisComplete.hide();
    	} else {
			$thisComplete.find("li").removeClass('active');$thisComplete
    		$thisComplete.show();
    	}
    });

    $(".js_yhim_complete li").on("mouseover", function(){
    	var $this = $(this);
    	$this.removeClass('active').siblings().removeClass('active');
    });


    $(".yhim_user_complete li").on("click", function(){
    	var $this = $(this);
    	$(".input_yh_user").val($this.find(".yuc_name").html());
    	$(".input_yh_phone").val($this.find(".yuc_phone").html());
    	$(".input_yh_user, .input_yh_phone").blur();
    });

    $(".yhim_address_complete li").on("click", function(){
    	var $this = $(this);
    	$(".input_yh_address").val($this.html());
    	$(".input_yh_address").blur();
    });

    $(".input_yh_user, .input_yh_address").on("keyup", function(event){
		var $this = $(this);
    	var $li = $this.siblings(".js_yhim_complete").find("li");
    	var $active = $li.filter(".active");
    	var length = $li.length;
		var code = event.keyCode;
    	if(length==0) {
    		return false;
    	}

		switch (code) {
            case 40:
                activeDown();
                break;
            case 38:
                activeUp();
                break;
            case 13:
                choiceActive();
                break;
            default:
            	break;
        };

        function activeDown(){
            if ($active.length == 0) {
                $li.first().addClass("active");
            } else {
                index = $li.index($active);
                $li.eq(index).removeClass("active");
                if (index >= length - 1) {
                    $li.first().addClass("active");
                } else {
                    $li.eq(index).next().addClass("active");
                }
            }
        }

		function activeUp() {
            if ($active.length == 0) {
                $li.last().addClass("active");
            } else {
                index = $li.index($active);
                $li.eq(index).removeClass("active");
                if (index == 0) {
                    $li.last().addClass("active");
                } else {
                    $li.eq(index).prev().addClass("active");
                }
            }
        }

        function choiceActive() {
        	$active.click();
        	$this.focus();
        }
    });

    //配送方式收起展开
    $('.js_shipping_shouqi').live('click',function(){
    	var $me = $(this),
    		$label = $me.siblings('label');
        if($me.hasClass('btn_up')){
            $me.removeClass('btn_up').html('更多<i class="icon_arrow"></i>');
            $label.filter(':gt(1)').hide();
        }else{
            $me.addClass('btn_up').html('收起<i class="icon_arrow"></i>');
            $label.show();
        }        
    });


});

/* 
 * 20160612-印韩春-打包对接机票倒计时功能
**/
(function($) {
    $.fn.ftCountDown = function(options, callback){
        var defaults = {
            overtips : "0",  // 自定义结束提醒
            timediff : 0   // 调整时间差，单位毫秒
        }
        var opt = $.extend(true, defaults, options || {});
        
        function timeOver(obj, second){
            var second = parseInt(second);

            var times = 1000;

            obj.innerHTML = second;

            setTimeout(function(){
                second -= times/1000;
                if(second>0){
                    timeOver(obj,second);
                }else {
                    obj.innerHTML = opt.overtips;
                    if(callback){
                        callback(obj);
                    }
                }
            },times);
        }

        var second = "";

        for(var i = 0, len = this.length; i < len ; i++){            
            second = Number((this[i]).innerHTML) + opt.timediff;
            timeOver(this[i],second);
        }

    };
})(jQuery);
