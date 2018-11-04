<?php 
	include_once "lib/fun.php";
	$pdo = mysqlInit("mysql","localhost","artgallary","root","");
	$result = $pdo->query("select goods_id,pic,goodsname,des from goods");
	$goods = $result ->fetchAll(PDO::FETCH_ASSOC);
	// print_r($goods);die;

	$result = $pdo->query("select count(goods_id) as total from goods");
	$row = $result ->fetchAll(PDO::FETCH_ASSOC);
	$total = $row[0]['total'];
	$pageSize = 1;
	$totalPage = max(1,ceil($total/$pageSize));


	$page =isset($_GET["page"])&&intval($_GET["page"])?intval($_GET["page"]):1;
	$page = max(1,$page);
	$offset = ($page - 1) * $pageSize;

	$result = $pdo->query("select goods_id,pic,goodsname,des from goods order by goods_id asc limit {$offset},{$pageSize}");
	$goods = $result->fetchAll(PDO::FETCH_ASSOC);
	
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
            <li><a href="login.php">登录</a></li>
            <li><a href="register.php">注册</a></li>
        </ul>
    </div>
</div>
<div class="content">
    <div class="banner">
        <img class="banner-img" src="static/img/welcome.png" width="732px" height="372px" alt="图片描述">
    </div>
    <div class="img-content">
        <ul>
        	<?php foreach ($goods as $v): ?>
            <li>
                <img class="img-li-fix" src="<?php echo $v["pic"]; ?>" alt="">
                <div class="info">
                    <a href="detail.php?goodsId=<?php echo $v["goods_id"]; ?>"><h3 class="img_title"><?php echo $v["goodsname"]; ?></h3></a>
                    <p><?php echo $v["des"]; ?></p>
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
