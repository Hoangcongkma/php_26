<?php 
	// Thong so ket noi CSDL
require_once('connect.php');
// Câu lệnh truy vấn
$query = "SELECT * FROM categories";

// Thực thi câu lệnh

$result = $conn->query($query);

// Tạo một mảng để chứa dữ liệu

$categories = [];

while ($row = $result->fetch_assoc()) {
	$categories[] = $row;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="categories_add.php" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <?php foreach ($categories as  $value) { ?>
            	<tr>
            	<td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td>
                    <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                </td>
                <td><?php echo $value['description']; ?></td>
                <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="categories_edit.php?id=<?php echo $value['id']?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?php echo $value['id']?>" class="btn btn-danger">Delete</a>
                </td>
            	</tr>
            <?php } ?>	
        </table>
    </div>
</body>
</html>