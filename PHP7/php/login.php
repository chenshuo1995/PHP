<?php 
	include_once "pdo2.php";
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$pdo = mysqlInit("mysql","localhost","xuchang","root","");
		$password = md5(md5($password)."gallery");
		$result = $pdo->query("select count(id) as total from sqlstarted where username = '{$username}' and password = '{$password}'");
		$row = $result->fetchALL(PDO::FETCH_ASSOC);
		// print_r($row);
		if ($row[0]['total']>=0) {
			setcookie("username",$username,time()+7*24*3600);
			header("location:index.php");
		}else{
			echo "用户不存在的！请重新输入";
		}
	}
 ?>