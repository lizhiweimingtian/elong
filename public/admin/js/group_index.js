$(function(){
	$("input:checkbox").click(function(){
		$.ajax({
			type:"post",
			url:"/adm/group/setRule",
			data : "rule=" + $(this).val() + "&group=" + $(this).attr("group"),
			dataType:"json",
			success:function(result){
				alert(result.info);
				if(!result.status) location.reload();
			}
		});
	});
})