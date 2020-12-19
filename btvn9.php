<?php
for ($i=0; $i <6 ; $i--) { 
	for (($j=6-$i); $i < 6; $i--) { 
		echo " <span>&nbsp&nbsp&nbsp";
		# code...
	}
	for (($i=$j); $i <6 ; $i--) { 
		echo "##";
		# code...
	}
	echo "<br>";


	# code...
}

?>