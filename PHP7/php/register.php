<?php
	include_once "pdo2.php";
	
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);
	$age = trim($_POST["age"]);
	$money = trim($_POST["money"]);
	
	$pdo = mysqlInit("mysql", "localhost", "xuchang", "root", "");
	
	$reult = $pdo->query("select count(username) as total from sqlstarted where username='{$username}'");
	$row = $reult->fetchAll(PDO::FETCH_ASSOC);
//	print_r($row);
	if($row[0]["total"]>0){
		echo "用户名已存在，请重新输入";
	}else{
		$password = md5(md5($password)."gallery");
		$result = $pdo->exec("insert into sqlstarted (username,password,age,money) values('{$username}','{$password}','{$age}','{$money}')");
		
		if($result){
			echo "注册成功";
		}else{
			echo "注册失败";
		}
	}	
?>
