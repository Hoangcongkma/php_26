<?php include'../view/header.php'; 
	$detail = new m_product();
	$product = $detail->get_productId($_GET['productid']);
	$brandname = $_GET['brandname'];
?>
	<section id="detail-pd">
		<div class="container">
			<div class="row">
				<div class="menu-detail col-xs-12">
					<ol class="breadcrumb">
					  <li><a href="../controller/index.php">Trang chủ</a></li>
					  <li><a href="#">Sản Phẩm</a></li>
					  <li class="active"><a href="#"><?php echo $brandname; ?></a></li>
					</ol>
				</div>
				<div class="col-xs-12">
					<p class="title-p"><?php echo $product[1]; ?></p>
				</div>
				<form action="?action=pay" method="post">
					<div class="col-xs-12 col-sm-4 col-md-4">
						<img src="images/product/<?php echo $product[3] ?>" class="img-thumbnail" width="358px" height="358px">
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<span class="price-p"><?php echo number_format($product[2])."Đ"; ?></span><br>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span><br><br>
						<span class="glyphicon glyphicon-check">Màn hình : <?php echo $product[4] ?></span><br>
						<span class="glyphicon glyphicon-check">Camera: <?php echo $product[5] ?></span><br>
						<span class="glyphicon glyphicon-check">Pin: <?php echo $product[6] ?></span><br>
						<span class="glyphicon glyphicon-check">HĐH: <?php echo $product[7] ?></span><br>
						<a href="?action=pay" class="btn btn-primary">Xem giỏ hàng</a>
						<a href="#"><button type="submit" class="btn btn-warning">Thanh toán</button></a>
						<input type="hidden" name="productid" value="<?php echo $product[0]; ?>">
					</div>
				</form>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h3>Thông tin thêm</h3>
					<span class="glyphicon glyphicon-ok"></span><p>Trong hộp có: Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim</p><br>
					<span class="glyphicon glyphicon-ok"></span><p>Bảo hành chính hãng: thân máy 12 tháng, pin 12 tháng, sạc 6 tháng, tai nghe 6 tháng - Xem điểm bảo hành</p><br>
					<span class="glyphicon glyphicon-ok"></span><p>Giao hàng tận nơi miễn phí trong 30 phút.</p><br>
					<span class="glyphicon glyphicon-ok"></span><p>1 đổi 1 trong 1 tháng với sản phẩm lỗi.</p>
					<h3>Khuyến mãi</h3>
					<span class="glyphicon glyphicon-gift"></span><p>Trả góp lãi suất 0% của FE Credit hoặc Home Credit trên giá niêm yết. Áp dụng đến hết ngày 31/7/2017 và không áp dụng đồng thời các khuyến mãi khác.</p><br>
					<span class="glyphicon glyphicon-gift"></span><p>Tặng thẻ nhớ 32GB</p><br>
					<span class="glyphicon glyphicon-gift"></span><p>Cài đặt miễn phí ứng dụng trả phí</p>
				</div>
				<div class="col-xs-12">
					<h3>Bình luận</h3>
					<textarea placeholder="Để lại bình luận của bạn"></textarea><br>
					<button class="btn btn-default">Gửi</button>
				</div>
			</div>
		</div>	
	</section>
<?php include'../view/footer.php'; ?>