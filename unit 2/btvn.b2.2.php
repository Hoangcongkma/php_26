<?php
$arr = array(1, 4, 2, 6, 9, 100, 4,);
$reversed = array_reverse($arr);
$preserved = array_reverse($arr, true);

print_r($arr);
echo "<br>";
print_r($reversed);
echo "<br>";
print_r($preserved);
?>