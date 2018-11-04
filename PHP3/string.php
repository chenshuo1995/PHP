<?php 
	$str = ' helloworld ';
	echo 123;
	echo trim($str).'<hr>';//返回删除字符串首尾空白符的字符串;
	

	$str1 = ' abcdsd';
	echo ltrim($str1).'<hr>';//返回删除字符串前导空格的字符串 rtrim返回删除字符串后缀空白的字符串


	$str2 = '哈哈哈哈qwerrt';//一个中文占3个字节
	echo strlen($str2).'<hr>';//取得字符串长度的函数

	echo mb_strlen($str2,'utf-8').'<hr>';//该方法设置字符的编码格式,utf-8格式下 一个中文字符占一个字节

	$str3 = 'akFfkckQfffww';
	echo strtoupper($str3).'<hr>';//将字符串转为大写字符串
	echo strtolower($str3).'<hr>';//将字符串转为小写字符串

	$str4 = 'hello world';
	echo ucfirst($str4).'<hr>';//将字符串首字母改为大写
	echo ucwords($str4).'<hr>';//将字符串每个词的首字母全部改为大写

	$str5 = 'www.baidu.com?username=aa&pass=bb';
	$arr = explode('?',$str5);//将字符串根据规则拆分成数组
	print_r($arr);
	$arr1 = explode('&',$arr[1]);
	print_r($arr1);

	$str6 = 'abc哈哈';
	echo substr($str6,2,4);//截取字符并返回 参数2开始位置 参数3字符串长度 不设置默认到最后
	echo mb_substr($str6,2,3,'utf-8').'<hr>';//GB2312编码格式下 每个字符按两个字节计算
 ?>