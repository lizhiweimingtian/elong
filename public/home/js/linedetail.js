$(function () {
    //邮箱验证
    $('.ncxc_emailtext').blur(function(){
        ncvalidatEmail($(this));
    }).focus(function(){$(this).triggerHandler("blur");}).keyup(function(){$(this).triggerHandler("blur");});
    
    $(".ncxc_popClose").click(function(){
    	$(".ncxc_popUp").hide();
    	$('.ncxc_popError').hide();
		$('.ncxc_popSuccess').hide();
		$('.ncxc_popContent').show();
		$('.ncxc_emailtext').removeClass('ncxc_emailerror');
    });
    //发送行程
    $('.ncxc_emailBtn').click(function(){
        var flag=ncvalidatEmail($('.ncxc_emailtext'));
        if(flag)
        {
            $('.ncxc_popContent').hide();
            $('.ncxc_popSuccess').show();
        }
        
        var routeId = $(".instance_tab").find(".active").attr("data-line");
		var email=$("#ncemail").val();
		var url = "localAndOutBu/sendRouteEmail.do";
		$.ajax({
			url : url,
			type : "get",
			data : {
				"startDistrictId":window.lineDetail.startDistrictId,
				"productId":window.lineDetail.productId,
				"routeId":routeId,
				"email":email
			},
			success:function(result) {
				if(result.code=="success"){
					$('.ncxc_popError').hide();
					$('.ncxc_popSuccess').show();
					$('.ncxc_emailtext').removeClass('ncxc_emailerror');
				}else{
					$('.ncxc_popSuccess').hide();
					$('.ncxc_popError').show();
					$('.ncxc_popError').find(".ncxc_popCheck").html(result.message);
					$('.ncxc_emailtext').addClass('ncxc_emailerror');
				}
			}
		});
    });
    function ncvalidatEmail(mail){
        if(mail.is('#ncemail'))
        {
            if(mail.val() == ''||( mail.val()!="" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(mail.val()) ) )
            {
                $('.ncxc_errorTips').show();
                mail.addClass('ncxc_emailerror');
                return false;
            }
            else
            {
                $('.ncxc_errorTips').hide();
                mail.removeClass('ncxc_emailerror');
                return true;
            }
        }
    }
})