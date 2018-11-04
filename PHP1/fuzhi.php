<?php 
	$a = 1;
	$b = &$a;//传纸赋值
	// echo $a."<hr>".$b;
	$b = 2;
	echo $a."<hr>".$b;
	//可变变量
	$h = "hello";
	$w = "world";
	$$h = "哈哈";
	echo $hello;
	
 ?>