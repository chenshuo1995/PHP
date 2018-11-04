<?php 
	$str = '123abc';
	$num = 123;
	$fl = 123.123;
	$bool = true;
	// echo gettype($str);
	// echo gettype($num);
	// echo gettype($fl);
	// echo gettype($bool);
	// 变量类型的检测
	var_dump(is_string($str));
	// null类型
	# 1 当声明了变量 并没有赋值 $a
	# 2 当使用了unset()函数释放变量后 该变量的值为null
	$c = '释放';
	$d = 'bianliang'
	var_dump($c);
	unset($c,$d);//多个变量释放 逗号隔开
	var_dump($c);
 ?>