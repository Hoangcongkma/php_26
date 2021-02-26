<?php 
$number =13 ;
kiem_tra_so_le($number);

function kiem_tra_chan_le($number){
	if ($number % 2 == 0) {
		return true;
		# code...
	}
	else {
		return false;
	}
}

// if (kiem_tra_chan_le($number)) {
// 	echo "Là số chẵn";
// 	# code...
// }
// else{
// 	echo "Là số lẻ";
// }

function kiem_tra_so_le($number){
	if ($number % 2 == 0) {
		echo "là số chẵn";
	}
	else{
		echo "là số lẻ";
	}
}

function tinh_tong($a, $b, $c = false)
{
	$tong = $a + $b;
	if ($c != false) {
		$tong = $tong + $c ;

	}
	return $tong;
}
echo tinh_tong(2, 3, 6);
?>