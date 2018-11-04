<?php 
	$name = $_POST['username'];
	$pass = $_POST['password'];
	include_once "pdo2.php";
	$pdo = mysqlInit("mysql","localhost","xuchang","root","");
	$num = $pdo->exec("insert into login (username,password)values('$name','$pass')");
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>登录</title>
 </head>
 <body>
 	<form action="login.php" method="post">
 		用户名：<input type="text" name="username"><br>
 		密码：<input type="password" name="password"><br>
 		<input type="submit" value="提交">
 	</form>
 </body>
 </html>