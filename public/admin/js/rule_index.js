$(function(){
	$("input:radio").click(function(){
		$.ajax({
			type:"post",
			url:"/adm/rule/setStatus",
			data:"status="+$(this).val()+"&rule="+$(this).attr("rule"),
			dataType:"json",
			success:function (result){
				alert(result.info);
				if(!result.status) location.reload();
			}
		});
	});
})