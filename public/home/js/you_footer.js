(function(){
	//面包条
    $('.crumbs_list').hover(function(){
        if($(this).html().indexOf('其他热门') == -1){
            $(this).find('span').css({'border-right':'none','margin-right':0,'padding-right':0});
        }
        $(this).addClass('newusehover');
        $(this).find('.crumbs_down_a').find('i').addClass('arrow_down');
    },function(){
        $(this).removeClass('newusehover')
        $(this).find('.crumbs_down_a').find('i').removeClass('arrow_down');
    });

	//边栏出发地弹出
   		var chufa = $(".wy_side_chufa"),cityBox = $(".side-select-city"),cityli = cityBox.find("i");
	    chufa.click(function(){
	        cityBox.show();
	    });
	    cityli.click(function(){
           chufa.val($(this).data('name'));
           chufa.attr('data-id',$(this).data('id'));
            cityBox.hide();
        });
        cityBox.mouseleave(function () {
	        //鼠标离开后隐藏
	        cityBox.hide();
	    });

        // 边栏获取当前日期 酒店 边栏
	    function current(AddDayCount){ 
	        var d=new Date();
	        d.setDate(d.getDate()+AddDayCount);//获取AddDayCount天后的日期 
	        var str = d.getFullYear() + '-' + format(d.getMonth()+1) +'-' + format(d.getDate()); 
	        return str;
	    }
	    function format(a){
	        return a.toString().replace(/^(\d)$/, "0$1"); // 添加前导零
	    } 
	    $(".J_calendar").eq(0).val(current(1)); //边栏酒店默认入住时间明天
	    $(".J_calendar").eq(1).val(current(2)); //边栏酒店默认退房时间后天 


var footerhtml = '';
	footerhtml +='<div class="footer">' +
					'<div class="footer_main">' +
				    	'<ul>' +
				        	'<li><h5>关于我们</h5></li>' +
				            '<li><a href="" target="_blank">攻略频道简介</a></li>' +
				            '<li><a href="" target="_blank">用户协议</a></li>' +
				            '<li><a href="http://www.lvmama.com/public/site_map" target="_blank">网站地图</a></li>' +
				        '</ul>' +
				        '<ul>' +
				        	'<li><h5>联系我们</h5></li>' +
				            '<li><a href="http://www.lvmama.com/userCenter/user/transItfeedBack.do" target="_blank">意见反馈</a></li>' +
				            '<li><a href="http://www.lvmama.com/public/jobs" target="_blank">加入我们</a></li>' +
				        '</ul>' +
				        '<ul>' +
				        	'<li><h5>发现你的旅行</h5></li>' +
				            '<li><a href="http://www.lvmama.com/lvyou/" target="_blank">了解目的地</a></li>' +
				            '<li><a href="http://www.lvmama.com/lvyou/" target="_blank">阅读精彩游记</a></li>' +
				            '<li><a href="http://www.lvmama.com/guide/gfgl/" target="_blank">下载精品攻略</a></li>' +
				        '</ul>' +
				        '<ul>' +
				        	'<li><h5>分享你的旅行</h5></li>' +
				            '<li><a href="http://www.lvmama.com/trip/start/" target="_blank">发表游记</a></li>' +
				            '<li><a href="http://www.lvmama.com/comment/" target="_blank">点评去过的景点</a></li>' +
				        '</ul>' +
				        '<ul>' +
				        	'<li><h5>攻略官方微博</h5></li>' +
				            '<li><a href="http://weibo.com/lvmamaguide" target="_blank"><i class="icon icon_webo"></i>加关注</a></li>' +
				            '<li><a href="" target="_blank"><i class="icon icon_tencent"></i>加关注</a></li>' +
				        '</ul>' +
				        '<ul>' +
				        	'<li><h5>驴游宝<span>会赚钱的游记</span></h5></li>' +
				            '<li><a href="http://www.lvmama.com/trip/lvyoubao" target="_blank">什么是驴游宝</a></li>' +
				            '<li><a href="http://www.lvmama.com/trip/lvyoubao" target="_blank">写游记如何赚钱</a></li>' +
				        '</ul>' +
				    '</div>' +
				'</div>' +
				'<div class="footer_beian">Copyright &copy; 2016 www.lvmama.com. 上海景域文化传播股份有限公司版权所有　<a href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备13011172号-3</a>　增值电信业务经营许可证编号：<a href="http://s2.lvjs.com.cn/img/ICP.jpg" target="_blank">沪B2-20100030</a></div>'+
				'<ul class="footer_safety">'+
				    '<li><a href="http://www.miibeian.gov.cn/" target="_blank" title="网站备案"> <i class="lv_icon safety2"></i><p>网站备案</p></a></li>'+
				    '<li><a href="http://www.cyberpolice.cn/wfjb/" target="_blank" title="网络110"> <i class="lv_icon safety3"></i><p>网络110</p></a></li>'+
				    '<li><a href="https://www.alipay.com/aip/aip_validate_list.htm?trust_id=AIP0102495" target="_blank" title="支付宝特约商家"> <i class="lv_icon safety4"></i><p>支付宝特约商家</p></a></li>'+
				    '<li><a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1664396140" target="_blank" title="AAA级信用企业"> <i class="lv_icon safety5"></i><p>AAA级信用企业</p></a></li>'+
				    '<li><a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20110930103539539" target="_blank" title="上海工商"> <i class="lv_icon safety6"></i><p>上海工商</p></a></li>'+
				    '<li><a href="https://ss.knet.cn/verifyseal.dll?sn=2010101800100002662&comefrom=trust&trustKey=dn&trustValue=www.lvmama.com" target="_blank" title="可信网站"> <i class="lv_icon safety7"></i><p>可信网站</p></a></li>'+
				    '<li><a href="https://credit.szfw.org/CX20160614015657160455.html" target="_blank" title="诚信认证"> <i class="lv_icon safety8"></i><p>诚信认证</p></a></li>'+
				    '<li><a href="http://www.zx110.org/" target="_blank" title="网络社会诚信网"> <i class="lv_icon safety9"></i><p>网络社会诚信网</p></a></li>'+
				    '<li><a href="http://webscan.360.cn/" target="_blank" title="360网站安全检测"> <i class="lv_icon safety10"></i><p>360网站安全检测</p></a></li>'+
					'<li><a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010702001030" target="_blank" title="网监安全"> <i class="lv_icon safety11"></i><p>网监安全</p></a></li>'+
					'<li><a href="http://www.shjbzx.cn/" target="_blank" title="举报中心"> <i class="lv_icon safety13"></i><p>举报中心</p></a></li>'+
				'</ul>'

   
	document.write(footerhtml);
})();