<?php
	error_reporting(E_ALL && ~E_NOTICE);
	
	//获取用户提交的信息
	$father=$_POST['father'];
	
	//六脉神剑
	 $link= mysqli_connect("localhost","root") or die ('链接数据库失败');
	
	 mysqli_select_db($link,'bbs');
	 
	 mysqli_set_charset($link,'utf8');
	 
	 //执行用户的动作
	switch($_GET['a']){
		case 'addFather':
			 $sql = "insert into type (name) values ('{$father}')";
			 mysqli_query($link,$sql);
			 if(mysqli_affected_rows($link)>0){
				 
				 
				 echo"<script>alert('添加父分区成功');window.location.href='show.php'</script>";
			 }else{
				 echo"<script>alert('添加父分区失败');window.location.href='addFather.php'</script>";
			 }
		break;
		case 'addChild':
			//引入函数库
			//////////////////////////////图片上传////////////////////////////////////
			require("../../public/function.php");
			//获取图片信息
			$upfile = $_FILES['blogo'];
			
			$path = "../../public/home/uploads";
			$typeList = array("image/png","image/jpeg","image/gif");
			
			//执行上传
			$res = upload($upfile,$path,$typeList);
			
			//判断是否上传成功
			if($res['error']==TRUE){
				//将上传成功的图片的名字写入数据库
				$picname = $res['info'];
				$sql = "insert into type (name,pid,path,blogo) values ('{$_POST['child']}',{$_POST['pid']},'0-{$_POST['pid']}','{$picname}')";
				
				mysqli_query($link,$sql);
				
				
				if(mysqli_affected_rows($link)>0){
					echo"<script>alert('图片上传成功');window.location.href='show.php'</script>";
				}else{
					echo"<script>alert('图片上传失败');window.location.href='addChild.php'</script>";
				}
			
			}
			/////////////////////////////图片上传///////////////////////////////////
	
		break;
		case 'update':
				
			//获取要修改的分区或版块的id 和name
			  $id = $_GET['id'];
			 
			  $name = $_POST['bkname'];
			
			  $sql3 ="update type set name ='{$name}' where id={$id}";
			  mysqli_query($link,$sql3);
			  if(mysqli_affected_rows($link)>0){
				  echo"<script>alert('修改成功！');window.location.href='show.php'</script>";
		
			  }
		break;
		
		case 'delete':
				//如果版块下没有帖子则输出可以将版块删除

				$sql4 = "select *  from post where tid ={$_GET['delid']}";
				$result4 = mysqli_query($link,$sql4);
				
				if( mysqli_num_rows($result4)>0){
		
						echo"<script>alert('警告！！版块下有帖子，禁止删除');window.location.href='show.php'</script>";
						
					}else{
						$sql5 = "delete from type where id ={$_GET['delid']}";
					
						mysqli_query($link,$sql5);
					
						if(mysqli_affected_rows($link)>0){
						
							echo"<script>alert('删除成功');window.location.href='show.php'</script>";
					
						}
					}
		
		break;
		
		case 'deletefq':
				$sql6 = "select * from type where pid ={$_GET['fqid']}";
				$result6 = mysqli_query($link,$sql6);
				
				if( mysqli_num_rows($result6)>0){
					
					
					echo"<script>alert('警告！！分区下版块，禁止删除');window.location.href='show.php'</script>";
						
					}else{
						$sql7 = "delete from type where id ={$_GET['fqid']}";
					
						mysqli_query($link,$sql7);
					
						if(mysqli_affected_rows($link)>0){
						
							echo"<script>alert('删除成功');window.location.href='show.php'</script>";
					
						}
					}
				
		
		
		break; 
		
		
		
		
		
		
		
		
		
	}



?>