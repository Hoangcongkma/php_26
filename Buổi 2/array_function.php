<?php
// $name = array ('nam' , 'cong' ,'hoan', 'hieu');
//   var_dump(in_array('cong', $name));
//     // Kết quả là true

//     var_dump(in_array('tung', $name));
//     // // Kết quả là false
//     echo "số lượng phần tử trong mảng  : " . count($name) ;

$infor = array (
	'id' => '1900328984' ,
	'name' => 'Nguyen van anh' ,

);
if (array_key_exists('id',$infor)) {
	echo "id : " . $infor['id'];

}
else {
	echo "không tồn tại thông tin này.";
}
array_push($infor , "hoang manh cong");
$del = array_pop($infor);
echo "<br>";
echo $del;
?>