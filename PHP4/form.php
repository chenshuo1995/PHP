<?php 
	$hobby = $_POST['hobby'];
	// echo $hobby;
	print_r($hobby);

	$myfile = $_FILES['file'];
	// print_r($myfile);

	if (is_uploaded_file($myfile['tmp_name'])) {
		move_uploaded_file($myfile['tmp_name'],'./1.png');
	}else{
		echo "文件上传失败";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单</title>
</head>
<body>
	<form action="form.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
		请选择图片: <input type="file" name="file">
		爱好:<br>	
		游戏:<input type="checkbox" name="hobby[]" value="游戏"><br>
		运动:<input type="checkbox" name="hobby[]" value="运动"><br>
		音乐:<input type="checkbox" name="hobby[]" value="音乐"><br>
		<br>
		<input type="submit" value="提交">
	</form>
</body>
</html>