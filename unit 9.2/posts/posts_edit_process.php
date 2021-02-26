<?php
require_once('../helper/Post.php'); 
	$data = $_POST;
	$data_insert = [
		'title' => $data['title'],
		'description' => $data['description'],
		'thumbnail' => $data['thumbnail'],
		'content' => $data['content'],
		'slug' => $data['slug'],
		'view_count' => $data['view_count'],
		'category_id' => $data['category_id'],
		'user_id' => $data['user_id'],
		'created_at' => $data['created_at']
	];
	// $query = "UPDATE categories SET name = '" . $data['name'] . "', parent_id = '".$data['parent_id']."', thumbnail = '".$data['thumbnail']."', slug = '".$data['slug']."' ,description ='". $data['description'] ."', created_at = '".$data['created_at']."'  WHERE  id =  " . $data['id'];
	$post = new Post();
	$posts = $post->fix($data_insert,$data['id']);
	$status = $posts;
	if ($status == true) {
		setcookie('update',"Đã update thông tin thành công", time()+2);
	}
    header("Location: posts.php");
?>