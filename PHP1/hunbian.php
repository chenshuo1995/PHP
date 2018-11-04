<?php 
	// $a = 'hello C';
	// $b = 'red';
	// $c = 100;
	// $d = 'green';
	$a = $_GET['cont'];
	$color = $_GET['bj'];
	$num = $_GET['wh'];
	$fontc = $_GET['fc'];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>混编</title>
 	<style>
 	#box{
 		background: <?php echo $color ?>;
 		width: <?php echo $num ?>px;
 		height: <?php echo $num ?>px;
 	}
 	</style>
 </head>
 <body>
 	<div id="box">
 		<?php echo $a ?>
 	</div>
 	<form action="hunbian.php" method="get">
 		设置宽高:	<input type="text" name= 'wh'><br>
 		设置背景：  <input type="text" name="bj"><br>
 		设置字体颜色：	<input type="text" name="fc"><br>
 		设置内容:	<input type="text" name="cont"><br>
 		<input type="submit">
 	</form>
 	<script>
 		var box = document.getElementById('box');
 		box.style.color = '<?php echo $fontc ?>';
 		
 	</script>	
 </body>
 </html>