<?php 
include('../helpers/Model.php');
include_once('Category.php');
$category_object = new Category();
$category = $category_object->getOnce();

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
			width: 300px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3 class="text-center"> ---  Detail ---</h3>
		<hr>
		
		<br>
		<p><b>Name: </b><?php echo $category['name'];?> </p>
		<p><b>Thumbnail: </b></p>
		<img src="<?php echo $category['thumbnail'];?>">
		<p style="margin-top: 10px;"><b>Description: </b> <?php echo $category['description'];?> </p>
		
		<br>
		<a href="categories.php" class="btn btn-success">Back to categories list</a>
	</div>
</body>
</html>