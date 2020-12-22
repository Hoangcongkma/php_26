<?php 
 for ($i=1; $i <= 7 ; $i++) { 
	for ($j=1; $j <= 7-$i ; $j++) { 
		echo "<span>&nbsp;&nbsp;&nbsp;";
	}
	for ($k=1; $k <= $i ; $k++) { 
		echo "#"." ";
	}
	echo "<br><br>";
 }
 ?>


