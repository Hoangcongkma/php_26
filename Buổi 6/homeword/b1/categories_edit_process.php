<?php
require_once('connect.php'); 
	$data = $_POST;
	$query = "UPDATE categories SET name = '" . $data['name'] . "', parent_id = '".$data['parent_id']."', thumbnail = '".$data['thumbnail']."', slug = '".$data['slug']."' ,description ='". $data['description'] ."', created_at = '".$data['created_at']."'  WHERE  id =  " . $data['id'];
	$status = $conn->query($query);
	if ($status == true) {
		setcookie('update',"Đã update thông tin thành công", time()+2);
	}
    header("Location: categories.php");
?>