<?php 
	require_once('connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM categories where id = ".$id;
	$status = $conn->query($query);
	if ($status == true) {
		setcookie('delete',"Xóa một mục thành công", time()+2);
	}
	header("Location:categories.php");
?>