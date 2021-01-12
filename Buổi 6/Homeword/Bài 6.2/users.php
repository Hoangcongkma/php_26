<?php 
require_once"connect.php";
$query = "SELECT * FROM user";

$result = $conn->query($query);

$users = array();

while ($row = $result->fetch_assoc()) {
	$users[]= $row;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>users</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		img {
			width: 200px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3 class="text-center">--- USERS ---</h3>
		<a href="user_add.php" class="btn btn-primary">Add New User</a>
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Avatar</th>
				<th>Password</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php 
				foreach ($users as $item){ ?>

					<tr>
						<td><?php echo $item['id']?></td>
						<td><?php echo $item['name']?></td>
						<td><?php echo $item['email']?></td>
						<td>
							<img src="https://image.thanhnien.vn/768/uploaded/minhnguyet/2021_01_12/kim-jong-un_sjeh_dsuz.jpg" width="100px" height="100px">
						</td>
						<td><?php echo $item['password']?></td>
						<td>
							<a href="user_detail.php?id= <?php echo $item['id']?>" class="btn btn-primary">Detail</a>
							<a href="user_edit.php?id=<?php echo $item['id'] ?>" class="btn btn-success">Edit</a>
							<a href="user_delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</body>
</html>