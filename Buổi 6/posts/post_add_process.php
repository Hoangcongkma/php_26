
<?php 
	// print_r($_POST);

	$servername = "localhost";

	$username = "root";

	$password = "";

	$dbname = "php_26";

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

// Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO posts (Title, Description,  ) 
    VALUES ('".$data['Description']."','".$data['Title']."')";


// Thực thi câu lệnh
    $status = $conn->query($query);

    // var_dump($status);

    header("Location: posts.php");

?>
 
