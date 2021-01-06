<?php 
	session_start();
	foreach ($_SESSION['cart'] as $key => $value) {
		if ($_GET['id'] == $value['id']) {
			unset($_SESSION['cart'][$key]);
		}
	}
	
	header('Location: cart.php')

 ?>