<?php 
	 $name = $_POST['name'];
	 // echo $name;
	 $pass = $_POST['pass'];
	 // echo $pass;
	 $sex = $_POST['sex'];
	 // print_r($sex);
	 $hobby = $_POST['hobby'];
	 // print_r($hobby);
	 $city = $_POST['city'];
	 // print_r($city);
	 $myfile = $_FILES['file'];
	 // print_r($myfile);
	 if (is_uploaded_file($myfile['tmp_name'])) {
		move_uploaded_file($myfile['tmp_name'],'./2.png');
	 }else{
		echo "文件上传失败";
	 }
	 $text = $_POST['text'];
	 // print_r($text);
	 $fh = fopen('test1.txt','w+');
	 $str = '用户名:'.$name.'密码:'.$pass.'性别:'.$sex.'城市:'.$city.'照片:'.$myfile.'个人简介:'.$text;
	 foreach ($hobby as $k => $v) {
	 	fwrite($fh,'爱好:'.$v);
	 }
	 fwrite($fh,$str);
	 fclose($fh);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单</title>
</head>
<body>
	<form action="form1.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
		用户名:<input type="text" name="name"><br>
		密码:<input type="password" name="pass"><br>	
		性别:<input type="radio" value="男" name="sex">男<input type="radio" value="女" name="sex">女<br>
		爱好:<input type="checkbox" name="hobby[]" value="音乐">听音乐
			<input type="checkbox" name="hobby[]" value="电影">看电影
			<input type="checkbox" name="hobby[]" value="游戏">玩游戏<br>
		城市:<select name="city" id="">
			<option value="北京">北京</option>
			<option value="上海">上海</option>
			<option value="许昌">许昌</option>
			</select><br>
		照片:<input type="file" name="file"><br>
		个人简介:<textarea name="text" id="" cols="30" rows="10"></textarea><br>
		<input type="submit" value="提交">	
	</form>
</body>
</html>
