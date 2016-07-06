// JavaScript Document
$(function(){ 

	/*顶部微信，电话展开*/
	$('.dropdown').hover(function(){ 
		$(this).addClass('dropdown_hover');
	},function(){ 
		$(this).removeClass('dropdown_hover');
	});
	
	/*我的驴妈妈展开*/
	$('.lv_my_box').hover(function(){ 
		$(this).addClass('lv_my_hover');
	},function(){ 
		$(this).removeClass('lv_my_hover');
	});

	/*加入收藏夹*/
	$('.lv_collect').live('click',function(){ 
		if (document.all){ 
			window.external.AddFavorite('http://www.lvmama.com', '驴妈妈旅游网');
			return false;
		}else if (window.sidebar){}else{
			alert('按Ctrl+D，手动加入收藏夹！');
			return false;
		}
	});
	
	//二级导航默认显示
	showPnavDown();
	
	//二级导航
	if($('body').hasClass('freetour_zyx')){
		$('#freetour .down_nav a:first').addClass('active');
	}
	if($('body').hasClass('freetour_gty')){
		$('#freetour .down_nav a:last').addClass('active');
	}
	$('.pnav_down').hover(function(){ 
		$('.pnav_down').removeClass('hover_this');
		$(this).addClass('hover_this');
		pnavDown($(this));	
	},function(){
		$('.pnav_down').removeClass('hover_this');
		showPnavDown();
	});


	/* 判断默认显示二级导航方法*/
	function showPnavDown() {
		var $bodyClass = $('body').attr('class');
		/around/.test($bodyClass) && pnavDown($('#around'));
	    /hotel/.test($bodyClass) && pnavDown($('#hotel'));
	    /flight/.test($bodyClass) && pnavDown($('#flight'));
	    /lvyou/.test($bodyClass) && pnavDown($('#lvyou'));
	    /abroad/.test($bodyClass) && pnavDown($('#abroad'));
	    /destroute/.test($bodyClass) && pnavDown($('#destroute'));
	    /localfun/.test($bodyClass) && pnavDown($('#abroad'));
		/ticket/.test($bodyClass) && pnavDown($('#ticket'));
	}

	/*二级导航定位计算*/
	function pnavDown(nav) {
		nav.addClass('hover_this');
		if(nav.length!=0){
			var ThisL = nav.offset().left,
				navL = $('.lv_nav').offset().left,
				navW = $('.lv_nav').width(),
				winW = $('body').width(),
				pW = nav.find('p').width()/2,
				thisW = nav.width()/2,
				downL = ThisL+thisW;
			nav.find('.down_nav_t').css('left',downL-5);
			if(navL>downL-pW){ //检测二级导航是否超过导航左侧
				downL=navL+pW
			}else if(navL+navW<ThisL+pW+thisW){//检测二级导航是否超过导航右侧
				downL=navL+navW-pW-1;
			}
			nav.find('.down_nav').css({'width':winW,'left':-ThisL}).find('p').css({'left':downL-pW});
				
		}
		
	}
	
	
// 右侧浮动APP代码
    // var appRight = '<div class="app_right">'
    //         + ' <a href="http://m.lvmama.com/download?ch=xuanfu" class="app_href" target="_blank"></a>'
    //         + ' <a href="javascript:;" class="app_close"></a>'
    //         + ' </div>';
    // var COOKIE_NAME = 'floatRcookie';
    // if(!$.xcookie.getCookie(COOKIE_NAME) && $('.sj_pop').length==0){
    //     $('body').append(appRight);
    // }
    
    // // 浮动广告 设置cookie，通过时间间隔
    // $(".app_close").click(function(){
    //     $(this).parent().hide();
    //     $.xcookie.setCookie(COOKIE_NAME, 'floatRcookie', { path: '/', expires: 365});
    //     return false;
    // })
//游记页面去掉右侧浮动app	
	
	/*返回顶部*/
	if($('#goTopBtn').length==0){
		$("body").append('<a id="goTopBtn" target="_self" href="javascript:;" title="返回顶部"></a><a href="http://www.lvmama.com/userCenter/user/transItfeedBack.do" target="_blank" id="Feedback" title="意见反馈"></a>');
		var gotop = true;
		var isie6= !-[1,]&&!window.XMLHttpRequest;
		$(window).scroll(function(){ 
			if(gotop == true){
				gotop = false;
				var timer = setTimeout(show,300);
			}
			function show(){
				var nowT = $(document).scrollTop();
				if(nowT>200){
					$('#goTopBtn,#Feedback,#FeedbackNew').css({'visibility':'visible'}).addClass('goTopShow');
					if(isie6){
						$('#goTopBtn,#Feedback,#FeedbackNew').show();
					}
				}else{
					$('#goTopBtn,#Feedback,#FeedbackNew').css({'visibility':'hidden'}).removeClass('goTopShow');
					if(isie6){
						$('#goTopBtn,#Feedback,#FeedbackNew').hide();
					}
				};
				gotop = true;
			};
		});
    }
	
    $('#goTopBtn').click(function(){
        $(document).scrollTop(0)
    });
	
	
	/*登陆*/
	function loginCas(){
		window.location="http://login.lvmama.com/nsso/login?service="+encodeURIComponent(document.location)
	};

	function xhshowtips(){
		$('.tapbar-inner').append('<span id="stips" class="stips"><i class="sarrow"></i>验证邮箱可获300积分，<a href="http://www.lvmama.com/myspace/userinfo.do" hidefocus="false">立即验证</a><i class="sclose">×</i></span>');
		var useremail = ""; 
		try{ 
			var userCookie= decodeURIComponent(document.cookie).match(/EMV\=.+/) + ""; 
			useremail = userCookie.replace('EMV=',''); 
				if(useremail.indexOf(";")>=0){ 
					useremail = useremail.substring(0,useremail.indexOf(";")); 
				}else{ 
					useremail = useremail.substring(0,useremail.length); 
				} 
		}catch(e){ 
			var userCookie = unescape(document.cookie).match(/EMV\=.+/)+""; 
			useremail = userCookie.replace('EMV=',''); 
			useremail = useremail.substring(0,useremail.indexOf(";")); 
			if(useremail.indexOf(";")>=0){ 
				useremail = useremail.substring(0,useremail.indexOf(";")); 
			}else{ 
				useremail = useremail.substring(0,useremail.length); 
			} 
		} finally{ 
			if(useremail=='U' || useremail=='E'){ 
				//显示
				 return true;
			}else{
				// 不显示
				return false;
			} 
		}
		
	}

	function loadUserName(){
        
        var username = "";
        try{
            username = decodeURIComponent(document.cookie).match(/UN\=.+\^!\^/);
        }catch(e){
            username = unescape(document.cookie).match(/UN\=.+\^!\^/);
        }
        var _message_num = 0;
        
        $('#J_login').html(username!=null?"<span class='vip_name'>\u60a8\u597d\uff0c<a href='http://www.lvmama.com/myspace/index.do'>"+username[0].replace('UN=','').replace(/\+/g,' ').replace('^!^','')+
            "</a></span><a href='http://www.lvmama.com/myspace/message.do' class='lv_link lv_link2'><i class='lv_icon icon_xx'></i>\u6D88\u606F(<b class='c_f60' id='message-num'>"+_message_num +"</b>)</a><a class='lv_link lv_link2' rel='nofollow' href='http://login.lvmama.com/nsso/logout'>[\u9000\u51fa]</a>":"<a id='top_login' href='javascript:;'>\u8bf7\u767b\u5f55</a><a href='http://login.lvmama.com/nsso/register/registering.do' rel='nofollow'>\u514d\u8d39\u6ce8\u518c</a>");
        if(username!=null){
            var _message_url="http://www.lvmama.com/message/index.php?r=PrivatePm/GetUnreadCount&callback=?"; 
            $.getJSON(_message_url,function(json){ 
                if (json.code == 200) { 
                    $("#message-num").html(json.data.unreadCount); 
                    //_message_num = json.data.unreadCount; 
                }
            });
        }
        if(username!=null && xhshowtips()){
            $('#stips').show();
            
        }else{
            $('#stips').hide();
        }
    };
    loadUserName();
	$('#top_login').live('click',function(){ 
		loginCas();
	});
	
	//电话号码
	GetTele();
	function GetTele(){
		var tele = top.window.location.search.match(/tele=+[0-9]{3,4}/);
		if(tele!==null){
			var tele = tele[0].replace('tele=','');
			$.ajax({
				type : "POST",
				url : "http://www.lvmama.com/teleChannel/doTeleChannelShowDifferntHotLine.do",
				data : {
					"tele"  : tele
				},
				success : function(json) {
					 $("#onlyOne").find('span').html(json.success);
					 $("#onlyTwo").html(json.success);
				},error : function(){ 
					$("#onlyOne").find('span').html("1010-6060");
					$("#onlyTwo").html("1010-6060");
				} 
		  }); 
		}else{
			var teleCookie =	$.xcookie.getCookie('tele');
			if(teleCookie){
				$("#onlyOne").find('span').html(teleCookie);
				$("#onlyTwo").html(teleCookie);
			}else{
				$("#onlyOne").find('span').html("1010-6060");
				$("#onlyTwo").html("1010-6060");
			}
		}
	};
	

	//搜索框自动补全
	var searchPhplen = $('#search_php').length;
	if(searchPhplen>0){
		var $search = $('#search_php');	
	}else{
		var $search = $('#search_java');
	}

	$search.focus(function() {
		$search.addClass('active');
		if($(this).val()==$(this).attr('data-initTxt')){
			$(this).val('');
		}else{
			return false;
		}
	}).blur(function(){
		$search.removeClass('active');
		if($(this).val()==''){
			$(this).val($(this).attr('data-initTxt'));
		}
		setTimeout(function(){$('#lv_searchList').hide();}, 200);
	});
	

	var searchListIndex = -1;
	$('#lv_searchCon a').live('mouseover',function(){
		$('#lv_searchCon a').removeClass('active');
		$(this).addClass('active');
		searchListIndex = $(this).index();
	});
	$('#lv_searchCon a').live('mouseout',function(){
		$(this).removeClass('active');
	});
	
	$('.btn_lv_search').click(function() {
		if($search.val()!='' && $search.val()!=$search.attr('data-initTxt')){
			if(searchPhplen>0){
				//php
				window.open('http://www.lvmama.com/lvyou/search/?t=all&q='+$search.val(),'_blank');
			}else{
				//Java
				window.open('http://www.lvmama.com/lvyou/search/?t=all&q='+$search.val(),'_blank');
			}
			
		}
	});

	var searchBtnSelect = false;
	$search.keyup(function(ev) {
		var len = $('#lv_searchCon').find('a').length;
		var search_txtWord = $(this).val();
		//console.log(ev.which);
		switch(ev.which){
			case 40:
			case 39:
				//console.log('down');
				searchListIndex++;
				if(searchListIndex>len-1){
					searchListIndex = 0;					
				}
				$('#lv_searchCon').find('a').removeClass('active');
				$('#lv_searchCon').find('a').eq(searchListIndex).addClass('active');
				
				break;
			case 38:
			case 37:
				//console.log('up');
				searchListIndex--;
				if(searchListIndex<0){
					searchListIndex = len-1;					
				}
				$('#lv_searchCon').find('a').removeClass('active');
				$('#lv_searchCon').find('a').eq(searchListIndex).addClass('active');
				
				break;
			case 13:
				if(searchBtnSelect){
					window.open($('#lv_searchCon').find('a').eq(searchListIndex).attr('href'),'_self');
				}else{
					if(searchPhplen>0){
						//PHP
						window.open('http://www.lvmama.com/lvyou/search/?t=all&q='+$search.val(),'_self');
					}else{
						//JAVA
						window.open('http://www.lvmama.com/lvyou/search/?t=all&q='+$search.val(),'_self');
					}
					
				}
				break;
			default:
				if(searchPhplen>0){
					//php
					$('#lv_searching a:eq(0)').html(search_txtWord+'的游记').attr('href','http://www.lvmama.com/lvyou/search/?t=youji&q='+search_txtWord);
					$('#lv_searching a:eq(1)').html(search_txtWord+'的攻略').attr('href','http://www.lvmama.com/lvyou/search/?t=gonglue&q='+search_txtWord);
					$('#lv_searchFooter a').html(search_txtWord).attr('href','http://www.lvmama.com/lvyou/search/?t=all&q='+search_txtWord);
				}else{
					//java
					$('#lv_searching a:eq(0)').html(search_txtWord+'的游记').attr('href','http://www.lvmama.com/lvyou/search/?t=youji&q='+search_txtWord);
					$('#lv_searching a:eq(1)').html(search_txtWord+'的攻略').attr('href','http://www.lvmama.com/lvyou/search/?t=gonglue&q='+search_txtWord);
					$('#lv_searchFooter a').html(search_txtWord).attr('href','http://www.lvmama.com/lvyou/search/?t=all&q='+search_txtWord);
				}
				searchFnajax();
				/*$.ajax({
					type: 'POST',
					url: 'data.php',
					data: $(this).val(),
					dataType:'json',
					success: function(res){
						$('#lv_searchList').show();
						var htmlCode = '';
						for(var i=0; i<res.length; i++){
							htmlCode+='<a href="'+res[i].href+'"><i class="icon_type '+res[i].type+'"></i><span>'+res[i].adress+'</span>'+res[i].views+'</a>';
						}
						$('#lv_searchCon').html(htmlCode);
					}
				});*/
		}

		
	});
	
});



/*设置cookie*/
//var COOKIE_NAME = 'kukeiceshi';
//$.xcookie.setCookie(COOKIE_NAME, COOKIE_NAME, { path: '/',expires:30});//expires是天数

/*检测cookie*/
//var old_cookie = 'oldHome';
//if($.xcookie.getCookie(old_cookie)){}
	
/*cookie插件*/
(function ($) {
    $.xcookie = {
        cookie: function (name, value, options) {
            var path = options.path ? '; path=' + (options.path) : '',
                domain = options.domain ? '; domain=' + (options.domain) : '',
                secure = options.secure ? '; secure' : '',
                expires = '';
            if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
                var date;
                if (typeof options.expires == 'number') {
                    date = new Date();
                    date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
                } else {
                    date = options.expires;
                }
                expires = '; expires=' + date.toUTCString();
				
            }
            document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
        },
        setCookie: function (name, value, options) {
            var options = options || {};
            this.cookie(name, value, options);
        },
        getCookie: function (name) {
            var cookieValue = null,
                doc = document;
            if (doc.cookie && doc.cookie != '') {
                var cookies = doc.cookie.split(';');
                for (var i = 0; i < cookies.length; i++) {
                    var cookie = $.trim(cookies[i]);
                    if (cookie.substring(0, name.length + 1) == (name + '=')) {
                        cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                        break;
                    }
                }
            }
            return cookieValue;
        },
        deleteCookie: function (name, options) {
            var options = options || {},
                value = '';
            options.expires = -1;
            this.cookie(name, value, options);
        }
    }
})(jQuery);



$(function(){
    /*=============图片延迟加载=============*/
    $.expr[":"].loading=function(elt,index){
        var height=$(window).height()+1000;
        var top=$(elt).offset().top;
        return top>$(window).scrollTop()&&top<(height+$(window).scrollTop())
    };
    $.expr[":"].loaded=function(elt,index){
        var height=$(window).height()+1000;
        var top=$(elt).offset().top;
        return top<height;
    };
    var loadImg=function(){
		var This = $(this);
		this.src=This.css({'opacity':0}).attr("to");
		This.removeAttr("to");
		if(This.load()){
			This.animate({'opacity':1},300,function(){This.removeAttr('style')});
		}
		
		this.onerror=function(){
			this.src="http://pic.lvmama.com/img/you/loading.png"
		}
        
    };
    var imgTimeId=null;
    var scrollImgLoading=function(){
        clearTimeout(imgTimeId);
        imgTimeId=setTimeout(function(){
            $("img[to]:loading").each(function(){
                loadImg.call(this)
            });
            if($("img[to]").size()==0){
                $(window).unbind('scroll',scrollImgLoading)
            }
        }
        ,200)
    };
    $(window).bind('scroll',scrollImgLoading);
    $("img[to]:loaded").each(function(){
        loadImg.call(this)
    });
    setTimeout(function(){
        $("img[to]:loaded").each(function(){
            loadImg.call(this)
        })
    }
    ,1000);
    /*============延迟加载结束===========*/
   
});


$(function(){

	//导航链接losc跳转
    $('.lv_nav_l').on('click','a',function(ev){
        var This = $(this),
            losc = This.attr('data-losc');
        if(losc){
            ev.preventDefault();
            var target= This.attr('target');
            if(!target){target = '_self';}
            window.open(This.attr('href')+'?losc='+losc+'&ict=i',target);
        }
    });

	//菜单 旅游攻略菜单添加点评露出logo 2月23日下线
	// if ($('.navCom_dpj').length <= 0) {
	// 	$('#lvyou>.down_nav p').append('<a href=\"http://www.lvmama.com/zt/promo/dianping8/\" class=\"navCom_dpj\" title=\"谁是精华点评家 写点评换丰厚奖品 100%奖\" target=\"_blank\"><img style=\"position:relative; top: 11px; vertical-align: top;\" src=\"http://pic.lvmama.com/img/v6/comment/nav_comicon.png\"></a>');
	// }
	//春节点评引流  2.23下线
    // 攻略详情页
    // setTimeout(function(){
    // 	$('.cityView_commitshow').append('<a href="http://www.lvmama.com/zt/promo/dianping8/" title="谁是精华点评家 写点评换丰厚奖品 100%奖" target="_blank" class="commentHd"><img src="http://pic.lvmama.com/img/v6/comment/comment_hd.png" alt="精华点评多返20元"></a>');
    // },1000);
});
// JavaScript Document



try{ if(window.console&&window.console.log){console.log("驴妈妈UED长期招聘资深前端工程师\n 一直都会是尚需一个名额的状态。\n");console.log('请将简历发送至fed@lvmama.com（ 邮件标题请以"姓名-应聘高级前端开发工程师-来自console"命名）');console.log("职位介绍：http://fed.lvmama.com/?page_id=30")}}catch(e){}




//左侧浮动广告
$(function(){
	var $body = $('body');
    var $bodyClass = $body.attr('class');

	if(/lvyou/.test($bodyClass)){
		channelFloat();
	}

	function channelFloat(){
		var html = '<div class="channel_float_l"><a class="channel_float_b"  target="_blank" href="http://www.lvmama.com/zt/promo/cjyoulun?losc=088604&ict=i"></a><a class="channel_float_s" target="_blank" href="http://www.lvmama.com/zt/promo/cjyoulun?losc=088604&ict=i"></a><span class="channel_float_close" title="关闭"></span></div>';
		$('body').append(html);
		$('.channel_float_close').live('click',function(){ 
			$(this).parent('.channel_float_l').remove();
		});
		var $channel_float_l = $('.channel_float_l'),
			$channel_float_b = $('.channel_float_b'),
			$channel_float_s = $('.channel_float_s');

		$channel_float_l.hover(function(){ 
			mousein();
		},function(){ 
			mouseout();
		});
		function mouseout(){
			$channel_float_s.stop(true).animate({
				'width':0
			},400,function(){
				$channel_float_s.hide();
				$channel_float_l.css({'width':45});
			});
		};
		function mousein(){
			$channel_float_l.css({'width':186});
			$channel_float_s.show().stop(true).animate({
				'width':167
			},400);
		};
	}
});

// JavaScript Document

