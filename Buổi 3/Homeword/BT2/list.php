<?php 
	session_start();
	// session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 class="text-center text-uppercase">danh sách người dùng</h2>
		<hr>
		<a href="add.php" class="btn btn-primary">Add</a>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Mã sinh viên</th>
					<th>Họ tên</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$i = 0;
					foreach ($_SESSION['info'] as $value) {
						$i++;
				 ?>
				 <tr>
				 	<td><?php echo $i; ?></td>
				 	<td><?php echo $value['code']; ?></td>
				 	<td><?php echo $value['name']; ?></td>
				 	<td>
				 		<a href="detail.php?code=<?php echo $value['code']; ?>" class="btn btn-primary">Detail</a>
				 		<a href="delete.php?code=<?php echo $value['code']; ?>" class="btn btn-danger">Delete</a>
				 	</td>
				 </tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>