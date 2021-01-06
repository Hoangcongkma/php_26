<?php 
	session_start();
	// session_destroy();
	require_once('data.php');
	$id_phone = $_GET['id'];
	$new_array = array();
	$amount = 0;
	foreach ($phones as $key => $value) {
		$new_array[$value['id']] = $value;
	}
	
	if (!isset($_SESSION['cart']) || $_SESSION['cart'] == null) {
		$new_array[$id_phone]['amount'] = 1;
		$_SESSION['cart'][$id_phone] = $new_array;
	}else {
		if (array_key_exists($id_phone, $_SESSION['cart'])) {
			$_SESSION['cart'][$id_phone]['amount'] += 1;
		}else {
			$new_array[$id_phone]['amount'] = 1;
			$_SESSION['cart'][$id_phone] = $new_array[$id_phone];
		}
	}
	// echo "<pre>";
	// print_r($_SESSION['cart']);
	header('Location: shop.php');

 ?>