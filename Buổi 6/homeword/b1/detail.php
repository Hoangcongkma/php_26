<?php 
require_once('connect.php');
	$id = $_GET['id'];
	$query = "SELECT * from categories WHERE id = ". $id;

// Thực thi câu lệnh
$result = $conn->query($query);

// Trả về 1 bản ghi 
$category = $result->fetch_assoc();
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
        <a href="categories.php" class="btn btn-primary">Back Categories</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Parent ID</th>
                <th>Thumbnail</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Created at</th>
            </thead>
            	<tr>
            	<td><?php echo $category['id'] ?></td>
                <td><?php echo $category['name'] ?></td>
                <td><?php echo $category['parent_id'] ?></td>
                <td>
                   	<?php echo $category['thumbnail']; ?>
                </td>
                 <td><?php echo $category['slug']; ?></td>
                <td><?php echo $category['description']; ?></td>
                 <td><?php echo $category['created_at']; ?></td>
            	</tr>
        </table>
    </div>
</body>
</html>