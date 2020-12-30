<?php 
session_start();
require_once('data.php');
$total = 0;
function tc_comment_out_shortcode( $amount) {
	$amount = array();

	if ( ( ( is_array( $amount ) ) && ( ! array_key_exists( 'type', $amount ) ) ) || ( ! is_array( $amount ) ) ) {
		$amount['amount'] = 'amount';
	}
	foreach ($_SESSION['cart'] as $key => $value) {
		$total += $value['amount'];
	}
}
?>

<?php
$cart = [
[
	'id' => '34567',
	'name' => 'nokia 6300',
	'amount' => '3',
	'price' => '120002'
]
] ;
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
				if (!isset($_SESSION['cart'])){
					foreach ($_SESSION['cart'] as $key => $value) {
						?>

						<tr>
							<td><?php echo $value['id']; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['amount']; ?></td>
							<td><?php echo number_format($value['price']); ?></td>
							<td><?php echo number_format($value['price']*$value['amount']); ?></td>
							<td><a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Xóa</a></td>
						</tr>
					<?php }
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