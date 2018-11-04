<?php 
	if (empty($_COOKIE['username'])) {
		header("location:login.php");
		echo "登陆失败";
	}
	echo "成功!!";
 ?>
