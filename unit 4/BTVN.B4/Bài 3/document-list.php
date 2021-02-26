<?php 
	session_start();
	$i = 0;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document List</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 class="text-center">Bài 3</h2>
		<hr>
		<a href="index.php" class="btn btn-primary">Go to Upload</a>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Download</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if (isset($_SESSION['document'])) {
						foreach ($_SESSION['document'] as $key => $value){
				?>
							<?php $i++ ?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $value['name']; ?></td>
								<td><a href="" class="btn btn-primary">Download</a></td>
								<td><a href="?id=<?php echo $value['name']; ?>" class="btn btn-danger">Delete</a></td>
							</tr>
				<?php 
						}
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>