<?php 
//超全局变量在php文件内部的任何作用域下都可以直接访问
	//1 $GLOBALS[index] 的数组中存储了所有全局变量
	$a =123;
	function aa(){
		global $a;
		// echo $a;
		echo $GLOBALS['a'];
	}
	aa();

	//（2）$_SERVER 这种超全局变量保存关于报头、路径和脚本位置的信息。

	 print_r($_SERVER);

	//3PHP $_REQUEST 用于收集 HTML 表单提交的数据。
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
	echo $user."<hr>".$pass;
	
	//4 PHP $_POST 广泛用于收集提交 method="post" 的 HTML 表单后的表单数据。$_POST 也常用于传递变量。

	//PHP $_GET 也可用于收集提交 HTML 表单 (method=“get”) 之后的表单数据。
 ?>
