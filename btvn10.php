<?php 
$n=10;
$s=0;

for ($i=0; $i <$n ; $i++) { 
	if ($i%2!=0) {
		  $s += ($i*$i);
		# code...
	}
	# code...
}
    echo ("Tổng $s= 1 /1! + 2 /2! + ....+ n / n!" . $n . " = " . $s);





?>