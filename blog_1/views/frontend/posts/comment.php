<?php 
$data = $_POST;
			 $data_insert = [
    		'id' => $data['id'],
	    	'parent_id' => $data['parent_id'],
	    	'user_name' => $data['user_name'],
	    	'email' => $data['email'],
	        'content' => $data['content'],
	        'created_at' => $data['created_at'],
	        'post_id' => $data['post_id']
    		];
 $query = "INSERT INTO categories (id,name, parent_id,thumbnail,slug,description,created_at) VALUES (' ".$data['id']." ',' ".$data['name']." ',' ".$data['parent_id']." ' , '". $data['thumbnail']. "', '". $data['slug']. "', ' ".$data['description']."', '". $data['created_at']. "')";    		 
 ?>