<?php 
	include_once 'lib/fun.php';
	if (checkLogin()) {
		msg(1,"已登录","user.php");
	}
	if (!empty($_POST['username'])) {
		$pdo = mysqlInit("mysql","localhost","artgallary","root","");
		$username = mysql_real_escape_string(trim($_POST['username']));
		$password = mysql_real_escape_string(trim($_POST['password']));
		$result=$pdo->query("select * from user where username = '{$username}'");
		$row = $result->fetchALL(PDO::FETCH_ASSOC);
		if (count($row) > 0) {
			$password = md5(md5($password)."gallary");
			if ($password === $row[0]["password"]) {
				/*setcookie("username",$username,time()+7*24*3600);
				setcookie("userId",$row[0]["user_id"],time()+7*24*3600);*/
				// $_SESSION["user"] = $row[0];
				msg(1,"登录成功","user.php");
			}else{
				msg(2,"密码错误"); 
			}
		}else{
			msg(2,"用户名错误 请重新输入");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>M-GALLARY|用户登录</title>
    <link type="text/css" rel="stylesheet" href="static/css/common.css">
    <link type="text/css" rel="stylesheet" href="static/css/add.css">
    <link rel="stylesheet" type="text/css" href="static/css/login.css">
</head>
<body>
<div class="header">
    <div class="logo f1">
        <img src="static/img/logo.png">
    </div>
    <div class="auth fr">
        <ul>
            <li><a href="login.html">登录</a></li>
            <li><a href="register.html">注册</a></li>
        </ul>
    </div>
</div>
<div class="content">
    <div class="center">
        <div class="center-login">
            <div class="login-banner">
                <a href="#"><img src="static/img/login_banner.png" alt=""></a>
            </div>
            <div class="user-login">
                <div class="user-box">
                    <div class="user-title">
                        <p>用户登录</p>
                    </div>
                    <form class="login-table" name="login" id="login-form" action="login.php" method="post">
                        <div class="login-left">
                            <label class="username">用户名</label>
                            <input type="text" class="yhmiput" name="username" placeholder="Username" id="username">
                        </div>
                        <div class="login-right">
                            <label class="passwd">密码</label>
                            <input type="password" class="yhmiput" name="password" placeholder="Password" id="password">
                        </div>
                        <div class="login-btn">
                            <button type="submit">登录</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <p><span>Art-GALLARY</span>©2017 GOOD GOOD STUDY DAY DAY UP</p>
</div>
 
</body>
<script src="static/js/jquery-1.10.2.min.js"></script>
<script src="static/js/layer/layer.js"></script>
<script>
    $(function () {
        $('#login-form').submit(function () {
            var username = $('#username').val(),
                password = $('#password').val();
            if (username == '' || username.length <= 0) {
                layer.tips('用户名不能为空', '#username', {time: 2000, tips: 2});
                $('#username').focus();
                return false;
            }

            if (password == '' || password.length <= 0) {
                layer.tips('密码不能为空', '#password', {time: 2000, tips: 2});
                $('#password').focus();
                return false;
            }

            return true;
        })

    })
</script>
</html>