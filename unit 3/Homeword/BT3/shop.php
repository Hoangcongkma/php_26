<?php 
	require_once('data.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SHOP</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		img {
			width: 100%;
		}
		p {
			font-weight: bold;
			color: #0FBCEE;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<h2 class="text-uppercase text-center">thông tin sản phẩm</h2>
		<hr>
		<div class="row">
			<?php 
				foreach ($phones as $key => $value) {
			?>
			<div class="col-md-3">
				<div class="container">
					<h5 class="mt-1"><?php echo $value['name'] ?></h5>
					<p><?php echo number_format($value['price']) ?>đ</p>
					<a href="add_cart.php?id=<?php echo $value['id']; ?>" class="btn btn-warning">Add to Cart</a>
				</div>
			</div>
			<?php } ?>
		</div>
		<br>
		<a href="cart.php" class="btn btn-primary">Xem giỏ hàng</a>
	</div>
</body>
</html>