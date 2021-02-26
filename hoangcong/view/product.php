<?php include '../view/header.php';
	$brand = $_GET['id'];
	$brandid=$brand;
	if($brand == 1) {
		$brand="APPLE";
	}elseif($brand ==2) {
		$brand="SAMUNG";
	}elseif($brand ==3) {
		$brand="OPPO";
	}else {
		$brand="VIVO";
	}
?>
<section id="product">
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><img src="../controller/images/slideshow1.jpg" class="img-responsive banner"></div>
				<div class="col-xs-12 col-sm-12 col-md-8">
					<article>
						<div class="col-xs-12"><p class="title"><?php echo "$brand"; ?></p></div>
						<?php
							$brand = $x->get_productBrand($brandid);
							$count = 0;
							while ($set = $brand -> fetch()):
						?>
						<div class="col-xs-12 col-sm-4 col-md-4 wow bounceInUp">
							<div class="product-h">
								<img src="../controller/images/product/<?php echo $set[3]; ?>">
								<div class="ovrly"></div>
								<div class="content">
									<p>Màn hình: <?php echo $set[4]; ?></p>
									<p>Camera: <?php echo $set[5]; ?></p>
									<p>Pin: <?php echo $set[6]; ?></p>
									<p>HĐH: <?php echo $set[7]; ?></p>
								</div>
							</div>
							<p class="name-p"><?php echo $set[1];?></p>
							<span class="price"><?php echo number_format($set[2]);?>Đ</span>
							<a href="?action=productdetail&brandname=APPLE&productid=<?php echo $set[0] ?>"><button type="button" class="btn btn-success kc">Chi tiết</button></a>
							<a href="?action=addproduct&id=<?php echo $set[0] ?>"><button type="button" class="btn btn-success kc">Thêm vào giỏ</button></a>	
						</div>
						<?php endwhile;?>
						<div class="clearfix"></div>
						<div class="col-xs-12">
							<nav aria-label="Page navigation">
							  <ul class="pagination">
							    <li>
							      <a href="#" aria-label="Previous">
							        <span aria-hidden="true">&laquo;</span>
							      </a>
							    </li>
							    <li><a href="#">1</a></li>
							    <li><a href="#">2</a></li>
							    <li><a href="#">3</a></li>
							    <li>
							      <a href="#" aria-label="Next">
							        <span aria-hidden="true">&raquo;</span>
							      </a>
							    </li>
							  </ul>
							</nav>
						</div>
					</article>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<aside>
						<p class="title">THƯƠNG HIỆU</p>
						<a href="#">APPLE</a>
						<a href="#">SAMSUNG</a>
						<a href="#">OPPO</a>
						<a href="#">VIVO</a>
						<a href="#">SONY</a>
						<a href="#">HTC</a>
						<a href="#">NOKIA</a>
						<a href="#">ASUS</a>
					</aside>
					<aside>
						<p class="title">TIN KHUYẾN MÃI</p>
						<a href="#">Tin khuyến mãi 1</a>
						<a href="#">Tin khuyến mãi 2</a>
						<a href="#">Tin khuyến mãi 3</a>
						<a href="#">Tin khuyến mãi 4</a>
					</aside>
				</div>
			</div>
		</div>	
	</section>
<?php include'../view/footer.php'; ?>