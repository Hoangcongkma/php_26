<?php 
echo "<b>Tính tổng S = 1 / 1! + 2 / 2! + ....+ n / n!Tính n giai thừa</b><br><br>";
$n = 9;
$gt = 1;
$s = 0;
echo "S = ";
for($i=1;$i<=$n;$i++){
echo $i." / ".$i."!";
$gt *= $i;
$s += ($i/$gt);
if($i<$n){
echo " + ";
}
}
echo " = " . $s;
?>