<?php
// $array = ['zent' , 'Be all you can be !'];

// // var_dump($array);
// print_r($array);

$arr_name = array (
	0 => 'zent',
	9 =>  'be all you can be !'

) ;

$arr_name['0'] = 'zent group';
$arr_name['1'] = 'zent group';
$arr_name['2'] = 2 ;
foreach ($arr_name as $key => $value) {
	if ($key == 9) {
		continue;
	}
	echo "<br>Phần tử thứ" . $key . ":" .$value;
}
// print_r($arr_name);
// echo "<br> phần tử thứ nhất là : " . $arr_name[0];
// echo "<br> phần tử thứ hai là : " . $arr_name[1];
// echo "<br> phần tử thứ ba là : " . $arr_name[2];
// // print_r($arr_name);

$array_2 = [1,3,4,'a','b','c'];
for ($i=0; $i <count($array_2) ; $i++) {
	echo "<br> phần tử thứ" . $i .":" . $array_2[$i];

	
}
var_dump($arr_name);
 ?>