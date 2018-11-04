<?php 
	//写入操作
	$fh = fopen('test.txt','w');
	$str = 'GG 乐捷';
	var_dump(fwrite($fh,$str,100));
	file_put_contents('test.txt','呵呵',FILE_APPEND);

	//复制文件
	//copy(source,destination)
	//将文件从 source 拷贝到 destination。如果成功则返回 TRUE，否则返回 FALSE。
	copy('test.txt','test1.txt');
	//重命名文件
	//rename('test.txt','fileTest.txt');
	rename('test1.txt','./txt/test1.txt');//移动文件

	//删除文件
	//unlink('test.txt');


	//读取目录
	/*$dh = opendir('.');
	echo readdir($dh);
	while ($d = readdir($dh)) {
		echo $d.'<hr>';
	}
	closedir($dh);*/


	print_r(scandir('.',1));//将子目录以及子文件以数组形式返回 参数二用来设置子目录和子文件的排列顺序1为倒序0为顺序 默认为0

	//删除空的文件夹
	rmdir('cc');

	//创建文件夹
	mkdir('./mkdir');
	mkdir('./mkdir/dir',0777,true);//参数1指定创建的文件夹的位置及名称 参数2指定权限 参数3是否采用递归创建子目录
	echo date('Y-m-d H:i:s',filectime('test.txt'));//取得文件的创建时间，以时间戳形式返回
	echo date('Y-m-d H:i:s',fileatime('./fangwen.php'));//取得指定文件的上次访问时间

	var_dump(file_exists('test.txt')) //检查文件或目录是否存在，如果存在返回true, 否则返回false;
	

 ?>