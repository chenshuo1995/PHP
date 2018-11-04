<?php 
	if (empty($_COOKIE['username'])) {
		header("location:login1.php");
	}
	echo "成功！！";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h1>用户名: <?php echo $_COOKIE['username'] ?></h1>
 </body>
 </html>