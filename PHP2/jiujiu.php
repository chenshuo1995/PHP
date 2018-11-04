<?php 
	echo "<table border = '1'>";
	for ($i=1; $i <=9 ; $i++) { 
		echo "<tr>";
		for ($j=1; $j <= $i ; $j++) { 
		
		
		echo "<td>".$j."*".$i."=".$j*$i."</td>";
		
		
		}
		echo "</tr>";
	}
	echo "</table>";

	for ($i=0; $i < 5 ; $i++) { 
		if ($i == 3) {
			// break;//终止循环
			continue;//跳过本次循环
		}
		echo "<hr>{$i}";
	}
 ?>