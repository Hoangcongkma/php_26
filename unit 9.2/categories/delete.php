<?php 
	require_once('../helper/Query.php');
	require_once('../helper/Category.php');
	$id = $_GET['id'];
	$category = new Category();
	$categories = $category->move($id);
	$status = $categories;
	if ($status == true) {
		setcookie('delete',"Xóa một mục thành công", time()+2);
	}
	header("Location:categories.php");
?>