<?php 
	//1 echo 输出一个字符串
	echo "这里是输出的字符串";
	//2 print_r();
	$str = '哈哈哈哈';
	$arr = array("a" => "123","b" =>"456","c"=>"789");
	print_r($str);
	//echo $arr;//echo 不能输出数组
	print_r($arr);//print_r()可以输出字符串 也可以输出数组
	//3 var_dump()
	var_dump($arr);//字符串数组都可以 输出数组的信息更加详细数据类型 字符串长度
	//4die()
	echo "die之前";
	die("这里是终止代码执行");
	echo "die之后";
 ?>