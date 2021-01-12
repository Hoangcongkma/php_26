<?php 
	require_once "connect.php";
	$id = $_GET['id'];
	// var_dump($id);

	$query = "DELETE from user where id = $id";

	$status = $conn->query($query);

	header("Location: users.php");

?>