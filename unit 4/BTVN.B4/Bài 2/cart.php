<?php 
	session_start();
	require_once('data.php');
	$total = 0;
	foreach ($_SESSION['cart'] as $key => $value) {
		$total += $value['amount'];
	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>CART</title>
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
 <body>
 	<div class="container">
 		<h2 class="text-center text-uppercase">thông tin giỏ hàng</h2>
 		<hr>
 		<a href="shop.php" class="btn btn-primary">Về trang mua sắm</a>
 		<table class="table">
 			<thead>
 				<tr>
 					<th>Mã sản phẩm</th>
 					<th>Tên sản phẩm</th>
 					<th>Số lượng</th>
 					<th>Đơn giá</th>
 					<th>Thành tiền</th>
 					<th>Hành động</th>
 				</tr>
 			</thead>
 			<tbody>
 			<?php 
 				if (isset($_SESSION['cart'])) {
 					 foreach ($_SESSION['cart'] as $key => $value) {
 						?>
		 					<tr>
		 						<td><?php echo $value['id']; ?></td>
		 						<td><?php echo $value['name']; ?></td>
		 						<td><?php echo $value['amount']; ?></td>
		 						<td><?php echo number_format($value['price']); ?></td>
		 						<td><?php 
		 						echo number_format($value['price']*$value['amount']); 
		 						?></td>
		 						<td><a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Xóa</a></td>
		 					</tr>
 						<?php 
 					} 
 				}
 			?>
 			</tbody>
 			<!-- <tfoot>
 				<tr>
 					<th colspan="4" class="text-center">Tổng</th>
 					<th></th>
 					<th></th>
 				</tr>
 			</tfoot>	 -->
 		</table>
 	</div>
 </body>
 </html>