<?php 
	$arr = range('a','f');

	// var_dump(array_push($arr,'g'));添加元素
	// print_r($arr);

	/*var_dump(array_pop($arr));//删除数组最后一个元素 返回删除元素
	print_r($arr);*/

	//var_dump(array_shift($arr));//删除数组第一个元素

	var_dump(array_unshift($arr,'h'));//添加元素到数组的最前面
	print_r($arr);

	$arr1 = array('a'=>'哈哈','b'=>'嘻嘻','c'=>'呵呵');
	print_r(array_keys($arr1));
	print_r(array_values($arr1));

	$arr2 = array('lol'=>'渣渣','c'=>'cc','dnf'=>'毒奶粉');
	print_r(array_merge($arr1,$arr2));
	print_r(array_change_key_case($arr2,CASE_UPPER));
	//array_merge（）：合并一个或多个数组；如果有重名的键名，该键名后面的将覆盖前面的值

	$arr3 = array('app','org','pig','dog');
	var_dump(sort($arr3));//对数组进行升序排列
	print_r($arr3);

	$str = 'abcder';
	$arr4 = explode(',',$str);//explode()返回将字符串转换成的数组
	print_r($arr4);

	$arr5 = range('a','f');
	echo implode('|',$arr5);//implode()将数组元素链接成字符串

 ?>
 