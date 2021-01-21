<?php 
require_once('../helper/Query.php');
$id = $_GET['id'];
$query = "SELECT * from posts WHERE id = ". $id;
$connect = new Connection();

$conn = $connect->connect();
$result = $conn->query($query);
$post = $result->fetch_assoc();

$category_id = $_GET['category_id'];
$query2 = "SELECT * from categories WHERE id = ". $category_id;
$conn2 = $connect->connect();
$result2 = $conn2->query($query2);
$category_name = $result2->fetch_assoc();

$user_id = $_GET['user_id'];
$query3 = "SELECT * from users WHERE id = ". $user_id;
$conn3 = $connect->connect();
$result3 = $conn3->query($query3);
$user_name = $result3->fetch_assoc();
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
    <div class="container-fluid">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="posts.php" class="btn btn-primary">Back POSTs</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Content</th>
                <th>View</th>
                <th>Category</th>
                <th>User</th>
                <th>Release</th>
            </thead>
            	<tr>
                	<td><?php echo $post['id'] ?></td>
                    <td style="width: 300px"><?php echo $post['title'] ?></td>
                    <td><?php echo $post['thumbnail']; ?></td>
                    <td><p style="width:500px; height: 300px; overflow: auto;"><?php echo $post['content']?></p></td>
                    <td><?php echo $post['view_count']; ?></td>
                    <td><?php echo $category_name['name']; ?></td>
                    <td><?php echo $user_name['name']; ?></td>
                    <td><?php echo $post['created_at']; ?></td>
            	</tr>
        </table>
    </div>
</body>
</html>