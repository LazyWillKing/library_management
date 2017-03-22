<?php
	require_once('config.php');    //重载一次php文件
	
	//连接数据库
	if(!($con = mysqli_connect(HOST, USERNAME, PASSWORD,"test"))){
		echo mysqli_error();
	}
	
	//选择数据库
	if(!mysqli_select_db($con,'test'))
	{
		echo mysqli_error();
	}
	
	//设置字符集
	if(!mysqli_query($con,'set names utf8')){
		echo mysqli_error();
	}
?>
