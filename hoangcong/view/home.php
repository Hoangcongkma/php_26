<?php
	include('../view/header.php');
	include '../view/slideshow.php';
?>
<section>
	<article>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h3 class="title" style="border-left: 9px solid #8bc34a;"><a href="#">APPLE</a></h3>
					<div class="row">
						<?php
							$brand1 = $x->get_productBrand(1);
							$count1 = 0;
							while ($set = $brand1 -> fetch()):
								$count1++;
								if ($count1==5) {
									break;
								}
						?>
						<div class="col-xs-12 col-sm-6 col-md-3 wow bounceInUp">
							<a href="?action=productdetail&brandname=APPLE&productid=<?php echo $set[0] ?>"><div class="product-h">
								<img src="images/product/<?php echo $set[3];?>">
								<div class="ovrly"></div>
								<div class="content">
									<p>Màn hình: <?php echo $set[4]; ?></p>
									<p>Camera: <?php echo $set[5]; ?></p>
									<p>Pin: <?php echo $set[6]; ?></p>
									<p>HĐH: <?php echo $set[7]; ?></p>
								</div>
							</div></a>
							<p class="name-p"><?php echo $set[1];?></p>
							<span class="price"><?php echo number_format($set[2]);?>Đ</span>
							<a href="?action=productdetail&brandname=APPLE&productid=<?php echo $set[0] ?>"><button type="button" class="btn btn-success kc">Chi tiết</button></a>
							<a href="?action=addproduct&id=<?php echo $set[0] ?>"><button type="button" class="btn btn-success kc">Thêm vào giỏ</button></a>
						</div>
						<?php endwhile;?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h3 class="title" style="border-left: 9px solid #d9534f;"><a href="#">SAMSUNG</a></h3>
					<div class="row">
						<?php
							$brand2 = $x->get_productBrand(2);
							$count2 = 0;
							while ($set = $brand2 -> fetch()):
								$count2++;
								if ($count2==5) {
									break;
								}
						?>
						<div class="col-xs-12 col-sm-6 col-md-3 wow bounceInUp">
							<a href="?action=productdetail&brandname=APPLE&productid=<?php echo $set[0] ?>"><div class="product-h">
								<img src="images/product/<?php echo $set[3];?>">
								<div class="ovrly"></div>
								<div class="content">
									<p>Màn hình: <?php echo $set[4]; ?></p>
									<p>Camera: <?php echo $set[5]; ?></p>
									<p>Pin: <?php echo $set[6]; ?></p>
									<p>HĐH: <?php echo $set[7]; ?></p>
								</div>
							</div></a>
							<p class="name-p"><?php echo $set[1];?></p>
							<span class="price"><?php echo number_format($set[2]);?>Đ</span>
							<a href="?action=productdetail&brandname=SAMSUNG&productid=<?php echo $set[0] ?>"><button type="button" class="btn btn-danger kc">Chi tiết</button></a>
							<a href="?action=addproduct&id=<?php echo $set[0] ?>"><button type="button" class="btn btn-danger kc">Thêm vào giỏ</button></a>
						</div>
						<?php endwhile;?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h3 class="title" style="border-left: 9px solid #f0ad4e;"><a href="#">OPPO</a></h3>
					<div class="row">
						<?php
							$brand3 = $x->get_productBrand(3);
							$count3 = 0;
							while ($set = $brand3 -> fetch()):
								$count3++;
								if ($count3==5) {
									break;
								}
						?>
						<div class="col-xs-12 col-sm-6 col-md-3 wow bounceInUp">
							<a href="?action=productdetail&brandname=APPLE&productid=<?php echo $set[0] ?>"><div class="product-h">
								<img src="images/product/<?php echo $set[3];?>">
								<div class="ovrly"></div>
								<div class="content">
									<p>Màn hình: <?php echo $set[4]; ?></p>
									<p>Camera: <?php echo $set[5]; ?></p>
									<p>Pin: <?php echo $set[6]; ?></p>
									<p>HĐH: <?php echo $set[7]; ?></p>
								</div>
							</div></a>
							<p class="name-p"><?php echo $set[1];?></p>
							<span class="price"><?php echo number_format($set[2]);?>Đ</span>
							<a href="?action=productdetail&brandname=OPPO&productid=<?php echo $set[0] ?>"><button type="button" class="btn btn-warning kc">Chi tiết</button></a>
							<a href="?action=addproduct&id=<?php echo $set[0] ?>"><button type="button" class="btn btn-warning kc">Thêm vào giỏ</button></a>
						</div>
						<?php endwhile;?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h3 class="title" style="border-left: 9px solid #337ab7;"><a href="#">VIVO</a></h3>
					<div class="row">
						<?php
							$brand4 = $x->get_productBrand(4);
							$count4 = 0;
							while ($set = $brand4 -> fetch()):
								$count4++;
								if ($count4==5) {
									break;
								}
						?>
						<div class="col-xs-12 col-sm-6 col-md-3 wow bounceInUp">
							<a href="?action=productdetail&brandname=APPLE&productid=<?php echo $set[0] ?>"><div class="product-h">
								<img src="images/product/<?php echo $set[3];?>">
								<div class="ovrly"></div>
								<div class="content">
									<p>Màn hình: <?php echo $set[4]; ?></p>
									<p>Camera: <?php echo $set[5]; ?></p>
									<p>Pin: <?php echo $set[6]; ?></p>
									<p>HĐH: <?php echo $set[7]; ?></p>
								</div>
							</div></a>
							<p class="name-p"><?php echo $set[1];?></p>
							<span class="price"><?php echo number_format($set[2]);?>Đ</span>
							<a href="?action=productdetail&brandname=VIVO&productid=<?php echo $set[0] ?>"><button type="button" class="btn btn-primary kc">Chi tiết</button></a>
							<a href="?action=addproduct&id=<?php echo $set[0] ?>"><button type="button" class="btn btn-primary kc">Thêm vào giỏ</button></a>
						</div>
						<?php endwhile;?>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>
<?php include('../view/footer.php'); ?>