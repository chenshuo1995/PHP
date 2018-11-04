<?php
	include_once "pdo2.php"; 
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$name = trim($_POST['username']);
		$pass = trim($_POST['password']);
		$pdo = mysqlInit("mysql","localhost","xuchang","root","");
		$pass = md5(md5($pass)."GG");
		$result = $pdo->query("select count(id) as total from login where username='{$name}' and password = '{$pass}'");
		$row = $result->fetchALL(PDO::FETCH_ASSOC);
		// print_r($row);
		if ($row[0]['total']>0) {
			setcookie("username",$name,time()+7*24*3600);
			header("location:index1.php");
		}else{
			echo "用户不存在的！请重新输入";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录页面</title>
</head>
<body>
	<form action="login1.php" method="post">
		用户名：<input type="text" name="username"><br>
		密码：<input type="password" name="password"><br>
		<input type="submit" value="登录">
	</form>
</body>
</html>