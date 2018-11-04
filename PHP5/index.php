<?php
	if(empty($_COOKIE["username"])&&empty($_COOKIE["password"])){
		header("location:login.php");
	}
	echo "您已登录<hr>";
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
</head>
<body>
	用户：<?php echo $_COOKIE["username"] ?>
</body>
</html>