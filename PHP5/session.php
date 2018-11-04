<?php 
	session_start();//使用session前先开启session
	$_SESSION['user'] = 'sb';//创建 读取session
	//unset($_SESSION['user']);//释放session

	

	$_SESSION['pass'] = '666';
	session_unset();//释放页面中所有的session 但不删除session文件

	session_destroy();//释放页面中所有的session 同时删除session以及session文件
	
	echo session_id();//获取session的id 也就是页面中cookie的值


	//echo $_SESSION['user'];
 ?>