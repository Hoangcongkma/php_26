<?php 
	// Thong so ket noi CSDL
	
require_once('../helper/Query.php');
require_once('../helper/Users.php');
// Lấy dữ liệu từ form gửi lên, gán vào biến data
     $data = $_POST;

    $data_insert = [
    	'id' => $data['id'],
      	'name' => $data['name'],
    	'password' => $data['password'],
    	'avatar' => $data['avatar'],
      'created_at' => $data['created_at']
    ];

// // Viết câu lệnh để thêm dữ liệu
//     $query = "INSERT INTO users (id,name, email,password,avatar,created_at) VALUES (' ".$data['id']." ',' ".$data['name']." ',' ".$data['email']." ' , '". $data['password']. "', '". $data['avatar']. "', '". $data['created_at']. "')";

// Thực thi câu lệnh
    $user = new User();
    $users = $user->create($data_insert);
    $status = $users;
   if ($status == true) {
   	 setcookie('add_new',"Thêm mới thành công !!!", time()+2);
   }
    header("Location: user.php");
?>