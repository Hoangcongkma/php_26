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
			width: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3 class="text-center"> ---  Detail ---</h3>
		<hr>
		
		<br>
		<p><b>Name: </b><?php echo $user['name'];?> </p>
		<p><b>Email: </b><?php echo $user['email'];?> </p>
		<p><b>Avatar: </b></p>
		<img src="<?php echo $user['avatar'];?>">
		<br>
		<a href="?mod=user&act=list" class="btn btn-success">Back to users list</a>
	</div>
</body>
</html>