<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo URL_TEMPLATE_CLIENT ?>/images/bg_4.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<h1 class="mb-3 bread">Từ khóa: <?php echo $kw; ?></h1>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="row">
					<?php if ($posts == null) { ?>
						<p class="text-center"><?php echo "Không có bài viết phù hợp"; ?></p>
					<?php }else{
					foreach ($posts as $key => $value) { 
						$created_at=  date ("jS M Y", strtotime($value['created_at']));?>
					<div class="col-md-4 ftco-animate">
						<div class="blog-entry">
							<a href="?mod=client&act=detail&c=post&id=<?php echo $value['id']?>" class="img-2"><img src="<?php echo $value['thumbnail'] ?>" class="img-fluid" alt="Colorlib Template"></a>
							<div class="text pt-3">
								<p class="meta d-flex"><span class="ml-auto pl-3"><?php echo $created_at ?></span></p>
								<h3><a href="?mod=client&act=detail&c=post&id=<?php echo $value['id']?>"><?php echo $value['title'] ?></a></h3>
								<p class="mb-0"><a href="?mod=client&act=detail&c=post&id=<?php echo $value['id']?>" class="btn btn-black py-2">Xem thêm<span class="icon-arrow_forward ml-4"></span></a></p>
							</div>
						</div>
					</div>
					<?php }} ?>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="sidebar-wrap">
					<div class="sidebar-box p-4 ftco-animate">
						<form action="?mod=client&act=search&c=home" method="POST" class="search-form">
							<div class="form-group">
								<span class="icon icon-search"></span>
								<input type="text" class="form-control" placeholder="Search" name="key">
							</div>
						</form>
					</div>
					<div class="sidebar-box categories text-center ftco-animate">
						<h2 class="heading mb-4">Danh mục</h2>
						<ul class="category-image">
							<li>
								<a href="?mod=client&c=post&act=list&id=1" class="img d-flex align-items-center justify-content-center text-center" style="background-image: url(<?php echo URL_TEMPLATE_CLIENT ?>/images/category-1.jpg);">
									<div class="text">
										<h3>Đồ ăn</h3>
									</div>
								</a>
							</li>
							<li>
								<a href="?mod=client&c=post&act=list&id=2" class="img d-flex align-items-center justify-content-center text-center" style="background-image: url(<?php echo URL_TEMPLATE_CLIENT ?>/images/category-2.jpg);">
									<div class="text">
										<h3>Nhà hàng</h3>
									</div>
								</a>
							</li>
							<li>
								<a href="?mod=client&c=post&act=list&id=4" class="img d-flex align-items-center justify-content-center text-center" style="background-image: url(<?php echo URL_TEMPLATE_CLIENT ?>/images/category-2.jpg);">
									<div class="text">
										<h3>Công thức</h3>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>