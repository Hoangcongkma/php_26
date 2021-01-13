<?php 
	require_once "connect.php";
	$data = $_POST;

	// var_dump($data);

	$query = "UPDATE categories SET name=' ". $data['name'] ." ' ,description=' ". $data['description'] ." ' WHERE  id = " . $data['id'];

	$status = $conn->query($query);

	header("Location: categories.php");
?>

