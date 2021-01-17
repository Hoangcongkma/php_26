<?php 
	require_once "connect.php";
	// Lấy dữ liệu từ form gửi lên, gán vào biến data
   $data = $_POST;
   // var_dump($data);
   // die();
   $query = "UPDATE user SET name=' ". $data['name'] ." ' ,email=' ". $data['email'] ." ' ,
   password =' ". $data['password'] ." '; 
   WHERE  id = " . $data['id'] ;


	

	$status = $conn->query($query);

	header("Location: users.php");
?>