<?php 
	session_start();
	$user = array(
		'code' => $_POST['code'],
		'name' => $_POST['name'],
		'phone' => $_POST['phone'],
		'email' => $_POST['email'],
		'gender' => $_POST['gender'],
		'address' => $_POST['address']
	);

	
	$_SESSION['info'][] = $user;
	header('Location: list.php');
 ?>