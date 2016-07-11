$(document).ready(function() {
	$.ajax({
        url:"http://www.lvmama.com/trip/ajax/getBonusDyn",
        dataType:'json',
        success:function(obj) {
        	var data = obj.data.dynamic;
        	var t_html ='';
        	for(var i=0; i<data.length;i++){
        		t_html+='<li>'+data[i]['username']+'通过驴游宝已获得<i>￥</i><em>'+data[i]['memo']+'</em></li>';
        	}
            $(".lvyoubao-info .JS_lyb").html(t_html);
        }
    });
	getLyglInfo();
});

function getLyglInfo(){
	var _id = $("#gonglueid").val();
	if(_id==null || _id=='')
		return ;
	$.ajax({
        url:"http://www.lvmama.com/guide/ajax/api.php?action=getOrgInfo&id="+_id,
        dataType:'json',
        success:function(obj) {
        	var data = obj.data;
        	var t_html ='<div class="gonlue-hot-pic"><a href="'+ data.url +'" title="'+data.title+'" target="_blank"><img src="'+ data.thumb 
        	+'" width="80" height="120" alt="'+data.title+'"></a></div><a href="'+ data.url +'" target="_blank"><strong>'+ data.title
        	+'</strong></a><span>'+data.version+'</span><p>'+data.updatetime+'更新</p><p>'+data.pdfdowns+'次下载</p>';
        	
            $(".gonlue-hot").html(t_html);
        }
    });     
}
/**
 * 首页推荐产品js
 * @param url
 * @param fromPlaceId
 * @param fromPlaceName
 */
function getAjaxRecommendPlace(url,fromPlaceId,fromPlaceName,parentFromPlaceId){
	/*
	 * 切换产品
	 */
	$('.JS_public').each(function(e) {
		$(this).find('li').each(function (){
			var me = $(this);
			me.click(function() {
				if (me.hasClass('active')) return false;
				me.addClass('active').siblings().removeClass('active');
				var parenttype = me.attr('parenttype'), //类型
					paramid = me.attr('paramid'),
					paramdatacode = me.attr('paramdatacode'),
					paramdatasearchname = me.attr('paramdatasearchname'),
					probox = $('.public-pro .pro-list').eq(e); //选取替换的盒子	
					if(parenttype == 'piclygl'){
						probox = $('.gonlue-youji');
					}
				 $.ajax({
					   type: "POST",
					   url: url,
					   data: {paramDataCode: paramdatacode,fromPlaceId:fromPlaceId,fromPlaceName:fromPlaceName,paramDataSearchName:paramdatasearchname,parentFromPlaceId:parentFromPlaceId,parenttype:parenttype},
					   async: true,
					   dataType:"html",
					   success: function(data){
						   probox.html(data);
						   if(parenttype=='piclygl'){
							   getLyglInfo();
						   }
						   if(parenttype == 'piccjy'){
							   $.ajax({
								   type: "POST",
								   url: url,
								   data: {paramDataCode: paramdatacode+'_ylqz',fromPlaceId:fromPlaceId,fromPlaceName:fromPlaceName,paramDataSearchName:paramdatasearchname,parenttype:parenttype+'2'},
								   async: true,
								   dataType:"html",
								   success: function(data){
									   probox = $('.youlun-qianzheng');
									   probox.html(data);
								   }
							   });
						   }
		 			   },
					   error:function(msg){
					     alert( "Data fail: " + msg );
					   }
					});	
			});
		});
	});
}