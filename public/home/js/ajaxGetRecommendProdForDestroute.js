$(function() {
	$('.JS_ajaxTab').on('click','.JS_ajaxTab>a',function() {
		var This = $(this);
		if (This.hasClass('active')) return;
		var ajaxBox = This.parents('.JS_ajaxTab').next('.JS_ajaxCon'); //执行替换的盒子
		This.addClass('active').siblings().removeClass('active');
		$('.bigDestmore>a').removeClass('active');
		$('.bigDestmore>a').eq(This.index()).addClass('active');
		
		var paramDataCode = This.attr('paramDataCode'),
		paramFromPlaceId = This.attr('paramFromPlaceId');
		paramDivName = This.attr('paramDivName'),
		parentFromPlaceId =This.attr('parentFromPlaceId'),
		url="http://www.lvmama.com/homePage/ajaxGetRecommendProdForDestroute.do";
		
		$.ajax({
			type: "POST",
			url: url,
			data: {paramDataCode: paramDataCode,fromPlaceId:paramFromPlaceId,returnPageName:paramDivName,parentFromPlaceId:parentFromPlaceId},
			async: true,
			dataType:"html",
			success: function(data){
				ajaxBox.html(data);
			},
			error:function(msg){
				alert("No this type products!");
				location.reload();
			}
		});
	});
});