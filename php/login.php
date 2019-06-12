<?php
	header("content-type","text/html;charset=utf-8");
	
	//1接收数据
	$userId = $_POST["userId"];
	$userPass = $_POST["userPass"];
	
	//2、在数据库中查询
	   //1)、建立连接，并选择数据库
	   $con = mysql_connect("localhost","root","root");
	if($con){
		
		mysql_select_db("vans",$con);
		//2)、执行SQL语句（查询）
		$sqlStr="select * from userinfo where userId='$userId' and userPass='$userPass'";
		
		$result=mysql_query($sqlStr,$con);
		$rows = mysql_num_rows($result);
		if($rows==1){//登录成功
			echo 1;	
		}else {//登录失败，返回0.
			echo 0;
		}
	}
	   
	//3)、关闭连接
	mysql_close($con);
	
?>