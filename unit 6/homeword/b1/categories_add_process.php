<?php 
	// Thong so ket noi CSDL
	
require_once('connect.php');

$conn = new mysqli($servername, $username, $password, $dbname);

// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

// Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO categories (id,name, parent_id,thumbnail,slug,description,created_at) VALUES (' ".$data['id']." ',' ".$data['name']." ',' ".$data['parent_id']." ' , '". $data['thumbnail']. "', '". $data['slug']. "', ' ".$data['description']."', '". $data['created_at']. "')";

// Thực thi câu lệnh
    $status = $conn->query($query);
   if ($status == true) {
   	 setcookie('add_new',"Thêm mới thành công !!!", time()+2);
   }
    header("Location: categories.php");
?>