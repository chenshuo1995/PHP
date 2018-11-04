<?php 
	//自定义函数
	$a = 1;
	$b = 2;
	$c = 3;
	// 1传址方式 函数内部修改 会直接影响对应变量在外部作用域的值
	// 2传值方式 函数内部修改参数值 不会影响变量在外部作用域的值
	function fn(&$v1,$v2,$v3){


		echo $v1.'<hr>';
		$v1 = 100;
		$v2 = 100;
		// global $a;
		// $a = 2;

		//超全局变量
		/*$GLOBALS['a'] = 2;
		echo $GLOBALS['b'].'<hr>';*/
		// echo $a;
	}
	fn($a,$b,$c);
	// echo $a;

	function jing(){
		static $c = 1;//创建静态变量并赋值，始终保存在内存中 普通变量是执行后销毁
		$c++;
		echo $c;
	}
	jing();
	jing();
	jing();
 ?>