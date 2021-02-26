<?php
$bien_toan_cuc = 12 ;

function kiemtra(){
	 $bien_cuc_bo = 13 ;

     $bien_cuc_bo++;
     echo $bien_cuc_bo;

	// global $bien_toan_cuc;
	// $bien_toan_cuc++;
	// echo $bien_toan_cuc;
     return $bien_cuc_bo;
}

function kiem_tra_2()
{
	static $a = 0;
	$a++;
	if ($a > 5){
		echo "fail";

	}
	echo $a;
}
kiem_tra_2();
echo "<br>";
kiem_tra_2();
echo "<br>";
kiem_tra_2();
echo "<br>";
kiem_tra_2();
echo "<br>";
kiem_tra_2();
echo "<br>";
kiem_tra_2();
echo "<br>";
kiem_tra_2();
echo "<br>";
kiem_tra_2();

?>
