$(function(){
	$("#avartar").uploadify({
		swf : "/plugins/uploadify/uploadify.swf",
		buttonImage : "/plugins/uploadify/ImgBtn.png",
		width:50,
		height:23,
		method:"post",
		fileTypeExts:"*.jpg;*.jpeg;*.png;*.gif",
		fileSizeLimit:1*1024*1024,
		formData:{
			_token : document.upload._token.value,
			id : document.upload.id.value,
		},
		uploader : "/adm/user/avartar",
		onUploadSuccess : function (file, txt, response) {
			eval("var result =" +  txt);
			if (!result.status) {
				alert(result.info);
			}
			//预览图片
			$("#im").attr("src", result.info);
		}
	})
})