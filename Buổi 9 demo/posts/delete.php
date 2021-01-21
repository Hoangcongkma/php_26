<?php 
	require_once('../helper/Query.php');
	require_once('../helper/Post.php');
	$id = $_GET['id'];
	$post = new Post();
	$posts = $post->move($id);
	$status = $posts;
	if ($status == true) {
		setcookie('delete',"Xóa một mục thành công", time()+2);
	}
	header("Location:posts.php");
?>