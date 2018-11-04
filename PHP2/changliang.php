<?php 
	//常量定义 使用define(参数1（常量名称）,参数2（常量的值）,参数3（是否大小写敏感,默认false敏感 true不敏感）)
	define('PI','3.14',true);
	echo pi.'<hr>';
	//获取常量的函数
	echo constant('pi');

	// echo constant('abc');

	//defined函数用来检测常量是否被定义
	var_dump(define('pi'));

	//连接运算符
	$a = 'abc';
	$b = 'req';
	$a .= $b;
	echo $a.'<hr>';
	//逻辑运算符
	$c = 1;
	$d = 2;
	$e = 3;
	if ($c < $d && $d < $e) {
		echo $c;
	}
 ?>
 <script>
 	var a = 1;
 	var b = 2;
 	a += b;
 	console.log(a);
 	var c = 'hello';
 	var d = 'world';
 	c += d;
 	console.log(c);
 </script>