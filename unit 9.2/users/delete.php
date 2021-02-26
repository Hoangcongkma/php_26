<?php 
	require_once('../helper/Query.php');
	require_once('../helper/User.php');
	$id = $_GET['id'];
	$user = new Post();
	$users = $user->move($id);
	$status = $users;
	if ($status == true) {
		setcookie('delete',"Xóa một mục thành công", time()+2);
	}
	header("Location:user.php");
?>