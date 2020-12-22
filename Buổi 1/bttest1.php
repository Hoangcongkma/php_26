<?php
$numb = 4;
if ($numb > 0) {
	echo "Số " . $numb . " là số dương";
	if ($numb % 2 == 0) {
		echo "Số " . $numb . " là số dương chẵn";
	} else {
		echo "Số " . $numb . " là số dương lẻ";
	}
} else if ($numb < 0) {
	echo "Số " . $numb . " là số âm";
	if ($numb % 2 == 0) {
		echo "Số " . $numb . " là số âm chẵn";
	} else {
		echo "Số " . $numb . " là số âm lẻ";
	}
} else {
	echo "Số " . $numb . " là số KHÔNG";
}



?>