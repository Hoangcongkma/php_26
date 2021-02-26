<?php
require_once('../helper/User.php'); 
	$data = $_POST;
	$data_insert = [
		'name' => $data['name'],
		'email' => $data['email'],
		'password' => $data['password'],
		'avatar' => $data['avatar'],
		'created_at' => $data['created_at']
	];
	// $data = $_POST;
	// $query = "UPDATE users SET name = '" . $data['name'] . "', email = '".$data['email']."', password = '".$data['password']."', avatar = '".$data['avatar']."' ,created_at = '".$data['created_at']."'  WHERE  id =  " . $data['id'];
	$user = new User();
	$users = $user->fix($data_insert,$data['id']);
	$status = $users;
	if ($status == true) {
		setcookie('update',"Đã update thông tin thành công", time()+2);
	}
    header("Location: user.php");
?>