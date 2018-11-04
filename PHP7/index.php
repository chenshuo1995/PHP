<?php 
	include_once "pdo2.php";
	$pdo = mysqlInit("mysql","localhost","xuchang","root","");
	$result = $pdo->query("select * from sqlstarted where id>0");
	/*$row = $result->fetchAll(PDO::FETCH_ASSOC);
	print_r($row);*/
	$num = $pdo->exec("insert into sqlstarted (username,password,age,money)values('四狗','123456',20,1234)");
	var_dump($num);
 ?>