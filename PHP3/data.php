<?php 
	echo $_SERVER['REQUEST_TIME'];
	echo date_default_timezone_get();//获取时区
	echo date('Y-m-d H:i:s').'<hr>';


	echo date_default_timezone_set('PRC');//设置时区
	echo $_SERVER['REQUEST_TIME'];
	echo date('Y-m-d H:i:s').'<hr>';

	//都可以用来获取时间戳
	echo time().'<hr>';
	echo $_SERVER['REQUEST_TIME'];

	echo date('D-H-F M-G-S-z').'<hr>';

	//获取某个日期的时间戳，或获取某个时间的时间戳
	echo strtotime('now');
	echo strtotime('2017-07-28').'<hr>';

	
	//返回当前时间戳和微秒数（如果给出参数为true时返回浮点数）
	var_dump(microtime());//微秒数 字符串
	var_dump(microtime(true).'<hr>');//小数点前面就是当前时间戳

	$arr = getdate();
	var_dump($arr);//以数组形式返回当前时间
 ?>