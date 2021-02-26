<?php include('../view/header.php'); ?>
<section>
	<div class="container">
		<div class="row">
			<h2 class="alert alert-info" style="margin-top:80px;"><span class="glyphicon glyphicon-shopping-cart"></span> GIỎ HÀNG</h2>
			<?php 
				if(isset($_SESSION['admin']) || isset($_SESSION['adminh'])){
			?>
			<form action="index.php" method="post">
				<div class="table-responsive">
					<input type="hidden" name="action" value="update_cart"/>
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th>Tên sản phẩm</th>
					      <th>Giá</th>
					      <th>Số lượng</th>
					      <th>Thành tiền</th>
					      <th>Thao tác</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php foreach ($_SESSION['cart'] as $key => $item):
					  		$price = number_format($item['price']);
		                	$total = number_format($item['total']);
					    ?>
					    <tr>
					      <th scope="row"><img src="../controller/images/product/<?php echo $item['img'] ?>" width="100" height="100"><?php echo $item['name'] ?></th>
					      <td style="padding-top: 45px"><?php echo $price ?> VNĐ</td>
					      <td style="padding-top: 45px"><input type="text" name ="newqty[<?php echo $key; ?>]" value="<?php echo $item['qty']; ?>"></td>
					      <td style="padding-top: 45px"><?php echo $total; ?> VNĐ</td>
					      <td style="padding-top: 35px">	<input type="submit" class="btn btn-default" value="Sửa">
					      		<a href="?action=delete_cart&id=<?php echo $key; ?>" class="btn btn-default" style="color: #222;">Xóa</a>
					      </td>
					    </tr>
					     <?php endforeach; ?>  
					    <tr>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td style="font-weight: bold;">Tổng tiền: <?php echo get_subtotal(); ?> VNĐ</td>
					      <td></td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</form>
			<div class="pull-right" style="padding: 15px; margin-bottom: 20px;">
				<a href="?action=home" class="btn btn-success">Tiếp tục mua hàng</a>
				<a href="?action=order" class="btn btn-primary">Thanh Toán</a>
			</div>
			<?php
				}else echo "<p class='alert alert-danger'>Bạn phải đăng nhập để xem giỏ hàng</p>";
			?>
		</div>
	</div>
</section>
<?php include('../view/footer.php'); ?>