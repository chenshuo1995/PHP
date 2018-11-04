<?php 
	include_once "pdo2.php";
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$name = trim($_POST['username']);
		$pass = trim($_POST['password']);
		$pdo = mysqlInit("mysql","localhost","xuchang","root","");
		$result = $pdo->query("select count(username) as total from login where username='{$name}'");
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		// print_r($row);
		if ($row[0]['total']>0) {
			echo "用户已存在！！！";
			exit;
			header("location:register1.php");
		}
		$pass = md5(md5($pass)."GG");
		$result = $pdo->exec("insert into login (username,password)values('{$name}','{$pass}')");
		echo $result;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页面</title>
</head>
<body>
	<form action="register1.php" method="post">
		用户名：<input type="text" name="username"><br>
		密码：<input type="password" name="password"><br>
		<input type="submit" value="注册">
	</form>
</body>
</html>