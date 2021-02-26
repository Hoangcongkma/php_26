<?php 
	// Thong so ket noi CSDL
	
require_once('../helper/Query.php');
require_once('../helper/Posts.php');
// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

    $data_insert = [
    	'id' => $data['id'],
      'name' => $data['name'],
    	'parent_id' => $data['parent_id'],
    	'thumbnail' => $data['thumbnail'],
    	'slug' => $data['slug'],
      'description' => $data['description'],
      'created_at' => $data['created_at']
    ];
// Viết câu lệnh để thêm dữ liệu
//     $query = "INSERT INTO categories (id,name, parent_id,thumbnail,slug,description,created_at) VALUES (' ".$data['id']." ',' ".$data['name']." ',' ".$data['parent_id']." ' , '". $data['thumbnail']. "', '". $data['slug']. "', ' ".$data['description']."', '". $data['created_at']. "')";

// // Thực thi câu lệnh
//     $status = $conn->query($query);
    $category = new Category();
    $categories = $category->create($data_insert);
    $status = $categories;
   // $status = insert("categories", $data_insert); 
   if ($status == true) {
   	 setcookie('add_new',"Thêm mới thành công !!!", time()+2);
   }
    header("Location: categories.php");
?>