<?php 
	$myfile = $_FILES['file'];

	print_r($myfile);
	if (is_uploaded_file($myfile['tmp_name'])) {
		move_uploaded_file($myfile['tmp_name'],$myfile['name']);
		echo "http://localhost/PHP/PHP5/".$myfile['name'];
	}else{
		echo "非法上传";
	}
 ?>