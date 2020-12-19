<?php
$i = 1;
$tong = 0;
while ($i <= 10) {
  if ($i % 2 == 0) {
    $tong = $tong + $i;
  }
  $i = $i + 1;
}
echo "Tổng các số chẵn là $tong";
 ?>
