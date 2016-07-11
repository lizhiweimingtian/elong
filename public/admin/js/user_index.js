$(function(){
	$("table.bordered select").change(function() {
		var result=confirm("确定修改分组权限吗？");
		if(result==false){
			location.reload();
			return;
		}
		$.ajax({
			type:"post",
			url:"/adm/user/setGroup",
			data:"groupid="+$(this).val()+"&uid="+$(this).attr("uid"),
			dataType:"json",
			success:function(result){
				alert(result.info);
				if(!result.stauts)
					location.reload();
			}
		});
	
	});
})