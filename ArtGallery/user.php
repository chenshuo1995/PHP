<?php
	include_once "lib/fun.php";
	if (!checkLogin()) {
		msg(2,"请完成登录","login.php");
	}
	$user = $_SESSION["user"]["username"];

	$userId = $_SESSION["user"]["user_id"];
	$pdo = mysqlInit("mysql","localhost","artgallary","root","");
	
	$result = $pdo->query("select count(goods_id) as total from goods where user_id = '{$userId}'");
	$row = $result->fetchAll(PDO::FETCH_ASSOC);
	$page =isset($_GET["page"])&&intval($_GET["page"])?intval($_GET["page"]):1;//给$page设置默认值
	$page = max(1,$page);//限制$page不能小于1
	$pageSize = 1;//设置每页最多展示的数据条数
	$total = $row[0]['total'];//获取上传的作品总条数
	if ($total == 0) {
		msg(2,"您还未上传 请先上传","publish.php");
	}
	$totalPage = max(1,ceil($total/$pageSize));//总页数
	$page = $page > $totalPage ? $totalPage : $page;//$page不能超过最大页数
	$offset = ($page - 1) * $pageSize;//偏移量  
	$result = $pdo->query("select goods_id,goodsname,des,pic from goods where user_id = '{$userId}' order by goods_id asc limit {$offset},{$pageSize}");
	$goods = $result->fetchAll(PDO::FETCH_ASSOC);
	/*print_r($goods);
	die;*/
	//调用函数 拼接按钮结构并返回字符串
	$pages = pages($totalPage,$page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>M-GALLARY|首页</title>
    <link rel="stylesheet" type="text/css" href="static/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="static/css/index.css"/>
</head>
<body>
<div class="header">
    <div class="logo f1">
        <img src="static/img/logo.png">
    </div>
    <div class="auth fr">
        <ul>
            <li><span>管理员：<?php echo $user; ?>	</span></li>
            <li><a href="publish.php">发布</a></li>
            <li><a href="login_out.php">退出</a></li>
        </ul>
    </div>
</div>
<div class="content">
    <div class="banner">
        <img class="banner-img" src="static/img/welcome.png" width="732px" height="372px" alt="图片描述">
    </div>
    <div class="img-content">
        <ul>
        	<?php foreach($goods as $v): ?>
            <li>
                <img class="img-li-fix" src="<?php echo $v["pic"]; ?>" alt="">
                <div class="info">
                    <a href="detail.php?goodsId=<?php echo $v["goods_id"]; ?>"><h3 class="img_title"><?php echo $v["goodsname"]; ?></h3></a>
                    <p><?php echo $v["des"]; ?></p>
                    <div class="btn">
                        <a href="edit.php?goodsId=<?php echo $v["goods_id"]  ; ?>" class="edit">编辑</a>
                        <a href="delete.php?goodsId=<?php echo $v["goods_id"]  ; ?>" class="del">删除</a>
                    </div>
                </div>
            </li>
        	<?php endforeach; ?>
        </ul>
    </div>
    <?php echo $pages; ?>
    <!-- <div class="page-nav">
        <ul>
            <li><a href="#">首页</a></li>
            <li><a href="#">上一页</a></li>
            <li><span class="curr-page">1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>...</li>
            <li><a href="#">98</a></li>
            <li><a href="#">99</a></li>
            <li><a href="#">下一页</a></li>
            <li><a href="#">尾页</a></li>
        </ul>
    </div> -->
</div>

<div class="footer">
    <p><span>Art-GALLARY</span>©2017 GOOD GOOD STUDY DAY DAY UP</p>
</div>
</body>

</html>
