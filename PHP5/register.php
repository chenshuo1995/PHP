<?php
	if(!empty($_POST["username"]) && !empty($_POST["password"])){
		
		$user = $_POST["username"];
		$pass = $_POST["password"];
		
		$fh = fopen("user.txt", "a+");
		$str = "username=>{$user}||password=>{$pass}\n";
		if(fwrite($fh, $str)){
			header("Location:login.php");
//			echo "<script>window.location.href='http://localhost/xuchangPHP/webuploader&cookie&session/login&register/login.php';</script>";
		}
		fclose($fh);
		
		
		
	}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
</head>
<body>
	<form action="register.php" method="post">
		用户名：
		<input type="text" name="username" id="username" value="" /><br />
		密码：
		<input type="password" name="password" id="password" value="" /><br />
		<input type="submit" value="点击注册"/>
	</form>
</body>
</html>