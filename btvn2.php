<?php
$a="";
$b="";
if (isset($_POST['calculate']))
{
	$a=isset($_POST['a'])?(float)trim($_POST['a']):'';
	 $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
    // Bước 2: Validate thông tin và tính toán
    if ($a == ''){
        $result = 'Bạn chua nhập số a';
    }
    else if ($b == ''){
        $result = 'Bạn chưa nhập số b';
    }
    else if ($a == 0){
        $result = 'Số a phải nhập khác 0';
    }
    else {
        $result = -($b) / $a;
    }
}


?>
