<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POST DETAILS</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		img	{
			width: 500px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3 class="text-center"> ---  Detail ---</h3>
		<hr>
		
		<br>
		<p><b>Title: </b><?php echo $post['title'];?> </p>
		<p><b>Description:</b> <?php echo $post['description']; ?></p>
		<p><b>Thumbnail: </b></p>
		<img src="<?php echo $post['thumbnail'];?>">
		<br>
		<p><b>Content:</b> <?php echo $post['content']; ?></p>
		<p><b>View count: </b> <?php echo $post['view_count']; ?></p>
		<br>
		<a href="?mod=post&act=list" class="btn btn-success">Back to Posts list</a>
	</div>
</body>
</html>