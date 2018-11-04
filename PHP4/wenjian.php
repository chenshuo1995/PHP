<?php 
	//.代表当前目录 ..代表上级目录
	//echo gettype(fopen('./test.txt','r'));
	//fopen打开指定文件后返回资源类型的数据(文件指针)
	$fh = fopen('./test.txt','r');
	//echo fread($fh,11); //fread()函数从file指定的资源中读取length个字符

	//关闭文件
	//fclose($fh);//通常在对文件执行操作之后需要通过fclose()关闭文件 防止消耗内存
	// echo fread($fh,11); 

	//用来获取指定文件的字符数大小
	/*echo filesize('./test.txt');
	echo fread($fh,filesize('test.txt'));*/

	//echo fgets($fh,11);//读取字符长度 不包含第11个字符
	echo fgets($fh);//echo fgets()不设置读取长度时 按行读取 每次一行
	echo fgets($fh);
	echo fgets($fh);
	/*while (!fgets($fh)) {
		echo fgets($fh);
	}*/

	//file()函数将文件读取到数组中，各元素由换行符分隔
	$arr = file('test.txt');
	foreach ($arr as $k => $v) {
		echo $v;
	}
	file_get_contents('test.txt');
 ?>