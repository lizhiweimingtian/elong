<?php

   //1. 连接数据库，并判断是否成功
		$link = mysqli_connect("localhost","root","7790630zjh")or die("数据库连接失败！");
		
	//2. 选择数据库
		mysqli_select_db($link,"bbs");
	
	//3. 设置字符集
		mysqli_set_charset($link,"utf8");
		
    //接收要修改的内容
	    $name=$_POST['name'];
	    $guanjian=$_POST['guanjian'];    
	    $copy=$_POST['copy'];    
	    $zhuangtai=$_POST['zhuangtai'];
		//var_dump($_POST);
		
	//引入配置文件
	   require("../../public/function.php");
			   
		   $upfile=$_FILES['logo'];
		   $path="../../public/admin/uploads";
		   $typeList=array("image/jpeg","image/png","image/gif");
			
		   $res=upload($upfile,$path,$typeList);
		  
			//判断是否上传成功
			if($res['error']==false){
				
				 echo "<script>alert('{$res['info']}');window.location.href='./biaodan.php'</script>";
			}
			  
			  $picname=$res['info'];
			  
			//执行sql语句
			$sql="update config set webname='{$name}',keywords='{$guanjian}',logo='{$picname}',copy='{$copy}',status={$zhuangtai}";
			
			mysqli_query($link,$sql);
			//判断是否添加成功?
			if(mysqli_affected_rows($link)>0){
			   echo "<script>alert('修改成功！');window.location.href='biaodan.php';</script>";	
			}else{
				echo "<script>alert('修改失败！');window.location.href='biaodan.php';</script>";
			}
?>