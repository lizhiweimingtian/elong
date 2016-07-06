$(function(){ 
	//左侧导航
	var leftdl = $('.newmember_leftside').find('dl');
		leftdl.each(function(){
			$(this).find('dt').toggle(function(){
				var _this = $(this);
				_this.siblings('dd').hide();
				_this.find('.downarr').addClass('uparr');
			},function(){
				var _this = $(this);
				_this.siblings('dd').show();
				_this.find('.downarr').removeClass('uparr');
			});
		});
	
	//右侧导航
	$('.help_box').hover(function(){
		$(this).find('.help_box_content').stop().animate({"width":120},500);
	},function(){
		$(this).find('.help_box_content').stop().animate({"width":0},500);
	})
	//弹出
	function tanchu(){ 
			var _scrolltop = $(document).scrollTop()+150;
			var height_w =$(document).height();
			$('.pop_body_bg').css({'height':height_w,'width':$(document.body).width()}).show();
			$('.grade_bg').show().css({'top':_scrolltop});
	};
	$('.close').click(function(){
		$('.pop_body_bg,.grade_bg').hide();
	});
	//导航下拉
	$('.newmember_list').hover(function(){
		$(this).addClass('newmember_act');
	},function(){
		$(this).removeClass('newmember_act');
	})
	// 默认调用倒计时
	var timer=null,
		countdown = $('#countdown'),
		timestart = countdown.text(),
		time=timestart;
	$('.code').click(function(){
		var This = $(this);
		This.hide().siblings('.time').css({'display':'inline-block'});
		timer = setInterval(function(){
			time--;
			if(time==0){
				clearTimeout(timer);
				This.show().siblings('a').hide();
				time = timestart;
				countdown.text(time);
			}
			countdown.text(time);
		},1000)
	})
	// 积分明细切换
	function comon_tab(This){
		var _this = $(This),
		in_num = _this.index();
		_this.addClass('active').siblings().removeClass('active');
		_this.parents('.comon_tit').siblings('.js_con').eq(in_num).show().siblings('.js_con').hide();
		_this.parent().siblings('.js_more').eq(in_num).show().siblings('.js_more').hide();
	};
	$('.comon_tab li').click(function(){
		comon_tab(this);
	});
	//站内消息
	$('.news_bt').click(function(){
		var _this = $(this);
		_this.parent().siblings('.lv_tips_box').slideToggle().parent().siblings().find('.lv_tips_box').hide();
	});

	//订阅邮件
	$('#rssMail').hover(function() {
		$(this).addClass('active')
	}, function() {
		$(this).removeClass('active')
	});
	$('.rssMailBtn').click(function() {
		$(this).parent('.rssMailIpt').hide().siblings('.rssMailOk').show();
	});

	//展开券详情
	$('.js_quan li:gt(2)').hide();
	$('.quan_more').toggle(function(){
		$('.js_quan li').show();
		$(this).html('收起券详情<i class="icon_down icon_up">');
	},function(){
		$('.js_quan li:gt(2)').hide();
		$(this).html('展开券详情<i class="icon_down">');
	});
});
