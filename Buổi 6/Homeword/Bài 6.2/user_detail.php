<?php 
	require_once "connect.php";

	$id = $_GET['id'];

	$query = "SELECT * from user WHERE id=" . $id;

	$result = $conn->query($query);
    $user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>USER DETAILS</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		img	{
			width: 500px;
			height: 300px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3 class="text-center"> ---  Detail ---</h3>
		<hr>
		
		<br>
		<p>
			<b>Name: </b>
				<?php echo $user['name'];?> </p>
			<p><b>avatar: </b></p>
				<img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
				<p style="margin-top: 10px;">
			<b>Email: </b> 
				<?php echo $user['email'];?> </p>
			<br>
			<b>Password </b> 
				<?php echo $user['password'];?> </p>
			<br>
		<a href="categories.php" class="btn btn-success">Quay trở lại</a>
	</div>
</body>
</html>