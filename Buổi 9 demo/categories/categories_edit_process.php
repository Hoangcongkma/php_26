<?php
require_once('../helper/Query.php');
require_once('../helper/Category.php');
	$data = $_POST;
	$data_insert = [
		'name' => $data['name'],
		'parent_id' => $data['parent_id'],
		'thumbnail' => $data['thumbnail'],
		'slug' => $data['slug'],
		'description' => $data['description'],
		'created_at' => $data['created_at']
	];
	// $query = "UPDATE categories SET name = '" . $data['name'] . "', parent_id = '".$data['parent_id']."', thumbnail = '".$data['thumbnail']."', slug = '".$data['slug']."' ,description ='". $data['description'] ."', created_at = '".$data['created_at']."'  WHERE  id =  " . $data['id'];
	$category = new Category();
	$categories = $category->fix($data_insert,$data['id']);
	$status = $categories;
	if ($status == true) {
		setcookie('update',"Đã update thông tin thành công", time()+2);
	}
    header("Location: categories.php");
?>