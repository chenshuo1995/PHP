<?php 
	setcookie('usename','sb',time()+7*24*3600);//设置cookie
	setcookie('usename','',time()-10);//删除cookie


	//当不给cookie设置过期时间 关闭浏览器后cookie会被清除
	setcookie('pass','123');
	echo $_COOKIE['usename'];
 ?>