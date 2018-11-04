<?php 
	$str = 'abcd 哈b哈哈';
	echo strchr($str,'哈').'<hr>';//从左往右 截取到最后 第三个参数布尔值 true为向左 false向右
	echo strrchr($str,'b');//从右开始匹配 截取到最后

	$str2 = 'xuchang XUEyaun';
	echo str_replace('XUEyaun','sbsbsb',$str2);//替换字符串内容 区分大小写
	echo str_ireplace('xueyaun','dddddd',$str2).'<hr>';//不区分大小写

	//加密处理
	$str3 = '许昌xueyuan';
	echo md5(md5($str3).'许昌学院');//双重md5
	echo urldecode(urlencode($str3));
 ?>