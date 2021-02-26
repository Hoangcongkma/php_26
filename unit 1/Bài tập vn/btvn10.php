<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bài 10</title>
</head>
<body>
	<?php
	$result="";
	$n="";
	if (isset($_POST['calculate'])) {
		$n = isset($_POST['n'])?(float)trim($_POST['n']):'';
		if ($n == '') {
			$result = "Bạn phải nhập giá trị cho n:" ;

			# code...
		}
		else if ($n <= 0) {
			$result = "Bạn Phải nhập giá trị n lớn hơn 0";

			# code...
		}

		else{
			$result = 0 ;
			for ($i=1; $i <= $n ; $i++) {
			   $ele =1 ;
			   for ($i=1; $j <= $i ; $j++) {
			   	$els =$ele * $j ;


			   	# code...
			   }
			$result = $result + ($i/$els);
			}
 		}
	}
	 ?>
	 <h2>Tính tổng của dãy : 1/1! + 2/2! + ..... + n/n!</h2>
	 <form action="" method="POST">
	 	<input type="text" name="n" placeholder="Nhập giá trị của n :">
	 	<input type="submit" name="calculate" value="Tính Tổng">
	 </form>
	 <br>
	 <?php echo "kết quả :".$result; ?>
</body>
</html>



