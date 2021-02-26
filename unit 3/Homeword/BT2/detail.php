

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 class="text-center text-uppercase">thông tin sinh viên</h2>
		<br>
		<?php
		session_start(); 
		foreach ($_SESSION['info'] as $key => $value) {
			if ($_GET['code'] == $value['code']) {
				echo "Mã sinh viên: " . $value['code'] . "<br>";
				echo 'Họ và tên: ' . $value['name'] . "<br>";
				echo "Số điện thoại: " . $value['phone']. "<br>";
				echo "Email: " . $value['email']. "<br>";
				echo "Giới tính: " . $value['gender']. "<br>";
				echo "Địa chỉ: " . $value['address']. "<br>";
			}
		}
		?>
	</div>
</body>
</html>