<?php 
	$num = 12.34;
	echo ceil($num);//向上取整
	echo floor($num).'<hr>';//向下取整

	echo min(1,2,3,4,8);
	echo max(1,2,3,4,8);

	$arr = range(1,100);
	echo max($arr).'<hr>';//返回数组中最大的数


	$num1 = 123.456;
	$num2 = 789.45;
	echo round($num1);//四舍五入
	echo mt_rand(1,6).'<hr>';//取随机数 包括两头的数

	echo pow(2,3);//2的3次方   
 ?>