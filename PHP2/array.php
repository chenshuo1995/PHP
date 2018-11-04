<?php 
	//索引数组
	$arr = array('a','b','c',1,5);
	print_r($arr);

	$arr1 = array(0=>'a',1=>'c',2=>'w');
	print_r($arr1);

	echo $arr[2];

	$arr2 = array('str1' =>'a','str2' => 'b','str3' => 'c');
	print_r($arr2['str1']);

	$arr2['str4'] ='d';
	print_r($GLOBALS['arr2'] );


	// $arr3 = range(0,100);
	// print_r($arr3);

	// $arr4 = range('a','z',2);1数组元素值的起始值2数组元素值得结束值 3设置间隔
	// print_r($arr4);

	$arr5 = array(
		'student1' =>'孟非',
		'sex' =>'男',
		'age' =>12,
		);
	foreach ($arr5 as $k => $v) {
		echo "{$k}的值是{$v}<hr>";
	}
	var_dump(in_array('男',$arr5));//参数1 验证的值 参数2 验证的数组
	echo count($arr5);

	var_dump(array_key_exists('sex',$arr5));

	$arr6 = range(1,6);
	// print_r($arr6);
	print_r(array_filter($arr6,"old"));//1过滤的数组2执行过滤的回调函数
	//array_filter()会将过滤数组中的所有元素的值以参数的形式传给回调函数，如果函数返回TRUE，则 array 数组的当前值会被包含在返回的结果数组中。返回false则跳过该元素最终返回筛选出来的新数组
	function old($v){
		return $v%2==0;
	}

	print_r(array_map("add",$arr6));
	function add($v){
		return $v+100;
	}
 ?>



<!--  <script>
 	var arr = ['1','2','3'];
 	arr[0];
 	arr[1];

 </script> -->