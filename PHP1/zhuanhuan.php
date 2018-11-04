<?php 
	//类型转换
	$a = '1314.250abc';
	echo (int)$a;//强制转换
	echo "<br>".(float)$a;
	echo "<br>".(bool)$a;


	$b = "10";//自动转换
	// var_dump($b);
	$c = 20;
	$d = $b+$c;
	echo "<br>".$d;//当不同类型的数据相加 php会自动进行数据转换
	if ($c) {
		echo "变量c已转换为true";
	}


	$str="520.123abc";//使用转换函数强制转换：ntval()、floatval()、strval()
	echo intval($str)."<hr>";//将数据类型转换为整数类型 并返回执行结果 不会修改原有数据


	$aa = "51.1254avd";
	echo "<hr>".settype($aa,"int");//执行成功返回true 失败返回false 会对原值造成改变
 ?>