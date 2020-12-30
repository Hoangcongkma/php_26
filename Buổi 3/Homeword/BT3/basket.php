<?php
session_start();
ob_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>B3</title>
</head>
<body>
	<h1>Trang Basket</h1>
	<table border="1">
		<tr>
			<th>Tên sản phẩm</th>
			<th>Số Lượng</th>
			<th> Giá </th>
			<th>Thành Tiền</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<a href="index.html">Quay Trở Lại</a>
</body>
</html>

<?php
ob_end_flush(); 
?>



<?php
if (!$_SESSION['arMuaHang']) {
	header('location:post.php');
}
$tongTien = 0;
foreach ($_SESSION['arMuaHang']as $hang) {
	$thanhTien = $hang['gia'] * $hang['soluong'];
	$tongTien += $thanhTien;	

?>
<tr>
	<td>
		<?php 	
		echo '<a href="' . $tenhang['tenhang']. '"></a>';		
		?>
	</td>
	<td><?php
	echo $soluong['soluong'];
	?></td>
	<td>
		<?php 
		echo number_format($gia['gia'],0,",",".");
		?>VND
	</td>
	<td>
		<?php 
		echo number_format($thanhTien,0,",",".");
		?>VND
	</td>
</tr>
<?php 
}
?>
<tr>
	<td colspan="4" align="right"> Tổng tiền : 
     <?php echo number_format($tongTien,0,",",".");?>VND
	</td>
</tr>
