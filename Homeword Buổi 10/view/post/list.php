<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>POSTS</title>
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
		<h3 class="text-center">--- POSTS ---</h3>
		<a href="?mod=post&act=create" class="btn btn-primary">Add New Post</a>
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Title</th>
				<th>Thumbnail</th>
				<th>Description</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php foreach ($posts as $key => $value) { ?>
					<tr>
						<td><?php echo $value['id'] ?></td>
						<td><?php echo $value['title'] ?></td>
						<td>
							<img src="<?php echo $value['thumbnail']; ?>" alt="">
						</td>
						<td><?php echo $value['description'] ?></td>
						<td>
							<a href="?mod=post&act=detail&id= <?php echo $value['id']?>" class="btn btn-primary">Detail</a>
							<a href="?mod=post&act=edit&id= <?php echo $value['id']?>" class="btn btn-success">Edit</a>
							<a href="?mod=post&act=destroy&id= <?php echo $value['id']?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>