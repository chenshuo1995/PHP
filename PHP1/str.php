<?php 
	$str1 = '哈哈';
	$str2 = "{$str1} 嘻嘻";//此处不能单引号
	echo $str2;
	// 注意 在php中 双引号内可以识别变量 变量名从$最大限度地往后匹配 通常为了限定变量名的匹配范围 需要给变量名加花括号
	$str3 = '$str1嘻嘻';//单引号不能识别


	$str4 = "欢迎'渣渣'";
	echo $str4;

	$str5 ='呼呼"晃晃"' ;
	echo $str5;

	$str6 = "比比\"佳佳\"";
	echo $str6;
	// 字符串中如果包含引号（单双引号）特殊字符，可以对字符串使用单双引号交替的方法 避免字符串别截断 也可以使用转义字符

	$str7=<<<str
	离离原上草,
	一岁一枯荣,
	野火烧不尽,
	春风吹又生.
str;
	echo "$str7";

	$str8 = 'ZZ';
	$str9 = 'HH';
	echo $str8.$str9;//在php中 字符拼接使用"."

	var_dump(isset($str10));//判断变量是否存在
	var_dump(empty($str9));//判断变量是否为空
?>