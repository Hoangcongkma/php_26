<?php 
	require_once('connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM categories where id = $id";
	$statuc = $conn->query($query);
	header("Location:categories.php");
?>