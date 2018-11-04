<?php
	
	if(!empty($_COOKIE["username"])&&!empty($_COOKIE["password"])){
		header("location:index.php");
	}


	if(!empty($_POST["username"]) && !empty($_POST["password"])){
		
		$user = $_POST["username"];
		$pass = $_POST["password"];
		
		$arr = file("user.txt");
//		echo $arr[0]."||";
//		print_r($arr);
		
		for($i=0; $i<count($arr); $i++){
			$arr1[] = explode("||", $arr[$i]);
		}
		
//		print_r($arr1);
		for($j=0; $j<count($arr1);$j++){
			$uname = explode("=>", $arr1[$j][0])[1];
//			echo $uname;
			$upass = explode("=>", $arr1[$j][1])[1];
			
			if(trim($user) == trim($uname) && trim($pass)==trim($upass)){
				setcookie("username","{$user}",time()+7*24*3600);
				setcookie("password","{$pass}",time()+7*24*3600);
				header("location:index.php");
			}else{
				echo "账号密码有误";
			}
		}
	}
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
	<form action="login.php" method="post">
		用户名：
		<input type="text" name="username" id="username" value="" /><br />
		密码：
		<input type="password" name="password" id="password" value="" /><br />
		<a href="register.php">还没账号？快去注册一个吧</a>
		<input type="submit" value="提交"/>
	</form>
</body>
</html>