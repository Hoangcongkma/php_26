<?php 
	// Thong so ket noi CSDL
	
require_once('../helper/Query.php');
require_once('../helper/Post.php');

// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

    $data_insert = [
    	'id' => $data['id'],
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
// Viết câu lệnh để thêm dữ liệu
//     $query = "INSERT INTO categories (id,name, parent_id,thumbnail,slug,description,created_at) VALUES (' ".$data['id']." ',' ".$data['name']." ',' ".$data['parent_id']." ' , '". $data['thumbnail']. "', '". $data['slug']. "', ' ".$data['description']."', '". $data['created_at']. "')";

// // Thực thi câu lệnh
//     $status = $conn->query($query);
    $post = new Post();
    $posts = $post->create($data_insert);
    $status = $posts;
   if ($status == true) {
   	 setcookie('add_new',"Thêm mới thành công !!!", time()+2);
   }
    header("Location: posts.php");
?>