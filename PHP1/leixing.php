<?php 
	$a = 'hello';
	//变量类型相关函数
	//1gettype()返回变量类型
	echo gettype($a)."<hr>";
	//2 is_type();确认变量是否是指定类型
	echo is_string($a);
	var_dump(is_bool($a));
	//3var_dump()获取变量的值和类型的详细信息

 ?>