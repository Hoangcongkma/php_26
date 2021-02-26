<?php 
include ('../helpers/Model.php');
include_once('User.php');
$user_object = new User();
$user = $user_object->getOnce();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DevMind - Education And Technology Group</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 align="center">Edit User</h3>
		<hr>
		<form action="user_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $user['id']; ?>" name="id">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="" value="<?php echo $user['name']; ?>" name="name">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" value="<?php echo $user['email']; ?>" name="email">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" id="" value="<?php echo $user['password']; ?>" name="password">
			</div>
			<div class="form-group">
				<label for="">Avatar</label>
				<input type="text" class="form-control" id="" value="<?php echo $user['avatar']; ?>" name="avatar">
			</div>
			<button type="submit" class="btn btn-primary">Edit</button>
		</form>
	</div>
</body>
</html>