<?php 
	$dsn = "mysql:host=localhost;dbname=xuchang";
	$username = "root";
	$password = "";
	$pdo = new PDO($dsn,$username,$password);
	$pdo->query("set names utf8");//设置字符编码
	//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//设置抛出异常
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);//设置静默不报错
	//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);//设置警告 显示报错 但不会影响代码执行

	/*$pdo->query("select * from sqlstarted where id=1");
	echo "123";*/

	//执行插入语句 使用exec执行sql语句时 返回受影响的行数 失败返回false 一般用来执行插入 更新 删除的操作
	/*$num = $pdo->exec("insert into sqlstarted (username,password,age,money)values('四狗','123456',20,1234)");
	var_dump($num);*/

	$result = $pdo->query("select * from sqlstarted where id>2");
	// var_dump($result);
	/*$row = $result->fetchAll(PDO::FETCH_ASSOC);//以关联形式的数组返回
	print_r($row);*/
	/*$row = $result->fetchAll(PDO::FETCH_NUM);//以索引数组形式返回*/

	/*$row = $result->fetchAll(PDO::FETCH_BOTH);//以索引数组和关联返回()
	print_r($row);*/

	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
		$arr[]=$row;
	}
	print_r($arr);//fetch 每次只能获取一条 借助循环语句获取全部
 ?>