<?php include "../view/header.php"; ?>
<section>
	<div class="container">
		<div class="row">
			<?php 
	           // print_r($_SESSION);
	            $order_id = $_SESSION['order_id'];
	            $order = new order();
	            $result=$order->getOrder($order_id);
	            
	            //print_r($result);
	            $odi=$result['orderid'];
	            $dc=$result['date'];
	            $ctid=$result['userid'];
	            $d= new DateTime($dc);
            ?>
			<h2 class="alert alert-info" style="margin-top:80px;"><span class="glyphicon glyphicon-list-alt"></span> HÓA ĐƠN</h2>
			<p class="alert alert-dark" style="font-weight: bold;">Mã hóa đơn: <?php echo $odi; ?></p>
			<p class="alert alert-dark" style="font-weight: bold;">Số ID khách hàng: <?php echo $ctid; ?></p>
			<p class="alert alert-dark" style="font-weight: bold;">Ngày lập hóa đơn: <?php echo $dc; ?></p>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Tên sản phẩm</th>
			      <th>Giá</th>
			      <th>Số lượng</th>
			      <th>Thành tiền</th>
			    </tr>
			  </thead>
			  <?php foreach ($_SESSION['cart'] as $key => $item):
					$price = number_format($item['price']);
		            $total = number_format($item['total']);
			  ?>
			  <tbody>
			    <tr>
			      <th scope="row"><?php echo $item['name'] ?></th>
			      <td><?php echo number_format($item["price"]); ?> VNĐ</td>
			      <td><?php echo $item['qty']; ?></td>
			      <td><?php echo number_format($item["total"]); ?> VNĐ</td>
			    </tr>
			    <?php endforeach; ?> 
			    <tr>
			      <td></td>	
			      <td></td>
			      <td></td>
			      <td style="font-weight: bold;">Tổng tiền: <?php echo get_subtotal(); ?> VNĐ</td>
			    </tr> 
			  </tbody>
			</table>
		</div>
	</div>
</section>
<?php include "../view/footer.php"; ?>